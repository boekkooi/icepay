<?php

namespace Icepay\Api\Soap\DataContract;

/**
 * Class representing SearchPaymentsResponse
 *
 *
 *
 * @see http://schemas.datacontract.org/2004/07/APIService#SearchPaymentsResponse
 */
class SearchPaymentsResponseType
{

    /**
     * @var string|null
     */
    protected $Checksum = null;

    /**
     * @var \Icepay\Api\Soap\DataContract\SharedResponse\PaymentType[]|null
     */
    protected $Payments = array();

    /**
     * @var string|null
     */
    protected $SessionID = null;

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
     * Gets the Payments.
     *
     * @return \Icepay\Api\Soap\DataContract\SharedResponse\PaymentType[]|null
     */
    public function getPayments()
    {
        return $this->Payments;
    }

    /**
     * Sets the Payments.
     *
     * @param \Icepay\Api\Soap\DataContract\SharedResponse\PaymentType[]|null $Payments
     * @return $this
     */
    public function setPayments(array $Payments = null)
    {
        foreach ($Payments as $item) {
            $this->addPayment($item);
        }
        return $this;
    }

    /**
     * Adds an Payment.
     *
     * @param \Icepay\Api\Soap\DataContract\SharedResponse\PaymentType $Payment The Payment to add.
     * @return $this
     */
    public function addPayment(\Icepay\Api\Soap\DataContract\SharedResponse\PaymentType $Payment)
    {
        $this->Payments[] = $Payment;
        return $this;
    }

    /**
     * Sets an Payment at the specified key/index.
     *
     * @param string|integer $key The key/index of the Payment to set.
     * @param \Icepay\Api\Soap\DataContract\SharedResponse\PaymentType $Payment The Payment to set.
     * @return $this
     */
    public function setPayment($key, \Icepay\Api\Soap\DataContract\SharedResponse\PaymentType $Payment)
    {
        $this->Payments[$key] = $Payment;
        return $this;
    }

    /**
     * Removes the Payment at the specified key/index.
     *
     * @param string|integer $key The kex/index of the Payment to remove
     * @return \Icepay\Api\Soap\DataContract\SharedResponse\PaymentType|null The removed Payment or NULL.
     */
    public function removePayment($key)
    {
        if (!isset($this->Payments[$key]) && !array_key_exists($key, $this->Payments)) {
            return null;
        }
        $removed = $this->Payments[$key];
        unset($this->Payments[$key]);
        return $removed;
    }

    /**
     * Removes the Payment at the specified key/index.
     *
     * @param \Icepay\Api\Soap\DataContract\SharedResponse\PaymentType $Payment The Payment to search for.
     * @return string|integer|bool The key/index of the Payment or FALSE if the Payment was not found.
     */
    public function indexOfPayment($Payment)
    {
        return array_search($Payment, $this->Payments, true);
    }

    /**
     * Gets the SessionID.
     *
     * @return string|null
     */
    public function getSessionID()
    {
        return $this->SessionID;
    }

    /**
     * Sets the SessionID.
     *
     * @param string|null $SessionID
     * @return $this
     */
    public function setSessionID($SessionID = null)
    {
        $this->SessionID = $SessionID;
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

