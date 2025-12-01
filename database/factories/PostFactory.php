<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;
use App\Models\Rating;
use App\Models\Post;

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
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(1),
            'slug' => fake()->slug(2),
            'body' => fake()->paragraph(3),
            'published_at' => fake()->dateTimeThisMonth(),
            'category_id' => Category::inRandomOrder()->first()->id,
        ];
    }
    public function configure()
    {
    return $this->afterMaking(function (Post $post) {
        Rating::factory()->make(['post_id' => $post->id]);
        })->afterCreating(function (Post $post) {
        Rating::factory()->create(['post_id' => $post->id]);
        });
    }
}
