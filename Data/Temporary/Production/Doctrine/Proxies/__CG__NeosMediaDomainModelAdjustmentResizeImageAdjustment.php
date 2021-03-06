<?php

namespace Neos\Flow\Persistence\Doctrine\Proxies\__CG__\Neos\Media\Domain\Model\Adjustment;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class ResizeImageAdjustment extends \Neos\Media\Domain\Model\Adjustment\ResizeImageAdjustment implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * {@inheritDoc}
     * @return array
     */
    public function __sleep()
    {
        $properties = array_merge(['__isInitialized__'], parent::__sleep());

        if ($this->__isInitialized__) {
            $properties = array_diff($properties, array_keys($this->__getLazyProperties()));
        }

        return $properties;
    }

    /**
     * {@inheritDoc}
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (ResizeImageAdjustment $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
        parent::__wakeup();
    }

    /**
     * {@inheritDoc}
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);

        parent::__clone();
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function setMaximumHeight($maximumHeight)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMaximumHeight', [$maximumHeight]);

        return parent::setMaximumHeight($maximumHeight);
    }

    /**
     * {@inheritDoc}
     */
    public function getMaximumHeight()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMaximumHeight', []);

        return parent::getMaximumHeight();
    }

    /**
     * {@inheritDoc}
     */
    public function setMaximumWidth($maximumWidth)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMaximumWidth', [$maximumWidth]);

        return parent::setMaximumWidth($maximumWidth);
    }

    /**
     * {@inheritDoc}
     */
    public function getMaximumWidth()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMaximumWidth', []);

        return parent::getMaximumWidth();
    }

    /**
     * {@inheritDoc}
     */
    public function setHeight($height)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHeight', [$height]);

        return parent::setHeight($height);
    }

    /**
     * {@inheritDoc}
     */
    public function getHeight()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHeight', []);

        return parent::getHeight();
    }

    /**
     * {@inheritDoc}
     */
    public function setWidth($width)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWidth', [$width]);

        return parent::setWidth($width);
    }

    /**
     * {@inheritDoc}
     */
    public function getWidth()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWidth', []);

        return parent::getWidth();
    }

    /**
     * {@inheritDoc}
     */
    public function setMinimumHeight($minimumHeight)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMinimumHeight', [$minimumHeight]);

        return parent::setMinimumHeight($minimumHeight);
    }

    /**
     * {@inheritDoc}
     */
    public function getMinimumHeight()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMinimumHeight', []);

        return parent::getMinimumHeight();
    }

    /**
     * {@inheritDoc}
     */
    public function setMinimumWidth($minimumWidth)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMinimumWidth', [$minimumWidth]);

        return parent::setMinimumWidth($minimumWidth);
    }

    /**
     * {@inheritDoc}
     */
    public function getMinimumWidth()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMinimumWidth', []);

        return parent::getMinimumWidth();
    }

    /**
     * {@inheritDoc}
     */
    public function setRatioMode($ratioMode)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRatioMode', [$ratioMode]);

        return parent::setRatioMode($ratioMode);
    }

    /**
     * {@inheritDoc}
     */
    public function getRatioMode()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRatioMode', []);

        return parent::getRatioMode();
    }

    /**
     * {@inheritDoc}
     */
    public function getAllowUpScaling()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAllowUpScaling', []);

        return parent::getAllowUpScaling();
    }

    /**
     * {@inheritDoc}
     */
    public function setAllowUpScaling($allowUpScaling)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAllowUpScaling', [$allowUpScaling]);

        return parent::setAllowUpScaling($allowUpScaling);
    }

    /**
     * {@inheritDoc}
     */
    public function canBeApplied(\Imagine\Image\ImageInterface $image)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'canBeApplied', [$image]);

        return parent::canBeApplied($image);
    }

    /**
     * {@inheritDoc}
     */
    public function applyToImage(\Imagine\Image\ImageInterface $image)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'applyToImage', [$image]);

        return parent::applyToImage($image);
    }

    /**
     * {@inheritDoc}
     */
    public function setImageVariant(\Neos\Media\Domain\Model\ImageVariant $imageVariant)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImageVariant', [$imageVariant]);

        return parent::setImageVariant($imageVariant);
    }

    /**
     * {@inheritDoc}
     */
    public function getPosition()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPosition', []);

        return parent::getPosition();
    }

    /**
     * {@inheritDoc}
     */
    public function setPosition($position)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPosition', [$position]);

        return parent::setPosition($position);
    }

    /**
     * {@inheritDoc}
     */
    public function Flow_Aop_Proxy_invokeJoinPoint(\Neos\Flow\Aop\JoinPointInterface $joinPoint)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'Flow_Aop_Proxy_invokeJoinPoint', [$joinPoint]);

        return parent::Flow_Aop_Proxy_invokeJoinPoint($joinPoint);
    }

}
