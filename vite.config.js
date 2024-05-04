import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/home.css',
                'resources/css/headerfooter.css',
                'resources/js/app.js',
                'resources/js/homescript.js',
                'resources/css/donate.css',
                'resources/js/donatescript.js'
            ],
            refresh: true,
        }),
    ],
});
