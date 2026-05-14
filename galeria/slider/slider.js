const portfolioImage = document.querySelector(".portfolio-slider__image");
const portfolioText = document.getElementById("portfolioText");
const portfolioDots = document.getElementById("portfolioDots");

const portfolioSlides = [
  {
    image: "../home/img/fondo10.jpg",
    text: "Galería de secciones: explora diferentes diseños para organizar el contenido de tu página web."
  },
  {
    image: "../home/img/fondo11.jpg",
    text: "Estilos visuales: descubre combinaciones de colores, formas, fondos y detalles para darle identidad a tu sitio."
  },
  {
    image: "../home/img/fondo12.png",
    text: "Vista previa de tu página: imagina cómo se pueden ver tus secciones antes de crear el diseño final."
  },
  {
    image: "../home/img/fondo13.png",
    text: "Ideas personalizadas: encuentra inspiración para botones, tarjetas, sliders, galerías y animaciones."
  }
];

let currentSlide = 0;
let sliderTimer = null;
const sliderTime = 8000;

function createPortfolioDots() {
  portfolioSlides.forEach((slide, index) => {
    const dot = document.createElement("button");

    dot.classList.add("portfolio-slider__dot");
    dot.type = "button";
    dot.setAttribute("aria-label", `Ir al slide ${index + 1}`);

    dot.addEventListener("click", () => {
      currentSlide = index;
      changePortfolioSlide();
      restartSliderTimer();
    });

    portfolioDots.appendChild(dot);
  });
}

function updatePortfolioDots() {
  const dots = document.querySelectorAll(".portfolio-slider__dot");

  dots.forEach((dot, index) => {
    dot.classList.toggle("is-active", index === currentSlide);
  });
}

function changePortfolioSlide() {
  const slide = portfolioSlides[currentSlide];

  portfolioImage.style.backgroundImage = `url('${slide.image}')`;
  portfolioText.textContent = slide.text;

  updatePortfolioDots();

  currentSlide++;

  if (currentSlide >= portfolioSlides.length) {
    currentSlide = 0;
  }
}

function restartSliderTimer() {
  clearInterval(sliderTimer);
  sliderTimer = setInterval(changePortfolioSlide, sliderTime);
}

createPortfolioDots();
changePortfolioSlide();
restartSliderTimer();
