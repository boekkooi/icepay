<?php

namespace Icepay\Api\Soap\DataContract;

/**
 * Class representing VaultCheckoutRequest
 *
 * @see http://schemas.datacontract.org/2004/07/APIService#VaultCheckoutRequest
 */
class VaultCheckoutRequestType extends CheckoutRequestType
{
    /**
     * @var string
     */
    protected $ConsumerID = null;

    /**
     * @inheritdoc
     * @param string $consumerId
     */
    public function __construct($consumerId, $orderId, $amount, $currency, $country, $language, $endUserIP, $paymentMethod = null, $paymentIssuer = null)
    {
        parent::__construct($orderId, $amount, $currency, $country, $language, $endUserIP, $paymentMethod, $paymentIssuer);

        $this->ConsumerID = $consumerId;
    }

    /**
     * Gets the ConsumerID.
     *
     * @return string
     */
    public function getConsumerID()
    {
        return $this->ConsumerID;
    }
}

