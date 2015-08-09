<?php

namespace Icepay\Api\IcePay;

/**
 * Class representing GetMyPaymentMethodsResponse
 *
 * @see connect.icepay.com#GetMyPaymentMethodsResponse
 */
class GetMyPaymentMethodsResponse
{

    /**
     * @var \Icepay\Api\DataContract\GetMyPaymentMethodResponseType|null
     */
    protected $GetMyPaymentMethodsResult = null;

    /**
     * Gets the GetMyPaymentMethodsResult.
     *
     * @return \Icepay\Api\DataContract\GetMyPaymentMethodResponseType|null
     */
    public function getGetMyPaymentMethodsResult()
    {
        return $this->GetMyPaymentMethodsResult;
    }

    /**
     * Sets the GetMyPaymentMethodsResult.
     *
     * @param \Icepay\Api\DataContract\GetMyPaymentMethodResponseType|null $GetMyPaymentMethodsResult
     * @return $this
     */
    public function setGetMyPaymentMethodsResult(\Icepay\Api\DataContract\GetMyPaymentMethodResponseType $GetMyPaymentMethodsResult = null)
    {
        $this->GetMyPaymentMethodsResult = $GetMyPaymentMethodsResult;
        return $this;
    }


}

