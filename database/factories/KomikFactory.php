<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Komik>
 */
class KomikFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => fake()->name(),
            'genre' => fake()->word(),
            'rating' => fake()->numberBetween(1, 10),
            'image_path' => fake()->numberBetween(1, 100).'.png',
            'pdf_path' => fake()->numberBetween(1, 100).'.pdf',
        ];
    }
}
