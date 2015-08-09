<?php

namespace Icepay\Api\Soap\DataContract\Responses;

/**
 * Class representing PaymentMethod
 *
 *
 *
 * @see http://schemas.datacontract.org/2004/07/APIService.Responses#PaymentMethod
 */
class PaymentMethodType
{

    /**
     * @var string|null
     */
    protected $Description = null;

    /**
     * @var \Icepay\Api\Soap\DataContract\Responses\IssuerType[]|null
     */
    protected $Issuers = array();

    /**
     * @var string|null
     */
    protected $PaymentMethodCode = null;

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
     * Gets the Issuers.
     *
     * @return \Icepay\Api\Soap\DataContract\Responses\IssuerType[]|null
     */
    public function getIssuers()
    {
        return $this->Issuers;
    }

    /**
     * Sets the Issuers.
     *
     * @param \Icepay\Api\Soap\DataContract\Responses\IssuerType[]|null $Issuers
     * @return $this
     */
    public function setIssuers(array $Issuers = null)
    {
        foreach ($Issuers as $item) {
            $this->addIssuer($item);
        }
        return $this;
    }

    /**
     * Adds an Issuer.
     *
     * @param \Icepay\Api\Soap\DataContract\Responses\IssuerType $Issuer The Issuer to add.
     * @return $this
     */
    public function addIssuer(\Icepay\Api\Soap\DataContract\Responses\IssuerType $Issuer)
    {
        $this->Issuers[] = $Issuer;
        return $this;
    }

    /**
     * Sets an Issuer at the specified key/index.
     *
     * @param string|integer $key The key/index of the Issuer to set.
     * @param \Icepay\Api\Soap\DataContract\Responses\IssuerType $Issuer The Issuer to set.
     * @return $this
     */
    public function setIssuer($key, \Icepay\Api\Soap\DataContract\Responses\IssuerType $Issuer)
    {
        $this->Issuers[$key] = $Issuer;
        return $this;
    }

    /**
     * Removes the Issuer at the specified key/index.
     *
     * @param string|integer $key The kex/index of the Issuer to remove
     * @return \Icepay\Api\Soap\DataContract\Responses\IssuerType|null The removed Issuer or NULL.
     */
    public function removeIssuer($key)
    {
        if (!isset($this->Issuers[$key]) && !array_key_exists($key, $this->Issuers)) {
            return null;
        }
        $removed = $this->Issuers[$key];
        unset($this->Issuers[$key]);
        return $removed;
    }

    /**
     * Removes the Issuer at the specified key/index.
     *
     * @param \Icepay\Api\Soap\DataContract\Responses\IssuerType $Issuer The Issuer to search for.
     * @return string|integer|bool The key/index of the Issuer or FALSE if the Issuer was not found.
     */
    public function indexOfIssuer($Issuer)
    {
        return array_search($Issuer, $this->Issuers, true);
    }

    /**
     * Gets the PaymentMethodCode.
     *
     * @return string|null
     */
    public function getPaymentMethodCode()
    {
        return $this->PaymentMethodCode;
    }

    /**
     * Sets the PaymentMethodCode.
     *
     * @param string|null $PaymentMethodCode
     * @return $this
     */
    public function setPaymentMethodCode($PaymentMethodCode = null)
    {
        $this->PaymentMethodCode = $PaymentMethodCode;
        return $this;
    }


}

