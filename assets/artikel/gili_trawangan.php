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
        src="../img/gilitrawangan-3.jpg"
        alt="Volcano"
        class="w-full h-full object-cover transition-all duration-300"
      />
    </div>
    <div class="grid grid-cols-4 md:grid-cols-1 gap-4 w-full md:w-[220px] md:h-[500px]">
      <img src="../img/gilitrawangan-3.jpg" class="thumb rounded-xl w-full h-[110px] md:h-[115px] object-cover cursor-pointer hover:opacity-80 transition" />
      <img src="../img/gilitrawangan-1.jpg" class="thumb rounded-xl w-full h-[110px] md:h-[115px] object-cover cursor-pointer hover:opacity-80 transition" />
      <img src="../img/gilitrawangan-2.jpg" class="thumb rounded-xl w-full h-[110px] md:h-[115px] object-cover cursor-pointer hover:opacity-80 transition" />
      <img src="../img/gilitrawangan.jpg" class="thumb rounded-xl w-full h-[110px] md:h-[115px] object-cover cursor-pointer hover:opacity-80 transition" />
    </div>
  </div>
    <div class="mt-6">
      <h1 class="text-2xl md:text-3xl font-bold mb-2">Gili Trawangan</h1>
      <p class="text-gray-700 text-lg leading-relaxed">
Gili Trawangan is the largest of the three Gili Islands located off the northwest coast of Lombok, Indonesia. Known for its stunning beaches, crystal-clear waters, and vibrant nightlife, Gili Trawangan is a popular destination for tourists seeking both relaxation and adventure. The island offers a range of activities including snorkeling, diving, and cycling around the island. With no motorized vehicles allowed, the atmosphere is peaceful and laid-back, making it an ideal spot for a tropical getaway.
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
         <p class="text-gray-800 text-lg">Gili Trawangan is an incredible site filled with ancient charm and spiritual energy. The intricate stone carvings and towering structures left me in awe. A must-visit destination for anyone exploring Indonesia’s rich cultural and historical heritage.
          
        </p>
         </p>
            
         </p>
            <p class="font-bold text-blue-900 mt-3">Alexander Han</p>
          </div>
        </div>
        <div class="flex flex-col md:flex-row items-center gap-6 min-w-full">
          <img src="https://randomuser.me/api/portraits/men/65.jpg" class="w-40 h-40 rounded-2xl object-cover" alt="Michael Lee">
          <div>
          <p class="text-gray-800 text-lg">Gili 
Trawangan is a great place to unwind and enjoy the beauty of Indonesia. The beaches are pristine, and the atmosphere is relaxed. I loved snorkeling in the clear waters and exploring the vibrant coral reefs. The local food was delicious, and the sunsets were breathtaking.</p>
          </p>
         </p>
          
          </p>
          </p>
            <p class="font-bold text-blue-900 mt-3">Michael Lee</p>
          </div>
        </div>
        <div class="flex flex-col md:flex-row items-center gap-6 min-w-full">
          <img src="https://randomuser.me/api/portraits/women/68.jpg" class="w-40 h-40 rounded-2xl object-cover" alt="Sophia Brown">
          <div>
           <p class="text-gray-800 text-lg">Beautful 
Gili Trawangan! The island offers a perfect blend of relaxation and adventure. The beaches are stunning, and the local culture is vibrant. I enjoyed cycling around the island and discovering hidden gems. The nightlife was lively, with plenty of bars and restaurants to choose from.</p>
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
