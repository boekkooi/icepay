<?php

namespace Icepay\Api\IcePay;

/**
 * Class representing GetPaymentMethodsResponse
 *
 * @see connect.icepay.com#GetPaymentMethodsResponse
 */
class GetPaymentMethodsResponse
{

    /**
     * @var \Icepay\Api\DataContract\GetPaymentMethodsResponseType|null
     */
    protected $GetPaymentMethodsResult = null;

    /**
     * Gets the GetPaymentMethodsResult.
     *
     * @return \Icepay\Api\DataContract\GetPaymentMethodsResponseType|null
     */
    public function getGetPaymentMethodsResult()
    {
        return $this->GetPaymentMethodsResult;
    }

    /**
     * Sets the GetPaymentMethodsResult.
     *
     * @param \Icepay\Api\DataContract\GetPaymentMethodsResponseType|null $GetPaymentMethodsResult
     * @return $this
     */
    public function setGetPaymentMethodsResult(\Icepay\Api\DataContract\GetPaymentMethodsResponseType $GetPaymentMethodsResult = null)
    {
        $this->GetPaymentMethodsResult = $GetPaymentMethodsResult;
        return $this;
    }


}

