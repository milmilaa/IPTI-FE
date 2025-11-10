<header class="bg-white shadow fixed top-0 w-full z-50">
  <div class="max-w-7xl mx-auto flex justify-between items-center px-6 py-4">
    {{-- Kiri: Nama --}}
    <div>
      <h1 class="text-lg font-semibold text-gray-800">Tedja Indonesia</h1>
      <p class="text-xs font-bold text-slate-900">
        Member Of EHL Certified School Network
      </p>
    </div>

    {{-- Tengah: Logo --}}
    <div class="flex justify-center items-center">
      <img
        fetchpriority="high"
        width="45"
        height="53.81"
        src="https://tedjaindonesia.ac.id/wp-content/uploads/2025/03/image.png"
        class="w-12 h-auto"
        alt="IPTI Logo"
      />
    </div>

    {{-- Kanan: Tombol --}}
    <div class="flex items-center space-x-3">
      <a
        href="#"
        class="bg-slate-900 text-white px-4 py-2 transition transform hover:scale-105 ripple"
      >
        Download Brochure
      </a>
      <a href="#" class="font-lg transition transform hover:scale-105 ripple">
        Apply Now
      </a>
      <a
        href="{{ route('login') }}"
        class="border border-gray-500 px-4 py-2 rounded-md hover:bg-gray-100 transition transform active:scale-95 hover:scale-105 ripple"
      >
        Login
      </a>
    </div>
  </div>

  {{-- Navbar Biru --}}
  <nav class="bg-slate-900 text-white relative">
    <div
      class="max-w-7xl mx-auto flex justify-center space-x-8 px-4 py-3 text-sm font-medium"
    >
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
      <div class="relative group">
        <a href="{{ $menu['route'] }}" class="block px-3 py-1">
          <span class="transition group-hover:text-orange-500">{{ $menu['name'] }}</span>
        </a>

        {{-- STUDY MENU --}}
        @if ($menu['name'] === 'Study')
        <div
          class="mega-menu absolute left-1/2 transform -translate-x-1/2 top-full mt-5 w-[1150px] bg-[#f9f9f9] shadow-2xl rounded-2xl overflow-hidden z-50 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 ease-out"
        >
          <div class="grid grid-cols-4 gap-10 px-12 py-10 text-gray-800">
            {{-- Scholarships --}}
            <div>
              <h3 class="text-2xl font-bold text-slate-900 mb-3">Scholarships</h3>
              <img
                src="https://tedjaindonesia.ac.id/wp-content/uploads/2025/04/IMG_0233-1152x1536.jpg"
                alt="Scholarships"
                class="rounded-md mb-3 w-full h-44 object-cover"
              />
              <p class="text-sm leading-relaxed text-gray-700 mb-3">
                Empowering students through financial support to achieve their academic goals. Apply now and take the next step toward your future!
              </p>
              <p class="font-semibold text-gray-800">Scholarships & Financial Aid</p>
            </div>

            {{-- Study --}}
            <div>
              <h3 class="text-xl font-bold text-slate-900 mb-3">Study</h3>
              <ul class="space-y-2 text-sm font-medium text-gray-700">
                <li><a href="#" class="hover:text-orange-500 transition">Our Courses</a></li>
                <li><a href="#" class="hover:text-orange-500 transition">Join Us</a></li>
              </ul>
            </div>

            {{-- Our Programs --}}
            <div>
              <h3 class="text-xl font-bold text-slate-900 mb-3">Our Programs</h3>
              <ul class="space-y-2 text-sm font-medium text-gray-700">
                <li><a href="#" class="hover:text-orange-500 transition">Tourism</a></li>
                <li><a href="#" class="hover:text-orange-500 transition">Public Relations</a></li>
                <li><a href="#" class="hover:text-orange-500 transition">Digital Business</a></li>
                <li><a href="#" class="hover:text-orange-500 transition">Hospitality</a></li>
              </ul>
            </div>

            {{-- Facility --}}
            <div>
              <h3 class="text-xl font-bold text-slate-900 mb-3">World Class Facility</h3>
              <img
                src="https://tedjaindonesia.ac.id/wp-content/uploads/2025/04/IMG_0211-1152x1536.jpg"
                alt="Facility"
                class="rounded-md mb-3 w-full h-44 object-cover"
              />
              <p class="text-sm leading-relaxed text-gray-700 mb-3">
                Experience top-tier learning environments designed to inspire innovation, excellence, and global standards.
              </p>
              <p class="font-semibold text-gray-800">Room Mock-Up Laboratory</p>
            </div>
          </div>
        </div>
        @endif
      </div>
      @endforeach
    </div>
  </nav>
</header>

<style>
/* === FIX POSISI CENTER MEGA MENU === */
nav .mega-menu {
  position: fixed !important; /* keluar dari batas max-w-7xl */
  left: 50% !important;
  transform: translateX(-50%) !important;
  top: 122px !important; /* jarak dari navbar biru */
  background-color: #f9f9f9;
}
/* Efek smooth muncul */
.group:hover .mega-menu {
  opacity: 1 !important;
  visibility: visible !important;
  transition: all 0.3s ease-in-out;
}
</style>
