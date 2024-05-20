import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
<<<<<<< HEAD
            input: ['resources/css/app.css', 'resources/js/app.js'],
=======
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
            ],
>>>>>>> 3e5931582f6be998297b6fe31bac1d679f967146
            refresh: true,
        }),
    ],
});
