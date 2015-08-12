<?php

namespace Tests\Icepay\Api\Assert;

use Icepay\Api\Assert\Assertion;
use Icepay\Api\Assert\Exception\InvalidArgumentException;

class AssertionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function testIpValid()
    {
        Assertion::ip('127.0.0.1');
        Assertion::ip('0:0:0:0:0:0:0:1');
    }

    /**
     * @test
     * @dataProvider provideInvalidIpAddresses
     */
    public function testIpInvalid($value, $exceptionCode = Assertion::INVALID_IP)
    {
        $this->setExpectedException(InvalidArgumentException::class, '', $exceptionCode);

        Assertion::ip($value);
    }

    public function provideInvalidIpAddresses()
    {
        return [
            [ 123, Assertion::INVALID_STRING ],
            [ '127.0.0' ],
            [ 'x:0:0:0:0:0:0:1' ],
        ];
    }

    /**
     * @test
     * @dataProvider provideValidIpSubnetSets
     */
    public function testIpv4InSubnetMask($value, $subnetmask)
    {
        Assertion::ipv4InSubnetMask($value, $subnetmask);
    }

    public function provideValidIpSubnetSets()
    {
        return [
            [ '194.30.175.1', '194.30.175.0/24' ],
            [ '194.30.175.254', '194.30.175.0/24' ],

            [ '194.126.241.128', '194.126.241.128/26' ],
            [ '194.126.241.191', '194.126.241.128/26' ],

            [ '194.126.241.164', ['194.30.175.0/24', '194.126.241.128/26'] ],
            [ '194.30.175.66', ['194.30.175.0/24', '194.126.241.128/26'] ],
        ];
    }

    /**
     * @test
     * @dataProvider provideInvalidIpSubnetSets
     */
    public function testInvalidIpv4InSubnetMask($value, $subnetmask, $exceptionCode = Assertion::INVALID_IPV4_SUBNETMASK)
    {
        $this->setExpectedException(InvalidArgumentException::class, '', $exceptionCode);

        Assertion::ipv4InSubnetMask($value, $subnetmask);
    }

    public function provideInvalidIpSubnetSets()
    {
        return [
            [ null, '194.30.175.0/24', Assertion::INVALID_STRING ],
            [ '0:0:0:0:0:0:0:1', '194.30.175.0/24', Assertion::INVALID_IPV4 ],

            [ '194.30.176.1', '194.30.175.0/24' ],

            [ '194.126.241.127', '194.126.241.128/26' ],
            [ '194.126.241.192', '194.126.241.128/26' ],

            [ '127.0.0.1', ['194.30.175.0/24', '194.126.241.128/26'] ],
        ];
    }

}
