<!-- resources/views/home.blade.php -->
@extends('layouts.guest')

@section('content')
    <button onclick="scrollToTop()"
        class="fixed bottom-24 right-6 p-3 bg-morado text-white shadow-lg hover:bg-verde-piola transition-colors z-50">
        <i class="fa-solid fa-arrow-up"></i> <!-- Icono de flecha hacia arriba -->
    </button>

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
            <h1 class="text-4xl font-bold underline"><br>Servicios</h1>
        </div>
    </header>

    <div class="triangle-separator relative min-h-[400px]">
        <!-- Fondo con imagen con efecto parallax -->
        <div class="absolute inset-0 bg-cover bg-center"
            style="background-image: url('storage/assets/img-bg/1.png'); background-attachment: fixed; background-position: center -100px;">
        </div>

        <!-- Capa blanca con degradado de opacidad -->
        <div class="absolute inset-0 bg-white"
            style="background: linear-gradient(to bottom, rgba(255, 255, 255, 1) 0%, rgba(255, 255, 255, 0.2) 100%);">
        </div>

        <!-- SVG del triángulo encima del fondo -->
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none"
            class="w-full absolute bottom-0">
            <polygon points="0,0 1000,100 0,100" class="triangle fill-white"></polygon>
        </svg>
    </div>

    {{-- DESARROLLO WEB --}}
    <section id="development-web" class="bg-verde-bonito pb-12">
        <h2 class="text-4xl font-bold text-azul-fondo ml-12">Desarrollo Web</h2>
        <div id="importante-container"
            class="p-4 max-w-2xl mt-12 mx-auto bg-green-300 flex items-center space-x-2 transform transition-transform duration-300 scale-100 text-center">
            <!-- Icono de advertencia -->
            <i class="fa-sharp fa-solid fa-circle-exclamation text-2xl text-azul-fondo"></i>
            <!-- Contenido importante -->
            <p class="font-semibold">
                <strong>Importante:</strong> El costo del <strong>hosting</strong> y el <strong>dominio</strong> no están
                incluidos en el precio. Se cobran aparte y pueden ser gestionados por el cliente o contratados como
                <span class="underline cursor-pointer relative group inline-block">
                    <span class="hover:text-verde-piola">Servicios Adicionales</span>
                    <!-- Tooltip -->
                    <span
                        class="absolute bottom-full left-0 mb-2 hidden w-max bg-white text-gray-700 text-sm p-2 shadow-lg border border-gray-200 group-hover:block text-left">
                        Hosting (Valor aprox por año $15.000 CLP + IVA)<br>
                        Dominio .cl o .com (Valor aprox por año $20.000 CLP + IVA)
                    </span>
                </span>
                a través de wolvex.
            </p>
        </div>

        <!-- Página Web Simple -->
        <div class="mt-12 px-4 sm:px-6 lg:px-8">
            <!-- Título y descripción -->
            <h2 class="text-2xl font-bold text-azul-fondo mb-4 flex items-center">
                <i class="fas fa-file-alt mr-2"></i> Página Web Simple
            </h2>
            <p class="text-lg text-azul-fondo mb-6">
                Una Landing Page o One Page está diseñada para negocios que buscan atraer atención inmediata, ofrecer
                información concisa sobre sus productos o servicios, y facilitar la conversión de visitantes en clientes.
                Ideal para emprendedores, empresas que lanzan productos nuevos, o negocios que necesitan una presencia
                online
                simple pero impactante.
            </p>

            <!-- Botón para mostrar/ocultar opciones -->
            <div class="text-center lg:text-left">
                <button
                    class="bg-azul-fondo text-white font-semibold py-2 px-6 transform transition-all duration-300 hover:scale-110 hover:shadow-2xl hover:shadow-verde-limon hover:bg-verde-limon hover:text-azul-fondo"
                    onclick="togglePlans('landing', this)">
                    Ver valores
                </button>
            </div>

            <!-- Planes -->
            <div id="landing-plans" class="hidden mt-6">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Plan Lite -->
                    <div class="p-6 shadow-lg bg-lime-200">
                        <div class="flex items-center space-x-2 mb-4">
                            <div
                                class="w-10 h-10 bg-verde-piola text-white flex items-center justify-center text-2xl">
                                1
                            </div>
                            <h3 class="text-xl font-bold">Lite</h3>
                        </div>
                        <p class="text-lg text-azul-fondo font-semibold mb-4">Desde: $100.000 CLP (+ IVA)</p>
                        <ul class="space-y-2 list-disc pl-5">
                            <li>Diseño básico</li>
                            <li>Hasta 3 secciones (inicio, servicios, contacto, etc.)</li>
                            <li>Formulario de contacto simple</li>
                            <li>Optimización básica para móviles</li>
                        </ul>
                    </div>

                    <!-- Plan Smart -->
                    <div class="p-6 shadow-lg bg-lime-200">
                        <div class="flex items-center space-x-2 mb-4">
                            <div
                                class="w-10 h-10 bg-verde-piola text-white flex items-center justify-center text-2xl">
                                2
                            </div>
                            <h3 class="text-xl font-bold">Smart</h3>
                        </div>
                        <p class="text-lg text-azul-fondo font-semibold mb-4">Desde: $200.000 CLP (+ IVA)</p>
                        <ul class="space-y-2 list-disc pl-5">
                            <li>Diseño personalizado</li>
                            <li>Hasta 6 secciones (inicio, servicios, sobre nosotros, contacto, productos, testimonios,
                                etc.)</li>
                            <li>Formulario avanzado con validaciones</li>
                            <li>Integración básica de SEO (meta descripciones, títulos, palabras clave, etc.)</li>
                            <li>Optimización para dispositivos móviles</li>
                            <li><strong>Extra:</strong> Entrega más rápida y soporte post-lanzamiento básico</li>
                        </ul>
                    </div>

                    <!-- Plan Pro -->
                    <div class="p-6 shadow-lg bg-lime-200">
                        <div class="flex items-center space-x-2 mb-4">
                            <div
                                class="w-10 h-10 bg-verde-piola text-white flex items-center justify-center text-2xl">
                                3
                            </div>
                            <h3 class="text-xl font-bold">Pro</h3>
                        </div>
                        <p class="text-lg text-azul-fondo font-semibold mb-4">Desde: $400.000 CLP (+ IVA)</p>
                        <ul class="space-y-2 list-disc pl-5">
                            <li>Diseño completamente personalizado</li>
                            <li>7+ secciones con funcionalidades avanzadas (testimonios, redes sociales, etc.)</li>
                            <li>Integración avanzada con herramientas de marketing (Google Analytics, Mailchimp, Mailerlite,
                                etc.)</li>
                            <li><strong>SEO avanzado:</strong> Optimización de contenido, estructura del sitio, velocidad,
                                etc.</li>
                            <li>Soporte post-lanzamiento por un mes (modificaciones y ajustes)</li>
                            <li>Entrega rápida y detallada</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Página Pyme, Emprendimiento o Corporativa -->
        <div class="mt-12 px-4 sm:px-6 lg:px-8">
            <!-- Título y descripción -->
            <h2 class="text-2xl font-bold text-azul-fondo mb-4 flex items-center">
                <i class="fas fa-building mr-2"></i> Página Pyme, Emprendimiento o Corporativa
            </h2>
            <p class="text-lg text-azul-fondo mb-6">
                La página WordPress es ideal para aquellos que buscan una plataforma flexible, fácil de gestionar, y con
                gran
                capacidad de personalización. Ya sea para un blog, un Emprendimiento o un sitio corporativo, WordPress es
                una
                opción robusta para cualquier tipo de negocio.
            </p>

            <!-- Botón para mostrar/ocultar opciones -->
            <div class="text-center lg:text-left">
                <button
                    class="bg-azul-fondo text-white font-semibold py-2 px-6 transform transition-all duration-300 hover:scale-110 hover:shadow-2xl hover:shadow-verde-limon hover:bg-verde-limon hover:text-azul-fondo"
                    onclick="togglePlans('wordpress', this)">
                    Ver valores
                </button>
            </div>

            <!-- Planes -->
            <div id="wordpress-plans" class="hidden mt-6">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Plan Lite -->
                    <div class="p-6 shadow-lg bg-lime-200">
                        <div class="flex items-center space-x-2 mb-4">
                            <div
                                class="w-10 h-10 bg-verde-piola text-white flex items-center justify-center text-2xl">
                                1
                            </div>
                            <h3 class="text-xl font-bold">Lite</h3>
                        </div>
                        <p class="text-lg text-azul-fondo font-semibold mb-4">Desde: $200.000 CLP (+ IVA)</p>
                        <ul class="space-y-2 list-disc pl-5">
                            <li>Diseño básico utilizando plantillas prediseñadas.</li>
                            <li>Hasta 4 secciones (inicio, servicios, contacto, etc.).</li>
                            <li>Formulario de contacto simple.</li>
                            <li>Optimización básica para dispositivos móviles.</li>
                        </ul>
                    </div>

                    <!-- Plan Smart -->
                    <div class="p-6 shadow-lg bg-lime-200">
                        <div class="flex items-center space-x-2 mb-4">
                            <div
                                class="w-10 h-10 bg-verde-piola text-white flex items-center justify-center text-2xl">
                                2
                            </div>
                            <h3 class="text-xl font-bold">Smart</h3>
                        </div>
                        <p class="text-lg text-azul-fondo font-semibold mb-4">Desde: $350.000 CLP (+ IVA)</p>
                        <ul class="space-y-2 list-disc pl-5">
                            <li>Diseño personalizado.</li>
                            <li>Hasta 6 secciones (inicio, sobre nosotros, servicios, blog, contacto, etc.).</li>
                            <li>Integración básica de SEO (títulos, meta descripciones, etc.).</li>
                            <li>Formulario de contacto avanzado con validaciones.</li>
                            <li>Optimización para dispositivos móviles y velocidad de carga.</li>
                        </ul>
                    </div>

                    <!-- Plan Pro -->
                    <div class="p-6 shadow-lg bg-lime-200">
                        <div class="flex items-center space-x-2 mb-4">
                            <div
                                class="w-10 h-10 bg-verde-piola text-white flex items-center justify-center text-2xl">
                                3
                            </div>
                            <h3 class="text-xl font-bold">Pro</h3>
                        </div>
                        <p class="text-lg text-azul-fondo font-semibold mb-4">Desde: $500.000 CLP (+ IVA)</p>
                        <ul class="space-y-2 list-disc pl-5">
                            <li>Diseño completamente personalizado.</li>
                            <li>Hasta 8 secciones con funciones avanzadas (testimonios, integración con redes sociales,
                                galería de imágenes, etc.).</li>
                            <li>Integración avanzada de SEO (optimización de contenido, estructura, velocidad de carga,
                                etc.).</li>
                            <li>Integración con herramientas de marketing (Google Analytics, Mailchimp, Mailerlite).</li>
                            <li>Soporte post-lanzamiento durante un mes (ajustes y modificaciones).</li>
                            <li>Optimización completa para dispositivos móviles y velocidad de carga.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tienda Online con Shopify o WooCommerce -->
        <div class="mt-12 px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl font-bold text-azul-fondo mb-4 flex items-center"><i class="fas fa-shopping-cart mr-2"></i>
                Tienda Online con
                Shopify o WooCommerce</h2>
            <p class="text-lg text-azul-fondo mb-6">
                La página con Shopify o WooCommerce es perfecta para aquellos que desean crear una tienda online profesional
                y
                funcional. Ya sea para productos físicos, digitales o servicios, estas plataformas ofrecen todo lo necesario
                para
                gestionar tu tienda de manera eficiente y rentable.
            </p>

            <!-- Botón para mostrar/ocultar opciones -->
            <div class="text-center lg:text-left">
                <button
                    class="bg-azul-fondo text-white font-semibold py-2 px-6 transform transition-all duration-300 hover:scale-110 hover:shadow-2xl hover:shadow-verde-limon hover:bg-verde-limon hover:text-azul-fondo"
                    onclick="togglePlans('shopify-woocommerce', this)">
                    Ver valores
                </button>
            </div>

            <!-- Opciones Lite, Smart y Pro (ocultas inicialmente) -->
            <div id="shopify-woocommerce-plans" class="hidden mt-6">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Plan Lite -->
                    <div class="p-6 shadow-lg bg-lime-200">
                        <div class="flex items-center space-x-2 mb-4">
                            <div class="w-10 h-10 bg-verde-piola text-white flex items-center justify-center text-2xl">
                                1
                            </div>
                            <h3 class="text-2xl font-bold">Lite</h3>
                        </div>
                        <p class="text-lg text-azul-fondo font-semibold mb-4">Desde: $250.000 CLP (+ iva)</p>
                        <ul class="space-y-2 list-disc pl-5">
                            <li>Instalación y configuración básica de Shopify o WooCommerce.</li>
                            <li>Diseño utilizando plantillas prediseñadas.</li>
                            <li>Hasta 5 productos o categorías configuradas.</li>
                            <li>Integración básica de pagos (PayPal, tarjetas de crédito, etc.).</li>
                            <li>Optimización para dispositivos móviles.</li>
                        </ul>
                    </div>

                    <!-- Plan Smart -->
                    <div class="p-6 shadow-lg bg-lime-200">
                        <div class="flex items-center space-x-2 mb-4">
                            <div class="w-10 h-10 bg-verde-piola text-white flex items-center justify-center text-2xl">
                                2
                            </div>
                            <h3 class="text-2xl font-bold">Smart</h3>
                        </div>
                        <p class="text-lg text-azul-fondo font-semibold mb-4">Desde: $400.000 CLP (+ iva)</p>
                        <ul class="space-y-2 list-disc pl-5">
                            <li>Diseño personalizado adaptado a la identidad de la tienda.</li>
                            <li>Hasta 10 productos o categorías configuradas.</li>
                            <li>Integración avanzada de pagos y opciones de envío.</li>
                            <li>Optimización básica de SEO (títulos, meta descripciones, etc.).</li>
                            <li>Soporte para promociones y descuentos (cupón de descuento, envíos gratis, etc.).</li>
                            <li>Optimización para dispositivos móviles y velocidad de carga.</li>
                        </ul>
                    </div>

                    <!-- Plan Pro -->
                    <div class="p-6 shadow-lg bg-lime-200">
                        <div class="flex items-center space-x-2 mb-4">
                            <div class="w-10 h-10 bg-verde-piola text-white flex items-center justify-center text-2xl">
                                3
                            </div>
                            <h3 class="text-2xl font-bold">Pro</h3>
                        </div>
                        <p class="text-lg text-azul-fondo font-semibold mb-4">Desde: $600.000 CLP (+ iva)</p>
                        <ul class="space-y-2 list-disc pl-5">
                            <li>Diseño completamente personalizado, incluyendo elementos interactivos.</li>
                            <li>Configuración ilimitada de productos y categorías.</li>
                            <li>Integración avanzada de pagos (diversos métodos de pago locales e internacionales).</li>
                            <li>Configuración de herramientas de marketing (automatización de correos, recomendaciones
                                de
                                productos,
                                etc.).</li>
                            <li>Integración avanzada de SEO (optimización de producto, estructura del sitio, velocidad).
                            </li>
                            <li>Soporte post-lanzamiento durante un mes (ajustes y modificaciones).</li>
                            <li>Optimización completa para dispositivos móviles y velocidad de carga.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Páginas Web Personalizadas -->
        <div class="mt-12 px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl font-bold text-azul-fondo mb-4 flex items-center"><i class="fas fa-code mr-2"></i>
                Páginas Web Personalizadas
            </h2>
            <p class="text-lg text-azul-fondo mb-6">
                Diseñadas a la medida para empresas que buscan destacar con un sitio único, adaptado a la identidad de
                su
                marca y necesidades específicas. Ideal para integrar funcionalidades avanzadas, ofrecer una experiencia
                exclusiva y lograr una presencia online potente y personalizada.
            </p>

            <!-- Botón para mostrar/ocultar opciones para Página con Shopify o WooCommerce -->
            <div class="text-center lg:text-left">
                <a href="{{ route('contact') }}"
                    class="bg-azul-fondo text-white font-semibold py-2 px-6 transform transition-all duration-300 hover:scale-110 hover:shadow-2xl hover:shadow-verde-limon hover:bg-verde-limon hover:text-azul-fondo">
                    Solicitar Cotización
                </a>
            </div>

            <!-- Div vacío oculto para mantener consistencia -->
            <div id="hidden-placeholder" class="hidden mt-6"></div>

        </div>

    </section>

    <div class="triangle-separator relative min-h-[400px]">
        <!-- Margen verde encima del triángulo -->
        <div class="absolute top-0 left-0 w-full h-16 bg-verde-bonito z-10"></div>

        <!-- Fondo con imagen -->
        <div class="absolute inset-0 bg-cover bg-center"
            style="background-image: url('storage/assets/img-bg/2.png'); z-index: 0; background-attachment: fixed; background-position: center -50px;">
        </div>

        <!-- Capa blanca con degradado de opacidad invertido -->
        <div class="absolute inset-0 top-16 bg-white"
            style="background: linear-gradient(to top, rgba(255, 255, 255, 1) 0%, rgba(255, 255, 255, 0.2) 100%); z-index: 1;">
        </div>

        <!-- SVG del triángulo invertido encima del fondo -->
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none"
            class="w-full absolute top-16 rotate-180 z-20">
            <polygon points="0,0 1000,100 0,100" class="triangle fill-white"></polygon>
        </svg>
    </div>

    {{-- DISEÑO WEB --}}
    <section id="design-web" class="mb-12">
        <h1 class="text-4xl font-bold text-azul-fondo ml-12 mb-6">Diseño Web</h1>
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Servicio: Diseño de Logo -->
                <div class="bg-white p-6 shadow-lg hover:scale-105 hover:shadow-2xl transition-all duration-300">
                    <div class="flex items-center space-x-4 mb-4">
                        <i class="fa fa-paint-brush text-3xl text-azul-fondo"></i>
                        <h2 class="text-2xl font-semibold text-azul-fondo">Diseño de Logo</h2>
                    </div>
                    <ul class="list-disc pl-5 space-y-2">
                        <li>Creación de logotipos personalizados</li>
                        <li>Rediseño y modernización de logos</li>
                        <li>Variantes del logo para diferentes contextos</li>
                    </ul>
                </div>

                <!-- Servicio: Identidad Corporativa -->
                <div class="bg-white p-6 shadow-lg hover:scale-105 hover:shadow-2xl transition-all duration-300">
                    <div class="flex items-center space-x-4 mb-4">
                        <i class="fa fa-cogs text-3xl text-azul-fondo"></i>
                        <h2 class="text-2xl font-semibold text-azul-fondo">Identidad Corporativa Visual</h2>
                    </div>
                    <ul class="list-disc pl-5 space-y-2">
                        <li>Manual de Marca</li>
                        <li>Paleta de colores y tipografía corporativa</li>
                        <li>Asesoría y ajustes en la identidad visual</li>
                    </ul>
                </div>

                <!-- Servicio: Material Corporativo Básico -->
                <div class="bg-white p-6 shadow-lg hover:scale-105 hover:shadow-2xl transition-all duration-300">
                    <div class="flex items-center space-x-4 mb-4">
                        <i class="fa fa-briefcase text-3xl text-azul-fondo"></i>
                        <h2 class="text-2xl font-semibold text-azul-fondo">Material Corporativo Básico</h2>
                    </div>
                    <ul class="list-disc pl-5 space-y-2">
                        <li>Diseño de papelería (tarjetas, membretes)</li>
                        <li>Plantillas para documentos corporativos</li>
                        <li>Diseño de firma de correo electrónico</li>
                    </ul>
                </div>

                <!-- Servicio: Redes Sociales y Publicidad -->
                <div class="bg-white p-6 shadow-lg hover:scale-105 hover:shadow-2xl transition-all duration-300">
                    <div class="flex items-center space-x-4 mb-4">
                        <i class="fa fa-bullhorn text-3xl text-azul-fondo"></i>
                        <h2 class="text-2xl font-semibold text-azul-fondo">Diseño para Redes Sociales y Publicidad</h2>
                    </div>
                    <ul class="list-disc pl-5 space-y-2">
                        <li>Kit de Redes Sociales</li>
                        <li>Plantillas para anuncios y campañas</li>
                        <li>Banners y Gráficos Web</li>
                    </ul>
                </div>

                <!-- Servicio: Diseño de Packaging y Etiquetas -->
                <div class="bg-white p-6 shadow-lg hover:scale-105 hover:shadow-2xl transition-all duration-300">
                    <div class="flex items-center space-x-4 mb-4">
                        <i class="fa fa-cube text-3xl text-azul-fondo"></i>
                        <h2 class="text-2xl font-semibold text-azul-fondo">Diseño de Packaging y Etiquetas</h2>
                    </div>
                    <ul class="list-disc pl-5 space-y-2">
                        <li>Diseño de empaques</li>
                        <li>Etiquetas de productos</li>
                        <li>Instrucciones y elementos de marca en empaque</li>
                    </ul>
                </div>

                <!-- Servicio: Consultoría de Imagen Corporativa -->
                <div class="bg-white p-6 shadow-lg hover:scale-105 hover:shadow-2xl transition-all duration-300">
                    <div class="flex items-center space-x-4 mb-4">
                        <i class="fa fa-users text-3xl text-azul-fondo"></i>
                        <h2 class="text-2xl font-semibold text-azul-fondo">Consultoría de Imagen Corporativa</h2>
                    </div>
                    <ul class="list-disc pl-5 space-y-2">
                        <li>Asesoría en identidad visual</li>
                        <li>Auditoría de marca</li>
                        <li>Talleres sobre uso de marca</li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="text-center mt-8">
            <a href="{{ route('contact') }}">
                <button
                    class="bg-azul-fondo text-white font-semibold py-2 px-4 mb-6 transform transition-all duration-300 hover:scale-110 hover:shadow-2xl hover:shadow-verde-bonito hover:bg-verde-bonito hover:text-azul-fondo">
                    Solicitar Cotización
                </button>
            </a>
        </div>
    </section>

    <div class="triangle-separator relative min-h-[400px]">
        <!-- Fondo con imagen -->
        <div class="absolute inset-0 bg-cover bg-center"
            style="background-image: url('storage/assets/img-bg/3.png'); background-attachment: fixed; background-position: center -50px;">
        </div>

        <!-- Capa blanca con degradado de opacidad -->
        <div class="absolute inset-0 bg-white"
            style="background: linear-gradient(to bottom, rgba(255, 255, 255, 1) 0%, rgba(255, 255, 255, 0.2) 100%);">
        </div>

        <!-- SVG del triángulo encima del fondo -->
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none"
            class="w-full absolute bottom-0">
            <polygon points="0,0 1000,100 0,100" class="triangle fill-white"></polygon>
        </svg>
    </div>

    {{--servicios para el emprendedor --}}
    <section id="servicios-pyme" class="pb-12 bg-verde-bonito">
        <h1 class="text-4xl font-bold text-azul-fondo ml-12 pt-6 pb-6">Servicios para tu Emprendimiento</h1>
        <div class="container mx-auto px-4 mt-6">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- Servicio: Herramientas de Inteligencia Artificial -->
                <div class="flip-box" onclick="toggleFlip(0)">
                    <div class="flip-box-inner">
                        <!-- Frontal -->
                        <div class="flip-box-front">
                            <div class="flex flex-col justify-center items-center h-full space-y-4">
                                <i class="fas fa-brain text-4xl text-green-500"></i> <!-- Icono de IA -->
                                <h3 class="flip-box-title">Herramientas de Inteligencia Artificial</h3>
                            </div>
                        </div>
                        <!-- Reverso -->
                        <div class="flip-box-back">
                            <p>Te ayudamos a integrar tecnologías de inteligencia artificial para mejorar la eficiencia de
                                tu emprendimiento, automatizando procesos y mejorando la toma de decisiones.</p>
                        </div>
                    </div>
                </div>

                <!-- Servicio: Mantenimiento y Optimización Web -->
                <div class="flip-box" onclick="toggleFlip(1)">
                    <div class="flip-box-inner">
                        <!-- Frontal -->
                        <div class="flip-box-front">
                            <div class="flex flex-col justify-center items-center h-full space-y-4">
                                <i class="fas fa-cogs text-4xl text-green-500"></i> <!-- Icono de Mantenimiento -->
                                <h3 class="flip-box-title">Mantenimiento y Optimización Web</h3>
                            </div>
                        </div>
                        <!-- Reverso -->
                        <div class="flip-box-back">
                            <p>Mantenemos tu página web en óptimas condiciones, mejorando su velocidad, seguridad y
                                funcionalidad para que brinde una excelente experiencia a tus clientes.</p>
                        </div>
                    </div>
                </div>

                <!-- Servicio: Desarrollo de Software -->
                <div class="flip-box" onclick="toggleFlip(2)">
                    <div class="flip-box-inner">
                        <!-- Frontal -->
                        <div class="flip-box-front">
                            <div class="flex flex-col justify-center items-center h-full space-y-4">
                                <i class="fas fa-laptop-code text-4xl text-green-500"></i> <!-- Icono de Desarrollo -->
                                <h3 class="flip-box-title">Desarrollo de Software</h3>
                            </div>
                        </div>
                        <!-- Reverso -->
                        <div class="flip-box-back">
                            <p>Desarrollamos soluciones de software personalizadas para tu negocio, adaptadas a tus
                                necesidades específicas para optimizar procesos y mejorar la productividad.</p>
                        </div>
                    </div>
                </div>

                <!-- Servicio: Estrategia de Transformación Digital -->
                <div class="flip-box" onclick="toggleFlip(3)">
                    <div class="flip-box-inner">
                        <!-- Frontal -->
                        <div class="flip-box-front">
                            <div class="flex flex-col justify-center items-center h-full space-y-4">
                                <i class="fas fa-sync-alt text-4xl text-green-500"></i> <!-- Icono de Estrategia -->
                                <h3 class="flip-box-title">Estrategia de Transformación Digital</h3>
                            </div>
                        </div>
                        <!-- Reverso -->
                        <div class="flip-box-back">
                            <p>Te guiamos en el proceso de digitalización de tu negocio, implementando herramientas
                                tecnológicas que te permitan mejorar la comunicación, la productividad y la competitividad.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Servicio: Servicio Integral de Soporte Computacional -->
                <div class="flip-box" onclick="toggleFlip(4)">
                    <div class="flip-box-inner">
                        <!-- Frontal -->
                        <div class="flip-box-front">
                            <div class="flex flex-col justify-center items-center h-full space-y-4">
                                <i class="fas fa-tools text-4xl text-green-500"></i> <!-- Icono de Soporte -->
                                <h3 class="flip-box-title">Servicio Integral de Soporte Computacional</h3>
                            </div>
                        </div>
                        <!-- Reverso -->
                        <div class="flip-box-back">
                            <p>Te brindamos soporte técnico integral, ayudándote con la resolución de problemas
                                informáticos, instalación de software y mantenimiento preventivo de tus equipos.</p>
                        </div>
                    </div>
                </div>

                <!-- Servicio: SEO y Marketing -->
                <div class="flip-box" onclick="toggleFlip(5)">
                    <div class="flip-box-inner">
                        <!-- Frontal -->
                        <div class="flip-box-front">
                            <div class="flex flex-col justify-center items-center h-full space-y-4">
                                <i class="fas fa-search text-4xl text-green-500"></i> <!-- Icono de SEO -->
                                <h3 class="flip-box-title">SEO y Marketing</h3>
                            </div>
                        </div>
                        <!-- Reverso -->
                        <div class="flip-box-back">
                            <p>Optimiza tu presencia en línea con nuestras estrategias de SEO y marketing digital, ayudando
                                a que tu página web sea más visible y atraiga más clientes potenciales.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="text-center mt-12">
            <a href="{{ route('contact') }}"
                class="bg-azul-fondo text-white font-semibold ml-6 py-2 px-4 mb-6 transform transition-all duration-300 hover:scale-110 hover:shadow-2xl hover:shadow-verde-limon hover:bg-verde-limon hover:text-azul-fondo">
                Solicitar Cotización
            </a>
        </div>
    </section>

    <section class="bg-green-100">
        <div class="relative z-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center py-10">
            <h2 class="text-4xl font-extrabold mb-6">Nuestro compromiso contigo</h2>
            <p class="text-lg mb-8">Estamos comprometidos a brindarte soluciones confiables y efectivas que
                ayuden a tu negocio a prosperar. Nos apasiona trabajar contigo para encontrar las mejores estrategias que
                impulsen el éxito de tu emprendimiento.</p>
        </div>
    </section>
@endsection
