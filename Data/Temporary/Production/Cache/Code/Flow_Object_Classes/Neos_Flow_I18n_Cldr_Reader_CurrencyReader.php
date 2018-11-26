<?php 
namespace Neos\Flow\I18n\Cldr\Reader;

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
use Neos\Cache\Frontend\VariableFrontend;
use Neos\Flow\I18n\Cldr\CldrRepository;

/**
 * A reader for data placed in "currencyData" tag in CLDR.
 *
 * @Flow\Scope("singleton")
 */
class CurrencyReader_Original
{
    /**
     * @var CldrRepository
     */
    protected $cldrRepository;

    /**
     * @var VariableFrontend
     */
    protected $cache;

    /**
     * An array of fractions data, indexed by currency code.
     *
     * @var array
     */
    protected $fractions;

    /**
     * @param CldrRepository $repository
     * @return void
     */
    public function injectCldrRepository(CldrRepository $repository)
    {
        $this->cldrRepository = $repository;
    }

    /**
     * Injects the Flow_I18n_Cldr_Reader_CurrencyReader cache
     *
     * @param VariableFrontend $cache
     * @return void
     */
    public function injectCache(VariableFrontend $cache)
    {
        $this->cache = $cache;
    }

    /**
     * Constructs the reader, loading parsed data from cache if available.
     *
     * @return void
     */
    public function initializeObject()
    {
        if ($this->cache->has('fractions')) {
            $this->fractions = $this->cache->get('fractions');
        } else {
            $this->generateFractions();
            $this->cache->set('fractions', $this->fractions);
        }
    }

    /**
     * Returns an array with keys "digits" and "rounding", each an integer.
     *
     * @param string $currencyCode
     * @return array ['digits' => int, 'rounding => int]
     */
    public function getFraction($currencyCode)
    {
        if (array_key_exists($currencyCode, $this->fractions)) {
            return $this->fractions[$currencyCode];
        }

        return $this->fractions['DEFAULT'];
    }

    /**
     * Generates an internal representation of currency fractions which can be found
     * in supplementalData.xml CLDR file.
     *
     * @return void
     * @see CurrencyReader::$fractions
     */
    protected function generateFractions()
    {
        $model = $this->cldrRepository->getModel('supplemental/supplementalData');
        $currencyData = $model->getRawArray('currencyData');

        foreach ($currencyData['fractions'] as $fractionString) {
            $currencyCode = $model->getAttributeValue($fractionString, 'iso4217');
            $this->fractions[$currencyCode] = [
                'digits' => (int)$model->getAttributeValue($fractionString, 'digits'),
                'rounding' => (int)$model->getAttributeValue($fractionString, 'rounding')
            ];
        }
    }
}

#
# Start of Flow generated Proxy code
#
namespace Neos\Flow\I18n\Cldr\Reader;

use Doctrine\ORM\Mapping as ORM;
use Neos\Flow\Annotations as Flow;

/**
 * A reader for data placed in "currencyData" tag in CLDR.
 * @\Neos\Flow\Annotations\Scope("singleton")
 */
class CurrencyReader extends CurrencyReader_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     */
    public function __construct()
    {
        if (get_class($this) === 'Neos\Flow\I18n\Cldr\Reader\CurrencyReader') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Flow\I18n\Cldr\Reader\CurrencyReader', $this);
        if ('Neos\Flow\I18n\Cldr\Reader\CurrencyReader' === get_class($this)) {
            $this->Flow_Proxy_injectProperties();
        }

        $isSameClass = get_class($this) === 'Neos\Flow\I18n\Cldr\Reader\CurrencyReader';
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
  'cldrRepository' => 'Neos\\Flow\\I18n\\Cldr\\CldrRepository',
  'cache' => 'Neos\\Cache\\Frontend\\VariableFrontend',
  'fractions' => 'array',
);
        $result = $this->Flow_serializeRelatedEntities($transientProperties, $propertyVarTags);
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     */
    public function __wakeup()
    {
        if (get_class($this) === 'Neos\Flow\I18n\Cldr\Reader\CurrencyReader') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Flow\I18n\Cldr\Reader\CurrencyReader', $this);

        $this->Flow_setRelatedEntities();
        $this->Flow_Proxy_injectProperties();
            $result = NULL;

        $isSameClass = get_class($this) === 'Neos\Flow\I18n\Cldr\Reader\CurrencyReader';
        $classParents = class_parents($this);
        $classImplements = class_implements($this);
        $isClassProxy = array_search('Neos\Flow\I18n\Cldr\Reader\CurrencyReader', $classParents) !== false && array_search('Doctrine\ORM\Proxy\Proxy', $classImplements) !== false;

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
        $this->injectCache(\Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Cache\CacheManager')->getCache('Flow_I18n_Cldr_Reader_CurrencyReaderCache'));
        $this->injectCldrRepository(\Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\I18n\Cldr\CldrRepository'));
        $this->Flow_Injected_Properties = array (
  0 => 'cache',
  1 => 'cldrRepository',
);
    }
}
# PathAndFilename: C:\Bitnami\neos-4.1.7-neu\apps\neos\htdocs\Packages\Framework\Neos.Flow\Classes\I18n\Cldr\Reader\CurrencyReader.php
#