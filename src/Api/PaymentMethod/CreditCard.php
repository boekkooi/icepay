<?php
namespace Icepay\Api\PaymentMethod;

final class CreditCard implements PaymentMethod
{
    const CODE = 'CREDITCARD';

    /**
     * @inheritdoc
     */
    public function getName()
    {
        return 'Creditcards';
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
        return array('AMEX', 'MASTER', 'VISA');
    }

    /**
     * @inheritdoc
     */
    public function getCountries()
    {
        return [ '00' ];
    }

    /**
     * @inheritdoc
     */
    public function getCurrencies()
    {
        return array(
            'EUR','USD','GBP', 'AED', 'ARS',
            'AUD', 'BGN', 'BRL', 'CAD',
            'CHF', 'CLP', 'CNY', 'CZK',
            'DKK', 'EEK', 'HKD', 'HRK',
            'HUF', 'IDR', 'ILS', 'INR', 'ISK',
            'JPY', 'KRW', 'LTL', 'LVL', 'MXN',
            'MYR', 'NOK', 'NZD', 'PHP',
            'PLN', 'RON', 'RUB', 'SEK',
            'SGD', 'SKK', 'THB', 'TRY',
            'TWD', 'UAH', 'VND', 'ZAR'
        );
    }

    /**
     * @inheritdoc
     */
    public function getLanguages()
    {
        return [ 'EN', 'NL', 'DE' ];
    }

    /**
     * @inheritdoc
     */
    public function getMinimumOrderAmount()
    {
        return 30;
    }

    /**
     * @inheritdoc
     */
    public function getMaximumOrderAmount()
    {
        return 1000000;
    }
}
