<?php
namespace Icepay\Api\PaymentMethod\Iterator;

use Icepay\Api\Soap\DataContract\Responses\CountryType;
use Iterator;

class AmountFilterIterator extends \FilterIterator
{
    /**
     * @var int
     */
    private $amount;

    /**
     * Constructor.
     *
     * @param Iterator $iterator The Iterator to filter
     * @param int $amount An amount in cents
     */
    public function __construct(Iterator $iterator, $amount)
    {
        parent::__construct($iterator);
        $this->amount = $amount;
    }

    /**
     * Filters the PaymentMethod based on the minimum/maximum order amount.
     *
     * @return bool true if the amount is supported, false otherwise
     */
    public function accept()
    {
        $country = $this->current();
        if (!$country instanceof CountryType) {
            return false;
        }

        return (
            $this->amount >= $country->getMinimumAmount() &&
            $this->amount <= $country->getMaximumAmount()
        );
    }
}
