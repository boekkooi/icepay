<?php

namespace Icepay\Api\IcePay;

/**
 * Class representing SMSCheckout
 *
 * @see connect.icepay.com#SMSCheckout
 */
class SMSCheckout
{

    /**
     * @var \Icepay\Api\DataContract\CheckoutRequestType|null
     */
    protected $request = null;

    /**
     * Gets the request.
     *
     * @return \Icepay\Api\DataContract\CheckoutRequestType|null
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Sets the request.
     *
     * @param \Icepay\Api\DataContract\CheckoutRequestType|null $request
     * @return $this
     */
    public function setRequest(\Icepay\Api\DataContract\CheckoutRequestType $request = null)
    {
        $this->request = $request;
        return $this;
    }


}

