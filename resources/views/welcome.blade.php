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
    @include('components.landing.Off-canvasMenu')

    <!-- Header -->
    @include('components.landing.Header')

    <!-- Breaking News Banner -->
    @include('components.landing.BreakingNews')

    <!-- Hero Section -->
    <x-landing.hero />

    <!-- Main Content Container -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Trending News Section -->
        <x-landing.TrendingNews />

        <!-- Latest Updates Section -->
        <x-landing.latest-updates />

        <!-- Latest News Section -->
        <x-landing.latest-news />

        <!-- Medical Research Section -->
        <x-landing.medical-research />

        <!-- Featured News Section -->
        <x-landing.featured-news />

        <!-- Weekly Highlights Section -->
        @include('components.landing.WeeklyHighlights')

        <!-- Weekly Fun News Section -->
        @include('components.landing.WeeklyFunNews')

        <!-- Video News Section -->
        <x-landing.video-news />
    </main>

    <!-- Footer -->
    @include('components.landing.Footer')

</body>
</html>
