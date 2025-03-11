<?php

namespace App\View\Components\Landing;

use App\Models\Post;
use Illuminate\View\Component;

class VideoNews extends Component
{
    public $videoPosts;

    public function __construct()
    {
        $this->videoPosts = Post::with(['category', 'author'])
            ->where('is_video', true)
            ->published()
            ->latest('published_at')
            ->take(4)
            ->get();
    }

    public function render()
    {
        return view('components.landing.video-news', [
            'videoPosts' => $this->videoPosts
        ]);
    }
}
