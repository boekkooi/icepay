<?php

namespace Icepay\Api\IcePay;

/**
 * Class representing GetPaymentRefundsResponse
 *
 * @see connect.icepay.com#GetPaymentRefundsResponse
 */
class GetPaymentRefundsResponse
{

    /**
     * @var \Icepay\Api\DataContract\GetPaymentRefundsResponseType|null
     */
    protected $GetPaymentRefundsResult = null;

    /**
     * Gets the GetPaymentRefundsResult.
     *
     * @return \Icepay\Api\DataContract\GetPaymentRefundsResponseType|null
     */
    public function getGetPaymentRefundsResult()
    {
        return $this->GetPaymentRefundsResult;
    }

    /**
     * Sets the GetPaymentRefundsResult.
     *
     * @param \Icepay\Api\DataContract\GetPaymentRefundsResponseType|null $GetPaymentRefundsResult
     * @return $this
     */
    public function setGetPaymentRefundsResult(\Icepay\Api\DataContract\GetPaymentRefundsResponseType $GetPaymentRefundsResult = null)
    {
        $this->GetPaymentRefundsResult = $GetPaymentRefundsResult;
        return $this;
    }


}

