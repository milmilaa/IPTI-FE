<header class="bg-white shadow fixed top-0 w-full z-50">
    <div class="max-w-7xl mx-auto flex justify-between items-center px-6 py-4">

        {{-- Kiri: Nama --}}
        <div>
            <h1 class="text-lg font-semibold text-gray-800">Tedja Indonesia</h1>
            <p class="text-xs font-bold text-slate-900">Member Of EHL Certified School Network</p>
        </div>

        {{-- Tengah: Logo --}}
        <div class="flex justify-center items-center">
            <img fetchpriority="high" width="45" height="53.81"
                src="https://tedjaindonesia.ac.id/wp-content/uploads/2025/03/image.png" class="w-12 h-auto"
                alt="IPTI Logo"
                srcset="https://tedjaindonesia.ac.id/wp-content/uploads/2025/03/image.png 388w, https://tedjaindonesia.ac.id/wp-content/uploads/2025/03/image-251x300.png 251w"
                sizes="(max-width: 388px) 100vw, 388px">
        </div>

        {{-- Kanan: Tombol --}}
        <div class="flex items-center space-x-3">
            <a href="#" class="bg-slate-900 text-white px-4 py-2 transition transform hover:scale-105 ripple">
                Download Brochure
            </a>
            <a href="#" class="  font-lg transition transform hover:scale-105 ripple">
                Apply Now
            </a>
            <a href="{{ route('login') }}"
                class="border border-gray-500 px-4 py-2 rounded-md hover:bg-gray-100 transition transform active:scale-95 hover:scale-105 ripple">
                Login
            </a>
        </div>
    </div>

    {{-- Navbar Biru --}}
    <nav class="bg-slate-900 text-white">
        <div class="max-w-7xl mx-auto flex justify-center space-x-8 px-6 py-3 text-sm font-medium">
            @php
                $menus = [
                    ['name' => 'Study', 'route' => route('study.program')],
                    ['name' => 'Facility', 'route' => route('facility')],
                    ['name' => 'Admission', 'route' => route('admission')],
                    ['name' => 'Events', 'route' => route('events')],
                    ['name' => 'About Us', 'route' => route('about')],
                    ['name' => 'Contact', 'route' => route('contact')],
                ];
            @endphp

            @foreach ($menus as $menu)
                <a href="{{ $menu['route'] }}" class="relative group">
                    <span class="hover:text-gray-300 transition">{{ $menu['name'] }}</span>
                    <span class="absolute left-0 -bottom-1 w-0 h-0.5 bg-white transition-all group-hover:w-full"></span>
                </a>
            @endforeach

        </div>
    </nav>
</header>
