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
    <div class="flex min-h-screen">
        <!-- Left Side - Fixed Image (40%) -->
        <div class="w-[40%] fixed left-0 top-0 h-screen">
            <img
                src="{{ $image ?? 'https://placehold.co/800x600' }}"
                alt="{{ $title ?? 'Blog Featured Image' }}"
                class="w-full h-full object-cover"
            >
            <!-- Meta Information Overlay -->
            <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/80 to-transparent p-8">
                <div class="space-y-4">
                    <div class="flex items-center gap-4 text-sm text-white/80">
                        <span>{{ $publishedDate ?? now()->format('F d, Y') }}</span>
                        <span class="w-1 h-1 rounded-full bg-white/80"></span>
                        <span>{{ $readingTime ?? '5 min read' }}</span>
                    </div>
                    <h1 class="text-4xl font-bold text-white leading-tight">
                        {{ $title ?? 'The Future of AI in Modern Technology' }}
                    </h1>
                    <p class="text-white/80 text-lg">{{ $excerpt ?? 'Artificial Intelligence is reshaping our world in unprecedented ways, from healthcare to daily conveniences. Discover how these changes will affect our future.' }}</p>
                </div>
            </div>
            <!-- Back Button -->
            <a href="{{ route('home') }}" class="absolute top-8 left-8 bg-white/10 backdrop-blur-md text-white px-6 py-2 rounded-full hover:bg-white/20 transition-all">
                ← Back
            </a>
        </div>

        <!-- Right Side - Scrollable Content (60%) -->
        <div class="w-[60%] ml-[40%]">
            <div class="max-w-3xl mx-auto py-16 px-12">
                <!-- Article Content -->
                <div class="prose prose-lg dark:prose-invert max-w-none mb-8">
                    {!! $content ?? '
                    <h2>The Evolution of Artificial Intelligence</h2>
                    <p>In recent years, artificial intelligence has made remarkable strides, transforming from a concept of science fiction into a tangible reality that influences our daily lives. The integration of AI technologies across various sectors has opened new possibilities and challenges that we must address.</p>

                    <h3>Impact on Healthcare</h3>
                    <p>One of the most promising applications of AI is in healthcare. Machine learning algorithms are now capable of:</p>
                    <ul>
                        <li>Detecting diseases at early stages</li>
                        <li>Analyzing medical images with unprecedented accuracy</li>
                        <li>Predicting patient outcomes based on vast datasets</li>
                        <li>Optimizing treatment plans for individual patients</li>
                    </ul>

                    <h3>Transforming Business Operations</h3>
                    <p>Businesses across industries are leveraging AI to enhance their operations, improve customer experience, and gain competitive advantages. From automated customer service to predictive analytics, AI is revolutionizing how companies operate and make decisions.</p>

                    <blockquote>
                        <p>"AI is not just another technological advancement; it\'s a fundamental shift in how we approach problem-solving and innovation."</p>
                    </blockquote>

                    <h3>Ethical Considerations</h3>
                    <p>As AI continues to evolve, we must carefully consider the ethical implications of its implementation. Privacy concerns, algorithmic bias, and the impact on employment are just a few of the challenges we need to address.</p>' !!}
                </div>

                <!-- Interaction Buttons -->
                <div class="flex items-center justify-between py-6 border-y border-gray-100 dark:border-gray-800">
                    <div class="flex items-center gap-6">
                        <button class="flex items-center gap-2 text-gray-500 hover:text-red-600 transition-colors">
                            <i icon-name="heart" class="w-6 h-6"></i>
                            <span>2.5k</span>
                        </button>
                        <button class="flex items-center gap-2 text-gray-500 hover:text-gray-700 transition-colors">
                            <i icon-name="message-circle" class="w-6 h-6"></i>
                            <span>125</span>
                        </button>
                        <button class="flex items-center gap-2 text-gray-500 hover:text-gray-700 transition-colors">
                            <i icon-name="bookmark" class="w-6 h-6"></i>
                            <span>Save</span>
                        </button>
                    </div>
                    <button class="flex items-center gap-2 text-gray-500 hover:text-gray-700 transition-colors">
                        <i icon-name="share-2" class="w-6 h-6"></i>
                    </button>
                </div>

                <!-- Comments Section -->
                <div class="mt-12">
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-8">Comments (125)</h3>
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

    <!-- Initialize Lucide Icons -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            lucide.createIcons();
        });
    </script>
</body>
</html>
