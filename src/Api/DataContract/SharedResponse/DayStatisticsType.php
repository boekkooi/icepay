<?php

namespace Icepay\Api\DataContract\SharedResponse;

/**
 * Class representing DayStatistics
 *
 *
 *
 * @see http://schemas.datacontract.org/2004/07/APIService.SharedResponseTypes#DayStatistics
 */
class DayStatisticsType
{

    /**
     * @var int|null
     */
    protected $Day = null;

    /**
     * @var int|null
     */
    protected $Duration = null;

    /**
     * @var int|null
     */
    protected $Month = null;

    /**
     * @var int|null
     */
    protected $TransactionsCount = null;

    /**
     * @var int|null
     */
    protected $Turnover = null;

    /**
     * @var int|null
     */
    protected $Year = null;

    /**
     * Gets the Day.
     *
     * @return int|null
     */
    public function getDay()
    {
        return $this->Day;
    }

    /**
     * Sets the Day.
     *
     * @param int|null $Day
     * @return $this
     */
    public function setDay($Day = null)
    {
        $this->Day = $Day;
        return $this;
    }

    /**
     * Gets the Duration.
     *
     * @return int|null
     */
    public function getDuration()
    {
        return $this->Duration;
    }

    /**
     * Sets the Duration.
     *
     * @param int|null $Duration
     * @return $this
     */
    public function setDuration($Duration = null)
    {
        $this->Duration = $Duration;
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
     * Gets the TransactionsCount.
     *
     * @return int|null
     */
    public function getTransactionsCount()
    {
        return $this->TransactionsCount;
    }

    /**
     * Sets the TransactionsCount.
     *
     * @param int|null $TransactionsCount
     * @return $this
     */
    public function setTransactionsCount($TransactionsCount = null)
    {
        $this->TransactionsCount = $TransactionsCount;
        return $this;
    }

    /**
     * Gets the Turnover.
     *
     * @return int|null
     */
    public function getTurnover()
    {
        return $this->Turnover;
    }

    /**
     * Sets the Turnover.
     *
     * @param int|null $Turnover
     * @return $this
     */
    public function setTurnover($Turnover = null)
    {
        $this->Turnover = $Turnover;
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

