<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IPTI - Tedja Indonesia</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        .ripple {
            position: relative;
            overflow: hidden;
        }
        .ripple:after {
            content: "";
            position: absolute;
            border-radius: 50%;
            width: 100px;
            height: 100px;
            background: rgba(0, 0, 0, 0.2);
            transform: scale(0);
            opacity: 0;
            pointer-events: none;
        }
        .ripple:active:after {
            transform: scale(2);
            opacity: 1;
            transition: transform 0.4s ease, opacity 0.8s ease;
            top: 50%;
            left: 50%;
            margin-left: -50px;
            margin-top: -50px;
        }
    </style>
</head>
<body class="antialiased">

    {{-- Header Atas --}}
    <header class="bg-white shadow fixed top-0 w-full z-50">
        <div class="max-w-7xl mx-auto flex justify-between items-center px-6 py-4">

            {{-- Kiri: Nama --}}
            <div class="flex items-center space-x-3">
                <div>
                    <h1 class="text-lg font-semibold text-gray-800">Tedja Indonesia</h1>
                    <p class="text-xs text-gray-600">Member Of EHL Certified School Network</p>
                </div>
            </div>

            {{-- Tengah: Logo --}}
            <div>
                <img src="{{ asset('img/logo.jpg') }}" alt="IPTI Logo" class="h-12">
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
                    <a href="#"
                       class="relative group">
                        <span class="hover:text-gray-300 transition">{{ $menu }}</span>
                        <span class="absolute left-0 -bottom-1 w-0 h-0.5 bg-white transition-all group-hover:w-full"></span>
                    </a>
                @endforeach
            </div>
        </nav>
    </header>

    {{-- Hero Section Slider --}}
    <section class="relative max-width:[1024px] h-[90vh] mt-32 overflow-hidden">
        <div class="absolute inset-0 transition-opacity duration-1000 opacity-100 slide">
            <img src="https://tedjaindonesia.ac.id/wp-content/uploads/2025/05/banner-website-revisi-scaled.png"
                 alt="Slide 1"
                 class="w-full h-full object-cover" />
        </div>
        <div class="absolute inset-0 transition-opacity duration-1000 opacity-0 slide">
            <img src="https://tedjaindonesia.ac.id/wp-content/uploads/2025/05/WhatsApp-Image-2025-05-20-at-10.41.01_a5aba900-scaled.jpg"
                 alt="Slide 2"
                 class="w-full h-full object-cover" />
        </div>
        <div class="absolute inset-0 transition-opacity duration-1000 opacity-0 slide">
            <img src="https://tedjaindonesia.ac.id/wp-content/uploads/2025/05/WhatsApp-Image-2025-05-20-at-10.41.01_72dd9cbd-scaled.jpg"
                 alt="Slide 3"
                 class="w-full h-full object-cover" />
        </div>

        {{-- tombol navigasi --}}
        <button id="prevBtn"
                class="absolute left-5 top-1/2 -translate-y-1/2 bg-black/40 text-white rounded-full p-3 hover:bg-black/60">
            &#10094;
        </button>
        <button id="nextBtn"
                class="absolute right-5 top-1/2 -translate-y-1/2 bg-black/40 text-white rounded-full p-3 hover:bg-black/60">
            &#10095;
        </button>
    </section>

    <script>
        const slides = document.querySelectorAll('.slide');
        let current = 0;
        const total = slides.length;

        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.classList.remove('opacity-100');
                slide.classList.add('opacity-0');
                if (i === index) {
                    slide.classList.remove('opacity-0');
                    slide.classList.add('opacity-100');
                }
            });
        }

        document.getElementById('nextBtn').addEventListener('click', () => {
            current = (current + 1) % total;
            showSlide(current);
        });

        document.getElementById('prevBtn').addEventListener('click', () => {
            current = (current - 1 + total) % total;
            showSlide(current);
        });

        // auto slide setiap 5 detik
        setInterval(() => {
            current = (current + 1) % total;
            showSlide(current);
        }, 5000);
    </script>
</body>
</html>
