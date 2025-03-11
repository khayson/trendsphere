@props(['trendingPosts'])

<section class="mb-12">
    <div class="flex items-center justify-between mb-6">
        <h2 class="text-xl font-bold text-gray-900 dark:text-white">Trending News</h2>
        <a href="{{ route('blog.index', ['sort' => 'trending']) }}" class="text-red-600 dark:text-red-500 text-sm font-medium hover:text-red-700">View All Trending →</a>
    </div>

    @if($trendingPosts->isEmpty())
        <div class="text-center py-8 bg-gray-50 dark:bg-gray-800 rounded-lg">
            <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
            </svg>
            <h3 class="mt-2 text-sm font-medium text-gray-900 dark:text-white">No trending articles</h3>
            <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Check back for popular content.</p>
        </div>
    @else
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        @foreach($trendingPosts as $post)
            <a href="{{ route('blog.show', $post->slug) }}" class="group">
                <div class="aspect-[4/3] overflow-hidden rounded-lg mb-3">
                    <img
                        src="{{ $post->featured_image }}"
                        alt="{{ $post->featured_image_alt }}"
                        class="object-cover w-full h-full group-hover:scale-105 transition-transform duration-500"
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
