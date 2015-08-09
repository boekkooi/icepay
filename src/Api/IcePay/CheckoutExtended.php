<?php

namespace Icepay\Api\IcePay;

/**
 * Class representing CheckoutExtended
 *
 * @see connect.icepay.com#CheckoutExtended
 */
class CheckoutExtended
{

    /**
     * @var \Icepay\Api\DataContract\CheckoutExtendedRequestType|null
     */
    protected $request = null;

    /**
     * Gets the request.
     *
     * @return \Icepay\Api\DataContract\CheckoutExtendedRequestType|null
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Sets the request.
     *
     * @param \Icepay\Api\DataContract\CheckoutExtendedRequestType|null $request
     * @return $this
     */
    public function setRequest(\Icepay\Api\DataContract\CheckoutExtendedRequestType $request = null)
    {
        $this->request = $request;
        return $this;
    }


}

