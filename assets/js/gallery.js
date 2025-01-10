$(document).ready(function () {
  const images = [
    "/assets/images/diplomes/image8.jpg",
    "/assets/images/diplomes/image9.jpg",
    "/assets/images/diplomes/image10.jpg",
    "/assets/images/diplomes/image20.jpg",
    "/assets/images/diplomes/udacity.jpg",
    "/assets/images/diplomes/image11.jpg",
    "/assets/images/diplomes/image13.jpg",
    "/assets/images/diplomes/image19.jpg",
    "/assets/images/diplomes/image23.jpg",
    "/assets/images/diplomes/image3.png",
    "/assets/images/diplomes/image2.png",
    "/assets/images/diplomes/htmlSololearn.jpg",
    "/assets/images/diplomes/cssSololearn.jpg",
    "/assets/images/diplomes/image16.jpg",
    "/assets/images/diplomes/image24.jpg",
    "/assets/images/diplomes/jsSololearn.jpg",
    "/assets/images/diplomes/image14.jpg",
    "/assets/images/diplomes/image15.jpg",
    "/assets/images/diplomes/image21.jpg",
    "/assets/images/diplomes/image22.jpg",
    "/assets/images/diplomes/image5.jpg",
    "/assets/images/diplomes/image12.jpg",
    "/assets/images/diplomes/image6.jpg",
    "/assets/images/diplomes/image7.jpg",
    "/assets/images/diplomes/image18.jpg",
    "/assets/images/diplomes/image17.jpg",
    "/assets/images/diplomes/image1.png",
    "/assets/images/diplomes/certificat_educative.png",
    "/assets/images/diplomes/Certificat _ADAMA BA.jpg",
    "/assets/images/diplomes/CSS _ Ateliers Complets de Base.jpg",
    "/assets/images/diplomes/WordPress et WooCommerce _ Créer une boutique Ecommerce.jpg",
    "/assets/images/diplomes/PHP 8 _ Les Premiers Pas en PHP.jpg",
  ];

  function generateCarouselItems() {
    const items = images.map((image, index) => {
      const isActive = index === 0 ? "active" : "";
      return `
        <div class="carousel-item ${isActive}">
          <div class="row">
            ${generateColumns(index)}
          </div>
        </div>
      `;
    });

    $("#photoGallery .carousel-inner").html(items.join(""));
  }

  function generateColumns(startIndex) {
    return images
      .slice(startIndex, startIndex + 4)
      .map(
        (image) => `
        <div class="col">
          <a href="${image}" data-lightbox="gallery">
            <img src="${image}" alt="Image" class="img-fluid img-thumbnail">
          </a>
        </div>
      `
      )
      .join("");
  }

  generateCarouselItems();
});
