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
                            <span>Yesterday</span>
                        </div>
                        <div class="flex space-x-4">
                            <a href="{{ route('blog.show', ['slug' => 'ground-breaking-medical-research']) }}" class="inline-flex items-center px-6 py-3 bg-white text-red-600 rounded-lg font-medium hover:bg-gray-100 transition-colors">
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
