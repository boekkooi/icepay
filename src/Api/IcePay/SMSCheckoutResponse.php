<?php

namespace Icepay\Api\IcePay;

/**
 * Class representing SMSCheckoutResponse
 *
 * @see connect.icepay.com#SMSCheckoutResponse
 */
class SMSCheckoutResponse
{

    /**
     * @var \Icepay\Api\DataContract\SMSCheckoutResponseType|null
     */
    protected $SMSCheckoutResult = null;

    /**
     * Gets the SMSCheckoutResult.
     *
     * @return \Icepay\Api\DataContract\SMSCheckoutResponseType|null
     */
    public function getSMSCheckoutResult()
    {
        return $this->SMSCheckoutResult;
    }

    /**
     * Sets the SMSCheckoutResult.
     *
     * @param \Icepay\Api\DataContract\SMSCheckoutResponseType|null $SMSCheckoutResult
     * @return $this
     */
    public function setSMSCheckoutResult(\Icepay\Api\DataContract\SMSCheckoutResponseType $SMSCheckoutResult = null)
    {
        $this->SMSCheckoutResult = $SMSCheckoutResult;
        return $this;
    }


}

