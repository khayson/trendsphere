<?php

namespace App\View\Components\Landing;

use App\Models\Post;
use Illuminate\View\Component;

class BreakingNews extends Component
{
    public $breakingPosts;

    public function __construct()
    {
        $this->breakingPosts = Post::with(['category', 'author'])
            ->breaking()
            ->published()
            ->latest('published_at')
            ->take(4)
            ->get();
    }

    public function render()
    {
        return view('components.landing.breaking-news', [
            'breakingPosts' => $this->breakingPosts
        ]);
    }
}
