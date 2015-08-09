<?php

namespace Icepay\Api\Soap\DataContract;

/**
 * Class representing VaultCheckoutRequest
 *
 *
 *
 * @see http://schemas.datacontract.org/2004/07/APIService#VaultCheckoutRequest
 */
class VaultCheckoutRequestType extends CheckoutRequestType
{

    /**
     * @var string|null
     */
    protected $ConsumerID = null;

    /**
     * Gets the ConsumerID.
     *
     * @return string|null
     */
    public function getConsumerID()
    {
        return $this->ConsumerID;
    }

    /**
     * Sets the ConsumerID.
     *
     * @param string|null $ConsumerID
     * @return $this
     */
    public function setConsumerID($ConsumerID = null)
    {
        $this->ConsumerID = $ConsumerID;
        return $this;
    }


}

