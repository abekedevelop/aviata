<?php

namespace App\Helpers;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;

class HttpHelper
{
    private $guzzle;
    private $defaultHeaders;
    private static $instance;

    public static function getInstance(): HttpHelper
    {
        static::$instance = static::$instance ?? new static();

        return static::$instance;
    }

    private function __construct()
    {
        $this->guzzle = new Client();
        $this->defaultHeaders = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
        ];
    }

    public function get($endpoint, array $headers = [])
    {
        $headers = array_merge($this->defaultHeaders, $headers);

        try {
            $response = $this->guzzle->get($this->cleanEndpoint($endpoint),
                [
                    'headers' => $headers,
                    'timeout' => 120
                ]
            );

            return json_decode($response->getBody(), true);
        } catch (\Exception $exception) {
            Log::info($exception);
        }

        return false;
    }

    private function cleanEndpoint($endpoint)
    {
        $endpoint = ltrim($endpoint, "/");
        $endpoint = rtrim($endpoint, "/");

        return $endpoint;
    }
}
