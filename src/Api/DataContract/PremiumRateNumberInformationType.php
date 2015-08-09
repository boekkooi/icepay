<?php

namespace Icepay\Api\DataContract;

/**
 * Class representing PremiumRateNumberInformation
 *
 *
 *
 * @see http://schemas.datacontract.org/2004/07/APIService#PremiumRateNumberInformation
 */
class PremiumRateNumberInformationType
{

    /**
     * @var string|null
     */
    protected $Country = null;

    /**
     * @var string|null
     */
    protected $Currency = null;

    /**
     * @var string|null
     */
    protected $Issuer = null;

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
     * Gets the Country.
     *
     * @return string|null
     */
    public function getCountry()
    {
        return $this->Country;
    }

    /**
     * Sets the Country.
     *
     * @param string|null $Country
     * @return $this
     */
    public function setCountry($Country = null)
    {
        $this->Country = $Country;
        return $this;
    }

    /**
     * Gets the Currency.
     *
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->Currency;
    }

    /**
     * Sets the Currency.
     *
     * @param string|null $Currency
     * @return $this
     */
    public function setCurrency($Currency = null)
    {
        $this->Currency = $Currency;
        return $this;
    }

    /**
     * Gets the Issuer.
     *
     * @return string|null
     */
    public function getIssuer()
    {
        return $this->Issuer;
    }

    /**
     * Sets the Issuer.
     *
     * @param string|null $Issuer
     * @return $this
     */
    public function setIssuer($Issuer = null)
    {
        $this->Issuer = $Issuer;
        return $this;
    }

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

