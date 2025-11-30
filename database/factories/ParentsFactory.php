<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\School;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\parents>
 */
class ParentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'school_id' =>  School::inRandomOrder()->value('id'),
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'phone' => $this->faker->phoneNumber(),
            'password_hash' => bcrypt('password'), // كلمة مرور افتراضية
            'meta' => null,
        ];
    }
}
