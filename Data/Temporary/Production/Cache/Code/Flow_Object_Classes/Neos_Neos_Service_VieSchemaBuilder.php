<?php 
namespace Neos\Neos\Service;

/*
 * This file is part of the Neos.Neos package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\Flow\Annotations as Flow;
use Neos\ContentRepository\Domain\Model\NodeType;
use Neos\ContentRepository\Domain\Service\NodeTypeManager;

/**
 * Generate a schema in JSON format for the VIE dataTypes validation, necessary
 * when using nodes as semantic types.
 *
 * Example schema: http://schema.rdfs.org/all.json
 *
 * @Flow\Scope("singleton")
 */
class VieSchemaBuilder_Original
{
    /**
     * @var NodeTypeManager
     * @Flow\Inject
     */
    protected $nodeTypeManager;

    /**
     * @var array
     */
    protected $properties = array();

    /**
     * @var array
     */
    protected $types = array();

    /**
     * @var object
     */
    protected $configuration;

    /**
     * @var array
     */
    protected $superTypeConfiguration = array();

    /**
     * Converts the nodes types to a fully structured array
     * in the same structure as the schema to be created.
     *
     * The schema also includes abstract node types for the full inheritance information in VIE.
     *
     * @return object
     */
    public function generateVieSchema()
    {
        if ($this->configuration !== null) {
            return $this->configuration;
        }

        $nodeTypes = $this->nodeTypeManager->getNodeTypes();
        foreach ($nodeTypes as $nodeTypeName => $nodeType) {
            $this->readNodeTypeConfiguration($nodeTypeName, $nodeType);
        }

        unset($this->types['typo3:unstructured']);

        foreach ($this->types as $nodeTypeName => $nodeTypeDefinition) {
            $this->types[$nodeTypeName]->subtypes = $this->getAllSubtypes($nodeTypeName);
            $this->types[$nodeTypeName]->ancestors = $this->getAllAncestors($nodeTypeName);

            $this->removeUndeclaredTypes($this->types[$nodeTypeName]->supertypes);
            $this->removeUndeclaredTypes($this->types[$nodeTypeName]->ancestors);
        }

        foreach ($this->properties as $property => $propertyConfiguration) {
            if (isset($propertyConfiguration->domains) && is_array($propertyConfiguration->domains)) {
                foreach ($propertyConfiguration->domains as $domain) {
                    if (preg_match('/TYPO3\.Neos\.NodeTypes:.*Column/', $domain)) {
                        $this->properties[$property]->ranges = array_keys($this->types);
                    }
                }
            }
        }

        // Convert the Neos.Neos:ContentCollection element to support content-collection
        // TODO Move to node type definition
        if (isset($this->types['typo3:Neos.Neos:ContentCollection'])) {
            $this->addProperty('typo3:Neos.Neos:ContentCollection', 'typo3:content-collection', array());
            $this->types['typo3:Neos.Neos:ContentCollection']->specific_properties[] = 'typo3:content-collection';
            $this->properties['typo3:content-collection']->ranges = array_keys($this->types);
        }

        $this->configuration = (object) array(
            'types' => (object) $this->types,
            'properties' => (object) $this->properties,
        );
        return $this->configuration;
    }

    /**
     * @param string $nodeTypeName
     * @param NodeType $nodeType
     * @return void
     */
    protected function readNodeTypeConfiguration($nodeTypeName, NodeType $nodeType)
    {
        $nodeTypeConfiguration = $nodeType->getFullConfiguration();
        $this->superTypeConfiguration['typo3:' . $nodeTypeName] = array();
        /** @var NodeType $superType */
        foreach ($nodeType->getDeclaredSuperTypes() as $superType) {
            $this->superTypeConfiguration['typo3:' . $nodeTypeName][] = 'typo3:' . $superType->getName();
        }

        $nodeTypeProperties = array();

        if (isset($nodeTypeConfiguration['properties'])) {
            foreach ($nodeTypeConfiguration['properties'] as $property => $propertyConfiguration) {
                // TODO Make sure we can configure the range for all multi column elements to define what types a column may contain
                $this->addProperty('typo3:' . $nodeTypeName, 'typo3:' . $property, $propertyConfiguration);
                $nodeTypeProperties[] = 'typo3:' . $property;
            }
        }

        $metadata = array();
        $metaDataPropertyIndexes = array('ui');
        foreach ($metaDataPropertyIndexes as $propertyName) {
            if (isset($nodeTypeConfiguration[$propertyName])) {
                $metadata[$propertyName] = $nodeTypeConfiguration[$propertyName];
            }
        }
        if ($nodeType->isAbstract()) {
            $metadata['abstract'] = true;
        }

        $this->types['typo3:' . $nodeTypeName] = (object) array(
            'label' => $nodeType->getLabel() ?: $nodeTypeName,
            'id' => 'typo3:' . $nodeTypeName,
            'properties' => array(),
            'specific_properties' => $nodeTypeProperties,
            'subtypes' => array(),
            'metadata' => (object)$metadata,
            'supertypes' => $this->superTypeConfiguration['typo3:' . $nodeTypeName],
            'url' => 'http://www.typo3.org/ns/2012/Flow/Packages/Neos/Content/',
            'ancestors' => array(),
            'comment' => '',
            'comment_plain' => ''
        );
    }

    /**
     * Adds a property to the list of known properties
     *
     * @param string $nodeType
     * @param string $propertyName
     * @param array $propertyConfiguration
     * @return void
     */
    protected function addProperty($nodeType, $propertyName, array $propertyConfiguration)
    {
        if (isset($this->properties[$propertyName])) {
            $this->properties[$propertyName]->domains[] = $nodeType;
        } else {
            $propertyLabel = isset($propertyConfiguration['ui']['label']) ? $propertyConfiguration['ui']['label'] : $propertyName;
            $this->properties[$propertyName] = (object) array(
                'comment' => $propertyLabel,
                'comment_plain' => $propertyLabel,
                'domains' => array($nodeType),
                'id' => $propertyName,
                'label' => $propertyName,
                'ranges' => array(),
                'min' => 0,
                'max' => -1
            );
        }
    }

    /**
     * Cleans up all types which are not know in given configuration array
     *
     * @param array $configuration
     * @return void
     */
    protected function removeUndeclaredTypes(array &$configuration)
    {
        foreach ($configuration as $index => $type) {
            if (!isset($this->types[$type])) {
                unset($configuration[$index]);
            }
        }
    }

    /**
     * Return all sub node types of a node type (recursively)
     *
     * @param string $type
     * @return array
     */
    protected function getAllSubtypes($type)
    {
        $subTypes = array();

        foreach ($this->superTypeConfiguration as $nodeType => $superTypes) {
            if (in_array($type, $superTypes)) {
                if (isset($this->types[$nodeType])) {
                    $subTypes[] = $nodeType;

                    $nodeTypeSubTypes = $this->getAllSubtypes($nodeType);
                    foreach ($nodeTypeSubTypes as $nodeTypeSubType) {
                        if (!in_array($nodeTypeSubType, $subTypes)) {
                            $subTypes[] = $nodeTypeSubType;
                        }
                    }
                }
            }
        }

        return $subTypes;
    }

    /**
     * Return all ancestors of a node type
     *
     * @param string $type
     * @return array
     */
    protected function getAllAncestors($type)
    {
        if (!isset($this->superTypeConfiguration[$type])) {
            return array();
        }
        $ancestors = $this->superTypeConfiguration[$type];

        foreach ($this->superTypeConfiguration[$type] as $currentSuperType) {
            if (isset($this->types[$currentSuperType])) {
                $currentSuperTypeAncestors = $this->getAllAncestors($currentSuperType);
                $ancestors = array_merge($ancestors, $currentSuperTypeAncestors);
            }
        }

        return $ancestors;
    }
}

#
# Start of Flow generated Proxy code
#
namespace Neos\Neos\Service;

use Doctrine\ORM\Mapping as ORM;
use Neos\Flow\Annotations as Flow;

/**
 * Generate a schema in JSON format for the VIE dataTypes validation, necessary
 * when using nodes as semantic types.
 * 
 * Example schema: http://schema.rdfs.org/all.json
 * @\Neos\Flow\Annotations\Scope("singleton")
 */
class VieSchemaBuilder extends VieSchemaBuilder_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     */
    public function __construct()
    {
        if (get_class($this) === 'Neos\Neos\Service\VieSchemaBuilder') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Neos\Service\VieSchemaBuilder', $this);
        if ('Neos\Neos\Service\VieSchemaBuilder' === get_class($this)) {
            $this->Flow_Proxy_injectProperties();
        }
    }

    /**
     * Autogenerated Proxy Method
     */
    public function __sleep()
    {
            $result = NULL;
        $this->Flow_Object_PropertiesToSerialize = array();

        $transientProperties = array (
);
        $propertyVarTags = array (
  'nodeTypeManager' => 'Neos\\ContentRepository\\Domain\\Service\\NodeTypeManager',
  'properties' => 'array',
  'types' => 'array',
  'configuration' => 'object',
  'superTypeConfiguration' => 'array',
);
        $result = $this->Flow_serializeRelatedEntities($transientProperties, $propertyVarTags);
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     */
    public function __wakeup()
    {
        if (get_class($this) === 'Neos\Neos\Service\VieSchemaBuilder') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Neos\Service\VieSchemaBuilder', $this);

        $this->Flow_setRelatedEntities();
        $this->Flow_Proxy_injectProperties();
    }

    /**
     * Autogenerated Proxy Method
     */
    private function Flow_Proxy_injectProperties()
    {
        $this->Flow_Proxy_LazyPropertyInjection('Neos\ContentRepository\Domain\Service\NodeTypeManager', 'Neos\ContentRepository\Domain\Service\NodeTypeManager', 'nodeTypeManager', 'e525e2ecb65f7f9731d6537ddecd16d4', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\ContentRepository\Domain\Service\NodeTypeManager'); });
        $this->Flow_Injected_Properties = array (
  0 => 'nodeTypeManager',
);
    }
}
# PathAndFilename: C:\Bitnami\neos-4.1.7-neu\apps\neos\htdocs\Packages\Application\Neos.Neos\Classes\Service\VieSchemaBuilder.php
#