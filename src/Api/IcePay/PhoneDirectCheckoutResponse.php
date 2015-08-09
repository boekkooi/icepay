<?php

namespace Icepay\Api\IcePay;

/**
 * Class representing PhoneDirectCheckoutResponse
 *
 * @see connect.icepay.com#PhoneDirectCheckoutResponse
 */
class PhoneDirectCheckoutResponse
{

    /**
     * @var \Icepay\Api\DataContract\PhoneDirectCheckoutResponseType|null
     */
    protected $PhoneDirectCheckoutResult = null;

    /**
     * Gets the PhoneDirectCheckoutResult.
     *
     * @return \Icepay\Api\DataContract\PhoneDirectCheckoutResponseType|null
     */
    public function getPhoneDirectCheckoutResult()
    {
        return $this->PhoneDirectCheckoutResult;
    }

    /**
     * Sets the PhoneDirectCheckoutResult.
     *
     * @param \Icepay\Api\DataContract\PhoneDirectCheckoutResponseType|null $PhoneDirectCheckoutResult
     * @return $this
     */
    public function setPhoneDirectCheckoutResult(\Icepay\Api\DataContract\PhoneDirectCheckoutResponseType $PhoneDirectCheckoutResult = null)
    {
        $this->PhoneDirectCheckoutResult = $PhoneDirectCheckoutResult;
        return $this;
    }


}

