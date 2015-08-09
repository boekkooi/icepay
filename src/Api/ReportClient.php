<?php

namespace Icepay\Api;

use Icepay\Api\DataContract\CreateSessionResponseType;
use Icepay\Api\DataContract\GetMerchantsResponseType;
use Icepay\Api\DataContract\GetPaymentMethodsResponseType;
use Icepay\Api\DataContract\KillSessionResponseType;
use Icepay\Api\DataContract\MonthlyTurnoverTotalsResponseType;
use Icepay\Api\DataContract\SearchPaymentsResponseType;
use Icepay\Api\IcePay\CreateSession;
use Icepay\Api\IcePay\KillSession;
use Icepay\Api\IcePay\MonthlyTurnoverTotals;
use Icepay\Api\IcePay\GetMerchants;
use Icepay\Api\IcePay\SearchPayments;
use Icepay\Api\IcePay\GetPaymentMethods;

class ReportClient extends SoapClient
{

    private static $classMap = array(
        'CreateSession' => CreateSession::class,
        'KillSession' => KillSession::class,
        'MonthlyTurnoverTotals' => MonthlyTurnoverTotals::class,
        'GetMerchants' => GetMerchants::class,
        'SearchPayments' => SearchPayments::class,
        'GetPaymentMethods' => GetPaymentMethods::class,
        'CreateSessionResponse' => CreateSessionResponseType::class,
        'KillSessionResponse' => KillSessionResponseType::class,
        'MonthlyTurnoverTotalsResponse' => MonthlyTurnoverTotalsResponseType::class,
        'GetMerchantsResponse' => GetMerchantsResponseType::class,
        'SearchPaymentsResponse' => SearchPaymentsResponseType::class,
        'GetPaymentMethodsResponse' => GetPaymentMethodsResponseType::class,
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
     * @return CreateSessionResponseType
     */
    public function CreateSession(CreateSession $parameters)
    {
        $response = $this->__soapCall('CreateSession', array($parameters));

        return $this->checkResponse($response, 'CreateSessionResult');
    }

    /**
     * @param KillSession $parameters
     * @return KillSessionResponseType
     */
    public function KillSession(KillSession $parameters)
    {
        $response = $this->__soapCall('KillSession', array($parameters));

        return $this->checkResponse($response, 'KillSessionResult');
    }

    /**
     * @param MonthlyTurnoverTotals $parameters
     * @return MonthlyTurnoverTotalsResponseType
     */
    public function MonthlyTurnoverTotals(MonthlyTurnoverTotals $parameters)
    {
        $response = $this->__soapCall('MonthlyTurnoverTotals', array($parameters));

        return $this->checkResponse($response, 'MonthlyTurnoverTotalsResult');
    }

    /**
     * @param GetMerchants $parameters
     * @return GetMerchantsResponseType
     */
    public function GetMerchants(GetMerchants $parameters)
    {
        $response = $this->__soapCall('GetMerchants', array($parameters));

        return $this->checkResponse($response, 'GetMerchantsResult');
    }

    /**
     * @param SearchPayments $parameters
     * @return SearchPaymentsResponseType
     */
    public function SearchPayments(SearchPayments $parameters)
    {
        $response = $this->__soapCall('SearchPayments', array($parameters));

        return $this->checkResponse($response, 'SearchPaymentsResult');
    }

    /**
     * @param GetPaymentMethods $parameters
     * @return GetPaymentMethodsResponseType
     */
    public function GetPaymentMethods(GetPaymentMethods $parameters)
    {
        $response = $this->__soapCall('GetPaymentMethods', array($parameters));

        return $this->checkResponse($response, 'GetPaymentMethodsResult');
    }
}

