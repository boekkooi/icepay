<?php

namespace Icepay\Api\Soap\IcePay;

/**
 * Class representing CheckoutExtended
 *
 * @see connect.icepay.com#CheckoutExtended
 */
class CheckoutExtended
{

    /**
     * @var \Icepay\Api\Soap\DataContract\CheckoutExtendedRequestType|null
     */
    protected $request = null;

    /**
     * Gets the request.
     *
     * @return \Icepay\Api\Soap\DataContract\CheckoutExtendedRequestType|null
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Sets the request.
     *
     * @param \Icepay\Api\Soap\DataContract\CheckoutExtendedRequestType|null $request
     * @return $this
     */
    public function setRequest(\Icepay\Api\Soap\DataContract\CheckoutExtendedRequestType $request = null)
    {
        $this->request = $request;
        return $this;
    }


}

