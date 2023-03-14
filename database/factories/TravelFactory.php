<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Travel>
 */
class TravelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = $this->faker->sentence(2);
        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'shortDescription' => $this->faker->sentence(),
            'description' => $this->faker->sentence(15),
            'price' => rand(1000, 6000),
            'duration' => rand(6, 14),
            'metaTitle' => '',
            'metaDescription' => '',
        ];
    }
}
