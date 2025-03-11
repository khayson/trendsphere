<?php

namespace App\View\Components\Landing;

use App\Models\Post;
use Illuminate\View\Component;

class Hero extends Component
{
    public $featuredPost;
    public $breakingNews;

    public function __construct()
    {
        // Get the latest featured post for hero section
        $this->featuredPost = Post::with(['category', 'author'])
            ->featured()
            ->published()
            ->latest('published_at')
            ->first();

        // Get latest 3 breaking news excluding the featured post
        $this->breakingNews = Post::with(['category', 'author'])
            ->breaking()
            ->published()
            ->when($this->featuredPost, function($query) {
                return $query->where('id', '!=', $this->featuredPost->id);
            })
            ->latest('published_at')
            ->take(3)
            ->get();
    }

    public function render()
    {
        return view('components.landing.hero', [
            'featuredPost' => $this->featuredPost,
            'breakingNews' => $this->breakingNews
        ]);
    }
}
