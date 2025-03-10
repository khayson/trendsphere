<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Blog Post' }} - TO.NEWS</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white dark:bg-gray-900">
    <div class="flex min-h-screen">
        <!-- Left Side - Fixed Image (40%) -->
        <div class="w-[40%] fixed left-0 top-0 h-screen">
            <img
                src="{{ $image ?? 'https://placehold.co/800x600' }}"
                alt="{{ $title ?? 'Blog Featured Image' }}"
                class="w-full h-full object-cover"
            >
            <!-- Back Button -->
            <a href="{{ route('home') }}" class="absolute top-8 left-8 bg-white/10 backdrop-blur-md text-white px-6 py-2 rounded-full hover:bg-white/20 transition-all">
                ← Back
            </a>
        </div>

        <!-- Right Side - Scrollable Content (60%) -->
        <div class="w-[60%] ml-[40%]">
            <div class="max-w-3xl mx-auto py-16 px-12">
                <!-- Meta Information -->
                <div class="mb-12 space-y-6">
                    <div class="flex items-center gap-4 text-sm text-gray-500 uppercase tracking-wider">
                        <span>{{ $publishedDate ?? now()->format('F d, Y') }}</span>
                        <span class="w-1 h-1 rounded-full bg-gray-300"></span>
                        <span>{{ $readingTime ?? '5 min read' }}</span>
                    </div>

                    <h1 class="text-4xl font-bold text-gray-900 dark:text-white leading-tight">
                        {{ $title ?? 'Some Questions before start website redesign project' }}
                    </h1>

                    <p class="text-xl text-gray-600 dark:text-gray-400">
                        {{ $description ?? 'Essential considerations and key questions to address before embarking on your website redesign journey.' }}
                    </p>
                </div>

                <!-- Article Content -->
                <div class="prose prose-lg dark:prose-invert max-w-none">
                    {!! $content !!}
                </div>

                <!-- Tags -->
                <div class="mt-16 pt-8 border-t border-gray-100 dark:border-gray-800">
                    <div class="flex items-center gap-3">
                        <span class="text-sm font-medium text-gray-500">Tags:</span>
                        <div class="flex flex-wrap gap-2">
                            @foreach($tags ?? ['Website Design', 'UX Research', 'Planning'] as $tag)
                                <span class="px-3 py-1 text-sm bg-gray-100 dark:bg-gray-800 rounded-full">
                                    {{ $tag }}
                                </span>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- Author Section -->
                <div class="mt-16 pt-8 border-t border-gray-100 dark:border-gray-800">
                    <div class="flex items-center gap-4">
                        <img
                            src="https://placehold.co/100x100"
                            alt="Author"
                            class="w-16 h-16 rounded-full object-cover"
                        >
                        <div>
                            <h3 class="font-semibold text-gray-900 dark:text-white">{{ $author ?? 'John Doe' }}</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400">{{ $authorBio ?? 'Senior UX Designer & Content Strategist' }}</p>
                        </div>
                    </div>
                </div>

                <!-- Related Posts -->
                <div class="mt-16 pt-8 border-t border-gray-100 dark:border-gray-800">
                    <h2 class="text-xl font-bold text-gray-900 dark:text-white mb-8">Related Articles</h2>
                    <div class="grid grid-cols-2 gap-8">
                        @foreach($relatedPosts ?? [
                            [
                                'title' => 'The Impact of AI on Modern Web Design',
                                'image' => 'https://placehold.co/400x300',
                                'readTime' => '4 min read'
                            ],
                            [
                                'title' => 'User-Centered Design Principles for 2024',
                                'image' => 'https://placehold.co/400x300',
                                'readTime' => '6 min read'
                            ]
                        ] as $post)
                            <a href="#" class="group">
                                <div class="aspect-[4/3] overflow-hidden rounded-lg mb-4">
                                    <img
                                        src="{{ $post['image'] }}"
                                        alt="{{ $post['title'] }}"
                                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                    >
                                </div>
                                <h3 class="font-semibold text-gray-900 dark:text-white group-hover:text-red-600 dark:group-hover:text-red-500 transition-colors line-clamp-2">
                                    {{ $post['title'] }}
                                </h3>
                                <p class="text-sm text-gray-500 dark:text-gray-400 mt-2">{{ $post['readTime'] }}</p>
                            </a>
                        @endforeach
                    </div>
                </div>

                <!-- Newsletter Subscription -->
                <div class="mt-16 pt-8 border-t border-gray-100 dark:border-gray-800">
                    <div class="bg-gray-50 dark:bg-gray-800/50 rounded-2xl p-8">
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-4">Subscribe to our newsletter</h3>
                        <p class="text-gray-600 dark:text-gray-400 mb-6">Get the latest articles and insights delivered to your inbox.</p>
                        <form class="flex gap-4">
                            <input
                                type="email"
                                placeholder="Enter your email"
                                class="flex-1 rounded-lg border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 px-4 py-2 focus:ring-2 focus:ring-red-500 focus:border-transparent outline-none"
                            >
                            <button class="bg-red-600 hover:bg-red-700 text-white px-6 py-2 rounded-lg transition-colors">
                                Subscribe
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
