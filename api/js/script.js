// Attendre que le contenu de la page soit chargé
window.addEventListener("load", function () {
  // Afficher le contenu et masquer le loader
  document.getElementById("content").classList.remove("hidden");
  document.querySelector(".loader").style.display = "none";
});

// Définissez les éléments à animer
const sections = document.querySelectorAll("section");

// Définissez les paramètres de l'animation
const animationParams = {
  targets: sections,
  opacity: [0, 1],
  translateY: [50, 0],
  duration: 1000,
  easing: "easeOutQuad",
  delay: anime.stagger(100),
};

// Fonction pour déclencher l'animation lors du chargement de la page
function triggerAnimation() {
  anime(animationParams);
}
