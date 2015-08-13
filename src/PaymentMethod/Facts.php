<?php
namespace Icepay\Api\PaymentMethod;

final class Facts
{
    private static $facts = [
        'CREDITCARD' => [
            'name' => 'Creditcards',
            'languages' => [ 'EN', 'NL', 'DE' ]
        ],
        'DDEBIT' => [
            'name' => 'Direct Debit',
            'languages' => [ 'NL', 'EN' ]
        ],
        'GIROPAY' => [
            'name' => 'Giropay',
            'languages' => [ 'DE' ]
        ],
        'IDEAL' => [
            'name' => 'iDEAL',
            'languages' => [ 'NL' ]
        ],
        'MISTERCASH' => [
            'name' => 'MisterCash',
            'languages' => [ 'DE','EN','ES','FR','IT','JA','NL' ]
        ],
        'PAYPAL' => [
            'name' => 'PayPal',
            'languages' => [ '00' ]
        ],
        'PAYSAFECARD' => [
            'name' => 'PaySafeCard',
            'languages' => [ '00' ]
        ],
        'PHONE' => [
            'name' => 'Phone (Progressbar)',
            'languages' => [ '00' ]
        ],
        'SMS' => [
            'name' => 'SMS Text',
            'languages' => [ 'EN','NL' ]
        ],
        'WIRE' => [
            'name' => 'Wire Transfer',
            'languages' => [ '00' ]
        ]
    ];

    private function __construct() {}

    public static function getFriendlyName($code)
    {
        $code = strtoupper($code);
        if (isset(self::$facts[$code])) {
            return self::$facts[$code]['name'];
        }

        return null;
    }

    public static function getLanguages($code)
    {
        $code = strtoupper($code);
        if (isset(self::$facts[$code])) {
            return self::$facts[$code]['languages'];
        }

        return [ '00' ];
    }
}
