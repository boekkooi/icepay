<?php

namespace Icepay\Api\Soap\DataContract;

/**
 * Class representing ValidatePhoneCodeRequest
 *
 *
 *
 * @see http://schemas.datacontract.org/2004/07/APIService#ValidatePhoneCodeRequest
 */
class ValidatePhoneCodeRequestType extends BaseTypeType
{

    /**
     * @var int|null
     */
    protected $PaymentID = null;

    /**
     * @var string|null
     */
    protected $PhoneCode = null;

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
     * Gets the PhoneCode.
     *
     * @return string|null
     */
    public function getPhoneCode()
    {
        return $this->PhoneCode;
    }

    /**
     * Sets the PhoneCode.
     *
     * @param string|null $PhoneCode
     * @return $this
     */
    public function setPhoneCode($PhoneCode = null)
    {
        $this->PhoneCode = $PhoneCode;
        return $this;
    }

    /**
     * @inheritDoc
     */
    protected function getChecksumData()
    {
        return [
            $this->getPaymentID(),
            $this->getPhoneCode()
        ];
    }


}

