<?php

namespace Icepay\Api\IcePay;

/**
 * Class representing AutomaticCheckoutResponse
 *
 * @see connect.icepay.com#AutomaticCheckoutResponse
 */
class AutomaticCheckoutResponse
{

    /**
     * @var \Icepay\Api\DataContract\AutomaticCheckoutResponseType|null
     */
    protected $AutomaticCheckoutResult = null;

    /**
     * Gets the AutomaticCheckoutResult.
     *
     * @return \Icepay\Api\DataContract\AutomaticCheckoutResponseType|null
     */
    public function getAutomaticCheckoutResult()
    {
        return $this->AutomaticCheckoutResult;
    }

    /**
     * Sets the AutomaticCheckoutResult.
     *
     * @param \Icepay\Api\DataContract\AutomaticCheckoutResponseType|null $AutomaticCheckoutResult
     * @return $this
     */
    public function setAutomaticCheckoutResult(\Icepay\Api\DataContract\AutomaticCheckoutResponseType $AutomaticCheckoutResult = null)
    {
        $this->AutomaticCheckoutResult = $AutomaticCheckoutResult;
        return $this;
    }


}

