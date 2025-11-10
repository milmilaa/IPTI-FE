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
  <style>
    /* Animasi Fade In Halus */
    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(30px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .fade-in {
      animation: fadeInUp 1s ease-out forwards;
    }

    .fade-in-delay {
      animation: fadeInUp 1.3s ease-out forwards;
    }

    .fade-in-slow {
      animation: fadeInUp 1.6s ease-out forwards;
    }

    /* Hover & animasi lembut untuk News Item (sama persis kayak file sebelumnya) */
    .news-item {
      transition: all 0.3s ease;
    }

    .news-item:hover {
      transform: scale(1.02);
      background-color: #f9fafb;
    }

    .news-item:active {
      transform: scale(0.97);
      filter: brightness(0.85);
      transition: all 0.1s ease;
    }

    html {
      scroll-behavior: smooth;
    }
  </style>
</head>
<body class="antialiased bg-gray-50">

  {{-- Navbar --}}
  @include('layouts.navbar')

  <!-- Bottom Nav -->
  <nav class="bg-[#0A2A5E]">
    <ul class="flex justify-center gap-8 text-white text-sm py-3 font-medium">
      <li><a href="#" class="hover:text-gray-300 transition">Study</a></li>
      <li><a href="#" class="hover:text-gray-300 transition">Facility</a></li>
      <li><a href="#" class="hover:text-gray-300 transition">Admission</a></li>
      <li><a href="#" class="hover:text-gray-300 transition text-orange-400">Events</a></li>
      <li><a href="#" class="hover:text-gray-300 transition">About Us</a></li>
      <li><a href="#" class="hover:text-gray-300 transition">Contact</a></li>
    </ul>
  </nav>

  {{-- Hero Section --}}
  <section
    class="relative bg-cover bg-center h-[90vh] flex items-center justify-center fade-in"
    style="background-image: url('https://tedjaindonesia.ac.id/wp-content/uploads/2025/10/KERJASAMA-PERGURUAN-TINGGI-Institut-Pariwisata-Tedja-Indonesia-IPTI.jpg');"
  >
    <div class="absolute inset-0 bg-gradient-to-b from-[#0A1F44] via-[#1E3A8A]/80 to-[#60A5FA]/25"></div>

    <div class="relative z-10 max-w-4xl text-center text-white px-6">
      <h1 class="text-2xl md:text-4xl font-semibold leading-snug tracking-tight drop-shadow-[0_3px_6px_rgba(0,0,0,0.3)] font-[Poppins]">
        IPTI Tedja Indonesia Gandeng BHMS Swiss Perkuat Pendidikan
        dan SDM Pariwisata Berstandar Global
      </h1>
    </div>
  </section>

  {{-- Detail Konten --}}
  <section class="max-w-7xl mx-auto px-6 py-16 grid md:grid-cols-3 gap-10">
    <!-- Kiri: Gambar dan Konten Utama -->
    <div class="md:col-span-2 bg-white rounded-2xl shadow-md overflow-hidden">
      <img
        src="https://tedjaindonesia.ac.id/wp-content/uploads/2025/10/KERJASAMA-PERGURUAN-TINGGI-Institut-Pariwisata-Tedja-Indonesia-IPTI.jpg"
        alt="Detail Event"
        class="w-full h-[450px] object-cover"
      />

      <!-- Kalender dan tanggal di bawah gambar -->
      <div class="flex items-center gap-2 text-[#1E3A8A] text-sm font-medium px-8 mt-3">
        <i class="fa-regular fa-calendar"></i>
        <span>Oktober 29, 2025</span>
      </div>

      <div class="p-8">
        <p class="text-gray-700 leading-relaxed mb-6">
          Institut Pariwisata Tedja Indonesia (IPTI) terus memperkuat komitmennya dalam membangun
          ekosistem pendidikan pariwisata yang berkualitas dan berkelanjutan bertaraf global.
          Melalui kolaborasi dengan berbagai institusi internasional, IPTI menghadirkan kurikulum
          yang relevan dengan kebutuhan industri pariwisata modern.
        </p>
        <p class="text-gray-700 leading-relaxed mb-6">
          Acara ini menghadirkan berbagai tokoh penting di bidang pendidikan dan industri, serta
          menjadi wadah diskusi untuk menciptakan inovasi baru dalam pengembangan SDM pariwisata
          Indonesia yang siap bersaing di kancah global.
        </p>
        <p class="text-gray-700 leading-relaxed">
          Dengan pendekatan “hands-on learning”, mahasiswa IPTI tidak hanya dibekali teori tetapi
          juga pengalaman praktis yang relevan di dunia nyata, mendukung visi menjadi perguruan
          tinggi unggulan di bidang pariwisata dan bisnis internasional.
        </p>
      </div>
    </div>

    <!-- Kanan: Sidebar News -->
    <div class="bg-stone-50/10 backdrop-blur-sm rounded-2xl shadow-md p-6 h-fit">
      <h4 class="text-lg font-semibold text-[#0A2A5E] mb-4 border-b-2 border-[#f97316] pb-2">
        News
      </h4>

      <div class="space-y-5 overflow-y-auto max-h-[1100px] pr-1">

        <!-- Item 1 -->
        <a href="https://www.tribunnews.com/nasional/7747563/perguruan-tinggi-vokasi-didorong-cetak-tenaga-profesional-pariwisata-berkelas-dunia" 
           target="_blank"
           class="flex gap-3 items-start p-2 rounded-lg transition duration-300 news-item">
          <img
            src="https://asset-2.tribunnews.com/tribunnews/foto/bank/images/KERJASAMA-PERGURUAN-TINGGI-Institut-Pariwisata-Tedja-Indonesia-IPTI.jpg"
            class="w-24 h-20 object-cover rounded-md"
          />
          <div>
            <p class="text-[13px] text-gray-800 font-semibold italic leading-snug mb-1">
              Perguruan Tinggi Vokasi Didorong Cetak Tenaga Profesional Pariwisata Berkelas Dunia.
            </p>
            <span class="text-[12px] text-gray-500 font-semibold">
              “PT Vokasi Siap Cetak Profesional Pariwisata Berkelas Dunia”
            </span>
          </div>
        </a>

        <!-- Item 2 -->
        <a href="https://www.antaranews.com/berita/5203153/ipti-bhms-swiss-wujudkan-pendidikan-pariwisata-berstandar-global" 
           target="_blank"
           class="flex gap-3 items-start p-2 rounded-lg transition duration-300 news-item">
          <img
            src="https://asset-2.tribunnews.com/tribunnews/foto/bank/images/KERJASAMA-PERGURUAN-TINGGI-Institut-Pariwisata-Tedja-Indonesia-IPTI.jpg"
            class="w-24 h-20 object-cover rounded-md"
          />
          <div class="flex-1">
            <p class="text-[13px] text-gray-800 font-semibold italic leading-tight mb-1">
              IPTI-BHMS Swiss Wujudkan Pendidikan Pariwisata Berstandar Global.
            </p>
            <span class="text-[12px] text-gray-500 font-semibold">
              “Pendidikan Pariwisata dengan Standar Global”
            </span>
          </div>
        </a>

        <!-- Item 3 -->
        <a href="https://www.jawapos.com/pendidikan/016756440/gandeng-sekolah-perhotelan-dari-swiss-dorong-pendidikan-pariwisata-berstandar-global" 
           target="_blank"
           class="flex gap-3 items-start p-2 rounded-lg transition duration-300 news-item">
          <img
            src="https://asset-2.tribunnews.com/tribunnews/foto/bank/images/KERJASAMA-PERGURUAN-TINGGI-Institut-Pariwisata-Tedja-Indonesia-IPTI.jpg"
            class="w-24 h-20 object-cover rounded-md"
          />
          <div class="flex-1">
            <p class="text-[13px] text-gray-800 font-semibold italic leading-tight mb-1">
              Gandeng Sekolah Perhotelan dari Swiss, Dorong Pendidikan Pariwisata Berstandar Global.
            </p>
            <span class="text-[12px] text-gray-500 font-semibold">
              “Kerjasama Pendidikan Pariwisata Berstandar Global”
            </span>
          </div>
        </a>

        <!-- Item 4 -->
        <a href="https://www.viva.co.id/gaya-hidup/1838103-ipti-gandeng-bhms-swiss-perkuat-pendidikan-pariwisata-berstandar-global"
           target="_blank"
           class="flex gap-3 items-start p-2 rounded-lg transition duration-300 news-item">
          <img
            src="https://thumb.viva.co.id/media/frontend/thumbs3/2025/10/27/68ff1b5196093-ipti-jalin-kerja-sama-internasional-dengan-bhms-swiss_1265_711.webp"
            class="w-24 h-20 object-cover rounded-md"
          />
          <div class="flex-1">
            <p class="text-[13px] text-gray-800 font-semibold italic leading-tight mb-1">
              IPTI Gandeng BHMS Swiss Perkuat Pendidikan Pariwisata Berstandar Global.
            </p>
            <span class="text-[12px] text-gray-500 font-semibold">
              “IPTI × BHMS Swiss: Pendidikan Pariwisata Internasional”
            </span>
          </div>
        </a>

        <!-- Item 5 -->
        <a href="https://www.medcom.id/nasional/index.php/peristiwa/VNnwBv2b-ipti-gandeng-bhms-swiss-perkuat-daya-saing-sdm-pariwisata-indonesia"
           target="_blank"
           class="flex gap-3 items-start p-2 rounded-lg transition duration-300 news-item">
          <img
            src="https://cdn.medcom.id/dynamic/content/2025/10/28/1786121/DFP9v5adsS.jpeg?w=1024"
            class="w-24 h-20 object-cover rounded-md"
          />
          <div class="flex-1">
            <p class="text-[13px] text-gray-800 font-semibold italic leading-tight mb-1">
              IPTI Gandeng BHMS Swiss Perkuat Daya Saing SDM Pariwisata Indonesia.
            </p>
            <span class="text-[12px] text-gray-500 font-semibold">
              “Peningkatan SDM Pariwisata Indonesia melalui Kolaborasi Internasional”
            </span>
          </div>
        </a>

      </div>
    </div>
  </section>

</body>
</html>
