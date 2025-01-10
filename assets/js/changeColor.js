$(document).ready(function () {
  $(".navbar-nav a").on("click", function () {
    $(".navbar-collapse").collapse("hide");
  });

  $("#toggleMode").on("click", function () {
    $("body").toggleClass("dark-mode");
    $(this).find("i").toggleClass("text-dark text-light");
  });
});
