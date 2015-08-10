<?php

namespace Icepay\Api\Soap\DataContract;

/**
 * Class representing GetMyPaymentMethodResponse
 *
 * @see http://schemas.datacontract.org/2004/07/APIService#GetMyPaymentMethodResponse
 */
class GetMyPaymentMethodResponseType implements \IteratorAggregate
{
    /**
     * @var \Icepay\Api\Soap\DataContract\Responses\PaymentMethodType[]|null
     */
    protected $PaymentMethods = array();

    /**
     * Gets the PaymentMethods.
     *
     * @return \Icepay\Api\Soap\DataContract\Responses\PaymentMethodType[]|null
     */
    public function getPaymentMethods()
    {
        return $this->PaymentMethods;
    }

    /**
     * Removes the PaymentMethod at the specified key/index.
     *
     * @param \Icepay\Api\Soap\DataContract\Responses\PaymentMethodType $PaymentMethod The PaymentMethod to search for.
     * @return string|integer|bool The key/index of the PaymentMethod or FALSE if the PaymentMethod was not found.
     */
    public function indexOfPaymentMethod($PaymentMethod)
    {
        return array_search($PaymentMethod, $this->PaymentMethods, true);
    }

    /**
     * @inheritdoc
     */
    public function getIterator()
    {
        return new \ArrayIterator(
            $this->getPaymentMethods()
        );
    }

    /**
     * @inheritDoc
     */
    public function __wakeup()
    {
        if ($this->PaymentMethods instanceof \stdClass) {
            $this->PaymentMethods = $this->PaymentMethods->PaymentMethod;

            foreach ($this->PaymentMethods as $method) {
                $method->__wakeup();
            }
        }
    }
}
