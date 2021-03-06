<?php 
namespace Neos\Neos\Routing;

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
use Neos\Flow\Mvc\Routing\DynamicRoutePart;
use Neos\Flow\Persistence\PersistenceManagerInterface;
use Neos\Utility\Arrays;

/**
 * A route part handler for finding nodes specifically in the website's frontend.
 *
 * @Flow\Scope("singleton")
 */
class BackendModuleArgumentsRoutePartHandler_Original extends DynamicRoutePart
{
    /**
     * @Flow\Inject
     * @var PersistenceManagerInterface
     */
    protected $persistenceManager;

    /**
     * Iterate through the configured modules, find the matching module and set
     * the route path accordingly
     *
     * @param array $value (contains action, controller and package of the module controller)
     * @return boolean
     */
    protected function resolveValue($value)
    {
        if (is_array($value)) {
            $this->value = isset($value['@action']) && $value['@action'] !== 'index' ? $value['@action'] : '';
            if ($this->value !== '' && isset($value['@format'])) {
                $this->value .= '.' . $value['@format'];
            }
            $exceedingArguments = array();
            foreach ($value as $argumentKey => $argumentValue) {
                if (substr($argumentKey, 0, 1) !== '@' && substr($argumentKey, 0, 2) !== '__') {
                    $exceedingArguments[$argumentKey] = $argumentValue;
                }
            }
            if ($exceedingArguments !== array()) {
                $exceedingArguments = Arrays::removeEmptyElementsRecursively($exceedingArguments);
                $exceedingArguments = $this->persistenceManager->convertObjectsToIdentityArrays($exceedingArguments);
                $queryString = http_build_query(array($this->name => $exceedingArguments), null, '&');
                if ($queryString !== '') {
                    $this->value .= '?' . $queryString;
                }
            }
        }

        return true;
    }
}

#
# Start of Flow generated Proxy code
#
namespace Neos\Neos\Routing;

use Doctrine\ORM\Mapping as ORM;
use Neos\Flow\Annotations as Flow;

/**
 * A route part handler for finding nodes specifically in the website's frontend.
 * @\Neos\Flow\Annotations\Scope("singleton")
 */
class BackendModuleArgumentsRoutePartHandler extends BackendModuleArgumentsRoutePartHandler_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     */
    public function __construct()
    {
        if (get_class($this) === 'Neos\Neos\Routing\BackendModuleArgumentsRoutePartHandler') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Neos\Routing\BackendModuleArgumentsRoutePartHandler', $this);
        if ('Neos\Neos\Routing\BackendModuleArgumentsRoutePartHandler' === get_class($this)) {
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
  'persistenceManager' => 'Neos\\Flow\\Persistence\\PersistenceManagerInterface',
  'splitString' => 'string',
  'parameters' => 'Neos\\Flow\\Mvc\\Routing\\Dto\\RouteParameters',
  'name' => 'string',
  'value' => 'mixed',
  'defaultValue' => 'mixed',
  'isOptional' => 'boolean',
  'lowerCase' => 'boolean',
  'options' => 'array',
);
        $result = $this->Flow_serializeRelatedEntities($transientProperties, $propertyVarTags);
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     */
    public function __wakeup()
    {
        if (get_class($this) === 'Neos\Neos\Routing\BackendModuleArgumentsRoutePartHandler') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Neos\Routing\BackendModuleArgumentsRoutePartHandler', $this);

        $this->Flow_setRelatedEntities();
        $this->Flow_Proxy_injectProperties();
    }

    /**
     * Autogenerated Proxy Method
     */
    private function Flow_Proxy_injectProperties()
    {
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Persistence\PersistenceManagerInterface', 'Neos\Flow\Persistence\Doctrine\PersistenceManager', 'persistenceManager', '8a72b773ea2cb98c2933df44c659da06', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Persistence\PersistenceManagerInterface'); });
        $this->Flow_Injected_Properties = array (
  0 => 'persistenceManager',
);
    }
}
# PathAndFilename: C:\Bitnami\neos-4.1.7-neu\apps\neos\htdocs\Packages\Application\Neos.Neos\Classes\Routing\BackendModuleArgumentsRoutePartHandler.php
#