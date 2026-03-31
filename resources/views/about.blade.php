@extends('layouts.frontend')

@section('content')
<section class="bg-blue-900 py-20 text-white text-center">
    <h1 class="text-4xl font-bold">About Intellisoft Nepal</h1>
    <p class="mt-4 text-blue-200">Know more about our journey and our expert team.</p>
</section>

<section class="py-20 container mx-auto px-6">
    <div class="flex flex-col md:flex-row items-center gap-12">
        <div class="md:w-1/2 text-lg text-gray-600 leading-relaxed">
            <h2 class="text-3xl font-bold text-gray-900 mb-6">Our Mission</h2>
            <p class="mb-4">Intellisoft Nepal was founded with a vision to empower local businesses through cutting-edge technology. We specialize in custom software, mobile apps, and scalable web solutions.</p>
            <p>Our team of experts is dedicated to delivering excellence and innovation in every project we undertake.</p>
        </div>
        <div class="md:w-1/2">
            <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=800" class="rounded-2xl shadow-lg">
        </div>
    </div>
</section>

<section class="bg-gray-100 py-20">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold mb-12">Meet Our Expert Team</h2>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            @foreach($teamMembers as $member)
            <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition">
                <img src="{{ asset('storage/' . $member->photo) }}" class="w-24 h-24 rounded-full mx-auto mb-4 object-cover">
                <h4 class="font-bold text-lg">{{ $member->name }}</h4>
                <p class="text-blue-600 text-sm">{{ $member->designation }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
