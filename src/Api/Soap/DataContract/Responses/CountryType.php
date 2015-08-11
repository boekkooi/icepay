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
     * @var string[]
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
     * Gets the Currencies.
     *
     * @return string[]
     */
    public function getCurrencies()
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

    /**
     * @inheritDoc
     */
    public function __wakeup()
    {
        if (is_string($this->Currency)) {
            $this->Currency = array_map('trim', explode(',', $this->Currency));
        }
    }
}

