<?php

namespace App\View\Components\Landing;

use App\Models\Post;
use Illuminate\View\Component;
use Carbon\Carbon;

class WeeklyHighlights extends Component
{
    public $weeklyHighlights;

    public function __construct()
    {
        $this->weeklyHighlights = Post::with(['category', 'author'])
            ->published()
            ->where('published_at', '>=', Carbon::now()->subWeek())
            ->orderBy('views', 'desc')
            ->take(4)
            ->get();
    }

    public function render()
    {
        return view('components.landing.weekly-highlights', [
            'weeklyHighlights' => $this->weeklyHighlights
        ]);
    }
}
