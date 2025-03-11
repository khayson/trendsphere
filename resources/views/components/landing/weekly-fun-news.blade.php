@props(['funNews'])

<section class="mb-12">
    <div class="flex items-center justify-between mb-6">
        <h2 class="text-xl font-bold text-gray-900 dark:text-white">Weekly Fun News</h2>
        <a href="{{ route('blog.index', ['category' => 'fun-news']) }}" class="text-red-600 dark:text-red-500 text-sm font-medium hover:text-red-700">View All Fun News →</a>
    </div>

    @if($funNews->isEmpty())
        <div class="text-center py-8 bg-gray-50 dark:bg-gray-800 rounded-lg">
            <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <h3 class="mt-2 text-sm font-medium text-gray-900 dark:text-white">No fun news this week</h3>
            <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Check back later for entertaining content.</p>
        </div>
    @else
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach($funNews as $post)
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
