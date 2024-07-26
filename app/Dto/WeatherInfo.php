<?php

namespace App\Dto;

use Spatie\DataTransferObject\DataTransferObject;

class WeatherInfo extends DataTransferObject
{
    public float $humidity;

    public float $wind;

    public float $pressure;

    public string $clouds;
}
