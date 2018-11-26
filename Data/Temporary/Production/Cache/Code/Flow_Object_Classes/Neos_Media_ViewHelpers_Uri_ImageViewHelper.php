<?php 
namespace Neos\Media\ViewHelpers\Uri;

/*
 * This file is part of the Neos.Media package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\Flow\Annotations as Flow;
use Neos\FluidAdaptor\Core\ViewHelper\AbstractViewHelper;
use Neos\Media\Domain\Model\AssetInterface;
use Neos\Media\Domain\Model\ImageInterface;
use Neos\Media\Domain\Model\ThumbnailConfiguration;

/**
 * Renders the src path of a thumbnail image of a given Neos.Media image instance
 *
 * = Examples =
 *
 * <code title="Rendering an image path as-is">
 * {neos.media:uri.image(image: imageObject)}
 * </code>
 * <output>
 * (depending on the image)
 * _Resources/Persistent/b29[...]95d.jpeg
 * </output>
 *
 *
 * <code title="Rendering an image path with scaling at a given width only">
 * {neos.media:uri.image(image: imageObject, maximumWidth: 80)}
 * </code>
 * <output>
 * (depending on the image; has scaled keeping the aspect ratio)
 * _Resources/Persistent/b29[...]95d.jpeg
 * </output>
 *
 * @see \Neos\Media\ViewHelpers\ImageViewHelper
 */
class ImageViewHelper_Original extends AbstractViewHelper
{
    /**
     * @Flow\Inject
     * @var \Neos\Media\Domain\Service\ThumbnailService
     */
    protected $thumbnailService;

    /**
     * @Flow\Inject
     * @var \Neos\Media\Domain\Service\AssetService
     */
    protected $assetService;

    /**
     * @return void
     */
    public function initializeArguments()
    {
        parent::initializeArguments();
    }

    /**
     * Renders the path to a thumbnail image, created from a given image.
     *
     * @param ImageInterface $image The image to retrieve the path from
     * @param integer $width Desired width of the image
     * @param integer $maximumWidth Desired maximum width of the image
     * @param integer $height Desired height of the image
     * @param integer $maximumHeight Desired maximum height of the image
     * @param boolean $allowCropping Whether the image should be cropped if the given sizes would hurt the aspect ratio
     * @param boolean $allowUpScaling Whether the resulting image size might exceed the size of the original image
     * @param boolean $async Return asynchronous image URI in case the requested image does not exist already
     * @param string $preset Preset used to determine image configuration
     * @param integer $quality Quality of the image
     * @return string the relative image path, to be used as src attribute for <img /> tags
     */
    public function render(ImageInterface $image = null, $width = null, $maximumWidth = null, $height = null, $maximumHeight = null, $allowCropping = false, $allowUpScaling = false, $async = false, $preset = null, $quality = null)
    {
        if ($image === null) {
            return '';
        }

        if ($preset) {
            $thumbnailConfiguration = $this->thumbnailService->getThumbnailConfigurationForPreset($preset, $async);
        } else {
            $thumbnailConfiguration = new ThumbnailConfiguration($width, $maximumWidth, $height, $maximumHeight, $allowCropping, $allowUpScaling, $async, $quality);
        }
        return $this->assetService->getThumbnailUriAndSizeForAsset($image, $thumbnailConfiguration, $this->controllerContext->getRequest())['src'];
    }
}

#
# Start of Flow generated Proxy code
#
namespace Neos\Media\ViewHelpers\Uri;

use Doctrine\ORM\Mapping as ORM;
use Neos\Flow\Annotations as Flow;

/**
 * Renders the src path of a thumbnail image of a given Neos.Media image instance
 * 
 * = Examples =
 * 
 * <code title="Rendering an image path as-is">
 * {neos.media:uri.image(image: imageObject)}
 * </code>
 * <output>
 * (depending on the image)
 * _Resources/Persistent/b29[...]95d.jpeg
 * </output>
 * 
 * 
 * <code title="Rendering an image path with scaling at a given width only">
 * {neos.media:uri.image(image: imageObject, maximumWidth: 80)}
 * </code>
 * <output>
 * (depending on the image; has scaled keeping the aspect ratio)
 * _Resources/Persistent/b29[...]95d.jpeg
 * </output>
 */
class ImageViewHelper extends ImageViewHelper_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     */
    public function __construct()
    {
        if ('Neos\Media\ViewHelpers\Uri\ImageViewHelper' === get_class($this)) {
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
  'thumbnailService' => '\\Neos\\Media\\Domain\\Service\\ThumbnailService',
  'assetService' => '\\Neos\\Media\\Domain\\Service\\AssetService',
  'controllerContext' => 'Neos\\Flow\\Mvc\\Controller\\ControllerContext',
  'objectManager' => 'Neos\\Flow\\ObjectManagement\\ObjectManagerInterface',
  'systemLogger' => 'Neos\\Flow\\Log\\SystemLoggerInterface',
  'logger' => 'Psr\\Log\\LoggerInterface',
  'argumentDefinitions' => 'ArgumentDefinition[]',
  'viewHelperNode' => 'TYPO3Fluid\\Fluid\\Core\\Parser\\SyntaxTree\\ViewHelperNode',
  'arguments' => 'array',
  'childNodes' => 'NodeInterface[] array',
  'templateVariableContainer' => 'TYPO3Fluid\\Fluid\\Core\\Variables\\VariableProviderInterface',
  'renderingContext' => 'TYPO3Fluid\\Fluid\\Core\\Rendering\\RenderingContextInterface',
  'renderChildrenClosure' => '\\Closure',
  'viewHelperVariableContainer' => 'TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperVariableContainer',
  'escapeChildren' => 'boolean',
  'escapeOutput' => 'boolean',
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
        $this->injectObjectManager(\Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\ObjectManagement\ObjectManagerInterface'));
        $this->injectSystemLogger(\Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Log\SystemLoggerInterface'));
        $this->injectLogger(\Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Psr\Log\LoggerInterface'));
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Media\Domain\Service\ThumbnailService', 'Neos\Media\Domain\Service\ThumbnailService', 'thumbnailService', 'b18abfdc1787cb03caeb052cad3d7c0c', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Media\Domain\Service\ThumbnailService'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Media\Domain\Service\AssetService', 'Neos\Media\Domain\Service\AssetService', 'assetService', 'b8a3f9ba29596737396943e4de630328', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Media\Domain\Service\AssetService'); });
        $this->Flow_Injected_Properties = array (
  0 => 'objectManager',
  1 => 'systemLogger',
  2 => 'logger',
  3 => 'thumbnailService',
  4 => 'assetService',
);
    }

    /**
     * Autogenerated Proxy Method
     * @param ObjectManagerInterface $objectManager
     * @return ArgumentDefinition[]
     * @throws \Neos\FluidAdaptor\Core\Exception
     * @\Neos\Flow\Annotations\CompileStatic
     */
    static public function getRenderMethodArgumentDefinitions(\Neos\Flow\ObjectManagement\ObjectManagerInterface $objectManager)
    {

return array (
  'image' => 
  array (
    0 => 'image',
    1 => 'Neos\\Media\\Domain\\Model\\ImageInterface',
    2 => 'The image to retrieve the path from',
    3 => false,
    4 => NULL,
    5 => true,
  ),
  'width' => 
  array (
    0 => 'width',
    1 => 'integer',
    2 => 'Desired width of the image',
    3 => false,
    4 => NULL,
    5 => true,
  ),
  'maximumWidth' => 
  array (
    0 => 'maximumWidth',
    1 => 'integer',
    2 => 'Desired maximum width of the image',
    3 => false,
    4 => NULL,
    5 => true,
  ),
  'height' => 
  array (
    0 => 'height',
    1 => 'integer',
    2 => 'Desired height of the image',
    3 => false,
    4 => NULL,
    5 => true,
  ),
  'maximumHeight' => 
  array (
    0 => 'maximumHeight',
    1 => 'integer',
    2 => 'Desired maximum height of the image',
    3 => false,
    4 => NULL,
    5 => true,
  ),
  'allowCropping' => 
  array (
    0 => 'allowCropping',
    1 => 'boolean',
    2 => 'Whether the image should be cropped if the given sizes would hurt the aspect ratio',
    3 => false,
    4 => false,
    5 => true,
  ),
  'allowUpScaling' => 
  array (
    0 => 'allowUpScaling',
    1 => 'boolean',
    2 => 'Whether the resulting image size might exceed the size of the original image',
    3 => false,
    4 => false,
    5 => true,
  ),
  'async' => 
  array (
    0 => 'async',
    1 => 'boolean',
    2 => 'Return asynchronous image URI in case the requested image does not exist already',
    3 => false,
    4 => false,
    5 => true,
  ),
  'preset' => 
  array (
    0 => 'preset',
    1 => 'string',
    2 => 'Preset used to determine image configuration',
    3 => false,
    4 => NULL,
    5 => true,
  ),
  'quality' => 
  array (
    0 => 'quality',
    1 => 'integer',
    2 => 'Quality of the image',
    3 => false,
    4 => NULL,
    5 => true,
  ),
);
    }
}
# PathAndFilename: C:\Bitnami\neos-4.1.7-neu\apps\neos\htdocs\Packages\Application\Neos.Media\Classes\ViewHelpers\Uri\ImageViewHelper.php
#