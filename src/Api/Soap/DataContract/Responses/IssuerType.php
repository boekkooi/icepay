<?php

namespace Icepay\Api\Soap\DataContract\Responses;

/**
 * Class representing Issuer
 *
 * @see http://schemas.datacontract.org/2004/07/APIService.Responses#Issuer
 */
class IssuerType
{
    /**
     * @var \Icepay\Api\Soap\DataContract\Responses\CountryType[]|null
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
     * @return \Icepay\Api\Soap\DataContract\Responses\CountryType[]|null
     */
    public function getCountries()
    {
        return $this->Countries;
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
     * Gets the IssuerKeyword.
     *
     * @return string|null
     */
    public function getIssuerKeyword()
    {
        return $this->IssuerKeyword;
    }

    /**
     * @inheritDoc
     */
    public function __wakeup()
    {
        if ($this->Countries instanceof \stdClass) {
            $this->Countries = $this->Countries->Country;
            if (!is_array($this->Countries)) {
                $this->Countries = [ $this->Countries ];
            }

            foreach ($this->Countries as $country) {
                $country->__wakeup();
            }
        }
    }
}

