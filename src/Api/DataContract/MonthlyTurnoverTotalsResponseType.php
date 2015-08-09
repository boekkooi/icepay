<?php

namespace Icepay\Api\DataContract;

/**
 * Class representing MonthlyTurnoverTotalsResponse
 *
 *
 *
 * @see http://schemas.datacontract.org/2004/07/APIService#MonthlyTurnoverTotalsResponse
 */
class MonthlyTurnoverTotalsResponseType
{

    /**
     * @var string|null
     */
    protected $Checksum = null;

    /**
     * @var string|null
     */
    protected $CurrencyCode = null;

    /**
     * @var \Icepay\Api\DataContract\SharedResponse\DayStatisticsType[]|null
     */
    protected $Days = array();

    /**
     * @var int|null
     */
    protected $Month = null;

    /**
     * @var string|null
     */
    protected $SessionID = null;

    /**
     * @var string|null
     */
    protected $Timestamp = null;

    /**
     * @var int|null
     */
    protected $Year = null;

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
     * Gets the Days.
     *
     * @return \Icepay\Api\DataContract\SharedResponse\DayStatisticsType[]|null
     */
    public function getDays()
    {
        return $this->Days;
    }

    /**
     * Sets the Days.
     *
     * @param \Icepay\Api\DataContract\SharedResponse\DayStatisticsType[]|null $Days
     * @return $this
     */
    public function setDays(array $Days = null)
    {
        foreach ($Days as $item) {
            $this->addDay($item);
        }
        return $this;
    }

    /**
     * Adds an Day.
     *
     * @param \Icepay\Api\DataContract\SharedResponse\DayStatisticsType $Day The Day to add.
     * @return $this
     */
    public function addDay(\Icepay\Api\DataContract\SharedResponse\DayStatisticsType $Day)
    {
        $this->Days[] = $Day;
        return $this;
    }

    /**
     * Sets an Day at the specified key/index.
     *
     * @param string|integer $key The key/index of the Day to set.
     * @param \Icepay\Api\DataContract\SharedResponse\DayStatisticsType $Day The Day to set.
     * @return $this
     */
    public function setDay($key, \Icepay\Api\DataContract\SharedResponse\DayStatisticsType $Day)
    {
        $this->Days[$key] = $Day;
        return $this;
    }

    /**
     * Removes the Day at the specified key/index.
     *
     * @param string|integer $key The kex/index of the Day to remove
     * @return \Icepay\Api\DataContract\SharedResponse\DayStatisticsType|null The removed Day or NULL.
     */
    public function removeDay($key)
    {
        if (!isset($this->Days[$key]) && !array_key_exists($key, $this->Days)) {
            return null;
        }
        $removed = $this->Days[$key];
        unset($this->Days[$key]);
        return $removed;
    }

    /**
     * Removes the Day at the specified key/index.
     *
     * @param \Icepay\Api\DataContract\SharedResponse\DayStatisticsType $Day The Day to search for.
     * @return string|integer|bool The key/index of the Day or FALSE if the Day was not found.
     */
    public function indexOfDay($Day)
    {
        return array_search($Day, $this->Days, true);
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

    /**
     * Gets the Year.
     *
     * @return int|null
     */
    public function getYear()
    {
        return $this->Year;
    }

    /**
     * Sets the Year.
     *
     * @param int|null $Year
     * @return $this
     */
    public function setYear($Year = null)
    {
        $this->Year = $Year;
        return $this;
    }


}

