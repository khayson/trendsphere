<section class="mb-12">
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-xl font-bold text-gray-900 dark:text-white">Trending News</h2>
                <a href="#" class="text-red-600 dark:text-red-500 text-sm font-medium hover:text-red-700">See More →</a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Trending News Card 1 -->
                <a href="{{ route('blog.show', ['slug' => 'innovative-farming-technology']) }}" class="group">
                    <div class="aspect-[4/3] overflow-hidden rounded-lg mb-3">
                        <img
                            src="https://placehold.co/400x300"
                            alt="Innovative Farming Technology"
                            class="object-cover w-full h-full group-hover:scale-105 transition-transform duration-500"
                        >
                    </div>
                    <div class="space-y-2">
                        <span class="text-red-600 dark:text-red-500 text-sm font-medium">Technology</span>
                        <h3 class="font-semibold text-gray-900 dark:text-white group-hover:text-red-600 dark:group-hover:text-red-500 transition-colors line-clamp-2">
                            Innovative Farming Technology Transforms Agricultural Operations
                        </h3>
                        <p class="text-sm text-gray-600 dark:text-gray-400 line-clamp-2">
                            Advanced technology is changing the farming landscape with smart solutions and sustainable practices.
                        </p>
                        <div class="flex items-center text-gray-500 dark:text-gray-400 text-sm">
                            <span>5 min read</span>
                            <span class="mx-2">•</span>
                            <span>2 hours ago</span>
                        </div>
                    </div>
                </a>

                <!-- Trending News Card 2 -->
                <a href="{{ route('blog.show', ['slug' => 'cultural-initiatives-highlights']) }}" class="group">
                    <div class="aspect-[4/3] overflow-hidden rounded-lg mb-3">
                        <img
                            src="https://placehold.co/400x300"
                            alt="Cultural Initiatives"
                            class="object-cover w-full h-full group-hover:scale-105 transition-transform duration-500"
                        >
                    </div>
                    <div class="space-y-2">
                        <span class="text-red-600 dark:text-red-500 text-sm font-medium">Culture</span>
                        <h3 class="font-semibold text-gray-900 dark:text-white group-hover:text-red-600 dark:group-hover:text-red-500 transition-colors line-clamp-2">
                            Cultural Initiatives Highlights Diversity Through Events
                        </h3>
                        <p class="text-sm text-gray-600 dark:text-gray-400 line-clamp-2">
                            A series of cultural celebrations will unite communities with food and performances.
                        </p>
                        <div class="flex items-center text-gray-500 dark:text-gray-400 text-sm">
                            <span>3 min read</span>
                            <span class="mx-2">•</span>
                            <span>4 hours ago</span>
                        </div>
                    </div>
                </a>

                <!-- Trending News Card 3 -->
                <a href="{{ route('blog.show', ['slug' => 'regional-sports-league']) }}" class="group">
                    <div class="aspect-[4/3] overflow-hidden rounded-lg mb-3">
                        <img
                            src="https://placehold.co/400x300"
                            alt="Regional Sports League"
                            class="object-cover w-full h-full group-hover:scale-105 transition-transform duration-500"
                        >
                    </div>
                    <div class="space-y-2">
                        <span class="text-red-600 dark:text-red-500 text-sm font-medium">Sports</span>
                        <h3 class="font-semibold text-gray-900 dark:text-white group-hover:text-red-600 dark:group-hover:text-red-500 transition-colors line-clamp-2">
                            Regional Sports League Introduces New Teams and Divisions
                        </h3>
                        <p class="text-sm text-gray-600 dark:text-gray-400 line-clamp-2">
                            The expansion brings new opportunities for athletes and fans across the region.
                        </p>
                        <div class="flex items-center text-gray-500 dark:text-gray-400 text-sm">
                            <span>4 min read</span>
                            <span class="mx-2">•</span>
                            <span>6 hours ago</span>
                        </div>
                    </div>
                </a>
            </div>
        </section>
