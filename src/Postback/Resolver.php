<?php
namespace Icepay\Api\Postback;

use Icepay\Api\Assert;

class Resolver
{
    private $merchantId;
    private $secretCode;

    public function __construct($merchantId, $secretCode)
    {
        $this->merchantId = $merchantId;
        $this->secretCode = $secretCode;
    }

    public function resolveFromPost()
    {
        Assert::that($_SERVER , null, '$_SERVER')->choicesNotEmpty(['REQUEST_METHOD', 'REMOTE_ADDR']);
        Assert::lazy()
            ->that($_SERVER['REQUEST_METHOD'], '$_SERVER["REQUEST_METHOD"]')->eq('POST')
            ->that($_SERVER['REMOTE_ADDR'], '$_SERVER["REMOTE_ADDR"]')
            ->ipv4()
            ->ipv4InSubnetMask(['194.30.175.0/24', '194.126.241.128/26'])
            ->verifyNow();

        return $this->resolve($_POST);
    }

    public function resolve(array $data)
    {
        Assert::that($data, null, 'data')
            ->choicesNotEmpty(['Status', 'Checksum']);

        // The data indicates a version check
        if ($data['Status'] === VersionCheck::STATE_VERSION_CHECK) {
            return VersionCheck::generateChecksum($this->merchantId, $this->secretCode) === $data['Checksum'];
        }

        $data = $this->prepareOrderData($data);

        $order = new Order(
            $data['PaymentMethod'],
            $data['OrderID'],
            $data['Status'],
            $data['PaymentID'],
            $data['StatusCode'],
            $data['TransactionID'],
            $data['Reference'],
            $data['Amount'],
            $data['Currency'],
            $data['Duration'],
            $data['ConsumerName'],
            $data['ConsumerAccountNumber'],
            $data['ConsumerAddress'],
            $data['ConsumerHouseNumber'],
            $data['ConsumerCity'],
            $data['ConsumerCountry'],
            $data['ConsumerEmail'],
            $data['ConsumerPhoneNumber'],
            $data['ConsumerIPAddress']
        );

        Assert::that($data['Checksum'], null, 'data["Checksum"]')
            ->eq(Order::generateChecksum($this->merchantId, $this->secretCode, $order), 'Invalid Checksum in data');

        return $order;
    }

    /**
     * Prepare and check that the needed data is available.
     *
     * @param array $data
     * @return array
     */
    protected function prepareOrderData(array $data)
    {
        $requiredKeys = [
            'Checksum',
            'Merchant',
            'Status',
            'OrderID',
            'PaymentID',
            'PaymentMethod',
        ];

        Assert::that($data, null, 'data')->choicesNotEmpty($requiredKeys);
        Assert::that($data['Merchant'], null, 'data["Merchant"]')->eq($this->merchantId, 'Invalid MerchantId! Expected "%2$s" but received "%1$s".');

        $optionalKeys = [
            'StatusCode',
            'TransactionID',
            'Reference',
            'ConsumerName',
            'ConsumerAccountNumber',
            'ConsumerAddress',
            'ConsumerHouseNumber',
            'ConsumerCity',
            'ConsumerCountry',
            'ConsumerEmail',
            'ConsumerPhoneNumber',
            'ConsumerIPAddress',
            'Amount',
            'Currency',
            'Duration',
        ];
        foreach ($optionalKeys as $key) {
            $data[$key] = isset($data[$key]) && $data[$key] !== "" ? $data[$key] : null;
        }

        return $data;
    }
}
