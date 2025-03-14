@props(['featuredPosts'])

<section class="mb-12">
    <div class="flex items-center justify-between mb-6">
        <h2 class="text-xl font-bold text-gray-900 dark:text-white">Featured News</h2>
        <a href="{{ route('blog.index', ['featured' => true]) }}" class="text-red-600 dark:text-red-500 text-sm font-medium hover:text-red-700">View All Featured →</a>
    </div>

    @if($featuredPosts->isEmpty())
        <div class="text-center py-8 bg-gray-50 dark:bg-gray-800 rounded-lg">
            <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
            </svg>
            <h3 class="mt-2 text-sm font-medium text-gray-900 dark:text-white">No featured articles</h3>
            <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Stay tuned for featured content.</p>
        </div>
    @else
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($featuredPosts as $post)
                <a href="{{ route('blog.show', $post->slug) }}" class="group">
                    <div class="relative aspect-video overflow-hidden rounded-lg mb-3">
                        <img
                            src="{{ $post->featured_image }}"
                            alt="{{ $post->featured_image_alt }}"
                            class="object-cover w-full h-full group-hover:scale-105 transition-transform duration-500"
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
                                {{ $post->is_video ? 'Video • ' : 'Article • ' }}{{ $post->category->name }}
                            </span>
                            @if($post->is_breaking)
                                <span class="text-red-600 dark:text-red-500 text-sm font-medium">Breaking</span>
                            @endif
                        </div>
                        <h3 class="font-semibold text-gray-900 dark:text-white group-hover:text-red-600 dark:group-hover:text-red-500 transition-colors line-clamp-2">
                            {{ $post->title }}
                        </h3>
                        <p class="text-sm text-gray-600 dark:text-gray-400 line-clamp-2">
                            {{ $post->excerpt }}
                        </p>
                        <div class="flex items-center text-gray-500 dark:text-gray-400 text-sm">
                            <span>{{ $post->reading_time }} min read</span>
                            <span class="mx-2">•</span>
                            <span>{{ $post->published_at->diffForHumans() }}</span>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    @endif
</section>
