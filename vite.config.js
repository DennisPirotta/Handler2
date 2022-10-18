import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import mkcert from "vite-plugin-mkcert";

export default defineConfig({
    server: { https: true },
    plugins: [
        mkcert(),
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/sass/dropdown.scss',
                'resources/js/app.js',
                'resources/js/dropdown.js',
                'resources/css/app.css',
                'resources/sass/404.scss'
            ],
            refresh: true,
        }),
    ],
});
