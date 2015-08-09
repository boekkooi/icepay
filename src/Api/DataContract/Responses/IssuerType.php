<?php

namespace Icepay\Api\DataContract\Responses;

/**
 * Class representing Issuer
 *
 *
 *
 * @see http://schemas.datacontract.org/2004/07/APIService.Responses#Issuer
 */
class IssuerType
{

    /**
     * @var \Icepay\Api\DataContract\Responses\CountryType[]|null
     */
    protected $Countries = array();

    /**
     * @var string|null
     */
    protected $Description = null;

    /**
     * @var string|null
     */
    protected $IssuerKeyword = null;

    /**
     * Gets the Countries.
     *
     * @return \Icepay\Api\DataContract\Responses\CountryType[]|null
     */
    public function getCountries()
    {
        return $this->Countries;
    }

    /**
     * Sets the Countries.
     *
     * @param \Icepay\Api\DataContract\Responses\CountryType[]|null $Countries
     * @return $this
     */
    public function setCountries(array $Countries = null)
    {
        foreach ($Countries as $item) {
            $this->addCountry($item);
        }
        return $this;
    }

    /**
     * Adds an Country.
     *
     * @param \Icepay\Api\DataContract\Responses\CountryType $Country The Country to add.
     * @return $this
     */
    public function addCountry(\Icepay\Api\DataContract\Responses\CountryType $Country)
    {
        $this->Countries[] = $Country;
        return $this;
    }

    /**
     * Sets an Country at the specified key/index.
     *
     * @param string|integer $key The key/index of the Country to set.
     * @param \Icepay\Api\DataContract\Responses\CountryType $Country The Country to set.
     * @return $this
     */
    public function setCountry($key, \Icepay\Api\DataContract\Responses\CountryType $Country)
    {
        $this->Countries[$key] = $Country;
        return $this;
    }

    /**
     * Removes the Country at the specified key/index.
     *
     * @param string|integer $key The kex/index of the Country to remove
     * @return \Icepay\Api\DataContract\Responses\CountryType|null The removed Country or NULL.
     */
    public function removeCountry($key)
    {
        if (!isset($this->Countries[$key]) && !array_key_exists($key, $this->Countries)) {
            return null;
        }
        $removed = $this->Countries[$key];
        unset($this->Countries[$key]);
        return $removed;
    }

    /**
     * Removes the Country at the specified key/index.
     *
     * @param \Icepay\Api\DataContract\Responses\CountryType $Country The Country to search for.
     * @return string|integer|bool The key/index of the Country or FALSE if the Country was not found.
     */
    public function indexOfCountry($Country)
    {
        return array_search($Country, $this->Countries, true);
    }

    /**
     * Gets the Description.
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * Sets the Description.
     *
     * @param string|null $Description
     * @return $this
     */
    public function setDescription($Description = null)
    {
        $this->Description = $Description;
        return $this;
    }

    /**
     * Gets the IssuerKeyword.
     *
     * @return string|null
     */
    public function getIssuerKeyword()
    {
        return $this->IssuerKeyword;
    }

    /**
     * Sets the IssuerKeyword.
     *
     * @param string|null $IssuerKeyword
     * @return $this
     */
    public function setIssuerKeyword($IssuerKeyword = null)
    {
        $this->IssuerKeyword = $IssuerKeyword;
        return $this;
    }


}

