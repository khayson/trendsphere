<section class="mb-12">
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-xl font-bold text-gray-900 dark:text-white">Featured News</h2>
                <a href="#" class="text-red-600 dark:text-red-500 text-sm font-medium hover:text-red-700">View All Featured →</a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Video Card 1 -->
                <a href="{{ route('blog.show', ['slug' => 'ai-healthcare-future']) }}" class="group">
                    <div class="relative aspect-video overflow-hidden rounded-lg mb-3">
                        <img
                            src="https://placehold.co/600x400"
                            alt="AI in Healthcare Video"
                            class="object-cover w-full h-full group-hover:scale-105 transition-transform duration-500"
                        >
                        <div class="absolute inset-0 bg-black/30 flex items-center justify-center">
                            <div class="w-12 h-12 rounded-full bg-white/30 flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M8 5v14l11-7z"/>
                                </svg>
                            </div>
                        </div>
                        <span class="absolute bottom-2 right-2 bg-black/70 text-white text-xs px-2 py-1 rounded">15:20</span>
                    </div>
                    <div class="space-y-2">
                        <span class="text-red-600 dark:text-red-500 text-sm font-medium">Video • Technology</span>
                        <h3 class="font-semibold text-gray-900 dark:text-white group-hover:text-red-600 dark:group-hover:text-red-500 transition-colors line-clamp-2">
                            Inside Look: The Future of AI in Healthcare
                        </h3>
                        <p class="text-sm text-gray-600 dark:text-gray-400 line-clamp-2">
                            An exclusive documentary exploring how artificial intelligence is revolutionizing medical diagnosis and treatment.
                        </p>
                        <div class="flex items-center text-gray-500 dark:text-gray-400 text-sm">
                            <span>25K views</span>
                            <span class="mx-2">•</span>
                            <span>1 day ago</span>
                        </div>
                    </div>
                </a>

                <!-- Article Card -->
                <a href="{{ route('blog.show', ['slug' => 'sustainable-banking-finance']) }}" class="group">
                    <div class="aspect-video overflow-hidden rounded-lg mb-3">
                        <img
                            src="https://placehold.co/600x400"
                            alt="Sustainable Banking"
                            class="object-cover w-full h-full group-hover:scale-105 transition-transform duration-500"
                        >
                    </div>
                    <div class="space-y-2">
                        <span class="text-red-600 dark:text-red-500 text-sm font-medium">Article • Business</span>
                        <h3 class="font-semibold text-gray-900 dark:text-white group-hover:text-red-600 dark:group-hover:text-red-500 transition-colors line-clamp-2">
                            The Rise of Sustainable Banking: A New Era in Finance
                        </h3>
                        <p class="text-sm text-gray-600 dark:text-gray-400 line-clamp-2">
                            How financial institutions are leading the charge in environmental responsibility and sustainable practices.
                        </p>
                        <div class="flex items-center text-gray-500 dark:text-gray-400 text-sm">
                            <span>10 min read</span>
                            <span class="mx-2">•</span>
                            <span>2 days ago</span>
                        </div>
                    </div>
                </a>

                <!-- Video Card 2 -->
                <a href="{{ route('blog.show', ['slug' => 'space-exploration-breakthrough']) }}" class="group">
                    <div class="relative aspect-video overflow-hidden rounded-lg mb-3">
                        <img
                            src="https://placehold.co/600x400"
                            alt="Space Exploration"
                            class="object-cover w-full h-full group-hover:scale-105 transition-transform duration-500"
                        >
                        <div class="absolute inset-0 bg-black/30 flex items-center justify-center">
                            <div class="w-12 h-12 rounded-full bg-white/30 flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M8 5v14l11-7z"/>
                                </svg>
                            </div>
                        </div>
                        <span class="absolute bottom-2 right-2 bg-black/70 text-white text-xs px-2 py-1 rounded">12:45</span>
                    </div>
                    <div class="space-y-2">
                        <span class="text-red-600 dark:text-red-500 text-sm font-medium">Video • Science</span>
                        <h3 class="font-semibold text-gray-900 dark:text-white group-hover:text-red-600 dark:group-hover:text-red-500 transition-colors line-clamp-2">
                            Major Breakthrough in Space Exploration Technology
                        </h3>
                        <p class="text-sm text-gray-600 dark:text-gray-400 line-clamp-2">
                            Scientists reveal groundbreaking advancements in propulsion systems for deep space exploration.
                        </p>
                        <div class="flex items-center text-gray-500 dark:text-gray-400 text-sm">
                            <span>18K views</span>
                            <span class="mx-2">•</span>
                            <span>3 days ago</span>
                        </div>
                    </div>
                </a>
            </div>
        </section>
