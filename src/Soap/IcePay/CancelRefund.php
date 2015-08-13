<?php

namespace Icepay\Api\Soap\IcePay;

/**
 * Class representing CancelRefund
 *
 * @see connect.icepay.com#CancelRefund
 */
class CancelRefund
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
    protected $RefundID = null;

    /**
     * @var int|null
     */
    protected $PaymentID = null;

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

