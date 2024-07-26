<?php

namespace App\Http\Controllers;

use App\Http\Requests\ForecastRequest;
use App\Params\Forecast;
use App\Services\Interfaces\WeatherServiceInterface;
use Illuminate\Support\Arr;
use Inertia\Inertia;

class Weather extends \Illuminate\Routing\Controller
{
    public function __invoke(
        ForecastRequest         $request,
        WeatherServiceInterface $weatherService,
    ) {
        $params = $request->getParams() ?? $this->getDefaultParams();

        return Inertia::render('Weather/Forecast', [
            'forecast' => $weatherService->forecast($params),
        ]);
    }

    private function getDefaultParams()
    {
        $defaultCoordinates = Arr::first(config('weather.forecast.coordinates'));

        return new Forecast(
            latitude: Arr::get($defaultCoordinates, 'latitude'),
            longitude: Arr::get($defaultCoordinates, 'longitude')
        );
    }
}
