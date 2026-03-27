<?php

namespace Database\Factories;

use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "car_make" => $this->faker->randomElement(['Toyota', 'Ford', 'Chevrolet', 'Honda', 'Nissan', 'BMW', 'Audi']),
            "car_model" => ucfirst($this->faker->word()),
            "car_year" => $this->faker->numberBetween(2000, (int) date("Y")),
            "car_price" => $this->faker->randomFloat(2, 1500, 80000),
            "car_status" => $this->faker->boolean(80)
        ];
    }
}
