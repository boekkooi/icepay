<?php

namespace Icepay\Api\IcePay;

/**
 * Class representing PhoneDirectCheckout
 *
 * @see connect.icepay.com#PhoneDirectCheckout
 */
class PhoneDirectCheckout
{

    /**
     * @var \Icepay\Api\DataContract\CheckoutWithPINRequestType|null
     */
    protected $request = null;

    /**
     * Gets the request.
     *
     * @return \Icepay\Api\DataContract\CheckoutWithPINRequestType|null
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Sets the request.
     *
     * @param \Icepay\Api\DataContract\CheckoutWithPINRequestType|null $request
     * @return $this
     */
    public function setRequest(\Icepay\Api\DataContract\CheckoutWithPINRequestType $request = null)
    {
        $this->request = $request;
        return $this;
    }


}

