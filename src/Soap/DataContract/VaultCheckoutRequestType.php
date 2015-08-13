<?php

namespace Icepay\Api\Soap\DataContract;

use Icepay\Api\Assert;

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
    public function __construct($consumerId, $orderId, $amount, $currency, $country, $language, $endUserIP, $paymentMethod, $paymentIssuer)
    {
        parent::__construct($orderId, $amount, $currency, $country, $language, $endUserIP, $paymentMethod, $paymentIssuer);

        Assert::lazy()
            ->that($consumerId, 'consumerId')->notEmpty()
            ->that($paymentMethod, 'paymentMethod')->notEmpty()
            ->that($paymentIssuer, 'paymentIssuer')->notEmpty()
            ->verifyNow()
        ;

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

