<?php

namespace Icepay\Api\IcePay;

/**
 * Class representing ValidateSmsCodeResponse
 *
 * @see connect.icepay.com#ValidateSmsCodeResponse
 */
class ValidateSmsCodeResponse
{

    /**
     * @var \Icepay\Api\DataContract\ValidateSmsCodeResponseType|null
     */
    protected $ValidateSmsCodeResult = null;

    /**
     * Gets the ValidateSmsCodeResult.
     *
     * @return \Icepay\Api\DataContract\ValidateSmsCodeResponseType|null
     */
    public function getValidateSmsCodeResult()
    {
        return $this->ValidateSmsCodeResult;
    }

    /**
     * Sets the ValidateSmsCodeResult.
     *
     * @param \Icepay\Api\DataContract\ValidateSmsCodeResponseType|null $ValidateSmsCodeResult
     * @return $this
     */
    public function setValidateSmsCodeResult(\Icepay\Api\DataContract\ValidateSmsCodeResponseType $ValidateSmsCodeResult = null)
    {
        $this->ValidateSmsCodeResult = $ValidateSmsCodeResult;
        return $this;
    }


}

