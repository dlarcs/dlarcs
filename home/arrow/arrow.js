const indicator = document.querySelector('.scroll-indicator');

if (indicator) {
  // Cuántos vh quieres que baje al hacer click
  const SCROLL_AMOUNT_VH = 80;   // 80vh
  // A partir de qué punto (en vh) se esconde la flecha
  const HIDE_AFTER_VH = 510;      // 60vh

  // Función auxiliar para convertir vh a píxeles
  const vhToPx = (vh) => (window.innerHeight / 100) * vh;

  // Scroll suave al hacer click
  indicator.addEventListener('click', () => {
    window.scrollBy({
      top: vhToPx(SCROLL_AMOUNT_VH), // baja 80vh
      behavior: 'smooth'
    });
  });

  // Ocultar al hacer scroll
  window.addEventListener('scroll', () => {
    if (window.scrollY > vhToPx(HIDE_AFTER_VH)) { // si bajó más de 60vh
      indicator.classList.add('hidden');
    } else {
      indicator.classList.remove('hidden');
    }
  });
}
