<?php

namespace Icepay\Api\IcePay;

/**
 * Class representing CaptureFullResponse
 *
 * @see connect.icepay.com#CaptureFullResponse
 */
class CaptureFullResponse
{

    /**
     * @var \Icepay\Api\DataContract\RequestAPCaptureResponseType|null
     */
    protected $CaptureFullResult = null;

    /**
     * Gets the CaptureFullResult.
     *
     * @return \Icepay\Api\DataContract\RequestAPCaptureResponseType|null
     */
    public function getCaptureFullResult()
    {
        return $this->CaptureFullResult;
    }

    /**
     * Sets the CaptureFullResult.
     *
     * @param \Icepay\Api\DataContract\RequestAPCaptureResponseType|null $CaptureFullResult
     * @return $this
     */
    public function setCaptureFullResult(\Icepay\Api\DataContract\RequestAPCaptureResponseType $CaptureFullResult = null)
    {
        $this->CaptureFullResult = $CaptureFullResult;
        return $this;
    }


}

