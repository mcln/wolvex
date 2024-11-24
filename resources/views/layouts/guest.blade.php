<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'wolvex.cl | Soluciones informáticas para tu PYME') }}</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('favicon.png') }}" type="image/png">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/styles.css', 'resources/js/texto_animado.js'])

    <!-- Styles -->
    @livewireStyles

    {{-- Google ReCaptcha Enterprice --}}
    <script src="https://www.google.com/recaptcha/enterprise.js?render=6LfdSnoqAAAAALqvLr_Wb6NyjFR133l9jaZ3xy6x"></script>


    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    {{-- Animate.css --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

</head>

<body>
    <nav class="bg-black w-full z-30 fixed top-0 left-0 transition-all duration-300" id="navbar">
        <div class="mx-auto px-2 sm:px-6 h-12 flex items-center justify-between">
            <!-- Logo -->
            <a href="{{ route('home') }}" class="flex items-center">
                <img src="{{ asset('storage/assets/logo_wolvex_home.png') }}" alt="Logo de wolvex" class="h-12 w-auto">
            </a>

            <!-- Hamburger Icon for Mobile -->
            <button class="md:hidden text-white focus:outline-none pr-4 relative z-50" id="menu-toggle">
                <svg id="hamburger-icon" class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7">
                    </path>
                </svg>
                <svg id="close-icon" class="hidden w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24">
                    <path
                        d="M18.36 5.64a1 1 0 0 0-1.41 0L12 10.59 7.05 5.64a1 1 0 1 0-1.41 1.41L10.59 12l-4.95 4.95a1 1 0 1 0 1.41 1.41L12 13.41l4.95 4.95a1 1 0 0 0 1.41-1.41L13.41 12l4.95-4.95a1 1 0 0 0 0-1.41Z">
                    </path>
                </svg>
            </button>

            <!-- Menú móvil -->
            <ul id="mobile-menu"
                class="md:hidden fixed top-0 right-0 h-full w-64 transform translate-x-full transition-transform duration-300 z-50 shadow-lg p-4 bg-black">
                <li class="mt-10">
                    <a href="{{ route('home') }}" class="mobile-menu-button">
                        <i class="fas fa-home mr-2"></i> Inicio
                    </a>
                </li>
                <li>
                    <a href="{{ route('services') }}" class="mobile-menu-button">
                        <i class="fas fa-concierge-bell mr-2"></i> Servicios
                    </a>
                </li>
                <li>
                    <a href="{{ route('about') }}" class="mobile-menu-button">
                        <i class="fas fa-users mr-2"></i> Nosotros
                    </a>
                </li>
                <li>
                    <a href="{{ route('contact') }}" class="mobile-menu-button">
                        <i class="fas fa-envelope mr-2"></i> Contacto
                    </a>
                </li>
            </ul>


            <!-- Menú principal -->
            <ul class="hidden md:flex items-center ml-auto space-x-3 text-sm">
                <li>
                    <a href="{{ route('home') }}" class="menu-button">Inicio</a>
                </li>
                <li>
                    <a href="{{ route('services') }}" class="menu-button">Servicios</a>
                </li>
                <li>
                    <a href="{{ route('about') }}" class="menu-button">Nosotros</a>
                </li>
                <li>
                    <a href="{{ route('contact') }}" class="menu-button">Contacto</a>
                </li>
            </ul>

        </div>
    </nav>

    <div class="font-sans text-gray-900 dark:text-gray-100 antialiased">
        @yield('content')
    </div>

    @livewireScripts

    {{-- Alpije.JS --}}
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

    <!-- JavaScript for Mobile Menu Toggle -->
    {{--    <script>
        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');

        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script> --}}

    <!-- JavaScript para el oscurecimiento del menu -->
    <script>
        window.onscroll = function() {
            toggleNavbar();
        };

        function toggleNavbar() {
            var navbar = document.getElementById("navbar");
            var windowWidth = window.innerWidth;

            if (window.scrollY > 50 && windowWidth >= 768) { // Afecta solo a pantallas grandes
                navbar.classList.add("bg-gray-800", "bg-opacity-80", "pt-2", "pb-2");
                navbar.classList.remove("bg-transparent");
            } else if (windowWidth >= 768) { // Mantiene la transparencia en la parte superior
                navbar.classList.remove("bg-gray-800", "bg-opacity-80", "pt-2", "pb-2");
                navbar.classList.add("bg-transparent");
            }
        }
    </script>


    {{-- movimiento de contenedor para llamar atencion --}}
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const importanteContainer = document.getElementById('importante-container');

            window.addEventListener('scroll', function() {
                const scrollPos = window.scrollY;

                // Escala el contenedor si está en el rango de scroll indicado
                if (scrollPos > 200 && scrollPos < 800) {
                    importanteContainer.classList.add('scale-105', 'opacity-100');
                    importanteContainer.classList.remove('scale-100', 'opacity-75');
                } else {
                    importanteContainer.classList.remove('scale-105', 'opacity-100');
                    importanteContainer.classList.add('scale-100', 'opacity-75');
                }
            });
        });
    </script>

    {{-- abrir un contenedor para que despliegue mas informacion tipo ventana SERVICIOS/INICIO --}}
    <script>
        function toggleServiceInfo(service) {
            // Obtener el contenedor de botones para la sección
            const buttonsContainer = document.getElementById(service + '-buttons');
            const button = document.getElementById(service + '-button');

            // Alternar la visibilidad
            buttonsContainer.classList.toggle('hidden');

            // Cambiar el texto del botón
            if (buttonsContainer.classList.contains('hidden')) {
                button.textContent = "Más Información";
            } else {
                button.textContent = "Ocultar Info";
            }
        }
    </script>

    {{-- abrir un contenedor para que despliegue mas informacion tipo ventana SERVICIOS/TIPOS --}}
    <script>
        function togglePlans(plan, button) {
            const plans = document.getElementById(`${plan}-plans`);

            // Toggle visibility of the plans section
            plans.classList.toggle('hidden');

            // Change the button text based on the visibility of the plans
            if (plans.classList.contains('hidden')) {
                button.innerText = 'Ver valores'; // When hidden, show 'Ver valores'
            } else {
                button.innerText = 'Ocultar valores'; // When visible, show 'Ocultar valores'
            }
        }
    </script>

    {{-- // Función para hacer scroll al top --}}
    <script>
        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth' // Hace que el scroll sea suave
            });
        }
    </script>

    {{-- contenedor se cierre cuando el usuario haga clic en cualquier parte fuera del contenedor --}}
    <script>
        let activeContainer = null;

        function toggleServiceInfo(serviceId) {
            const clickedContainer = document.getElementById(serviceId + '-buttons');
            const allContainers = document.querySelectorAll('[id$="-buttons"]');

            // Cerrar todos los contenedores primero
            allContainers.forEach(container => {
                if (container !== clickedContainer) {
                    container.classList.add('hidden');
                    container.style.height = '0';
                }
            });

            // Manejar el contenedor clickeado
            if (clickedContainer === activeContainer) {
                // Si se clickea el mismo contenedor, cerrarlo
                clickedContainer.style.height = '0';
                setTimeout(() => {
                    clickedContainer.classList.add('hidden');
                }, 300); // Coincidir con la duración de la transición
                activeContainer = null;
            } else {
                // Abrir el nuevo contenedor
                clickedContainer.classList.remove('hidden');
                // Usar scrollHeight para obtener la altura real del contenido
                const height = clickedContainer.querySelector('.space-y-4').scrollHeight;
                clickedContainer.style.height = height + 'px';
                activeContainer = clickedContainer;
            }
        }

        // Cerrar al hacer clic fuera
        window.addEventListener('click', function(event) {
            const isButton = event.target.closest('[id$="-button"]');
            const isContainer = event.target.closest('[id$="-buttons"]');

            if (!isButton && !isContainer && activeContainer) {
                activeContainer.style.height = '0';
                setTimeout(() => {
                    activeContainer.classList.add('hidden');
                }, 300);
                activeContainer = null;
            }
        });
    </script>

    {{-- Muestra un contenedor y lo oculta --}}
    <script>
        let activeService = null;

        // Toggle service visibility with smoother transition
        function toggleService(serviceId) {
            const content = document.getElementById(`service-content-${serviceId}`);
            const description = document.getElementById(`service-description-${serviceId}`);

            // If there's an active service and it's not the current one, close it
            if (activeService !== null && activeService !== serviceId) {
                document.getElementById(`service-content-${activeService}`).classList.remove('hidden');
                document.getElementById(`service-description-${activeService}`).classList.add('opacity-0', 'max-h-0');
                activeService = serviceId;
            }

            // Toggle the current service visibility
            if (content.classList.contains('hidden')) {
                content.classList.remove('hidden');
                description.classList.remove('opacity-0', 'max-h-0');
                description.classList.add('opacity-100', 'max-h-[500px]'); // You can adjust max-height as needed
                activeService = serviceId;
            } else {
                content.classList.add('hidden');
                description.classList.add('opacity-0', 'max-h-0');
            }
        }
    </script>

    <script>
        // Para agregar una animación de "click" sin que los contenedores se giren al mismo tiempo
        function toggleFlip(serviceId) {
            const flipBox = document.querySelectorAll('.flip-box')[serviceId];
            flipBox.querySelector('.flip-box-inner').style.transform = 'rotateY(180deg)';
            setTimeout(() => {
                flipBox.querySelector('.flip-box-inner').style.transform = '';
            }, 600); // Tiempo que dura el flip
        }
    </script>

    <script>
        function onSubmit(event) {
            event.preventDefault();
            grecaptcha.enterprise.ready(async () => {
                const token = await grecaptcha.enterprise.execute('6LfdSnoqAAAAALqvLr_Wb6NyjFR133l9jaZ3xy6x', {
                    action: 'contact_form'
                });
                document.querySelector('form').appendChild(createHiddenInput(token));
                document.querySelector('form').submit();
            });
        }

        function createHiddenInput(token) {
            const input = document.createElement('input');
            input.type = 'hidden';
            input.name = 'recaptcha_token';
            input.value = token;
            return input;
        }
    </script>

    <script>
        document.addEventListener("scroll", function() {
            const section = document.querySelector(".relative.py-16.bg-white"); // Sección contenedora
            const image = section.querySelector(".parallax-image"); // Imagen dentro de la sección

            const sectionTop = section.getBoundingClientRect().top; // Distancia de la sección al top de la ventana
            const sectionBottom = section.getBoundingClientRect().bottom; // Parte inferior de la sección
            const windowHeight = window.innerHeight; // Altura de la ventana

            if (sectionTop < windowHeight && sectionBottom > 0) {
                // Si la sección es visible en la ventana
                const scrollTop = window.scrollY; // Cantidad de desplazamiento vertical
                const offset = (windowHeight - sectionTop) * 0.1; // Ajuste para el efecto de parallax
                image.style.transform = `translateY(${offset}px)`; // Desplazar imagen
            } else {
                // Si la sección no está visible, restablecer la posición
                image.style.transform = "translateY(0)";
            }
        });
    </script>

    <script>
        // Selección de elementos
        const menuToggle = document.getElementById("menu-toggle");
        const mobileMenu = document.getElementById("mobile-menu");

        // Mostrar/ocultar menú móvil
        menuToggle.addEventListener("click", () => {
            mobileMenu.classList.toggle("translate-x-full");
        });

        // Cerrar menú móvil al hacer clic fuera
        document.addEventListener("click", (e) => {
            const isMenuClick = mobileMenu.contains(e.target);
            const isToggleClick = menuToggle.contains(e.target);

            if (!isMenuClick && !isToggleClick) {
                mobileMenu.classList.add("translate-x-full");
            }
        });
    </script>

    <!-- Footer -->
    <footer class="bg-black text-white py-2">
        <p class="mt-4 text-center text-sm italic">© 2024 wolvex.cl - Todos los derechos reservados.</p>
    </footer>

</body>

</html>
