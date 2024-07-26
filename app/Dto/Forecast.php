<?php

namespace App\Dto;

use Spatie\DataTransferObject\DataTransferObject;

class Forecast extends DataTransferObject
{
    public string $sunrise;

    public string $sunset;

    public Weather $weather;

    public WeatherInfo $weatherInfo;

    public string $timezone;
}

