@extends('layouts.frontend')

@section('content')

<!-- ✅ HERO -->
<section class="bg-white dark:bg-[#0b1120] py-24 border-b border-gray-100 dark:border-gray-800">
    <div class="container mx-auto px-6 text-center max-w-3xl">

        <h1 class="text-4xl md:text-5xl font-bold text-gray-900 dark:text-white mb-6">
            Contact Our Team
        </h1>

        <p class="text-gray-600 dark:text-gray-400 text-lg">
            Have a project in mind or need support? Our team is here to help you.
        </p>

    </div>
</section>

<!-- ✅ CONTACT -->
<section class="py-20 bg-gray-50 dark:bg-[#0b1120]">
    <div class="container mx-auto px-6">

        <div class="max-w-6xl mx-auto grid lg:grid-cols-2 gap-16">

            <!-- LEFT INFO -->
            <div class="space-y-10">

                <div>
                    <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">
                        Contact Information
                    </h2>
                    <p class="text-gray-600 dark:text-gray-400">
                        You can reach us through the following channels.
                    </p>
                </div>

                <div class="space-y-6">

                    <!-- Location -->
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 bg-blue-50 text-blue-600 rounded-lg flex items-center justify-center">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div>
                            <p class="font-medium text-gray-900 dark:text-white">Address</p>
                            <p class="text-sm text-gray-500">Buddhanagar, Kathmandu, Nepal</p>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 bg-blue-50 text-blue-600 rounded-lg flex items-center justify-center">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div>
                            <p class="font-medium text-gray-900 dark:text-white">Email</p>
                            <p class="text-sm text-gray-500">info@intellisoftnepal.com</p>
                        </div>
                    </div>

                    <!-- Phone -->
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 bg-blue-50 text-blue-600 rounded-lg flex items-center justify-center">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div>
                            <p class="font-medium text-gray-900 dark:text-white">Phone</p>
                            <p class="text-sm text-gray-500">+977-01-4790617</p>
                        </div>
                    </div>

                </div>

                <!-- Buttons -->
                <div class="flex gap-4 pt-4">
                    <a href="mailto:info@intellisoftnepal.com"
                       class="px-6 py-3 bg-blue-600 text-white rounded-lg text-sm font-semibold hover:bg-blue-700 transition">
                        Email Us
                    </a>

                    <a href="tel:+977014790617"
                       class="px-6 py-3 border border-gray-300 rounded-lg text-sm font-semibold hover:bg-gray-100 dark:hover:bg-gray-800 transition">
                        Call Now
                    </a>
                </div>

            </div>

            <!-- RIGHT FORM -->
            <div class="bg-white dark:bg-[#0f172a] rounded-2xl shadow-lg border border-gray-100 dark:border-gray-800 p-8">

                <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-6">
                    Send a Message
                </h3>

                @if(session('success'))
                    <div class="mb-6 p-4 bg-green-50 text-green-700 rounded-lg text-sm">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('contact.store') }}" method="POST" class="space-y-5">
                    @csrf

                    <!-- Name -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                            Full Name
                        </label>
                        <input type="text" name="name"
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none dark:bg-[#020617] dark:border-gray-700">
                    </div>

                    <!-- Email -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                            Email Address
                        </label>
                        <input type="email" name="email"
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none dark:bg-[#020617] dark:border-gray-700">
                    </div>

                    <!-- Message -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                            Message
                        </label>
                        <textarea name="message" rows="5"
                                  class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none dark:bg-[#020617] dark:border-gray-700"></textarea>
                    </div>

                    <!-- Button -->
                    <button type="submit"
                        class="w-full bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700 transition">
                        Send Message
                    </button>

                </form>

            </div>

        </div>

    </div>
</section>

<!-- ✅ MAP -->
<section class="h-[400px] border-t border-gray-200 dark:border-gray-800">
    <iframe
        class="w-full h-full"
        src="https://www.google.com/maps?q=Intellisoft+Nepal&output=embed"
        loading="lazy">
    </iframe>
</section>

@endsection
