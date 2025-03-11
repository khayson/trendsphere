<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $query = Post::with(['category', 'author', 'tags'])
            ->published()
            ->latest('published_at');

        if ($request->has('category')) {
            $query->whereHas('category', function($q) use ($request) {
                $q->where('slug', $request->category);
            });
        }

        $posts = $query->paginate(12);

        return view('blog.index', compact('posts'));
    }

    public function show($slug)
    {
        $post = Post::with(['category', 'author', 'tags', 'comments.user', 'comments.replies.user'])
            ->published()
            ->where('slug', $slug)
            ->firstOrFail();

        // Increment view count
        $post->incrementViews();

        // Get related posts
        $relatedPosts = $post->relatedPosts()->get();

        return view('blog.show', [
            'post' => $post,
            'title' => $post->title,
            'content' => $post->content,
            'image' => $post->featured_image,
            'image_alt' => $post->featured_image_alt,
            'relatedPosts' => $relatedPosts,
        ]);
    }

    public function byCategory($category)
    {
        $posts = Post::whereHas('category', function ($query) use ($category) {
            $query->where('slug', $category);
        })
            ->with(['category', 'author', 'tags'])
            ->published()
            ->latest('published_at')
            ->paginate(12);

        return view('blog.index', compact('posts'));
    }

    public function byTag($tag)
    {
        $posts = Post::whereHas('tags', function ($query) use ($tag) {
            $query->where('slug', $tag);
        })
            ->with(['category', 'author', 'tags'])
            ->published()
            ->latest('published_at')
            ->paginate(12);

        return view('blog.index', compact('posts'));
    }
}
