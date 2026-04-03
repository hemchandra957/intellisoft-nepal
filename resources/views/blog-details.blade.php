@extends('layouts.frontend')

@section('content')


<section class="relative bg-gradient-to-br from-[#0b1120] via-blue-900 to-black py-28 text-white overflow-hidden">

    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[600px] h-[600px] bg-blue-500/20 blur-3xl rounded-full"></div>

    <div class="container mx-auto px-6 text-center relative z-10 max-w-4xl">



        <h1 class="text-3xl md:text-5xl font-extrabold leading-tight mb-6">
            {{ $post->title }}
        </h1>

        <div class="flex flex-wrap items-center justify-center gap-4 text-sm text-blue-200">

            <span>
                {{ \Carbon\Carbon::parse($post->published_at ?? $post->created_at)->format('F d, Y') }}
            </span>

            <span>•</span>

            <span>
                {{ ceil(str_word_count(strip_tags($post->content)) / 200) }} min read
            </span>

            <span>•</span>

            <span>Intellisoft Nepal</span>

        </div>

    </div>
</section>


<section class="py-20 bg-gray-50 dark:bg-[#0b1120]">
    <div class="container mx-auto px-6 max-w-4xl">


        @if($post->thumbnail)
            <div class="relative mb-12 group">
                <img src="{{ asset('storage/' . $post->thumbnail) }}"
                     class="w-full max-h-[500px] object-cover rounded-3xl shadow-xl group-hover:scale-[1.02] transition">

                <div class="absolute inset-0 rounded-3xl bg-gradient-to-t from-black/10 to-transparent"></div>
            </div>
        @endif


        <div class="bg-white/80 dark:bg-white/5 backdrop-blur-xl p-8 md:p-12 rounded-3xl shadow-xl border">

            <div class="prose prose-lg prose-blue max-w-none text-gray-800 dark:text-gray-200 leading-relaxed font-serif
                        prose-headings:font-bold
                        prose-h2:mt-10 prose-h2:mb-4
                        prose-p:mb-6
                        prose-img:rounded-xl
                        prose-a:text-blue-600 hover:prose-a:text-blue-800">

                {!! $post->content !!}

            </div>

        </div>


        <div class="mt-16 bg-white/80 dark:bg-white/5 backdrop-blur-xl p-6 rounded-2xl border shadow flex items-center gap-4">
            <div class="w-14 h-14 rounded-full bg-blue-600 flex items-center justify-center text-white font-bold text-xl">
                I
            </div>
            <div>
                <h4 class="font-bold text-gray-900 dark:text-white">Intellisoft Nepal</h4>
                <p class="text-sm text-gray-500">Sharing insights on technology & innovation</p>
            </div>
        </div>


        <div class="mt-16 text-center bg-gradient-to-r from-blue-600 to-indigo-600 text-white p-10 rounded-3xl shadow-lg">
            <h3 class="text-2xl font-bold mb-4">
                Want to build something like this? 🚀
            </h3>
            <p class="text-blue-100 mb-6">
                Let our team help you transform your ideas into reality.
            </p>

            <a href="{{ route('contact') }}"
               class="bg-white text-blue-600 px-8 py-3 rounded-full font-bold hover:shadow-lg transition">
                Contact Us
            </a>
        </div>


        <div class="mt-12 text-center">
            <a href="{{ route('blogs') }}"
               class="text-blue-600 font-semibold hover:underline">
                ← Back to all blogs
            </a>
        </div>

    </div>
</section>

@endsection
