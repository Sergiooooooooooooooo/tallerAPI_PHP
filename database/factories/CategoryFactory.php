<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->unique()->randomElement(['SUV', 'Sedán', 'Deportivo', 'Camioneta', 'Híbrido', 'Eléctrico', 'Compacto']),
            'description' => fake()->sentence(),
            'popularity_score' => fake()->numberBetween(1, 100),
            'estado' => fake()->boolean(80),
        ];
    }
}
