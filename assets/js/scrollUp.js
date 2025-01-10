$(document).ready(function () {
  // Sélection de l'élément par son ID
  var scrollToTopButton = $("#scrollToTop");

  // Affichage ou masquage du bouton lors du défilement
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      scrollToTopButton.fadeIn();
    } else {
      scrollToTopButton.fadeOut();
    }
  });

  // Utilisation de la délégation d'événements pour le clic sur le bouton
  scrollToTopButton.on("click", function () {
    // Arrêt de l'animation en cours et défilement vers le haut
    $("html, body").stop().animate({ scrollTop: 0 }, "slow");
    return false;
  });
});
