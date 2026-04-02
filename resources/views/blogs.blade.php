@extends('layouts.frontend')

@section('content')

<!-- ✅ HERO (Matched with Contact/Career) -->
<section class="relative bg-gradient-to-br from-[#0b1120] via-blue-900 to-black py-32 text-white overflow-hidden">

    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[600px] h-[600px] bg-blue-500/20 blur-3xl rounded-full"></div>

    <div class="container mx-auto px-6 text-center relative z-10">

        <span class="inline-block mb-6 px-4 py-1.5 bg-white/10 text-blue-300 text-sm rounded-full border border-white/20">
            ✍️ Insights & Articles
        </span>

        <h1 class="text-4xl md:text-6xl font-extrabold mb-6">
            Explore Our <span class="text-blue-400">Latest Blogs</span>
        </h1>

        <p class="text-blue-100 max-w-2xl mx-auto text-lg">
            Discover trends, tutorials, and expert insights from Intellisoft Nepal.
        </p>

    </div>
</section>

<!-- ✅ BLOG GRID -->
<section class="py-24 bg-gray-50 dark:bg-[#0b1120]">
    <div class="container mx-auto px-6">

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">

            @foreach($posts as $post)
            <div class="group relative bg-white/80 dark:bg-white/5 backdrop-blur-xl rounded-3xl overflow-hidden border border-white/10 shadow-sm hover:shadow-2xl hover:-translate-y-3 transition duration-500">

                <!-- Image -->
                <div class="relative h-56 overflow-hidden">

                    @if($post->thumbnail)
                        <img src="{{ asset('storage/' . $post->thumbnail) }}"
                             class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                    @else
                        <div class="w-full h-full bg-gray-200 flex items-center justify-center">
                            <span class="text-gray-400">No Image</span>
                        </div>
                    @endif

                    <!-- Overlay Effect -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition duration-500"></div>

                    <!-- Date -->
                    <div class="absolute top-4 left-4 bg-blue-600 text-white text-xs font-bold px-3 py-1 rounded-full shadow-lg">
                        {{ \Carbon\Carbon::parse($post->published_at ?? $post->created_at)->format('M d, Y') }}
                    </div>

                    <!-- Read Button Hover -->
                    <div class="absolute bottom-4 left-4 opacity-0 group-hover:opacity-100 transition">
                        <span class="text-white text-sm font-bold">Read Article →</span>
                    </div>

                </div>

                <!-- Content -->
                <div class="p-6">

                    <!-- Title -->
                    <a href="{{ route('blog.detail', $post->slug) }}">
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3 group-hover:text-blue-600 transition">
                            {{ $post->title }}
                        </h3>
                    </a>

                    <!-- Excerpt -->
                    <p class="text-gray-600 dark:text-gray-400 text-sm mb-5 line-clamp-3 leading-relaxed">
                        {!! Str::limit(strip_tags($post->content), 130) !!}
                    </p>

                    <!-- Meta -->
                    <div class="flex items-center justify-between text-xs text-gray-500 mb-4">
                        <span class="flex items-center gap-2">
                            🏢 Intellisoft Nepal
                        </span>
                        <span>
                            {{ ceil(str_word_count(strip_tags($post->content)) / 200) }} min read
                        </span>
                    </div>

                    <!-- Read More -->
                    <a href="{{ route('blog.detail', $post->slug) }}"
                       class="inline-flex items-center text-blue-600 font-semibold group-hover:gap-3 gap-2 transition-all">
                        Read More
                        <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>

                </div>

            </div>
            @endforeach

        </div>

        <!-- ✅ PAGINATION (Improved UI) -->
        <div class="mt-20 flex justify-center">
            <div class="bg-white/80 dark:bg-white/5 backdrop-blur-xl px-6 py-4 rounded-2xl shadow border">
                {{ $posts->links() }}
            </div>
        </div>

    </div>
</section>

<!-- ✅ CTA (Matched Style) -->
<section class="py-20 bg-gradient-to-r from-blue-600 to-indigo-600 text-white text-center">
    <div class="container mx-auto px-6">

        <h2 class="text-3xl md:text-4xl font-extrabold mb-6">
            Want to grow your business with tech? 🚀
        </h2>

        <p class="text-blue-100 mb-6">
            Let’s turn your ideas into reality with our expert solutions.
        </p>

        <a href="{{ route('contact') }}"
           class="bg-white text-blue-600 px-8 py-3 rounded-full font-bold hover:shadow-lg transition">
            Contact Us
        </a>

    </div>
</section>

@endsection
