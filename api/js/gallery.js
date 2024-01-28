// gallery.js
$(document).ready(function () {
  const images = [
    "/images/diplomes/image8.jpg",
    "/images/diplomes/image9.jpg",
    "/images/diplomes/image10.jpg",
    "/images/diplomes/image20.jpg",
    "/images/diplomes/udacity.jpg",
    "/images/diplomes/image11.jpg",
    "/images/diplomes/image13.jpg",
    "/images/diplomes/image19.jpg",
    "/images/diplomes/image23.jpg",
    "/images/diplomes/image3.png",
    "/images/diplomes/image2.png",
    "/images/diplomes/htmlSololearn.jpg",
    "/images/diplomes/cssSololearn.jpg",
    "/images/diplomes/image16.jpg",
    "/images/diplomes/image24.jpg",
    "/images/diplomes/jsSololearn.jpg",
    "/images/diplomes/image14.jpg",
    "/images/diplomes/image15.jpg",
    "/images/diplomes/image21.jpg",
    "/images/diplomes/image22.jpg",
    "/images/diplomes/image5.jpg",
    "/images/diplomes/image12.jpg",
    "/images/diplomes/image6.jpg",
    "/images/diplomes/image7.jpg",
    "/images/diplomes/image18.jpg",
    "/images/diplomes/image17.jpg",
    "/images/diplomes/image1.png",
    "/images/diplomes/certificat_educative.png",
    "/images/diplomes/Certificat _ADAMA BA.jpg",
    "/images/diplomes/CSS _ Ateliers Complets de Base.jpg",
    "/images/diplomes/WordPress et WooCommerce _ Créer une boutique Ecommerce.jpg",
    "/images/diplomes/PHP 8 _ Les Premiers Pas en PHP.jpg",
  ];

  function generateCarouselItems() {
    let html = "";
    for (let i = 0; i < images.length; i += 4) {
      html += `<div class="carousel-item ${
        i === 0 ? "active" : ""
      }"><div class="row">`;

      for (let j = i; j < i + 4 && j < images.length; j++) {
        html += `<div class="col"><a href="${
          images[j]
        }" data-lightbox="gallery"><img src="${images[j]}" alt="Image ${
          j + 1
        }" class="img-fluid img-thumbnail"></a></div>`;
      }

      html += `</div></div>`;
    }
    $("#photoGallery .carousel-inner").html(html);
  }

  generateCarouselItems();
});
