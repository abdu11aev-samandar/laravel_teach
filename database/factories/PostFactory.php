<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => User::factory()->hasPosts(3),
            'category_id' => rand(1, 5),
            'title' => fake()->sentence(3),
            'short_content' => fake()->sentence(15),
            'content' => fake()->paragraph(15),
        ];
    }
}
