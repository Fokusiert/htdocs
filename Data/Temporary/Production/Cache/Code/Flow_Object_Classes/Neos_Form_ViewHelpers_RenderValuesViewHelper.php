<?php 
namespace Neos\Form\ViewHelpers;

/*
 * This file is part of the Neos.Form package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\FluidAdaptor\Core\ViewHelper\AbstractViewHelper;
use Neos\Form\Core\Model\FormElementInterface;
use Neos\Form\Core\Model\Renderable\CompositeRenderableInterface;
use Neos\Form\Core\Model\Renderable\RootRenderableInterface;
use Neos\Form\Core\Renderer\RendererInterface;
use Neos\Form\Core\Runtime\FormRuntime;
use Neos\Media\Domain\Model\Image;

/**
 * Renders the values of a form
 */
class RenderValuesViewHelper_Original extends AbstractViewHelper
{
    /**
     * @var boolean
     */
    protected $escapeOutput = false;

    /**
     * @param RootRenderableInterface $renderable If specified, only the values of the given renderable are rendered, otherwise all form elements are rendered
     * @param FormRuntime $formRuntime If not set, the Form Runtime will be fetched from the View, which only works within the FluidFormRenderer
     * @param string $as
     * @return string the rendered form values
     */
    public function render(RootRenderableInterface $renderable = null, FormRuntime $formRuntime = null, $as = 'formValue')
    {
        if ($formRuntime === null) {
            /** @var RendererInterface $fluidFormRenderer */
            $fluidFormRenderer = $this->viewHelperVariableContainer->getView();
            $formRuntime = $fluidFormRenderer->getFormRuntime();
        }
        if ($renderable === null) {
            $renderable = $formRuntime->getFormDefinition();
        }
        if ($renderable instanceof CompositeRenderableInterface) {
            $elements = $renderable->getRenderablesRecursively();
        } else {
            $elements = [$renderable];
        }

        $formState = $formRuntime->getFormState();
        $output = '';
        foreach ($elements as $element) {
            if (!$element instanceof FormElementInterface) {
                continue;
            }
            $value = $formState->getFormValue($element->getIdentifier());

            $formValue = [
                'element' => $element,
                'value' => $value,
                'processedValue' => $this->processElementValue($element, $value),
                'isMultiValue' => is_array($value) || $value instanceof \Iterator
            ];
            $this->templateVariableContainer->add($as, $formValue);
            $output .= $this->renderChildren();
            $this->templateVariableContainer->remove($as);
        }
        return $output;
    }

    /**
     * Converts the given value to a simple type (string or array) considering the underlying FormElement definition
     *
     * @param FormElementInterface $element
     * @param mixed $value
     * @return string|array
     */
    protected function processElementValue(FormElementInterface $element, $value)
    {
        $properties = $element->getProperties();
        if (isset($properties['options']) && is_array($properties['options'])) {
            if (is_array($value)) {
                return $this->mapValuesToOptions($value, $properties['options']);
            } else {
                return $this->mapValueToOption($value, $properties['options']);
            }
        }
        if (is_object($value)) {
            return $this->processObject($element, $value);
        }
        return $value;
    }

    /**
     * Replaces the given values (=keys) with the corresponding elements in $options
     *
     * @see mapValueToOption()
     *
     * @param array $value
     * @param array $options
     * @return array
     */
    protected function mapValuesToOptions(array $value, array $options)
    {
        $result = [];
        foreach ($value as $key) {
            $result[] = $this->mapValueToOption($key, $options);
        }
        return $result;
    }

    /**
     * Replaces the given value (=key) with the corresponding element in $options
     * If the key does not exist in $options, it is returned without modification
     *
     * @param mixed $value
     * @param array $options
     * @return string
     */
    protected function mapValueToOption($value, array $options)
    {
        return isset($options[$value]) ? $options[$value] : $value;
    }

    /**
     * Converts the given $object to a string representation considering the $element FormElement definition
     *
     * @param FormElementInterface $element
     * @param object $object
     * @return string
     */
    protected function processObject(FormElementInterface $element, $object)
    {
        $properties = $element->getProperties();
        if ($object instanceof \DateTime) {
            if (isset($properties['dateFormat'])) {
                $dateFormat = $properties['dateFormat'];
                if (isset($properties['displayTimeSelector']) && $properties['displayTimeSelector'] === true) {
                    $dateFormat .= ' H:i';
                }
            } else {
                $dateFormat = \DateTime::W3C;
            }
            return $object->format($dateFormat);
        }
        if ($object instanceof Image) {
            return sprintf('%s Image (%d x %d)', $object->getFileExtension(), $object->getWidth(), $object->getHeight());
        }
        if (method_exists($object, '__toString')) {
            return (string)$object;
        }
        return 'Object [' . get_class($object) . ']';
    }
}

#
# Start of Flow generated Proxy code
#
namespace Neos\Form\ViewHelpers;

use Doctrine\ORM\Mapping as ORM;
use Neos\Flow\Annotations as Flow;

/**
 * Renders the values of a form
 */
class RenderValuesViewHelper extends RenderValuesViewHelper_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     */
    public function __construct()
    {
        if ('Neos\Form\ViewHelpers\RenderValuesViewHelper' === get_class($this)) {
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
  'escapeOutput' => 'boolean',
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
        $this->Flow_Injected_Properties = array (
  0 => 'objectManager',
  1 => 'systemLogger',
  2 => 'logger',
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
  'renderable' => 
  array (
    0 => 'renderable',
    1 => 'Neos\\Form\\Core\\Model\\Renderable\\RootRenderableInterface',
    2 => 'If specified, only the values of the given renderable are rendered, otherwise all form elements are rendered',
    3 => false,
    4 => NULL,
    5 => true,
  ),
  'formRuntime' => 
  array (
    0 => 'formRuntime',
    1 => 'Neos\\Form\\Core\\Runtime\\FormRuntime',
    2 => 'If not set, the Form Runtime will be fetched from the View, which only works within the FluidFormRenderer',
    3 => false,
    4 => NULL,
    5 => true,
  ),
  'as' => 
  array (
    0 => 'as',
    1 => 'string',
    2 => '',
    3 => false,
    4 => 'formValue',
    5 => true,
  ),
);
    }
}
# PathAndFilename: C:\Bitnami\neos-4.1.7-neu\apps\neos\htdocs\Packages\Application\Neos.Form\Classes\ViewHelpers\RenderValuesViewHelper.php
#