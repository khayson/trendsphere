<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Blog Post' }} - TO.NEWS</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body class="bg-white dark:bg-gray-900">
    <!-- Main Container -->
    <div class="flex flex-col lg:flex-row min-h-screen">
        <!-- Left Side - Image (Full width on mobile, 40% fixed on desktop) -->
        <div class="relative w-full h-[40vh] sm:h-[50vh] md:h-[60vh] lg:w-[40%] lg:h-screen lg:fixed lg:left-0 lg:top-0">
            <img
                src="{{ $image ?? 'https://placehold.co/800x600' }}"
                alt="{{ $title ?? 'Blog Featured Image' }}"
                class="w-full h-full object-cover"
            >
            <!-- Meta Information Overlay with better mobile spacing -->
            <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/90 via-black/60 to-transparent p-4 sm:p-6 lg:p-8">
                <div class="space-y-2 sm:space-y-3 lg:space-y-4 max-w-prose">
                    <div class="flex items-center gap-3 text-xs sm:text-sm text-white/80">
                        <span>{{ $publishedDate ?? now()->format('F d, Y') }}</span>
                        <span class="w-1 h-1 rounded-full bg-white/80"></span>
                        <span>{{ $readingTime ?? '5 min read' }}</span>
                    </div>
                    <h1 class="text-xl sm:text-2xl md:text-3xl lg:text-4xl font-bold text-white leading-tight">
                        {{ $title ?? 'The Future of AI in Modern Technology' }}
                    </h1>
                    <p class="text-sm sm:text-base lg:text-lg text-white/80 line-clamp-2 sm:line-clamp-3 lg:line-clamp-none">
                        {{ $excerpt ?? 'Artificial Intelligence is reshaping our world in unprecedented ways, from healthcare to daily conveniences. Discover how these changes will affect our future.' }}
                    </p>
                </div>
            </div>
            <!-- Back Button with better mobile positioning -->
            <a href="{{ route('home') }}"
               class="absolute top-4 left-4 sm:top-6 sm:left-6 lg:top-8 lg:left-8 bg-white/10 backdrop-blur-md text-white px-3 sm:px-4 lg:px-6 py-1.5 sm:py-2 rounded-full hover:bg-white/20 transition-all text-xs sm:text-sm lg:text-base">
                ← Back
            </a>
        </div>

        <!-- Right Side - Content (Full width on mobile, 60% on desktop) -->
        <div class="w-full lg:w-[60%] lg:ml-[40%]">
            <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-12 py-6 sm:py-8 lg:py-16">
                <!-- Content section with improved spacing -->
                <div class="prose prose-sm sm:prose-base lg:prose-lg dark:prose-invert max-w-none mb-6 sm:mb-8">
                    {!! $content !!}
                </div>

                <!-- Interaction Buttons with better mobile layout -->
                <div class="flex items-center justify-between py-3 sm:py-4 lg:py-6 border-y border-gray-100 dark:border-gray-800">
                    <div class="flex items-center gap-2 sm:gap-4 lg:gap-6">
                        <button class="flex items-center gap-1 sm:gap-2 text-gray-500 hover:text-red-600 transition-colors">
                            <i icon-name="heart" class="w-4 h-4 sm:w-5 sm:h-5 lg:w-6 lg:h-6"></i>
                            <span class="text-xs sm:text-sm lg:text-base">2.5k</span>
                        </button>
                        <button class="flex items-center gap-2 text-gray-500 hover:text-gray-700 transition-colors">
                            <i icon-name="message-circle" class="w-5 h-5 lg:w-6 lg:h-6"></i>
                            <span class="text-sm lg:text-base">125</span>
                        </button>
                        <button class="flex items-center gap-2 text-gray-500 hover:text-gray-700 transition-colors">
                            <i icon-name="bookmark" class="w-5 h-5 lg:w-6 lg:h-6"></i>
                            <span class="text-sm lg:text-base">Save</span>
                        </button>
                    </div>
                    <button class="flex items-center gap-2 text-gray-500 hover:text-gray-700 transition-colors">
                        <i icon-name="share-2" class="w-5 h-5 lg:w-6 lg:h-6"></i>
                    </button>
                </div>

                <!-- Comments section with improved mobile layout -->
                <div class="mt-6 sm:mt-8 lg:mt-12">
                    <h3 class="text-base sm:text-lg lg:text-xl font-bold text-gray-900 dark:text-white mb-4 sm:mb-6 lg:mb-8">
                        Comments (125)
                    </h3>
                    <div class="space-y-8">
                        <!-- Comment Form -->
                        <form class="mb-12">
                            <textarea
                                rows="3"
                                placeholder="Write a comment..."
                                class="w-full rounded-lg border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 p-4 focus:ring-2 focus:ring-red-500 focus:border-transparent outline-none"
                            ></textarea>
                            <div class="mt-4 flex justify-end">
                                <button class="bg-red-600 hover:bg-red-700 text-white px-6 py-2 rounded-lg transition-colors">
                                    Post Comment
                                </button>
                            </div>
                        </form>

                        <!-- Sample Comments -->
                        <div class="space-y-6">
                            <!-- Comment 1 -->
                            <div class="flex gap-4">
                                <img src="https://placehold.co/40x40" alt="User" class="w-10 h-10 rounded-full">
                                <div class="flex-1">
                                    <div class="flex items-center gap-2 mb-1">
                                        <span class="font-semibold text-gray-900 dark:text-white">John Doe</span>
                                        <span class="text-sm text-gray-500">2 hours ago</span>
                                    </div>
                                    <p class="text-gray-600 dark:text-gray-400">Fascinating article! The implications of AI in healthcare are particularly interesting.</p>
                                </div>
                            </div>

                            <!-- Comment 2 -->
                            <div class="flex gap-4">
                                <img src="https://placehold.co/40x40" alt="User" class="w-10 h-10 rounded-full">
                                <div class="flex-1">
                                    <div class="flex items-center gap-2 mb-1">
                                        <span class="font-semibold text-gray-900 dark:text-white">Jane Smith</span>
                                        <span class="text-sm text-gray-500">5 hours ago</span>
                                    </div>
                                    <p class="text-gray-600 dark:text-gray-400">Great insights on the ethical considerations. We need more discussions about AI's impact on privacy.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tags -->
                <div class="mt-8">
                    <div class="flex flex-wrap gap-2">
                        @foreach($tags ?? ['Website Design', 'UX Research', 'Planning'] as $tag)
                            <span class="px-3 py-1 text-sm bg-gray-100 dark:bg-gray-800 rounded-full">
                                {{ $tag }}
                            </span>
                        @endforeach
                    </div>
                </div>

                <!-- Related Posts with better grid layout -->
                <div class="mt-6 sm:mt-8 lg:mt-12 pt-4 sm:pt-6 lg:pt-8 border-t border-gray-100 dark:border-gray-800">
                    <h2 class="text-base sm:text-lg lg:text-xl font-bold text-gray-900 dark:text-white mb-4 sm:mb-6 lg:mb-8">Related Articles</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-6 lg:gap-8">
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

                <!-- Newsletter with improved mobile layout -->
                <div class="mt-6 sm:mt-8 lg:mt-12 pt-4 sm:pt-6 lg:pt-8">
                    <div class="bg-gray-50 dark:bg-gray-800/50 rounded-lg sm:rounded-xl lg:rounded-2xl p-4 sm:p-6 lg:p-8">
                        <h3 class="text-base sm:text-lg lg:text-xl font-bold text-gray-900 dark:text-white mb-4 sm:mb-6 lg:mb-8">Subscribe to our newsletter</h3>
                        <p class="text-gray-600 dark:text-gray-400 mb-6">Get the latest articles and insights delivered to your inbox.</p>
                        <form class="flex flex-col sm:flex-row gap-3 sm:gap-4">
                            <input
                                type="email"
                                placeholder="Enter your email"
                                class="w-full flex-1 rounded-lg border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 px-4 py-2 text-sm sm:text-base focus:ring-2 focus:ring-red-500 focus:border-transparent outline-none"
                            >
                            <button class="w-full sm:w-auto bg-red-600 hover:bg-red-700 text-white px-6 py-2 rounded-lg transition-colors text-sm sm:text-base">
                                Subscribe
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Initialize Lucide Icons -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            lucide.createIcons();
        });
    </script>
</body>
</html>
