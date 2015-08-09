<?php

namespace Icepay\Api\IcePay;

/**
 * Class representing RequestRefundResponse
 *
 * @see connect.icepay.com#RequestRefundResponse
 */
class RequestRefundResponse
{

    /**
     * @var \Icepay\Api\DataContract\RequestRefundResponseType|null
     */
    protected $RequestRefundResult = null;

    /**
     * Gets the RequestRefundResult.
     *
     * @return \Icepay\Api\DataContract\RequestRefundResponseType|null
     */
    public function getRequestRefundResult()
    {
        return $this->RequestRefundResult;
    }

    /**
     * Sets the RequestRefundResult.
     *
     * @param \Icepay\Api\DataContract\RequestRefundResponseType|null $RequestRefundResult
     * @return $this
     */
    public function setRequestRefundResult(\Icepay\Api\DataContract\RequestRefundResponseType $RequestRefundResult = null)
    {
        $this->RequestRefundResult = $RequestRefundResult;
        return $this;
    }


}

