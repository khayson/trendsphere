@props(['trendingPosts'])

<section class="mb-12">
    <div class="flex items-center justify-between mb-6">
        <h2 class="text-xl font-bold text-gray-900 dark:text-white">Trending News</h2>
        <a href="{{ route('blog.index') }}" class="text-red-600 dark:text-red-500 text-sm font-medium hover:text-red-700">See More →</a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
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
</section>
