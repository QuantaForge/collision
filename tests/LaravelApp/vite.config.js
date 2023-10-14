import { defineConfig } from 'vite';
import quantaforge from 'quantaforge-vite-plugin';

export default defineConfig({
    plugins: [
        quantaforge({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
