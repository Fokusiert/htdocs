<?php 
namespace Neos\Flow\I18n\Xliff\Service;

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
use Psr\Log\LoggerInterface;

/**
 * An Xliff reader
 *
 * @Flow\Scope("singleton")
 */
class XliffReader_Original
{
    /**
     * @Flow\Inject
     * @var LoggerInterface
     */
    protected $i18nLogger;


    /**
     * @param string $sourcePath
     * @param callable $iterator
     * @return void
     */
    public function readFiles($sourcePath, callable $iterator)
    {
        $reader = new \XMLReader();
        $reader->open($sourcePath);
        $reader->read();

        if ($reader->nodeType == \XMLReader::ELEMENT && $reader->name === 'xliff') {
            $version = $reader->getAttribute('version');
            $result = true;
            while (!$this->isFileNode($reader) && $result) {
                $result = $reader->read();
            }
            $offset = 0;
            $iterator($reader, $offset, $version);
            while ($reader->next()) {
                if ($this->isFileNode($reader)) {
                    $iterator($reader, $offset, $version);
                }
                $offset++;
            }
        } else {
            $this->i18nLogger->info('Given source "' . $sourcePath . '" is not a valid XLIFF file');
        }

        $reader->close();
    }

    /**
     * @param \XMLReader $reader
     * @return boolean
     */
    protected function isFileNode(\XMLReader $reader)
    {
        return $reader->nodeType === \XMLReader::ELEMENT && $reader->name === 'file';
    }
}

#
# Start of Flow generated Proxy code
#
namespace Neos\Flow\I18n\Xliff\Service;

use Doctrine\ORM\Mapping as ORM;
use Neos\Flow\Annotations as Flow;

/**
 * An Xliff reader
 * @\Neos\Flow\Annotations\Scope("singleton")
 */
class XliffReader extends XliffReader_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     */
    public function __construct()
    {
        if (get_class($this) === 'Neos\Flow\I18n\Xliff\Service\XliffReader') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Flow\I18n\Xliff\Service\XliffReader', $this);
        if ('Neos\Flow\I18n\Xliff\Service\XliffReader' === get_class($this)) {
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
  'i18nLogger' => 'Psr\\Log\\LoggerInterface',
);
        $result = $this->Flow_serializeRelatedEntities($transientProperties, $propertyVarTags);
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     */
    public function __wakeup()
    {
        if (get_class($this) === 'Neos\Flow\I18n\Xliff\Service\XliffReader') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Flow\I18n\Xliff\Service\XliffReader', $this);

        $this->Flow_setRelatedEntities();
        $this->Flow_Proxy_injectProperties();
    }

    /**
     * Autogenerated Proxy Method
     */
    private function Flow_Proxy_injectProperties()
    {
        $this->Flow_Proxy_LazyPropertyInjection('', '', 'i18nLogger', 'c5852c77d2dbef3508d11bff51df3186', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Log\PsrLoggerFactoryInterface')->get('i18nLogger'); });
        $this->Flow_Injected_Properties = array (
  0 => 'i18nLogger',
);
    }
}
# PathAndFilename: C:\Bitnami\neos-4.1.7-neu\apps\neos\htdocs\Packages\Framework\Neos.Flow\Classes\I18n\Xliff\Service\XliffReader.php
#