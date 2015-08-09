<?php

namespace Icepay\Api\DataContract;

/**
 * Class representing GetPaymentMethodsResponse
 *
 *
 *
 * @see http://schemas.datacontract.org/2004/07/APIService#GetPaymentMethodsResponse
 */
class GetPaymentMethodsResponseType
{

    /**
     * @var string|null
     */
    protected $Checksum = null;

    /**
     * @var \Icepay\Api\DataContract\SharedResponse\PaymentMethodType[]|null
     */
    protected $PaymentMethods = array();

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
     * Gets the PaymentMethods.
     *
     * @return \Icepay\Api\DataContract\SharedResponse\PaymentMethodType[]|null
     */
    public function getPaymentMethods()
    {
        return $this->PaymentMethods;
    }

    /**
     * Sets the PaymentMethods.
     *
     * @param \Icepay\Api\DataContract\SharedResponse\PaymentMethodType[]|null $PaymentMethods
     * @return $this
     */
    public function setPaymentMethods(array $PaymentMethods = null)
    {
        foreach ($PaymentMethods as $item) {
            $this->addPaymentMethod($item);
        }
        return $this;
    }

    /**
     * Adds an PaymentMethod.
     *
     * @param \Icepay\Api\DataContract\SharedResponse\PaymentMethodType $PaymentMethod The PaymentMethod to add.
     * @return $this
     */
    public function addPaymentMethod(\Icepay\Api\DataContract\SharedResponse\PaymentMethodType $PaymentMethod)
    {
        $this->PaymentMethods[] = $PaymentMethod;
        return $this;
    }

    /**
     * Sets an PaymentMethod at the specified key/index.
     *
     * @param string|integer $key The key/index of the PaymentMethod to set.
     * @param \Icepay\Api\DataContract\SharedResponse\PaymentMethodType $PaymentMethod The PaymentMethod to set.
     * @return $this
     */
    public function setPaymentMethod($key, \Icepay\Api\DataContract\SharedResponse\PaymentMethodType $PaymentMethod)
    {
        $this->PaymentMethods[$key] = $PaymentMethod;
        return $this;
    }

    /**
     * Removes the PaymentMethod at the specified key/index.
     *
     * @param string|integer $key The kex/index of the PaymentMethod to remove
     * @return \Icepay\Api\DataContract\SharedResponse\PaymentMethodType|null The removed PaymentMethod or NULL.
     */
    public function removePaymentMethod($key)
    {
        if (!isset($this->PaymentMethods[$key]) && !array_key_exists($key, $this->PaymentMethods)) {
            return null;
        }
        $removed = $this->PaymentMethods[$key];
        unset($this->PaymentMethods[$key]);
        return $removed;
    }

    /**
     * Removes the PaymentMethod at the specified key/index.
     *
     * @param \Icepay\Api\DataContract\SharedResponse\PaymentMethodType $PaymentMethod The PaymentMethod to search for.
     * @return string|integer|bool The key/index of the PaymentMethod or FALSE if the PaymentMethod was not found.
     */
    public function indexOfPaymentMethod($PaymentMethod)
    {
        return array_search($PaymentMethod, $this->PaymentMethods, true);
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

