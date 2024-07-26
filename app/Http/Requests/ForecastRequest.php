<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Params\Forecast;

class ForecastRequest extends FormRequest
{
    protected string $params = Forecast::class;

    public function rules(): array
    {
        return [
            'latitude'  => 'numeric',
            'longitude' => 'numeric',
            'city'      => 'string',
            'country'   => 'string',
            'zip'       => 'string',
        ];
    }

    public function getParams(): Forecast|null
    {
        return $this->latitude && $this->longitude ? $this->params::fromRequest($this) : null;
    }
}
