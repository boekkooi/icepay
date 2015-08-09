<?php

namespace Icepay\Api\IcePay;

/**
 * Class representing ValidateSmsCode
 *
 * @see connect.icepay.com#ValidateSmsCode
 */
class ValidateSmsCode
{

    /**
     * @var \Icepay\Api\DataContract\ValidateSmsCodeRequestType|null
     */
    protected $request = null;

    /**
     * Gets the request.
     *
     * @return \Icepay\Api\DataContract\ValidateSmsCodeRequestType|null
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Sets the request.
     *
     * @param \Icepay\Api\DataContract\ValidateSmsCodeRequestType|null $request
     * @return $this
     */
    public function setRequest(\Icepay\Api\DataContract\ValidateSmsCodeRequestType $request = null)
    {
        $this->request = $request;
        return $this;
    }


}

