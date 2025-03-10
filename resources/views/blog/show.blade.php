<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Blog Post' }} - TO.NEWS</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
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
            <!-- Back Button -->
            <a href="{{ route('home') }}" class="absolute top-8 left-8 bg-white/10 backdrop-blur-md text-white px-6 py-2 rounded-full hover:bg-white/20 transition-all">
                ← Back
            </a>
        </div>

        <!-- Right Side - Scrollable Content (60%) -->
        <div class="w-[60%] ml-[40%]">
            <div class="max-w-3xl mx-auto py-16 px-12">
                <!-- Meta Information -->
                <div class="mb-12 space-y-6">
                    <div class="flex items-center gap-4 text-sm text-gray-500 uppercase tracking-wider">
                        <span>{{ $publishedDate ?? now()->format('F d, Y') }}</span>
                        <span class="w-1 h-1 rounded-full bg-gray-300"></span>
                        <span>{{ $readingTime ?? '5 min read' }}</span>
                    </div>

                    <h1 class="text-4xl font-bold text-gray-900 dark:text-white leading-tight">
                        {{ $title ?? 'Some Questions before start website redesign project' }}
                    </h1>

                    <p class="text-xl text-gray-600 dark:text-gray-400">
                        {{ $description ?? 'Essential considerations and key questions to address before embarking on your website redesign journey.' }}
                    </p>
                </div>

                <!-- Article Content -->
                <div class="prose prose-lg dark:prose-invert max-w-none">
                    {!! $content ?? '
                    <h2>What is the urgency to redesign the website?</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>

                    <h2>Key Considerations</h2>
                    <ul>
                        <li>Current website performance metrics</li>
                        <li>User feedback and pain points</li>
                        <li>Business goals and objectives</li>
                        <li>Competition analysis</li>
                    </ul>

                    <h2>Project Timeline</h2>
                    <p>
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>' !!}
                </div>

                <!-- Tags -->
                <div class="mt-16 pt-8 border-t border-gray-100 dark:border-gray-800">
                    <div class="flex items-center gap-3">
                        <span class="text-sm font-medium text-gray-500">Tags:</span>
                        <div class="flex flex-wrap gap-2">
                            @foreach($tags ?? ['Website Design', 'UX Research', 'Planning'] as $tag)
                                <span class="px-3 py-1 text-sm bg-gray-100 dark:bg-gray-800 rounded-full">
                                    {{ $tag }}
                                </span>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
