<?php

namespace Icepay\Api\IcePay;

/**
 * Class representing VaultCheckoutResponse
 *
 * @see connect.icepay.com#VaultCheckoutResponse
 */
class VaultCheckoutResponse
{

    /**
     * @var \Icepay\Api\DataContract\CheckoutResponseType|null
     */
    protected $VaultCheckoutResult = null;

    /**
     * Gets the VaultCheckoutResult.
     *
     * @return \Icepay\Api\DataContract\CheckoutResponseType|null
     */
    public function getVaultCheckoutResult()
    {
        return $this->VaultCheckoutResult;
    }

    /**
     * Sets the VaultCheckoutResult.
     *
     * @param \Icepay\Api\DataContract\CheckoutResponseType|null $VaultCheckoutResult
     * @return $this
     */
    public function setVaultCheckoutResult(\Icepay\Api\DataContract\CheckoutResponseType $VaultCheckoutResult = null)
    {
        $this->VaultCheckoutResult = $VaultCheckoutResult;
        return $this;
    }


}

