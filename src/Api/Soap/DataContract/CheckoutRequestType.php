<?php

namespace Icepay\Api\Soap\DataContract;

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
     * @param int $amount
     * @param string $currency
     * @param string $country
     * @param string $language
     * @param string $endUserIP
     * @param string|null $paymentMethod
     * @param string|null $paymentIssuer
     */
    public function __construct($orderId, $amount, $currency, $country, $language, $endUserIP, $paymentMethod = null, $paymentIssuer = null)
    {
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
            $this->getPaymentMethod(),
            $this->getReference(),
            $this->getURLCompleted(),
            $this->getURLError()
        ];
    }
}

