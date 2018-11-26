<?php 
namespace Neos\Neos\Validation\Validator;

/*
 * This file is part of the Neos.Neos package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\Flow\Annotations as Flow;
use Neos\Flow\Validation\Exception\InvalidSubjectException;
use Neos\Flow\Validation\Validator\AbstractValidator;
use Neos\Neos\Domain\Service\UserService;

/**
 * Validator for Neos users
 */
class UserDoesNotExistValidator_Original extends AbstractValidator
{
    /**
     * @Flow\Inject
     * @var UserService
     */
    protected $userService;

    /**
     * Returns true, if the specified user ($value) does not exist yet.
     *
     * If at least one error occurred, the result is false.
     *
     * @param mixed $value The value that should be validated
     * @return void
     * @throws InvalidSubjectException
     */
    protected function isValid($value)
    {
        if (!is_string($value)) {
            throw new InvalidSubjectException('The given username was not a string.', 1325155784);
        }

        if ($this->userService->getUser($value) !== null) {
            $this->addError('The username is already in use.', 1325156008);
        }
    }
}

#
# Start of Flow generated Proxy code
#
namespace Neos\Neos\Validation\Validator;

use Doctrine\ORM\Mapping as ORM;
use Neos\Flow\Annotations as Flow;

/**
 * Validator for Neos users
 */
class UserDoesNotExistValidator extends UserDoesNotExistValidator_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     * @param array $options Options for the validator
     * @throws InvalidValidationOptionsException if unsupported options are found
     */
    public function __construct()
    {
        $arguments = func_get_args();
        call_user_func_array('parent::__construct', $arguments);
        if ('Neos\Neos\Validation\Validator\UserDoesNotExistValidator' === get_class($this)) {
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
  'userService' => 'Neos\\Neos\\Domain\\Service\\UserService',
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

        $this->Flow_setRelatedEntities();
        $this->Flow_Proxy_injectProperties();
    }

    /**
     * Autogenerated Proxy Method
     */
    private function Flow_Proxy_injectProperties()
    {
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Neos\Domain\Service\UserService', 'Neos\Neos\Domain\Service\UserService', 'userService', '187743c7a02891374827e34e9a230cc7', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Neos\Domain\Service\UserService'); });
        $this->Flow_Injected_Properties = array (
  0 => 'userService',
);
    }
}
# PathAndFilename: C:\Bitnami\neos-4.1.7-neu\apps\neos\htdocs\Packages\Application\Neos.Neos\Classes\Validation\Validator\UserDoesNotExistValidator.php
#