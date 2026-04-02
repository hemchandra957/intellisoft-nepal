<div class="bg-white p-8 rounded-2xl shadow-xl border-t-8 border-cyan-600">
    <h2 class="text-2xl font-bold text-gray-800 mb-8">Please Fill Up This Form To Apply:</h2>

    <form action="{{ route('career.apply') }}" method="POST" enctype="multipart/form-data" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        @csrf
        <div class="col-span-1">
            <label class="block text-sm font-bold text-gray-700 mb-1">Full Name</label>
            <input type="text" name="full_name" required class="w-full border-gray-300 rounded-lg focus:ring-cyan-500 focus:border-cyan-500">
        </div>

        <div class="col-span-1">
            <label class="block text-sm font-bold text-gray-700 mb-1">Email</label>
            <input type="email" name="email" required class="w-full border-gray-300 rounded-lg focus:ring-cyan-500 focus:border-cyan-500">
        </div>

        <div class="col-span-1">
            <label class="block text-sm font-bold text-gray-700 mb-1">Phone Number</label>
            <input type="text" name="phone" required class="w-full border-gray-300 rounded-lg focus:ring-cyan-500 focus:border-cyan-500">
        </div>

        <div class="col-span-1">
            <label class="block text-sm font-bold text-gray-700 mb-1">Gender</label>
            <select name="gender" class="w-full border-gray-300 rounded-lg focus:ring-cyan-500 focus:border-cyan-500">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
            </select>
        </div>

        <div class="col-span-full mt-8 text-center">
            <button type="submit" class="bg-gradient-to-r from-cyan-500 to-blue-600 text-white px-12 py-4 rounded-full font-bold text-lg hover:shadow-2xl transition">
                Submit Application
            </button>
        </div>
    </form>
</div>
