<section class="mb-12">
    <div class="flex items-center justify-between mb-6">
        <h2 class="text-xl font-bold text-gray-900 dark:text-white">Latest News</h2>
        <a href="#" class="text-red-600 dark:text-red-500 text-sm font-medium hover:text-red-700">View All News →</a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- News Card 1 -->
        <a href="{{ route('blog.show', ['slug' => 'ai-breakthrough-medical-diagnostics']) }}" class="group">
            <div class="aspect-[4/3] overflow-hidden rounded-lg mb-3">
                <img
                    src="https://placehold.co/400x300"
                    alt="AI Medical Diagnostics"
                    class="object-cover w-full h-full group-hover:scale-105 transition-transform duration-500"
                >
            </div>
            <div class="space-y-2">
                <span class="text-red-600 dark:text-red-500 text-sm font-medium">Technology</span>
                <h3 class="font-semibold text-gray-900 dark:text-white group-hover:text-red-600 dark:group-hover:text-red-500 transition-colors line-clamp-2">
                    AI Breakthrough: New Model Shows Promise in Medical Diagnostics
                </h3>
                <p class="text-sm text-gray-600 dark:text-gray-400 line-clamp-2">
                    Revolutionary AI system demonstrates unprecedented accuracy in early disease detection.
                </p>
                <div class="flex items-center text-gray-500 dark:text-gray-400 text-sm">
                    <span>4 min read</span>
                    <span class="mx-2">•</span>
                    <span>1 hour ago</span>
                </div>
            </div>
        </a>

        <!-- News Card 2 -->
        <a href="{{ route('blog.show', ['slug' => 'groundbreaking-cancer-treatment']) }}" class="group">
            <div class="aspect-[4/3] overflow-hidden rounded-lg mb-3">
                <img
                    src="https://placehold.co/400x300"
                    alt="Cancer Treatment Research"
                    class="object-cover w-full h-full group-hover:scale-105 transition-transform duration-500"
                >
            </div>
            <div class="space-y-2">
                <span class="text-red-600 dark:text-red-500 text-sm font-medium">Medical</span>
                <h3 class="font-semibold text-gray-900 dark:text-white group-hover:text-red-600 dark:group-hover:text-red-500 transition-colors line-clamp-2">
                    Ground Breaking Medical Research Finds Hope for Cancer Treatment
                </h3>
                <p class="text-sm text-gray-600 dark:text-gray-400 line-clamp-2">
                    Revolutionary study reveals promising new approach to targeting cancer cells with unprecedented precision.
                </p>
                <div class="flex items-center text-gray-500 dark:text-gray-400 text-sm">
                    <span>6 min read</span>
                    <span class="mx-2">•</span>
                    <span>30 mins ago</span>
                </div>
            </div>
        </a>

        <!-- News Card 3 -->
        <div class="group">
            <div class="aspect-[4/3] overflow-hidden rounded-lg mb-3">
                <img
                    src="https://placehold.co/400x300"
                    alt="News Item"
                    class="object-cover w-full h-full group-hover:scale-105 transition-transform duration-500"
                >
            </div>
            <div class="space-y-2">
                <span class="text-red-600 dark:text-red-500 text-sm font-medium">Sports</span>
                <h3 class="font-semibold text-gray-900 dark:text-white group-hover:text-red-600 dark:group-hover:text-red-500 transition-colors line-clamp-2">
                    Historic Victory Marks New Era in Championship
                </h3>
                <p class="text-sm text-gray-600 dark:text-gray-400 line-clamp-2">
                    Underdog team's triumph reshapes the competitive landscape of the sport.
                </p>
                <div class="flex items-center text-gray-500 dark:text-gray-400 text-sm">
                    <span>3 min read</span>
                    <span class="mx-2">•</span>
                    <span>3 hours ago</span>
                </div>
            </div>
        </div>

        <!-- News Card 4 -->
        <div class="group">
            <div class="aspect-[4/3] overflow-hidden rounded-lg mb-3">
                <img
                    src="https://placehold.co/400x300"
                    alt="News Item"
                    class="object-cover w-full h-full group-hover:scale-105 transition-transform duration-500"
                >
            </div>
            <div class="space-y-2">
                <span class="text-red-600 dark:text-red-500 text-sm font-medium">Business</span>
                <h3 class="font-semibold text-gray-900 dark:text-white group-hover:text-red-600 dark:group-hover:text-red-500 transition-colors line-clamp-2">
                    Global Markets React to New Economic Policies
                </h3>
                <p class="text-sm text-gray-600 dark:text-gray-400 line-clamp-2">
                    International markets show mixed response to major policy shifts in leading economies.
                </p>
                <div class="flex items-center text-gray-500 dark:text-gray-400 text-sm">
                    <span>5 min read</span>
                    <span class="mx-2">•</span>
                    <span>2 hours ago</span>
                </div>
            </div>
        </div>
    </div>
</section>
