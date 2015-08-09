<?php

namespace Icepay\Api\Soap\DataContract;

/**
 * Class representing GetMyPaymentMethodResponse
 *
 *
 *
 * @see http://schemas.datacontract.org/2004/07/APIService#GetMyPaymentMethodResponse
 */
class GetMyPaymentMethodResponseType
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
     * Sets the PaymentMethods.
     *
     * @param \Icepay\Api\Soap\DataContract\Responses\PaymentMethodType[]|null $PaymentMethods
     * @return $this
     */
    public function setPaymentMethods(array $PaymentMethods = null)
    {
        foreach ($PaymentMethods as $item) {
            $this->addPaymentMethod($item);
        }
        return $this;
    }

    /**
     * Adds an PaymentMethod.
     *
     * @param \Icepay\Api\Soap\DataContract\Responses\PaymentMethodType $PaymentMethod The PaymentMethod to add.
     * @return $this
     */
    public function addPaymentMethod(\Icepay\Api\Soap\DataContract\Responses\PaymentMethodType $PaymentMethod)
    {
        $this->PaymentMethods[] = $PaymentMethod;
        return $this;
    }

    /**
     * Sets an PaymentMethod at the specified key/index.
     *
     * @param string|integer $key The key/index of the PaymentMethod to set.
     * @param \Icepay\Api\Soap\DataContract\Responses\PaymentMethodType $PaymentMethod The PaymentMethod to set.
     * @return $this
     */
    public function setPaymentMethod($key, \Icepay\Api\Soap\DataContract\Responses\PaymentMethodType $PaymentMethod)
    {
        $this->PaymentMethods[$key] = $PaymentMethod;
        return $this;
    }

    /**
     * Removes the PaymentMethod at the specified key/index.
     *
     * @param string|integer $key The kex/index of the PaymentMethod to remove
     * @return \Icepay\Api\Soap\DataContract\Responses\PaymentMethodType|null The removed PaymentMethod or NULL.
     */
    public function removePaymentMethod($key)
    {
        if (!isset($this->PaymentMethods[$key]) && !array_key_exists($key, $this->PaymentMethods)) {
            return null;
        }
        $removed = $this->PaymentMethods[$key];
        unset($this->PaymentMethods[$key]);
        return $removed;
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


}

