<?php

namespace Icepay\Api\DataContract;

/**
 * Class representing GetMerchantsResponse
 *
 *
 *
 * @see http://schemas.datacontract.org/2004/07/APIService#GetMerchantsResponse
 */
class GetMerchantsResponseType
{

    /**
     * @var string|null
     */
    protected $Checksum = null;

    /**
     * @var \Icepay\Api\DataContract\SharedResponse\MerchantType[]|null
     */
    protected $Merchants = array();

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
     * Gets the Merchants.
     *
     * @return \Icepay\Api\DataContract\SharedResponse\MerchantType[]|null
     */
    public function getMerchants()
    {
        return $this->Merchants;
    }

    /**
     * Sets the Merchants.
     *
     * @param \Icepay\Api\DataContract\SharedResponse\MerchantType[]|null $Merchants
     * @return $this
     */
    public function setMerchants(array $Merchants = null)
    {
        foreach ($Merchants as $item) {
            $this->addMerchant($item);
        }
        return $this;
    }

    /**
     * Adds an Merchant.
     *
     * @param \Icepay\Api\DataContract\SharedResponse\MerchantType $Merchant The Merchant to add.
     * @return $this
     */
    public function addMerchant(\Icepay\Api\DataContract\SharedResponse\MerchantType $Merchant)
    {
        $this->Merchants[] = $Merchant;
        return $this;
    }

    /**
     * Sets an Merchant at the specified key/index.
     *
     * @param string|integer $key The key/index of the Merchant to set.
     * @param \Icepay\Api\DataContract\SharedResponse\MerchantType $Merchant The Merchant to set.
     * @return $this
     */
    public function setMerchant($key, \Icepay\Api\DataContract\SharedResponse\MerchantType $Merchant)
    {
        $this->Merchants[$key] = $Merchant;
        return $this;
    }

    /**
     * Removes the Merchant at the specified key/index.
     *
     * @param string|integer $key The kex/index of the Merchant to remove
     * @return \Icepay\Api\DataContract\SharedResponse\MerchantType|null The removed Merchant or NULL.
     */
    public function removeMerchant($key)
    {
        if (!isset($this->Merchants[$key]) && !array_key_exists($key, $this->Merchants)) {
            return null;
        }
        $removed = $this->Merchants[$key];
        unset($this->Merchants[$key]);
        return $removed;
    }

    /**
     * Removes the Merchant at the specified key/index.
     *
     * @param \Icepay\Api\DataContract\SharedResponse\MerchantType $Merchant The Merchant to search for.
     * @return string|integer|bool The key/index of the Merchant or FALSE if the Merchant was not found.
     */
    public function indexOfMerchant($Merchant)
    {
        return array_search($Merchant, $this->Merchants, true);
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

