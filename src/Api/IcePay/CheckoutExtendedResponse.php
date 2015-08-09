<?php

namespace Icepay\Api\IcePay;

/**
 * Class representing CheckoutExtendedResponse
 *
 * @see connect.icepay.com#CheckoutExtendedResponse
 */
class CheckoutExtendedResponse
{

    /**
     * @var \Icepay\Api\DataContract\CheckoutResponseType|null
     */
    protected $CheckoutExtendedResult = null;

    /**
     * Gets the CheckoutExtendedResult.
     *
     * @return \Icepay\Api\DataContract\CheckoutResponseType|null
     */
    public function getCheckoutExtendedResult()
    {
        return $this->CheckoutExtendedResult;
    }

    /**
     * Sets the CheckoutExtendedResult.
     *
     * @param \Icepay\Api\DataContract\CheckoutResponseType|null $CheckoutExtendedResult
     * @return $this
     */
    public function setCheckoutExtendedResult(\Icepay\Api\DataContract\CheckoutResponseType $CheckoutExtendedResult = null)
    {
        $this->CheckoutExtendedResult = $CheckoutExtendedResult;
        return $this;
    }


}

