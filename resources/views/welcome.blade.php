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

    {{-- Navbar --}}
    @include('layouts.navbar')

    {{-- Hero Section Slider --}}
    <section class="relative w-full h-[80vh] mt-32 overflow-hidden">
        <!-- Slide 1 -->
        <div class="absolute inset-0 transition-opacity duration-1000 opacity-100 slide">
            <a href="https://ais.ipti.ac.id/spmbfront/" target="_blank">
                <img src="https://tedjaindonesia.ac.id/wp-content/uploads/2025/05/banner-website-revisi-scaled.png"
                    alt="Slide 1" class="w-full h-full object-cover cursor-pointer">
            </a>
        </div>

        <!-- Slide 2 -->
        <div class="absolute inset-0 transition-opacity duration-1000 opacity-0 slide">
            <img src="https://tedjaindonesia.ac.id/wp-content/uploads/2025/05/WhatsApp-Image-2025-05-20-at-10.41.01_a5aba900-scaled.jpg"
                alt="Slide 2" class="w-full h-full object-cover">
        </div>

        <!-- Slide 3 -->
        <div class="absolute inset-0 transition-opacity duration-1000 opacity-0 slide">
            <img src="https://tedjaindonesia.ac.id/wp-content/uploads/2025/05/WhatsApp-Image-2025-05-20-at-10.41.01_72dd9cbd-scaled.jpg"
                alt="Slide 3" class="w-full h-full object-cover">
        </div>

        {{-- Tombol navigasi --}}
        <button id="prevBtn"
            class="absolute left-5 top-1/2 -translate-y-1/2 bg-black/40 text-white rounded-full p-3 hover:bg-black/60">
            &#10094;
        </button>
        <button id="nextBtn"
            class="absolute right-5 top-1/2 -translate-y-1/2 bg-black/40 text-white rounded-full p-3 hover:bg-black/60">
            &#10095;
        </button>
    </section>


    <section class="con-inner max-w-7xl mx-auto px-6 py-12 grid grid-cols-1 md:grid-cols-2 gap-8 items-center">

        {{-- Kiri: 2 Gambar --}}
        <div class="grid grid-cols-2 gap-4">
            <div>
                <img src="https://tedjaindonesia.ac.id/wp-content/uploads/2025/04/IMG_0299-1152x1536.jpg" alt="Gedung 1"
                    class="rounded-lg shadow-lg w-[1152] h-[55vh] object-cover">
            </div>
            <div>
                <img src="https://tedjaindonesia.ac.id/wp-content/uploads/2025/04/IMG_0272-1536x1152.jpg" alt="Gedung 2"
                    class="rounded-lg shadow-lg w-[1536] h-[1152] object-cover">
            </div>
        </div>

        {{-- Kanan: Teks --}}
        <div>
            <h1 class="text-3xl font-bold text-gray-900 mb-4">
                Tedja Indonesia <br>
                <span class="text-blue-900">Future of Tourism and Hospitality</span>
            </h1>
            <p class="text-gray-700 mb-4">
                Imagine graduating with excellent skills and mastering the art of tourism and hospitality?</p>
            <p class="text-gray-700 mb-6">
                Tedja Indonesia turn this vision into a reality. Our curriculum and advanced facilities are designed to
                align with global standards. Combining theoretical knowledge with practical experience through project
                based learning and industry internships.</p>
            <p class="text-gray-700">
                At Tedja Indonesia, we don’t just teach, we prepare you to become a key player in the global tourism and
                hospitality industry.</p>
        </div>
    </section>

    <section class="max-w-7xl mx-auto px-6 py-12">
        <!-- Judul -->
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900">Explore Our Programs</h2>
            <p class="mt-4 text-gray-600 max-w-3xl mx-auto">
                At TEDJA Indonesia, we take pride in offering quality undergraduate programs that cater to a range of
                interests.
                Our courses are designed to equip you with the knowledge and skills to thrive in your field.
                Whether you are aiming for personal development or career advancement, we have something for you.
            </p>
        </div>

        <!-- Grid Program -->
        <div id="programs" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <script>
                fetch("http://127.0.0.1:8000/api/programs")
                    .then(res => res.json())
                    .then(programs => {
                        const container = document.getElementById('programs');
                        console.log(programs);
                        programs.data.forEach(p => {
                            container.innerHTML += `
        <div>
            <img src="http://127.0.0.1:8000/images/programs/${p.image}"
                alt="${p.name}"
                class="w-full h-56 object-cover rounded-lg shadow-md mb-4">
            <h3 class="text-xl font-bold text-gray-900">${p.name}</h3>
            <p class="text-gray-600 mt-2">
                ${p.description}
            </p>
            <a href="#" class="mt-3 inline-block text-blue-900 font-medium hover:underline">
                Explore Course →
            </a>
        </div>
      `;
                        });
                    })
                    .catch(err => console.error(err));
            </script>

        </div>
    </section>


    <!-- Why Choose Section -->
    <section class="relative bg-cover bg-center bg-no-repeat py-20 text-white"
        style="background-image: url('https://tedjaindonesia.ac.id/wp-content/uploads/2025/04/hall4.jpg');">
        <div class="bg-black/50 absolute inset-0"></div> <!-- Overlay gelap -->

        <div class="relative z-10 max-w-4xl mx-auto text-center px-6">
            <h2 class="text-3xl font-bold mb-6">Why Choose Tedja Indonesia?</h2>
            <p class="text-lg leading-relaxed mb-8">
                Tedja Indonesia prepares future leaders in tourism and hospitality with an international-standard
                curriculum delivered in English.
                We provide students with global career opportunities, including international internships and
                conferences, ensuring they stand out in a competitive industry.
                Our advanced facilities, industry-aligned curriculum, and exclusive partnerships create the perfect
                place for local and international students to thrive.
            </p>
            <a href="#enroll"
                class="bg-blue-900 px-6 py-3 rounded-lg text-white font-semibold shadow-md hover:bg-blue-800 transition">
                Enroll Today!
            </a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-white border-t border-gray-200 py-12">
        <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-3 gap-8">

            <!-- Logo & Description -->
            <div>
                <div class="flex items-center gap-3 mb-4">
                    <img src="https://tedjaindonesia.ac.id/wp-content/uploads/2025/03/image.png" alt="Logo"
                        class="h-12">
                    <h3 class="text-2xl font-bold text-gray-900">Tedja Indonesia</h3>
                </div>
                <p class="text-gray-600 mb-6">
                    Your gateway to a global career in Tourism, Digital Business, and Public Relations.
                    Experience hands-on learning, modern facilities, and industry-ready programs—all in one place.
                </p>
                <div class="flex space-x-4 text-gray-700 text-2xl">
                    <!---instagram-->
                    <a href="https://www.instagram.com/tedja.indonesia?igsh=MWRrMGt3NXl0cWY0cQ%3D%3D&utm_source=qr"
                        aria-label="Instagram"
                        class="p-2 rounded-lg flex items-center border border-gray-300 justify-center transition-all duration-500 hover:border-gray-100 hover:bg-gray-100">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 71 72"
                            fill="none">
                            <path
                                d="M27.3762 35.7808C27.3762 31.1786 31.1083 27.4468 35.7132 27.4468C40.3182 27.4468 44.0522 31.1786 44.0522 35.7808C44.0522 40.383 40.3182 44.1148 35.7132 44.1148C31.1083 44.1148 27.3762 40.383 27.3762 35.7808ZM22.8683 35.7808C22.8683 42.8708 28.619 48.618 35.7132 48.618C42.8075 48.618 48.5581 42.8708 48.5581 35.7808C48.5581 28.6908 42.8075 22.9436 35.7132 22.9436C28.619 22.9436 22.8683 28.6908 22.8683 35.7808ZM46.0648 22.4346C46.0646 23.0279 46.2404 23.608 46.5701 24.1015C46.8997 24.595 47.3684 24.9797 47.9168 25.2069C48.4652 25.4342 49.0688 25.4939 49.6511 25.3784C50.2334 25.2628 50.7684 24.9773 51.1884 24.5579C51.6084 24.1385 51.8945 23.6041 52.0105 23.0222C52.1266 22.4403 52.0674 21.8371 51.8404 21.2888C51.6134 20.7406 51.2289 20.2719 50.7354 19.942C50.2418 19.6122 49.6615 19.436 49.0679 19.4358H49.0667C48.2708 19.4361 47.5077 19.7522 46.9449 20.3144C46.3821 20.8767 46.0655 21.6392 46.0648 22.4346ZM25.6072 56.1302C23.1683 56.0192 21.8427 55.6132 20.9618 55.2702C19.7939 54.8158 18.9606 54.2746 18.0845 53.4002C17.2083 52.5258 16.666 51.6938 16.2133 50.5266C15.8699 49.6466 15.4637 48.3214 15.3528 45.884C15.2316 43.2488 15.2073 42.4572 15.2073 35.781C15.2073 29.1048 15.2336 28.3154 15.3528 25.678C15.4639 23.2406 15.8731 21.918 16.2133 21.0354C16.668 19.8682 17.2095 19.0354 18.0845 18.1598C18.9594 17.2842 19.7919 16.7422 20.9618 16.2898C21.8423 15.9466 23.1683 15.5406 25.6072 15.4298C28.244 15.3086 29.036 15.2844 35.7132 15.2844C42.3904 15.2844 43.1833 15.3106 45.8223 15.4298C48.2612 15.5408 49.5846 15.9498 50.4677 16.2898C51.6356 16.7422 52.4689 17.2854 53.345 18.1598C54.2211 19.0342 54.7615 19.8682 55.2161 21.0354C55.5595 21.9154 55.9658 23.2406 56.0767 25.678C56.1979 28.3154 56.2221 29.1048 56.2221 35.781C56.2221 42.4572 56.1979 43.2466 56.0767 45.884C55.9656 48.3214 55.5573 49.6462 55.2161 50.5266C54.7615 51.6938 54.2199 52.5266 53.345 53.4002C52.4701 54.2738 51.6356 54.8158 50.4677 55.2702C49.5872 55.6134 48.2612 56.0194 45.8223 56.1302C43.1855 56.2514 42.3934 56.2756 35.7132 56.2756C29.033 56.2756 28.2432 56.2514 25.6072 56.1302ZM25.4001 10.9322C22.7371 11.0534 20.9174 11.4754 19.3282 12.0934C17.6824 12.7316 16.2892 13.5878 14.897 14.977C13.5047 16.3662 12.6502 17.7608 12.0116 19.4056C11.3933 20.9948 10.971 22.8124 10.8497 25.4738C10.7265 28.1394 10.6982 28.9916 10.6982 35.7808C10.6982 42.57 10.7265 43.4222 10.8497 46.0878C10.971 48.7494 11.3933 50.5668 12.0116 52.156C12.6502 53.7998 13.5049 55.196 14.897 56.5846C16.289 57.9732 17.6824 58.8282 19.3282 59.4682C20.9204 60.0862 22.7371 60.5082 25.4001 60.6294C28.0687 60.7506 28.92 60.7808 35.7132 60.7808C42.5065 60.7808 43.3592 60.7526 46.0264 60.6294C48.6896 60.5082 50.5081 60.0862 52.0983 59.4682C53.7431 58.8282 55.1373 57.9738 56.5295 56.5846C57.9218 55.1954 58.7745 53.7998 59.4149 52.156C60.0332 50.5668 60.4575 48.7492 60.5768 46.0878C60.698 43.4202 60.7262 42.57 60.7262 35.7808C60.7262 28.9916 60.698 28.1394 60.5768 25.4738C60.4555 22.8122 60.0332 20.9938 59.4149 19.4056C58.7745 17.7618 57.9196 16.3684 56.5295 14.977C55.1395 13.5856 53.7431 12.7316 52.1003 12.0934C50.5081 11.4754 48.6894 11.0514 46.0284 10.9322C43.3612 10.811 42.5085 10.7808 35.7152 10.7808C28.922 10.7808 28.0687 10.809 25.4001 10.9322Z"
                                fill="#111827" />
                        </svg>
                    </a>
                    <a href="https://www.tiktok.com/@tedja.indonesia?_t=ZS-8vlPHl3SYki&_r=1" aria-label="Instagram"
                        class="p-2 rounded-lg flex items-center border border-gray-300 justify-center transition-all duration-500 hover:border-gray-100 hover:bg-gray-100">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 71 72"
                            fill="none">
                            <path
                                d="M50.0783 22.6244C49.7746 22.4674 49.4789 22.2953 49.1924 22.1088C48.3592 21.5579 47.5952 20.9089 46.9171 20.1756C45.2202 18.2341 44.5864 16.2644 44.353 14.8853H44.3624C44.1674 13.7406 44.248 13 44.2602 13H36.5314V42.8856C36.5314 43.2869 36.5314 43.6834 36.5146 44.0753C36.5146 44.1241 36.5099 44.1691 36.5071 44.2216C36.5071 44.2431 36.5071 44.2656 36.5024 44.2881C36.5024 44.2938 36.5024 44.2994 36.5024 44.305C36.4209 45.3773 36.0772 46.4131 35.5014 47.3214C34.9257 48.2297 34.1355 48.9825 33.2005 49.5138C32.226 50.0681 31.1238 50.359 30.0027 50.3575C26.4017 50.3575 23.4833 47.4213 23.4833 43.795C23.4833 40.1688 26.4017 37.2325 30.0027 37.2325C30.6843 37.2319 31.3618 37.3391 32.0099 37.5503L32.0192 29.6809C30.0518 29.4268 28.053 29.5832 26.149 30.1402C24.245 30.6972 22.477 31.6427 20.9567 32.9172C19.6246 34.0746 18.5047 35.4557 17.6474 36.9981C17.3211 37.5606 16.0902 39.8209 15.9411 43.4894C15.8474 45.5716 16.4727 47.7288 16.7708 48.6203V48.6391C16.9583 49.1641 17.6849 50.9556 18.8689 52.4659C19.8237 53.6774 20.9518 54.7417 22.2167 55.6244V55.6056L22.2355 55.6244C25.9771 58.1669 30.1255 58 30.1255 58C30.8436 57.9709 33.2492 58 35.9811 56.7053C39.0111 55.27 40.7361 53.1316 40.7361 53.1316C41.8381 51.8538 42.7144 50.3977 43.3274 48.8256C44.0267 46.9872 44.2602 44.7822 44.2602 43.9009V28.0459C44.3539 28.1022 45.6027 28.9281 45.6027 28.9281C45.6027 28.9281 47.4017 30.0813 50.2086 30.8322C52.2224 31.3666 54.9355 31.4791 54.9355 31.4791V23.8066C53.9849 23.9097 52.0546 23.6097 50.0783 22.6244Z"
                                fill="#111827" />
                        </svg>
                    </a>
                    <a href="https://www.youtube.com/@tedja.indonesia" aria-label="Instagram"
                        class="p-2 rounded-lg flex items-center border border-gray-300 justify-center transition-all duration-500 hover:border-gray-100 hover:bg-gray-100">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 71 72"
                            fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M56.5615 18.2428C58.8115 18.8504 60.58 20.6234 61.1778 22.8708C62.2654 26.9495 62.2654 35.4647 62.2654 35.4647C62.2654 35.4647 62.2654 43.98 61.1778 48.0586C60.5717 50.3144 58.8032 52.0873 56.5615 52.6866C52.4932 53.7771 36.1703 53.7771 36.1703 53.7771C36.1703 53.7771 19.8557 53.7771 15.7791 52.6866C13.5291 52.079 11.7606 50.306 11.1628 48.0586C10.0752 43.98 10.0752 35.4647 10.0752 35.4647C10.0752 35.4647 10.0752 26.9495 11.1628 22.8708C11.7689 20.615 13.5374 18.8421 15.7791 18.2428C19.8557 17.1523 36.1703 17.1523 36.1703 17.1523C36.1703 17.1523 52.4932 17.1523 56.5615 18.2428ZM44.5142 35.4647L30.9561 43.314V27.6154L44.5142 35.4647Z"
                                fill="#111827" />
                        </svg>
                    </a>
                    <a href="https://www.linkedin.com/company/tedjaindonesia/" aria-label="Instagram"
                        class="p-2 rounded-lg flex items-center border border-gray-300 justify-center transition-all duration-500 hover:border-gray-100 hover:bg-gray-100">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 71 72"
                            fill="none">
                            <path
                                d="M24.7612 55.999V28.3354H15.5433V55.999H24.7621H24.7612ZM20.1542 24.5591C23.3679 24.5591 25.3687 22.4348 25.3687 19.7801C25.3086 17.065 23.3679 15 20.2153 15C17.0605 15 15 17.065 15 19.7799C15 22.4346 17.0001 24.5588 20.0938 24.5588H20.1534L20.1542 24.5591ZM29.8633 55.999H39.0805V40.5521C39.0805 39.7264 39.1406 38.8985 39.3841 38.3088C40.0502 36.6562 41.5668 34.9455 44.1138 34.9455C47.4484 34.9455 48.7831 37.4821 48.7831 41.2014V55.999H58V40.1376C58 31.6408 53.4532 27.6869 47.3887 27.6869C42.4167 27.6869 40.233 30.4589 39.0198 32.347H39.0812V28.3364H29.8638C29.9841 30.9316 29.8631 56 29.8631 56L29.8633 55.999Z"
                                fill="#111827" />
                        </svg>
                    </a>

                </div>
            </div>

            <!-- Contact -->
            <div>
                <h4 class="text-xl font-bold text-gray-900 mb-4">Get In Touch</h4>
                <p class="text-gray-600 mb-2">Email : info@ipti.ac.id</p>
                <p class="text-gray-600 mb-2">Phone : +62 811-1181-6036</p>
            </div>
        </div>
    </footer>


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

        setInterval(() => {
            current = (current + 1) % total;
            showSlide(current);
        }, 5000);
    </script>

</body>

</html>
