<?php

namespace Icepay\Api\Soap\DataContract\Responses;

use Icepay\Api\PaymentMethod\Facts;

/**
 * Class representing PaymentMethod
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
     * @see Facts::getFriendlyName
     * @var string|null A user friendly name or NULL (not a soap value)
     */
    private $name;

    /**
     * @see Facts::getLanguages
     * @var string[] A list of supported languages (not a soap value)
     */
    private $languages;

    /**
     * PaymentMethodType constructor.
     *
     * @param null|string $code
     * @param null|string $name
     * @param null|string $description
     * @param IssuerType[] $issuers
     * @param string[] $languages
     */
    public function __construct($code, $name, $description, array $issuers, array $languages)
    {
        $this->languages = $languages;
        $this->name = $name;
        $this->PaymentMethodCode = $code;
        $this->Issuers = $issuers;
        $this->Description = $description;
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
     * Gets a user friendly name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
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
     * Gets the Issuers.
     *
     * @return \Icepay\Api\Soap\DataContract\Responses\IssuerType[]|null
     */
    public function getIssuers()
    {
        return $this->Issuers;
    }

    /**
     * @return string[]
     */
    public function getLanguages()
    {
        return $this->languages;
    }

    /**
     * @inheritDoc
     */
    public function __wakeup()
    {
        $this->name = $this->name ?: Facts::getFriendlyName($this->PaymentMethodCode);
        $this->languages = $this->languages ?: Facts::getLanguages($this->PaymentMethodCode);

        if ($this->Issuers instanceof \stdClass) {
            $this->Issuers = $this->Issuers->Issuer;
            if (!is_array($this->Issuers)) {
                $this->Issuers = [ $this->Issuers ];
            }

            foreach ($this->Issuers as $issuer) {
                $issuer->__wakeup();
            }
        }
    }
}

