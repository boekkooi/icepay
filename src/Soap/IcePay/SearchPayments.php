<?php

namespace Icepay\Api\Soap\IcePay;

/**
 * Class representing SearchPayments
 *
 * @see connect.icepay.com#SearchPayments
 */
class SearchPayments
{

    /**
     * @var string|null
     */
    protected $Timestamp = null;

    /**
     * @var string|null
     */
    protected $SessionID = null;

    /**
     * @var string|null
     */
    protected $UserAgent = null;

    /**
     * @var int|null
     */
    protected $MerchantID = null;

    /**
     * @var int|null
     */
    protected $PaymentID = null;

    /**
     * @var string|null
     */
    protected $OrderID = null;

    /**
     * @var string|null
     */
    protected $Reference = null;

    /**
     * @var string|null
     */
    protected $Description = null;

    /**
     * @var string|null
     */
    protected $Status = null;

    /**
     * @var string|null
     */
    protected $OrderTime1 = null;

    /**
     * @var string|null
     */
    protected $OrderTime2 = null;

    /**
     * @var string|null
     */
    protected $PaymentTime1 = null;

    /**
     * @var string|null
     */
    protected $PaymentTime2 = null;

    /**
     * @var string|null
     */
    protected $CountryCode = null;

    /**
     * @var string|null
     */
    protected $CurrencyCode = null;

    /**
     * @var int|null
     */
    protected $Amount = null;

    /**
     * @var string|null
     */
    protected $PaymentMethod = null;

    /**
     * @var string|null
     */
    protected $ConsumerAccountNumber = null;

    /**
     * @var string|null
     */
    protected $ConsumerName = null;

    /**
     * @var string|null
     */
    protected $ConsumerAddress = null;

    /**
     * @var string|null
     */
    protected $ConsumerHouseNumber = null;

    /**
     * @var string|null
     */
    protected $ConsumerPostCode = null;

    /**
     * @var string|null
     */
    protected $ConsumerCity = null;

    /**
     * @var string|null
     */
    protected $ConsumerCountry = null;

    /**
     * @var string|null
     */
    protected $ConsumerEmail = null;

    /**
     * @var string|null
     */
    protected $ConsumerPhoneNumber = null;

    /**
     * @var string|null
     */
    protected $ConsumerIPAddress = null;

    /**
     * @var int|null
     */
    protected $Page = null;

    /**
     * @var string|null
     */
    protected $Checksum = null;

    /**
     * Gets the Timestamp.
     *
     * @return string|null
     */
    public function getTimestamp()
    {
        return $this->Timestamp;
    }

    /**
     * Sets the Timestamp.
     *
     * @param string|null $Timestamp
     * @return $this
     */
    public function setTimestamp($Timestamp = null)
    {
        $this->Timestamp = $Timestamp;
        return $this;
    }

    /**
     * Gets the SessionID.
     *
     * @return string|null
     */
    public function getSessionID()
    {
        return $this->SessionID;
    }

    /**
     * Sets the SessionID.
     *
     * @param string|null $SessionID
     * @return $this
     */
    public function setSessionID($SessionID = null)
    {
        $this->SessionID = $SessionID;
        return $this;
    }

    /**
     * Gets the UserAgent.
     *
     * @return string|null
     */
    public function getUserAgent()
    {
        return $this->UserAgent;
    }

    /**
     * Sets the UserAgent.
     *
     * @param string|null $UserAgent
     * @return $this
     */
    public function setUserAgent($UserAgent = null)
    {
        $this->UserAgent = $UserAgent;
        return $this;
    }

    /**
     * Gets the MerchantID.
     *
     * @return int|null
     */
    public function getMerchantID()
    {
        return $this->MerchantID;
    }

    /**
     * Sets the MerchantID.
     *
     * @param int|null $MerchantID
     * @return $this
     */
    public function setMerchantID($MerchantID = null)
    {
        $this->MerchantID = $MerchantID;
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
     * Gets the Status.
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * Sets the Status.
     *
     * @param string|null $Status
     * @return $this
     */
    public function setStatus($Status = null)
    {
        $this->Status = $Status;
        return $this;
    }

    /**
     * Gets the OrderTime1.
     *
     * @return string|null
     */
    public function getOrderTime1()
    {
        return $this->OrderTime1;
    }

    /**
     * Sets the OrderTime1.
     *
     * @param string|null $OrderTime1
     * @return $this
     */
    public function setOrderTime1($OrderTime1 = null)
    {
        $this->OrderTime1 = $OrderTime1;
        return $this;
    }

    /**
     * Gets the OrderTime2.
     *
     * @return string|null
     */
    public function getOrderTime2()
    {
        return $this->OrderTime2;
    }

    /**
     * Sets the OrderTime2.
     *
     * @param string|null $OrderTime2
     * @return $this
     */
    public function setOrderTime2($OrderTime2 = null)
    {
        $this->OrderTime2 = $OrderTime2;
        return $this;
    }

    /**
     * Gets the PaymentTime1.
     *
     * @return string|null
     */
    public function getPaymentTime1()
    {
        return $this->PaymentTime1;
    }

    /**
     * Sets the PaymentTime1.
     *
     * @param string|null $PaymentTime1
     * @return $this
     */
    public function setPaymentTime1($PaymentTime1 = null)
    {
        $this->PaymentTime1 = $PaymentTime1;
        return $this;
    }

    /**
     * Gets the PaymentTime2.
     *
     * @return string|null
     */
    public function getPaymentTime2()
    {
        return $this->PaymentTime2;
    }

    /**
     * Sets the PaymentTime2.
     *
     * @param string|null $PaymentTime2
     * @return $this
     */
    public function setPaymentTime2($PaymentTime2 = null)
    {
        $this->PaymentTime2 = $PaymentTime2;
        return $this;
    }

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
     * Gets the CurrencyCode.
     *
     * @return string|null
     */
    public function getCurrencyCode()
    {
        return $this->CurrencyCode;
    }

    /**
     * Sets the CurrencyCode.
     *
     * @param string|null $CurrencyCode
     * @return $this
     */
    public function setCurrencyCode($CurrencyCode = null)
    {
        $this->CurrencyCode = $CurrencyCode;
        return $this;
    }

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
     * Gets the ConsumerAccountNumber.
     *
     * @return string|null
     */
    public function getConsumerAccountNumber()
    {
        return $this->ConsumerAccountNumber;
    }

    /**
     * Sets the ConsumerAccountNumber.
     *
     * @param string|null $ConsumerAccountNumber
     * @return $this
     */
    public function setConsumerAccountNumber($ConsumerAccountNumber = null)
    {
        $this->ConsumerAccountNumber = $ConsumerAccountNumber;
        return $this;
    }

    /**
     * Gets the ConsumerName.
     *
     * @return string|null
     */
    public function getConsumerName()
    {
        return $this->ConsumerName;
    }

    /**
     * Sets the ConsumerName.
     *
     * @param string|null $ConsumerName
     * @return $this
     */
    public function setConsumerName($ConsumerName = null)
    {
        $this->ConsumerName = $ConsumerName;
        return $this;
    }

    /**
     * Gets the ConsumerAddress.
     *
     * @return string|null
     */
    public function getConsumerAddress()
    {
        return $this->ConsumerAddress;
    }

    /**
     * Sets the ConsumerAddress.
     *
     * @param string|null $ConsumerAddress
     * @return $this
     */
    public function setConsumerAddress($ConsumerAddress = null)
    {
        $this->ConsumerAddress = $ConsumerAddress;
        return $this;
    }

    /**
     * Gets the ConsumerHouseNumber.
     *
     * @return string|null
     */
    public function getConsumerHouseNumber()
    {
        return $this->ConsumerHouseNumber;
    }

    /**
     * Sets the ConsumerHouseNumber.
     *
     * @param string|null $ConsumerHouseNumber
     * @return $this
     */
    public function setConsumerHouseNumber($ConsumerHouseNumber = null)
    {
        $this->ConsumerHouseNumber = $ConsumerHouseNumber;
        return $this;
    }

    /**
     * Gets the ConsumerPostCode.
     *
     * @return string|null
     */
    public function getConsumerPostCode()
    {
        return $this->ConsumerPostCode;
    }

    /**
     * Sets the ConsumerPostCode.
     *
     * @param string|null $ConsumerPostCode
     * @return $this
     */
    public function setConsumerPostCode($ConsumerPostCode = null)
    {
        $this->ConsumerPostCode = $ConsumerPostCode;
        return $this;
    }

    /**
     * Gets the ConsumerCity.
     *
     * @return string|null
     */
    public function getConsumerCity()
    {
        return $this->ConsumerCity;
    }

    /**
     * Sets the ConsumerCity.
     *
     * @param string|null $ConsumerCity
     * @return $this
     */
    public function setConsumerCity($ConsumerCity = null)
    {
        $this->ConsumerCity = $ConsumerCity;
        return $this;
    }

    /**
     * Gets the ConsumerCountry.
     *
     * @return string|null
     */
    public function getConsumerCountry()
    {
        return $this->ConsumerCountry;
    }

    /**
     * Sets the ConsumerCountry.
     *
     * @param string|null $ConsumerCountry
     * @return $this
     */
    public function setConsumerCountry($ConsumerCountry = null)
    {
        $this->ConsumerCountry = $ConsumerCountry;
        return $this;
    }

    /**
     * Gets the ConsumerEmail.
     *
     * @return string|null
     */
    public function getConsumerEmail()
    {
        return $this->ConsumerEmail;
    }

    /**
     * Sets the ConsumerEmail.
     *
     * @param string|null $ConsumerEmail
     * @return $this
     */
    public function setConsumerEmail($ConsumerEmail = null)
    {
        $this->ConsumerEmail = $ConsumerEmail;
        return $this;
    }

    /**
     * Gets the ConsumerPhoneNumber.
     *
     * @return string|null
     */
    public function getConsumerPhoneNumber()
    {
        return $this->ConsumerPhoneNumber;
    }

    /**
     * Sets the ConsumerPhoneNumber.
     *
     * @param string|null $ConsumerPhoneNumber
     * @return $this
     */
    public function setConsumerPhoneNumber($ConsumerPhoneNumber = null)
    {
        $this->ConsumerPhoneNumber = $ConsumerPhoneNumber;
        return $this;
    }

    /**
     * Gets the ConsumerIPAddress.
     *
     * @return string|null
     */
    public function getConsumerIPAddress()
    {
        return $this->ConsumerIPAddress;
    }

    /**
     * Sets the ConsumerIPAddress.
     *
     * @param string|null $ConsumerIPAddress
     * @return $this
     */
    public function setConsumerIPAddress($ConsumerIPAddress = null)
    {
        $this->ConsumerIPAddress = $ConsumerIPAddress;
        return $this;
    }

    /**
     * Gets the Page.
     *
     * @return int|null
     */
    public function getPage()
    {
        return $this->Page;
    }

    /**
     * Sets the Page.
     *
     * @param int|null $Page
     * @return $this
     */
    public function setPage($Page = null)
    {
        $this->Page = $Page;
        return $this;
    }

    /**
     * Gets the Checksum.
     *
     * @return string|null
     */
    public function getChecksum()
    {
        return $this->Checksum;
    }

    /**
     * Sets the Checksum.
     *
     * @param string|null $Checksum
     * @return $this
     */
    public function setChecksum($Checksum = null)
    {
        $this->Checksum = $Checksum;
        return $this;
    }


}

