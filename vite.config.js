import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css', 'resources/js/app.js',


                'resources/assets/css/style.css',
                'resources/assets/fonts/material.css',
                'resources/assets/fonts/fontawesome.css',
                'resources/assets/fonts/feather.css',
                'resources/assets/fonts/tabler-icons.min.css',
                'resources/assets/fonts/phosphor/duotone/style.css',
                'resources/assets/images/favicon.svg',
                'resources/assets/js/plugins/simplebar.min.js',
                'resources/assets/js/plugins/popper.min.js',
                'resources/assets/js/icon/custom-icon.js',
                'resources/assets/js/plugins/feather.min.js',
                'resources/assets/js/component.js',
                'resources/assets/js/theme.js',
                'resources/assets/js/script.js',



            ],
            refresh: true,
        }),
    ],
});
