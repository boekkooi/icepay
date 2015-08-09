<?php

namespace Icepay\Api\IcePay;

/**
 * Class representing MonthlyTurnoverTotalsResponse
 *
 * @see connect.icepay.com#MonthlyTurnoverTotalsResponse
 */
class MonthlyTurnoverTotalsResponse
{

    /**
     * @var \Icepay\Api\DataContract\MonthlyTurnoverTotalsResponseType|null
     */
    protected $MonthlyTurnoverTotalsResult = null;

    /**
     * Gets the MonthlyTurnoverTotalsResult.
     *
     * @return \Icepay\Api\DataContract\MonthlyTurnoverTotalsResponseType|null
     */
    public function getMonthlyTurnoverTotalsResult()
    {
        return $this->MonthlyTurnoverTotalsResult;
    }

    /**
     * Sets the MonthlyTurnoverTotalsResult.
     *
     * @param \Icepay\Api\DataContract\MonthlyTurnoverTotalsResponseType|null $MonthlyTurnoverTotalsResult
     * @return $this
     */
    public function setMonthlyTurnoverTotalsResult(\Icepay\Api\DataContract\MonthlyTurnoverTotalsResponseType $MonthlyTurnoverTotalsResult = null)
    {
        $this->MonthlyTurnoverTotalsResult = $MonthlyTurnoverTotalsResult;
        return $this;
    }


}

