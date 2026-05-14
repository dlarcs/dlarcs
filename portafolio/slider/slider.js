const portfolioImage = document.querySelector(".portfolio-slider__image");
const portfolioText = document.getElementById("portfolioText");
const portfolioDots = document.getElementById("portfolioDots");

const portfolioSlides = [
  {
    image: "../home/img/fondo10.jpg",
    text: "Proyecto Ullman Sails: diseño web moderno, navegación clara y experiencia visual profesional."
  },
  {
    image: "../home/img/fondo11.jpg",
    text: "Proyecto Lanyards: plataforma visual para mostrar productos personalizados de forma clara."
  },
  {
    image: "../home/img/fondo12.png",
    text: "Proyecto Arbelaez.com.co: portal turístico para impulsar negocios, cultura y turismo local."
  },
  {
    image: "../home/img/fondo13.png",
    text: "Proyecto Chapitour: sitio enfocado en lugares, servicios y experiencias en Chapinero."
  }
];

let currentSlide = 0;
let sliderTimer = null;
const sliderTime = 4000;

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
