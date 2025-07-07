<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../css/smoth_scroll.css">
  <title>Artikel</title>
  <script src="https://cdn.tailwindcss.com"></script>

</head>
<body class="bg-white text-gray-800 font-sans">
<?php require '../layout/header.php'; ?>

<div class="max-w-[1500px] mx-auto px-4 mt-20 md:mt-24 lg:mt-32">
  <div class="flex flex-col md:flex-row gap-6">
    <div class="flex-1 rounded-xl overflow-hidden h-[500px] flex items-center justify-center bg-gray-100">
      <img
        id="mainImage"
        src="../img/gwk-1.jpg"
        alt="Volcano"
        class="w-full h-full object-cover transition-all duration-300"
      />
    </div>
    <div class="grid grid-cols-4 md:grid-cols-1 gap-4 w-full md:w-[220px] md:h-[500px]">
      <img src="../img/gwk-1.jpg" class="thumb rounded-xl w-full h-[110px] md:h-[115px] object-cover cursor-pointer hover:opacity-80 transition" />
      <img src="../img/gwk-2.jpg" class="thumb rounded-xl w-full h-[110px] md:h-[115px] object-cover cursor-pointer hover:opacity-80 transition" />
      <img src="../img/gwk-3.jpg" class="thumb rounded-xl w-full h-[110px] md:h-[115px] object-cover cursor-pointer hover:opacity-80 transition" />
      <img src="../img/gwk.jpg" class="thumb rounded-xl w-full h-[110px] md:h-[115px] object-cover cursor-pointer hover:opacity-80 transition" />
    </div>
  </div>
    <div class="mt-6">
      <h1 class="text-2xl md:text-3xl font-bold mb-2">Garuda Wisnu Kencana</h1>
      <p class="text-gray-700 text-lg leading-relaxed">
GWK Cultural Park is a cultural park located in Ungasan, South Kuta, Badung Regency, Bali, Indonesia. The park is dedicated to the Hindu god Vishnu and his mount Garuda, and it features a 120-meter tall statue of Vishnu riding Garuda, which is one of the tallest statues in the world. The park also includes various cultural performances, exhibitions, and traditional Balinese art and architecture. It serves as a major tourist attraction in Bali, offering visitors a glimpse into Balinese culture and spirituality.
      </p>
    </div>
  </div>

  <h2 class="text-3xl font-bold text-center mt-12 text-gray-800">What our Happy Customers Say</h2>
  <div class="max-w-[1500px] mx-auto mt-10 relative">
    <div id="carousel" class="overflow-hidden relative rounded-2xl bg-gradient-to-r from-slate-200 to-slate-100 p-6">
      <div id="slides" class="flex transition-transform duration-500 ease-in-out">
        <div class="flex flex-col md:flex-row items-center gap-6 min-w-full">
          <img src="https://randomuser.me/api/portraits/men/32.jpg" class="w-40 h-40 rounded-2xl object-cover" alt="Alexander Han">
          <div>
         <p class="text-gray-800 text-lg">Gwk 
Cultural Park is an incredible site filled with ancient charm and spiritual energy. The intricate stone carvings and towering structures left me in awe. A must-visit destination for anyone exploring Indonesia’s rich cultural and historical heritage.
          
        </p>
         </p>
            
         </p>
            <p class="font-bold text-blue-900 mt-3">Alexander Han</p>
          </div>
        </div>
        <div class="flex flex-col md:flex-row items-center gap-6 min-w-full">
          <img src="https://randomuser.me/api/portraits/men/65.jpg" class="w-40 h-40 rounded-2xl object-cover" alt="Michael Lee">
          <div>
          <p class="text-gray-800 text-lg">Best place to explore the beauty of Indonesia. The Garuda Wisnu Kencana statue is a sight to behold, and the surrounding park is beautifully maintained. The cultural performances were captivating, showcasing the rich traditions of Bali. A truly unforgettable experience!</p>
         </p>
          
          </p>
          </p>
            <p class="font-bold text-blue-900 mt-3">Michael Lee</p>
          </div>
        </div>
        <div class="flex flex-col md:flex-row items-center gap-6 min-w-full">
          <img src="https://randomuser.me/api/portraits/women/68.jpg" class="w-40 h-40 rounded-2xl object-cover" alt="Sophia Brown">
          <div>
           <p class="text-gray-800 text-lg">Beautiful view 
at Garuda Wisnu Kencana! The statue is magnificent, and the park offers a peaceful escape from the hustle and bustle of Bali. I enjoyed learning about the local culture and history through the exhibits and performances. A perfect place for photography and relaxation.</p>
           </p>
           </p>
            <p classs="font-bold text-blue-900 mt-3">Sophia Brown</p>
          </div>
        </div>
      </div>
      

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

    <div class="flex justify-center mt-4 space-x-2">
      <span class="dot w-3 h-3 bg-gray-300 rounded-full"></span>
      <span class="dot w-3 h-3 bg-gray-700 rounded-full"></span>
      <span class="dot w-3 h-3 bg-gray-300 rounded-full"></span>
    </div>
  </div>
      <span class="dot w-3 h-3 bg-gray-300 rounded-full"></span>
      <span class="dot w-3 h-3 bg-gray-700 rounded-full"></span>
      <span class="dot w-3 h-3 bg-gray-300 rounded-full"></span>

<?php require '../layout/footer.php'; ?>

<!-- humerger -->
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
  </script>

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

    setInterval(() => {
      index = (index + 1) % totalSlides;
      updateCarousel();
    }, 7000);
  </script>
</body>
</html>
