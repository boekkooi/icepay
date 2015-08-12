<?php
namespace Icepay\Api\Assert;

/**
 *
 * METHODSTART
 * @method static void nullOrIp($value, $message = null, $propertyPath = null)
 * @method static void nullOrIpv4($value, $message = null, $propertyPath = null)
 * @method static void nullOrIpv4InSubnetMask($value, $subnetmask, $message = null, $propertyPath = null)
 * @method static void allIp($value, $message = null, $propertyPath = null)
 * @method static void allIpv4($value, $message = null, $propertyPath = null)
 * @method static void allIpv4InSubnetMask($value, $subnetmask, $message = null, $propertyPath = null)
 * METHODEND
 */
class Assertion extends \Assert\Assertion
{
    const INVALID_IP = 301;
    const INVALID_IPV4 = 302;
    const INVALID_IPV4_SUBNETMASK = 303;

    static protected $exceptionClass = 'Icepay\Api\Assert\Exception\InvalidArgumentException';

    /**
     * Assert that value is a ip string
     *
     * @param mixed $value
     * @param string|null $message
     * @param string|null $propertyPath
     * @return void
     * @throws Exception\AssertionFailedException
     */
    public static function ip($value, $message = null, $propertyPath = null)
    {
        static::string($value, $message, $propertyPath);

        if ( filter_var($value, FILTER_VALIDATE_IP) === false ) {
            $message = sprintf(
                $message ?: 'Value "%s" is not a valid ip address.',
                self::stringify($value)
            );

            throw static::createException($value, $message, static::INVALID_IP , $propertyPath);
        }
    }

    /**
     * Assert that value is a ipv4 string
     *
     * @param mixed $value
     * @param string|null $message
     * @param string|null $propertyPath
     * @return void
     * @throws Exception\AssertionFailedException
     */
    public static function ipv4($value, $message = null, $propertyPath = null)
    {
        static::string($value, $message, $propertyPath);

        if ( filter_var($value, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4) === false ) {
            $message = sprintf(
                $message ?: 'Value "%s" is not a valid ipv4 address.',
                self::stringify($value)
            );

            throw static::createException($value, $message, static::INVALID_IPV4, $propertyPath);
        }
    }

    /**
     * Assert that value is a ipv4 and in the given subnet mask.
     *
     * @param mixed $value
     * @param string|string[] $subnetMask
     * @param string|null $message
     * @param string|null $propertyPath
     * @throws Exception\AssertionFailedException
     */
    public static function ipv4InSubnetMask($value, $subnetMask, $message = null, $propertyPath = null)
    {
        if (is_array($subnetMask)) {
            foreach ($subnetMask as $item) {
                try {
                    static::ipv4InSubnetMask($value, $item, $message, $propertyPath);
                    return;
                } catch (\InvalidArgumentException $ex) {}
            }

            $message = sprintf(
                $message ?: 'Value "%s" is not within the %s subnet masks.',
                self::stringify($value),
                implode(' or ', $subnetMask)
            );
            throw static::createException($value, $message, static::INVALID_IPV4_SUBNETMASK, $propertyPath, array('subnetMask' => $subnetMask));
        }

        self::ipv4($value, null, $propertyPath);

        // Extract subnetmask data
        list($lower, $netmask) = explode('/', $subnetMask, 2);
        $lower   = ip2long($lower);
        $netmask = -1 << (32 - $netmask) & ip2long('255.255.255.255');
        $lower  &= $netmask;

        // Check if the ip is valid
        if ((ip2long($value) & $netmask) !== $lower) {
            $message = sprintf(
                $message ?: 'Value "%s" is not within the %s subnet.',
                self::stringify($value),
                $subnetMask
            );

            throw static::createException($value, $message, static::INVALID_IPV4_SUBNETMASK , $propertyPath, array('subnetMask' => $subnetMask));
        }
    }

    /**
     * Make a string version of a value.
     *
     * @param mixed $value
     * @return string
     */
    protected static function stringify($value)
    {
        if (is_bool($value)) {
            return $value ? '<TRUE>' : '<FALSE>';
        }

        if (is_scalar($value)) {
            $val = (string)$value;

            if (strlen($val) > 100) {
                $val = substr($val, 0, 97) . '...';
            }

            return $val;
        }

        if (is_array($value)) {
            return '<ARRAY>';
        }

        if (is_object($value)) {
            return get_class($value);
        }

        if (is_resource($value)) {
            return '<RESOURCE>';
        }

        if ($value === NULL) {
            return '<NULL>';
        }

        return 'unknown';
    }
}
