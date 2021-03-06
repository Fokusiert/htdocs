<?php 
namespace Neos\Party\Validation\Validator;

/*
 * This file is part of the Neos.Party package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\Flow\Annotations as Flow;
use Neos\Flow\Validation\Validator\AbstractValidator;

/**
 * Validator for URL addresses.
 *
 * @api
 * @Flow\Scope("singleton")
 */
class UrlAddressValidator_Original extends AbstractValidator
{
    /**
     * Checks if the given value is a valid URL.
     *
     * @param mixed $value The value that should be validated
     * @return void
     * @api
     */
    protected function isValid($value)
    {
        if (!is_string($value) || preg_match('/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/', $value) !== 1) {
            $this->addError('Please specify a valid URL.', 1343235498);
        }
    }
}

#
# Start of Flow generated Proxy code
#
namespace Neos\Party\Validation\Validator;

use Doctrine\ORM\Mapping as ORM;
use Neos\Flow\Annotations as Flow;

/**
 * Validator for URL addresses.
 * @\Neos\Flow\Annotations\Scope("singleton")
 */
class UrlAddressValidator extends UrlAddressValidator_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait;


    /**
     * Autogenerated Proxy Method
     * @param array $options Options for the validator
     * @throws InvalidValidationOptionsException if unsupported options are found
     */
    public function __construct()
    {
        $arguments = func_get_args();
        if (get_class($this) === 'Neos\Party\Validation\Validator\UrlAddressValidator') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Party\Validation\Validator\UrlAddressValidator', $this);
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
  'acceptsEmptyValues' => 'boolean',
  'supportedOptions' => 'array',
  'options' => 'array',
  'result' => 'Neos\\Error\\Messages\\Result',
  'resultStack' => 'array<Neos\\Error\\Messages\\Result>',
);
        $result = $this->Flow_serializeRelatedEntities($transientProperties, $propertyVarTags);
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     */
    public function __wakeup()
    {
        if (get_class($this) === 'Neos\Party\Validation\Validator\UrlAddressValidator') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Party\Validation\Validator\UrlAddressValidator', $this);

        $this->Flow_setRelatedEntities();
    }
}
# PathAndFilename: C:\Bitnami\neos-4.1.7-neu\apps\neos\htdocs\Packages\Application\Neos.Party\Classes\Validation\Validator\UrlAddressValidator.php
#