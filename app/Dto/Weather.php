<?php

namespace App\Dto;

use Spatie\DataTransferObject\DataTransferObject;

class Weather extends DataTransferObject
{
    public string $feelsLike;
    public string $temperature;
    public string $main;
    public string $description;
    public string $icon;
}
