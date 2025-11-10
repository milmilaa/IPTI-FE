<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Events - Tedja Indonesia</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    />
</head>
<body class="antialiased bg-gray-50">

    {{-- Navbar --}}
    @include('layouts.navbar')

    {{-- Hero Section --}}
    <section
        class="relative bg-cover bg-center bg-no-repeat h-[90vh] flex items-center"
        style="background-image: url('https://tedjaindonesia.ac.id/wp-content/uploads/2025/04/IMG_0245-scaled.jpg');"
    >
        <!-- Overlay gelap -->
        <div class="absolute inset-0 bg-black/50"></div>

        <!-- Konten kiri -->
        <div class="relative z-10 max-w-2xl pl-12 pr-6 text-left text-white">
            <h4 class="text-white text-lg pt-12 mb-2">Explore Our Events</h4>
            <h1 class="text-[30px] font-bold text-white leading-tight mb-4">
                Upcoming Events You Don't Want to Miss
            </h1>
            <p class="text-white text-lg mb-6">
                Join us for an exciting lineup of events designed to inspire and engage.
                Discover what’s coming up at our university, from open days to industry
                talks, and take the next step in your educational journey.
            </p>
        </div>
    </section>

    {{-- Events Grid --}}
    <section class="max-w-6xl mx-auto px-6 py-16 grid md:grid-cols-2 gap-8">
        <!-- CARD 1 -->
        <a
            href="{{ url('/events/detail1') }}"
            class="relative rounded-2xl overflow-hidden shadow-md hover:shadow-lg transition-all duration-300 group block"
        >
            <img
                src="https://tedjaindonesia.ac.id/wp-content/uploads/2025/10/KERJASAMA-PERGURUAN-TINGGI-Institut-Pariwisata-Tedja-Indonesia-IPTI.jpg"
                alt="Event 1"
                class="w-full h-72 object-cover group-hover:scale-105 transition-transform duration-500"
            />
            <!-- Overlay Gradient -->
            <div class="absolute inset-0 bg-gradient-to-t from-[#0A2A5E]/90 via-[#0A2A5E]/60 to-transparent"></div>

            <!-- Text -->
            <div class="absolute bottom-0 p-6">
                <h3 class="text-white text-lg font-semibold leading-snug">
                    IPTI Tedja Indonesia Gandeng BHMS Swiss Perkuat Pendidikan dan SDM
                    Pariwisata Berstandar Global
                </h3>
            </div>
        </a>

        <!-- CARD 2 -->
        <a
            href="{{ url('/events/detail2') }}"
            class="relative rounded-2xl overflow-hidden shadow-md hover:shadow-lg transition-all duration-300 group block"
        >
            <img
                src="https://tedjaindonesia.ac.id/wp-content/uploads/2025/08/WhatsApp-Image-2025-08-04-at-18.37.59_deb8e02f.jpg.webp"
                alt="Event 2"
                class="w-full h-72 object-cover group-hover:scale-105 transition-transform duration-500"
            />
            <!-- Overlay Gradient -->
            <div class="absolute inset-0 bg-gradient-to-t from-[#0A2A5E]/90 via-[#0A2A5E]/60 to-transparent"></div>

            <!-- Text -->
            <div class="absolute bottom-0 p-6">
                <h3 class="text-white text-lg font-semibold leading-snug">
                    IPTI Tedja Indonesia Bangun Ekosistem Pendidikan Pariwisata
                    Berkualitas dan Berkelanjutan Bertaraf Global
                </h3>
            </div>
        </a>
    </section>

    {{-- Footer --}}
    <footer class="bg-white border-t border-gray-200 px-10 py-12">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Logo & Deskripsi -->
            <div>
                <div class="flex items-center gap-3 mb-4">
                    <img
                        src="https://tedjaindonesia.ac.id/wp-content/uploads/2025/03/image.png"
                        alt="Logo"
                        class="h-12"
                    />
                    <h3 class="text-2xl font-bold text-gray-900">Tedja Indonesia</h3>
                </div>
                <p class="text-gray-600 mb-6">
                    Your gateway to a global career in Tourism, Digital Business, and
                    Public Relations. Experience hands-on learning, modern facilities,
                    and industry-ready programs—all in one place.
                </p>

                <div class="flex space-x-4 text-gray-700 text-2xl">
                    <a href="#" class="hover:text-gray-900"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" class="hover:text-gray-900"><i class="fa-brands fa-tiktok"></i></a>
                    <a href="#" class="hover:text-gray-900"><i class="fa-brands fa-youtube"></i></a>
                    <a href="#" class="hover:text-gray-900"><i class="fa-brands fa-linkedin"></i></a>
                </div>
            </div>

            <!-- Spacer -->
            <div></div>

            <!-- Kontak -->
            <div>
                <h4 class="text-xl font-bold text-gray-900 mb-4">Get In Touch</h4>
                <p class="text-gray-600 mb-2 flex items-center space-x-2">
                    <i class="fa-regular fa-envelope text-[#324A6D]"></i>
                    <span>info@ipti.ac.id</span>
                </p>
                <p class="text-gray-600 mb-2 flex items-center space-x-2">
                    <i class="fa-brands fa-whatsapp text-[#324A6D]"></i>
                    <span>+62 811-1181-6036</span>
                </p>
            </div>
        </div>
    </footer>

</body>
</html>
