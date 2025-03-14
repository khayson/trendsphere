<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use App\View\Components\Landing\Hero;
use App\View\Components\Landing\TrendingNews;
use App\View\Components\Landing\LatestUpdates;
use App\View\Components\Landing\MedicalResearch;
use App\View\Components\Landing\LatestNews;
use App\View\Components\Landing\VideoNews;
use App\View\Components\Landing\FeaturedNews;
use App\View\Components\Landing\BreakingNews;
use App\View\Components\Landing\Newsletter;
use App\View\Components\Landing\WeeklyHighlights;
use App\View\Components\Landing\WeeklyFunNews;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Blade::component('landing.hero', Hero::class);
        Blade::component('landing.trending-news', TrendingNews::class);
        Blade::component('landing.latest-updates', LatestUpdates::class);
        Blade::component('landing.medical-research', MedicalResearch::class);
        Blade::component('landing.latest-news', LatestNews::class);
        Blade::component('landing.video-news', VideoNews::class);
        Blade::component('landing.featured-news', FeaturedNews::class);
        Blade::component('landing.breaking-news', BreakingNews::class);
        Blade::component('landing.newsletter', Newsletter::class);
        Blade::component('landing.weekly-highlights', WeeklyHighlights::class);
        Blade::component('landing.weekly-fun-news', WeeklyFunNews::class);
    }
}
