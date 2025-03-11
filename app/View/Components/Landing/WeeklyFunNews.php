<?php

namespace App\View\Components\Landing;

use App\Models\Post;
use Illuminate\View\Component;
use Carbon\Carbon;

class WeeklyFunNews extends Component
{
    public $funNews;

    public function __construct()
    {
        $this->funNews = Post::with(['category', 'author'])
            ->whereHas('category', function($query) {
                $query->where('name', 'Fun News');
            })
            ->published()
            ->where('published_at', '>=', Carbon::now()->subWeek())
            ->latest('published_at')
            ->take(4)
            ->get();
    }

    public function render()
    {
        return view('components.landing.weekly-fun-news', [
            'funNews' => $this->funNews
        ]);
    }
}
