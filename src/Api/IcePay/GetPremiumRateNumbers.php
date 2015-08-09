<?php

namespace Icepay\Api\IcePay;

/**
 * Class representing GetPremiumRateNumbers
 *
 * @see connect.icepay.com#GetPremiumRateNumbers
 */
class GetPremiumRateNumbers
{

    /**
     * @var \Icepay\Api\DataContract\BaseTypeType|null
     */
    protected $request = null;

    /**
     * Gets the request.
     *
     * @return \Icepay\Api\DataContract\BaseTypeType|null
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Sets the request.
     *
     * @param \Icepay\Api\DataContract\BaseTypeType|null $request
     * @return $this
     */
    public function setRequest(\Icepay\Api\DataContract\BaseTypeType $request = null)
    {
        $this->request = $request;
        return $this;
    }


}

