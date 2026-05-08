document.addEventListener("DOMContentLoaded", () => {
  const imagesLeft = [
    "home/img_card/paginas1.png",
    "home/img_card/paginas2.png",
    "home/img_card/paginas3.png",
    "home/img_card/paginas4.png",
    "home/img_card/paginas5.png",
    "home/img_card/paginas6.png",
    "home/img_card/paginas7.png",
    "home/img_card/paginas8.png",
    "home/img_card/paginas9.png",
    "home/img_card/paginas10.png",
    "home/img_card/paginas11.png",
    "home/img_card/paginas12.png",
  ];

  const imagesRight = [
    "home/img_card/blog1.png",
    "home/img_card/blog2.png",
    "home/img_card/porfafolio_viajes.png",
    "home/img_card/portafolio_veterinaria.png",
    "home/img_card/blog3.png",
    "home/img_card/paginas13.png",
    "home/img_card/paginas14.png",
    "home/img_card/paginas15.png",
    "home/img_card/paginas16.png",
    "home/img_card/paginas17.png",
    "home/img_card/paginas18.png",
    "home/img_card/paginas19.png",
    "home/img_card/blog4.png",
    "home/img_card/blog5.png",
  ];

  const marquees = document.querySelectorAll(".marquee_container");

  marquees.forEach((marquee) => {
    const track = marquee.querySelector(".logo-track");
    const template = marquee.querySelector(".logo-template");
    const inner = marquee.querySelector(".marquee-inner");

    if (!track || !template || !inner) return;

    const images = marquee.classList.contains("marquee_right")
      ? imagesRight
      : imagesLeft;

    [...images, ...images].forEach((src, index) => {
      const img = template.content.cloneNode(true).querySelector("img");

      img.src = src;
      img.alt = `Imagen ${index + 1}`;
      img.decoding = "async";
      img.loading = "lazy";
      img.classList.add("logo-img");
      img.draggable = false;

      track.appendChild(img);
    });

    let isDragging = false;
    let startX = 0;
    let scrollLeft = 0;

    marquee.addEventListener("mousedown", (event) => {
      isDragging = true;
      marquee.classList.add("is-dragging");

      startX = event.pageX;
      scrollLeft = marquee.scrollLeft;

      inner.style.animationPlayState = "paused";
    });

    marquee.addEventListener("mousemove", (event) => {
      if (!isDragging) return;

      event.preventDefault();

      const moveX = event.pageX - startX;
      marquee.scrollLeft = scrollLeft - moveX;
    });

    marquee.addEventListener("mouseup", () => {
      isDragging = false;
      marquee.classList.remove("is-dragging");
      inner.style.animationPlayState = "running";
    });

    marquee.addEventListener("mouseleave", () => {
      isDragging = false;
      marquee.classList.remove("is-dragging");
      inner.style.animationPlayState = "running";
    });
  });
});
