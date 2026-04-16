<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
        $car = $this->route('car');
        $id_car = $car ? ($car->id_car ?? $car) : null;
        return [
            "car_make" => "required|string|max:255",
            "car_model" => "required|string|max:255",
            "car_year" => "required|integer|between:1886," . date("Y"),
            "car_price" => "required|numeric|min:0",
            "car_status" => "required|boolean|in:0,1",
            "category_id" => "required|exists:categories,id",
            "barcode" => [
                "required",
                "string",
                "max:255",
                Rule::unique('cars', 'barcode')->ignore($id_car, 'id_car')
            ],
        ];
    }
}
