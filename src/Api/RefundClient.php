<?php

namespace Icepay\Api;

use SoapClient;
use Icepay\Api\IcePay\RequestRefund;
use Icepay\Api\IcePay\RequestRefundResponse;
use Icepay\Api\IcePay\CancelRefund;
use Icepay\Api\IcePay\CancelRefundResponse;
use Icepay\Api\IcePay\GetPaymentRefunds;
use Icepay\Api\IcePay\GetPaymentRefundsResponse;

class RefundClient extends SoapClient
{

    private static $classMap = array(
        'RequestRefund' => RequestRefund::class,
        'RequestRefundResponse' => RequestRefundResponse::class,
        'CancelRefund' => CancelRefund::class,
        'CancelRefundResponse' => CancelRefundResponse::class,
        'GetPaymentRefunds' => GetPaymentRefunds::class,
        'GetPaymentRefundsResponse' => GetPaymentRefundsResponse::class,
        'http://schemas.datacontract.org/2004/07/APIService#RequestRefundResponse' => \Icepay\Api\DataContract\RequestRefundResponseType::class,
        'http://schemas.datacontract.org/2004/07/APIService#CancelRefundResponse' => \Icepay\Api\DataContract\CancelRefundResponseType::class,
        'http://schemas.datacontract.org/2004/07/APIService#GetPaymentRefundsResponse' => \Icepay\Api\DataContract\GetPaymentRefundsResponseType::class,
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
     * @return RequestRefundResponse
     */
    public function RequestRefund(RequestRefund $parameters)
    {
        return $this->__soapCall('RequestRefund', array($parameters));
    }

    /**
     * @param CancelRefund $parameters
     * @return CancelRefundResponse
     */
    public function CancelRefund(CancelRefund $parameters)
    {
        return $this->__soapCall('CancelRefund', array($parameters));
    }

    /**
     * @param GetPaymentRefunds $parameters
     * @return GetPaymentRefundsResponse
     */
    public function GetPaymentRefunds(GetPaymentRefunds $parameters)
    {
        return $this->__soapCall('GetPaymentRefunds', array($parameters));
    }


}

