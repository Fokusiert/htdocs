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

/**
 * A Fusion object for tag based content
 *
 * //tsPath attributes An array with attributes for this tag (optional)
 * //tsPath content Content for the body of the tag (optional)
 * @api
 */
class TagImplementation_Original extends AbstractFusionObject
{
    /**
     * List of self-closing tags
     *
     * @var array
     */
    protected static $SELF_CLOSING_TAGS = array('area', 'base', 'br', 'col', 'command', 'embed', 'hr', 'img', 'input', 'keygen', 'link', 'meta', 'param', 'source', 'track', 'wbr');

    /**
     * The tag name (e.g. 'body', 'head', 'title', ...)
     *
     * @return string
     */
    public function getTagName()
    {
        $tagName = $this->fusionValue('tagName');
        if ($tagName === null) {
            $tagName = 'div';
        }
        return $tagName;
    }

    /**
     * Whether to leave out the closing tag (defaults to false)
     *
     * @return boolean
     */
    public function getOmitClosingTag()
    {
        return $this->fusionValue('omitClosingTag');
    }

    /**
     * Whether to force a self closing tag (e.g. '<div />')
     *
     * @param string $tagName
     * @return boolean
     */
    public function isSelfClosingTag($tagName)
    {
        return in_array($tagName, self::$SELF_CLOSING_TAGS, true) || (boolean)$this->fusionValue('selfClosingTag');
    }

    /**
     * Return a tag
     *
     * @return mixed
     */
    public function evaluate()
    {
        $tagName = $this->getTagName();
        $omitClosingTag = $this->getOmitClosingTag();
        $selfClosingTag = $this->isSelfClosingTag($tagName);
        $content = '';
        if (!$omitClosingTag && !$selfClosingTag) {
            $content = $this->fusionValue('content');
        }
        return '<' . $tagName . $this->fusionValue('attributes') . ($selfClosingTag ? ' /' : '') . '>' . (!$omitClosingTag && !$selfClosingTag ? $content . '</' . $tagName . '>' : '');
    }
}

#
# Start of Flow generated Proxy code
#
namespace Neos\Fusion\FusionObjects;

use Doctrine\ORM\Mapping as ORM;
use Neos\Flow\Annotations as Flow;

/**
 * A Fusion object for tag based content
 * 
 * //tsPath attributes An array with attributes for this tag (optional)
 * //tsPath content Content for the body of the tag (optional)
 */
class TagImplementation extends TagImplementation_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait;


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
  'SELF_CLOSING_TAGS' => 'array',
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
    }
}
# PathAndFilename: C:\Bitnami\neos-4.1.7-neu\apps\neos\htdocs\Packages\Application\Neos.Fusion\Classes\FusionObjects\TagImplementation.php
#