<?php

namespace Icepay\Api\Soap\DataContract;

/**
 * Class representing GetPremiumRateNumbersResponse
 *
 *
 *
 * @see http://schemas.datacontract.org/2004/07/APIService#GetPremiumRateNumbersResponse
 */
class GetPremiumRateNumbersResponseType extends BaseTypeType
{

    /**
     * @var \Icepay\Api\Soap\DataContract\PremiumRateNumberInformationType[]|null
     */
    protected $PremiumRateNumbers = array();

    /**
     * Gets the PremiumRateNumbers.
     *
     * @return \Icepay\Api\Soap\DataContract\PremiumRateNumberInformationType[]|null
     */
    public function getPremiumRateNumbers()
    {
        return $this->PremiumRateNumbers;
    }

    /**
     * Sets the PremiumRateNumbers.
     *
     * @param \Icepay\Api\Soap\DataContract\PremiumRateNumberInformationType[]|null $PremiumRateNumbers
     * @return $this
     */
    public function setPremiumRateNumbers(array $PremiumRateNumbers = null)
    {
        foreach ($PremiumRateNumbers as $item) {
            $this->addPremiumRateNumber($item);
        }
        return $this;
    }

    /**
     * Adds an PremiumRateNumber.
     *
     * @param \Icepay\Api\Soap\DataContract\PremiumRateNumberInformationType $PremiumRateNumber The PremiumRateNumber to add.
     * @return $this
     */
    public function addPremiumRateNumber(\Icepay\Api\Soap\DataContract\PremiumRateNumberInformationType $PremiumRateNumber)
    {
        $this->PremiumRateNumbers[] = $PremiumRateNumber;
        return $this;
    }

    /**
     * Sets an PremiumRateNumber at the specified key/index.
     *
     * @param string|integer $key The key/index of the PremiumRateNumber to set.
     * @param \Icepay\Api\Soap\DataContract\PremiumRateNumberInformationType $PremiumRateNumber The PremiumRateNumber to set.
     * @return $this
     */
    public function setPremiumRateNumber($key, \Icepay\Api\Soap\DataContract\PremiumRateNumberInformationType $PremiumRateNumber)
    {
        $this->PremiumRateNumbers[$key] = $PremiumRateNumber;
        return $this;
    }

    /**
     * Removes the PremiumRateNumber at the specified key/index.
     *
     * @param string|integer $key The kex/index of the PremiumRateNumber to remove
     * @return \Icepay\Api\Soap\DataContract\PremiumRateNumberInformationType|null The removed PremiumRateNumber or NULL.
     */
    public function removePremiumRateNumber($key)
    {
        if (!isset($this->PremiumRateNumbers[$key]) && !array_key_exists($key, $this->PremiumRateNumbers)) {
            return null;
        }
        $removed = $this->PremiumRateNumbers[$key];
        unset($this->PremiumRateNumbers[$key]);
        return $removed;
    }

    /**
     * Removes the PremiumRateNumber at the specified key/index.
     *
     * @param \Icepay\Api\Soap\DataContract\PremiumRateNumberInformationType $PremiumRateNumber The PremiumRateNumber to search for.
     * @return string|integer|bool The key/index of the PremiumRateNumber or FALSE if the PremiumRateNumber was not found.
     */
    public function indexOfPremiumRateNumber($PremiumRateNumber)
    {
        return array_search($PremiumRateNumber, $this->PremiumRateNumbers, true);
    }


}

