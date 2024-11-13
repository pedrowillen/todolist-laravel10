<?php

namespace Database\Factories;

use App\Models\Category;
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
        $user = User::all()->random();

        while($user->categories == []) {
            $user = User::all()->random();
        }

        return [
            'title' => fake()->text(20),
            'description' => fake()->text(60),
            'due_date' => fake()->dateTime(),
            'user_id' => $user->id,
            'category_id' => $user->categories->random(),
        ];
    }
}
