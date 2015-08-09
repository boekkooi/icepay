<?php

namespace Icepay\Api\DataContract;

/**
 * Class representing CheckoutWithPINRequest
 *
 *
 *
 * @see http://schemas.datacontract.org/2004/07/APIService#CheckoutWithPINRequest
 */
class CheckoutWithPINRequestType extends CheckoutRequestType
{

    /**
     * @var string|null
     */
    protected $PINCode = null;

    /**
     * Gets the PINCode.
     *
     * @return string|null
     */
    public function getPINCode()
    {
        return $this->PINCode;
    }

    /**
     * Sets the PINCode.
     *
     * @param string|null $PINCode
     * @return $this
     */
    public function setPINCode($PINCode = null)
    {
        $this->PINCode = $PINCode;
        return $this;
    }


}

