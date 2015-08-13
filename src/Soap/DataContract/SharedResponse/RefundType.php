<?php

namespace Icepay\Api\Soap\DataContract\SharedResponse;

/**
 * Class representing Refund
 *
 *
 *
 * @see http://schemas.datacontract.org/2004/07/APIService.SharedResponseTypes#Refund
 */
class RefundType
{

    /**
     * @var string|null
     */
    protected $DateCreated = null;

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
     * @var string|null
     */
    protected $Status = null;

    /**
     * Gets the DateCreated.
     *
     * @return string|null
     */
    public function getDateCreated()
    {
        return $this->DateCreated;
    }

    /**
     * Sets the DateCreated.
     *
     * @param string|null $DateCreated
     * @return $this
     */
    public function setDateCreated($DateCreated = null)
    {
        $this->DateCreated = $DateCreated;
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
     * Gets the Status.
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * Sets the Status.
     *
     * @param string|null $Status
     * @return $this
     */
    public function setStatus($Status = null)
    {
        $this->Status = $Status;
        return $this;
    }


}

