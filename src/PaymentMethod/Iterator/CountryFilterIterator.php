<?php
namespace Icepay\Api\PaymentMethod\Iterator;

use Icepay\Api\Soap\DataContract\Responses\CountryType;
use Iterator;

class CountryFilterIterator extends \FilterIterator
{
    /**
     * @var string[]
     */
    private $countries;

    /**
     * Constructor.
     *
     * @param Iterator $iterator The Iterator to filter
     * @param string[] $countries An array of ISO 3166-1-alpha-2 (country) codes
     */
    public function __construct(Iterator $iterator, array $countries)
    {
        parent::__construct($iterator);
        $this->countries = $countries;
    }

    /**
     * Filters the PaymentMethod countries.
     *
     * This ensures that all countries are supported.
     *
     * @return bool true if all countries are supported, false otherwise
     */
    public function accept()
    {
        $country = $this->current();
        if (!$country instanceof CountryType) {
            return false;
        }

        $countryCode = $country->getCountryCode();
        return (
            $countryCode === '00' ||
            in_array($countryCode, $this->countries, true)
        );
    }
}
