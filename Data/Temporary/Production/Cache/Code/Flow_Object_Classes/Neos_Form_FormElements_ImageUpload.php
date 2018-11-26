<?php 
namespace Neos\Form\FormElements;

/*
 * This file is part of the Neos.Form package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\Flow\Property\PropertyMappingConfiguration;
use Neos\Flow\Property\TypeConverter\PersistentObjectConverter;
use Neos\Form\Core\Model\AbstractFormElement;
use Neos\Form\Core\Runtime\FormRuntime;
use Neos\Media\Domain\Model\Image;
use Neos\Media\TypeConverter\AssetInterfaceConverter;
use Neos\Media\Validator\ImageTypeValidator;

/**
 * An image upload form element
 */
class ImageUpload_Original extends AbstractFormElement
{
    /**
     * @return void
     */
    public function initializeFormElement()
    {
        /** @var PropertyMappingConfiguration $propertyMappingConfiguration */
        $propertyMappingConfiguration = $this->getRootForm()->getProcessingRule($this->getIdentifier())->getPropertyMappingConfiguration();

        $propertyMappingConfiguration->setTypeConverterOption(PersistentObjectConverter::class, PersistentObjectConverter::CONFIGURATION_CREATION_ALLOWED, true);
        $propertyMappingConfiguration->setTypeConverterOption(AssetInterfaceConverter::class, AssetInterfaceConverter::CONFIGURATION_ONE_PER_RESOURCE, true);
        $propertyMappingConfiguration->allowProperties('resource');

        $this->setDataType(Image::class);
    }

    /**
     * Add ImageTypeValidator just before submitting so that the "allowedTypes" can be changed at runtime
     *
     * @param FormRuntime $formRuntime
     * @param mixed $elementValue
     * @return void
     */
    public function onSubmit(FormRuntime $formRuntime, &$elementValue)
    {
        $imageTypeValidator = new ImageTypeValidator(array('allowedTypes' => $this->properties['allowedTypes']));
        $this->addValidator($imageTypeValidator);
    }
}

#
# Start of Flow generated Proxy code
#
namespace Neos\Form\FormElements;

use Doctrine\ORM\Mapping as ORM;
use Neos\Flow\Annotations as Flow;

/**
 * An image upload form element
 */
class ImageUpload extends ImageUpload_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait;


    /**
     * Autogenerated Proxy Method
     * @param string $identifier The FormElement's identifier
     * @param string $type The Form Element Type
     * @throws IdentifierNotValidException
     */
    public function __construct()
    {
        $arguments = func_get_args();
        if (!array_key_exists(0, $arguments)) throw new \Neos\Flow\ObjectManagement\Exception\UnresolvedDependenciesException('Missing required constructor argument $identifier in class ' . __CLASS__ . '. Note that constructor injection is only support for objects of scope singleton (and this is not a singleton) – for other scopes you must pass each required argument to the constructor yourself.', 1296143788);
        if (!array_key_exists(1, $arguments)) throw new \Neos\Flow\ObjectManagement\Exception\UnresolvedDependenciesException('Missing required constructor argument $type in class ' . __CLASS__ . '. Note that constructor injection is only support for objects of scope singleton (and this is not a singleton) – for other scopes you must pass each required argument to the constructor yourself.', 1296143788);
        call_user_func_array('parent::__construct', $arguments);
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
  'identifier' => 'string',
  'type' => 'string',
  'properties' => 'array',
  'parentRenderable' => 'Neos\\Form\\Core\\Model\\Renderable\\CompositeRenderableInterface',
  'label' => 'string',
  'renderingOptions' => 'array',
  'rendererClassName' => 'string',
  'index' => 'integer',
);
        $result = $this->Flow_serializeRelatedEntities($transientProperties, $propertyVarTags);
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     */
    public function __wakeup()
    {

        $this->Flow_setRelatedEntities();
    }
}
# PathAndFilename: C:\Bitnami\neos-4.1.7-neu\apps\neos\htdocs\Packages\Application\Neos.Form\Classes\FormElements\ImageUpload.php
#