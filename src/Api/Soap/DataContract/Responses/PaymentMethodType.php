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
     * Gets the Issuers.
     *
     * @return \Icepay\Api\Soap\DataContract\Responses\IssuerType[]|null
     */
    public function getIssuers()
    {
        return $this->Issuers;
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
     * @inheritDoc
     */
    public function __wakeup()
    {
        if ($this->Issuers instanceof \stdClass) {
            $this->Issuers = $this->Issuers->Issuer;
            foreach ($this->Issuers as $issuer) {
                $issuer->__wakeup();
            }
        }
    }
}

