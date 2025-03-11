@props(['featuredPost', 'breakingNews'])

<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Main Featured Article -->
        <div class="lg:col-span-2">
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
            @else
                <div class="text-center py-12 bg-gray-50 dark:bg-gray-800 rounded-lg">
                    <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                    </svg>
                    <h3 class="mt-2 text-sm font-medium text-gray-900 dark:text-white">No featured story</h3>
                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Our editors are curating the best stories.</p>
                </div>
            @endif
        </div>

        <!-- Right Side News -->
        <div class="space-y-6">
            @if($breakingNews->isEmpty())
                <div class="text-center py-8 bg-gray-50 dark:bg-gray-800 rounded-lg">
                    <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                    <h3 class="mt-2 text-sm font-medium text-gray-900 dark:text-white">No breaking news</h3>
                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Stay tuned for important updates.</p>
                </div>
            @else
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
            @endif
        </div>
    </div>
</section>
