<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/blur.css">
    <title>NAVBAR</title>
</head>
<body>

  <header class="navbar_artikel fixed top-0 left-0 w-full z-50 bg-white/20 hover:bg-white/60 shadow-xl duration-500">
   <div class="max-w-[1500px] mx-auto flex justify-between items-center px-6 py-4 w-full">

      <div class="flex items-center gap-3 group">
        <img class="w-24 transition-opacity group-hover:opacity-80" src="../img/./icon/icon_png_travelku.png" alt="Logo Travelku">
      </div>
      <button id="menu-button" class="md:hidden focus:outline-none z-50 relative">
        <svg id="hamburger-icon" class="w-7 h-7 text-[#07203E]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
        </svg>
        <svg id="close-icon" class="w-7 h-7 text-[#07203E] hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
      </button>
 
      <nav id="menu" class="absolute top-20 left-0 w-full md:static md:w-auto md:bg-transparent bg-white md:flex hidden transition duration-300 py-2">
        <ul class="flex flex-col md:flex-row md:space-x-6 text-center md:text-left">
          <li><a href="#" class="block py-3 px-6 text-gray-600 hover:text-red-500">Home</a></li>
          <li><a href="#" class="block py-3 px-6 text-gray-600 hover:text-red-500">About</a></li>
          <li><a href="#service" class="block py-3 px-6 text-gray-600 hover:text-red-500">Services</a></li>
          <li><a href="./assets/kontak.html" class="block py-3 px-6 bg-[#02a7c5] text-white rounded-xl hover:bg-red-500 transition duration-300 font-bold">Contact</a></li>
        </ul>
      </nav>
    </div>
  </header>
</body>
</html>