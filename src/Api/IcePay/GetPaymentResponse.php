<?php

namespace Icepay\Api\IcePay;

/**
 * Class representing GetPaymentResponse
 *
 * @see connect.icepay.com#GetPaymentResponse
 */
class GetPaymentResponse
{

    /**
     * @var \Icepay\Api\DataContract\GetPaymentResponseType|null
     */
    protected $GetPaymentResult = null;

    /**
     * Gets the GetPaymentResult.
     *
     * @return \Icepay\Api\DataContract\GetPaymentResponseType|null
     */
    public function getGetPaymentResult()
    {
        return $this->GetPaymentResult;
    }

    /**
     * Sets the GetPaymentResult.
     *
     * @param \Icepay\Api\DataContract\GetPaymentResponseType|null $GetPaymentResult
     * @return $this
     */
    public function setGetPaymentResult(\Icepay\Api\DataContract\GetPaymentResponseType $GetPaymentResult = null)
    {
        $this->GetPaymentResult = $GetPaymentResult;
        return $this;
    }


}

