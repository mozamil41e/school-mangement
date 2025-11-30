<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\School>
 */
class SchoolFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
       return [
            'name' => $this->faker->company . ' School',
            'address' => $this->faker->address,
            'contact' => $this->faker->phoneNumber,
            'settings' => json_encode([
                'year' => $this->faker->year,
                'language' => $this->faker->randomElement(['en', 'ar', 'fr']),
                'timezone' => $this->faker->timezone,
                'max_students' => 500
            ]),
        ];
    }
}
