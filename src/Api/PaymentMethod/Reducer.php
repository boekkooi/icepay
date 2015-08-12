<?php
namespace Icepay\Api\PaymentMethod;

use Icepay\Api\Soap\DataContract\Responses\CountryType;
use Icepay\Api\Soap\DataContract\Responses\IssuerType;
use Icepay\Api\Soap\DataContract\Responses\PaymentMethodType;

/**
 * The Reducer is used to reduce a set of payment methods and there issuers.
 *
 * @package Icepay\Api\PaymentMethod
 */
class Reducer
{
    /**
     * @var string[][]
     */
    private $countryFilters = [];
    /**
     * @var string[][]
     */
    private $currencyFilters = [];
    /**
     * @var string[][]
     */
    private $languageFilters = [];
    /**
     * @var int[]
     */
    private $amountFilters = [];

    /**
     * Filter by language
     *
     * @param string|string[] $language ISO 639-1 (language) code
     */
    public function language($language)
    {
        $this->languageFilters[] = is_array($language) ? $language : [ $language ];
    }

    /**
     * Filter by currency
     *
     * @param string|string[] $currency ISO 4217 (currency) code
     */
    public function currency($currency)
    {
        $this->currencyFilters[] = is_array($currency) ? $currency : [ $currency ];
    }

    /**
     * Filter by country
     *
     * @param string|string[] $country ISO 3166-1-alpha-2 (country) code
     */
    public function country($country)
    {
        $this->countryFilters[] = is_array($country) ? $country : [$country];
    }

    /**
     * Filter by amount
     *
     * @param int $amount
     */
    public function amount($amount)
    {
        $this->amountFilters[] = $amount;
    }

    /**
     * Returns an Iterator for the current Finder configuration.
     *
     * @param PaymentMethodType[] $paymentMethods
     * @return PaymentMethodType[] An iterator
     */
    public function reduce(array $paymentMethods)
    {
        /** @var \Iterator|PaymentMethodType[] $paymentIterator */
        $paymentIterator = new \ArrayIterator($paymentMethods);
        foreach ($this->languageFilters as $languages) {
            $paymentIterator = new Iterator\LanguageFilterIterator($paymentIterator, $languages);
        }

        $paymentMethods = [];
        foreach ($paymentIterator as $method) {
            $paymentMethod = $this->reducePaymentMethod($method);
            if ($paymentMethod !== null) {
                $paymentMethods[] = $paymentMethod;
            }
        }

        return $paymentMethods;
    }

    /**
     * @param PaymentMethodType $paymentMethod
     * @return PaymentMethodType|null
     */
    protected function reducePaymentMethod(PaymentMethodType $paymentMethod)
    {
        $paymentIssuers = [];
        foreach ($paymentMethod->getIssuers() as $issuer) {
            $paymentIssuer = $this->reduceIssuer($issuer);
            if ($paymentIssuer !== null) {
                $paymentIssuers[] = $paymentIssuer;
            }
        }

        // No issuers so ignore this payment method
        if (empty($paymentIssuers)) {
            return null;
        }

        // Create a reduced payment method
        return new PaymentMethodType(
            $paymentMethod->getPaymentMethodCode(),
            $paymentMethod->getName(),
            $paymentMethod->getDescription(),
            $paymentIssuers,
            $paymentMethod->getLanguages()
        );
    }

    /**
     * @param IssuerType $issuer
     * @return IssuerType|null
     */
    protected function reduceIssuer(IssuerType $issuer)
    {
        $countries = iterator_to_array(
            $this->fetchCountryFilterIterator($issuer)
        );

        // No countries so ignore this payment method
        if (empty($countries)) {
            return null;
        }

        // Create a reduced issuer
        return new IssuerType(
            $issuer->getDescription(),
            $issuer->getIssuerKeyword(),
            $countries
        );
    }

    /**
     * @param IssuerType $issuer
     * @return \Iterator|CountryType[]
     */
    protected function fetchCountryFilterIterator(IssuerType $issuer)
    {
        $iterator = new \ArrayIterator($issuer->getCountries());
        foreach ($this->amountFilters as $amount) {
            $iterator = new Iterator\AmountFilterIterator($iterator, $amount);
        }
        foreach ($this->currencyFilters as $currencies) {
            $iterator = new Iterator\CurrencyFilterIterator($iterator, $currencies);
        }
        foreach ($this->countryFilters as $countries) {
            $iterator = new Iterator\CountryFilterIterator($iterator, $countries);
        }

        return $iterator;
    }
}
