<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ request('type') ? ucfirst(request('type')) : 'News' }} - TO.NEWS</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-white dark:bg-gray-900">
    <!-- Header with Back Button -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="flex items-center justify-between mb-8">
            <div class="flex items-center space-x-4">
                <a href="/" class="flex items-center text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>
                    Back to Home
                </a>
                <h1 class="text-2xl font-bold text-gray-900 dark:text-white">
                    @if(request('breaking'))
                        Breaking News
                    @elseif(request('featured'))
                        Featured News
                    @elseif(request('type') === 'video')
                        Video News
                    @elseif(request('type') === 'audio')
                        Audio News
                    @elseif(request('category'))
                        {{ ucfirst(request('category')) }}
                    @else
                        Latest News
                    @endif
                </h1>
            </div>
        </div>

        @if($posts->isEmpty())
            <div class="text-center py-12">
                <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9.5a2 2 0 00-2-2h-1" />
                </svg>
                <h3 class="mt-2 text-sm font-medium text-gray-900 dark:text-white">No posts found</h3>
                <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">
                    @if(request('breaking'))
                        There are no breaking news articles at the moment.
                    @elseif(request('featured'))
                        There are no featured articles at the moment.
                    @elseif(request('type') === 'video')
                        There are no video posts available.
                    @elseif(request('type') === 'audio')
                        There are no audio posts available.
                    @elseif(request('category'))
                        There are no posts in this category yet.
                    @else
                        There are no posts available at the moment.
                    @endif
                </p>
            </div>
        @else
            <!-- Grid Layout for Posts -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($posts as $post)
                    <article class="group">
                        <a href="{{ route('blog.show', $post->slug) }}" class="block">
                            <div class="relative aspect-[16/9] overflow-hidden rounded-lg mb-4">
                                <img
                                    src="{{ $post->featured_image }}"
                                    alt="{{ $post->featured_image_alt }}"
                                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                >
                                @if($post->is_video)
                                    <div class="absolute inset-0 bg-black/30 flex items-center justify-center">
                                        <div class="w-12 h-12 rounded-full bg-white/30 flex items-center justify-center">
                                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M8 5v14l11-7z"/>
                                            </svg>
                                        </div>
                                    </div>
                                    @if($post->video_duration)
                                        <span class="absolute bottom-2 right-2 bg-black/70 text-white text-xs px-2 py-1 rounded">
                                            {{ $post->video_duration }}
                                        </span>
                                    @endif
                                @endif
                            </div>
                            <div class="space-y-2">
                                <div class="flex items-center gap-2">
                                    <span class="text-red-600 dark:text-red-500 text-sm font-medium">
                                        {{ $post->is_video ? 'Video • ' : '' }}{{ $post->category->name }}
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
        @endif
    </div>
</body>
</html>
