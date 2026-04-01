@extends('layouts.frontend')

@section('content')
<article class="bg-white py-16">
    <div class="container mx-auto px-4 max-w-4xl">
        <div class="mb-8">
            <a href="{{ route('blogs') }}" class="text-blue-600 font-semibold inline-flex items-center hover:underline transition">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
                Back to All Blogs
            </a>
        </div>

        <h1 class="text-4xl md:text-6xl font-extrabold text-gray-900 mb-6 leading-tight">
            {{ $post->title }}
        </h1>

        <div class="flex items-center text-gray-500 mb-10 border-b pb-6">
            <div class="flex items-center">
                <svg class="w-5 h-5 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                </svg>
                <span class="font-medium">
                    {{ \Carbon\Carbon::parse($post->published_at)->format('F d, Y') }}
                </span>
            </div>
        </div>

        @if($post->thumbnail)
            <div class="rounded-3xl overflow-hidden mb-12 shadow-2xl">
                <img src="{{ asset('storage/' . $post->thumbnail) }}"
                     alt="{{ $post->title }}"
                     class="w-full h-auto object-cover max-h-[500px]">
            </div>
        @endif

        <div class="prose prose-blue prose-lg max-w-none text-gray-800 leading-relaxed font-serif">
            {!! $post->content !!}
        </div>

        <div class="mt-16 pt-8 border-t border-gray-100">
            <p class="text-gray-500 italic">Thank you for reading! Stay tuned for more updates from Intellisoft Nepal.</p>
        </div>
    </div>
</article>
@endsection
