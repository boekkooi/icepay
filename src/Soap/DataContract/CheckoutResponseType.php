<?php

namespace Icepay\Api\Soap\DataContract;

/**
 * Class representing CheckoutResponse
 *
 *
 *
 * @see http://schemas.datacontract.org/2004/07/APIService#CheckoutResponse
 */
class CheckoutResponseType extends BaseTypeType
{

    /**
     * @var int|null
     */
    protected $Amount = null;

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
    protected $Description = null;

    /**
     * @var string|null
     */
    protected $EndUserIP = null;

    /**
     * @var string|null
     */
    protected $Issuer = null;

    /**
     * @var string|null
     */
    protected $Language = null;

    /**
     * @var string|null
     */
    protected $OrderID = null;

    /**
     * @var int|null
     */
    protected $PaymentID = null;

    /**
     * @var string|null
     */
    protected $PaymentMethod = null;

    /**
     * @var string|null
     */
    protected $PaymentScreenURL = null;

    /**
     * @var string|null
     */
    protected $ProviderTransactionID = null;

    /**
     * @var string|null
     */
    protected $Reference = null;

    /**
     * @var bool|null
     */
    protected $TestMode = null;

    /**
     * @var string|null
     */
    protected $URLCompleted = null;

    /**
     * @var string|null
     */
    protected $URLError = null;

    /**
     * Gets the Amount.
     *
     * @return int|null
     */
    public function getAmount()
    {
        return $this->Amount;
    }

    /**
     * Sets the Amount.
     *
     * @param int|null $Amount
     * @return $this
     */
    public function setAmount($Amount = null)
    {
        $this->Amount = $Amount;
        return $this;
    }

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
     * Gets the EndUserIP.
     *
     * @return string|null
     */
    public function getEndUserIP()
    {
        return $this->EndUserIP;
    }

    /**
     * Sets the EndUserIP.
     *
     * @param string|null $EndUserIP
     * @return $this
     */
    public function setEndUserIP($EndUserIP = null)
    {
        $this->EndUserIP = $EndUserIP;
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
     * Gets the Language.
     *
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->Language;
    }

    /**
     * Sets the Language.
     *
     * @param string|null $Language
     * @return $this
     */
    public function setLanguage($Language = null)
    {
        $this->Language = $Language;
        return $this;
    }

    /**
     * Gets the OrderID.
     *
     * @return string|null
     */
    public function getOrderID()
    {
        return $this->OrderID;
    }

    /**
     * Sets the OrderID.
     *
     * @param string|null $OrderID
     * @return $this
     */
    public function setOrderID($OrderID = null)
    {
        $this->OrderID = $OrderID;
        return $this;
    }

    /**
     * Gets the PaymentID.
     *
     * @return int|null
     */
    public function getPaymentID()
    {
        return $this->PaymentID;
    }

    /**
     * Sets the PaymentID.
     *
     * @param int|null $PaymentID
     * @return $this
     */
    public function setPaymentID($PaymentID = null)
    {
        $this->PaymentID = $PaymentID;
        return $this;
    }

    /**
     * Gets the PaymentMethod.
     *
     * @return string|null
     */
    public function getPaymentMethod()
    {
        return $this->PaymentMethod;
    }

    /**
     * Sets the PaymentMethod.
     *
     * @param string|null $PaymentMethod
     * @return $this
     */
    public function setPaymentMethod($PaymentMethod = null)
    {
        $this->PaymentMethod = $PaymentMethod;
        return $this;
    }

    /**
     * Gets the PaymentScreenURL.
     *
     * @return string|null
     */
    public function getPaymentScreenURL()
    {
        return $this->PaymentScreenURL;
    }

    /**
     * Sets the PaymentScreenURL.
     *
     * @param string|null $PaymentScreenURL
     * @return $this
     */
    public function setPaymentScreenURL($PaymentScreenURL = null)
    {
        $this->PaymentScreenURL = $PaymentScreenURL;
        return $this;
    }

    /**
     * Gets the ProviderTransactionID.
     *
     * @return string|null
     */
    public function getProviderTransactionID()
    {
        return $this->ProviderTransactionID;
    }

    /**
     * Sets the ProviderTransactionID.
     *
     * @param string|null $ProviderTransactionID
     * @return $this
     */
    public function setProviderTransactionID($ProviderTransactionID = null)
    {
        $this->ProviderTransactionID = $ProviderTransactionID;
        return $this;
    }

    /**
     * Gets the Reference.
     *
     * @return string|null
     */
    public function getReference()
    {
        return $this->Reference;
    }

    /**
     * Sets the Reference.
     *
     * @param string|null $Reference
     * @return $this
     */
    public function setReference($Reference = null)
    {
        $this->Reference = $Reference;
        return $this;
    }

    /**
     * Gets the TestMode.
     *
     * @return bool|null
     */
    public function getTestMode()
    {
        return $this->TestMode;
    }

    /**
     * Sets the TestMode.
     *
     * @param bool|null $TestMode
     * @return $this
     */
    public function setTestMode($TestMode = null)
    {
        $this->TestMode = $TestMode;
        return $this;
    }

    /**
     * Gets the URLCompleted.
     *
     * @return string|null
     */
    public function getURLCompleted()
    {
        return $this->URLCompleted;
    }

    /**
     * Sets the URLCompleted.
     *
     * @param string|null $URLCompleted
     * @return $this
     */
    public function setURLCompleted($URLCompleted = null)
    {
        $this->URLCompleted = $URLCompleted;
        return $this;
    }

    /**
     * Gets the URLError.
     *
     * @return string|null
     */
    public function getURLError()
    {
        return $this->URLError;
    }

    /**
     * Sets the URLError.
     *
     * @param string|null $URLError
     * @return $this
     */
    public function setURLError($URLError = null)
    {
        $this->URLError = $URLError;
        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getChecksumData()
    {
        return [
            $this->getAmount(),
            $this->getCountry(),
            $this->getCurrency(),
            $this->getDescription(),
            $this->getEndUserIP(),
            $this->getIssuer(),
            $this->getLanguage(),
            $this->getOrderID(),
            $this->getPaymentID(),
            $this->getPaymentMethod(),
            $this->getPaymentScreenURL(),
            $this->getProviderTransactionID(),
            $this->getReference(),
            $this->getTestMode(),
            $this->getURLCompleted(),
            $this->getURLError()
        ];
    }
}

