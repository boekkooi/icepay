<?php
namespace Icepay\Api\Exception;

use Psr\Http\Message\ResponseInterface;

class BadResponseException extends \UnexpectedValueException implements Exception
{
    /**
     * @var mixed
     */
    private $responseObject;
    /**
     * @return mixed
     */
    public function getResponseObject()
    {
        return $this->responseObject;
    }

    public static function forMissingResponseProperty($response, $string)
    {
        $ex =  new self(sprintf(
            'Reponse should contain `%s` but none was found',
            $string
        ));
        $ex->responseObject = $response;

        return $ex;
    }


    public static function forInvalidChecksum($invalidObject)
    {
        $ex =  new self(
            'Invalid checksum received'
        );
        $ex->responseObject = $invalidObject;

        return $ex;
    }

    public static function forFailedRequest(ResponseInterface $response)
    {
        $ex = new self(
            sprintf('Expected status code %s but received %s', 200, $response->getStatusCode())
        );
        $ex->responseObject = $response;

        return $ex;
    }

    public static function forUnexpectedContent(ResponseInterface $response, $expected)
    {
        $response->getBody()->rewind();

        $ex = new self(sprintf(
            'Unexpected content in reponse. Expected a %s got %s',
            $expected,
            $response->getBody()->getContents()
        ));
        $ex->responseObject = $response;

        return $ex;
    }

}
