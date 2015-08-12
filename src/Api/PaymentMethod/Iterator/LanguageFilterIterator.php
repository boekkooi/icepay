<?php
namespace Icepay\Api\PaymentMethod\Iterator;

use Icepay\Api\PaymentMethod\PaymentMethod;
use Icepay\Api\Soap\DataContract\Responses\PaymentMethodType;
use Iterator;

class LanguageFilterIterator extends \FilterIterator
{
    /**
     * @var string[]
     */
    private $languages;

    /**
     * Constructor.
     *
     * @param Iterator $iterator The Iterator to filter
     * @param string[] $languages An array of ISO 639-1 (language) codes
     */
    public function __construct(Iterator $iterator, array $languages)
    {
        parent::__construct($iterator);
        $this->languages = $languages;
    }

    /**
     * Filters the PaymentMethod languages.
     *
     * This ensures that all languages are supported.
     *
     * @return bool true if all languages are supported, false otherwise
     */
    public function accept()
    {
        $paymentMethod = $this->current();
        if (!$paymentMethod instanceof PaymentMethodType) {
            return false;
        }

        $paymentLanguages = $paymentMethod->getLanguages();
        if (in_array('00', $paymentLanguages, true)) {
            return true;
        }

        foreach ($this->languages as $languageCode) {
            if (!in_array($languageCode, $paymentLanguages, true)) {
                return false;
            }
        }

        return true;
    }
}
