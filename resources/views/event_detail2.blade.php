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
    /* Animasi fade dan slide */
    @keyframes fadeInUp {
      0% {
        opacity: 0;
        transform: translateY(30px);
      }
      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes fadeIn {
      from { opacity: 0; }
      to { opacity: 1; }
    }

    /* Tambahan class animasi */
    .animate-fadeInUp {
      animation: fadeInUp 1s ease-out forwards;
    }

    .animate-fadeIn {
      animation: fadeIn 1.2s ease-out forwards;
    }

    /* Hover lembut untuk News */
    .news-item {
      transition: all 0.3s ease;
    }

    .news-item:hover {
      transform: scale(1.02);
      background-color: #f9fafb;
    }

    /* Efek klik halus (scale + redup sebentar) */
    .news-item:active {
      transform: scale(0.97);
      filter: brightness(0.85);
      transition: all 0.1s ease;
    }

    /* Scroll lembut */
    html {
      scroll-behavior: smooth;
    }
  </style>
</head>

<body class="antialiased bg-gray-50">

  {{-- Navbar --}}
  @include('layouts.navbar')

  <!-- Bottom Nav -->
  <nav class="bg-[#0A2A5E] animate-fadeIn">
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
    class="relative bg-cover bg-center h-[90vh] flex items-center justify-center animate-fadeInUp"
    style="background-image: url('https://tedjaindonesia.ac.id/wp-content/uploads/2025/08/WhatsApp-Image-2025-08-04-at-18.37.59_deb8e02f.jpg.webp');"
  >
    <!-- Gradasi seperti di foto -->
    <div class="absolute inset-0 bg-gradient-to-b from-[#0A1F44] via-[#1E3A8A]/80 to-[#60A5FA]/25"></div>

    <div class="relative z-10 max-w-4xl text-center text-white px-6">
      <h1 class="text-2xl md:text-4xl font-semibold leading-snug tracking-tight drop-shadow-[0_3px_6px_rgba(0,0,0,0.3)] font-[Poppins]">
        IPTI Tedja Indonesia Bangun Ekosistem Pendidikan Pariwisata
        Berkualitas dan Berkelanjutan Bertaraf Global
      </h1>
    </div>
  </section>

  {{-- Detail Konten --}}
  <section class="max-w-7xl mx-auto px-6 py-16 grid md:grid-cols-3 gap-10">
    <!-- Kiri: Gambar dan Konten Utama -->
    <div class="md:col-span-2 bg-white rounded-2xl shadow-md overflow-hidden">
      <img
        src="https://tedjaindonesia.ac.id/wp-content/uploads/2025/08/WhatsApp-Image-2025-08-04-at-18.37.59_deb8e02f.jpg.webp"
        alt="Detail Event"
        class="w-full h-[450px] object-cover"
      />

      <!-- Kalender dan tanggal di bawah gambar -->
      <div class="flex items-center gap-2 text-[#1E3A8A] text-sm font-medium px-8 mt-3">
        <i class="fa-regular fa-calendar"></i>
        <span>August 20, 2025</span>
      </div>

      <div class="p-8 leading-relaxed text-gray-700 space-y-6">
        <p>
          Dalam acara yang menandai hadirnya lembaga pendidikan tinggi baru tersebut, Rektor IPTI Dr. Ariani Kusumo Wardhani, menyampaikan bahwa pendidikan tinggi harus mampu menjawab dinamika industri, tantangan global, serta tuntutan sosial melalui pendekatan yang terintegrasi.
        </p>
        <p>
          “Momen ini bukan sekadar seremonial, tetapi langkah awal yang penting dalam perjalanan kami membentuk generasi pelaku pariwisata, komunikasi, dan bisnis digital yang adaptif, kompeten, dan berdampak,” ujar Ariani. IPTI, lanjutnya, mengusung kurikulum berstandar internasional, fasilitas berbasis teknologi, dan orientasi keberlanjutan sebagai pilar utama pendidikan.
        </p>
        <p>
          Open House ini juga memperkenalkan tiga program studi unggulan: Pariwisata, Public Relations, dan Bisnis Digital. Ketiganya dirancang secara interdisipliner dengan menekankan literasi teknologi, wawasan budaya lokal, dan kesiapan global.
        </p>
        <p>
          Ketua Yayasan Menara Bhakti Nurani Pujiastuti, Dipl.FM, menegaskan bahwa pendirian IPTI merupakan wujud tanggung jawab dalam memperluas akses pendidikan tinggi yang relevan dengan kebutuhan industri. “Kami memahami pentingnya membangun institusi yang tidak hanya mengedepankan kualitas akademis, tetapi juga relevansi terhadap kebutuhan industri. Sektor pariwisata tidak hanya menjadi tulang punggung ekonomi nasional, tetapi juga jendela kebudayaan bangsa ke dunia, dan kami ingin mengambil peran strategis di dalamnya melalui Tedja Indonesia,” kata Nurani.
        </p>
        <p>
          Kepala LLDikti Wilayah III, yang diwakili Tri Munanto., menyampaikan apresiasi atas pendekatan kontekstual dan kolaboratif yang diusung IPTI. Menurutnya, pendidikan tinggi yang mengedepankan kekayaan budaya lokal dan kemitraan industri akan semakin relevan dalam menghadapi tantangan pariwisata masa depan.
        </p>
        <p>
          Dalam kesempatan itu, IPTI menandatangani nota kesepahaman dengan Mandarin Oriental Jakarta, The Dharmawangsa Jakarta, dan Raffles Hotel Jakarta. Kolaborasi ini mencakup praktik kerja, penyusunan kurikulum aplikatif, dan jalur rekrutmen profesional.
        </p>
        <p>
          Sesi talkshow yang menjadi bagian dari Open House turut menghadirkan berbagai pemangku kepentingan. Dr. Masruroh menekankan pentingnya bekal soft skills dan service mindset bagi lulusan pariwisata. “Mereka harus mampu berpikir strategis dan menjadi agen pemberdayaan budaya lokal,” ujarnya.
        </p>
        <p>
          F.A. Bayu Satya Wijaya dari Astra Honda Motor menyoroti pentingnya pemahaman terhadap produk dan pelanggan. “Mahasiswa perlu belajar mengenali produk secara menyeluruh agar bisa disampaikan dengan tepat kepada pelanggan. Gunakan berbagai platform digital dan offline untuk mengumpulkan dan menganalisis data pelanggan, lalu pastikan strategi pemasaran benar-benar menyasar target yang tepat,” ujarnya.
        </p>
        <p>
          Direktur Non Akademik IPTI, Dr. Zairil, M.M., menambahkan bahwa institusinya mendukung keseimbangan antara kehidupan akademik dan pengembangan diri. “Kami menyediakan ruang bagi mahasiswa untuk tumbuh secara utuh, baik akademis maupun sosial,” katanya.
        </p>
        <p>
          Kegiatan Open House ditutup dengan sesi Campus Tour yang mengajak tamu undangan, calon mahasiswa, dan guru pendamping menjelajahi fasilitas kampus dan berdialog langsung dengan pimpinan program studi. (*)
        </p>
      </div>
    </div>

    <!-- Kanan: Sidebar News -->
    <div class="bg-stone-50/10 backdrop-blur-sm rounded-2xl shadow-md p-6 h-fit animate-fadeIn">
      <h4 class="text-lg font-semibold text-[#0A2A5E] mb-4 border-b-2 border-[#f97316] pb-2">
        News
      </h4>

      <div class="space-y-5 max-h-[1100px] pr-1">
        <!-- Template item -->
        <a href="https://m.antaranews.com/amp/berita/5014205/ipti-tekankan-pentingnya-pendidikan-yang-berorientasi-pada-kualitas"
           target="_blank"
           class="flex gap-3 items-start hover:bg-gray-50 p-2 rounded-lg transition duration-300 news-item">
          <img
            src="https://tedjaindonesia.ac.id/wp-content/uploads/2025/08/WhatsApp-Image-2025-08-04-at-18.37.59_deb8e02f.jpg.webp"
            class="w-24 h-20 object-cover rounded-md"
          />
          <div>
            <p class="text-[13px] text-gray-800 font-semibold italic leading-snug mb-1">
              “IPTI tekankan pentingnya pendidikan yang berorientasi pada kualitas dan membangun masa depan pariwisata lewat pendidikan berkualitas dan berkelanjutan.”
            </p>
            <span class="text-[12px] text-gray-500">ANTARA News</span>
          </div>
        </a>

        <a href="https://jabar.viva.co.id/amp/news/46033-3-jurusan-baru-yang-lulusannya-diburu-industri-cek-kampusnya?page=1"
           target="_blank"
           class="flex gap-3 items-start hover:bg-gray-50 p-2 rounded-lg transition duration-300 news-item">
          <img
            src="https://thumb.viva.id/vivajabar/1265x711/2025/07/31/688b514d2e48c-mahasiswa_jabar.jpg"
            class="w-24 h-20 object-cover rounded-md"
          />
          <div class="flex-1">
            <p class="text-[13px] text-gray-800 font-semibold italic leading-tight mb-1">
              “IPTI Resmi Diperkenalkan ke Publik.”
            </p>
            <p class="text-[12px] text-gray-600 leading-snug mb-1">
              Kampus masa depan: Kolaborasi kualitas, teknologi, dan keberlanjutan.
            </p>
            <span class="text-[12px] text-gray-500">Viva Jabar</span>
          </div>
        </a>

        <a href="https://nasional.sindonews.com/newsread/1602135/15/hadapi-tantangan-pariwisata-ipti-kedepankan-kekayaan-budaya-lokal-dan-kemitraan-industri-1754305726"
           target="_blank"
           class="flex gap-3 items-start hover:bg-gray-50 p-2 rounded-lg transition duration-300 news-item">
          <img
            src="https://pict.sindonews.net/webp/480/pena/news/2025/08/04/15/1602135/hadapi-tantangan-pariwisata-ipti-kedepankan-kekayaan-budaya-lokal-dan-kemitraan-industri-evd.webp"
            class="w-24 h-20 object-cover rounded-md"
          />
          <div class="flex-1">
            <p class="text-[13px] text-gray-800 font-semibold italic leading-tight mb-1">
              “Hadapi tantangan pariwisata, IPTI kedepankan kekayaan budaya lokal dan kemitraan industri”
            </p>
            <p class="text-[12px] text-gray-600 leading-snug mb-1">
              IPTI: Melestarikan Budaya Lokal, Memperkuat Kemitraan Industri dalam Menghadapi Tantangan Pariwisata.
            </p>
            <span class="text-[12px] text-gray-500">Sindo News</span>
          </div>
        </a>

        <a href="https://www.jurnas.com/mobile/artikel/1644195/IPTI-Membangun-Ekosistem-Pendidikan-Tinggi-Berbasis-Kualitas-dan-Keberlanjutan/"
           target="_blank"
           class="flex gap-3 items-start hover:bg-gray-50 p-2 rounded-lg transition duration-300 news-item">
          <img
            src="https://www.jurnas.com/images/posts/1/2025/2025-08-04/ed18eff09186dd8f1f43dcacf687e78d_1.jpg"
            class="w-24 h-20 object-cover rounded-md"
          />
          <div class="flex-1">
            <p class="text-[13px] text-gray-800 font-semibold italic leading-tight mb-1">
              “IPTI: Membangun Ekosistem Pendidikan Tinggi Berbasis Kualitas dan Keberlanjutan.”
            </p>
            <p class="text-[12px] text-gray-600 leading-snug mb-1">
              Membangun Ekosistem Pendidikan Berkualitas dan Berkelanjutan untuk Generasi Pariwisata Digital Global.
            </p>
            <span class="text-[12px] text-gray-500">Jurnas.com</span>
          </div>
        </a>

        <a href="https://wartakota.tribunnews.com/2025/08/04/ini-cara-ipti-membangun-ekosistem-pendidikan-tinggi-berbasis-kualitas-dan-keberlanjutan"
           target="_blank"
           class="flex gap-3 items-start hover:bg-gray-50 p-2 rounded-lg transition duration-300 news-item">
          <img
            src="https://asset.tribunnews.com/PFdVZCqlZTzajGA2YbTswjmpAk0=/1200x800/filters:upscale():quality(30):format(webp):focal(0.5x0.5:0.5x0.5)/wartakota/foto/bank/originals/Ariani-Kusumo-Wardhani-ox.jpg"
            class="w-24 h-20 object-cover rounded-md"
          />
          <div class="flex-1">
            <p class="text-[13px] text-gray-800 font-semibold italic leading-tight mb-1">
              “Ini cara IPTI membangun ekosistem pendidikan tinggi berbasis kualitas dan keberlanjutan."
            </p>
            <span class="text-[12px] text-gray-500">Tribunnews (Wartakota)</span>
          </div>
        </a>

        <a href="https://mediaindonesia.com/humaniora/797888/pendidikan-tinggi-harus-mampu-menjawab-dinamika-industri#goog_rewarded"
           target="_blank"
           class="flex gap-3 items-start hover:bg-gray-50 p-2 rounded-lg transition duration-300 news-item">
          <img
            src="https://www.jurnas.com/images/posts/1/2025/2025-08-04/ed18eff09186dd8f1f43dcacf687e78d_1.jpg"
            class="w-24 h-20 object-cover rounded-md"
          />
          <div class="flex-1">
            <p class="text-[13px] text-gray-800 font-semibold italic leading-tight mb-1">
              “Pendidikan Tinggi Harus Mampu Menjawab Dinamika Industri."
            </p>
            <p class="text-[12px] text-gray-600 leading-snug mb-1">
              Pendidikan tinggi adaptif, siap menghadapi tantangan industri masa kini. 
            </p>
            <span class="text-[12px] text-gray-500">JMedia Indonesia</span>
          </div>
        </a>

        <a href="https://www.jawapos.com/pendidikan/amp/016390685/pentingnya-membangun-ekosistem-pendidikan-tinggi-berbasis-kualitas-dan-keberlanjutan"
           target="_blank"
           class="flex gap-3 items-start hover:bg-gray-50 p-2 rounded-lg transition duration-300 news-item">
          <img
            src="https://static.promediateknologi.id/crop/0x0:0x0/0x0/webp/photo/p2/01/2025/08/04/pendidikan-tinggi-4184090448.jpg"
            class="w-24 h-20 object-cover rounded-md"
          />
          <div class="flex-1">
            <p class="text-[13px] text-gray-800 font-semibold italic leading-tight mb-1">
              “Pentingnya Membangun Ekosistem Pendidikan Tinggi Berbasis Kualitas dan Keberlanjutan.""
            </p>
            <p class="text-[12px] text-gray-600 leading-snug mb-1">
              Ekosistem kampus pro-kualitas, pro-keberlanjutan, siap menyongsong global.
            </p>
            <span class="text-[12px] text-gray-500">Jawa Pos</span>
          </div>
        </a>
      </div>
    </div>
  </section>
</body>
</html>
