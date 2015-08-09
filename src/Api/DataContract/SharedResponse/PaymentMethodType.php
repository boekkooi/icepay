<?php

namespace Icepay\Api\DataContract\SharedResponse;

/**
 * Class representing PaymentMethod
 *
 *
 *
 * @see http://schemas.datacontract.org/2004/07/APIService.SharedResponseTypes#PaymentMethod
 */
class PaymentMethodType
{

    /**
     * @var string|null
     */
    protected $Description = null;

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

