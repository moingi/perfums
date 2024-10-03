document.getElementById("menuToggle").addEventListener("click", function() {
  var navbar = document.getElementById("navbar");
  var menuToggle = document.getElementById("menuToggle");

  // Alternar la clase "open" en el menú y el botón
  navbar.classList.toggle("open");
  menuToggle.classList.toggle("open");
});
