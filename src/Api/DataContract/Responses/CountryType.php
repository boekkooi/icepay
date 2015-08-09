<?php

namespace Icepay\Api\DataContract\Responses;

/**
 * Class representing Country
 *
 *
 *
 * @see http://schemas.datacontract.org/2004/07/APIService.Responses#Country
 */
class CountryType
{

    /**
     * @var string|null
     */
    protected $CountryCode = null;

    /**
     * @var string|null
     */
    protected $Currency = null;

    /**
     * @var int|null
     */
    protected $MaximumAmount = null;

    /**
     * @var int|null
     */
    protected $MinimumAmount = null;

    /**
     * Gets the CountryCode.
     *
     * @return string|null
     */
    public function getCountryCode()
    {
        return $this->CountryCode;
    }

    /**
     * Sets the CountryCode.
     *
     * @param string|null $CountryCode
     * @return $this
     */
    public function setCountryCode($CountryCode = null)
    {
        $this->CountryCode = $CountryCode;
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
     * Gets the MaximumAmount.
     *
     * @return int|null
     */
    public function getMaximumAmount()
    {
        return $this->MaximumAmount;
    }

    /**
     * Sets the MaximumAmount.
     *
     * @param int|null $MaximumAmount
     * @return $this
     */
    public function setMaximumAmount($MaximumAmount = null)
    {
        $this->MaximumAmount = $MaximumAmount;
        return $this;
    }

    /**
     * Gets the MinimumAmount.
     *
     * @return int|null
     */
    public function getMinimumAmount()
    {
        return $this->MinimumAmount;
    }

    /**
     * Sets the MinimumAmount.
     *
     * @param int|null $MinimumAmount
     * @return $this
     */
    public function setMinimumAmount($MinimumAmount = null)
    {
        $this->MinimumAmount = $MinimumAmount;
        return $this;
    }


}

