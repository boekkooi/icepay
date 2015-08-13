<?php

namespace Icepay\Api\Soap\DataContract;

/**
 * Class representing ValidateSmsCodeResponse
 *
 *
 *
 * @see http://schemas.datacontract.org/2004/07/APIService#ValidateSmsCodeResponse
 */
class ValidateSmsCodeResponseType extends BaseTypeType
{

    /**
     * @var int|null
     */
    protected $PaymentID = null;

    /**
     * @var bool|null
     */
    protected $Success = null;

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
     * Gets the Success.
     *
     * @return bool|null
     */
    public function getSuccess()
    {
        return $this->Success;
    }

    /**
     * Sets the Success.
     *
     * @param bool|null $Success
     * @return $this
     */
    public function setSuccess($Success = null)
    {
        $this->Success = $Success;
        return $this;
    }


}

