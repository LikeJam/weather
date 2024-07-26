<?php

namespace App\Services\OpenWeatherMap\Api;

use GuzzleHttp\Client;

abstract class BaseApi
{
    public function __construct(
        protected Client $client,
        protected ?string $apiKey = null,
    ) {
        $this->apiKey  = $this->apiKey ?? config('weather.openweathermap.apiKey');
    }

    abstract public function getUrl($params = []): string;
}
