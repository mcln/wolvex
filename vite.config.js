import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    server: {
        host: true, // Permite conexiones externas
        port: 5173, // Asegúrate de usar este puerto o el que prefieras
        hmr: {
            host: '192.168.1.103', // Tu IP local
        },
    },
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/css/styles.css',
                'resources/js/texto_animado.js',
            ],
            refresh: true,
        }),
    ],
});
