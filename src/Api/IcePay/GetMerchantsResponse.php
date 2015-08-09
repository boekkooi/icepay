<?php

namespace Icepay\Api\IcePay;

/**
 * Class representing GetMerchantsResponse
 *
 * @see connect.icepay.com#GetMerchantsResponse
 */
class GetMerchantsResponse
{

    /**
     * @var \Icepay\Api\DataContract\GetMerchantsResponseType|null
     */
    protected $GetMerchantsResult = null;

    /**
     * Gets the GetMerchantsResult.
     *
     * @return \Icepay\Api\DataContract\GetMerchantsResponseType|null
     */
    public function getGetMerchantsResult()
    {
        return $this->GetMerchantsResult;
    }

    /**
     * Sets the GetMerchantsResult.
     *
     * @param \Icepay\Api\DataContract\GetMerchantsResponseType|null $GetMerchantsResult
     * @return $this
     */
    public function setGetMerchantsResult(\Icepay\Api\DataContract\GetMerchantsResponseType $GetMerchantsResult = null)
    {
        $this->GetMerchantsResult = $GetMerchantsResult;
        return $this;
    }


}

