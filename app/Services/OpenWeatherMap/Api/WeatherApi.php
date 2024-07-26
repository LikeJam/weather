<?php

namespace App\Services\OpenWeatherMap\Api;

use Illuminate\Support\Arr;
use stdClass;

class WeatherApi extends BaseApi
{
    public function getForCoordinates(string $latitude, string $longitude): stdClass
    {
        $contents = $this->client->get($this->getUrl([
            'lat' => $latitude, 'lon' => $longitude, 'appid' => $this->apiKey, 'units' => 'metric'
        ]))
            ->getBody()
            ->getContents();

        return json_decode($contents);
    }

    public function getUrl($params = []): string
    {
        return config('weather.openweathermap.forecast') . '?' . Arr::query($params);
    }
}
