<?php

namespace Icepay\Api\Soap\DataContract;

/**
 * Class representing GetPaymentResponse
 *
 *
 *
 * @see http://schemas.datacontract.org/2004/07/APIService#GetPaymentResponse
 */
class GetPaymentResponseType extends BaseTypeType
{

    /**
     * @var int|null
     */
    protected $Amount = null;

    /**
     * @var string|null
     */
    protected $ConsumerAccountNumber = null;

    /**
     * @var string|null
     */
    protected $ConsumerAddress = null;

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
    protected $ConsumerHouseNumber = null;

    /**
     * @var string|null
     */
    protected $ConsumerIPAddress = null;

    /**
     * @var string|null
     */
    protected $ConsumerName = null;

    /**
     * @var string|null
     */
    protected $ConsumerPhoneNumber = null;

    /**
     * @var string|null
     */
    protected $Currency = null;

    /**
     * @var string|null
     */
    protected $Description = null;

    /**
     * @var int|null
     */
    protected $Duration = null;

    /**
     * @var string|null
     */
    protected $Issuer = null;

    /**
     * @var string|null
     */
    protected $OrderID = null;

    /**
     * @var string|null
     */
    protected $OrderTime = null;

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
    protected $PaymentTime = null;

    /**
     * @var string|null
     */
    protected $Reference = null;

    /**
     * @var string|null
     */
    protected $Status = null;

    /**
     * @var string|null
     */
    protected $StatusCode = null;

    /**
     * @var bool|null
     */
    protected $TestMode = null;

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
     * Gets the Duration.
     *
     * @return int|null
     */
    public function getDuration()
    {
        return $this->Duration;
    }

    /**
     * Sets the Duration.
     *
     * @param int|null $Duration
     * @return $this
     */
    public function setDuration($Duration = null)
    {
        $this->Duration = $Duration;
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
     * Gets the OrderTime.
     *
     * @return string|null
     */
    public function getOrderTime()
    {
        return $this->OrderTime;
    }

    /**
     * Sets the OrderTime.
     *
     * @param string|null $OrderTime
     * @return $this
     */
    public function setOrderTime($OrderTime = null)
    {
        $this->OrderTime = $OrderTime;
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
     * Gets the PaymentTime.
     *
     * @return string|null
     */
    public function getPaymentTime()
    {
        return $this->PaymentTime;
    }

    /**
     * Sets the PaymentTime.
     *
     * @param string|null $PaymentTime
     * @return $this
     */
    public function setPaymentTime($PaymentTime = null)
    {
        $this->PaymentTime = $PaymentTime;
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
     * Gets the StatusCode.
     *
     * @return string|null
     */
    public function getStatusCode()
    {
        return $this->StatusCode;
    }

    /**
     * Sets the StatusCode.
     *
     * @param string|null $StatusCode
     * @return $this
     */
    public function setStatusCode($StatusCode = null)
    {
        $this->StatusCode = $StatusCode;
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
     * @inheritDoc
     */
    protected function getChecksumData()
    {
        return [
            $this->getPaymentID(),
            $this->getAmount(),
            $this->getConsumerAccountNumber(),
            $this->getConsumerAddress(),
            $this->getConsumerCity(),
            $this->getConsumerCountry(),
            $this->getConsumerEmail(),
            $this->getConsumerHouseNumber(),
            $this->getConsumerIPAddress(),
            $this->getConsumerName(),
            $this->getConsumerPhoneNumber(),
            $this->getCurrency(),
            $this->getDescription(),
            $this->getDuration(),
            $this->getIssuer(),
            $this->getOrderID(),
            $this->getOrderTime(),
            $this->getPaymentMethod(),
            $this->getPaymentTime(),
            $this->getReference(),
            $this->getStatus(),
            $this->getStatusCode(),
            $this->getTestMode(),
        ];
    }
}

