import {defineConfig} from 'vite';
import laravel from 'laravel-vite-plugin';
import {aliasToReal} from "lodash/fp/_mapping";
export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/sass/app.scss'
            ],
            refresh: true,
        }),
    ],
    resolve:{
        alias:{
            '$':"jQuery"
        }
    },
    build:{
        chunkSizeWarningLimit:1000
    }
});
