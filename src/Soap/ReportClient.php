<?php

namespace Icepay\Api\Soap;

use Icepay\Api\Soap\DataContract\CreateSessionResponseType;
use Icepay\Api\Soap\DataContract\GetMerchantsResponseType;
use Icepay\Api\Soap\DataContract\GetPaymentMethodsResponseType;
use Icepay\Api\Soap\DataContract\KillSessionResponseType;
use Icepay\Api\Soap\DataContract\MonthlyTurnoverTotalsResponseType;
use Icepay\Api\Soap\DataContract\SearchPaymentsResponseType;
use Icepay\Api\Soap\IcePay\CreateSession;
use Icepay\Api\Soap\IcePay\KillSession;
use Icepay\Api\Soap\IcePay\MonthlyTurnoverTotals;
use Icepay\Api\Soap\IcePay\GetMerchants;
use Icepay\Api\Soap\IcePay\SearchPayments;
use Icepay\Api\Soap\IcePay\GetPaymentMethods;

class ReportClient extends SoapClient
{
    protected static $classMap = array(
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
        'DayStatistics' => \Icepay\Api\Soap\DataContract\SharedResponse\DayStatisticsType::class,
        'Merchant' => \Icepay\Api\Soap\DataContract\SharedResponse\MerchantType::class,
        'Payment' => \Icepay\Api\Soap\DataContract\SharedResponse\PaymentType::class,
        'PaymentMethod' => \Icepay\Api\Soap\DataContract\SharedResponse\PaymentMethodType::class,
    );

    /**
     * @inheritdoc
     */
    public function __construct($secret, array $options = array(), $wsdl = 'https://connect.icepay.com/webservice/report.svc?wsdl')
    {
        parent::__construct($secret, $wsdl, $options);
    }

    /**
     * @param CreateSession $parameters
     * @return CreateSessionResponseType
     */
    public function createSession(CreateSession $parameters)
    {
        $response = $this->__soapCall('CreateSession', array($parameters));

        return $this->checkResponse($response, 'CreateSessionResult');
    }

    /**
     * @param KillSession $parameters
     * @return KillSessionResponseType
     */
    public function killSession(KillSession $parameters)
    {
        $response = $this->__soapCall('KillSession', array($parameters));

        return $this->checkResponse($response, 'KillSessionResult');
    }

    /**
     * @param MonthlyTurnoverTotals $parameters
     * @return MonthlyTurnoverTotalsResponseType
     */
    public function monthlyTurnoverTotals(MonthlyTurnoverTotals $parameters)
    {
        $response = $this->__soapCall('MonthlyTurnoverTotals', array($parameters));

        return $this->checkResponse($response, 'MonthlyTurnoverTotalsResult');
    }

    /**
     * @param GetMerchants $parameters
     * @return GetMerchantsResponseType
     */
    public function getMerchants(GetMerchants $parameters)
    {
        $response = $this->__soapCall('GetMerchants', array($parameters));

        return $this->checkResponse($response, 'GetMerchantsResult');
    }

    /**
     * @param SearchPayments $parameters
     * @return SearchPaymentsResponseType
     */
    public function searchPayments(SearchPayments $parameters)
    {
        $response = $this->__soapCall('SearchPayments', array($parameters));

        return $this->checkResponse($response, 'SearchPaymentsResult');
    }

    /**
     * @param GetPaymentMethods $parameters
     * @return GetPaymentMethodsResponseType
     */
    public function getPaymentMethods(GetPaymentMethods $parameters)
    {
        $response = $this->__soapCall('GetPaymentMethods', array($parameters));

        return $this->checkResponse($response, 'GetPaymentMethodsResult');
    }
}

