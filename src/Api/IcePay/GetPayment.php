<?php

namespace Icepay\Api\IcePay;

/**
 * Class representing GetPayment
 *
 * @see connect.icepay.com#GetPayment
 */
class GetPayment
{

    /**
     * @var \Icepay\Api\DataContract\GetPaymentRequestType|null
     */
    protected $request = null;

    /**
     * Gets the request.
     *
     * @return \Icepay\Api\DataContract\GetPaymentRequestType|null
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Sets the request.
     *
     * @param \Icepay\Api\DataContract\GetPaymentRequestType|null $request
     * @return $this
     */
    public function setRequest(\Icepay\Api\DataContract\GetPaymentRequestType $request = null)
    {
        $this->request = $request;
        return $this;
    }


}

