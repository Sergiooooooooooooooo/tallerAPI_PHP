<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class CarRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "car_make" => "required|string|max:255",
            "car_model" => "required|string|max:255",
            "car_year" => "required|integer|between:1886," . date("Y"),
            "car_price" => "required|numeric|min:0",
            "car_status" => "required|boolean|in:0,1"
        ];
    }
}
