@extends('layouts.frontend')

@section('content')

<!-- ✅ HERO -->
<section class="relative bg-gradient-to-br from-blue-900 via-[#0b1120] to-black py-32 text-white overflow-hidden">

    <!-- Glow -->
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[600px] h-[600px] bg-blue-500/20 blur-3xl rounded-full"></div>

    <div class="container mx-auto px-6 text-center relative z-10">

        <span class="inline-block mb-6 px-4 py-1.5 bg-white/10 text-blue-300 text-sm rounded-full border border-white/20">
            📩 Contact Us
        </span>

        <h1 class="text-4xl md:text-6xl font-extrabold mb-6">
            Let’s Build Something <span class="text-blue-400">Great Together</span>
        </h1>

        <p class="text-blue-100 text-lg max-w-xl mx-auto">
            Have a question or project? We’d love to hear from you.
        </p>

    </div>
</section>

<!-- ✅ CONTACT SECTION -->
<section class="py-24 bg-gray-50 dark:bg-[#0b1120]">
    <div class="container mx-auto px-6">

        <div class="max-w-6xl mx-auto grid lg:grid-cols-2 gap-16">

            <!-- LEFT INFO -->
            <div class="space-y-10">

                <div>
                    <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-4">
                        Get In Touch
                    </h2>
                    <p class="text-gray-600 dark:text-gray-400">
                        हाम्रो कार्यालयमा सिधै आउन सक्नुहुन्छ वा फोन/इमेल मार्फत सम्पर्क गर्न सक्नुहुन्छ।
                    </p>
                </div>

                <!-- Info Cards -->
                <div class="space-y-6">

                    <div class="flex items-start gap-4 p-5 bg-white dark:bg-white/5 rounded-2xl shadow-sm hover:shadow-md transition">
                        <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-xl flex items-center justify-center">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-900 dark:text-white">Location</h4>
                            <p class="text-sm text-gray-600">Buddhanagar, Kathmandu, Nepal</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 p-5 bg-white dark:bg-white/5 rounded-2xl shadow-sm hover:shadow-md transition">
                        <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-xl flex items-center justify-center">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-900 dark:text-white">Email</h4>
                            <p class="text-sm text-gray-600">info@intellisoftnepal.com</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 p-5 bg-white dark:bg-white/5 rounded-2xl shadow-sm hover:shadow-md transition">
                        <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-xl flex items-center justify-center">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-900 dark:text-white">Phone</h4>
                            <p class="text-sm text-gray-600">+977-01-4790617</p>
                        </div>
                    </div>

                </div>

                <!-- Quick Actions -->
                <div class="flex gap-4">
                    <a href="mailto:info@intellisoftnepal.com"
                       class="px-5 py-3 bg-blue-600 text-white rounded-xl shadow hover:bg-blue-700 transition">
                        Email Us
                    </a>
                    <a href="tel:+977014790617"
                       class="px-5 py-3 border border-gray-300 rounded-xl hover:bg-gray-100 transition">
                        Call Now
                    </a>
                </div>

            </div>

            <!-- RIGHT FORM -->
            <div class="bg-white/80 dark:bg-white/5 backdrop-blur-xl rounded-3xl shadow-2xl p-10 border">

                @if(session('success'))
                    <div class="mb-6 p-4 bg-green-50 text-green-700 rounded-xl">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                    @csrf

                    <div class="grid md:grid-cols-2 gap-6">
                        <input type="text" name="name" placeholder="Your Name"
                               class="w-full px-5 py-4 bg-gray-50 border rounded-xl focus:ring-2 focus:ring-blue-500 outline-none">

                        <input type="email" name="email" placeholder="Email Address"
                               class="w-full px-5 py-4 bg-gray-50 border rounded-xl focus:ring-2 focus:ring-blue-500 outline-none">
                    </div>

                    <textarea name="message" rows="5" placeholder="Your Message"
                              class="w-full px-5 py-4 bg-gray-50 border rounded-xl focus:ring-2 focus:ring-blue-500 outline-none"></textarea>

                    <button type="submit"
                        class="w-full bg-blue-800 text-white py-4 rounded-xl font-bold hover:bg-blue-900 transition transform hover:-translate-y-1">
                        Send Message →
                    </button>
                </form>

            </div>

        </div>

    </div>
</section>

<!-- ✅ MAP -->
<section class="h-[450px] relative">
    <iframe
        class="w-full h-full"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.9611896906517!2d85.32762207525309!3d27.687594376193903!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1990cb5e880f%3A0x8822cef894ac54f3!2sIntellisoft%20Nepal%20Pvt.%20Ltd.!5e0!3m2!1sen!2snp!4v1775107117600!5m2!1sen!2snp"
        width="600"
        height="450"
        style="border:0;"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade">
    </iframe>
</section>

<!-- ✅ CTA -->
<section class="py-20 bg-gradient-to-r from-blue-600 to-indigo-600 text-white text-center">
    <div class="container mx-auto px-6">

        <h2 class="text-3xl md:text-4xl font-extrabold mb-6">
            We respond within 24 hours 🚀
        </h2>

        <p class="mb-6 text-blue-100">
            Let’s start your digital journey today.
        </p>

        <a href="{{ route('contact') }}"
           class="bg-white text-blue-600 px-8 py-3 rounded-full font-bold hover:shadow-lg transition">
            Send a Message
        </a>

    </div>
</section>

@endsection
