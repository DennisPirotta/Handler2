import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/sass/dropdown.scss',
                'resources/js/app.js',
                'resources/js/dropdown.js',
                'resources/css/app.css'
            ],
            refresh: true,
        }),
    ],
});
