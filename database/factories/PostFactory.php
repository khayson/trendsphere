<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition(): array
    {
        $title = $this->faker->unique()->sentence();
        return [
            'category_id' => Category::factory(),
            'user_id' => User::factory(),
            'title' => $title,
            'slug' => Str::slug($title),
            'excerpt' => $this->faker->paragraph(),
            'content' => $this->faker->paragraphs(6, true),
            'featured_image' => 'https://placehold.co/800x600',
            'featured_image_alt' => $this->faker->words(3, true),
            'reading_time' => $this->faker->numberBetween(2, 15),
            'is_featured' => $this->faker->boolean(20),
            'is_breaking' => $this->faker->boolean(10),
            'is_trending' => $this->faker->boolean(30),
            'is_sponsored' => $this->faker->boolean(5),
            'is_video' => $this->faker->boolean(15),
            'video_duration' => $this->faker->boolean(15) ? $this->faker->time('i:s') : null,
            'views_count' => $this->faker->numberBetween(0, 10000),
            'published_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }

    public function unpublished(): static
    {
        return $this->state(fn (array $attributes) => [
            'published_at' => null,
        ]);
    }

    public function featured(): static
    {
        return $this->state(fn (array $attributes) => [
            'is_featured' => true,
        ]);
    }

    public function trending(): static
    {
        return $this->state(fn (array $attributes) => [
            'is_trending' => true,
        ]);
    }
}
