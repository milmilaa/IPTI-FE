<header class="bg-white shadow fixed top-0 w-full z-50">
    <div class="max-w-7xl mx-auto flex justify-between items-center px-6 py-4">

        {{-- Kiri: Nama --}}
        <div>
            <h1 class="text-lg font-semibold text-gray-800">Tedja Indonesia</h1>
            <p class="text-xs text-gray-600">Member Of EHL Certified School Network</p>
        </div>

        {{-- Tengah: Logo --}}
            <img
                fetchpriority="high"
                width="45"
                height="53.81"
                src="https://tedjaindonesia.ac.id/wp-content/uploads/2025/03/image.png"
                class="attachment-full size-full wp-image-404"
                alt="IPTI Logo"
                srcset="https://tedjaindonesia.ac.id/wp-content/uploads/2025/03/image.png 388w, https://tedjaindonesia.ac.id/wp-content/uploads/2025/03/image-251x300.png 251w"
                sizes="(max-width: 388px) 100vw, 388px"
            >
        </div>

        {{-- Kanan: Tombol --}}
        <div class="flex items-center space-x-4">
            <a href="#" class="bg-blue-900 text-white px-4 py-2 rounded-md hover:bg-blue-800 transition transform hover:scale-105 ripple">
                Download Brochure
            </a>
            <a href="#" class="text-blue-700 font-medium hover:underline transition transform hover:scale-105 ripple">
                Apply Now
            </a>
            <a href="{{ route('login') }}" 
               class="border border-gray-500 px-4 py-2 rounded-md hover:bg-gray-100 transition transform active:scale-95 hover:scale-105 ripple">
                Login
            </a>
        </div>
    </div>

    {{-- Navbar Biru --}}
    <nav class="bg-blue-900 text-white">
        <div class="max-w-7xl mx-auto flex justify-center space-x-8 px-6 py-3 text-sm font-medium">
            @php
                $menus = ['Study','Facility','Admission','Events','About Us','Contact'];
            @endphp
            @foreach($menus as $menu)
                <a href="#" class="relative group">
                    <span class="hover:text-gray-300 transition">{{ $menu }}</span>
                    <span class="absolute left-0 -bottom-1 w-0 h-0.5 bg-white transition-all group-hover:w-full"></span>
                </a>
            @endforeach
        </div>
    </nav>
</header>
