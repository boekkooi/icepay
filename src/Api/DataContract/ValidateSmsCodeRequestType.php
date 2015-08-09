<?php

namespace Icepay\Api\DataContract;

/**
 * Class representing ValidateSmsCodeRequest
 *
 *
 *
 * @see http://schemas.datacontract.org/2004/07/APIService#ValidateSmsCodeRequest
 */
class ValidateSmsCodeRequestType extends BaseTypeType
{

    /**
     * @var int|null
     */
    protected $PaymentID = null;

    /**
     * @var string|null
     */
    protected $SmsCode = null;

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
     * Gets the SmsCode.
     *
     * @return string|null
     */
    public function getSmsCode()
    {
        return $this->SmsCode;
    }

    /**
     * Sets the SmsCode.
     *
     * @param string|null $SmsCode
     * @return $this
     */
    public function setSmsCode($SmsCode = null)
    {
        $this->SmsCode = $SmsCode;
        return $this;
    }


}

