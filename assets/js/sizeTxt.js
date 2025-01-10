$(document).ready(function () {
  $("#txtSize button").click(function () {
    // Récupérer la taille de police à partir de l'attribut data-size
    let newSize = parseFloat($(this).data("size"));

    // Appliquer la nouvelle taille de police au body
    $("body").css("font-size", newSize + "rem");

    // Mettre à jour la classe active
    $("#txtSize button").removeClass("active");
    $(this).addClass("active");
  });
});
