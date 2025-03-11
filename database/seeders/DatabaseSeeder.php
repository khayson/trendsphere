<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use App\Models\Comment;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create categories
        $categories = Category::factory(10)->create();

        // Create tags
        $tags = Tag::factory(20)->create();

        // Create users
        $users = User::factory(50)->create();

        // Create posts with relationships
        Post::factory(100)
            ->sequence(fn ($sequence) => [
                'category_id' => $categories->random(),
                'user_id' => $users->random(),
            ])
            ->create()
            ->each(function ($post) use ($tags, $users) {
                // Attach random tags
                $post->tags()->attach($tags->random(rand(2, 5)));

                // Create comments
                Comment::factory(rand(0, 10))
                    ->sequence(fn ($sequence) => ['user_id' => $users->random()])
                    ->create(['post_id' => $post->id])
                    ->each(function ($comment) use ($users) {
                        // Add random replies
                        Comment::factory(rand(0, 3))
                            ->reply()
                            ->sequence(fn ($sequence) => [
                                'user_id' => $users->random(),
                                'post_id' => $comment->post_id,
                                'parent_id' => $comment->id,
                            ])
                            ->create();
                    });
            });
    }
}
