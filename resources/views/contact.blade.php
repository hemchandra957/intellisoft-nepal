@extends('layouts.frontend')

@section('content')
<section class="bg-blue-900 py-24 text-white relative overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
            <path d="M0 100 C 20 0 50 0 100 100 Z" fill="white"></path>
        </svg>
    </div>
    <div class="container mx-auto px-6 text-center relative z-10">
        <h1 class="text-4xl md:text-5xl font-extrabold mb-4">Get In Touch</h1>
        <p class="text-blue-100 text-lg max-w-xl mx-auto">Have a question or a project in mind? Reach out to us and let's build something amazing together.</p>
    </div>
</section>

<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">

            <div class="space-y-12">
                <div>
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">Contact Information</h2>
                    <p class="text-gray-600 mb-8">हाम्रो कार्यालयमा सिधै आउन सक्नुहुन्छ वा फोन/इमेल मार्फत सम्पर्क गर्न सक्नुहुन्छ।</p>
                </div>

                <div class="space-y-8">
                    <div class="flex items-start gap-5">
                        <div class="w-12 h-12 bg-white shadow-md rounded-xl flex items-center justify-center text-blue-600 flex-shrink-0">
                            <i class="fas fa-map-marker-alt text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-900">Our Location</h4>
                            <p class="text-gray-600 text-sm mt-1">Shram Marg, Buddhanagar, Kathmandu, Nepal</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-5">
                        <div class="w-12 h-12 bg-white shadow-md rounded-xl flex items-center justify-center text-blue-600 flex-shrink-0">
                            <i class="fas fa-envelope text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-900">Email Address</h4>
                            <p class="text-gray-600 text-sm mt-1">info@intellisoftnepal.com</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-5">
                        <div class="w-12 h-12 bg-white shadow-md rounded-xl flex items-center justify-center text-blue-600 flex-shrink-0">
                            <i class="fas fa-phone-alt text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-900">Call Us</h4>
                            <p class="text-gray-600 text-sm mt-1">+977-01-4790617</p>
                        </div>
                    </div>
                </div>

                <div class="pt-8 flex gap-4">
                    <a href="#" class="w-10 h-10 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center hover:bg-blue-600 hover:text-white transition shadow-sm"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="w-10 h-10 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center hover:bg-blue-600 hover:text-white transition shadow-sm"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" class="w-10 h-10 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center hover:bg-blue-600 hover:text-white transition shadow-sm"><i class="fab fa-instagram"></i></a>
                </div>
            </div>

            <div class="bg-white rounded-3xl shadow-2xl p-8 md:p-12 border border-gray-100 relative">
                @if(session('success'))
                    <div class="mb-6 p-4 bg-green-50 text-green-700 rounded-2xl border border-green-100 flex items-center gap-3">
                        <i class="fas fa-check-circle"></i>
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-2">Your Name</label>
                            <input type="text" name="name" placeholder="Name" class="w-full px-5 py-4 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:bg-white outline-none transition" required>
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-2">Email Address</label>
                            <input type="email" name="email" placeholder="Email" class="w-full px-5 py-4 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:bg-white outline-none transition" required>
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-gray-700 mb-2">Message</label>
                        <textarea name="message" rows="5" placeholder="How can we help you?" class="w-full px-5 py-4 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:bg-white outline-none transition" required></textarea>
                    </div>
                    <button type="submit" class="w-full bg-blue-800 text-white font-bold py-4 rounded-xl hover:bg-blue-900 shadow-lg shadow-blue-200 transition-all transform hover:-translate-y-1 active:scale-95 flex items-center justify-center gap-2">
                        <span>Send Message</span>
                        <i class="fas fa-paper-plane text-sm"></i>
                    </button>
                </form>
            </div>

        </div>
    </div>
</section>

<section class="h-[450px] w-full bg-gray-200 relative grayscale hover:grayscale-0 transition duration-1000">
    <iframe
        class="w-full h-full grayscale hover:grayscale-0 transition duration-700"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.8465809796853!2d85.3333333!3d27.6916667!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjc°NDEnMzAuMCJOIDg1°MjAnMDAuMCJF!5e0!3m2!1sen!2snp!4v1700000000000"
        allowfullscreen=""
        loading="lazy">
    </iframe>
</section>
@endsection
