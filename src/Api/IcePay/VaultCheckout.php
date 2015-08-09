<?php

namespace Icepay\Api\IcePay;

/**
 * Class representing VaultCheckout
 *
 * @see connect.icepay.com#VaultCheckout
 */
class VaultCheckout
{

    /**
     * @var \Icepay\Api\DataContract\VaultCheckoutRequestType|null
     */
    protected $request = null;

    /**
     * Gets the request.
     *
     * @return \Icepay\Api\DataContract\VaultCheckoutRequestType|null
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Sets the request.
     *
     * @param \Icepay\Api\DataContract\VaultCheckoutRequestType|null $request
     * @return $this
     */
    public function setRequest(\Icepay\Api\DataContract\VaultCheckoutRequestType $request = null)
    {
        $this->request = $request;
        return $this;
    }


}

