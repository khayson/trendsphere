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

    <!-- Main Content Container -->
    <main class="container mx-auto px-6 py-8">
        <!-- Content sections will go here -->
    </main>

</body>
</html>
