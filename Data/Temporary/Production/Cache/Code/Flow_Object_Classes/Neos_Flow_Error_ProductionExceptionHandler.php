<?php 
namespace Neos\Flow\Error;

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
use Neos\Flow\Exception as FlowException;
use Neos\Flow\Http\Helper\ResponseInformationHelper;
use Neos\Flow\Http\Response;
use Psr\Log\LogLevel;

/**
 * A quite exception handler which catches but ignores any exception.
 *
 * @Flow\Scope("singleton")
 */
class ProductionExceptionHandler_Original extends AbstractExceptionHandler
{
    /**
     * Echoes an exception for the web.
     *
     * @param \Throwable $exception
     * @return void
     */
    protected function echoExceptionWeb($exception)
    {
        $statusCode = 500;
        if ($exception instanceof FlowException) {
            $statusCode = $exception->getStatusCode();
        }
        $statusMessage = ResponseInformationHelper::getStatusMessageByCode($statusCode);
        $referenceCode = ($exception instanceof FlowException) ? $exception->getReferenceCode() : null;
        if (!headers_sent()) {
            header(sprintf('HTTP/1.1 %s %s', $statusCode, $statusMessage));
        }

        try {
            if (isset($this->renderingOptions['templatePathAndFilename'])) {
                try {
                    echo $this->buildView($exception, $this->renderingOptions)->render();
                } catch (\Throwable $throwable) {
                    $this->renderStatically($statusCode, $throwable);
                } catch (\Exception $exception) {
                    $this->renderStatically($statusCode, $exception);
                }
            } else {
                echo $this->renderStatically($statusCode, $referenceCode);
            }
        } catch (\Exception $innerException) {
            $message = $this->throwableStorage->logThrowable($innerException);
            $this->logger->critical($message);
        }
    }

    /**
     * Returns the statically rendered exception message
     *
     * @param integer $statusCode
     * @param string $referenceCode
     * @return string
     */
    protected function renderStatically(int $statusCode, ?string $referenceCode): string
    {
        $statusMessage = ResponseInformationHelper::getStatusMessageByCode($statusCode);
        $referenceCodeMessage = ($referenceCode !== null) ? '<p>When contacting the maintainer of this application please mention the following reference code:<br /><br />' . $referenceCode . '</p>' : '';

        return '<!DOCTYPE html>
			<html>
				<head>
					<meta charset="UTF-8">
					<title>' . $statusCode . ' ' . $statusMessage . '</title>
					<style type="text/css">
						body {
							font-family: Helvetica, Arial, sans-serif;
							margin: 50px;
						}

						h1 {
						    color: #00ADEE;
							font-weight: normal;
						}
					</style>
				</head>
				<body>
                    <h1>' . $statusCode . ' ' . $statusMessage . '</h1>
                    <p>An internal error occurred.</p>
                    ' . $referenceCodeMessage . '
				</body>
			</html>';
    }
}

#
# Start of Flow generated Proxy code
#
namespace Neos\Flow\Error;

use Doctrine\ORM\Mapping as ORM;
use Neos\Flow\Annotations as Flow;

/**
 * A quite exception handler which catches but ignores any exception.
 * @\Neos\Flow\Annotations\Scope("singleton")
 */
class ProductionExceptionHandler extends ProductionExceptionHandler_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     */
    public function __construct()
    {
        if (get_class($this) === 'Neos\Flow\Error\ProductionExceptionHandler') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Flow\Error\ProductionExceptionHandler', $this);
        parent::__construct();
        if ('Neos\Flow\Error\ProductionExceptionHandler' === get_class($this)) {
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
  'systemLogger' => 'Neos\\Flow\\Log\\SystemLoggerInterface',
  'logger' => 'Psr\\Log\\LoggerInterface',
  'throwableStorage' => 'Neos\\Flow\\Log\\ThrowableStorageInterface',
  'options' => 'array',
  'renderingOptions' => 'array',
);
        $result = $this->Flow_serializeRelatedEntities($transientProperties, $propertyVarTags);
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     */
    public function __wakeup()
    {
        if (get_class($this) === 'Neos\Flow\Error\ProductionExceptionHandler') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Flow\Error\ProductionExceptionHandler', $this);

        $this->Flow_setRelatedEntities();
        $this->Flow_Proxy_injectProperties();
    }

    /**
     * Autogenerated Proxy Method
     */
    private function Flow_Proxy_injectProperties()
    {
        $this->injectSystemLogger(\Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Log\SystemLoggerInterface'));
        $this->injectThrowableStorage(\Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Log\ThrowableStorageInterface'));
        $this->Flow_Injected_Properties = array (
  0 => 'systemLogger',
  1 => 'throwableStorage',
);
    }
}
# PathAndFilename: C:\Bitnami\neos-4.1.7-neu\apps\neos\htdocs\Packages\Framework\Neos.Flow\Classes\Error\ProductionExceptionHandler.php
#