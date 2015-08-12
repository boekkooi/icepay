<?php
namespace Tests\Icepay\Api\Postback;

use Icepay\Api\Assert\Exception\InvalidArgumentException;
use Icepay\Api\Exception\Exception;
use Icepay\Api\Postback\Order;
use Icepay\Api\Postback\Resolver;
use Icepay\Api\Postback\VersionCheck;

class ResolverTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var string
     */
    private $merchantId;
    /**
     * @var string
     */
    private $secretCode;
    /**
     * @var Resolver
     */
    private $resolver;

    /**
     * @inheritDoc
     */
    protected function setUp()
    {
        $this->merchantId = time();
        $this->secretCode = sha1(time());

        $this->resolver = new Resolver($this->merchantId, $this->secretCode);
    }

    /**
     * @test
     * @dataProvider provideMissingData
     */
    public function testMissingData(array $data, $missingElement)
    {
        try {
            $this->resolver->resolve($data);
            $this->fail();
        } catch (InvalidArgumentException $e) {
            $this->assertEquals(
                sprintf('The element with key "%s" was not found', $missingElement),
                $e->getMessage()
            );
        }
    }

    /**
     * @test
     */
    public function testVersionCheck()
    {
        $data =[
            'Checksum' => sha1(implode('|', [
                $this->secretCode,
                $this->merchantId,
                VersionCheck::STATE_VERSION_CHECK,
                substr(time(), 0, 8)
            ])),
            'Status' => VersionCheck::STATE_VERSION_CHECK
        ];

        $this->assertTrue($this->resolver->resolve($data));
    }

    /**
     * @test
     */
    public function testVersionCheckInvalidChecksum()
    {
        $data =[
            'Checksum' => sha1(implode('|', [
                $this->secretCode,
                $this->merchantId,
                VersionCheck::STATE_VERSION_CHECK,
                substr(mktime(0, 0, 0, 7, 1, 2000), 0, 8)
            ])),
            'Status' => VersionCheck::STATE_VERSION_CHECK
        ];

        $this->assertFalse($this->resolver->resolve($data));
    }

    /**
     * @test
     */
    public function testOrder()
    {
        $data = [
            'Merchant' => $this->merchantId,

            'PaymentMethod' => 'PaymentMethod',
            'OrderID' => 'OrderID',
            'Status' => Order::STATE_OPEN,
            'PaymentID' => (string)time(),
            'StatusCode' => 'StatusCode',
            'TransactionID' => 'TransactionID',
            'Reference' => 'Reference',
            'Amount' => '10000',
            'Currency' => 'EUR',
            'Duration' => '10',
            'ConsumerName' => 'ConsumerName',
            'ConsumerAccountNumber' => 'ConsumerAccountNumber',
            'ConsumerAddress' => 'ConsumerAddress',
            'ConsumerHouseNumber' => 'CHNumber',
            'ConsumerCity' => 'ConsumerCity',
            'ConsumerCountry' => 'ConsumerCountry',
            'ConsumerEmail' => 'ConsumerEmail',
            'ConsumerPhoneNumber' => 'ConsumerPhoneNumber',
            'ConsumerIPAddress' => '194.30.175.15'
        ];
        $data['Checksum'] = sha1(implode('|',[
            $this->secretCode,
            $data['Merchant'],
            $data['Status'],
            $data['StatusCode'],
            $data['OrderID'],
            $data['PaymentID'],
            $data['Reference'],
            $data['TransactionID'],
            $data['Amount'],
            $data['Currency'],
            $data['Duration'],
            $data['ConsumerIPAddress']
        ]));

        $order = $this->resolver->resolve($data);

        $this->assertInstanceOf(Order::class, $order);
        $this->assertEquals($order->getPaymentMethod(), $data['PaymentMethod']);
        $this->assertEquals($order->getOrderID(), $data['OrderID']);
        $this->assertEquals($order->getStatus(), $data['Status']);
        $this->assertEquals($order->getPaymentID(), $data['PaymentID']);
        $this->assertEquals($order->getStatusCode(), $data['StatusCode']);
        $this->assertEquals($order->getTransactionID(), $data['TransactionID']);
        $this->assertEquals($order->getReference(), $data['Reference']);
        $this->assertEquals($order->getAmount(), $data['Amount']);
        $this->assertEquals($order->getCurrency(), $data['Currency']);
        $this->assertEquals($order->getDuration(), $data['Duration']);
        $this->assertEquals($order->getConsumerName(), $data['ConsumerName']);
        $this->assertEquals($order->getConsumerAccountNumber(), $data['ConsumerAccountNumber']);
        $this->assertEquals($order->getConsumerAddress(), $data['ConsumerAddress']);
        $this->assertEquals($order->getConsumerHouseNumber(), $data['ConsumerHouseNumber']);
        $this->assertEquals($order->getConsumerCity(), $data['ConsumerCity']);
        $this->assertEquals($order->getConsumerCountry(), $data['ConsumerCountry']);
        $this->assertEquals($order->getConsumerEmail(), $data['ConsumerEmail']);
        $this->assertEquals($order->getConsumerPhoneNumber(), $data['ConsumerPhoneNumber']);
        $this->assertEquals($order->getConsumerIPAddress(), $data['ConsumerIPAddress']);
    }

    /**
     * @test
     */
    public function testOrderMinimal()
    {
        $data = [
            'Merchant' => $this->merchantId,

            'Status' => Order::STATE_ERROR,
            'OrderID' => 'OrderID',
            'PaymentID' => (string)time(),
            'PaymentMethod' => 'TESTMETHOD'
        ];
        $data['Checksum'] = sha1(implode('|',[
            $this->secretCode,
            $data['Merchant'],
            $data['Status'],
            null,
            $data['OrderID'],
            $data['PaymentID'],
            null,
            null,
            null,
            null,
            null,
            null,
        ]));

        $order = $this->resolver->resolve($data);

        $this->assertInstanceOf(Order::class, $order);
        $this->assertEquals($order->getPaymentMethod(), $data['PaymentMethod']);
        $this->assertEquals($order->getOrderID(), $data['OrderID']);
        $this->assertEquals($order->getStatus(), $data['Status']);
        $this->assertEquals($order->getPaymentID(), $data['PaymentID']);
        $this->assertNull($order->getStatusCode());
        $this->assertNull($order->getTransactionID());
        $this->assertNull($order->getReference());
        $this->assertNull($order->getAmount());
        $this->assertNull($order->getCurrency());
        $this->assertNull($order->getDuration());
        $this->assertNull($order->getConsumerName());
        $this->assertNull($order->getConsumerAccountNumber());
        $this->assertNull($order->getConsumerAddress());
        $this->assertNull($order->getConsumerHouseNumber());
        $this->assertNull($order->getConsumerCity());
        $this->assertNull($order->getConsumerCountry());
        $this->assertNull($order->getConsumerEmail());
        $this->assertNull($order->getConsumerPhoneNumber());
        $this->assertNull($order->getConsumerIPAddress());
    }

    /**
     * @test
     */
    public function testOrderInvalidMerchant()
    {
        $this->setExpectedException('InvalidArgumentException', 'Invalid MerchantId!');

        $this->resolver->resolve([
            'Merchant' => 'WRONG_SO_WRONG!!',

            'Checksum' => sha1(time()),
            'Status' => Order::STATE_OPEN,
            'OrderID' => (string)time(),
            'PaymentID' => (string)time(),
            'PaymentMethod' => 'TESTMETHOD'
        ]);
    }

    /**
     * @test
     */
    public function testOrderInvalidChecksum()
    {
        $this->setExpectedException('InvalidArgumentException', 'Invalid Checksum');
        $this->resolver->resolve([
            'Checksum' => sha1(time()),

            'Status' => Order::STATE_OPEN,
            'Merchant' => $this->merchantId,
            'OrderID' => (string)time(),
            'PaymentID' => (string)time(),
            'PaymentMethod' => 'TESTMETHOD'
        ]);
    }

    public function provideMissingData()
    {
        return [
            [ [ 'Status' => VersionCheck::STATE_VERSION_CHECK ], 'Checksum' ],
            [ [ 'Checksum' => sha1(time()) ], 'Status' ],

            [
                [
                    'Checksum' => sha1(time()),
                    'Status' => Order::STATE_OPEN,
                    'OrderID' => time(),
                    'PaymentID' => time(),
                    'PaymentMethod' => 'TESTMODE',
                ],
                'Merchant'
            ],
            [
                [
                    'Checksum' => sha1(time()),
                    'Status' => Order::STATE_OPEN,
                    'Merchant' => time(),
                    'PaymentID' => time(),
                    'PaymentMethod' => 'TESTMODE',
                ],
                'OrderID'
            ],
            [
                [
                    'Checksum' => sha1(time()),
                    'Status' => Order::STATE_OPEN,
                    'Merchant' => time(),
                    'OrderID' => time(),
                    'PaymentMethod' => 'TESTMODE',
                ],
                'PaymentID'
            ],
            [
                [
                    'Checksum' => sha1(time()),
                    'Status' => Order::STATE_OPEN,
                    'Merchant' => time(),
                    'OrderID' => time(),
                    'PaymentID' => time(),
                ],
                'PaymentMethod'
            ]
        ];
    }
}
