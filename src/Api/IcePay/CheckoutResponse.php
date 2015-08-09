<?php

namespace Icepay\Api\IcePay;

/**
 * Class representing CheckoutResponse
 *
 * @see connect.icepay.com#CheckoutResponse
 */
class CheckoutResponse
{

    /**
     * @var \Icepay\Api\DataContract\CheckoutResponseType|null
     */
    protected $CheckoutResult = null;

    /**
     * Gets the CheckoutResult.
     *
     * @return \Icepay\Api\DataContract\CheckoutResponseType|null
     */
    public function getCheckoutResult()
    {
        return $this->CheckoutResult;
    }

    /**
     * Sets the CheckoutResult.
     *
     * @param \Icepay\Api\DataContract\CheckoutResponseType|null $CheckoutResult
     * @return $this
     */
    public function setCheckoutResult(\Icepay\Api\DataContract\CheckoutResponseType $CheckoutResult = null)
    {
        $this->CheckoutResult = $CheckoutResult;
        return $this;
    }


}

