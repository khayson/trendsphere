<?php

namespace App\View\Components\Landing;

use App\Models\Post;
use Illuminate\View\Component;

class TrendingNews extends Component
{
    public $trendingPosts;

    public function __construct()
    {
        $this->trendingPosts = Post::with(['category', 'author'])
            ->trending()
            ->published()
            ->latest('published_at')
            ->take(3)
            ->get();
    }

    public function render()
    {
        return view('components.landing.trending-news', [
            'trendingPosts' => $this->trendingPosts
        ]);
    }
}
