<?php

namespace App\View\Components\Landing;

use App\Models\Post;
use Illuminate\View\Component;

class FeaturedNews extends Component
{
    public $featuredPosts;

    public function __construct()
    {
        $this->featuredPosts = Post::with(['category', 'author'])
            ->where('is_featured', true)
            ->published()
            ->latest('published_at')
            ->take(3)
            ->get();
    }

    public function render()
    {
        return view('components.landing.featured-news', [
            'featuredPosts' => $this->featuredPosts
        ]);
    }
}
