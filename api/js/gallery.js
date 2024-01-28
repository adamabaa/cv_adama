$(document).ready(function () {
  const images = [
    "./images/diplomes/image8.jpg",
    "./images/diplomes/image9.jpg",
    "./images/diplomes/image10.jpg",
    "./images/diplomes/image20.jpg",
    "./images/diplomes/udacity.jpg",
    "./images/diplomes/image11.jpg",
    "./images/diplomes/image13.jpg",
    "./images/diplomes/image19.jpg",
    "./images/diplomes/image23.jpg",
    "./images/diplomes/image3.png",
    "./images/diplomes/image2.png",
    "./images/diplomes/htmlSololearn.jpg",
    "./images/diplomes/cssSololearn.jpg",
    "./images/diplomes/image16.jpg",
    "./images/diplomes/image24.jpg",
    "./images/diplomes/jsSololearn.jpg",
    "./images/diplomes/image14.jpg",
    "./images/diplomes/image15.jpg",
    "./images/diplomes/image21.jpg",
    "./images/diplomes/image22.jpg",
    "./images/diplomes/image5.jpg",
    "./images/diplomes/image12.jpg",
    "./images/diplomes/image6.jpg",
    "./images/diplomes/image7.jpg",
    "./images/diplomes/image18.jpg",
    "./images/diplomes/image17.jpg",
    "./images/diplomes/image1.png",
    "./images/diplomes/certificat_educative.png",
    "./images/diplomes/Certificat _ADAMA BA.jpg",
    "./images/diplomes/CSS _ Ateliers Complets de Base.jpg",
    "./images/diplomes/WordPress et WooCommerce _ Créer une boutique Ecommerce.jpg",
    "./images/diplomes/PHP 8 _ Les Premiers Pas en PHP.jpg",
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
