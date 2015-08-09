<?php

namespace Icepay\Api\IcePay;

/**
 * Class representing ValidatePhoneCodeResponse
 *
 * @see connect.icepay.com#ValidatePhoneCodeResponse
 */
class ValidatePhoneCodeResponse
{

    /**
     * @var \Icepay\Api\DataContract\ValidatePhoneCodeResponseType|null
     */
    protected $ValidatePhoneCodeResult = null;

    /**
     * Gets the ValidatePhoneCodeResult.
     *
     * @return \Icepay\Api\DataContract\ValidatePhoneCodeResponseType|null
     */
    public function getValidatePhoneCodeResult()
    {
        return $this->ValidatePhoneCodeResult;
    }

    /**
     * Sets the ValidatePhoneCodeResult.
     *
     * @param \Icepay\Api\DataContract\ValidatePhoneCodeResponseType|null $ValidatePhoneCodeResult
     * @return $this
     */
    public function setValidatePhoneCodeResult(\Icepay\Api\DataContract\ValidatePhoneCodeResponseType $ValidatePhoneCodeResult = null)
    {
        $this->ValidatePhoneCodeResult = $ValidatePhoneCodeResult;
        return $this;
    }


}

