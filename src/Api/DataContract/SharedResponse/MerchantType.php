<?php

namespace Icepay\Api\DataContract\SharedResponse;

/**
 * Class representing Merchant
 *
 *
 *
 * @see http://schemas.datacontract.org/2004/07/APIService.SharedResponseTypes#Merchant
 */
class MerchantType
{

    /**
     * @var string|null
     */
    protected $Description = null;

    /**
     * @var int|null
     */
    protected $MerchantID = null;

    /**
     * @var bool|null
     */
    protected $TestMode = null;

    /**
     * Gets the Description.
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * Sets the Description.
     *
     * @param string|null $Description
     * @return $this
     */
    public function setDescription($Description = null)
    {
        $this->Description = $Description;
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
     * Gets the TestMode.
     *
     * @return bool|null
     */
    public function getTestMode()
    {
        return $this->TestMode;
    }

    /**
     * Sets the TestMode.
     *
     * @param bool|null $TestMode
     * @return $this
     */
    public function setTestMode($TestMode = null)
    {
        $this->TestMode = $TestMode;
        return $this;
    }


}

