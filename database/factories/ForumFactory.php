<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Forum>
 */
class ForumFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'created_at' => now(),
            'updated_at' => now(),
            'title' => fake()->sentence(),
            'username' => fake()->name(),
            'pfp'=> fake()->imageUrl(640, 480, 'people'),
            'content' => fake()->paragraph(),
            'date_created' => fake()->date(),
            'mood' => fake()->sentence(),
            'tags' => fake()->sentence(),
            'attachments' => fake()->sentence(),
        ];
    }
}
