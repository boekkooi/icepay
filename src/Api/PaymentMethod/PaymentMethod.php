<?php
namespace Icepay\Api\PaymentMethod;

/**
 *  The PaymentMethod class is the base class for all payment method
 */
interface PaymentMethod
{
    /**
     * Get the identification code (used by the API)
     *
     * @return string
     */
    public function getCode();

    /**
     * Get the (user friendly) name
     *
     * @return string
     */
    public function getName();

    /**
     * Get the payment issuers
     *
     * @return string[]
     */
    public function getIssuers();

    /**
     * Get the country codes in which the payment method works/operates
     *
     * @return string[]
     */
    public function getCountries();

    /**
     * Get the language codes in which the payment method is available
     *
     * @return string[]
     */
    public function getLanguages();

    /**
     * Get the minimum order amount in cents.
     *
     * @return int
     */
    public function getMinimumOrderAmount();

    /**
     * Get the maximum order amount in cents.
     *
     * @return int
     */
    public function getMaximumOrderAmount();
}
