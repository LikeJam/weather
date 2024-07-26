<?php

namespace App\Providers;

use App\Services\Interfaces\WeatherServiceInterface;
use App\Services\OpenWeatherMap\WeatherService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public array $bindings = [
        WeatherServiceInterface::class => WeatherService::class,
    ];


    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
