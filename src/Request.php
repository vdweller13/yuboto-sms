<?php


namespace Liagkos\SMS\Yuboto;


use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Psr\Http\Message\ResponseInterface;

class Request
{
    private static $base_uri = 'https://services.yuboto.com';
    private static $omni     = '/omni/v1/';

    public static function exec(string $apiKey, $command, $params = null, string $method = 'post') : array
    {
        $headers = [
            'content-type'  => 'application/json',
            'Accept'        => 'application/json',
            'Authorization' => 'Basic '. base64_encode($apiKey)
        ];

        if ($params !== null) {
            $body = is_array($params) ? json_encode($params) : $params;
        } else {
            $body = null;
        }

        $options = [
            'headers' => $headers,
            'body'    => $body
        ];

        $client = new Client([
            'base_uri' => self::$base_uri,
            'verify'   => false,
        ]);

        try {
            /** @var $response ResponseInterface */
            $response = $client->{strtolower($method)}(self::$omni . $command, $options);
        } catch (RequestException $e) {
            return [
                'success' => false,
                'type'    => 'comm',
                'msg'     => $e->getMessage(),
                'code'    => $e->getCode()
            ];
        }

        $response = json_decode($response->getBody());

        if ($response->ErrorCode !== 0) {
            return [
                'success' => false,
                'type'    => 'api',
                'msg'     => $response->ErrorMessage,
                'code'    => $response->ErrorCode
            ];
        }

        return [
            'success'   => true,
            'response'  => $response
        ];
    }
}