<?php

namespace App\View\Components\Landing;

use App\Models\Post;
use Illuminate\View\Component;

class LatestNews extends Component
{
    public $latestPosts;

    public function __construct()
    {
        $this->latestPosts = Post::with(['category', 'author'])
            ->published()
            ->latest('published_at')
            ->take(4)
            ->get();
    }

    public function render()
    {
        return view('components.landing.latest-news', [
            'latestPosts' => $this->latestPosts
        ]);
    }
}
