<section class="mb-12 bg-gray-100 dark:bg-gray-800 rounded-lg p-8">
    <div class="max-w-3xl mx-auto text-center">
        <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">
            Stay Updated with TO.NEWS
        </h2>
        <p class="text-gray-600 dark:text-gray-400 mb-6">
            Get the latest medical news and health updates delivered directly to your inbox.
        </p>
        @if(session('success'))
            <div class="mb-4 p-4 bg-green-100 text-green-700 rounded-lg">
                {{ session('success') }}
            </div>
        @endif
        @error('email')
            <div class="mb-4 p-4 bg-red-100 text-red-700 rounded-lg">
                {{ $message }}
            </div>
        @enderror
        <form action="{{ route('newsletter.subscribe') }}" method="POST" class="flex gap-4 max-w-md mx-auto">
            @csrf
            <input
                type="email"
                name="email"
                placeholder="Enter your email"
                class="flex-1 rounded-lg border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white focus:ring-red-500 focus:border-red-500"
                required
            >
            <button
                type="submit"
                class="px-6 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition-colors"
            >
                Subscribe
            </button>
        </form>
    </div>
</section>
