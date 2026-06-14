import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: [
            //js
            'resources/js/app.js',

            //css
            "resources/css/style.css"
        ],
            refresh: true,
        }),
        tailwindcss()
    ],
});