<?php
namespace Icepay\Api\Http;

use Icepay\Api\Assert;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Uri;
use Icepay\Api\Exception\BadResponseException;
use Icepay\Api\Soap\DataContract\CheckoutRequestType;

/**
 * @author Warnar Boekkooi <warnar@boekkooi.net>
 */
class IcePayClient
{
    const API_VERSION = 2;

    /**
     * @var Client
     */
    private $httpClient;

    /**
     * @var string
     */
    private $secretCode;

    public function __construct($secretCode, Client $httpClient = null)
    {
        Assert::that($secretCode, null, 'secretCode')->notEmpty()->string();

        $this->secretCode = $secretCode;
    }

    /**
     * @return Client
     */
    public function getHttpClient()
    {
        if ($this->httpClient === null) {
            $this->httpClient = new Client([
                'base_uri' => 'https://pay.icepay.eu/'
            ]);
        }
        return $this->httpClient;
    }

    /**
     * @param Client $httpClient
     * @return $this
     */
    public function setHttpClient(Client $httpClient = null)
    {
        $this->httpClient = $httpClient;
        return $this;
    }

    /**
     * @param CheckoutRequestType $request
     * @return string A uri
     * @throws BadResponseException
     */
    public function Checkout(CheckoutRequestType $request)
    {
        // Prepare data
        $postData = [
            'ic_version' => self::API_VERSION,

            'ic_country' => $request->getCountry(),
            'ic_language' => $request->getLanguage(),
            'ic_currency' => $request->getCurrency(),
            'ic_amount' => $request->getAmount(),
            'ic_orderid' => $request->getOrderID(),
            'ic_reference' => $request->getReference(),
            'ic_description' => $request->getDescription(),
            'ic_urlcompleted' => $request->getURLCompleted(),
            'ic_urlerror' => $request->getURLError(),
            'ic_merchantid' => $request->getMerchantID(),

            'chk' => sha1(implode('|', [
                $request->getMerchantID(),
                $this->secretCode,
                $request->getAmount(),
                $request->getOrderID(),
                $request->getReference(),
                $request->getCurrency(),
                $request->getCountry(),
                $request->getURLCompleted(),
                $request->getURLError()
            ]))
        ];

        // There is no payment method specified to just generate the basic uri.
        if (empty($request->getPaymentMethod()) || empty($request->getIssuer())) {
            $uri = (new Uri($this->getHttpClient()->getConfig('base_uri')))
                ->withPath('/basic/')
                ->withQuery(http_build_query($postData, null, '&', PHP_QUERY_RFC3986));

            return (string)$uri;
        }

        // Prepare data for request
        $postData['ic_paymentmethod'] = $request->getPaymentMethod();
        $postData['ic_issuer'] = $request->getIssuer();

        $queryString = [
            'type' => $request->getPaymentMethod(),
            'checkout' => 'yes',
            'ic_redirect' => 'no',
        ];

        // Request the payment uri
        $response = $this->getHttpClient()->post('/basic/', [
            'form_params' => $postData,
            'query' => $queryString
        ]);

        // Validate response
        if ($response->getStatusCode() !== 200) {
            throw BadResponseException::forFailedRequest($response);
        }

        $uri = $response->getBody()->getContents();
        $uriParts = parse_url($uri);
        if ($uriParts === false || !isset($uriParts['scheme']) || !isset($uriParts['host']) ) {
            throw BadResponseException::forUnexpectedContent($response, 'valid uri');
        }

        return $uri;
    }
}
