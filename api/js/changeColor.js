$(document).ready(function () {
  // Fonction pour basculer entre le mode sombre et lumière
  function toggleDarkMode() {
    $("body").toggleClass("dark-mode");
  }

  // Utiliser l'événement "touchstart" pour les appareils tactiles
  $("#toggleMode").on("click touchstart", function () {
    toggleDarkMode();
  });
});
