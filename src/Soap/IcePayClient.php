<?php
namespace Icepay\Api\Soap;

use Icepay\Api\Assert;
use Icepay\Api\Soap\DataContract\AutomaticCheckoutRequestType;
use Icepay\Api\Soap\DataContract\AutomaticCheckoutResponseType;
use Icepay\Api\Soap\DataContract\BaseTypeType;
use Icepay\Api\Soap\DataContract\CheckoutExtendedRequestType;
use Icepay\Api\Soap\DataContract\CheckoutRequestType;
use Icepay\Api\Soap\DataContract\CheckoutResponseType;
use Icepay\Api\Soap\DataContract\CheckoutWithPINRequestType;
use Icepay\Api\Soap\DataContract\GetMyPaymentMethodRequestType;
use Icepay\Api\Soap\DataContract\GetMyPaymentMethodResponseType;
use Icepay\Api\Soap\DataContract\GetPaymentRequestType;
use Icepay\Api\Soap\DataContract\GetPaymentResponseType;
use Icepay\Api\Soap\DataContract\GetPhoneStatusRequestType;
use Icepay\Api\Soap\DataContract\GetPhoneStatusResponseType;
use Icepay\Api\Soap\DataContract\GetPremiumRateNumbersResponseType;
use Icepay\Api\Soap\DataContract\PhoneCheckoutResponseType;
use Icepay\Api\Soap\DataContract\PhoneDirectCheckoutResponseType;
use Icepay\Api\Soap\DataContract\SMSCheckoutResponseType;
use Icepay\Api\Soap\DataContract\ValidatePhoneCodeRequestType;
use Icepay\Api\Soap\DataContract\ValidatePhoneCodeResponseType;
use Icepay\Api\Soap\DataContract\ValidateSmsCodeRequestType;
use Icepay\Api\Soap\DataContract\ValidateSmsCodeResponseType;
use Icepay\Api\Soap\DataContract\VaultCheckoutRequestType;

class IcePayClient extends SoapClient
{
    protected static $classMap = array(
        'CheckoutRequest' => CheckoutRequestType::class,
        'CheckoutResponse' => CheckoutResponseType::class,
        'VaultCheckoutRequest' => VaultCheckoutRequestType::class,
        'AutomaticCheckoutRequest' => AutomaticCheckoutRequestType::class,
        'AutomaticCheckoutResponse' => AutomaticCheckoutResponseType::class,
        'CheckoutExtendedRequest' => CheckoutExtendedRequestType::class,
        'SMSCheckoutResponse' => SMSCheckoutResponseType::class,
        'PhoneCheckoutResponse' => PhoneCheckoutResponseType::class,
        'CheckoutWithPINRequest' => CheckoutWithPINRequestType::class,
        'PhoneDirectCheckoutResponse' => PhoneDirectCheckoutResponseType::class,
        'ValidatePhoneCodeRequest' => ValidatePhoneCodeRequestType::class,
        'ValidatePhoneCodeResponse' => ValidatePhoneCodeResponseType::class,
        'GetPhoneStatusRequest' => GetPhoneStatusRequestType::class,
        'GetPhoneStatusResponse' => GetPhoneStatusResponseType::class,
        'ValidateSmsCodeRequest' => ValidateSmsCodeRequestType::class,
        'ValidateSmsCodeResponse' => ValidateSmsCodeResponseType::class,
        'GetPaymentRequest' => GetPaymentRequestType::class,
        'GetPaymentResponse' => GetPaymentResponseType::class,
        'BaseType' => BaseTypeType::class,
        'GetPremiumRateNumbersResponse' => GetPremiumRateNumbersResponseType::class,
        'GetMyPaymentMethodResponse' => GetMyPaymentMethodResponseType::class,
        'PremiumRateNumberInformation' => \Icepay\Api\Soap\DataContract\PremiumRateNumberInformationType::class,
        'PaymentMethod' => \Icepay\Api\Soap\DataContract\Responses\PaymentMethodType::class,
        'Issuer' => \Icepay\Api\Soap\DataContract\Responses\IssuerType::class,
        'Country' => \Icepay\Api\Soap\DataContract\Responses\CountryType::class,
    );

    /**
     * @inheritdoc
     */
    public function __construct($secret, array $options = array(), $wsdl = 'https://connect.icepay.com/webservice/icepay.svc?wsdl')
    {
        parent::__construct($secret, $wsdl, $options);
    }

    /**
     * @param CheckoutRequestType $parameters
     * @return CheckoutResponseType
     */
    public function Checkout(CheckoutRequestType $parameters)
    {
        Assert::lazy()
            ->that($parameters->getPaymentMethod(), 'PaymentMethod')->notEmpty()
            ->that($parameters->getIssuer(), 'Issuer')->notEmpty()
            ->verifyNow()
        ;

        $response = $this->soapCall('Checkout', $parameters);

        return $this->checkResponse($response, 'CheckoutResult');
    }

    /**
     * @param VaultCheckoutRequestType $parameters
     * @return CheckoutResponseType
     */
    public function VaultCheckout(VaultCheckoutRequestType $parameters)
    {
        $response = $this->soapCall('VaultCheckout', $parameters);

        return $this->checkResponse($response, 'VaultCheckoutResult');
    }

    /**
     * @param AutomaticCheckoutRequestType $parameters
     * @return AutomaticCheckoutResponseType
     */
    public function AutomaticCheckout(AutomaticCheckoutRequestType $parameters)
    {
        $response = $this->soapCall('AutomaticCheckout', $parameters);

        return $this->checkResponse($response, 'AutomaticCheckoutResult');
    }

    /**
     * @param CheckoutExtendedRequestType $parameters
     * @return CheckoutResponseType
     */
    public function CheckoutExtended(CheckoutExtendedRequestType $parameters)
    {
        $response = $this->soapCall('CheckoutExtended', $parameters);

        return $this->checkResponse($response, 'CheckoutExtendedResult');
    }

    /**
     * @param CheckoutRequestType $parameters
     * @return SMSCheckoutResponseType
     */
    public function SMSCheckout(CheckoutRequestType $parameters)
    {
        $response = $this->soapCall('SMSCheckout', $parameters);

        return $this->checkResponse($response, 'SMSCheckoutResult');
    }

    /**
     * @param CheckoutRequestType $parameters
     * @return PhoneCheckoutResponseType
     */
    public function PhoneCheckout(CheckoutRequestType $parameters)
    {
        $response = $this->soapCall('PhoneCheckout', $parameters);

        return $this->checkResponse($response, 'PhoneCheckoutResult');
    }

    /**
     * @param CheckoutWithPINRequestType $parameters
     * @return PhoneDirectCheckoutResponseType
     */
    public function PhoneDirectCheckout(CheckoutWithPINRequestType $parameters)
    {
        $response = $this->soapCall('PhoneDirectCheckout', $parameters);

        return $this->checkResponse($response, 'PhoneDirectCheckoutResult');
    }

    /**
     * @param ValidatePhoneCodeRequestType $parameters
     * @return ValidatePhoneCodeResponseType
     */
    public function ValidatePhoneCode(ValidatePhoneCodeRequestType $parameters)
    {
        $response = $this->soapCall('ValidatePhoneCode', $parameters);

        return $this->checkResponse($response, 'ValidatePhoneCodeResult');
    }

    /**
     * TODO find docs
     *
     * @param GetPhoneStatusRequestType $parameters
     * @return GetPhoneStatusResponseType
     */
    public function GetPhoneStatus(GetPhoneStatusRequestType $parameters)
    {
        $response = $this->soapCall('GetPhoneStatus', $parameters);

        return $this->checkResponse($response, 'GetPhoneStatusResult');
    }

    /**
     * @param ValidateSmsCodeRequestType $parameters
     * @return ValidateSmsCodeResponseType
     */
    public function ValidateSmsCode(ValidateSmsCodeRequestType $parameters)
    {
        $response = $this->soapCall('ValidateSmsCode', $parameters);

        return $this->checkResponse($response, 'ValidateSmsCodeResult');
    }

    /**
     * @param GetPaymentRequestType $parameters
     * @return GetPaymentResponseType
     */
    public function GetPayment(GetPaymentRequestType $parameters)
    {
        $response = $this->soapCall('GetPayment', $parameters);

        return $this->checkResponse($response, 'GetPaymentResult');
    }

    /**
     * @param BaseTypeType $parameters
     * @return GetPremiumRateNumbersResponseType
     */
    public function GetPremiumRateNumbers(BaseTypeType $parameters)
    {
        $response = $this->soapCall('GetPremiumRateNumbers', $parameters);

        return $this->checkResponse($response, 'GetPremiumRateNumbersResult');
    }

    /**
     * @param GetMyPaymentMethodRequestType $parameters
     * @return GetMyPaymentMethodResponseType
     */
    public function GetMyPaymentMethods(GetMyPaymentMethodRequestType $parameters)
    {
        $response = $this->soapCall('GetMyPaymentMethods', $parameters);

        return $this->checkResponse($response, 'GetMyPaymentMethodsResult');
    }

    private function soapCall($method, BaseTypeType $request)
    {
        Assert::lazy()
            ->that($request->getMerchantID(), 'MerchantID')->notEmpty()
            ->that($request->getTimestamp(), 'Timestamp')->notEmpty()
            ->that($request->getChecksum(), 'Checksum')->notEmpty()
            ->verifyNow()
        ;

        return $this->__soapCall($method, [
            (object)[ 'request' => $request ]
        ]);
    }
}

