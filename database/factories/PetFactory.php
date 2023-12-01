<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pet>
 */
class PetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'breed_id' => $this->faker->numberBetween(1, 37),
            'sex' => $this->faker->randomElement(['Male', 'Female']),
            'weight' => $this->faker->randomElement(['5-10 lbs', '10-20 lbs', '20-50 lbs', 'More than 50 lbs']),
            'age' => $this->faker->randomElement(['Less than 6 months', '6 months to 5 years', '5 to 10 years', 'More than 10 years']),
            'about'=> Str::random(255),
        ];
    }
}
