<?php

namespace Icepay\Api\Assert;

use ReflectionClass;

/**
 * Chaining builder for assertions
 *
 * METHODSTART
 * @method $this eq($value2, $message = null, $propertyPath = null)
 * @method $this same($value2, $message = null, $propertyPath = null)
 * @method $this notEq($value2, $message = null, $propertyPath = null)
 * @method $this notSame($value2, $message = null, $propertyPath = null)
 * @method $this integer($message = null, $propertyPath = null)
 * @method $this float($message = null, $propertyPath = null)
 * @method $this digit($message = null, $propertyPath = null)
 * @method $this integerish($message = null, $propertyPath = null)
 * @method $this boolean($message = null, $propertyPath = null)
 * @method $this scalar($message = null, $propertyPath = null)
 * @method $this notEmpty($message = null, $propertyPath = null)
 * @method $this noContent($message = null, $propertyPath = null)
 * @method $this notNull($message = null, $propertyPath = null)
 * @method $this string($message = null, $propertyPath = null)
 * @method $this regex($pattern, $message = null, $propertyPath = null)
 * @method $this length($length, $message = null, $propertyPath = null, $encoding = "utf8")
 * @method $this minLength($minLength, $message = null, $propertyPath = null, $encoding = "utf8")
 * @method $this maxLength($maxLength, $message = null, $propertyPath = null, $encoding = "utf8")
 * @method $this betweenLength($minLength, $maxLength, $message = null, $propertyPath = null, $encoding = "utf8")
 * @method $this startsWith($needle, $message = null, $propertyPath = null, $encoding = "utf8")
 * @method $this endsWith($needle, $message = null, $propertyPath = null, $encoding = "utf8")
 * @method $this contains($needle, $message = null, $propertyPath = null, $encoding = "utf8")
 * @method $this choice($choices, $message = null, $propertyPath = null)
 * @method $this inArray($choices, $message = null, $propertyPath = null)
 * @method $this numeric($message = null, $propertyPath = null)
 * @method $this isArray($message = null, $propertyPath = null)
 * @method $this isTraversable($message = null, $propertyPath = null)
 * @method $this isArrayAccessible($message = null, $propertyPath = null)
 * @method $this keyExists($key, $message = null, $propertyPath = null)
 * @method $this keyIsset($key, $message = null, $propertyPath = null)
 * @method $this notEmptyKey($key, $message = null, $propertyPath = null)
 * @method $this notBlank($message = null, $propertyPath = null)
 * @method $this isInstanceOf($className, $message = null, $propertyPath = null)
 * @method $this notIsInstanceOf($className, $message = null, $propertyPath = null)
 * @method $this subclassOf($className, $message = null, $propertyPath = null)
 * @method $this range($minValue, $maxValue, $message = null, $propertyPath = null)
 * @method $this min($minValue, $message = null, $propertyPath = null)
 * @method $this max($maxValue, $message = null, $propertyPath = null)
 * @method $this file($message = null, $propertyPath = null)
 * @method $this directory($message = null, $propertyPath = null)
 * @method $this readable($message = null, $propertyPath = null)
 * @method $this writeable($message = null, $propertyPath = null)
 * @method $this email($message = null, $propertyPath = null)
 * @method $this url($message = null, $propertyPath = null)
 * @method $this alnum($message = null, $propertyPath = null)
 * @method $this true($message = null, $propertyPath = null)
 * @method $this false($message = null, $propertyPath = null)
 * @method $this classExists($message = null, $propertyPath = null)
 * @method $this implementsInterface($interfaceName, $message = null, $propertyPath = null)
 * @method $this isJsonString($message = null, $propertyPath = null)
 * @method $this uuid($message = null, $propertyPath = null)
 * @method $this count($count, $message = null, $propertyPath = null)
 * @method $this choicesNotEmpty($choices, $message = null, $propertyPath = null)
 * @method $this methodExists($object, $message = null, $propertyPath = null)
 * @method $this isObject($message = null, $propertyPath = null)
 * @method $this ip($message = null, $propertyPath = null)
 * @method $this ipv4($message = null, $propertyPath = null)
 * @method $this ipv4InSubnetMask($subnetmask, $message = null, $propertyPath = null)
 * METHODEND
 */
class AssertionChain
{
    private $value;
    private $defaultMessage;
    private $defaultPropertyPath;

    /**
     * Return each assertion as always valid.
     *
     * @var bool
     */
    private $alwaysValid = false;

    /**
     * Perform assertion on every element of array or traversable.
     *
     * @var bool
     */
    private $all = false;

    public function __construct($value, $defaultMessage = null, $defaultPropertyPath = null)
    {
        $this->value = $value;
        $this->defaultMessage = $defaultMessage;
        $this->defaultPropertyPath = $defaultPropertyPath;
    }

    /**
     * Call assertion on the current value in the chain.
     *
     * @param string $methodName
     * @param array $args
     *
     * @return \Assert\AssertionChain
     */
    public function __call($methodName, $args)
    {
        if ($this->alwaysValid === true) {
            return $this;
        }

        if (!method_exists(__NAMESPACE__ . '\Assertion', $methodName)) {
            throw new \RuntimeException("Assertion '" . $methodName . "' does not exist.");
        }

        $reflClass = new ReflectionClass(__NAMESPACE__ . '\Assertion');
        $method = $reflClass->getMethod($methodName);

        array_unshift($args, $this->value);
        $params = $method->getParameters();

        foreach ($params as $idx => $param) {
            if (isset($args[$idx])) {
                continue;
            }

            if ($param->getName() == 'message') {
                $args[$idx] = $this->defaultMessage;
            }

            if ($param->getName() == 'propertyPath') {
                $args[$idx] = $this->defaultPropertyPath;
            }
        }

        if ($this->all) {
            $methodName = 'all' . $methodName;
        }

        call_user_func_array(array(__NAMESPACE__ . '\Assertion', $methodName), $args);

        return $this;
    }

    /**
     * Switch chain into validation mode for an array of values.
     *
     * @return AssertionChain
     */
    public function all()
    {
        $this->all = true;

        return $this;
    }

    /**
     * Switch chain into mode allowing nulls, ignoring further assertions.
     *
     * @return AssertionChain
     */
    public function nullOr()
    {
        if ($this->value === null) {
            $this->alwaysValid = true;
        }

        return $this;
    }
}
