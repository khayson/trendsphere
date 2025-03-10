<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function show($slug)
    {
        // Here you would typically fetch the blog post from your database
        // For now, we'll return the view with the slug
        return view('blog.show', [
            'slug' => $slug,
            // You can add more data here when you have a database
            'title' => ucwords(str_replace('-', ' ', $slug)),
            'excerpt' => 'This is the excerpt of the blog post.',
            'content' => 'This is the content of the blog post.',
            'publishedDate' => now(),
            'readingTime' => '5 min',
            'image' => 'https://placehold.co/800x600'
        ]);
    }
}
