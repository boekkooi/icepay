<?php

namespace Icepay\Api\Soap\DataContract;

/**
 * Class representing GetPaymentRefundsResponse
 *
 *
 *
 * @see http://schemas.datacontract.org/2004/07/APIService#GetPaymentRefundsResponse
 */
class GetPaymentRefundsResponseType
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
     * @var \Icepay\Api\Soap\DataContract\SharedResponse\RefundType[]|null
     */
    protected $Refunds = array();

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
     * Gets the Refunds.
     *
     * @return \Icepay\Api\Soap\DataContract\SharedResponse\RefundType[]|null
     */
    public function getRefunds()
    {
        return $this->Refunds;
    }

    /**
     * Sets the Refunds.
     *
     * @param \Icepay\Api\Soap\DataContract\SharedResponse\RefundType[]|null $Refunds
     * @return $this
     */
    public function setRefunds(array $Refunds = null)
    {
        foreach ($Refunds as $item) {
            $this->addRefund($item);
        }
        return $this;
    }

    /**
     * Adds an Refund.
     *
     * @param \Icepay\Api\Soap\DataContract\SharedResponse\RefundType $Refund The Refund to add.
     * @return $this
     */
    public function addRefund(\Icepay\Api\Soap\DataContract\SharedResponse\RefundType $Refund)
    {
        $this->Refunds[] = $Refund;
        return $this;
    }

    /**
     * Sets an Refund at the specified key/index.
     *
     * @param string|integer $key The key/index of the Refund to set.
     * @param \Icepay\Api\Soap\DataContract\SharedResponse\RefundType $Refund The Refund to set.
     * @return $this
     */
    public function setRefund($key, \Icepay\Api\Soap\DataContract\SharedResponse\RefundType $Refund)
    {
        $this->Refunds[$key] = $Refund;
        return $this;
    }

    /**
     * Removes the Refund at the specified key/index.
     *
     * @param string|integer $key The kex/index of the Refund to remove
     * @return \Icepay\Api\Soap\DataContract\SharedResponse\RefundType|null The removed Refund or NULL.
     */
    public function removeRefund($key)
    {
        if (!isset($this->Refunds[$key]) && !array_key_exists($key, $this->Refunds)) {
            return null;
        }
        $removed = $this->Refunds[$key];
        unset($this->Refunds[$key]);
        return $removed;
    }

    /**
     * Removes the Refund at the specified key/index.
     *
     * @param \Icepay\Api\Soap\DataContract\SharedResponse\RefundType $Refund The Refund to search for.
     * @return string|integer|bool The key/index of the Refund or FALSE if the Refund was not found.
     */
    public function indexOfRefund($Refund)
    {
        return array_search($Refund, $this->Refunds, true);
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

