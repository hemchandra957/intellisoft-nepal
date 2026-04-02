@extends('layouts.frontend')
@section('content')
<div class="bg-gray-50 min-h-screen pb-20">
    <div class="bg-gradient-to-r from-cyan-600 to-blue-700 py-16 text-center text-white">
        <h1 class="text-4xl md:text-5xl font-extrabold mb-4">Career at Intellisoft Nepal</h1>
        <p class="text-lg opacity-90">Join us and start your professional journey today.</p>
    </div>

    <div class="max-w-6xl mx-auto px-4 -mt-10">
        @if(session('success'))
            <div class="bg-green-500 text-white p-4 rounded-lg shadow-lg mb-6 text-center animate-bounce">
                {{ session('success') }}
            </div>
        @endif

        @if($errors->any())
            <div class="bg-red-500 text-white p-4 rounded-lg shadow-lg mb-6">
                <strong>Please fix the following errors:</strong>
                <ul class="list-disc ml-5 mt-2">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="bg-white rounded-2xl shadow-xl p-8 border border-gray-100 flex flex-col md:flex-row justify-between items-center transition hover:shadow-2xl">
            <div class="mb-6 md:mb-0 text-center md:text-left">
                <span class="bg-cyan-100 text-cyan-700 text-xs font-bold px-3 py-1 rounded-full uppercase tracking-widest">Internship</span>
                <h2 class="text-3xl font-bold text-gray-800 mt-3">Internship Program 2026</h2>
                <div class="flex flex-wrap gap-4 mt-3 text-gray-500 justify-center md:justify-start">
                    <span>📍 Kathmandu (Hybrid)</span>
                    <span>⏰ Full Time</span>
                    <span>📅 Deadline: April 30, 2026</span>
                </div>
                <p class="text-gray-600 mt-4 max-w-2xl text-lg">We are looking for passionate students for Laravel, React, and Flutter development tracks. Get hands-on experience with real projects.</p>
            </div>
            <div>
                <button onclick="toggleForm()" id="applyBtn" class="bg-cyan-600 hover:bg-cyan-700 text-white font-bold py-4 px-10 rounded-xl shadow-lg transition transform hover:scale-105">
                    Apply Now
                </button>
            </div>
        </div>

        <div id="applicationForm" class="hidden mt-12 bg-white rounded-3xl shadow-2xl overflow-hidden border border-gray-100 animate-fade-in-down">
            <div class="bg-gray-800 p-6 text-white px-10">
                <h3 class="text-2xl font-bold">Application Form</h3>
                <p class="text-gray-400 text-sm">Please provide accurate information for evaluation.</p>
            </div>

            <form action="{{ route('career.apply') }}" method="POST" enctype="multipart/form-data" class="p-8 md:p-12">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

                    <div class="col-span-full border-b pb-2 mb-2">
                        <h4 class="text-cyan-600 font-bold uppercase text-sm tracking-widest">Personal Information</h4>
                    </div>

                    <div>
                        <label class="block text-sm font-bold text-gray-700 mb-2">Full Name *</label>
                        <input type="text" name="full_name" value="{{ old('full_name') }}" required placeholder="e.g. Ram Bahadur"
                        class="w-full border-gray-200 rounded-xl focus:ring-2 focus:ring-cyan-500 py-3 @error('full_name') border-red-500 @enderror">
                        @error('full_name') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-bold text-gray-700 mb-2">Email Address *</label>
                        <input type="email" name="email" value="{{ old('email') }}" required placeholder="name@example.com"
                        class="w-full border-gray-200 rounded-xl focus:ring-2 focus:ring-cyan-500 py-3">
                    </div>

                    <div>
                        <label class="block text-sm font-bold text-gray-700 mb-2">Phone Number *</label>
                        <input type="text" name="phone" value="{{ old('phone') }}" required placeholder="98XXXXXXXX"
                        class="w-full border-gray-200 rounded-xl focus:ring-2 focus:ring-cyan-500 py-3">
                    </div>

                    <div>
                        <label class="block text-sm font-bold text-gray-700 mb-2">Gender *</label>
                        <select name="gender" class="w-full border-gray-200 rounded-xl focus:ring-2 focus:ring-cyan-500 py-3">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>

                    <div class="col-span-full border-b pb-2 mt-4 mb-2">
                        <h4 class="text-cyan-600 font-bold uppercase text-sm tracking-widest">Address & Education</h4>
                    </div>

                    <div>
                        <label class="block text-sm font-bold text-gray-700 mb-2">Province *</label>
                        <select id="province" name="province" required class="w-full border-gray-200 rounded-xl py-3"></select>
                    </div>

                    <div>
                        <label class="block text-sm font-bold text-gray-700 mb-2">District *</label>
                        <select id="district" name="district" required class="w-full border-gray-200 rounded-xl py-3"></select>
                    </div>

                    <div>
                        <label class="block text-sm font-bold text-gray-700 mb-2">Municipality/Palika *</label>
                        <input type="text" name="palika" required placeholder="e.g. Kathmandu-32" class="w-full border-gray-200 rounded-xl py-3">
                    </div>

                    <div>
                        <label class="block text-sm font-bold text-gray-700 mb-2">College/University *</label>
                        <input type="text" name="college" required placeholder="e.g. ASCOL / Patan Multiple" class="w-full border-gray-200 rounded-xl py-3">
                    </div>

                    <div>
                        <label class="block text-sm font-bold text-gray-700 mb-2">Faculty *</label>
                        <select name="faculty" class="w-full border-gray-200 rounded-xl py-3">
                            <option value="BCA">BCA</option>
                            <option value="CSIT">B.Sc. CSIT</option>
                            <option value="BIT">BIT</option>
                            <option value="BIM">BIM</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-sm font-bold text-gray-700 mb-2">Current Semester *</label>
                        <select name="semester" class="w-full border-gray-200 rounded-xl py-3">
                            @for($i=1; $i<=8; $i++) <option value="{{ $i }}">{{ $i }}th Semester</option> @endfor
                        </select>
                    </div>

                    <div>
                        <label class="block text-sm font-bold text-gray-700 mb-2">Internship Field *</label>
                        <select name="apply_for" class="w-full border-gray-200 rounded-xl py-3">
                            <option value="Laravel">Laravel (PHP)</option>
                            <option value="React">React JS</option>
                            <option value="Flutter">Flutter (Mobile)</option>
                            <option value="UI/UX">UI/UX Design</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-sm font-bold text-gray-700 mb-2">Expected Start Date *</label>
                        <input type="date" name="start_date" required class="w-full border-gray-200 rounded-xl py-3">
                    </div>

                    <div class="col-span-full border-b pb-2 mt-4 mb-2">
                        <h4 class="text-cyan-600 font-bold uppercase text-sm tracking-widest">Required Documents</h4>
                    </div>

                    <div class="lg:col-span-2">
                        <label class="block text-sm font-bold text-gray-700 mb-2">Your Photo (JPG/PNG)</label>
                        <input type="file" name="photo" class="w-full border-dashed border-2 border-gray-200 p-2 rounded-xl">
                    </div>

                    <div class="lg:col-span-2">
                        <label class="block text-sm font-bold text-gray-700 mb-2">CV / Resume (PDF Only) *</label>
                        <input type="file" name="cv" required class="w-full border-dashed border-2 border-gray-200 p-2 rounded-xl">
                        @error('cv') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>
                </div>

                <div class="mt-12 text-center">
                    <button type="submit" class="bg-gradient-to-r from-gray-800 to-gray-900 text-white px-16 py-4 rounded-full font-bold text-xl hover:shadow-2xl transition transform hover:-translate-y-1">
                        Submit My Application
                    </button>
                    <p class="text-gray-400 text-xs mt-4">By submitting, you agree to our terms and conditions.</p>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    // १. फारम देखाउने/लुकाउने एनिमेसन
    function toggleForm() {
        const form = document.getElementById('applicationForm');
        form.classList.toggle('hidden');
        if (!form.classList.contains('hidden')) {
            form.scrollIntoView({ behavior: 'smooth' });
        }
    }

    // २. नेपालको जिल्लाहरूको डेटा (Simplified)
    const data = {
        "Bagmati": ["Kathmandu", "Lalitpur", "Bhaktapur", "Chitwan", "Kavre", "Nuwakot"],
        "Gandaki": ["Kaski", "Tanahun", "Gorkha", "Syangja"],
        "Lumbini": ["Rupandehi", "Kapilvastu", "Dang", "Banke"],
        "Koshi": ["Morang", "Sunsari", "Jhapa", "Ilam"],
        "Madhesh": ["Parsa", "Dhanusha", "Bara"],
        "Karnali": ["Surkhet", "Jumla"],
        "Sudurpashchim": ["Kailali", "Kanchanpur"]
    };

    const provinceSelect = document.getElementById('province');
    const districtSelect = document.getElementById('district');

    // प्रदेशहरू भर्ने
    Object.keys(data).forEach(p => {
        let opt = document.createElement('option');
        opt.value = p; opt.innerHTML = p;
        provinceSelect.appendChild(opt);
    });

    // प्रदेश अनुसार जिल्ला फेर्ने
    provinceSelect.addEventListener('change', function() {
        districtSelect.innerHTML = '';
        data[this.value].forEach(d => {
            let opt = document.createElement('option');
            opt.value = d; opt.innerHTML = d;
            districtSelect.appendChild(opt);
        });
    });
    // Trigger initial change
    provinceSelect.dispatchEvent(new Event('change'));
</script>

<style>
    .animate-fade-in-down {
        animation: fadeInDown 0.6s ease-out;
    }
    @keyframes fadeInDown {
        0% { opacity: 0; transform: translateY(-20px); }
        100% { opacity: 1; transform: translateY(0); }
    }
</style>
@endsection
