<?php 
namespace Neos\Neos\Ui\TypeConverter;

/*
 * This file is part of the Neos.Neos.Ui package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\Flow\Annotations as Flow;
use Neos\Flow\ObjectManagement\ObjectManagerInterface;
use Neos\Flow\Property\PropertyMappingConfigurationInterface;
use Neos\Flow\Property\TypeConverter\AbstractTypeConverter;
use Neos\Media\TypeConverter\ImageInterfaceArrayPresenter;
use Neos\Media\TypeConverter\ImageInterfaceJsonSerializer;
use Neos\Neos\Ui\Fusion\Helper\ActivationHelper;

/**
 * Chooses the right converter to provide image data to the user interface
 */
class UiDependentImageSerializer_Original extends AbstractTypeConverter
{
    /**
     * @Flow\Inject
     * @var ObjectManagerInterface
     */
    protected $objectManager;

    /**
     * Converts the given source ImageInterface depending on which UI is active.
     *
     * @param mixed $source
     * @param string $targetType
     * @param array $convertedChildProperties
     * @param PropertyMappingConfigurationInterface|null $configuration
     * @return mixed|\Neos\Error\Messages\Error|\Neos\Flow\Validation\Error|string
     */
    public function convertFrom($source, $targetType, array $convertedChildProperties = [], PropertyMappingConfigurationInterface $configuration = null)
    {
        $activationHelper = $this->objectManager->get(ActivationHelper::class);

        $innerConverter = $this->objectManager->get(ImageInterfaceArrayPresenter::class);
        if ($activationHelper->isLegacyBackendEnabled()) {
            // Old UI is active so we need to deliver the JSON as string.
            $innerConverter = $this->objectManager->get(ImageInterfaceJsonSerializer::class);
        }

        return $innerConverter->convertFrom($source, $targetType, $convertedChildProperties, $configuration);
    }
}

#
# Start of Flow generated Proxy code
#
namespace Neos\Neos\Ui\TypeConverter;

use Doctrine\ORM\Mapping as ORM;
use Neos\Flow\Annotations as Flow;

/**
 * Chooses the right converter to provide image data to the user interface
 */
class UiDependentImageSerializer extends UiDependentImageSerializer_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     */
    public function __construct()
    {
        if ('Neos\Neos\Ui\TypeConverter\UiDependentImageSerializer' === get_class($this)) {
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
  'objectManager' => 'Neos\\Flow\\ObjectManagement\\ObjectManagerInterface',
  'sourceTypes' => 'array<string>',
  'targetType' => 'string',
  'priority' => 'integer',
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
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\ObjectManagement\ObjectManagerInterface', 'Neos\Flow\ObjectManagement\ObjectManager', 'objectManager', '9524ff5e5332c1890aa361e5d186b7b6', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\ObjectManagement\ObjectManagerInterface'); });
        $this->Flow_Injected_Properties = array (
  0 => 'objectManager',
);
    }
}
# PathAndFilename: C:\Bitnami\neos-4.1.7-neu\apps\neos\htdocs\Packages\Application\Neos.Neos.Ui\Classes\TypeConverter\UiDependentImageSerializer.php
#