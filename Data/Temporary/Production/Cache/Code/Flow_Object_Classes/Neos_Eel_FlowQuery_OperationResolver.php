<?php 
namespace Neos\Eel\FlowQuery;

/*
 * This file is part of the Neos.Eel package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\Flow\Annotations as Flow;
use Neos\Flow\ObjectManagement\ObjectManagerInterface;
use Neos\Flow\Reflection\ReflectionService;

/**
 * FlowQuery Operation Resolver
 *
 * @Flow\Scope("singleton")
 */
class OperationResolver_Original implements OperationResolverInterface
{
    /**
     * @var ObjectManagerInterface
     * @Flow\Inject
     */
    protected $objectManager;

    /**
     * @var ReflectionService
     * @Flow\Inject
     */
    protected $reflectionService;

    /**
     * 2-dimensional array of registered operations:
     * shortOperationName => priority => operation class name
     *
     * @var array
     */
    protected $operations = [];

    /**
     * associative array of registered final operations:
     * shortOperationName => shortOperationName
     *
     * @var array
     */
    protected $finalOperationNames = [];

    /**
     * Initializer, building up $this->operations and $this->finalOperationNames
     */
    public function initializeObject()
    {
        $operationsAndFinalOperationNames = static::buildOperationsAndFinalOperationNames($this->objectManager);
        $this->operations = $operationsAndFinalOperationNames[0];
        $this->finalOperationNames = $operationsAndFinalOperationNames[1];
    }

    /**
     * @param ObjectManagerInterface $objectManager
     * @return array Array of sorted operations and array of final operation names
     * @throws FlowQueryException
     * @Flow\CompileStatic
     */
    public static function buildOperationsAndFinalOperationNames($objectManager)
    {
        $operations = [];
        $finalOperationNames = [];

        $reflectionService = $objectManager->get(ReflectionService::class);
        $operationClassNames = $reflectionService->getAllImplementationClassNamesForInterface(OperationInterface::class);
        /** @var $operationClassName OperationInterface */
        foreach ($operationClassNames as $operationClassName) {
            $shortOperationName = $operationClassName::getShortName();
            $operationPriority = $operationClassName::getPriority();
            $isFinalOperation = $operationClassName::isFinal();

            if (!isset($operations[$shortOperationName])) {
                $operations[$shortOperationName] = [];
            }

            if (isset($operations[$shortOperationName][$operationPriority])) {
                throw new FlowQueryException(sprintf('Operation with name "%s" and priority %s is already defined in class %s, and the class %s has the same priority and name.', $shortOperationName, $operationPriority, $operations[$shortOperationName][$operationPriority], $operationClassName), 1332491678);
            }
            $operations[$shortOperationName][$operationPriority] = $operationClassName;

            if ($isFinalOperation) {
                $finalOperationNames[$shortOperationName] = $shortOperationName;
            }
        }

        foreach ($operations as &$operation) {
            krsort($operation, SORT_NUMERIC);
        }

        return [$operations, $finalOperationNames];
    }

    /**
     * @param string $operationName
     * @return boolean true if $operationName is final
     */
    public function isFinalOperation($operationName)
    {
        return isset($this->finalOperationNames[$operationName]);
    }

    /**
     * Resolve an operation, taking runtime constraints into account.
     *
     * @param string      $operationName
     * @param array|mixed $context
     * @throws FlowQueryException
     * @return OperationInterface the resolved operation
     */
    public function resolveOperation($operationName, $context)
    {
        if (!isset($this->operations[$operationName])) {
            throw new FlowQueryException('Operation "' . $operationName . '" not found.', 1332491837);
        }

        foreach ($this->operations[$operationName] as $operationClassName) {
            /** @var OperationInterface $operation */
            $operation = $this->objectManager->get($operationClassName);
            if ($operation->canEvaluate($context)) {
                return $operation;
            }
        }
        throw new FlowQueryException('No operation which satisfies the runtime constraints found for "' . $operationName . '".', 1332491864);
    }

    /**
     * @param string $operationName
     * @return boolean
     */
    public function hasOperation($operationName)
    {
        return isset($this->operations[$operationName]);
    }
}

#
# Start of Flow generated Proxy code
#
namespace Neos\Eel\FlowQuery;

use Doctrine\ORM\Mapping as ORM;
use Neos\Flow\Annotations as Flow;

/**
 * FlowQuery Operation Resolver
 * @\Neos\Flow\Annotations\Scope("singleton")
 */
class OperationResolver extends OperationResolver_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     */
    public function __construct()
    {
        if (get_class($this) === 'Neos\Eel\FlowQuery\OperationResolver') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Eel\FlowQuery\OperationResolver', $this);
        if (get_class($this) === 'Neos\Eel\FlowQuery\OperationResolver') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Eel\FlowQuery\OperationResolverInterface', $this);
        if ('Neos\Eel\FlowQuery\OperationResolver' === get_class($this)) {
            $this->Flow_Proxy_injectProperties();
        }

        $isSameClass = get_class($this) === 'Neos\Eel\FlowQuery\OperationResolver';
        if ($isSameClass) {
            $this->initializeObject(1);
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
  'objectManager' => 'Neos\\Flow\\ObjectManagement\\ObjectManagerInterface',
  'reflectionService' => 'Neos\\Flow\\Reflection\\ReflectionService',
  'operations' => 'array',
  'finalOperationNames' => 'array',
);
        $result = $this->Flow_serializeRelatedEntities($transientProperties, $propertyVarTags);
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     */
    public function __wakeup()
    {
        if (get_class($this) === 'Neos\Eel\FlowQuery\OperationResolver') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Eel\FlowQuery\OperationResolver', $this);
        if (get_class($this) === 'Neos\Eel\FlowQuery\OperationResolver') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Eel\FlowQuery\OperationResolverInterface', $this);

        $this->Flow_setRelatedEntities();
        $this->Flow_Proxy_injectProperties();
            $result = NULL;

        $isSameClass = get_class($this) === 'Neos\Eel\FlowQuery\OperationResolver';
        $classParents = class_parents($this);
        $classImplements = class_implements($this);
        $isClassProxy = array_search('Neos\Eel\FlowQuery\OperationResolver', $classParents) !== false && array_search('Doctrine\ORM\Proxy\Proxy', $classImplements) !== false;

        if ($isSameClass || $isClassProxy) {
            $this->initializeObject(2);
        }
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     */
    private function Flow_Proxy_injectProperties()
    {
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\ObjectManagement\ObjectManagerInterface', 'Neos\Flow\ObjectManagement\ObjectManager', 'objectManager', '9524ff5e5332c1890aa361e5d186b7b6', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\ObjectManagement\ObjectManagerInterface'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Reflection\ReflectionService', 'Neos\Flow\Reflection\ReflectionService', 'reflectionService', '464c26aa94c66579c050985566cbfc1f', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Reflection\ReflectionService'); });
        $this->Flow_Injected_Properties = array (
  0 => 'objectManager',
  1 => 'reflectionService',
);
    }

    /**
     * Autogenerated Proxy Method
     * @param ObjectManagerInterface $objectManager
     * @return array Array of sorted operations and array of final operation names
     * @throws FlowQueryException
     * @\Neos\Flow\Annotations\CompileStatic
     */
    static public function buildOperationsAndFinalOperationNames($objectManager)
    {

return array (
  0 => 
  array (
    'cacheLifetime' => 
    array (
      1 => 'Neos\\ContentRepository\\Eel\\FlowQueryOperations\\CacheLifetimeOperation',
    ),
    'children' => 
    array (
      100 => 'Neos\\ContentRepository\\Eel\\FlowQueryOperations\\ChildrenOperation',
      1 => 'Neos\\Eel\\FlowQuery\\Operations\\Object\\ChildrenOperation',
    ),
    'closest' => 
    array (
      100 => 'Neos\\ContentRepository\\Eel\\FlowQueryOperations\\ClosestOperation',
    ),
    'context' => 
    array (
      1 => 'Neos\\ContentRepository\\Eel\\FlowQueryOperations\\ContextOperation',
    ),
    'filter' => 
    array (
      100 => 'Neos\\ContentRepository\\Eel\\FlowQueryOperations\\FilterOperation',
      1 => 'Neos\\Eel\\FlowQuery\\Operations\\Object\\FilterOperation',
    ),
    'find' => 
    array (
      100 => 'Neos\\ContentRepository\\Eel\\FlowQueryOperations\\FindOperation',
    ),
    'has' => 
    array (
      100 => 'Neos\\ContentRepository\\Eel\\FlowQueryOperations\\HasOperation',
    ),
    'nextAll' => 
    array (
      0 => 'Neos\\ContentRepository\\Eel\\FlowQueryOperations\\NextAllOperation',
    ),
    'next' => 
    array (
      100 => 'Neos\\ContentRepository\\Eel\\FlowQueryOperations\\NextOperation',
    ),
    'nextUntil' => 
    array (
      0 => 'Neos\\ContentRepository\\Eel\\FlowQueryOperations\\NextUntilOperation',
    ),
    'parent' => 
    array (
      100 => 'Neos\\ContentRepository\\Eel\\FlowQueryOperations\\ParentOperation',
    ),
    'parents' => 
    array (
      100 => 'Neos\\Neos\\Eel\\FlowQueryOperations\\ParentsOperation',
      0 => 'Neos\\ContentRepository\\Eel\\FlowQueryOperations\\ParentsOperation',
    ),
    'parentsUntil' => 
    array (
      100 => 'Neos\\Neos\\Eel\\FlowQueryOperations\\ParentsUntilOperation',
      0 => 'Neos\\ContentRepository\\Eel\\FlowQueryOperations\\ParentsUntilOperation',
    ),
    'prevAll' => 
    array (
      0 => 'Neos\\ContentRepository\\Eel\\FlowQueryOperations\\PrevAllOperation',
    ),
    'prev' => 
    array (
      100 => 'Neos\\ContentRepository\\Eel\\FlowQueryOperations\\PrevOperation',
    ),
    'prevUntil' => 
    array (
      0 => 'Neos\\ContentRepository\\Eel\\FlowQueryOperations\\PrevUntilOperation',
    ),
    'property' => 
    array (
      100 => 'Neos\\ContentRepository\\Eel\\FlowQueryOperations\\PropertyOperation',
      1 => 'Neos\\Eel\\FlowQuery\\Operations\\Object\\PropertyOperation',
    ),
    'siblings' => 
    array (
      100 => 'Neos\\ContentRepository\\Eel\\FlowQueryOperations\\SiblingsOperation',
    ),
    'add' => 
    array (
      1 => 'Neos\\Eel\\FlowQuery\\Operations\\AddOperation',
    ),
    'count' => 
    array (
      1 => 'Neos\\Eel\\FlowQuery\\Operations\\CountOperation',
    ),
    'first' => 
    array (
      1 => 'Neos\\Eel\\FlowQuery\\Operations\\FirstOperation',
    ),
    'get' => 
    array (
      1 => 'Neos\\Eel\\FlowQuery\\Operations\\GetOperation',
    ),
    'is' => 
    array (
      1 => 'Neos\\Eel\\FlowQuery\\Operations\\IsOperation',
    ),
    'last' => 
    array (
      1 => 'Neos\\Eel\\FlowQuery\\Operations\\LastOperation',
    ),
    'remove' => 
    array (
      1 => 'Neos\\Eel\\FlowQuery\\Operations\\RemoveOperation',
    ),
    'slice' => 
    array (
      1 => 'Neos\\Eel\\FlowQuery\\Operations\\SliceOperation',
    ),
    'sort' => 
    array (
      1 => 'Neos\\Neos\\Eel\\FlowQueryOperations\\SortOperation',
    ),
    'neosUiDefaultNodes' => 
    array (
      100 => 'Neos\\Neos\\Ui\\FlowQueryOperations\\NeosUiDefaultNodesOperation',
    ),
    'neosUiFilteredChildren' => 
    array (
      100 => 'Neos\\Neos\\Ui\\FlowQueryOperations\\NeosUiFilteredChildrenOperation',
    ),
    'search' => 
    array (
      100 => 'Neos\\Neos\\Ui\\FlowQueryOperations\\SearchOperation',
    ),
  ),
  1 => 
  array (
    'cacheLifetime' => 'cacheLifetime',
    'property' => 'property',
    'count' => 'count',
    'get' => 'get',
    'is' => 'is',
  ),
);
    }
}
# PathAndFilename: C:\Bitnami\neos-4.1.7-neu\apps\neos\htdocs\Packages\Framework\Neos.Eel\Classes\FlowQuery\OperationResolver.php
#