@extends('layouts.frontend')

@section('content')
<div class="bg-gray-50 py-16">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Our Latest Blogs</h1>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Stay updated with the latest news, insights, and tech trends from Intellisoft Nepal.
            </p>
            <div class="w-24 h-1 bg-blue-600 mx-auto mt-6 rounded-full"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($posts as $post)
            <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition duration-300 border border-gray-100 group">
                <div class="relative h-56 overflow-hidden">
                    @if($post->thumbnail)
                        <img src="{{ asset('storage/' . $post->thumbnail) }}"
                             alt="{{ $post->title }}"
                             class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                    @else
                        <div class="w-full h-full bg-gray-200 flex items-center justify-center">
                            <span class="text-gray-400">No Image</span>
                        </div>
                    @endif

                    <div class="absolute top-4 left-4 bg-blue-600 text-white text-xs font-bold px-3 py-1 rounded-full shadow-lg">
                        @if($post->published_at)
                            {{ \Carbon\Carbon::parse($post->published_at)->format('M d, Y') }}
                        @else
                            {{ $post->created_at->format('M d, Y') }}
                        @endif
                    </div>
                </div>

                <div class="p-6">
                    <a href="{{ route('blog.detail', $post->slug) }}">
                        <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-blue-600 transition duration-300">
                            {{ $post->title }}
                        </h3>
                    </a>
                    <div class="text-gray-600 text-sm mb-4 line-clamp-3">
                        {!! Str::limit(strip_tags($post->content), 120) !!}
                    </div>

                    <a href="{{ route('blog.detail', $post->slug) }}" class="inline-flex items-center text-blue-600 font-semibold hover:underline">
                        Read More
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
            </div>
            @endforeach
        </div>

        <div class="mt-12">
            {{ $posts->links() }}
        </div>
    </div>
</div>
@endsection
