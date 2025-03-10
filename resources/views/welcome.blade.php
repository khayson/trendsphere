<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TO.NEWS - Latest Updates</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="font-sans antialiased bg-white dark:bg-gray-900" x-data="scrollAnimation">
    <!-- Off-canvas Menu -->
    <div class="overlay fixed inset-0 bg-black bg-opacity-50 z-40" id="overlay"></div>
    <div class="off-canvas fixed inset-y-0 left-0 w-72 bg-white dark:bg-gray-900 z-50 shadow-2xl" id="mobileMenu">
        <div class="p-6 h-full flex flex-col">
            <div class="flex items-center justify-between mb-8">
                <div class="flex items-center">
                    <span class="text-red-600 font-bold text-2xl">TO.</span>
                    <span class="font-bold text-2xl dark:text-white">NEWS</span>
                </div>
                <button id="closeMenu" class="p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-800 text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-white transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
            <nav class="flex flex-col space-y-4">
                <a href="#news" class="menu-item p-3 rounded-lg text-gray-700 dark:text-gray-300 hover:text-red-600 hover:bg-red-50 dark:hover:bg-red-900/10 font-medium transition-all">News</a>
                <a href="#watch" class="menu-item p-3 rounded-lg text-gray-700 dark:text-gray-300 hover:text-red-600 hover:bg-red-50 dark:hover:bg-red-900/10 font-medium transition-all">Watch</a>
                <a href="#listen" class="menu-item p-3 rounded-lg text-gray-700 dark:text-gray-300 hover:text-red-600 hover:bg-red-50 dark:hover:bg-red-900/10 font-medium transition-all">Listen</a>
                <a href="#live" class="menu-item p-3 rounded-lg text-gray-700 dark:text-gray-300 hover:text-red-600 hover:bg-red-50 dark:hover:bg-red-900/10 font-medium transition-all">Live TV</a>
            </nav>
        </div>
    </div>

    <!-- Header -->
    <header class="sticky top-0 z-50 bg-white/80 dark:bg-gray-900/80 backdrop-blur-md border-b border-gray-100 dark:border-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <!-- Logo -->
                <div class="flex items-center">
                    <span class="text-red-600 font-bold text-2xl">TO.</span>
                    <span class="font-bold text-2xl dark:text-white">NEWS</span>
                </div>

                <!-- Navigation -->
                <nav class="hidden md:flex space-x-8">
                    <a href="#" class="text-gray-700 dark:text-gray-300 hover:text-red-600 font-medium">News</a>
                    <a href="#" class="text-gray-700 dark:text-gray-300 hover:text-red-600 font-medium">Watch</a>
                    <a href="#" class="text-gray-700 dark:text-gray-300 hover:text-red-600 font-medium">Listen</a>
                    <a href="#" class="text-gray-700 dark:text-gray-300 hover:text-red-600 font-medium">Live TV</a>
                </nav>

                <!-- Mobile Menu Button -->
                <button id="openMenu" class="md:hidden">
                    <svg class="w-6 h-6 dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </div>
    </header>

    <!-- Breaking News Banner -->
    <div class="bg-red-600 text-white relative flex items-center overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-center py-1">
                <span class="font-semibold mr-4 whitespace-nowrap">Breaking News:</span>
                <div class="overflow-hidden">
                    <p class="scroll-text text-sm">
                        Stay ahead with the latest business insights, comprehensive analysis, real-time updates on breaking news, and in-depth coverage of current market trends.
                        | Major developments in global markets | Technology breakthroughs reshaping industries | Economic updates affecting businesses worldwide
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Hero Section -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Main Featured Article -->
            <div class="lg:col-span-2 group">
                <div class="aspect-[16/9] overflow-hidden rounded-lg mb-4">
                    <img
                        src="https://placehold.co/800x450"
                        alt="Featured Article"
                        class="object-cover w-full h-full group-hover:scale-105 transition-transform duration-500"
                    >
                </div>
                <div class="space-y-2">
                    <span class="text-red-600 dark:text-red-500 text-sm font-medium">Breaking</span>
                    <h1 class="text-2xl font-bold text-gray-900 dark:text-white group-hover:text-red-600 dark:group-hover:text-red-500 transition-colors">
                        Record-Breaking, Stunning Performance Leads The Swimmer To A Victory
                    </h1>
                    <p class="text-gray-600 dark:text-gray-400 text-sm line-clamp-2">
                        Stay ahead with the latest business insights, comprehensive analysis, real-time updates on breaking news.
                    </p>
                    <div class="flex items-center text-gray-500 dark:text-gray-400 text-sm">
                        <span>5 min read</span>
                        <span class="mx-2">•</span>
                        <span>2 hours ago</span>
                    </div>
                </div>
            </div>

            <!-- Right Side News -->
            <div class="space-y-2">
                <!-- News Item 1 -->
                <div class="flex gap-2 group">
                    <div class="aspect-[4/3] w-48 overflow-hidden rounded-lg flex-shrink-0">
                        <img
                            src="https://placehold.co/400x300"
                            alt="News Item"
                            class="object-cover w-full h-full group-hover:scale-105 transition-transform duration-500"
                        >
                    </div>
                    <div class="flex-1">
                        <h2 class="font-semibold text-gray-900 dark:text-white group-hover:text-red-600 dark:group-hover:text-red-500 transition-colors line-clamp-2 text-lg mb-3">
                            A Quiet Moment in the Crowd: A Study in Human Behavior
                        </h2>
                        <p class="text-sm text-gray-500 dark:text-gray-400">2 hours ago</p>
                    </div>
                </div>

                <!-- News Item 2 -->
                <div class="flex gap-2 group">
                    <div class="aspect-[4/3] w-48 overflow-hidden rounded-lg flex-shrink-0">
                        <img
                            src="https://placehold.co/400x300"
                            alt="News Item"
                            class="object-cover w-full h-full group-hover:scale-105 transition-transform duration-500"
                        >
                    </div>
                    <div class="flex-1">
                        <h2 class="font-semibold text-gray-900 dark:text-white group-hover:text-red-600 dark:group-hover:text-red-500 transition-colors line-clamp-2 text-lg mb-3">
                            Romania and Bulgaria fully join Schengen area
                        </h2>
                        <p class="text-sm text-gray-500 dark:text-gray-400">3 hours ago</p>
                    </div>
                </div>

                <!-- News Item 3 -->
                <div class="flex gap-2 group">
                    <div class="aspect-[4/3] w-48 overflow-hidden rounded-lg flex-shrink-0">
                        <img
                            src="https://placehold.co/400x300"
                            alt="News Item"
                            class="object-cover w-full h-full group-hover:scale-105 transition-transform duration-500"
                        >
                    </div>
                    <div class="flex-1">
                        <h2 class="font-semibold text-gray-900 dark:text-white group-hover:text-red-600 dark:group-hover:text-red-500 transition-colors line-clamp-2 text-lg mb-3">
                            Emerging Markets Showcase Economic Growth
                        </h2>
                        <p class="text-sm text-gray-500 dark:text-gray-400">4 hours ago</p>
                    </div>
                </div>
                <!-- News Item 4 -->
                <div class="flex gap-2 group">
                    <div class="aspect-[4/3] w-48 overflow-hidden rounded-lg flex-shrink-0">
                        <img
                            src="https://placehold.co/400x300"
                            alt="News Item"
                            class="object-cover w-full h-full group-hover:scale-105 transition-transform duration-500"
                        >
                    </div>
                    <div class="flex-1">
                        <h2 class="font-semibold text-gray-900 dark:text-white group-hover:text-red-600 dark:group-hover:text-red-500 transition-colors line-clamp-2 text-lg mb-3">
                            Emerging Markets Showcase Economic Growth
                        </h2>
                        <p class="text-sm text-gray-500 dark:text-gray-400">4 hours ago</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content Container -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Trending News Section -->
        <section class="mb-12">
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-xl font-bold text-gray-900 dark:text-white">Trending News</h2>
                <a href="#" class="text-red-600 dark:text-red-500 text-sm font-medium hover:text-red-700">See More →</a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Trending News Card 1 -->
                <div class="group">
                    <div class="aspect-[4/3] overflow-hidden rounded-lg mb-3">
                        <img
                            src="https://placehold.co/400x300"
                            alt="News Item"
                            class="object-cover w-full h-full group-hover:scale-105 transition-transform duration-500"
                        >
                    </div>
                    <div class="space-y-2">
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
                </div>

                <!-- Trending News Card 2 -->
                <div class="group">
                    <div class="aspect-[4/3] overflow-hidden rounded-lg mb-3">
                        <img
                            src="https://placehold.co/400x300"
                            alt="News Item"
                            class="object-cover w-full h-full group-hover:scale-105 transition-transform duration-500"
                        >
                    </div>
                    <div class="space-y-2">
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
                </div>

                <!-- Trending News Card 3 -->
                <div class="group">
                    <div class="aspect-[4/3] overflow-hidden rounded-lg mb-3">
                        <img
                            src="https://placehold.co/400x300"
                            alt="News Item"
                            class="object-cover w-full h-full group-hover:scale-105 transition-transform duration-500"
                        >
                    </div>
                    <div class="space-y-2">
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
                </div>
            </div>
        </section>

        <!-- Latest Updates Section -->
        <section class="mb-12 bg-gray-900 dark:bg-black rounded-xl overflow-hidden">
            <div class="px-8 py-12 max-w-3xl mx-auto text-center">
                <h2 class="text-3xl font-bold text-white mb-4">
                    LATEST UPDATES ON<br>
                    <span class="text-red-600">NATIONAL GLOBAL NEWS</span>
                </h2>
                <p class="text-gray-400 mb-8">
                    DELIVERING REAL-TIME UPDATES AND THE LATEST HEADLINES DAILY
                </p>
                <div class="relative max-w-xl mx-auto">
                    <input
                        type="text"
                        placeholder="Find the topic you want here"
                        class="w-full px-6 py-4 bg-white dark:bg-gray-800 rounded-xl text-gray-900 dark:text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-red-600"
                    >
                    <button class="absolute right-2 top-1/2 -translate-y-1/2 p-2 text-gray-500 hover:text-gray-700 dark:hover:text-gray-300">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                    </button>
                </div>
            </div>
        </section>

        <!-- Latest News Section -->
        <section class="mb-12">
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-xl font-bold text-gray-900 dark:text-white">Latest News</h2>
                <a href="#" class="text-red-600 dark:text-red-500 text-sm font-medium hover:text-red-700">View All News →</a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- News Card 1 -->
                <div class="group">
                    <div class="aspect-[4/3] overflow-hidden rounded-lg mb-3">
                        <img
                            src="https://placehold.co/400x300"
                            alt="News Item"
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
                </div>

                <!-- News Card 2 -->
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
                        <span class="text-red-600 dark:text-red-500 text-sm font-medium">Culture</span>
                        <h3 class="font-semibold text-gray-900 dark:text-white group-hover:text-red-600 dark:group-hover:text-red-500 transition-colors line-clamp-2">
                            Art Festival Draws Record International Attendance
                        </h3>
                        <p class="text-sm text-gray-600 dark:text-gray-400 line-clamp-2">
                            Annual cultural event showcases diverse artistic expressions from around the world.
                        </p>
                        <div class="flex items-center text-gray-500 dark:text-gray-400 text-sm">
                            <span>6 min read</span>
                            <span class="mx-2">•</span>
                            <span>4 hours ago</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

</body>
</html>
