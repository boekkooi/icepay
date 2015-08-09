<?php

namespace Icepay\Api\IcePay;

/**
 * Class representing PhoneCheckoutResponse
 *
 * @see connect.icepay.com#PhoneCheckoutResponse
 */
class PhoneCheckoutResponse
{

    /**
     * @var \Icepay\Api\DataContract\PhoneCheckoutResponseType|null
     */
    protected $PhoneCheckoutResult = null;

    /**
     * Gets the PhoneCheckoutResult.
     *
     * @return \Icepay\Api\DataContract\PhoneCheckoutResponseType|null
     */
    public function getPhoneCheckoutResult()
    {
        return $this->PhoneCheckoutResult;
    }

    /**
     * Sets the PhoneCheckoutResult.
     *
     * @param \Icepay\Api\DataContract\PhoneCheckoutResponseType|null $PhoneCheckoutResult
     * @return $this
     */
    public function setPhoneCheckoutResult(\Icepay\Api\DataContract\PhoneCheckoutResponseType $PhoneCheckoutResult = null)
    {
        $this->PhoneCheckoutResult = $PhoneCheckoutResult;
        return $this;
    }


}

