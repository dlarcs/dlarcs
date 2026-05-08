const slides = document.querySelectorAll('.newsletter_slide');
const dots = document.querySelectorAll('.newsletter_dot');

let currentSlide = 0;

function showSlide(index) {
  slides.forEach((slide) => {
    slide.classList.remove('is-active');
  });

  dots.forEach((dot) => {
    dot.classList.remove('is-active');
  });

  slides[index].classList.add('is-active');
  dots[index].classList.add('is-active');

  currentSlide = index;
}

dots.forEach((dot, index) => {
  dot.addEventListener('click', () => {
    showSlide(index);
  });
});

setInterval(() => {
  let nextSlide = currentSlide + 1;

  if (nextSlide >= slides.length) {
    nextSlide = 0;
  }

  showSlide(nextSlide);
}, 4000);
