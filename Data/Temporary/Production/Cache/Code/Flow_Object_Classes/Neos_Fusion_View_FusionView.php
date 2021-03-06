<?php 
namespace Neos\Fusion\View;

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
use Neos\Flow\Mvc\ActionRequest;
use Neos\Flow\Mvc\View\AbstractView;
use Neos\Flow\Mvc\View\ViewInterface;
use Neos\Utility\Files;
use Neos\Fusion\Core\Parser;
use Neos\Fusion\Core\Runtime;
use Neos\Fusion\Exception\RuntimeException;

/**
 * View for using Fusion for standard MVC controllers.
 *
 * Recursively loads all Fusion files from the configured path (By default that's Resources/Private/Fusion
 * of the current package) and then checks whether a Fusion object for current controller and action can be found.
 *
 * If the controller class name is Foo\Bar\Baz\Controller\BlahController and the action is "index",
 * it checks for the Fusion path Foo.Bar.Baz.BlahController.index.
 * If this path is found, then it is used for rendering. Otherwise, the $fallbackView is used.
 */
class FusionView_Original extends AbstractView
{
    /**
     * This contains the supported options, their default values, descriptions and types.
     *
     * @var array
     */
    protected $supportedOptions = array(
        'fusionPathPatterns' => array(array('resource://@package/Private/Fusion'), 'Fusion files will be recursively loaded from this paths.', 'array'),
        'fusionPath' => array(null, 'The Fusion path which should be rendered; derived from the controller and action names or set by the user.', 'string'),
        'packageKey' => array(null, 'The package key where the Fusion should be loaded from. If not given, is automatically derived from the current request.', 'string'),
        'debugMode' => array(false, 'Flag to enable debug mode of the Fusion runtime explicitly (overriding the global setting).', 'boolean'),
        'enableContentCache' => array(false, 'Flag to enable content caching inside Fusion (overriding the global setting).', 'boolean')
    );

    /**
     * @Flow\Inject
     * @var Parser
     */
    protected $fusionParser;

    /**
     * @Flow\Inject
     * @var ViewInterface
     */
    protected $fallbackView;

    /**
     * The parsed Fusion array in its internal representation
     *
     * @var array
     */
    protected $parsedFusion;

    /**
     * Runtime cache of the Fusion path which should be rendered; derived from the controller
     * and action names or set by the user.
     *
     * @var string
     */
    protected $fusionPath = null;

    /**
     * if false, the fallback view will never be used.
     *
     * @var boolean
     */
    protected $fallbackViewEnabled = true;

    /**
     * The Fusion Runtime
     *
     * @var Runtime
     */
    protected $fusionRuntime = null;

    /**
     * Reset runtime cache if an option is changed
     *
     * @param string $optionName
     * @param mixed $value
     * @return void
     */
    public function setOption($optionName, $value)
    {
        $this->fusionPath = null;
        parent::setOption($optionName, $value);
    }

    /**
     * Sets the Fusion path to be rendered to an explicit value;
     * to be used mostly inside tests.
     *
     * @param string $fusionPath
     * @return void
     */
    public function setFusionPath($fusionPath)
    {
        $this->setOption('fusionPath', $fusionPath);
    }

    /**
     * The package key where the Fusion should be loaded from. If not given,
     * is automatically derived from the current request.
     *
     * @param string $packageKey
     * @return void
     */
    public function setPackageKey($packageKey)
    {
        $this->setOption('packageKey', $packageKey);
    }

    /**
     * @param string $pathPattern
     * @return void
     */
    public function setFusionPathPattern($pathPattern)
    {
        $this->setOption('fusionPathPatterns', array($pathPattern));
    }

    /**
     * @param array $pathPatterns
     * @return void
     */
    public function setFusionPathPatterns(array $pathPatterns)
    {
        $this->setOption('fusionPathPatterns', $pathPatterns);
    }

    /**
     * Disable the use of the Fallback View
     *
     * @return void
     */
    public function disableFallbackView()
    {
        $this->fallbackViewEnabled = false;
    }

    /**
     * Re-Enable the use of the Fallback View. By default, it is enabled,
     * so calling this method only makes sense if disableFallbackView() has
     * been called before.
     *
     * @return void
     */
    public function enableFallbackView()
    {
        $this->fallbackViewEnabled = true;
    }

    /**
     * Render the view
     *
     * @return string The rendered view
     * @api
     */
    public function render()
    {
        $this->initializeFusionRuntime();
        if ($this->fusionRuntime->canRender($this->getFusionPathForCurrentRequest()) || $this->fallbackViewEnabled === false) {
            return $this->renderFusion();
        } else {
            return $this->renderFallbackView();
        }
    }

    /**
     * Load the Fusion Files form the defined
     * paths and construct a Runtime from the
     * parsed results
     *
     * @return void
     */
    public function initializeFusionRuntime()
    {
        if ($this->fusionRuntime === null) {
            $this->loadFusion();
            $this->fusionRuntime = new Runtime($this->parsedFusion, $this->controllerContext);
        }
        if (isset($this->options['debugMode'])) {
            $this->fusionRuntime->setDebugMode($this->options['debugMode']);
        }
        if (isset($this->options['enableContentCache'])) {
            $this->fusionRuntime->setEnableContentCache($this->options['enableContentCache']);
        }
    }

    /**
     * Load Fusion from the directories specified by $this->getOption('fusionPathPatterns')
     *
     * @return void
     */
    protected function loadFusion()
    {
        $mergedFusionCode = '';
        $fusionPathPatterns = $this->getOption('fusionPathPatterns');
        ksort($fusionPathPatterns);
        foreach ($fusionPathPatterns as $fusionPathPattern) {
            $fusionPathPattern = str_replace('@package', $this->getPackageKey(), $fusionPathPattern);
            $filePaths = array_merge(Files::readDirectoryRecursively($fusionPathPattern, '.fusion'), Files::readDirectoryRecursively($fusionPathPattern, '.ts2'));
            sort($filePaths);
            foreach ($filePaths as $filePath) {
                $mergedFusionCode .= PHP_EOL . file_get_contents($filePath) . PHP_EOL;
            }
        }
        $this->parsedFusion = $this->fusionParser->parse($mergedFusionCode);
    }

    /**
     * Get the package key to load the Fusion from. If set, $this->getOption('packageKey') is used.
     * Otherwise, the current request is taken and the controller package key is extracted
     * from there.
     *
     * @return string the package key to load Fusion from
     */
    protected function getPackageKey()
    {
        $packageKey = $this->getOption('packageKey');
        if ($packageKey !== null) {
            return $packageKey;
        } else {
            /** @var $request ActionRequest */
            $request = $this->controllerContext->getRequest();
            return $request->getControllerPackageKey();
        }
    }

    /**
     * Determines the Fusion path depending on the current controller and action
     *
     * @return string
     */
    protected function getFusionPathForCurrentRequest()
    {
        if ($this->fusionPath === null) {
            $fusionPath = $this->getOption('fusionPath');
            if ($fusionPath !== null) {
                $this->fusionPath = $fusionPath;
            } else {
                /** @var $request ActionRequest */
                $request = $this->controllerContext->getRequest();
                $fusionPathForCurrentRequest = $request->getControllerObjectName();
                $fusionPathForCurrentRequest = str_replace('\\Controller\\', '\\', $fusionPathForCurrentRequest);
                $fusionPathForCurrentRequest = str_replace('\\', '/', $fusionPathForCurrentRequest);
                $fusionPathForCurrentRequest = trim($fusionPathForCurrentRequest, '/');
                $fusionPathForCurrentRequest .= '/' . $request->getControllerActionName();

                $this->fusionPath = $fusionPathForCurrentRequest;
            }
        }
        return $this->fusionPath;
    }

    /**
     * Render the given Fusion and return the rendered page
     * @return string
     * @throws \Exception
     */
    protected function renderFusion()
    {
        $this->fusionRuntime->pushContextArray($this->variables);
        try {
            $output = $this->fusionRuntime->render($this->getFusionPathForCurrentRequest());
        } catch (RuntimeException $exception) {
            throw $exception->getPrevious();
        }
        $this->fusionRuntime->popContext();
        return $output;
    }

    /**
     * Initialize and render the fallback view
     *
     * @return string
     */
    public function renderFallbackView()
    {
        $this->fallbackView->setControllerContext($this->controllerContext);
        $this->fallbackView->assignMultiple($this->variables);
        return $this->fallbackView->render();
    }
}

#
# Start of Flow generated Proxy code
#
namespace Neos\Fusion\View;

use Doctrine\ORM\Mapping as ORM;
use Neos\Flow\Annotations as Flow;

/**
 * View for using Fusion for standard MVC controllers.
 * 
 * Recursively loads all Fusion files from the configured path (By default that's Resources/Private/Fusion
 * of the current package) and then checks whether a Fusion object for current controller and action can be found.
 * 
 * If the controller class name is Foo\Bar\Baz\Controller\BlahController and the action is "index",
 * it checks for the Fusion path Foo.Bar.Baz.BlahController.index.
 * If this path is found, then it is used for rendering. Otherwise, the $fallbackView is used.
 */
class FusionView extends FusionView_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     * @param array $options
     * @throws Exception
     */
    public function __construct()
    {
        $arguments = func_get_args();
        call_user_func_array('parent::__construct', $arguments);
        if ('Neos\Fusion\View\FusionView' === get_class($this)) {
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
  'supportedOptions' => 'array',
  'fusionParser' => 'Neos\\Fusion\\Core\\Parser',
  'fallbackView' => 'Neos\\Flow\\Mvc\\View\\ViewInterface',
  'parsedFusion' => 'array',
  'fusionPath' => 'string',
  'fallbackViewEnabled' => 'boolean',
  'fusionRuntime' => 'Neos\\Fusion\\Core\\Runtime',
  'options' => 'array',
  'variables' => 'array',
  'controllerContext' => 'Neos\\Flow\\Mvc\\Controller\\ControllerContext',
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
        $this->fallbackView = new \Neos\FluidAdaptor\View\TemplateView(NULL);
        $this->fusionParser = new \Neos\Fusion\Core\Parser();
        $this->Flow_Injected_Properties = array (
  0 => 'fallbackView',
  1 => 'fusionParser',
);
    }
}
# PathAndFilename: C:\Bitnami\neos-4.1.7-neu\apps\neos\htdocs\Packages\Application\Neos.Fusion\Classes\View\FusionView.php
#