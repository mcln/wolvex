import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                // Fuente primaria (Montserrat)
                primary: ['Montserrat', 'sans-serif'],
                // Fuente secundaria para los títulos (League Spartan)
                secondary: ['League Spartan', 'sans-serif'],
            },
            colors: {
                'verde-bonito': '#01FF66',          
                'azul-fondo': '#001a32',
                'azul-clarillo': '#014bcb',         // Nombre original
                'verde-pastel': '#aaf683',      // Nombre original
                'verde-limon': '#affc41',       // Nombre original
                'verde-piola': '#38b000',       // Nombre original
                'morado': '#5a189a',            // Nombre original
    
                // Alias adicionales para los colores
                'verde-brillante': '#01FF66',  // Alias para 'verde-bonito'
                'verde-claro': '#aaf683',      // Alias para 'verde-pastel'
                'verde-lima': '#affc41',       // Alias para 'verde-limon'
                'verde-intenso': '#38b000',    // Alias para 'verde-piola'
                'purpura': '#5a189a',          // Alias para 'morado'
            },
            fontSize: {
                // Tamaños personalizados de texto
                h1: ['3rem', { lineHeight: '1.2' }], // 48px
                h2: ['2.25rem', { lineHeight: '1.3' }], // 36px
                h3: ['1.75rem', { lineHeight: '1.4' }], // 28px
                body: ['1rem', { lineHeight: '1.5' }], // 16px
                small: ['0.875rem', { lineHeight: '1.4' }], // 14px
            }
        },
    },

    plugins: [forms, typography],
};

