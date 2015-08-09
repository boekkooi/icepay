<?php

namespace Icepay\Api\IcePay;

/**
 * Class representing ValidatePhoneCode
 *
 * @see connect.icepay.com#ValidatePhoneCode
 */
class ValidatePhoneCode
{

    /**
     * @var \Icepay\Api\DataContract\ValidatePhoneCodeRequestType|null
     */
    protected $request = null;

    /**
     * Gets the request.
     *
     * @return \Icepay\Api\DataContract\ValidatePhoneCodeRequestType|null
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Sets the request.
     *
     * @param \Icepay\Api\DataContract\ValidatePhoneCodeRequestType|null $request
     * @return $this
     */
    public function setRequest(\Icepay\Api\DataContract\ValidatePhoneCodeRequestType $request = null)
    {
        $this->request = $request;
        return $this;
    }


}

