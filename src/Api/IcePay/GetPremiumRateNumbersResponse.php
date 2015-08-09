<?php

namespace Icepay\Api\IcePay;

/**
 * Class representing GetPremiumRateNumbersResponse
 *
 * @see connect.icepay.com#GetPremiumRateNumbersResponse
 */
class GetPremiumRateNumbersResponse
{

    /**
     * @var \Icepay\Api\DataContract\GetPremiumRateNumbersResponseType|null
     */
    protected $GetPremiumRateNumbersResult = null;

    /**
     * Gets the GetPremiumRateNumbersResult.
     *
     * @return \Icepay\Api\DataContract\GetPremiumRateNumbersResponseType|null
     */
    public function getGetPremiumRateNumbersResult()
    {
        return $this->GetPremiumRateNumbersResult;
    }

    /**
     * Sets the GetPremiumRateNumbersResult.
     *
     * @param \Icepay\Api\DataContract\GetPremiumRateNumbersResponseType|null $GetPremiumRateNumbersResult
     * @return $this
     */
    public function setGetPremiumRateNumbersResult(\Icepay\Api\DataContract\GetPremiumRateNumbersResponseType $GetPremiumRateNumbersResult = null)
    {
        $this->GetPremiumRateNumbersResult = $GetPremiumRateNumbersResult;
        return $this;
    }


}

