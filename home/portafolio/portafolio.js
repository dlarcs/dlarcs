const whatsappNumber = '573138846378';

const plans = [
  {
    name: 'Básica',
    monthlyPrice: 500000,
    yearlyPrice: 150000,
    description: 'Ideal para negocios que necesitan una presencia digital clara, sencilla y profesional.',
    buttonText: 'Elegir Página Básica',
    pro: false,
    features: [
      '✓ Página web de 5 sección',
      '✓ Diseño responsive para celular y computador',
      '✓ Información básica del negocio',
      '✓ Botón de WhatsApp',
      '✓ Enlace a redes sociales',
      '✓ Optimización básica para Google'
    ]
  },
  {
    name: 'Pro',
    monthlyPrice: 1200000,
    yearlyPrice: 200000,
    description: 'Perfecta para negocios que quieren mostrar mejor sus servicios, productos y generar más confianza.',
    buttonText: 'Elegir Página Pro',
    pro: true,
    features: [
      '✓ Todo lo incluido en la Página Básica',
      '✓ Hasta 4 pagínas internas ',
      '✓ Galería de imágenes',
      '✓ Formulario de contacto',
      '✓ Mapa de ubicación',
      '✓ Optimización SEO más completa',
      '✓ Diseño más personalizado'
    ]
  },
  {
    name: 'Premium',
    monthlyPrice: 1300000,
    yearlyPrice: 250000,
    description: 'La opción más completa para negocios que quieren una página más robusta, visual y preparada para crecer.',
    buttonText: 'Elegir Página Premium',
    pro: false,
    features: [
      '✓ Todo lo incluido en la Página Pro',
      '✓ Diseño premium personalizado',
      '✓ Animaciones suaves',
      '✓ Más secciones para servicios o productos',
      '✓ Integración con WhatsApp y redes sociales',
      '✓ Mejor estructura SEO',
      '✓ Soporte inicial después de la entrega'
    ]
  }
];

let yearly = false;

const toggle = document.getElementById('pricingToggle');
const cards = document.getElementById('pricingCards');

function formatCOP(price) {
  return new Intl.NumberFormat('es-CO', {
    style: 'currency',
    currency: 'COP',
    maximumFractionDigits: 0
  }).format(price);
}

function getWhatsAppMessage(plan, price) {
  return `Hola, quiero información sobre la ${plan.name}.

Precio: ${formatCOP(price)}

Por favor, estos son mis datos principales:

- Nombre:
- Nombre del negocio:
- Tipo de negocio:
- Ciudad:
- Número de WhatsApp:
- Correo electrónico:
- Redes sociales:
- ¿Ya tengo logo?:
- ¿Ya tengo fotos o imágenes?:
- ¿Qué servicios o productos quiero mostrar?:
- ¿Qué objetivo quiero lograr con la página?:
- Comentarios adicionales:`;
}

function getWhatsAppLink(message) {
  return `https://wa.me/${whatsappNumber}?text=${encodeURIComponent(message)}`;
}

function renderPlans() {
  cards.innerHTML = plans.map(plan => {
    const price = yearly ? plan.yearlyPrice : plan.monthlyPrice;
    const message = getWhatsAppMessage(plan, price);

    return `
    <article class="price-card">
        <h3>${plan.name}</h3>
        <div class="price-card__price">${formatCOP(price)}</div>
        <p>${plan.description}</p>
        <a
          class="price-card__button ${plan.pro ? 'price-card--pro' : ''}"
          href="${getWhatsAppLink(message)}"
          target="_blank"
          rel="noopener noreferrer"
        >
          ${plan.buttonText}
        </a>

        <ul>
          ${plan.features.map(feature => `<li>${feature}</li>`).join('')}
        </ul>
      </article>
    `;
  }).join('');
}

if (toggle && cards) {
  toggle.addEventListener('click', () => {
    yearly = !yearly;
    toggle.classList.toggle('is-active', yearly);
    renderPlans();
  });

  renderPlans();
}
