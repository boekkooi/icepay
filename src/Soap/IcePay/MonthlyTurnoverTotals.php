<?php

namespace Icepay\Api\Soap\IcePay;

/**
 * Class representing MonthlyTurnoverTotals
 *
 * @see connect.icepay.com#MonthlyTurnoverTotals
 */
class MonthlyTurnoverTotals
{

    /**
     * @var string|null
     */
    protected $Timestamp = null;

    /**
     * @var string|null
     */
    protected $SessionID = null;

    /**
     * @var string|null
     */
    protected $UserAgent = null;

    /**
     * @var int|null
     */
    protected $MerchantID = null;

    /**
     * @var string|null
     */
    protected $CurrencyCode = null;

    /**
     * @var string|null
     */
    protected $Year = null;

    /**
     * @var int|null
     */
    protected $Month = null;

    /**
     * @var string|null
     */
    protected $Checksum = null;

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
     * Gets the UserAgent.
     *
     * @return string|null
     */
    public function getUserAgent()
    {
        return $this->UserAgent;
    }

    /**
     * Sets the UserAgent.
     *
     * @param string|null $UserAgent
     * @return $this
     */
    public function setUserAgent($UserAgent = null)
    {
        $this->UserAgent = $UserAgent;
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
     * Gets the CurrencyCode.
     *
     * @return string|null
     */
    public function getCurrencyCode()
    {
        return $this->CurrencyCode;
    }

    /**
     * Sets the CurrencyCode.
     *
     * @param string|null $CurrencyCode
     * @return $this
     */
    public function setCurrencyCode($CurrencyCode = null)
    {
        $this->CurrencyCode = $CurrencyCode;
        return $this;
    }

    /**
     * Gets the Year.
     *
     * @return string|null
     */
    public function getYear()
    {
        return $this->Year;
    }

    /**
     * Sets the Year.
     *
     * @param string|null $Year
     * @return $this
     */
    public function setYear($Year = null)
    {
        $this->Year = $Year;
        return $this;
    }

    /**
     * Gets the Month.
     *
     * @return int|null
     */
    public function getMonth()
    {
        return $this->Month;
    }

    /**
     * Sets the Month.
     *
     * @param int|null $Month
     * @return $this
     */
    public function setMonth($Month = null)
    {
        $this->Month = $Month;
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


}

