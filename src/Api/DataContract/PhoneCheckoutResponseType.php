<?php

namespace Icepay\Api\DataContract;

/**
 * Class representing PhoneCheckoutResponse
 *
 *
 *
 * @see http://schemas.datacontract.org/2004/07/APIService#PhoneCheckoutResponse
 */
class PhoneCheckoutResponseType extends CheckoutResponseType
{

    /**
     * @var string|null
     */
    protected $PhoneNumber = null;

    /**
     * @var int|null
     */
    protected $RatePerCall = null;

    /**
     * @var int|null
     */
    protected $RatePerMinute = null;

    /**
     * Gets the PhoneNumber.
     *
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->PhoneNumber;
    }

    /**
     * Sets the PhoneNumber.
     *
     * @param string|null $PhoneNumber
     * @return $this
     */
    public function setPhoneNumber($PhoneNumber = null)
    {
        $this->PhoneNumber = $PhoneNumber;
        return $this;
    }

    /**
     * Gets the RatePerCall.
     *
     * @return int|null
     */
    public function getRatePerCall()
    {
        return $this->RatePerCall;
    }

    /**
     * Sets the RatePerCall.
     *
     * @param int|null $RatePerCall
     * @return $this
     */
    public function setRatePerCall($RatePerCall = null)
    {
        $this->RatePerCall = $RatePerCall;
        return $this;
    }

    /**
     * Gets the RatePerMinute.
     *
     * @return int|null
     */
    public function getRatePerMinute()
    {
        return $this->RatePerMinute;
    }

    /**
     * Sets the RatePerMinute.
     *
     * @param int|null $RatePerMinute
     * @return $this
     */
    public function setRatePerMinute($RatePerMinute = null)
    {
        $this->RatePerMinute = $RatePerMinute;
        return $this;
    }


}

