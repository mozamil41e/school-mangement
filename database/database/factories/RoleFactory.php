<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Role>
 */
class RoleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->randomElement(['Administrator', 'Teacher', 'Student', 'Parent', 'Staff']),
            'permissions' => [
                'manage_users' => $this->faker->boolean(),
                'manage_classes' => $this->faker->boolean(),
                'view_reports' => $this->faker->boolean(),
            ],
        ];
    }
}
