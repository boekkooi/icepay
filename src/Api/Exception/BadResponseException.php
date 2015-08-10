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
