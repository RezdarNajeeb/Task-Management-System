<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'title' => fake()->jobTitle(),
            'description' => fake()->sentence(),
            'due_date' => fake()->date,
            'priority' => fake()->randomElement(['Low', 'Medium', 'High']),
            'status' => fake()->randomElement(['To Do', 'In Progress', 'Complete']),
        ];
    }
}
