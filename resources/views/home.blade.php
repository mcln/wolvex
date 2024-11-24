<!-- resources/views/home.blade.php -->
@extends('layouts.guest')

@section('content')
    <header class="relative h-screen w-full overflow-hidden z-0">
        <!-- Video de fondo -->
        <video autoplay muted loop playsinline class="absolute top-0 left-0 w-full h-full object-cover z-0">
            <?php
            $videos = ['video_hexagonos_verdes.webm', 'video_triangulos_verdes_claro.webm', 'video_triangulos_verdes_limon.webm', 'video_triangulos_verdes_limon2.webm', 'video_triangulos_verdes_limon3.webm'];
            $random_video = $videos[array_rand($videos)];
            ?>
            <source src="{{ asset('storage/assets/videos/' . $random_video) }}" type="video/webm">
        </video>

        <!-- Superposición semitransparente -->
        <div class="absolute inset-0 bg-black bg-opacity-30 z-10"></div>

        <!-- Contenido del encabezado -->
        <div class="relative z-20 flex flex-col items-end justify-center h-full text-right text-white pr-4 md:pr-8 lg:pr-10 px-4 sm:px-6">
            <h1 class="text-2xl sm:text-3xl lg:text-4xl italic">Potencia tu Emprendimiento</h1>
            <div class="animated-text-container">
                <p class="animated-text text-2xl sm:text-2xl lg:text-4xl font-bold"></p>
            </div>
            <a href="{{ route('services') }}"
                class="mt-6 bg-black text-white font-semibold py-2 px-6 inline-block transform transition-all duration-300 hover:scale-110 hover:shadow-2xl hover:shadow-verde-bonito hover:bg-verde-bonito hover:text-black">
                Descubre cómo podemos impulsar tu negocio.
            </a>
        </div>
    </header>

    {{-- LLAMADA A LA ACCION 1 --}}
    <section class="relative py-16 bg-white">
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col lg:flex-row items-center">
            <!-- Contenido Izquierdo -->
            <div class="text-center lg:text-left lg:w-1/2">
                <h2 class="text-3xl font-extrabold text-black mb-6">Haz crecer tu negocio con herramientas digitales simples
                    y efectivas
                </h2>
                <p class="text-lg text-black mb-8">¿Eres <strong>emprendedor</strong> o diriges una
                    <strong>pyme</strong>? No necesitas complicarte. Te
                    ayudamos a digitalizar y optimizar tu negocio con soluciones prácticas y modernas: páginas web
                    funcionales, automatización de tareas y estrategias de marketing adaptadas a tu realidad.

                </p>
                <p class="text-lg text-black mb-8">Además,
                    utilizamos <strong>inteligencia artificial </strong> identificar oportunidades y diseñar soluciones
                    inteligentes que
                    impulsan tu crecimiento de manera eficiente.</p>
                <a href="{{ route('contact') }}"
                    class="bg-black text-white font-semibold py-2 px-4 mb-6 inline-block transform transition-all duration-300 hover:scale-110 hover:shadow-2xl hover:shadow-verde-bonito hover:bg-verde-bonito hover:text-black">
                    Descubre cómo simplificar tus procesos <br>y aumentar tu eficiencia!
                </a>
            </div>

            <!-- Imagen Derecha -->
            <div class="mt-8 lg:mt-0 lg:w-1/2 flex justify-center">
                <img src="{{ asset('storage/assets/home1.png') }}" alt="Soluciones Digitales"
                    class="max-w-full h-auto parallax-image">
            </div>
        </div>
    </section>

    {{-- TRIANGULO SEPARADOR TOP --}}
    <div class="triangle-separator relative min-h-[200px]">

        <!-- SVG del triángulo encima del fondo -->
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none"
            class="w-full absolute bottom-0">
            <polygon points="0,0 1000,100 0,100" class="triangle fill-white"></polygon>
        </svg>
    </div>

    {{-- SERVICIOS PRINCIPALES --}}
    <section class="pb-12 bg-verde-bonito">
        <h2 class="text-3xl font-extrabold text-black text-center mb-12">Nuestros Servicios</h2>
        <div class="container mx-auto px-4 mt-6">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- Servicio: Desarrollo Web -->
                <div class="flip-box animate__animated" data-animation="animate__flipInY">
                    <div class="flip-box-inner">
                        <!-- Frontal -->
                        <div class="flip-box-front">
                            <div class="flex flex-col justify-center items-center h-full space-y-4">
                                <i class="fas fa-code text-4xl text-green-500"></i>
                                <h3 class="flip-box-title">Desarrollo Web</h3>
                            </div>
                        </div>
                        <!-- Reverso -->
                        <div class="flip-box-back">
                            <p>
                                Creación de sitios web adaptados a las necesidades de tu negocio, asegurando rendimiento y
                                escalabilidad.
                            </p>
                            <button onclick="window.location.href='{{ route('services') }}';"
                                class="bg-black text-white font-semibold py-2 px-4 mb-6 inline-block transform transition-all duration-300 hover:scale-110 hover:shadow-2xl hover:shadow-verde-bonito hover:bg-verde-bonito hover:text-black">
                                Más detalles
                            </button>
                        </div>
                    </div>
                </div>


                <!-- Servicio: Diseño Web -->
                <div class="flip-box animate__animated" data-animation="animate__flipInY">
                    <div class="flip-box-inner">
                        <div class="flip-box-front">
                            <div class="flex flex-col justify-center items-center h-full space-y-4">
                                <i class="fas fa-paint-brush text-4xl text-green-500"></i>
                                <h3 class="flip-box-title">Diseño Web</h3>
                            </div>
                        </div>
                        <div class="flip-box-back">
                            <p>Diseños atractivos y funcionales que reflejan la identidad de tu marca y mejoran la
                                experiencia de usuario.</p>
                            <p><button onclick="window.location.href='{{ route('services') }}';"
                                    class="bg-black text-white font-semibold py-2 px-4 mb-6 inline-block transform transition-all duration-300 hover:scale-110 hover:shadow-2xl hover:shadow-verde-bonito hover:bg-verde-bonito hover:text-black">
                                    Más detalles
                                </button></p>
                        </div>
                    </div>
                </div>

                <!-- Servicio: Servicios Adicionales -->
                <div class="flip-box animate__animated" data-animation="animate__flipInY">
                    <div class="flip-box-inner">
                        <div class="flip-box-front">
                            <div class="flex flex-col justify-center items-center h-full space-y-4">
                                <i class="fas fa-plus-circle text-4xl text-green-500"></i>
                                <h3 class="flip-box-title">Servicios Adicionales</h3>
                            </div>
                        </div>
                        <div class="flip-box-back">
                            <p>Soporte técnico, marketing digital y mucho más para cubrir todas las necesidades tecnológicas
                                de tu empresa.</p>
                            <button onclick="window.location.href='{{ route('services') }}';"
                                class="bg-black text-white font-semibold py-2 px-4 mb-6 inline-block transform transition-all duration-300 hover:scale-110 hover:shadow-2xl hover:shadow-verde-bonito hover:bg-verde-bonito hover:text-black">
                                Más Detalles
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- TRIANGULO SEPARADOR BOT --}}
    <div class="triangle-separator relative min-h-[100px]">
        <!-- Margen verde encima del triángulo -->
        <div class="absolute top-0 left-0 w-full h-16 bg-verde-bonito z-10"></div>

        <!-- SVG del triángulo invertido encima del fondo -->
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none"
            class="w-full absolute top-16 rotate-180 z-20">
            <polygon points="0,0 1000,100 0,100" class="triangle fill-white"></polygon>
        </svg>
    </div>

    <!-- TESTIMONIOS -->
    <section class="bg-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-extrabold text-black text-center mb-12">Testimonios de clientes</h2>

            <!-- Contenedor de Swiper -->
            <div class="swiper">
                <div class="swiper-wrapper">
                    <!-- Testimonios -->
                    <div
                        class="swiper-slide flex flex-col items-center text-center bg-white shadow-md p-6 mx-4 h-full">
                        <p class="text-gray-600 italic mb-4">
                            "wolvex nos ayudó a crear una tienda en línea y todos los diseños de productos e imagen
                            institucional mejoramos la captación de clientes."
                        </p>
                        <div>
                            <div class="text-lg font-semibold text-gray-800">Roberto Lopez</div>
                            <span class="text-sm text-gray-500">Emprendedor Eléctrico</span>
                        </div>
                    </div>
                    <div
                        class="swiper-slide flex flex-col items-center text-center bg-white shadow-md p-6 mx-4 h-full">
                        <p class="text-gray-600 italic mb-4">
                            "La automatización de procesos ha sido un cambio total para nuestro equipo. Ahora gastamos menos
                            tiempo en tareas repetitivas."
                        </p>
                        <div>
                            <div class="text-lg font-semibold text-gray-800">Alberto León</div>
                            <span class="text-sm text-gray-500">Gerente de Servicios</span>
                        </div>
                    </div>
                    <div
                        class="swiper-slide flex flex-col items-center text-center bg-white shadow-md p-6 mx-4 h-full">
                        <p class="text-gray-600 italic mb-4">
                            "Nuestro sitio web y estrategia de marketing digital diseñados por wolvex han sido claves para
                            llegar a nuevos clientes."
                        </p>
                        <div>
                            <div class="text-lg font-semibold text-gray-800">Ana Salgado</div>
                            <span class="text-sm text-gray-500">Arquitecta</span>
                        </div>
                    </div>
                    <div
                        class="swiper-slide flex flex-col items-center text-center bg-white shadow-md p-6 mx-4 h-full">
                        <p class="text-gray-600 italic mb-4">
                            "Gracias a wolvex, logramos crear nuestra aplicación web para nuestros estudiantes de
                            ingeniería."
                        </p>
                        <div>
                            <div class="text-lg font-semibold text-gray-800">Alejandro Lillo</div>
                            <span class="text-sm text-gray-500">Emprendedor Educativo</span>
                        </div>
                    </div>
                    <div
                        class="swiper-slide flex flex-col items-center text-center bg-white shadow-md p-6 mx-4 h-full">
                        <p class="text-gray-600 italic mb-4">
                            "El sitio web y los diseños para las rrss que wolvex creó para mi negocio ha sido increíble, con
                            una navegación muy sencilla para mis clientes."
                        </p>
                        <div>
                            <div class="text-lg font-semibold text-gray-800">Marcelo Olguín</div>
                            <span class="text-sm text-gray-500">Ingeniero Constructor</span>
                        </div>
                    </div>
                    <div
                        class="swiper-slide flex flex-col items-center text-center bg-white shadow-md p-6 mx-4 h-full">
                        <p class="text-gray-600 italic mb-4">
                            "Las soluciones de gestión y el soporte de wolvex nos han ahorrado tiempo y han mejorado la
                            eficiencia en todos nuestros procesos."
                        </p>
                        <div>
                            <div class="text-lg font-semibold text-gray-800">Cristian Rojas</div>
                            <span class="text-sm text-gray-500">Ingeniero Comercial</span>
                        </div>
                    </div>
                    <div
                        class="swiper-slide flex flex-col items-center text-center bg-white shadow-md p-6 mx-4 h-full">
                        <p class="text-gray-600 italic mb-4">
                            "El equipo de wolvex es muy profesional. El diseño de productos e identidad corporativa que
                            crearon es impresionante."
                        </p>
                        <div>
                            <div class="text-lg font-semibold text-gray-800">Carolina Navarro</div>
                            <span class="text-sm text-gray-500">Emprendedora de Productos de Limpieza</span>
                        </div>
                    </div>
                </div>

                <!-- Paginación con espaciado adicional -->
                <div class="pt-16">
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>

    {{-- PROYECTOS --}}
    <section class="mb-10 py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-extrabold text-black mb-12">Últimos Proyectos</h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                <!-- Tarjeta 1 -->
                <div class="relative group bg-white shadow-md overflow-hidden">
                    <a href="https://hidroshock.cl/" target="_blank" rel="noopener noreferrer">
                        <img src="{{ asset('storage/assets/clientes/1.png') }}" alt="Proyecto 1"
                            class="w-full h-28 object-contain">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-90 flex flex-col justify-center items-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <h3 class="text-lg font-semibold">Servicios Desplegados</h3>
                            <p class="text-sm mt-2">Identidad visual, diseño de logos y productos, diseño de
                                ecommerce,
                                marketing digital y automatizaciones</p>
                        </div>
                    </a>
                </div>

                <!-- Tarjeta 2 -->
                <div class="relative group bg-white shadow-md overflow-hidden">
                    <a href="https://constructoravoso.cl/" target="_blank" rel="noopener noreferrer">
                        <img src="{{ asset('storage/assets/clientes/2.png') }}" alt="Proyecto 2"
                            class="w-full h-28 object-contain">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-90 flex flex-col justify-center items-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <h3 class="text-lg font-semibold">Servicios Desplegados</h3>
                            <p class="text-sm mt-2">Diseño de website, marketing digital y automatizaciones</p>
                        </div>
                    </a>
                </div>

                <!-- Tarjeta 3 -->
                <div class="relative group bg-white shadow-md overflow-hidden">
                    <a href="https://rcrchile.cl/" target="_blank" rel="noopener noreferrer">
                        <img src="{{ asset('storage/assets/clientes/3.png') }}" alt="Proyecto 3"
                            class="w-full h-28 object-contain">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-90 flex flex-col justify-center items-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <h3 class="text-lg font-semibold">Servicios Desplegados</h3>
                            <p class="text-sm mt-2">Diseño de logo, identidad visual y publicidad, diseño de
                                website
                                personalizado, marketing digital y automatizaciones</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- TECNOLOGÍAS -->
    <section class="carrusel-container mb-10">
        <h2 class="text-center text-3xl font-extrabold text-black mb-4">Tecnologías</h2>
        <div class="carrusel">
            @for ($i = 1; $i <= 16; $i++)
                <div class="carrusel-item">
                    <img src="{{ asset('storage/assets/icons/' . $i . '.png') }}" alt="Tecnología {{ $i }}">
                </div>
            @endfor
            <!-- Duplicado para bucle continuo -->
            @for ($i = 1; $i <= 16; $i++)
                <div class="carrusel-item">
                    <img src="{{ asset('storage/assets/icons/' . $i . '.png') }}" alt="Tecnología {{ $i }}">
                </div>
            @endfor
        </div>
    </section>

    {{-- LLAMADA A LA ACCION 2 --}}
    <section class=" relative">
        <!-- Fondo de video -->
        <div class="absolute inset-0">
            <video autoplay muted loop playsinline class="absolute top-0 left-0 w-full h-full object-cover z-0">
                <?php
                $videos = ['header1.webm', 'header2.webm', 'header3.webm', 'header4.webm', 'header5.webm'];
                $random_video = $videos[array_rand($videos)];
                ?>
                <source src="{{ asset('storage/assets/videos/' . $random_video) }}" type="video/webm">
            </video>
            <!-- Capa de superposición con opacidad -->
            <div class="absolute inset-0 bg-black bg-opacity-60 z-10"></div>
        </div>

        <!-- Contenido -->
        <div class="relative z-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center py-10">
            <h2 class="text-4xl font-extrabold text-white mb-6">¿Quieres hacer tu negocio más eficiente?</h2>
            <p class="text-lg text-white mb-8">
                Te ayudamos a potenciar tu emprendimiento con herramientas basadas en inteligencia artificial: desde el
                desarrollo de páginas web funcionales hasta la automatización de procesos, la optimización de tareas y
                estrategias digitales personalizadas para atraer más clientes.
            </p>
            <a href="{{ route('contact') }}"
                class="bg-black text-white font-semibold py-2 px-4 mb-6 inline-block transform transition-all duration-300 hover:scale-110 hover:shadow-2xl hover:shadow-verde-bonito hover:bg-verde-bonito hover:text-black">
                ¡Habla con un experto y comienza hoy!
            </a>
        </div>
    </section>
@endsection
