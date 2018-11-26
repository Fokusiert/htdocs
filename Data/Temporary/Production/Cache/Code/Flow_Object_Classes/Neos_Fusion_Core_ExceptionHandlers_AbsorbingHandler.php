<?php 
namespace Neos\Fusion\Core\ExceptionHandlers;

/*
 * This file is part of the Neos.Fusion package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\Flow\Annotations as Flow;

/**
 * Renders the element as an empty string
 */
class AbsorbingHandler_Original extends AbstractRenderingExceptionHandler
{
    /**
     * @Flow\Inject
     * @var \Neos\Flow\Log\SystemLoggerInterface
     */
    protected $systemLogger;

    /**
     * Returns an empty string
     *
     * @param string $fusionPath path causing the exception
     * @param \Exception $exception exception to handle
     * @param integer $referenceCode
     * @return string
     */
    protected function handle($fusionPath, \Exception $exception, $referenceCode)
    {
        $this->systemLogger->log('Absorbed Exception: ' . $exception->getMessage(), LOG_DEBUG, array('fusionPath' => $fusionPath, 'referenceCode' => $referenceCode), 'Neos.Fusion', \Neos\Fusion\Core\ExceptionHandlers\AbsorbingHandler::class);
        return '';
    }

    /**
     * The absorbing handler is meant to catch loose evaluation errors (like missing assets) in a useful way,
     * therefor caching is desired.
     *
     * @param string $fusionPath
     * @param \Exception $exception
     * @return boolean
     */
    protected function exceptionDisablesCache($fusionPath, \Exception $exception)
    {
        return false;
    }
}

#
# Start of Flow generated Proxy code
#
namespace Neos\Fusion\Core\ExceptionHandlers;

use Doctrine\ORM\Mapping as ORM;
use Neos\Flow\Annotations as Flow;

/**
 * Renders the element as an empty string
 */
class AbsorbingHandler extends AbsorbingHandler_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     */
    public function __construct()
    {
        if ('Neos\Fusion\Core\ExceptionHandlers\AbsorbingHandler' === get_class($this)) {
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
  'systemLogger' => '\\Neos\\Flow\\Log\\SystemLoggerInterface',
  'runtime' => 'Neos\\Fusion\\Core\\Runtime',
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
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Log\SystemLoggerInterface', 'Neos\Flow\Log\Logger', 'systemLogger', '717e9de4d0309f4f47c821b9257eb5c2', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Log\SystemLoggerInterface'); });
        $this->Flow_Injected_Properties = array (
  0 => 'systemLogger',
);
    }
}
# PathAndFilename: C:\Bitnami\neos-4.1.7-neu\apps\neos\htdocs\Packages\Application\Neos.Fusion\Classes\Core\ExceptionHandlers\AbsorbingHandler.php
#