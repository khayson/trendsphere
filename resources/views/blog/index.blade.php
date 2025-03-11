<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog - TO.NEWS</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white dark:bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Grid Layout for Posts -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($posts as $post)
                <article class="group">
                    <a href="{{ route('blog.show', $post->slug) }}" class="block">
                        <div class="aspect-[16/9] overflow-hidden rounded-lg mb-4">
                            <img
                                src="{{ $post->featured_image }}"
                                alt="{{ $post->featured_image_alt }}"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                            >
                        </div>
                        <div class="space-y-2">
                            <div class="flex items-center gap-2">
                                <span class="text-red-600 dark:text-red-500 text-sm font-medium">
                                    {{ $post->category->name }}
                                </span>
                                @if($post->is_breaking)
                                    <span class="text-red-600 dark:text-red-500 text-sm font-medium">Breaking</span>
                                @endif
                            </div>
                            <h2 class="text-xl font-bold text-gray-900 dark:text-white group-hover:text-red-600 dark:group-hover:text-red-500 transition-colors line-clamp-2">
                                {{ $post->title }}
                            </h2>
                            <p class="text-gray-600 dark:text-gray-400 text-sm line-clamp-2">
                                {{ $post->excerpt }}
                            </p>
                            <div class="flex items-center text-gray-500 dark:text-gray-400 text-sm">
                                <span>{{ $post->reading_time }} min read</span>
                                <span class="mx-2">•</span>
                                <span>{{ $post->published_at->diffForHumans() }}</span>
                            </div>
                        </div>
                    </a>
                </article>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="mt-8">
            {{ $posts->links() }}
        </div>
    </div>
</body>
</html>
