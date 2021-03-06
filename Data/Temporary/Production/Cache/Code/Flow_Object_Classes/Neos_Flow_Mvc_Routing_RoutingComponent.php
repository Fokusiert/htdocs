<?php 
namespace Neos\Flow\Mvc\Routing;

/*
 * This file is part of the Neos.Flow package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\Flow\Annotations as Flow;
use Neos\Flow\Http\Component\ComponentContext;
use Neos\Flow\Http\Component\ComponentInterface;
use Neos\Flow\Mvc\Exception\NoMatchingRouteException;
use Neos\Flow\Mvc\Routing\Dto\RouteParameters;
use Neos\Flow\Mvc\Routing\Dto\RouteContext;

/**
 * A routing HTTP component
 */
class RoutingComponent_Original implements ComponentInterface
{
    /**
     * @Flow\Inject
     * @var RouterInterface
     */
    protected $router;

    /**
     * @var array
     */
    protected $options;

    /**
     * @param array $options
     */
    public function __construct(array $options = [])
    {
        $this->options = $options;
    }

    /**
     * Resolve a route for the request
     *
     * Stores the resolved route values in the ComponentContext to pass them
     * to other components. They can be accessed via ComponentContext::getParameter(outingComponent::class, 'matchResults');
     *
     * @param ComponentContext $componentContext
     * @return void
     */
    public function handle(ComponentContext $componentContext)
    {
        $parameters = $componentContext->getParameter(RoutingComponent::class, 'parameters');
        if ($parameters === null) {
            $parameters = RouteParameters::createEmpty();
        }
        $routeContext = new RouteContext($componentContext->getHttpRequest(), $parameters);

        try {
            $matchResults = $this->router->route($routeContext);
        } catch (NoMatchingRouteException $exception) {
            $matchResults = null;
        }

        $componentContext->setParameter(RoutingComponent::class, 'matchResults', $matchResults);
    }
}

#
# Start of Flow generated Proxy code
#
namespace Neos\Flow\Mvc\Routing;

use Doctrine\ORM\Mapping as ORM;
use Neos\Flow\Annotations as Flow;

/**
 * A routing HTTP component
 */
class RoutingComponent extends RoutingComponent_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     * @param array $options
     */
    public function __construct()
    {
        $arguments = func_get_args();
        call_user_func_array('parent::__construct', $arguments);
        if ('Neos\Flow\Mvc\Routing\RoutingComponent' === get_class($this)) {
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
  'router' => 'Neos\\Flow\\Mvc\\Routing\\RouterInterface',
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

        $this->Flow_setRelatedEntities();
        $this->Flow_Proxy_injectProperties();
    }

    /**
     * Autogenerated Proxy Method
     */
    private function Flow_Proxy_injectProperties()
    {
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Mvc\Routing\RouterInterface', 'Neos\Flow\Mvc\Routing\Router', 'router', 'b8451b8b6e61365bd8e0174cff1f010d', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Mvc\Routing\RouterInterface'); });
        $this->Flow_Injected_Properties = array (
  0 => 'router',
);
    }
}
# PathAndFilename: C:\Bitnami\neos-4.1.7-neu\apps\neos\htdocs\Packages\Framework\Neos.Flow\Classes\Mvc\Routing\RoutingComponent.php
#