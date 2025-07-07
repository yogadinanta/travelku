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
        src="..//img/labuan_bajo.jpg"
        alt="Volcano"
        class="w-full h-full object-cover transition-all duration-300"
      />
    </div>
    <div class="grid grid-cols-4 md:grid-cols-1 gap-4 w-full md:w-[220px] md:h-[500px]">
      <img src="../img/labuan-bajo1.jpg" class="thumb rounded-xl w-full h-[110px] md:h-[115px] object-cover cursor-pointer hover:opacity-80 transition" />
      <img src="../img/labuan-bajo2.jpg" class="thumb rounded-xl w-full h-[110px] md:h-[115px] object-cover cursor-pointer hover:opacity-80 transition" />
      <img src="../img/labuan-bajo3.jpg" class="thumb rounded-xl w-full h-[110px] md:h-[115px] object-cover cursor-pointer hover:opacity-80 transition" />
      <img src="../img/labuan_bajo.jpg" class="thumb rounded-xl w-full h-[110px] md:h-[115px] object-cover cursor-pointer hover:opacity-80 transition" />
    </div>
  </div>
    <div class="mt-6">
      <h1 class="text-2xl md:text-3xl font-bold mb-2">Labuan Bajo</h1>
      <p class="text-gray-700 text-lg leading-relaxed">
Labuan Bajo is one of the sub-districts located in Komodo District, West Manggarai Regency, East Nusa Tenggara Province, Indonesia. Labuan Bajo is also the center of government of Komodo District and is also the capital of West Manggarai Regency.
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
         <p class="text-gray-800 text-lg">Best place 
          to visit in Indonesia! Labuan Bajo offers stunning views, crystal-clear waters, and a rich marine life. The sunsets here are breathtaking, and the local culture is warm and welcoming. A perfect destination for adventure seekers and nature lovers alike.</p>
            
         </p>
            <p class="font-bold text-blue-900 mt-3">Alexander Han</p>
          </div>
        </div>
        <div class="flex flex-col md:flex-row items-center gap-6 min-w-full">
          <img src="https://randomuser.me/api/portraits/men/65.jpg" class="w-40 h-40 rounded-2xl object-cover" alt="Michael Lee">
          <div>
          <p class="text-gray-800 text-lg">
            a great place to explore the beauty of Indonesia. The Komodo National Park is a must-visit, with its unique wildlife and stunning landscapes. The local cuisine is delicious, and the hospitality of the people makes you feel right at home. Highly recommend visiting Labuan Bajo!</p>
          </p>
            <p class="font-bold text-blue-900 mt-3">Michael Lee</p>
          </div>
        </div>
        <div class="flex flex-col md:flex-row items-center gap-6 min-w-full">
          <img src="https://randomuser.me/api/portraits/women/68.jpg" class="w-40 h-40 rounded-2xl object-cover" alt="Sophia Brown">
          <div>
           <p class="text-gray-800 text-lg">Best view
            in Labuan Bajo! The scenery is absolutely breathtaking, with crystal-clear waters and lush green hills. The local culture is vibrant, and there are plenty of activities to keep you busy. Whether you're diving, snorkeling, or just relaxing on the beach, Labuan Bajo has something for everyone. A truly unforgettable experience!</p>
           </p>
            <p class="font-bold text-blue-900 mt-3">Sophia Brown</p>
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
