<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use App\View\Components\Landing\Hero;
use App\View\Components\Landing\TrendingNews;
use App\View\Components\Landing\LatestUpdates;
use App\View\Components\Landing\MedicalResearch;

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
    }
}
