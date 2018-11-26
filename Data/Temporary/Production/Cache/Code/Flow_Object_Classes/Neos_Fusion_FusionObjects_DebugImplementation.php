<?php 
namespace Neos\Fusion\FusionObjects;

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
use Neos\Fusion\DebugMessage;
use Neos\Fusion\Service\DebugStack;

/**
 * A Fusion object for debugging fusion-values
 *
 * If only value is given it is debugged directly. Otherwise all keys except title an plaintext are debugged.
 *
 * //fusionPath value The variable to display a dump of.
 * //fusionPath title $title optional custom title for the debug output
 * //fusionPath plaintext If true, the dump is in plain text, if false the debug output is in HTML format. If not specified, the mode is guessed from FLOW_SAPITYPE
 * @api
 */
class DebugImplementation_Original extends ArrayImplementation
{
    /**
     * If you iterate over "properties" these in here should usually be ignored.
     * For example additional properties in "Case" that are not "Matchers".
     *
     * @var array
     */
    protected $ignoreProperties = ['__meta', 'title', 'plaintext'];

    /**
     * @var DebugStack
     * @Flow\Inject
     */
    protected $stack;

    public function getTitle() : string
    {
        return $this->fusionValue('title') ?: '';
    }

    public function getPlaintext() : bool
    {
        return $this->fusionValue('plaintext') ?: false;
    }

    /**
     * Return the values in a human readable form
     *
     * @return string
     */
    public function evaluate()
    {
        $title = trim($this->getTitle());
        $plaintext = $this->getPlaintext();

        $debugData = [];
        foreach (array_keys($this->properties) as $key) {
            if (in_array($key, $this->ignoreProperties)) {
                continue;
            }
            $debugData[$key] = $this->fusionValue($key);
        }

        $title .= ' @ ' . $this->path;

        if (count($debugData) === 0) {
            $debugData =[null];
        }

        foreach ($debugData as $suffix => $data) {
            if (is_string($suffix)) {
                $message = (new DebugMessage(trim($title . '.' . $suffix), $this->path, $data, $plaintext));
            } else {
                $message = (new DebugMessage(trim($title), $this->path, $data, $plaintext));
            }
            $this->stack->register($message);
        }

        return $this->fusionValue('value');
    }
}

#
# Start of Flow generated Proxy code
#
namespace Neos\Fusion\FusionObjects;

use Doctrine\ORM\Mapping as ORM;
use Neos\Flow\Annotations as Flow;

/**
 * A Fusion object for debugging fusion-values
 * 
 * If only value is given it is debugged directly. Otherwise all keys except title an plaintext are debugged.
 * 
 * //fusionPath value The variable to display a dump of.
 * //fusionPath title $title optional custom title for the debug output
 * //fusionPath plaintext If true, the dump is in plain text, if false the debug output is in HTML format. If not specified, the mode is guessed from FLOW_SAPITYPE
 */
class DebugImplementation extends DebugImplementation_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     * @param Runtime $runtime
     * @param string $path
     * @param string $fusionObjectName
     */
    public function __construct()
    {
        $arguments = func_get_args();

        if (!array_key_exists(0, $arguments)) $arguments[0] = \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Fusion\Core\Runtime');
        if (!array_key_exists(0, $arguments)) throw new \Neos\Flow\ObjectManagement\Exception\UnresolvedDependenciesException('Missing required constructor argument $runtime in class ' . __CLASS__ . '. Note that constructor injection is only support for objects of scope singleton (and this is not a singleton) – for other scopes you must pass each required argument to the constructor yourself.', 1296143788);
        if (!array_key_exists(1, $arguments)) throw new \Neos\Flow\ObjectManagement\Exception\UnresolvedDependenciesException('Missing required constructor argument $path in class ' . __CLASS__ . '. Note that constructor injection is only support for objects of scope singleton (and this is not a singleton) – for other scopes you must pass each required argument to the constructor yourself.', 1296143788);
        if (!array_key_exists(2, $arguments)) throw new \Neos\Flow\ObjectManagement\Exception\UnresolvedDependenciesException('Missing required constructor argument $fusionObjectName in class ' . __CLASS__ . '. Note that constructor injection is only support for objects of scope singleton (and this is not a singleton) – for other scopes you must pass each required argument to the constructor yourself.', 1296143788);
        call_user_func_array('parent::__construct', $arguments);
        if ('Neos\Fusion\FusionObjects\DebugImplementation' === get_class($this)) {
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
  'ignoreProperties' => 'array',
  'stack' => 'Neos\\Fusion\\Service\\DebugStack',
  'properties' => 'array',
  'runtime' => 'Neos\\Fusion\\Core\\Runtime',
  'path' => 'string',
  'fusionObjectName' => 'string',
  'tsValueCache' => 'array',
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
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Fusion\Service\DebugStack', 'Neos\Fusion\Service\DebugStack', 'stack', '90ef94ce6d517f732a714c50c7f4787a', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Fusion\Service\DebugStack'); });
        $this->Flow_Injected_Properties = array (
  0 => 'stack',
);
    }
}
# PathAndFilename: C:\Bitnami\neos-4.1.7-neu\apps\neos\htdocs\Packages\Application\Neos.Fusion\Classes\FusionObjects\DebugImplementation.php
#