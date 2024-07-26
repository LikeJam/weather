<?php

namespace App\Services\OpenWeatherMap;

use App\Services\OpenWeatherMap\Api\GeocodingApi;

readonly class GeocodingService
{
    public function __construct(GeocodingApi $geocodingApi)
    {
    }
}
