<?php

namespace App\Services\OpenWeatherMap;

use App\Dto\Forecast as ForecastDto;
use App\Params\Forecast;
use App\Services\Interfaces\WeatherServiceInterface;
use App\Services\OpenWeatherMap\Api\WeatherApi;
use App\Services\OpenWeatherMap\Mappers\WeatherForecastMapper;
use Spatie\DataTransferObject\Exceptions\UnknownProperties;

readonly class WeatherService implements WeatherServiceInterface
{
    public function __construct(private WeatherApi $weatherApi)
    {
    }

    /**
     * @throws UnknownProperties
     */
    public function forecast(Forecast $params): ForecastDto
    {
        return WeatherForecastMapper::map(
            $this->weatherApi->getForCoordinates(
                latitude: $params->latitude,
                longitude: $params->latitude
            )
        );
    }
}
