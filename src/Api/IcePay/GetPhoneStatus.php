<?php

namespace Icepay\Api\IcePay;

/**
 * Class representing GetPhoneStatus
 *
 * @see connect.icepay.com#GetPhoneStatus
 */
class GetPhoneStatus
{

    /**
     * @var \Icepay\Api\DataContract\GetPhoneStatusRequestType|null
     */
    protected $request = null;

    /**
     * Gets the request.
     *
     * @return \Icepay\Api\DataContract\GetPhoneStatusRequestType|null
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Sets the request.
     *
     * @param \Icepay\Api\DataContract\GetPhoneStatusRequestType|null $request
     * @return $this
     */
    public function setRequest(\Icepay\Api\DataContract\GetPhoneStatusRequestType $request = null)
    {
        $this->request = $request;
        return $this;
    }


}

