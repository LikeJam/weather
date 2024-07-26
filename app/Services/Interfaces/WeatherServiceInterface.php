<?php

namespace App\Services\Interfaces;

use App\Params\Forecast;

interface WeatherServiceInterface
{
    public function forecast(Forecast $params);
}
