<!doctype html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="./img/icon/icon-main.png">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./assets/css/style.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <!-- Font Awesome CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <!-- flowbite cdn -->
  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Flowbite CSS (optional jika hanya pakai komponen JS) -->
  <link rel="stylesheet" href="https://unpkg.com/flowbite@2.2.1/dist/flowbite.min.css" />

  <!-- Flowbite JS (WAJIB) -->
  <script src="https://unpkg.com/flowbite@2.2.1/dist/flowbite.min.js"></script>

  <meta name="description"
    content="Wonderful Bali - Explore the beauty of Bali with our travel agency. Discover attractions, culture, and unforgettable experiences in Bali.">
  <title>Wonderful Bali</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<style>
  html {
    scroll-behavior: smooth;
  }
</style>

<body class="font-poppins">
  <header
    class="navbar shadow-md fixed w-full top-0 left-0 z-50 bg-white/20 hover:bg-white/60 duration-500 shadow-xl">
<div class="max-w-full mx-auto flex justify-between items-center px-6 py-3 md:py-4 w-full">


      <div class="flex items-center gap-x-3 group">
        <img class="w-24 transition-opacity group-hover:opacity-80" src="img/icon/icon_png_travelku.png" alt="Logo">
      </div>

      <!-- Tombol Hamburger (Mobile) -->
      <button id="menu-button" class="md:hidden focus:outline-none z-50 relative">
        <svg id="hamburger-icon" class="w-7 h-7 text-[#07203E]" fill="none" stroke="currentColor" viewBox="0 0 24 24"
          xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
        </svg>
        <svg id="close-icon" class="w-7 h-7 text-[#07203E] hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24"
          xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
      </button>

      <!-- Menu Navigasi -->
      <nav id="menu"
        class="absolute top-20 left-0 w-full md:static md:w-auto md:bg-transparent bg-white md:flex hidden transition-transform duration-300 transform md:transform-none py-2">
        <ul class="flex flex-col md:flex-row md:space-x-6 text-center md:text-left">
          <li><a href="#" class="block py-3 px-6 text-gray-600 hover:text-red-500">Home</a></li>
          <li><a href="#" class="block py-3 px-6 text-gray-600 hover:text-red-500">About</a></li>
          <li><a href="#service" class="block py-3 px-6 text-gray-600 hover:text-red-500">Services</a></li>
          <li><a href="./assets/kontak.html"
              class="block py-3 px-6 bg-[#02a7c5] text-white rounded-xl hover:bg-red-500 transition duration-300 font-bold">
              Contact</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <div id="overlay" class="hidden fixed inset-0 bg-black bg-opacity-50 md:hidden"></div>

  <div class="hero">
        <div class="slide active">
            <img src="img/gwk.jpg" alt="Mountain view" class="slide-image">
            <div class="overlay"></div>
            <div class="content">
                <div class="location">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Garuda Wisnu Kencana</span>
                </div>
                <h1 class="title">Cultural.</h1>
                <p class="subtitle">Gwk
                    Cultural Park Explore the majestic statue of Vishnu</p>
                </p>
                <a href="#" class="cta-button">
                    Start Your Journey
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
        
        <div class="slide">
            <img src="./assets//img//labuan-bajo1.jpg" alt="Beach view" class="slide-image">
            <div class="overlay"></div>
            <div class="content">
                <div class="location">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Labuan Bajo</span>
                </div>
                <h1 class="title">Paradise.</h1>
                <p class="subtitle">Experinece
                    the breathtaking beauty of Labuan Bajo</p>
                </p>
                <a href="#" class="cta-button">
                    Start Your Journey
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
        
        <div class="slide">
            <img src="./assets/./img//gilitrawangan-1.jpg" alt="City view" class="slide-image">
            <div class="overlay"></div>
            <div class="content">
                <div class="location">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Gili Trawangan</span>
                </div>
                <h1 class="title">Experince.</h1>
                <p class="subtitle">Gili
                    Trawangan Discover the vibrant culture and nightlife</p>
                </p>
                <a href="#" class="cta-button">
                    Start Your Journey
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>

        <div class="navigation">
            <div class="nav-dot active"></div>
            <div class="nav-dot"></div>
            <div class="nav-dot"></div>
        </div>
    </div>

  <section id="service" class="max-w-full mx-auto px-4 py-10" data-aos="fade-up">
    <div class="bg-slate-100 rounded-lg p-6" data-aos="fade-up" data-aos-delay="100">
      <h3 class="text-sm text-gray-600" data-aos="fade-right">01 / Attractions</h3>
      <h1 class="text-3xl font-bold" data-aos="fade-left">Must-see attractions</h1>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 mt-6">

        <div class="bg-white shadow-lg rounded-lg overflow-hidden" data-aos="zoom-in">
          <div class="relative w-full h-60 overflow-hidden group">
            <img src="img/gwk.jpg" alt="Garuda Wisnu Kencana"
              class="absolute inset-0 w-full h-full object-cover transition-opacity duration-500 group-hover:opacity-0">
            <img src="img/GWK-1.jpg" alt="Muara Jambi Hover"
              class="absolute inset-0 w-full h-full object-cover transition-opacity transition-all  duration-500 ese-in-out opacity-0 group-hover:opacity-100">
          </div>
          <div class="p-4">
            <h2 class="text-2xl font-bold">Garuda Wisnu Kencana</h2>
            <p class="text-gray-500 text-sm"><i class="fa-solid fa-location-dot text-[#02a7c5]"></i> Badung, South Kuta</p>
            <p class="text-gray-700 text-sm mt-2">Garuda Wisnu Kencana (GWK) is a cultural park featuring one of the
              tallest statues in the world, depicting the Hindu god Vishnu riding the mythical bird Garuda. Located in
              South Kuta, it celebrates Balinese heritage through art, culture, and breathtaking views.</p>

          </div>
          <button
            class="font-poppins bg-transparent border border-[#02a7c5] text-[#02a7c5] hover:bg-[#02a7c5] hover:text-white py-2 px-3 float-end mx-3 my-2 rounded-lg transition duration-500">
            <a href="./assets/artikel/gwk.php">Read More</a>
          </button>
        </div>

        <!-- CARD 2 -->
        <div class="bg-white shadow-lg rounded-lg overflow-hidden" data-aos="zoom-in">
          <div class="relative w-full h-60 overflow-hidden group">
            <img src="img/jimbaran_beach.webp" alt="Garuda Wisnu Kencana"
              class="absolute inset-0 w-full h-full object-cover transition-opacity duration-500 group-hover:opacity-0">
            <img src="img/jimbaran_beach_1.jpg" alt="Muara Jambi Hover"
              class="absolute inset-0 w-full h-full object-cover transition-opacity transition-all  duration-500 ese-in-out opacity-0 group-hover:opacity-100">
          </div>
          <div class="p-4">
            <h2 class="text-2xl font-bold">Jimbaran Beach</h2>
            <p class="text-gray-500 text-sm"><i class="fa-solid fa-location-dot text-[#02a7c5]"></i> Badung, South Kuta</p>
            <p class="text-gray-700 text-sm mt-2">Jimbaran Beach is famous for its golden sunsets, calm waves, and
              beachfront seafood dining. Located in South Kuta, it's the perfect place to relax, enjoy fresh grilled
              fish, and experience Bali’s coastal charm.</p>

          </div>
          <button
            class="font-poppins bg-transparent border border-[#02a7c5] text-[#02a7c5] hover:bg-[#02a7c5] hover:text-white py-2 px-3 float-end mx-3 my-2 rounded-lg transition duration-500">
            <a href="./assets/artikel/jimbaran_beach.php">Read More</a>
          </button>
        </div>

        <!-- CARD 3 -->
        <div class="bg-white shadow-lg rounded-lg overflow-hidden" data-aos="zoom-in">
          <div class="relative w-full h-60 overflow-hidden group">
            <img src="img/gembleng-waterfall.png" alt="Garuda Wisnu Kencana"
              class="absolute inset-0 w-full h-full object-cover transition-opacity duration-500 group-hover:opacity-0">
            <img src="img/gembleng-waterfall-1.jpg" alt="Muara Jambi Hover"
              class="absolute inset-0 w-full h-full object-cover transition-opacity transition-all  duration-500 ese-in-out opacity-0 group-hover:opacity-100">
          </div>
          <div class="p-4">
            <h2 class="text-2xl font-bold">Gembleng Waterfall</h2>
            <p class="text-gray-500 text-sm"><i class="fa-solid fa-location-dot text-[#02a7c5]"></i> Karangasem, Sidemen</p>
            <p class="text-gray-700 text-sm mt-2">Gembleng Waterfall is a hidden gem nestled in the tranquil hills of
              Sidemen, Bali. Known for its natural infinity pool and serene atmosphere, it's a perfect spot for a
              peaceful retreat and to immerse in Bali’s untouched natural beauty.</p>

          </div>
          <button
            class="font-poppins bg-transparent border border-[#02a7c5] text-[#02a7c5] hover:bg-[#02a7c5] hover:text-white py-2 px-3 float-end mx-3 my-2 rounded-lg transition duration-500">
            <a href="./assets/artikel/gemleng_waterfall">Read More</a>
          </button>
        </div>

        <!-- CARD 4 -->
        <div class="bg-white shadow-lg rounded-lg overflow-hidden" data-aos="zoom-in">
          <div class="relative w-full h-60 overflow-hidden group">
            <img src="img/candi_prambanan.jpg" alt="Garuda Wisnu Kencana"
              class="absolute inset-0 w-full h-full object-cover transition-opacity duration-500 group-hover:opacity-0">
            <img src="img/candi_prambanan2.jpeg" alt="Muara Jambi Hover"
              class="absolute inset-0 w-full h-full object-cover transition-opacity transition-all  duration-500 ese-in-out opacity-0 group-hover:opacity-100">
          </div>
          <div class="p-4">
            <h2 class="text-2xl font-bold">Candi Prambanan</h2>
            <p class="text-gray-500 text-sm"><i class="fa-solid fa-location-dot text-[#02a7c5]"></i> Yogyakarta, Kranggan</p>
            <p class="text-gray-700 text-sm mt-2">Prambanan Temple is a majestic 9th-century Hindu temple complex
              dedicated to the Trimurti: Brahma, Vishnu, and Shiva. Located near Yogyakarta, it is a UNESCO World
              Heritage Site and a remarkable example of ancient Javanese architecture and spiritual heritage.</p>
          </div>

          <button
            class="font-poppins bg-transparent border border-[#02a7c5] text-[#02a7c5] hover:bg-[#02a7c5] hover:text-white py-2 px-3 float-end mx-3 my-2 rounded-lg transition duration-500">
            <a href="./assets/artikel/candi_prambanan.php">Read More</a>
          </button>
        </div>

        <!-- CARD 5 -->
        <div class="bg-white shadow-lg rounded-lg overflow-hidden" data-aos="zoom-in">
          <div class="relative w-full h-60 overflow-hidden group">
            <img src="img/gilitrawangan_beach1.webp" alt="Garuda Wisnu Kencana"
              class="absolute inset-0 w-full h-full object-cover transition-opacity duration-500 group-hover:opacity-0">
            <img src="img/gilitrrawanagan_beach.jpg" alt="Muara Jambi Hover"
              class="absolute inset-0 w-full h-full object-cover transition-opacity transition-all  duration-500 ese-in-out opacity-0 group-hover:opacity-100">
          </div>
          <div class="p-4">
            <h2 class="text-2xl font-bold">Gili Trawangan</h2>
            <p class="text-gray-500 text-sm"><i class="fa-solid fa-location-dot text-[#02a7c5]"></i> Lombok, West Nusa Tenggara</p>
            <p class="text-gray-700 text-sm mt-2">Gili Trawangan is a tropical paradise known for its white sandy
              beaches, vibrant coral reefs, and lively nightlife. Located off the coast of Lombok, it's a perfect escape
              for snorkeling, diving, and relaxing in a tranquil island atmosphere.</p>
          </div>

          <button
            class="font-poppins bg-transparent border border-[#02a7c5] text-[#02a7c5] hover:bg-[#02a7c5] hover:text-white py-2 px-3 float-end mx-3 my-2 rounded-lg transition duration-500">
            <a href="./assets/artikel/gili_trawangan.php">Read More</a>
          </button>
        </div>

        <!-- CARD 6 -->
        <div class="bg-white shadow-lg rounded-lg overflow-hidden" data-aos="zoom-in">
          <div class="relative w-full h-60 overflow-hidden group">
            <img src="img/labuan_bajo.jpg" alt="Garuda Wisnu Kencana"
              class="absolute inset-0 w-full h-full object-cover transition-opacity duration-500 group-hover:opacity-0">
            <img src="img/labuan_bajo1.webp" alt="Muara Jambi Hover"
              class="absolute inset-0 w-full h-full object-cover transition-opacity transition-all  duration-500 ese-in-out opacity-0 group-hover:opacity-100">
          </div>
          <div class="p-4">
            <h2 class="text-2xl font-bold">Labuan Bajo</h2>
            <p class="text-gray-500 text-sm"><i class="fa-solid fa-location-dot text-[#02a7c5]"></i> Flores Island, East Nusa Tenggara
            </p>
            <p class="text-gray-700 text-sm mt-2">Labuan Bajo is the gateway to the natural wonders of East Nusa
              Tenggara, known for its breathtaking landscapes, crystal-clear waters, and as the main access point to
              Komodo National Park and its stunning marine biodiversity.</p>

          </div>
          <button
            class="font-poppins bg-transparent border border-[#02a7c5] text-[#02a7c5] hover:bg-[#02a7c5] hover:text-white py-2 px-3 float-end mx-3 my-2 rounded-lg transition duration-500">
            <a href="./assets/artikel/labuan_bajo.php">Read More</a>
          </button>
        </div>

      </div>
    </div>
  </section>

  <section class="md:w-7xl mx-auto py-10 px-4">
    <div class="md:flex md:items-center md:gap-0 relative">

      <div class="md:w-1/2 relative z-0 px-6">
        <img class="w-full h-full object-cover rounded-lg"
          src="https://t4.ftcdn.net/jpg/06/12/25/75/360_F_612257593_76WUxysDvyyOfBkbqJR4sIJjliauXBES.jpg" alt=""
          srcset="">
      </div>
      <div class="md:w-1/2 bg-slate-100 p-6 md:-ml-16 z-10 relative shadow-xl rounded-lg" data-aos="fade-right">
        <h3 class="text-sm text-gray-600">02 / Agency</h3>
        <h2 class="text-3xl font-bold mb-4">About Our Agency</h2>
        <p class="text-gray-700 mb-4 hover:text-gray-400 duration-500">
          Discover the excellence of our agency trusted by top airlines like Citilink, Lion Air, Garuda Indonesia, and
          Batik Air. With a commitment to quality and customer satisfaction, we strive to deliver exceptional travel
          experiences every step of the way.
        </p>
        <div
          class="justify-center flex flex-wrap relative space-x-3 md:justify-center md:space-x-20 mb-3 hover:bg-gray-200 rounded-lg duration-500">
          <img src="./img/icon/Batik_Air.webp" alt="" srcset="">
          <img src="./img/icon/Ctlink.webp" alt="" srcset="">
          <img src="./img/icon/garuda_indonesia.webp" alt="" srcset="">
          <img src="./img/icon/Lion_Air.webp" alt="" srcset="">
        </div>
      </div>
  </section>

  <footer class="bg-gradient-to-tr from-[#02a7c5] to-[#07203E] text-white py-10 px-6 mt-10">
    <div class="max-w-9xl mx-auto flex flex-col md:flex-row justify-between items-start md:items-center gap-8">
      <div class="flex flex-col items-start">
        <img class="w-32 mb-3 drop-shadow-lg" src="img/icon/icon_png_travelku.png" alt="Travelku Logo">
        <p class="text-slate-100 text-sm max-w-xs">The best travel agency for your Bali adventure. Explore, discover, and enjoy unforgettable moments with us!</p>
        <div class="flex space-x-4 mt-4">
          <a href="#" class="hover:text-[#02a7c5] transition"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="hover:text-[#02a7c5] transition"><i class="fab fa-instagram"></i></a>
          <a href="#" class="hover:text-[#02a7c5] transition"><i class="fab fa-whatsapp"></i></a>
          <a href="#" class="hover:text-[#02a7c5] transition"><i class="fab fa-twitter"></i></a>
        </div>
      </div>
      <div class="flex flex-col md:flex-row gap-8">
        <div>
          <h4 class="font-semibold mb-2 text-lg">Quick Links</h4>
          <ul class="space-y-1 text-slate-200">
            <li><a href="#" class="hover:text-[#02a7c5] transition">Home</a></li>
            <li><a href="#service" class="hover:text-[#02a7c5] transition">Services</a></li>
            <li><a href="./assets/kontak.html" class="hover:text-[#02a7c5] transition">Contact</a></li>
          </ul>
        </div>
        <div>
          <h4 class="font-semibold mb-2 text-lg">Contact Us</h4>
          <ul class="space-y-1 text-slate-200 text-sm">
            <li><i class="fa-solid fa-envelope mr-2"></i>info@travelku.com</li>
            <li><i class="fa-solid fa-phone mr-2"></i>+62 812-3456-7890</li>
            <li><i class="fa-solid fa-location-dot mr-2"></i>Bali, Indonesia</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="border-t border-white/20 mt-8 pt-4 text-center text-xs text-slate-200">
      &copy; 2025 Travelku. All rights reserved.
    </div>
  </footer>


   <script>
      // Slideshow functionality
        const slides = document.querySelectorAll('.slide');
        const dots = document.querySelectorAll('.nav-dot');
        let currentSlide = 0;

        function showSlide(index) {
            slides.forEach(slide => slide.classList.remove('active'));
            dots.forEach(dot => dot.classList.remove('active'));
            
            slides[index].classList.add('active');
            dots[index].classList.add('active');
            
            currentSlide = index;
        }

        // Add click events to navigation dots
        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => showSlide(index));
        });

        // Auto-advance slides
        setInterval(() => {
            let next = currentSlide + 1;
            if (next >= slides.length) next = 0;
            showSlide(next);
        }, 5000);
    </script>

  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            poppins: ["Poppins", "sans-serif"]
          }
        }
      }
    };
  </script>
  <script>
    (function () { if (!window.chatbase || window.chatbase("getState") !== "initialized") { window.chatbase = (...arguments) => { if (!window.chatbase.q) { window.chatbase.q = [] } window.chatbase.q.push(arguments) }; window.chatbase = new Proxy(window.chatbase, { get(target, prop) { if (prop === "q") { return target.q } return (...args) => target(prop, ...args) } }) } const onLoad = function () { const script = document.createElement("script"); script.src = "https://www.chatbase.co/embed.min.js"; script.id = "eCrjiHM3xVYA5O3lMeJdt"; script.domain = "www.chatbase.co"; document.body.appendChild(script) }; if (document.readyState === "complete") { onLoad() } else { window.addEventListener("load", onLoad) } })();
  </script>
  <script>
    document.addEventListener("contextmenu", function (event) {
      event.preventDefault();
    });

  </script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init({
      duration: 1000,
      once: true,
    });
  </script>

  <script src="javascript/main.js"></script>
</body>

</html>