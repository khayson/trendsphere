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
                </div>
            </div>
        </section>

        <!-- Medical Research Section -->
        <section class="mb-12 bg-gradient-to-r from-red-600 to-red-800 rounded-xl overflow-hidden">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                    <div class="space-y-6">
                        <span class="inline-block px-4 py-1 bg-white/10 text-white rounded-full text-sm font-medium">Medical Research</span>
                        <h2 class="text-3xl font-bold text-white">
                            Ground Breaking Medical Research Finds Hope for Cancer Treatment
                        </h2>
                        <p class="text-gray-200">
                            Revolutionary study reveals promising new approach to targeting cancer cells with unprecedented precision, offering hope for more effective treatments with fewer side effects.
                        </p>
                        <div class="flex items-center text-gray-200 text-sm">
                            <span>8 min read</span>
                            <span class="mx-2">•</span>
                            <span>Published 1 hour ago</span>
                        </div>
                        <div class="flex space-x-4">
                            <a href="#" class="inline-flex items-center px-6 py-3 bg-white text-red-600 rounded-lg font-medium hover:bg-gray-100 transition-colors">
                                Read Full Article
                                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </a>
                            <button class="inline-flex items-center px-6 py-3 bg-red-700 text-white rounded-lg font-medium hover:bg-red-600 transition-colors">
                                Share
                                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.367 2.684 3 3 0 00-5.367-2.684z"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="relative aspect-[4/3] rounded-xl overflow-hidden">
                        <img
                            src="https://placehold.co/800x600"
                            alt="Medical Research"
                            class="object-cover w-full h-full"
                        >
                        <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent"></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Featured News Section -->
        <section class="mb-12">
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-xl font-bold text-gray-900 dark:text-white">Featured News</h2>
                <a href="#" class="text-red-600 dark:text-red-500 text-sm font-medium hover:text-red-700">View All Featured →</a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Video Card 1 -->
                <div class="group">
                    <div class="relative aspect-video overflow-hidden rounded-lg mb-3">
                        <img
                            src="https://placehold.co/600x400"
                            alt="Video Thumbnail"
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
                </div>

                <!-- Article Card -->
                <div class="group">
                    <div class="aspect-video overflow-hidden rounded-lg mb-3">
                        <img
                            src="https://placehold.co/600x400"
                            alt="Featured Article"
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
                </div>

                <!-- Video Card 2 -->
                <div class="group">
                    <div class="relative aspect-video overflow-hidden rounded-lg mb-3">
                        <img
                            src="https://placehold.co/600x400"
                            alt="Video Thumbnail"
                            class="object-cover w-full h-full group-hover:scale-105 transition-transform duration-500"
                        >
                        <div class="absolute inset-0 bg-black/30 flex items-center justify-center">
                            <div class="w-12 h-12 rounded-full bg-white/30 flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M8 5v14l11-7z"/>
                                </svg>
                            </div>
                        </div>
                        <span class="absolute bottom-2 right-2 bg-black/70 text-white text-xs px-2 py-1 rounded">08:45</span>
                    </div>
                    <div class="space-y-2">
                        <span class="text-red-600 dark:text-red-500 text-sm font-medium">Video • Science</span>
                        <h3 class="font-semibold text-gray-900 dark:text-white group-hover:text-red-600 dark:group-hover:text-red-500 transition-colors line-clamp-2">
                            Breaking Boundaries: Latest Space Exploration Discoveries
                        </h3>
                        <p class="text-sm text-gray-600 dark:text-gray-400 line-clamp-2">
                            A comprehensive look at recent breakthroughs in space exploration and their impact on future missions.
                        </p>
                        <div class="flex items-center text-gray-500 dark:text-gray-400 text-sm">
                            <span>18K views</span>
                            <span class="mx-2">•</span>
                            <span>3 days ago</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Weekly Highlights Section -->
        <section class="mb-12">
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-xl font-bold text-gray-900 dark:text-white">Weekly Highlights</h2>
                <a href="#" class="text-red-600 dark:text-red-500 text-sm font-medium hover:text-red-700">View All Highlights →</a>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <!-- Left Column - Main Highlight -->
                <div class="group">
                    <div class="aspect-[16/9] overflow-hidden rounded-lg mb-4">
                        <img
                            src="https://placehold.co/800x450"
                            alt="Weekly Highlight"
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
                </div>

                <!-- Right Column - Highlight List -->
                <div class="space-y-6">
                    <!-- Highlight Item 1 -->
                    <div class="flex gap-4 group">
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
                    </div>

                    <!-- Highlight Item 2 -->
                    <div class="flex gap-4 group">
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
                    </div>

                    <!-- Highlight Item 3 -->
                    <div class="flex gap-4 group">
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
                    </div>

                    <!-- Highlight Item 4 -->
                    <div class="flex gap-4 group">
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
                    </div>
                </div>
            </div>
        </section>

        <!-- Weekly Fun News Section -->
        <section class="mb-12">
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-xl font-bold text-gray-900 dark:text-white">Weekly Fun News</h2>
                <a href="#" class="text-red-600 dark:text-red-500 text-sm font-medium hover:text-red-700">More Fun Stories →</a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Fun News Card 1 -->
                <div class="flex gap-6 group">
                    <div class="aspect-square w-32 sm:w-48 overflow-hidden rounded-lg flex-shrink-0">
                        <img
                            src="https://placehold.co/400x400"
                            alt="Fun News"
                            class="object-cover w-full h-full group-hover:scale-105 transition-transform duration-500"
                        >
                    </div>
                    <div class="flex-1 space-y-3">
                        <span class="text-red-600 dark:text-red-500 text-sm font-medium">Entertainment</span>
                        <h3 class="font-semibold text-gray-900 dark:text-white group-hover:text-red-600 dark:group-hover:text-red-500 transition-colors line-clamp-2 text-lg">
                            Local Cat Becomes Internet Sensation After Learning to Play Piano
                        </h3>
                        <p class="text-sm text-gray-600 dark:text-gray-400 line-clamp-3">
                            Meet Whiskers, the musical feline whose piano performances have captured hearts worldwide and garnered millions of views on social media.
                        </p>
                        <div class="flex items-center text-gray-500 dark:text-gray-400 text-sm">
                            <span>3 min read</span>
                            <span class="mx-2">•</span>
                            <span>Yesterday</span>
                        </div>
                    </div>
                </div>

                <!-- Fun News Card 2 -->
                <div class="flex gap-6 group">
                    <div class="aspect-square w-32 sm:w-48 overflow-hidden rounded-lg flex-shrink-0">
                        <img
                            src="https://placehold.co/400x400"
                            alt="Fun News"
                            class="object-cover w-full h-full group-hover:scale-105 transition-transform duration-500"
                        >
                    </div>
                    <div class="flex-1 space-y-3">
                        <span class="text-red-600 dark:text-red-500 text-sm font-medium">Lifestyle</span>
                        <h3 class="font-semibold text-gray-900 dark:text-white group-hover:text-red-600 dark:group-hover:text-red-500 transition-colors line-clamp-2 text-lg">
                            World's Largest Pizza Party Sets New Record
                        </h3>
                        <p class="text-sm text-gray-600 dark:text-gray-400 line-clamp-3">
                            Over 10,000 people gathered in the city center for a record-breaking pizza party, consuming more than 5,000 pizzas in one afternoon.
                        </p>
                        <div class="flex items-center text-gray-500 dark:text-gray-400 text-sm">
                            <span>4 min read</span>
                            <span class="mx-2">•</span>
                            <span>2 days ago</span>
                        </div>
                    </div>
                </div>

                <!-- Fun News Card 3 -->
                <div class="flex gap-6 group">
                    <div class="aspect-square w-32 sm:w-48 overflow-hidden rounded-lg flex-shrink-0">
                        <img
                            src="https://placehold.co/400x400"
                            alt="Fun News"
                            class="object-cover w-full h-full group-hover:scale-105 transition-transform duration-500"
                        >
                    </div>
                    <div class="flex-1 space-y-3">
                        <span class="text-red-600 dark:text-red-500 text-sm font-medium">Science</span>
                        <h3 class="font-semibold text-gray-900 dark:text-white group-hover:text-red-600 dark:group-hover:text-red-500 transition-colors line-clamp-2 text-lg">
                            Scientists Discover Penguins Have a Sense of Humor
                        </h3>
                        <p class="text-sm text-gray-600 dark:text-gray-400 line-clamp-3">
                            New research reveals that penguins engage in playful behavior that suggests they have their own form of comedy and entertainment.
                        </p>
                        <div class="flex items-center text-gray-500 dark:text-gray-400 text-sm">
                            <span>5 min read</span>
                            <span class="mx-2">•</span>
                            <span>3 days ago</span>
                        </div>
                    </div>
                </div>

                <!-- Fun News Card 4 -->
                <div class="flex gap-6 group">
                    <div class="aspect-square w-32 sm:w-48 overflow-hidden rounded-lg flex-shrink-0">
                        <img
                            src="https://placehold.co/400x400"
                            alt="Fun News"
                            class="object-cover w-full h-full group-hover:scale-105 transition-transform duration-500"
                        >
                    </div>
                    <div class="flex-1 space-y-3">
                        <span class="text-red-600 dark:text-red-500 text-sm font-medium">Technology</span>
                        <h3 class="font-semibold text-gray-900 dark:text-white group-hover:text-red-600 dark:group-hover:text-red-500 transition-colors line-clamp-2 text-lg">
                            Robot Learns to Tell Dad Jokes, Engineers Regret Decision
                        </h3>
                        <p class="text-sm text-gray-600 dark:text-gray-400 line-clamp-3">
                            AI researchers accidentally created a robot that won't stop telling dad jokes, leading to both amusement and mild annoyance in the lab.
                        </p>
                        <div class="flex items-center text-gray-500 dark:text-gray-400 text-sm">
                            <span>4 min read</span>
                            <span class="mx-2">•</span>
                            <span>4 days ago</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 dark:bg-black border-t border-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <!-- Top Footer Section -->
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-12 mb-12">
                <!-- Brand Column -->
                <div class="space-y-6">
                    <div class="flex items-center">
                        <span class="text-red-600 font-bold text-3xl">TO.</span>
                        <span class="font-bold text-3xl text-white">NEWS</span>
                    </div>
                    <p class="text-gray-400">
                        Your trusted source for breaking news, in-depth analysis, and unbiased reporting from around the globe.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h3 class="text-white font-semibold mb-6">Quick Links</h3>
                    <ul class="space-y-4">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">About Us</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Contact</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Careers</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Support</a></li>
                    </ul>
                </div>

                <!-- Categories -->
                <div>
                    <h3 class="text-white font-semibold mb-6">Categories</h3>
                    <ul class="space-y-4">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">World News</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Technology</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Business</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Entertainment</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Sports</a></li>
                    </ul>
                </div>

                <!-- Newsletter -->
                <div>
                    <h3 class="text-white font-semibold mb-6">Subscribe to Newsletter</h3>
                    <p class="text-gray-400 mb-4">Stay updated with our latest news and updates</p>
                    <form class="space-y-4">
                        <div class="relative">
                            <input
                                type="email"
                                placeholder="Enter your email"
                                class="w-full px-4 py-3 bg-gray-800 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-red-600"
                            >
                            <button class="absolute right-2 top-1/2 -translate-y-1/2 bg-red-600 text-white px-4 py-1 rounded-md hover:bg-red-700 transition-colors">
                                Subscribe
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Bottom Footer -->
            <div class="pt-8 border-t border-gray-800">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="text-gray-400 text-sm">
                        © 2024 TO.NEWS. All rights reserved.
                    </div>
                    <div class="flex space-x-6 md:justify-end text-sm">
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">Privacy Policy</a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">Terms of Service</a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">Cookie Policy</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>
