<?php

namespace App\Services\OpenWeatherMap\Mappers;

use App\Dto\Forecast;
use App\Dto\Weather;
use App\Dto\WeatherInfo;
use Carbon\Carbon;
use Illuminate\Support\Arr;
use Spatie\DataTransferObject\Exceptions\UnknownProperties;
use stdClass;

class WeatherForecastMapper
{
    /**
     * @throws UnknownProperties
     */
    public static function map(stdClass $forecast): Forecast
    {
        return new Forecast(
            weather: new Weather(
                temperature: $forecast->main->temp,
                feelsLike: $forecast->main->feels_like,
                main: Arr::first($forecast->weather)?->main,
                description: Arr::first($forecast->weather)?->description,
                icon: self::getWeatherIcon(Arr::first($forecast->weather)?->icon)
            ),
            weatherInfo: new WeatherInfo(
                humidity: $forecast->main->humidity,
                wind: $forecast->wind->speed,
                pressure: $forecast->main->pressure,
                clouds: $forecast->clouds->all
            ),
            sunrise: Carbon::createFromTimestamp($forecast->sys->sunrise)->format('H:i'),
            sunset: Carbon::createFromTimestamp($forecast->sys->sunset)->format('H:i'),
            timezone: '',
        );
    }

    protected static function getWeatherIcon(string $key): string
    {
        $iconsPath = config('weather.openweathermap.icons_path');
        $icons     = config('weather.openweathermap.icons');

        return $iconsPath . DIRECTORY_SEPARATOR . Arr::get($icons, $key);
    }
}
