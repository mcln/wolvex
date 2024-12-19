@extends('layouts.guest')

@section('content')
    <header class="relative w-full overflow-hidden">
        <video autoplay muted loop playsinline class="absolute top-0 left-0 w-full h-[200px] object-cover z-0">
            <?php
            $videos = ['header1.webm', 'header2.webm', 'header3.webm', 'header4.webm', 'header5.webm'];
            $random_video = $videos[array_rand($videos)];
            ?>
            <source src="{{ asset('storage/assets/videos/' . $random_video) }}" type="video/webm">
        </video>
        <div
            class="relative z-10 flex flex-col items-end justify-center h-[200px] text-right text-white bg-azul-fondo bg-opacity-30 pr-10">
            <h1 class="text-4xl font-bold underline">Nosotros</h1>
        </div>
    </header>

    <!-- Sobre Wolvex -->
    <section class="bg-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-extrabold text-azul-fondo text-center mb-8">¿Quiénes somos?</h2>
            <p class="text-lg text-gray-600 text-center mb-6">
                En <strong>Wolvex</strong>, impulsamos a emprendedores y PYMEs a alcanzar el éxito en el mundo digital. Con
                más de 10 años de experiencia en tecnología y diseño, ofrecemos soluciones personalizadas y accesibles que
                transforman negocios: desde páginas web profesionales y estrategias para redes sociales, hasta
                automatizaciones avanzadas con inteligencia artificial.
            </p>
            <p class="text-lg text-gray-600 text-center">
                Nuestro compromiso es simplificar procesos y maximizar resultados, proporcionando herramientas que realmente
                marcan la diferencia. En <strong>Wolvex</strong>, creemos en tu visión y trabajamos contigo para hacerla
                realidad.
            </p>

        </div>
    </section>


    <!-- Valores -->
    <section class="py-16 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-extrabold text-azul-fondo text-center mb-12">Nuestros Valores</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 text-center">
                <div class="p-6 bg-white shadow-lg rounded-lg">
                    <i class="fas fa-handshake text-4xl text-verde-bonito mb-4"></i>
                    <h3 class="font-bold text-xl mb-2">Compromiso</h3>
                    <p class="text-gray-600">Trabajamos con excelencia para generar valor en cada negocio.</p>
                </div>
                <div class="p-6 bg-white shadow-lg rounded-lg">
                    <i class="fas fa-balance-scale text-4xl text-verde-bonito mb-4"></i>
                    <h3 class="font-bold text-xl mb-2">Transparencia</h3>
                    <p class="text-gray-600">Fomentamos relaciones de confianza con comunicación abierta y clara.</p>
                </div>
                <div class="p-6 bg-white shadow-lg rounded-lg">
                    <i class="fas fa-lightbulb text-4xl text-verde-bonito mb-4"></i>
                    <h3 class="font-bold text-xl mb-2">Innovación</h3>
                    <p class="text-gray-600">Evolucionamos con el mundo digital para ofrecer las mejores soluciones.</p>
                </div>
                <div class="p-6 bg-white shadow-lg rounded-lg">
                    <i class="fas fa-user-friends text-4xl text-verde-bonito mb-4"></i>
                    <h3 class="font-bold text-xl mb-2">Atención Personalizada</h3>
                    <p class="text-gray-600">Entendemos las necesidades únicas de cada cliente para brindar soluciones a
                        medida.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Misión y Visión -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <div class="p-6 bg-gray-100 rounded-lg shadow-md">
                    <h3 class="font-bold text-2xl mb-4 text-verde-bonito">Nuestra Misión</h3>
                    <p class="text-gray-600">Empoderar a emprendedores y PYMEs de Chile con herramientas digitales
                        personalizadas que potencien su crecimiento y competitividad en el entorno digital.</p>
                </div>
                <div class="p-6 bg-gray-100 rounded-lg shadow-md">
                    <h3 class="font-bold text-2xl mb-4 text-verde-bonito">Nuestra Visión</h3>
                    <p class="text-gray-600">Convertirnos en el aliado estratégico líder en soluciones digitales para
                        emprendedores y PYMEs, reconocidos por nuestro compromiso en construir plataformas efectivas y
                        personalizadas.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- TECNOLOGÍAS -->
    <section class="carrusel-container mb-10">
        <h2 class="text-center text-3xl font-extrabold text-azul-fondo mb-4">Tecnologías</h2>
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

    <!-- LLAMADA A LA ACCION -->
    <section class="py-16 bg-gray-100 relative">
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
            <div class="absolute inset-0 bg-azul-fondo bg-opacity-60 z-10"></div>
        </div>

        <!-- Contenido de texto -->
        <div class="relative z-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-extrabold text-white mb-6">¿Listo para transformar tu negocio?</h2>
            <p class="text-lg text-gray-200 mb-8">
                En Wolvex, estamos comprometidos con tu crecimiento. No importa el tamaño de tu emprendimiento o pyme,
                juntos podemos alcanzar nuevas metas. ¡Conversemos y demos el siguiente paso hacia la transformación
                digital!
            </p>
            <a href="{{ route('contact') }}"
                class="bg-azul-fondo text-white font-semibold py-2 px-4 mb-6 inline-block transform transition-all duration-300 hover:scale-110 hover:shadow-2xl hover:shadow-verde-bonito hover:bg-verde-bonito hover:text-azul-fondo">
                Contáctanos ahora
            </a>
        </div>
    </section>
@endsection
