<?php

namespace Icepay\Api;

use Icepay\Api\DataContract\CancelRefundResponseType;
use Icepay\Api\DataContract\GetPaymentRefundsResponseType;
use Icepay\Api\DataContract\RequestRefundResponseType;
use Icepay\Api\IcePay\RequestRefund;
use Icepay\Api\IcePay\CancelRefund;
use Icepay\Api\IcePay\GetPaymentRefunds;

class RefundClient extends SoapClient
{

    private static $classMap = array(
        'RequestRefund' => RequestRefund::class,
        'CancelRefund' => CancelRefund::class,
        'GetPaymentRefunds' => GetPaymentRefunds::class,
        'RequestRefundResponse' => RequestRefundResponseType::class,
        'CancelRefundResponse' => CancelRefundResponseType::class,
        'GetPaymentRefundsResponse' => GetPaymentRefundsResponseType::class,
        'Refund' => \Icepay\Api\DataContract\SharedResponse\RefundType::class,
    );

    public function __construct(array $options = array(), $wsdl = 'https://connect.icepay.com/webservice/refund.svc?wsdl')
    {
        if (empty($options['classmap'])) {
            $options['classmap'] = self::$classMap;
        } else {
            foreach (self::$classMap as $soapType => $phpType) {
                if (!isset($options['classmap'][$soapType])) {
                    $options['classmap'][$soapType] = $phpType;
                }
            }
        }
        parent::__construct($wsdl, $options);
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
