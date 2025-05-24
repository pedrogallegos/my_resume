import './bootstrap';
import * as bootstrap from 'bootstrap'; // Importa Bootstrap JS

// Importa AOS si lo vas a usar (asegúrate de haberlo instalado con npm install aos)
import AOS from 'aos';
import 'aos/dist/aos.css'; // Importa el CSS de AOS también aquí
AOS.init({
    duration: 1000, // Duración de la animación en milisegundos
    once: true,    // Si las animaciones deben ocurrir solo una vez
});

// Colapsar el navbar responsivo cuando un enlace de navegación es clickeado (para móviles)
const navbarToggler = document.querySelector('.navbar-toggler');
if (navbarToggler) {
    const navbarSupportedContent = document.querySelector('#navbarSupportedContent'); // ID del div que se colapsa
    if (navbarSupportedContent) {
        navbarSupportedContent.addEventListener('click', (event) => {
            // Si el clic fue en un nav-link y el navbar está expandido
            if (event.target.classList.contains('nav-link') && navbarToggler.getAttribute('aria-expanded') === 'true') {
                navbarToggler.click(); // Simula un clic en el botón de toggle para colapsar
            }
        });
    }
}

// Smooth scrolling para los enlaces internos (Home, Resume, Projects, Contact)
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        const targetId = this.getAttribute('href');
        const targetElement = document.querySelector(targetId);

        if (targetElement) {
            window.scrollTo({
                top: targetElement.offsetTop,
                behavior: 'smooth'
            });
        }
    });
});