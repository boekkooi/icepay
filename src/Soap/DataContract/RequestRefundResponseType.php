<?php

namespace Icepay\Api\Soap\DataContract;

/**
 * Class representing RequestRefundResponse
 *
 *
 *
 * @see http://schemas.datacontract.org/2004/07/APIService#RequestRefundResponse
 */
class RequestRefundResponseType
{

    /**
     * @var string|null
     */
    protected $Checksum = null;

    /**
     * @var int|null
     */
    protected $MerchantID = null;

    /**
     * @var int|null
     */
    protected $PaymentID = null;

    /**
     * @var int|null
     */
    protected $RefundAmount = null;

    /**
     * @var string|null
     */
    protected $RefundCurrency = null;

    /**
     * @var int|null
     */
    protected $RefundID = null;

    /**
     * @var int|null
     */
    protected $RemainingRefundAmount = null;

    /**
     * @var string|null
     */
    protected $Timestamp = null;

    /**
     * Gets the Checksum.
     *
     * @return string|null
     */
    public function getChecksum()
    {
        return $this->Checksum;
    }

    /**
     * Sets the Checksum.
     *
     * @param string|null $Checksum
     * @return $this
     */
    public function setChecksum($Checksum = null)
    {
        $this->Checksum = $Checksum;
        return $this;
    }

    /**
     * Gets the MerchantID.
     *
     * @return int|null
     */
    public function getMerchantID()
    {
        return $this->MerchantID;
    }

    /**
     * Sets the MerchantID.
     *
     * @param int|null $MerchantID
     * @return $this
     */
    public function setMerchantID($MerchantID = null)
    {
        $this->MerchantID = $MerchantID;
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
     * Gets the RefundAmount.
     *
     * @return int|null
     */
    public function getRefundAmount()
    {
        return $this->RefundAmount;
    }

    /**
     * Sets the RefundAmount.
     *
     * @param int|null $RefundAmount
     * @return $this
     */
    public function setRefundAmount($RefundAmount = null)
    {
        $this->RefundAmount = $RefundAmount;
        return $this;
    }

    /**
     * Gets the RefundCurrency.
     *
     * @return string|null
     */
    public function getRefundCurrency()
    {
        return $this->RefundCurrency;
    }

    /**
     * Sets the RefundCurrency.
     *
     * @param string|null $RefundCurrency
     * @return $this
     */
    public function setRefundCurrency($RefundCurrency = null)
    {
        $this->RefundCurrency = $RefundCurrency;
        return $this;
    }

    /**
     * Gets the RefundID.
     *
     * @return int|null
     */
    public function getRefundID()
    {
        return $this->RefundID;
    }

    /**
     * Sets the RefundID.
     *
     * @param int|null $RefundID
     * @return $this
     */
    public function setRefundID($RefundID = null)
    {
        $this->RefundID = $RefundID;
        return $this;
    }

    /**
     * Gets the RemainingRefundAmount.
     *
     * @return int|null
     */
    public function getRemainingRefundAmount()
    {
        return $this->RemainingRefundAmount;
    }

    /**
     * Sets the RemainingRefundAmount.
     *
     * @param int|null $RemainingRefundAmount
     * @return $this
     */
    public function setRemainingRefundAmount($RemainingRefundAmount = null)
    {
        $this->RemainingRefundAmount = $RemainingRefundAmount;
        return $this;
    }

    /**
     * Gets the Timestamp.
     *
     * @return string|null
     */
    public function getTimestamp()
    {
        return $this->Timestamp;
    }

    /**
     * Sets the Timestamp.
     *
     * @param string|null $Timestamp
     * @return $this
     */
    public function setTimestamp($Timestamp = null)
    {
        $this->Timestamp = $Timestamp;
        return $this;
    }


}

