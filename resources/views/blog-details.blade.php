@extends('layouts.frontend')

@section('content')

<article class="bg-gradient-to-b from-gray-50 to-white py-16">
    <div class="container mx-auto px-4 max-w-5xl">

        <!-- Back Button -->
        <div class="mb-10">
            <a href="{{ route('blogs') }}"
               class="inline-flex items-center text-sm font-semibold text-gray-600 hover:text-blue-600 transition-all group">
                <svg class="w-5 h-5 mr-2 transform group-hover:-translate-x-1 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
                Back to Blogs
            </a>
        </div>

        <!-- Title Section -->
        <div class="mb-8">
            <h1 class="text-4xl md:text-6xl font-extrabold text-gray-900 leading-tight mb-6 tracking-tight">
                {{ $post->title }}
            </h1>

            <!-- Meta Info -->
            <div class="flex items-center justify-between flex-wrap gap-4 text-gray-500 border-b pb-6">

                <div class="flex items-center gap-4">
                    <!-- Date -->
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-2 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        <span class="font-medium">
                            {{ \Carbon\Carbon::parse($post->published_at)->format('F d, Y') }}
                        </span>
                    </div>

                    <!-- Reading Time -->
                    <span class="text-sm bg-blue-100 text-blue-600 px-3 py-1 rounded-full font-medium">
                        {{ str_word_count(strip_tags($post->content)) / 200 < 1 ? 1 : ceil(str_word_count(strip_tags($post->content)) / 200) }} min read
                    </span>
                </div>

                <!-- Author -->
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-blue-600 flex items-center justify-center text-white font-bold shadow-md">
                        I
                    </div>
                    <span class="font-semibold text-gray-700">Intellisoft Nepal</span>
                </div>
            </div>
        </div>

        <!-- Thumbnail -->
        @if($post->thumbnail)
            <div class="relative mb-14">
                <img src="{{ asset('storage/' . $post->thumbnail) }}"
                     alt="{{ $post->title }}"
                     class="w-full max-h-[500px] object-cover rounded-3xl shadow-xl">

                <!-- Overlay Glow -->
                <div class="absolute inset-0 rounded-3xl bg-gradient-to-t from-black/10 to-transparent"></div>
            </div>
        @endif

        <!-- Blog Content -->
        <div class="prose prose-lg prose-blue max-w-none text-gray-800 leading-relaxed font-serif
                    prose-headings:font-bold
                    prose-h2:mt-10 prose-h2:mb-4
                    prose-p:mb-6
                    prose-img:rounded-xl
                    prose-a:text-blue-600 hover:prose-a:text-blue-800">

            {!! $post->content !!}

        </div>

        <!-- Footer -->
        <div class="mt-20 pt-10 border-t border-gray-200 text-center">
            <p class="text-gray-500 italic text-lg">
                ✨ Thank you for reading!
            </p>
            <p class="text-gray-400 text-sm mt-2">
                Stay tuned for more updates from <span class="font-semibold text-gray-700">Intellisoft Nepal</span>.
            </p>
        </div>

    </div>
</article>

@endsection
