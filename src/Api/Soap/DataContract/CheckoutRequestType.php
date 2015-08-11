<?php

namespace Icepay\Api\Soap\DataContract;

use Assert;

/**
 * Class representing CheckoutRequest
 *
 * @see http://schemas.datacontract.org/2004/07/APIService#CheckoutRequest
 */
class CheckoutRequestType extends BaseTypeType
{
    /**
     * @var int
     */
    protected $Amount;

    /**
     * @var string
     */
    protected $Country;

    /**
     * @var string
     */
    protected $Currency;

    /**
     * @var string|null
     */
    protected $Description = null;

    /**
     * @var string
     */
    protected $EndUserIP;

    /**
     * @var string|null
     */
    protected $Fingerprint = null;

    /**
     * @var string|null
     */
    protected $Issuer = null;

    /**
     * @var string
     */
    protected $Language;

    /**
     * @var string
     */
    protected $OrderID;

    /**
     * @var string|null
     */
    protected $PaymentMethod = null;

    /**
     * @var string|null
     */
    protected $Reference = null;

    /**
     * @var string|null
     */
    protected $URLCompleted = null;

    /**
     * @var string|null
     */
    protected $URLError = null;

    /**
     * @param string $orderId
     * @param int $amount The amount in cents
     * @param string $currency A ISO-3166 code
     * @param string $country A ISO-4217 code
     * @param string $language A ISO-639-1 code
     * @param string $endUserIP
     * @param string|null $paymentMethod
     * @param string|null $paymentIssuer
     */
    public function __construct($orderId, $amount, $currency, $country, $language, $endUserIP, $paymentMethod = null, $paymentIssuer = null)
    {
        $orderId = (string)$orderId;

        Assert\lazy()
            ->that($orderId, 'orderId')->notEmpty()->maxLength(10)
            ->that($amount, 'amount')->integer()->range(30, 1000000)
            ->that($currency, 'currency')->string()->length(3)//->iso3166()
            ->that($country, 'country')->string()->length(2) //iso4217()
            ->that($language, 'language')->string()->length(2) //iso639()
//            ->that($endUserIP, 'endUserIP')->ip()
            ->verifyNow()
        ;

        $this->OrderID = $orderId;
        $this->Amount = $amount;
        $this->Country = $country;
        $this->Currency = $currency;
        $this->EndUserIP = $endUserIP;
        $this->Language = $language;

        $this->setPaymentMethod($paymentMethod);
        $this->setIssuer($paymentIssuer);
    }

    /**
     * Gets the Amount.
     *
     * @return int
     */
    public function getAmount()
    {
        return $this->Amount;
    }

    /**
     * Gets the Country.
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->Country;
    }

    /**
     * Gets the Currency.
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->Currency;
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
        Assert\thatNullOr($Description)->string()->maxLength(100);

        $this->Description = $Description;
        return $this;
    }

    /**
     * Gets the EndUserIP.
     *
     * @return string
     */
    public function getEndUserIP()
    {
        return $this->EndUserIP;
    }

    /**
     * Gets the Fingerprint.
     *
     * @return string|null
     */
    public function getFingerprint()
    {
        return $this->Fingerprint;
    }

    /**
     * Sets the Fingerprint.
     *
     * @param string|null $Fingerprint
     * @return $this
     */
    public function setFingerprint($Fingerprint = null)
    {
        $this->Fingerprint = $Fingerprint;
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
        Assert\thatNullOr($Issuer)->string()->maxLength(20);

        $this->Issuer = $Issuer;
        return $this;
    }

    /**
     * Gets the Language.
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->Language;
    }

    /**
     * Gets the OrderID.
     *
     * @return string
     */
    public function getOrderID()
    {
        return $this->OrderID;
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
        Assert\thatNullOr($PaymentMethod)->string()->maxLength(20);

        $this->PaymentMethod = $PaymentMethod;
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
        Assert\thatNullOr($Reference)->string()->maxLength(50);

        $this->Reference = $Reference;
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
        Assert\thatNullOr($URLCompleted)->url()->maxLength(500);

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
        Assert\thatNullOr($URLError)->url()->maxLength(500);

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
            $this->getPaymentMethod(),
            $this->getReference(),
            $this->getURLCompleted(),
            $this->getURLError()
        ];
    }
}

