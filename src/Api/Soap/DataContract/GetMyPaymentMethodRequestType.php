<?php
namespace Icepay\Api\Soap\DataContract;

class GetMyPaymentMethodRequestType extends BaseTypeType
{
    /**
     * @inheritDoc
     */
    protected function enhanceChecksumData($secretCode, array $data)
    {
        array_unshift(
            $data,
            $this->getMerchantID(),
            $secretCode,
            $this->getTimestamp()
        );

        return $data;
    }
}
