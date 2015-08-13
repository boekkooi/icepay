<?php
namespace Icepay\Api\PaymentMethod\Iterator;

use Icepay\Api\Soap\DataContract\Responses\CountryType;
use Iterator;

class CurrencyFilterIterator extends \FilterIterator
{
    /**
     * @var string[]
     */
    private $currencies;

    /**
     * Constructor.
     *
     * @param Iterator $iterator The Iterator to filter
     * @param string[] $currencies An array of ISO 4217 (currency) codes
     */
    public function __construct(Iterator $iterator, array $currencies)
    {
        parent::__construct($iterator);

        $this->currencies = $currencies;
    }

    /**
     * Filters a Country currencies.
     *
     * This ensures that all currencies are supported.
     *
     * @return bool true if all currencies are supported, false otherwise
     */
    public function accept()
    {
        $country = $this->current();
        if (!$country instanceof CountryType) {
            return false;
        }

        foreach ($this->currencies as $code) {
            if (!in_array($code, $country->getCurrencies(), true)) {
                return false;
            }
        }

        return true;
    }
}
