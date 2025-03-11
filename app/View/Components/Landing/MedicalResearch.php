<?php

namespace App\View\Components\Landing;

use App\Models\Post;
use Illuminate\View\Component;

class MedicalResearch extends Component
{
    public $medicalPosts;

    public function __construct()
    {
        $this->medicalPosts = Post::with(['category', 'author'])
            ->whereHas('category', function($query) {
                $query->where('slug', 'medical-research');
            })
            ->published()
            ->latest('published_at')
            ->take(4)
            ->get();
    }

    public function render()
    {
        return view('components.landing.medical-research', [
            'medicalPosts' => $this->medicalPosts
        ]);
    }
}
