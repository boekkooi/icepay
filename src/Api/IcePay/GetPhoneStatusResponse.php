<?php

namespace Icepay\Api\IcePay;

/**
 * Class representing GetPhoneStatusResponse
 *
 * @see connect.icepay.com#GetPhoneStatusResponse
 */
class GetPhoneStatusResponse
{

    /**
     * @var \Icepay\Api\DataContract\GetPhoneStatusResponseType|null
     */
    protected $GetPhoneStatusResult = null;

    /**
     * Gets the GetPhoneStatusResult.
     *
     * @return \Icepay\Api\DataContract\GetPhoneStatusResponseType|null
     */
    public function getGetPhoneStatusResult()
    {
        return $this->GetPhoneStatusResult;
    }

    /**
     * Sets the GetPhoneStatusResult.
     *
     * @param \Icepay\Api\DataContract\GetPhoneStatusResponseType|null $GetPhoneStatusResult
     * @return $this
     */
    public function setGetPhoneStatusResult(\Icepay\Api\DataContract\GetPhoneStatusResponseType $GetPhoneStatusResult = null)
    {
        $this->GetPhoneStatusResult = $GetPhoneStatusResult;
        return $this;
    }


}

