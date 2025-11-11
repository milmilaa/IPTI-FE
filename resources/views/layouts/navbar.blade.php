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
        class="px-4 py-2 hover:bg-gray-100 transition transform active:scale-95 hover:scale-105 ripple"
      >
        Login
      </a>
    </div>
  </div>

  {{-- Navbar Biru --}}
  <nav class="bg-slate-900 text-white relative border-none">
    <div
      class="max-w-7xl mx-auto flex justify-center space-x-8 px-4 py-3 text-sm font-medium border-none"
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
      <div class="relative group border-none">
        <a href="{{ $menu['route'] }}" class="block px-3 py-1 border-none">
          <span class="transition group-hover:text-orange-500 border-none">{{ $menu['name'] }}</span>
        </a>

        {{-- STUDY MENU --}}
        @if ($menu['name'] === 'Study')
        <div
          class="mega-menu absolute left-1/2 transform -translate-x-1/2 top-full mt-5 w-[1150px] bg-[#f9f9f9] shadow-2xl overflow-hidden z-50 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 ease-out border-none"
        >
          <div class="grid grid-cols-4 gap-10 px-12 py-10 text-gray-800 border-none">
            {{-- Scholarships --}}
            <div class="border-none">
              <h3 class="text-2xl font-bold text-slate-900 mb-3">Scholarships</h3>
              <img
                src="https://tedjaindonesia.ac.id/wp-content/uploads/2025/04/IMG_0233-1152x1536.jpg"
                alt="Scholarships"
                class="mb-3 w-full h-44 object-cover border-none"
              />
              <p class="text-xs leading-relaxed text-gray-700 mb-3">
                Empowering students through financial support to achieve their academic goals. Apply now and take the next step toward your future!
              </p>
              <p class="font-semibold text-gray-800">Scholarships & Financial Aid</p>
            </div>

            {{-- Study --}}
            <div class="border-none">
              <h3 class="text-xl font-bold text-slate-900 mb-3">Study</h3>
              <ul class="space-y-2 text-xs font-medium text-gray-700">
                <li><a href="#" class="hover:text-orange-500 transition border-none">Our Courses</a></li>
                <li><a href="#" class="hover:text-orange-500 transition border-none">Join Us</a></li>
              </ul>
            </div>

            {{-- Our Programs --}}
            <div class="border-none">
              <h3 class="text-xl font-bold text-slate-900 mb-3">Our Programs</h3>
              <ul class="space-y-2 text-xs font-medium text-gray-700">
                <li><a href="#" class="hover:text-orange-500 transition border-none">Tourism</a></li>
                <li><a href="#" class="hover:text-orange-500 transition border-none">Public Relations</a></li>
                <li><a href="#" class="hover:text-orange-500 transition border-none">Digital Business</a></li>
                <li><a href="#" class="hover:text-orange-500 transition border-none">Hospitality</a></li>
              </ul>
            </div>

            {{-- Facility --}}
            <div class="border-none">
              <h3 class="text-xl font-bold text-slate-900 mb-3">World Class Facility</h3>
              <img
                src="https://tedjaindonesia.ac.id/wp-content/uploads/2025/04/IMG_0211-1152x1536.jpg"
                alt="Facility"
                class="mb-3 w-full h-44 object-cover border-none"
              />
              <p class="text-xs leading-relaxed text-gray-700 mb-3">
                Experience top-tier learning environments designed to inspire innovation, excellence, and global standards.
              </p>
              <p class="font-semibold text-gray-800">Room Mock-Up Laboratory</p>
            </div>
          </div>
        </div>
        @endif

        {{-- FACILITY MENU --}}
        @if ($menu['name'] === 'Facility')
        <div
          class="mega-menu absolute left-1/2 transform -translate-x-1/2 top-full mt-5 w-[1150px] bg-[#f9f9f9] shadow-2xl overflow-hidden z-50 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 ease-out border-none"
        >
          <div class="grid grid-cols-3 gap-10 px-12 py-10 text-gray-800 border-none">
            {{-- Dormitory --}}
            <div class="border-none">
              <h3 class="text-2xl font-bold text-slate-900 mb-3">Dormitory</h3>
              <img
                src="https://tedjaindonesia.ac.id/wp-content/uploads/2025/04/IMG_0299-1152x1536.jpg"
                alt="Dormitory"
                class="mb-3 w-full h-44 object-cover border-none"
              />
              <p class="text-xs leading-relaxed text-gray-700 mb-3">
                Safe, comfortable, and convenient housing—your home away from home on campus.
              </p>
              <p class="font-semibold text-gray-800">Student Dormitory at Tedja Indonesia</p>
            </div>

            {{-- Learning Environment --}}
            <div class="border-none">
              <h3 class="text-xl font-bold text-slate-900 mb-3">Learning Environment</h3>
              <ul class="space-y-2 text-xs font-medium text-gray-700 border-none">
                <li><a href="#" class="hover:text-orange-500 transition border-none">Classroom Facilities</a></li>
                <li><a href="#" class="hover:text-orange-500 transition border-none">Laboratory Rooms</a></li>
                <li><a href="#" class="hover:text-orange-500 transition border-none">Multimedia Studio</a></li>
                <li><a href="#" class="hover:text-orange-500 transition border-none">Library & Study Area</a></li>
              </ul>
            </div>

            {{-- Gym and Gaming Room --}}
            <div class="border-none">
              <h3 class="text-xl font-bold text-slate-900 mb-3">Comfortable Space for Students</h3>
              <img
                src="https://tedjaindonesia.ac.id/wp-content/uploads/2025/04/IMG_0259-1152x1536.jpg"
                alt="Gym and Gaming Room"
                class="mb-3 w-full h-44 object-cover border-none"
              />
              <p class="text-xs leading-relaxed text-gray-700 mb-3">
                Relax, study, and connect in cozy, student-friendly environments designed for your well-being.
              </p>
              <p class="font-semibold text-gray-800">GYM and Gaming Room</p>
            </div>
          </div>
        </div>
        @endif

        {{-- ADMISSION MENU --}}
@if ($menu['name'] === 'Admission')
<div
  class="mega-menu absolute left-1/2 transform -translate-x-1/2 top-full mt-5 w-[1150px] bg-[#f9f9f9] shadow-2xl overflow-hidden z-50 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 ease-out border-none"
>
  <div class="grid grid-cols-3 gap-10 px-12 py-10 text-gray-800 border-none">

    {{-- Kiri: Gambar + Deskripsi --}}
    <div class="border-none">
      <h3 class="text-3xl font-bold text-slate-900 mb-4">Admission</h3>
      <img
        src="https://tedjaindonesia.ac.id/wp-content/uploads/2025/04/IMG_0233-1152x1536.jpg"
        alt="Admission Building"
        class="mb-4 w-full h-52 object-cover border-none"
      />
      <p class="text-xs leading-relaxed text-gray-700 mb-4">
        Start your journey with us! Join a vibrant community and unlock your future with quality education and support.
      </p>
      <p class="font-semibold text-gray-800">Admission Intake this 2025</p>
    </div>

    {{-- Tengah: Enrollment --}}
    <div class="border-none">
      <h3 class="text-2xl font-bold text-slate-900 mb-4">Enrollment</h3>
      <ul class="space-y-3 text-xs font-medium text-gray-700">
        <li><a href="#" class="hover:text-orange-500 transition border-none">Discover Our Program</a></li>
        <li><a href="#" class="hover:text-orange-500 transition border-none">What Students Say</a></li>
        <li><a href="#" class="hover:text-orange-500 transition border-none">Starts Today</a></li>
        <li><a href="#" class="hover:text-orange-500 transition border-none">Tuition Fee</a></li>
      </ul>
    </div>

    {{-- Kanan: World Class Facility --}}
    <div class="border-none">
      <h3 class="text-2xl font-bold text-slate-900 mb-4">World Class Facility</h3>
      <img
        src="https://tedjaindonesia.ac.id/wp-content/uploads/2025/04/IMG_0211-1152x1536.jpg"
        alt="World Class Facility"
        class="mb-4 w-full h-52 object-cover border-none"
      />
      <p class="text-xs leading-relaxed text-gray-700 mb-4">
        Experience top-tier learning environments designed to inspire innovation, excellence, and global standards.
      </p>
      <p class="font-semibold text-gray-800">Room Mock-Up Laboratory</p>
    </div>

  </div>
</div>
@endif

      {{-- EVENTS MENU --}}
@if ($menu['name'] === 'Events')
<div
  class="mega-menu absolute left-1/2 transform -translate-x-1/2 top-full mt-5 w-[1150px] bg-[#f9f9f9] shadow-2xl overflow-hidden z-50 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 ease-out border-none"
>
  <div class="grid grid-cols-3 gap-10 px-12 py-10 text-gray-800 border-none">

    {{-- Kiri: News & Articles --}}
    <div class="border-none">
      <h3 class="text-3xl font-bold text-slate-900 mb-4">News & Articles</h3>
      <img
        src="https://tedjaindonesia.ac.id/wp-content/uploads/2025/04/IMG_0251-1536x1152.jpg"
        alt="News & Articles"
        class="mb-4 w-full h-52 object-cover border-none transition transform hover:scale-105 duration-300"
      />
      <p class="text-xs leading-relaxed text-gray-700 mb-4">
        Stay updated with the latest stories, campus news, and inspiring articles from our community.
      </p>
      <p class="font-semibold text-gray-800">Coming Soon Events</p>
    </div>

    {{-- Tengah: Events --}}
    <div class="border-none">
      <h3 class="text-2xl font-bold text-slate-900 mb-4">Events</h3>
      <p class="text-xs text-gray-700">Up Coming Event</p>
    </div>

    {{-- Kanan: Blog --}}
    <div class="border-none">
      <h3 class="text-2xl font-bold text-slate-900 mb-4">Blog</h3>
      <img
        src="https://tedjaindonesia.ac.id/wp-content/uploads/2025/04/IMG_0236-1152x1536.jpg"
        alt="Blog"
        class="mb-4 w-full h-52 object-cover border-none transition transform hover:scale-105 duration-300"
      />
      <p class="text-xs leading-relaxed text-gray-700 mb-4">
        Explore insights, stories, and updates from campus life—written for and by our community.
      </p>
      <p class="font-semibold text-gray-800">Join Our Talkshow</p>
    </div>

  </div>
</div>
@endif

      {{-- ABOUT US MENU --}}
@if ($menu['name'] === 'About Us')
<div
  class="mega-menu absolute left-1/2 transform -translate-x-1/2 top-full mt-5 w-[1150px] bg-[#f9f9f9] shadow-2xl overflow-hidden z-50 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 ease-out border-none"
>
  <div class="grid grid-cols-3 gap-10 px-12 py-10 text-gray-800 border-none">

    {{-- Kiri: Welcome --}}
    <div class="border-none">
      <h3 class="text-3xl font-bold text-slate-900 mb-4">Welcome</h3>
      <img
  src="https://tedjaindonesia.ac.id/wp-content/uploads/2025/04/rector1-1-1202x1536.png"
  alt="Welcome Image"
  class="mb-4 w-full h-52 object-cover object-[50%_35%] border-none transition transform hover:scale-105 duration-300"
/>
      <p class="text-xs leading-relaxed text-gray-700 mb-4">
        On behalf of the Institute of Tourism Tedja Indonesia, I extend a warm greeting to you.
        It is with great pride that we present our institution, which stands at the forefront of tourism education and research in Indonesia.
      </p>
      <p class="font-semibold text-gray-800 uppercase">Dr. Ariani Kusumo Wardhani, M.D.S., CS</p>
    </div>

    {{-- Tengah: About Us --}}
    <div class="border-none">
      <h3 class="text-2xl font-bold text-slate-900 mb-4">About Us</h3>
      <ul class="space-y-3 text-xs font-medium text-gray-700 mb-8">
        <li><a href="#" class="hover:text-orange-500 transition border-none">Our Journey</a></li>
        <li><a href="#" class="hover:text-orange-500 transition border-none">The Benefits of Studying with Us</a></li>
        <li><a href="#" class="hover:text-orange-500 transition border-none">What Our Students Say</a></li>
        <li><a href="#" class="hover:text-orange-500 transition border-none">Join Us</a></li>
      </ul>

      <h3 class="text-xl font-bold text-slate-900 mb-3">Profile</h3>
      <ul class="space-y-2 text-xs font-medium text-gray-700">
        <li><a href="#" class="hover:text-orange-500 transition border-none">Greeting from Rector</a></li>
      </ul>
    </div>

    {{-- Kanan: Fine Dining Restaurant --}}
    <div class="border-none">
      <h3 class="text-2xl font-bold text-slate-900 mb-4">Fine Dining Restaurant</h3>
      <img
        src="https://tedjaindonesia.ac.id/wp-content/uploads/2025/04/IMG_0269-1152x1536.jpg"
        alt="Fine Dining Restaurant"
        class="mb-4 w-full h-52 object-cover border-none transition transform hover:scale-105 duration-300"
      />
      <p class="text-xs leading-relaxed text-gray-700 mb-4">
        Serving fresh, affordable meals for students and staff—right here on campus.
        Stop by and refuel with great food and good vibes!
      </p>
      <p class="font-semibold text-gray-800">Tedja Indonesia Restaurant</p>
    </div>

  </div>
</div>
@endif

      {{-- CONTACT MENU --}}
@if ($menu['name'] === 'Contact')
<div
  class="mega-menu absolute left-1/2 transform -translate-x-1/2 top-full mt-5 w-[1150px] bg-[#f9f9f9] shadow-2xl overflow-hidden z-50 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 ease-out border-none"
>
  <div class="grid grid-cols-3 gap-10 px-12 py-10 text-gray-800 border-none">

    {{-- Kiri: Visit Our Campus --}}
    <div class="border-none">
      <h3 class="text-3xl font-bold text-slate-900 mb-4">Visit Our Campus</h3>
      <img
        src="https://tedjaindonesia.ac.id/wp-content/uploads/2025/04/IMG_0233-1152x1536.jpg"
        alt="Visit Our Campus"
        class="mb-4 w-full h-52 object-cover border-none transition transform hover:scale-105 duration-300"
      />
      <p class="text-xs leading-relaxed text-gray-700 mb-4">
        Come see where learning comes to life! Explore our facilities, meet our community, and experience
        the campus atmosphere firsthand.
      </p>
      <p class="font-semibold text-gray-800">Admission Intake this 2025</p>
    </div>

    {{-- Tengah: Contact Links --}}
    <div class="border-none">
      <h3 class="text-2xl font-bold text-slate-900 mb-4">Contact</h3>
      <ul class="space-y-3 text-xs font-medium text-gray-700">
        <li><a href="#" class="hover:text-orange-500 transition border-none">Get In Touch</a></li>
        <li><a href="#" class="hover:text-orange-500 transition border-none">Request Information</a></li>
        <li><a href="#" class="hover:text-orange-500 transition border-none">Experience Our Campus</a></li>
      </ul>
    </div>

    {{-- Kanan: World Class Facility --}}
    <div class="border-none bg-white shadow-md p-5">
      <h3 class="text-2xl font-bold text-slate-900 mb-4">World Class Facility</h3>
      <img
        src="https://tedjaindonesia.ac.id/wp-content/uploads/2025/04/IMG_0211-1152x1536.jpg"
        alt="World Class Facility"
        class="mb-4 w-full h-52 object-cover border-none transition transform hover:scale-105 duration-300"
      />
      <p class="text-xs leading-relaxed text-gray-700 mb-4">
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
  position: fixed !important;
  left: 50% !important;
  transform: translateX(-50%) !important;
  top: 122px !important;
  background-color: #f9f9f9;
  border: none !important;
}
.group:hover .mega-menu {
  opacity: 1 !important;
  visibility: visible !important;
  transition: all 0.3s ease-in-out;
}
</style>
