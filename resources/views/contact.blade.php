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
            class="relative z-10 flex flex-col items-end justify-center h-[200px] text-right text-white bg-black bg-opacity-30 pr-10">
            <h1 class="text-4xl font-bold underline"><br>Contacto</h1>
        </div>
    </header>

    <section class="bg-gray-100 py-12 px-4">
        <div class="container mx-auto flex flex-wrap">
            <!-- Formulario de Contacto (3/4 de la pantalla) -->
            <div class="w-full lg:w-3/4 p-6">
                <h2 class="text-4xl font-bold text-gray-800 mb-6">Contáctanos</h2>
                <form action="{{ route('contact.store') }}" method="POST" class="space-y-4" onsubmit="onSubmit(event)">
                    @csrf
                    <div>
                        <label for="nombre" class="block text-lg font-medium text-gray-700">Nombre</label>
                        <input type="text" id="nombre" name="nombre"
                            class="w-full p-3 border border-gray-300 rounded-lg" placeholder="Tu nombre" required>
                    </div>
                    <div>
                        <label for="email" class="block text-lg font-medium text-gray-700">Email</label>
                        <input type="email" id="email" name="email"
                            class="w-full p-3 border border-gray-300 rounded-lg" placeholder="Tu email" required>
                    </div>
                    <div>
                        <label for="telefono" class="block text-lg font-medium text-gray-700">Teléfono</label>
                        <input type="tel" id="telefono" name="telefono"
                            class="w-full p-3 border border-gray-300 rounded-lg" placeholder="Tu teléfono" required>
                    </div>
                    <div>
                        <label for="mensaje" class="block text-lg font-medium text-gray-700">Mensaje</label>
                        <textarea id="mensaje" name="mensaje" rows="5" class="w-full p-3 border border-gray-300 rounded-lg"
                            placeholder="Escribe tu mensaje aquí..." required></textarea>
                    </div>

                    <button type="submit"
                        class="bg-black text-white font-semibold ml-6 py-2 px-4 mb-6 transform transition-all duration-300 hover:scale-110 hover:shadow-2xl hover:shadow-verde-limon hover:bg-verde-limon hover:text-black">Enviar
                        Mensaje</button>
                </form>
            </div>


            <!-- Información de Contacto y Redes Sociales (1/4 de la pantalla) -->
            <div class="w-full lg:w-1/4 p-6">
                <div class="space-y-6">
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Conéctate con nosotros</h3>

                    <!-- Redes Sociales -->
                    <div class="flex space-x-4">
                        <a href="https://linkedin.com" class="text-blue-600 hover:text-blue-800" target="_blank"><i
                                class="fab fa-linkedin fa-2x"></i></a>
                        <a href="https://facebook.com" class="text-blue-500 hover:text-blue-700" target="_blank"><i
                                class="fab fa-facebook fa-2x"></i></a>
                    </div>

                    <!-- Información de Contacto -->
                    <div class="space-y-4 mt-6">
                        <div class="flex items-center">
                            <i class="fab fa-whatsapp fa-lg text-green-500 mr-3"></i>
                            <span class="text-lg font-medium text-gray-700">+56 9 1234 5678</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-map-marker-alt fa-lg text-red-500 mr-3"></i>
                            <span class="text-lg font-medium text-gray-700">Valparaíso, Chile</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-envelope fa-lg text-blue-500 mr-3"></i>
                            <span class="text-lg font-medium text-gray-700">contacto@wolvex.cl</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
