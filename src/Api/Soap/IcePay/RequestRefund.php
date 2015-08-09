<?php

namespace Icepay\Api\Soap\IcePay;

/**
 * Class representing RequestRefund
 *
 * @see connect.icepay.com#RequestRefund
 */
class RequestRefund
{

    /**
     * @var int|null
     */
    protected $MerchantID = null;

    /**
     * @var string|null
     */
    protected $Checksum = null;

    /**
     * @var string|null
     */
    protected $Timestamp = null;

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


}

