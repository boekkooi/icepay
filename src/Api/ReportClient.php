<?php

namespace Icepay\Api;

use SoapClient;
use Icepay\Api\IcePay\CreateSession;
use Icepay\Api\IcePay\CreateSessionResponse;
use Icepay\Api\IcePay\KillSession;
use Icepay\Api\IcePay\KillSessionResponse;
use Icepay\Api\IcePay\MonthlyTurnoverTotals;
use Icepay\Api\IcePay\MonthlyTurnoverTotalsResponse;
use Icepay\Api\IcePay\GetMerchants;
use Icepay\Api\IcePay\GetMerchantsResponse;
use Icepay\Api\IcePay\SearchPayments;
use Icepay\Api\IcePay\SearchPaymentsResponse;
use Icepay\Api\IcePay\GetPaymentMethods;
use Icepay\Api\IcePay\GetPaymentMethodsResponse;

class ReportClient extends SoapClient
{

    private static $classMap = array(
        'CreateSession' => CreateSession::class,
        'CreateSessionResponse' => CreateSessionResponse::class,
        'KillSession' => KillSession::class,
        'KillSessionResponse' => KillSessionResponse::class,
        'MonthlyTurnoverTotals' => MonthlyTurnoverTotals::class,
        'MonthlyTurnoverTotalsResponse' => MonthlyTurnoverTotalsResponse::class,
        'GetMerchants' => GetMerchants::class,
        'GetMerchantsResponse' => GetMerchantsResponse::class,
        'SearchPayments' => SearchPayments::class,
        'SearchPaymentsResponse' => SearchPaymentsResponse::class,
        'GetPaymentMethods' => GetPaymentMethods::class,
        'GetPaymentMethodsResponse' => GetPaymentMethodsResponse::class,
        'http://schemas.datacontract.org/2004/07/APIService#CreateSessionResponse' => \Icepay\Api\DataContract\CreateSessionResponseType::class,
        'http://schemas.datacontract.org/2004/07/APIService#KillSessionResponse' => \Icepay\Api\DataContract\KillSessionResponseType::class,
        'http://schemas.datacontract.org/2004/07/APIService#MonthlyTurnoverTotalsResponse' => \Icepay\Api\DataContract\MonthlyTurnoverTotalsResponseType::class,
        'http://schemas.datacontract.org/2004/07/APIService#GetMerchantsResponse' => \Icepay\Api\DataContract\GetMerchantsResponseType::class,
        'http://schemas.datacontract.org/2004/07/APIService#SearchPaymentsResponse' => \Icepay\Api\DataContract\SearchPaymentsResponseType::class,
        'http://schemas.datacontract.org/2004/07/APIService#GetPaymentMethodsResponse' => \Icepay\Api\DataContract\GetPaymentMethodsResponseType::class,
        'DayStatistics' => \Icepay\Api\DataContract\SharedResponse\DayStatisticsType::class,
        'Merchant' => \Icepay\Api\DataContract\SharedResponse\MerchantType::class,
        'Payment' => \Icepay\Api\DataContract\SharedResponse\PaymentType::class,
        'PaymentMethod' => \Icepay\Api\DataContract\SharedResponse\PaymentMethodType::class,
    );

    public function __construct(array $options = array(), $wsdl = 'https://connect.icepay.com/webservice/report.svc?wsdl')
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
     * @param CreateSession $parameters
     * @return CreateSessionResponse
     */
    public function CreateSession(CreateSession $parameters)
    {
        return $this->__soapCall('CreateSession', array($parameters));
    }

    /**
     * @param KillSession $parameters
     * @return KillSessionResponse
     */
    public function KillSession(KillSession $parameters)
    {
        return $this->__soapCall('KillSession', array($parameters));
    }

    /**
     * @param MonthlyTurnoverTotals $parameters
     * @return MonthlyTurnoverTotalsResponse
     */
    public function MonthlyTurnoverTotals(MonthlyTurnoverTotals $parameters)
    {
        return $this->__soapCall('MonthlyTurnoverTotals', array($parameters));
    }

    /**
     * @param GetMerchants $parameters
     * @return GetMerchantsResponse
     */
    public function GetMerchants(GetMerchants $parameters)
    {
        return $this->__soapCall('GetMerchants', array($parameters));
    }

    /**
     * @param SearchPayments $parameters
     * @return SearchPaymentsResponse
     */
    public function SearchPayments(SearchPayments $parameters)
    {
        return $this->__soapCall('SearchPayments', array($parameters));
    }

    /**
     * @param GetPaymentMethods $parameters
     * @return GetPaymentMethodsResponse
     */
    public function GetPaymentMethods(GetPaymentMethods $parameters)
    {
        return $this->__soapCall('GetPaymentMethods', array($parameters));
    }


}

