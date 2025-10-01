<nav class="bg-white shadow fixed top-0 w-full z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20 items-center">

            {{-- Logo + Nama --}}
            <div class="flex items-center space-x-3">
                <img src="{{ asset('img/logo.jpg') }}" alt="IPTI Logo" class="h-12">
                <div>
                    <h1 class="text-lg font-semibold text-gray-800">Tedja Indonesia</h1>
                    <p class="text-xs text-gray-600">Member Of EHL Certified School Network</p>
                </div>
            </div>

            {{-- Menu Navigasi --}}
            <div class="hidden md:flex space-x-8">
                <a href="#" class="text-gray-800 hover:text-blue-600 font-medium">Study</a>
                <a href="#" class="text-gray-800 hover:text-blue-600 font-medium">Facility</a>
                <a href="#" class="text-gray-800 hover:text-blue-600 font-medium">Admission</a>
                <a href="#" class="text-gray-800 hover:text-blue-600 font-medium">Events</a>
                <a href="#" class="text-gray-800 hover:text-blue-600 font-medium">About Us</a>
                <a href="#" class="text-gray-800 hover:text-blue-600 font-medium">Contact</a>
            </div>

            {{-- Tombol Aksi --}}
            <div class="flex space-x-4">
                <a href="#" class="bg-blue-900 text-white px-4 py-2 rounded-md hover:bg-blue-800 transition">Download Brochure</a>
                <a href="#" class="text-blue-700 font-medium hover:underline">Apply Now</a>
                <a href="{{ route('login') }}" class="border border-gray-500 px-4 py-2 rounded-md hover:bg-gray-100">Login</a>
            </div>
        </div>
    </div>

    {{-- Line menu bawah --}}
    <div class="bg-blue-900 text-white">
        <div class="max-w-7xl mx-auto flex space-x-8 px-6 py-2 text-sm font-medium">
            <a href="#" class="hover:text-gray-300">Study</a>
            <a href="#" class="hover:text-gray-300">Facility</a>
            <a href="#" class="hover:text-gray-300">Admission</a>
            <a href="#" class="hover:text-gray-300">Events</a>
            <a href="#" class="hover:text-gray-300">About Us</a>
            <a href="#" class="hover:text-gray-300">Contact</a>
        </div>
    </div>
</nav>
