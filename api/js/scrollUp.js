$(document).ready(function () {
  // Sélection de l'élément par sa classe
  var scrollToTopButton = $(".scroll-to-top");

  // Vérification de la présence de l'élément (optionnelle si le script est inclus en bas de la page)
  // if (scrollToTopButton.length) {

  // Affichage ou masquage du bouton lors du défilement
  $(window).scroll(function () {
    scrollToTopButton.fadeToggle($(this).scrollTop() > 100);
  });

  // Utilisation de la délégation d'événements pour le clic sur le bouton
  $(document).on("click", ".scroll-to-top", function () {
    // Arrêt de l'animation en cours et défilement vers le haut
    $("html, body").stop().animate({ scrollTop: 0 }, "slow");
    return false;
  });
  // }
});
