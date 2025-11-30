<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\School;
use App\Models\User;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Classes>
 */
class ClassesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'school_id' => School::inRandomOrder()->value('id'),
            'teacher_id' => User::whereHas('role', function ($query) {
                $query->where('name', 'teacher');
            })->inRandomOrder()->value('id'),
            'name' => fake()->word(),
            'description' => fake()->sentence(),
        ];
    }
}
