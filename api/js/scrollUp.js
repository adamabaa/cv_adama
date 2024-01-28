$(document).ready(function () {
  // Vérifier l'existence de l'élément avant d'attacher des événements
  var scrollToTopButton = $("#scrollToTop");
  if (scrollToTopButton.length) {
    // Afficher ou masquer le bouton en fonction de la position de défilement
    $(window).scroll(function () {
      if ($(this).scrollTop() > 100) {
        scrollToTopButton.fadeIn();
      } else {
        scrollToTopButton.fadeOut();
      }
    });

    // Utiliser la délégation d'événements pour le bouton
    $(document).on("click", "#scrollToTop", function () {
      $("html, body").animate({ scrollTop: 0 }, "slow");
      return false;
    });
  }
});
