<?php
namespace Icepay\Api\PaymentMethod;

final class Ideal implements PaymentMethod
{
    const CODE = 'IDEAL';

    /**
     * @inheritdoc
     */
    public function getName()
    {
        return 'iDEAL';
    }

    /**
     * @inheritdoc
     */
    public function getCode()
    {
        return self::CODE;
    }

    /**
     * @inheritdoc
     */
    public function getIssuers()
    {
        return array('ABNAMRO', 'ASNBANK', 'ING', 'KNAB', 'RABOBANK', 'SNSBANK', 'SNSREGIOBANK', 'TRIODOSBANK', 'VANLANSCHOT');
    }

    /**
     * @inheritdoc
     */
    public function getCountries()
    {
        return [ 'NL' ];
    }

    /**
     * @inheritdoc
     */
    public function getCurrencies()
    {
        return [ 'EUR' ];
    }

    /**
     * @inheritdoc
     */
    public function getLanguages()
    {
        return [ 'NL' ];
    }

    /**
     * @inheritdoc
     */
    public function getMinimumOrderAmount()
    {
        // TODO is this in cents?
        return 30;
    }

    /**
     * @inheritdoc
     */
    public function getMaximumOrderAmount()
    {
        // TODO is this in cents?
        return 1000000;
    }
}
