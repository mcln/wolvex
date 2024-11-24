const phrases = [
    "Creamos páginas web fáciles de usar\npara que tu negocio crezca",
    "Diseñamos tiendas online que\nimpulsan tus ventas rápidamente",
    "Te ayudamos a ser más visible\nen Google con SEO",
    "Tu página estará siempre segura\ny actualizada",
    "Un logo único que refleje\ntu marca de manera profesional",
    "Fortalecemos tu identidad\npara destacar en el mercado",
    "Material corporativo que refuerza\ntu presencia y credibilidad",
    "Mejoramos tus redes sociales\npara atraer más clientes",
    "Soporte técnico para que\nte enfoques en hacer crecer tu negocio",
    "Soluciones de Inteligencia Artificial\npara ahorrar tiempo y dinero"
];

let phraseIndex = 0;
let letterIndex = 0;
let currentText = '';
let isDeleting = false;

const typingSpeed = 50;
const deletingSpeed = 30;
const delayBetweenPhrases = 2000;

const animatedTextElement = document.querySelector('.animated-text');

function type() {
    const currentPhrase = phrases[phraseIndex];
    
    if (isDeleting) {
        // Borrando texto
        currentText = currentPhrase.substring(0, letterIndex - 1);
        letterIndex--;
    } else {
        // Escribiendo texto
        currentText = currentPhrase.substring(0, letterIndex + 1);
        letterIndex++;
    }

    animatedTextElement.textContent = currentText;

    let typeSpeed = isDeleting ? deletingSpeed : typingSpeed;

    if (!isDeleting && letterIndex === currentPhrase.length) {
        // Terminó de escribir, esperar antes de borrar
        typeSpeed = delayBetweenPhrases;
        isDeleting = true;
    } else if (isDeleting && letterIndex === 0) {
        // Terminó de borrar, pasar a la siguiente frase
        isDeleting = false;
        phraseIndex = (phraseIndex + 1) % phrases.length;
    }

    setTimeout(type, typeSpeed);
}

// Iniciar la animación cuando se carga la página
document.addEventListener('DOMContentLoaded', function() {
    setTimeout(type, typingSpeed);
});




