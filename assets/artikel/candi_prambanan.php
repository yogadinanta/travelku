<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Volcanoes and Temples</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    html {
      scroll-behavior: smooth;
    }
    #destinasiScroll {
      scrollbar-width: none;
    }
    #destinasiScroll::-webkit-scrollbar {
      display: none;
    }
  </style>
</head>
<body class="bg-white text-gray-800 font-sans">

<?php require '../layout/header.php'; ?>


<!-- Konten Utama -->
<div class="max-w-[1500px] mx-auto px-4 mt-20 md:mt-24 lg:mt-32">
  <div class="flex flex-col md:flex-row gap-6">
    <!-- Gambar Utama -->
    <div class="flex-1 rounded-xl overflow-hidden h-[500px] flex items-center justify-center bg-gray-100">
      <img
        id="mainImage"
        src="../img/prambanan-1.jpg"
        alt="Volcano"
        class="w-full h-full object-cover transition-all duration-300"
      />
    </div>

    <!-- Thumbnail -->
    <div class="grid grid-cols-4 md:grid-cols-1 gap-4 w-full md:w-[220px] md:h-[500px]">
      <img src="../img/prambanan-1.jpg" class="thumb rounded-xl w-full h-[110px] md:h-[115px] object-cover cursor-pointer hover:opacity-80 transition" />
      <img src="../img/prambanan-2.jpg" class="thumb rounded-xl w-full h-[110px] md:h-[115px] object-cover cursor-pointer hover:opacity-80 transition" />
      <img src="../img/prambanan-3.jpg" class="thumb rounded-xl w-full h-[110px] md:h-[115px] object-cover cursor-pointer hover:opacity-80 transition" />
      <img src="../img/prambanan-4.jpg" class="thumb rounded-xl w-full h-[110px] md:h-[115px] object-cover cursor-pointer hover:opacity-80 transition" />
    </div>
  </div>



    <!-- Detail -->
    <div class="mt-6">
      <h1 class="text-2xl md:text-3xl font-bold mb-2">Prambanan Temple</h1>
      <p class="text-gray-700 text-lg leading-relaxed">
        Prambanan Temple is the largest Hindu temple complex in Indonesia and one of the most magnificent ancient monuments in Southeast Asia. Built in the 9th century, this UNESCO World Heritage site is renowned for its towering spires and stone reliefs depicting the Ramayana epic. Surrounded by green gardens, Prambanan offers breathtaking views, especially at sunrise and sunset.
      </p>
    </div>
  </div>



  <h2 class="text-3xl font-bold text-center mt-12 text-gray-800">What our Happy Customers Say</h2>
  <div class="max-w-[1500px] mx-auto mt-10 relative">
    <!-- Carousel Wrapper -->
    <div id="carousel" class="overflow-hidden relative rounded-2xl bg-gradient-to-r from-slate-200 to-slate-100 p-6">
      <!-- Slides Container -->
      <div id="slides" class="flex transition-transform duration-500 ease-in-out">
        
        <!-- Slide 1 -->
        <div class="flex flex-col md:flex-row items-center gap-6 min-w-full">
          <img src="https://randomuser.me/api/portraits/men/32.jpg" class="w-40 h-40 rounded-2xl object-cover" alt="Alexander Han">
          <div>
            <p class="text-gray-800 text-lg">We flew with Balicopter from Gili back to Bali, it took only 40 minutes! Sooo cool! Instead of 6 hours by boat. I’m never taking a boat again :D</p>
            <p class="font-bold text-blue-900 mt-3">Alexander Han</p>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="flex flex-col md:flex-row items-center gap-6 min-w-full">
          <img src="https://randomuser.me/api/portraits/men/65.jpg" class="w-40 h-40 rounded-2xl object-cover" alt="Michael Lee">
          <div>
            <p class="text-gray-800 text-lg">The temple complex is well maintained and the guides are very knowledgeable. It gets crowded, so come early!</p>
            <p class="font-bold text-blue-900 mt-3">Michael Lee</p>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="flex flex-col md:flex-row items-center gap-6 min-w-full">
          <img src="https://randomuser.me/api/portraits/women/68.jpg" class="w-40 h-40 rounded-2xl object-cover" alt="Sophia Brown">
          <div>
            <p class="text-gray-800 text-lg">Amazing experience! The carvings are so detailed and the atmosphere is peaceful. A must-see in Yogyakarta.</p>
            <p class="font-bold text-blue-900 mt-3">Sophia Brown</p>
          </div>
        </div>
      </div>

      <!-- Navigation Buttons -->
      <div class="absolute top-1/2 left-4 transform -translate-y-1/2">
        <button id="prev" class="bg-white rounded-full border p-2 shadow hover:bg-gray-100">
          <svg class="w-5 h-5 text-gray-700" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
          </svg>
        </button>
      </div>
      <div class="absolute top-1/2 right-4 transform -translate-y-1/2">
        <button id="next" class="bg-white rounded-full border p-2 shadow hover:bg-gray-100">
          <svg class="w-5 h-5 text-gray-700" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
          </svg>
        </button>
      </div>
    </div>

    <!-- Dots -->
    <div class="flex justify-center mt-4 space-x-2">
      <span class="dot w-3 h-3 bg-gray-300 rounded-full"></span>
      <span class="dot w-3 h-3 bg-gray-700 rounded-full"></span>
      <span class="dot w-3 h-3 bg-gray-300 rounded-full"></span>
    </div>
  </div>>
      <span class="dot w-3 h-3 bg-gray-300 rounded-full"></span>
      <span class="dot w-3 h-3 bg-gray-700 rounded-full"></span>
      <span class="dot w-3 h-3 bg-gray-300 rounded-full"></span>
  
  <script>
    const slides = document.getElementById("slides");
    const dots = document.querySelectorAll(".dot");
    const totalSlides = slides.children.length;
    let index = 0;

    function updateCarousel() {
      slides.style.transform = `translateX(-${index * 100}%)`;
      dots.forEach((dot, i) => {
        dot.classList.toggle("bg-gray-700", i === index);
        dot.classList.toggle("bg-gray-300", i !== index);
      });
    }

    document.getElementById("next").addEventListener("click", () => {
      index = (index + 1) % totalSlides;
      updateCarousel();
    });

    document.getElementById("prev").addEventListener("click", () => {
      index = (index - 1 + totalSlides) % totalSlides;
      updateCarousel();
    });

    // Optional: Auto-slide every 7 seconds
    setInterval(() => {
      index = (index + 1) % totalSlides;
      updateCarousel();
    }, 7000);
  </script>

</body>
</html>



<?php require '../layout/footer.php'; ?>



  <!-- Script -->
  <script>
    const menuButton = document.getElementById("menu-button");
    const menu = document.getElementById("menu");
    const hamburgerIcon = document.getElementById("hamburger-icon");
    const closeIcon = document.getElementById("close-icon");

    menuButton.addEventListener("click", () => {
      menu.classList.toggle("hidden");
      hamburgerIcon.classList.toggle("hidden");
      closeIcon.classList.toggle("hidden");
    });

    const mainImage = document.getElementById("mainImage");
    const thumbnails = document.querySelectorAll(".thumb");

    thumbnails.forEach((thumb) => {
      thumb.addEventListener("click", () => {
        mainImage.src = thumb.src;
        window.scrollTo({ top: 0, behavior: 'smooth' });
      });
    });

    const destinasiScroll = document.getElementById("destinasiScroll");
    const scrollLeftBtn = document.getElementById("scrollLeft");
    const scrollRightBtn = document.getElementById("scrollRight");

    function updateScrollButtons() {
      if (destinasiScroll.scrollWidth > destinasiScroll.clientWidth) {
        scrollLeftBtn.style.display = 'flex';
        scrollRightBtn.style.display = 'flex';
      } else {
        scrollLeftBtn.style.display = 'none';
        scrollRightBtn.style.display = 'none';
      }
    }

    if (scrollLeftBtn && scrollRightBtn) {
      scrollLeftBtn.addEventListener('click', () => {
        destinasiScroll.scrollBy({ left: -400, behavior: 'smooth' });
      });
      scrollRightBtn.addEventListener('click', () => {
        destinasiScroll.scrollBy({ left: 400, behavior: 'smooth' });
      });
    }

    let autoScrollInterval;
    function startAutoScroll() {
      autoScrollInterval = setInterval(() => {
        if (destinasiScroll.scrollLeft + destinasiScroll.clientWidth >= destinasiScroll.scrollWidth - 10) {
          destinasiScroll.scrollTo({ left: 0, behavior: 'smooth' });
        } else {
          destinasiScroll.scrollBy({ left: 400, behavior: 'smooth' });
        }
      }, 3000);
    }

    function stopAutoScroll() {
      clearInterval(autoScrollInterval);
    }

    window.addEventListener('DOMContentLoaded', () => {
      updateScrollButtons();
      startAutoScroll();
    });

    window.addEventListener('resize', updateScrollButtons);
    destinasiScroll.addEventListener('mouseenter', stopAutoScroll);
    destinasiScroll.addEventListener('mouseleave', startAutoScroll);
  </script>
</body>
</html>
