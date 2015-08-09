<?php

namespace Icepay\Api\IcePay;

/**
 * Class representing CancelRefundResponse
 *
 * @see connect.icepay.com#CancelRefundResponse
 */
class CancelRefundResponse
{

    /**
     * @var \Icepay\Api\DataContract\CancelRefundResponseType|null
     */
    protected $CancelRefundResult = null;

    /**
     * Gets the CancelRefundResult.
     *
     * @return \Icepay\Api\DataContract\CancelRefundResponseType|null
     */
    public function getCancelRefundResult()
    {
        return $this->CancelRefundResult;
    }

    /**
     * Sets the CancelRefundResult.
     *
     * @param \Icepay\Api\DataContract\CancelRefundResponseType|null $CancelRefundResult
     * @return $this
     */
    public function setCancelRefundResult(\Icepay\Api\DataContract\CancelRefundResponseType $CancelRefundResult = null)
    {
        $this->CancelRefundResult = $CancelRefundResult;
        return $this;
    }


}

