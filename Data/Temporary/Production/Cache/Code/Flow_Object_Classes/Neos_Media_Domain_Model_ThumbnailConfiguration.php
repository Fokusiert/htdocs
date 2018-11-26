<?php 
namespace Neos\Media\Domain\Model;

/*
 * This file is part of the Neos.Media package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Doctrine\ORM\Mapping as ORM;
use Neos\Flow\Annotations as Flow;
use Neos\Flow\Log\SystemLoggerInterface;

/**
 * Thumbnail configuration value object
 */
class ThumbnailConfiguration_Original
{
    /**
     * @var integer
     */
    protected $width;

    /**
     * @var integer
     */
    protected $maximumWidth;

    /**
     * @var integer
     */
    protected $height;

    /**
     * @var integer
     */
    protected $maximumHeight;

    /**
     * @var boolean
     */
    protected $allowCropping;

    /**
     * @var boolean
     */
    protected $allowUpScaling;

    /**
     * @var integer
     */
    protected $quality;

    /**
     * @var boolean
     */
    protected $async;

    /**
     * @Flow\Inject
     * @var SystemLoggerInterface
     */
    protected $logger;

    /**
     * @var boolean
     */
    protected static $loggedDeprecation = false;

    /**
     * @param integer $width Desired width of the image
     * @param integer $maximumWidth Desired maximum width of the image
     * @param integer $height Desired height of the image
     * @param integer $maximumHeight Desired maximum height of the image
     * @param boolean $allowCropping Whether the image should be cropped if the given sizes would hurt the aspect ratio
     * @param boolean $allowUpScaling Whether the resulting image size might exceed the size of the original image
     * @param integer $quality Quality of the processed image
     * @param boolean $async Whether the thumbnail can be generated asynchronously
     */
    public function __construct($width = null, $maximumWidth = null, $height = null, $maximumHeight = null, $allowCropping = false, $allowUpScaling = false, $async = false, $quality = null)
    {
        $this->width = $width ? (integer)$width : null;
        $this->maximumWidth = $maximumWidth ? (integer)$maximumWidth : null;
        $this->height = $height ? (integer)$height : null;
        $this->maximumHeight = $maximumHeight ? (integer)$maximumHeight : null;
        $this->allowCropping = $allowCropping ? (boolean)$allowCropping : false;
        $this->allowUpScaling = $allowUpScaling ? (boolean)$allowUpScaling : false;
        $this->quality = $quality ? (integer)$quality : null;
        $this->async = $async ? (boolean)$async : false;
    }

    /**
     * @return integer
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @return integer
     */
    public function getMaximumWidth()
    {
        return $this->maximumWidth;
    }

    /**
     * @return integer
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @return integer
     */
    public function getMaximumHeight()
    {
        return $this->maximumHeight;
    }

    /**
     * @return boolean
     */
    public function getRatioMode()
    {
        return ($this->isCroppingAllowed() ? ImageInterface::RATIOMODE_OUTBOUND : ImageInterface::RATIOMODE_INSET);
    }

    /**
     * @return boolean
     */
    public function isCroppingAllowed()
    {
        return $this->allowCropping;
    }

    /**
     * @return boolean
     */
    public function isUpScalingAllowed()
    {
        return $this->allowUpScaling;
    }

    /**
     * @return boolean
     */
    public function isAsync()
    {
        return $this->async;
    }

    /**
     * @return string
     */
    public function getHash()
    {
        return md5(json_encode($this->toArray()));
    }

    /**
     * @return int
     */
    public function getQuality()
    {
        return $this->quality;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        $data = array_filter([
            'width' => $this->getWidth(),
            'maximumWidth' => $this->getMaximumWidth(),
            'height' => $this->getHeight(),
            'maximumHeight' => $this->getMaximumHeight(),
            'ratioMode' => $this->getRatioMode(),
            'allowUpScaling' => $this->isUpScalingAllowed(),
            'quality' => $this->getQuality()
        ], function ($value) {
            return $value !== null;
        });
        ksort($data);
        return $data;
    }
}

#
# Start of Flow generated Proxy code
#
namespace Neos\Media\Domain\Model;

use Doctrine\ORM\Mapping as ORM;
use Neos\Flow\Annotations as Flow;

/**
 * Thumbnail configuration value object
 */
class ThumbnailConfiguration extends ThumbnailConfiguration_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     * @param integer $width Desired width of the image
     * @param integer $maximumWidth Desired maximum width of the image
     * @param integer $height Desired height of the image
     * @param integer $maximumHeight Desired maximum height of the image
     * @param boolean $allowCropping Whether the image should be cropped if the given sizes would hurt the aspect ratio
     * @param boolean $allowUpScaling Whether the resulting image size might exceed the size of the original image
     * @param integer $quality Quality of the processed image
     * @param boolean $async Whether the thumbnail can be generated asynchronously
     */
    public function __construct()
    {
        $arguments = func_get_args();
        call_user_func_array('parent::__construct', $arguments);
        if ('Neos\Media\Domain\Model\ThumbnailConfiguration' === get_class($this)) {
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
  'width' => 'integer',
  'maximumWidth' => 'integer',
  'height' => 'integer',
  'maximumHeight' => 'integer',
  'allowCropping' => 'boolean',
  'allowUpScaling' => 'boolean',
  'quality' => 'integer',
  'async' => 'boolean',
  'logger' => 'Neos\\Flow\\Log\\SystemLoggerInterface',
  'loggedDeprecation' => 'boolean',
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
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Log\SystemLoggerInterface', 'Neos\Flow\Log\Logger', 'logger', '717e9de4d0309f4f47c821b9257eb5c2', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Log\SystemLoggerInterface'); });
        $this->Flow_Injected_Properties = array (
  0 => 'logger',
);
    }
}
# PathAndFilename: C:\Bitnami\neos-4.1.7-neu\apps\neos\htdocs\Packages\Application\Neos.Media\Classes\Domain\Model\ThumbnailConfiguration.php
#