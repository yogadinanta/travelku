const menuButton = document.getElementById("menu-button");
const menu = document.getElementById("menu");
const overlay = document.getElementById("overlay");
const hamburgerIcon = document.getElementById("hamburger-icon");
const closeIcon = document.getElementById("close-icon");

menuButton.addEventListener("click", () => {
  menu.classList.toggle("hidden"); // Toggle menu
  overlay.classList.toggle("hidden"); // Toggle overlay
  hamburgerIcon.classList.toggle("hidden"); // Ubah ikon ke "X"
  closeIcon.classList.toggle("hidden"); 
});

overlay.addEventListener("click", () => {
  menu.classList.add("hidden"); 
  overlay.classList.add("hidden"); 
  hamburgerIcon.classList.remove("hidden"); 
  closeIcon.classList.add("hidden"); 
});
