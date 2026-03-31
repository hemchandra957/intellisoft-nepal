@extends('layouts.frontend')

@section('content')
<section class="bg-blue-900 py-20 text-white text-center">
    <h1 class="text-4xl font-bold">Contact Us</h1>
    <p class="mt-4 text-blue-200">Have a project in mind? Let's talk!</p>
</section>

<section class="py-20 container mx-auto px-6">
    <div class="max-w-4xl mx-auto bg-white rounded-3xl shadow-xl overflow-hidden flex flex-col md:flex-row">
        <div class="md:w-1/3 bg-blue-800 p-10 text-white">
            <h3 class="text-2xl font-bold mb-6">Info</h3>
            <div class="space-y-6">
                <p><i class="fas fa-map-marker-alt mr-3"></i> Kathmandu, Nepal</p>
                <p><i class="fas fa-phone mr-3"></i> +977-98XXXXXXXX</p>
                <p><i class="fas fa-envelope mr-3"></i> info@intellisoft.com</p>
            </div>
        </div>

        <div class="md:w-2/3 p-10">
            @if(session('success'))
                <div class="bg-green-100 text-green-700 p-4 rounded-lg mb-6">{{ session('success') }}</div>
            @endif

            <form action="{{ route('contact.store') }}" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label class="block text-sm font-bold text-gray-700">Full Name</label>
                    <input type="text" name="name" class="w-full mt-1 p-3 border rounded-lg focus:ring-2 focus:ring-blue-500" required>
                </div>
                <div>
                    <label class="block text-sm font-bold text-gray-700">Email Address</label>
                    <input type="email" name="email" class="w-full mt-1 p-3 border rounded-lg focus:ring-2 focus:ring-blue-500" required>
                </div>
                <div>
                    <label class="block text-sm font-bold text-gray-700">Message</label>
                    <textarea name="message" rows="4" class="w-full mt-1 p-3 border rounded-lg focus:ring-2 focus:ring-blue-500" required></textarea>
                </div>
                <button type="submit" class="w-full bg-blue-900 text-white font-bold py-4 rounded-lg hover:bg-blue-800 transition">Send Message</button>
            </form>
        </div>
    </div>
</section>
@endsection
