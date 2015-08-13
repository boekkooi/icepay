<?php

namespace Icepay\Api\Soap\DataContract;

/**
 * Class representing GetPhoneStatusResponse
 *
 *
 *
 * @see http://schemas.datacontract.org/2004/07/APIService#GetPhoneStatusResponse
 */
class GetPhoneStatusResponseType extends BaseTypeType
{

    /**
     * @var int|null
     */
    protected $CallAmount = null;

    /**
     * @var int|null
     */
    protected $CallDuration = null;

    /**
     * @var string|null
     */
    protected $CallStatus = null;

    /**
     * @var int|null
     */
    protected $PaymentID = null;

    /**
     * Gets the CallAmount.
     *
     * @return int|null
     */
    public function getCallAmount()
    {
        return $this->CallAmount;
    }

    /**
     * Sets the CallAmount.
     *
     * @param int|null $CallAmount
     * @return $this
     */
    public function setCallAmount($CallAmount = null)
    {
        $this->CallAmount = $CallAmount;
        return $this;
    }

    /**
     * Gets the CallDuration.
     *
     * @return int|null
     */
    public function getCallDuration()
    {
        return $this->CallDuration;
    }

    /**
     * Sets the CallDuration.
     *
     * @param int|null $CallDuration
     * @return $this
     */
    public function setCallDuration($CallDuration = null)
    {
        $this->CallDuration = $CallDuration;
        return $this;
    }

    /**
     * Gets the CallStatus.
     *
     * @return string|null
     */
    public function getCallStatus()
    {
        return $this->CallStatus;
    }

    /**
     * Sets the CallStatus.
     *
     * @param string|null $CallStatus
     * @return $this
     */
    public function setCallStatus($CallStatus = null)
    {
        $this->CallStatus = $CallStatus;
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


}

