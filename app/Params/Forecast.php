<?php

namespace App\Params;

use Illuminate\Http\Request;

class Forecast
{
    public function __construct(public ?string $latitude = '', public ?string $longitude = '')
    {
    }

    public static function fromRequest(Request $request): static
    {
        return new static(latitude: $request->latitude, longitude: $request->longitude);
    }
}
