import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            // Cambia l'estensione da .css a .scss se usi Sass
            input: ['resources/sass/app.scss', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    // Rimuoviamo la sezione server:watch se non hai problemi specifici, 
    // Laravel Vite lo gestisce già bene di default.
});

