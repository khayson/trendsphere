@props(['featuredPost', 'breakingNews'])

<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Main Featured Article -->
        <div class="lg:col-span-2 group">
            @if($featuredPost)
                <a href="{{ route('blog.show', $featuredPost->slug) }}" class="block">
                    <div class="aspect-[16/9] overflow-hidden rounded-lg mb-4">
                        <img
                            src="{{ $featuredPost->featured_image }}"
                            alt="{{ $featuredPost->featured_image_alt }}"
                            class="object-cover w-full h-full group-hover:scale-105 transition-transform duration-500"
                        >
                    </div>
                    <div class="space-y-2">
                        <div class="flex items-center gap-2">
                            <span class="text-red-600 dark:text-red-500 text-sm font-medium">
                                {{ $featuredPost->category->name }}
                            </span>
                            @if($featuredPost->is_breaking)
                                <span class="text-red-600 dark:text-red-500 text-sm font-medium">Breaking</span>
                            @endif
                        </div>
                        <h1 class="text-2xl font-bold text-gray-900 dark:text-white group-hover:text-red-600 dark:group-hover:text-red-500 transition-colors">
                            {{ $featuredPost->title }}
                        </h1>
                        <p class="text-gray-600 dark:text-gray-400 text-sm line-clamp-2">
                            {{ $featuredPost->excerpt }}
                        </p>
                        <div class="flex items-center text-gray-500 dark:text-gray-400 text-sm">
                            <span>{{ $featuredPost->reading_time }} min read</span>
                            <span class="mx-2">•</span>
                            <span>{{ $featuredPost->published_at->diffForHumans() }}</span>
                        </div>
                    </div>
                </a>
            @endif
        </div>

        <!-- Right Side News -->
        <div class="space-y-6">
            @foreach($breakingNews as $post)
                <a href="{{ route('blog.show', $post->slug) }}" class="flex gap-4 group">
                    <div class="aspect-[4/3] w-48 overflow-hidden rounded-lg flex-shrink-0">
                        <img
                            src="{{ $post->featured_image }}"
                            alt="{{ $post->featured_image_alt }}"
                            class="object-cover w-full h-full group-hover:scale-105 transition-transform duration-500"
                        >
                    </div>
                    <div class="flex-1">
                        <div class="flex items-center gap-2 mb-2">
                            <span class="text-red-600 dark:text-red-500 text-sm font-medium">
                                {{ $post->category->name }}
                            </span>
                            @if($post->is_breaking)
                                <span class="text-red-600 dark:text-red-500 text-sm font-medium">Breaking</span>
                            @endif
                        </div>
                        <h2 class="font-semibold text-gray-900 dark:text-white group-hover:text-red-600 dark:group-hover:text-red-500 transition-colors line-clamp-2 text-lg mb-2">
                            {{ $post->title }}
                        </h2>
                        <div class="flex items-center text-gray-500 dark:text-gray-400 text-sm">
                            <span>{{ $post->reading_time }} min read</span>
                            <span class="mx-2">•</span>
                            <span>{{ $post->published_at->diffForHumans() }}</span>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>
