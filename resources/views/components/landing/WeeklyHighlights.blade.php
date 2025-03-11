<section class="mb-12">
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-xl font-bold text-gray-900 dark:text-white">Weekly Highlights</h2>
                <a href="#" class="text-red-600 dark:text-red-500 text-sm font-medium hover:text-red-700">View All Highlights →</a>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <!-- Left Column - Main Highlight -->
                <a href="{{ route('blog.show', ['slug' => 'urban-architecture-evolution']) }}" class="group">
                    <div class="aspect-[16/9] overflow-hidden rounded-lg mb-4">
                        <img
                            src="https://placehold.co/800x450"
                            alt="Urban Architecture Evolution"
                            class="object-cover w-full h-full group-hover:scale-105 transition-transform duration-500"
                        >
                    </div>
                    <div class="space-y-3">
                        <span class="text-red-600 dark:text-red-500 text-sm font-medium">Featured Story</span>
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white group-hover:text-red-600 dark:group-hover:text-red-500 transition-colors">
                            The Evolution of Urban Architecture: Building Tomorrow's Cities
                        </h3>
                        <p class="text-gray-600 dark:text-gray-400">
                            Exploring how modern cities are being transformed through innovative architectural designs and sustainable urban planning strategies.
                        </p>
                        <div class="flex items-center text-gray-500 dark:text-gray-400 text-sm">
                            <span>8 min read</span>
                            <span class="mx-2">•</span>
                            <span>This Week's Most Read</span>
                        </div>
                    </div>
                </a>

                <!-- Right Column - Highlight List -->
                <div class="space-y-6">
                    <!-- Highlight Item 1 -->
                    <a href="{{ route('blog.show', ['slug' => 'quantum-computing-breakthrough']) }}" class="flex gap-4 group">
                        <span class="text-3xl font-bold text-gray-200 dark:text-gray-700">01</span>
                        <div class="flex-1 space-y-2">
                            <span class="text-red-600 dark:text-red-500 text-sm font-medium">Technology</span>
                            <h4 class="font-semibold text-gray-900 dark:text-white group-hover:text-red-600 dark:group-hover:text-red-500 transition-colors">
                                Quantum Computing Breakthrough: A New Era of Processing Power
                            </h4>
                            <p class="text-sm text-gray-600 dark:text-gray-400 line-clamp-2">
                                Scientists achieve major milestone in quantum computing, promising revolutionary advances in data processing capabilities.
                            </p>
                        </div>
                    </a>

                    <!-- Highlight Item 2 -->
                    <a href="{{ route('blog.show', ['slug' => 'renewable-energy-records']) }}" class="flex gap-4 group">
                        <span class="text-3xl font-bold text-gray-200 dark:text-gray-700">02</span>
                        <div class="flex-1 space-y-2">
                            <span class="text-red-600 dark:text-red-500 text-sm font-medium">Environment</span>
                            <h4 class="font-semibold text-gray-900 dark:text-white group-hover:text-red-600 dark:group-hover:text-red-500 transition-colors">
                                Renewable Energy Sets New Global Records
                            </h4>
                            <p class="text-sm text-gray-600 dark:text-gray-400 line-clamp-2">
                                Global renewable energy adoption reaches unprecedented levels, marking a significant shift in power generation.
                            </p>
                        </div>
                    </a>

                    <!-- Highlight Item 3 -->
                    <a href="{{ route('blog.show', ['slug' => 'mediterranean-diet-benefits']) }}" class="flex gap-4 group">
                        <span class="text-3xl font-bold text-gray-200 dark:text-gray-700">03</span>
                        <div class="flex-1 space-y-2">
                            <span class="text-red-600 dark:text-red-500 text-sm font-medium">Health</span>
                            <h4 class="font-semibold text-gray-900 dark:text-white group-hover:text-red-600 dark:group-hover:text-red-500 transition-colors">
                                New Study Reveals Benefits of Mediterranean Diet
                            </h4>
                            <p class="text-sm text-gray-600 dark:text-gray-400 line-clamp-2">
                                Comprehensive research confirms long-term health advantages of Mediterranean dietary patterns.
                            </p>
                        </div>
                    </a>

                    <!-- Highlight Item 4 -->
                    <a href="{{ route('blog.show', ['slug' => 'digital-art-nft-revolution']) }}" class="flex gap-4 group">
                        <span class="text-3xl font-bold text-gray-200 dark:text-gray-700">04</span>
                        <div class="flex-1 space-y-2">
                            <span class="text-red-600 dark:text-red-500 text-sm font-medium">Culture</span>
                            <h4 class="font-semibold text-gray-900 dark:text-white group-hover:text-red-600 dark:group-hover:text-red-500 transition-colors">
                                Digital Art Revolution: NFTs Transform Creative Industry
                            </h4>
                            <p class="text-sm text-gray-600 dark:text-gray-400 line-clamp-2">
                                How digital tokens are reshaping the art world and creating new opportunities for artists globally.
                            </p>
                        </div>
                    </a>
                </div>
            </div>
        </section>
