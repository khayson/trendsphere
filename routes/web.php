<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Http\Controllers\BlogController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/category/{category}', [BlogController::class, 'byCategory'])->name('blog.category');
Route::get('/tag/{tag}', [BlogController::class, 'byTag'])->name('blog.tag');

require __DIR__.'/auth.php';
