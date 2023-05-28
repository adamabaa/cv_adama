// Attendre que le contenu de la page soit chargé
window.addEventListener("load", function () {
  // Afficher le contenu et masquer le loader
  document.getElementById("content").classList.remove("hidden");
  document.querySelector(".loader-container").style.display = "none";
});
