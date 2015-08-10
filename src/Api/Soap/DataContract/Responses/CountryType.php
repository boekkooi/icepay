<?php

namespace Icepay\Api\Soap\DataContract\Responses;

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
     * Gets the Currency.
     *
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->Currency;
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
     * Gets the MinimumAmount.
     *
     * @return int|null
     */
    public function getMinimumAmount()
    {
        return $this->MinimumAmount;
    }
}

