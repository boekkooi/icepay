<?php

namespace Icepay\Api\Soap;

use Icepay\Api\Soap\DataContract\CancelRefundResponseType;
use Icepay\Api\Soap\DataContract\GetPaymentRefundsResponseType;
use Icepay\Api\Soap\DataContract\RequestRefundResponseType;
use Icepay\Api\Soap\IcePay\RequestRefund;
use Icepay\Api\Soap\IcePay\CancelRefund;
use Icepay\Api\Soap\IcePay\GetPaymentRefunds;

class RefundClient extends SoapClient
{
    protected static $classMap = array(
        'RequestRefund' => RequestRefund::class,
        'CancelRefund' => CancelRefund::class,
        'GetPaymentRefunds' => GetPaymentRefunds::class,
        'RequestRefundResponse' => RequestRefundResponseType::class,
        'CancelRefundResponse' => CancelRefundResponseType::class,
        'GetPaymentRefundsResponse' => GetPaymentRefundsResponseType::class,
        'Refund' => \Icepay\Api\Soap\DataContract\SharedResponse\RefundType::class,
    );

    /**
     * @inheritdoc
     */
    public function __construct($secret, array $options = array(), $wsdl = 'https://connect.icepay.com/webservice/refund.svc?wsdl')
    {
        parent::__construct($secret, $wsdl, $options);
    }

    /**
     * @param RequestRefund $parameters
     * @return RequestRefundResponseType
     */
    public function RequestRefund(RequestRefund $parameters)
    {
        $response = $this->__soapCall('RequestRefund', array($parameters));

        return $this->checkResponse($response, 'RequestRefundResult');
    }

    /**
     * @param CancelRefund $parameters
     * @return CancelRefundResponseType
     */
    public function CancelRefund(CancelRefund $parameters)
    {
        $response = $this->__soapCall('CancelRefund', array($parameters));

        return $this->checkResponse($response, 'CancelRefundResult');
    }

    /**
     * @param GetPaymentRefunds $parameters
     * @return GetPaymentRefundsResponseType
     */
    public function GetPaymentRefunds(GetPaymentRefunds $parameters)
    {
        $response = $this->__soapCall('GetPaymentRefunds', array($parameters));

        return $this->checkResponse($response, 'GetPaymentRefundsResult');
    }
}

