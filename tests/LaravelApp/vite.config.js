import { defineConfig } from 'vite';
import quantaquirk from 'quantaquirk-vite-plugin';

export default defineConfig({
    plugins: [
        quantaquirk({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
