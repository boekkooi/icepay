<?php
namespace Icepay\Api;

final class Assert
{
    private function __construct() {}

    /**
     * Start validation on a value, returns {@link AssertionChain}
     *
     * The invocation of this method starts an assertion chain
     * that is happening on the passed value.
     *
     * The assertion chain can be stateful, that means be careful when you reuse
     * it. You should never pass around the chain.
     *
     * @param mixed $value
     * @param string|null $defaultMessage
     * @param string|null $defaultPropertyPath
     *
     * @return Assert\AssertionChain
     */
    public static function that($value, $defaultMessage = null, $defaultPropertyPath = null)
    {
        return new Assert\AssertionChain($value, $defaultMessage, $defaultPropertyPath);
    }

    /**
     * Create a lazy assertion object.
     *
     * @return Assert\LazyAssertion
     */
    public static function lazy()
    {
        return new Assert\LazyAssertion();
    }
}
