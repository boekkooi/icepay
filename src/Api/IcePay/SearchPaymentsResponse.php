<?php

namespace Icepay\Api\IcePay;

/**
 * Class representing SearchPaymentsResponse
 *
 * @see connect.icepay.com#SearchPaymentsResponse
 */
class SearchPaymentsResponse
{

    /**
     * @var \Icepay\Api\DataContract\SearchPaymentsResponseType|null
     */
    protected $SearchPaymentsResult = null;

    /**
     * Gets the SearchPaymentsResult.
     *
     * @return \Icepay\Api\DataContract\SearchPaymentsResponseType|null
     */
    public function getSearchPaymentsResult()
    {
        return $this->SearchPaymentsResult;
    }

    /**
     * Sets the SearchPaymentsResult.
     *
     * @param \Icepay\Api\DataContract\SearchPaymentsResponseType|null $SearchPaymentsResult
     * @return $this
     */
    public function setSearchPaymentsResult(\Icepay\Api\DataContract\SearchPaymentsResponseType $SearchPaymentsResult = null)
    {
        $this->SearchPaymentsResult = $SearchPaymentsResult;
        return $this;
    }


}

