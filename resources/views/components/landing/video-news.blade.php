@props(['videoPosts'])

<section class="mb-12">
    <div class="flex items-center justify-between mb-6">
        <h2 class="text-xl font-bold text-gray-900 dark:text-white">Video News</h2>
        <a href="{{ route('blog.index', ['type' => 'video']) }}" class="text-red-600 dark:text-red-500 text-sm font-medium hover:text-red-700">View All Videos →</a>
    </div>

    @if($videoPosts->isEmpty())
        <div class="text-center py-8 bg-gray-50 dark:bg-gray-800 rounded-lg">
            <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
            </svg>
            <h3 class="mt-2 text-sm font-medium text-gray-900 dark:text-white">No video content</h3>
            <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Check back soon for new video updates.</p>
        </div>
    @else
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach($videoPosts as $post)
                <a href="{{ route('blog.show', $post->slug) }}" class="group">
                    <div class="aspect-[4/3] overflow-hidden rounded-lg mb-3 relative">
                        <img
                            src="{{ $post->featured_image }}"
                            alt="{{ $post->featured_image_alt }}"
                            class="object-cover w-full h-full group-hover:scale-105 transition-transform duration-500"
                        >
                        <div class="absolute inset-0 bg-black/30 flex items-center justify-center">
                            <svg class="w-12 h-12 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M8 5v14l11-7z"/>
                            </svg>
                        </div>
                        @if($post->video_duration)
                            <span class="absolute bottom-2 right-2 bg-black/70 text-white text-sm px-2 py-1 rounded">
                                {{ $post->video_duration }}
                            </span>
                        @endif
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
                        <h3 class="font-semibold text-gray-900 dark:text-white group-hover:text-red-600 dark:group-hover:text-red-500 transition-colors line-clamp-2">
                            {{ $post->title }}
                        </h3>
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
