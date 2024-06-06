import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/css/donate.css',
                'resources/css/app.css',
                'resources/css/home.css',
                'resources/css/profile.css',
                'resources/js/app.js',
                'resources/js/tryjournal.js',
                'resources/css/headerfooter.css',
                'resources/js/donatescript.js',
                'resources/css/forum.css',
                'resources/css/tryme.css',
                'resources/css/trymejournal.css',
                'resources/css/trymepsikolog.css'
            ],
            refresh: true,
        }),
    ]
});
