<?php

namespace Icepay\Api\IcePay;

/**
 * Class representing AutomaticCheckout
 *
 * @see connect.icepay.com#AutomaticCheckout
 */
class AutomaticCheckout
{

    /**
     * @var \Icepay\Api\DataContract\AutomaticCheckoutRequestType|null
     */
    protected $request = null;

    /**
     * Gets the request.
     *
     * @return \Icepay\Api\DataContract\AutomaticCheckoutRequestType|null
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Sets the request.
     *
     * @param \Icepay\Api\DataContract\AutomaticCheckoutRequestType|null $request
     * @return $this
     */
    public function setRequest(\Icepay\Api\DataContract\AutomaticCheckoutRequestType $request = null)
    {
        $this->request = $request;
        return $this;
    }


}

