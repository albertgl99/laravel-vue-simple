import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue'; // Importa el plugin para Vue

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        vue(), // Añade el plugin de Vue
    ],
    resolve: {
        alias: {
            vue: 'vue/dist/vue.esm-bundler.js', // Alias para soportar plantillas en tiempo de ejecución
        },
    },
});
