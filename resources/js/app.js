import './bootstrap';

// Importaciones necesarias
import Swiper from 'swiper';
import { Autoplay, Pagination } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/pagination';
import 'swiper/css/autoplay';

// Swiper para los testimonios
const testimoniosSwiper = new Swiper('.swiper', {
    modules: [Autoplay, Pagination],
    loop: true,
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    slidesPerView: 1,
    spaceBetween: 20,
    breakpoints: {
        768: {
            slidesPerView: 2,
        },
        1024: {
            slidesPerView: 3,
        },
    },
});

// Swiper para la barra de tecnologías
const tecnologiasSwiper = new Swiper('.tecnologias-swiper', {
    modules: [Autoplay],
    loop: true, // Habilita el loop infinito
    allowTouchMove: false, // Desactiva interacción manual
    autoplay: {
        delay: 0, // Movimiento continuo sin pausas
        disableOnInteraction: false, // No detener el autoplay en interacciones
    },
    speed: 4000, // Velocidad constante para un desplazamiento fluido
    slidesPerView: 'auto', // Ajusta dinámicamente el número de slides visibles
    spaceBetween: 20, // Espaciado entre slides
    loopAdditionalSlides: 16, // Asegura suficientes duplicados para el loop
    centeredSlides: false, // Alineación sin centrado
    cssMode: false, // Evita conflictos de desplazamiento
    breakpoints: {
        640: {
            slidesPerView: 3,
        },
        1024: {
            slidesPerView: 4,
        },
    },
});




