import {defineConfig} from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';
import * as path from "node:path";

export default defineConfig({
    server: {
        host: '0.0.0.0',
        port: 5173,
        // proxy: {
        //     '/api': {
        //         target: 'http://localhost:8080',
        //         changeOrigin: true,
        //     },
        // },
    },
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        vue(),
    ],
    resolve: {
        extensions: ['.js', '.vue'],
        alias: {
            vue: 'vue/dist/vue.esm-bundler.js',
            '@': path.resolve(__dirname, 'resources/js'),
            '&': path.resolve(__dirname, 'resources/css'),
            Assets: path.resolve(__dirname, 'resources/js/assets'),
            Components: path.resolve(__dirname, 'resources/js/components'),
            Router: path.resolve(__dirname, 'resources/js/router'),
            Store: path.resolve(__dirname, 'resources/js/store'),
            Views: path.resolve(__dirname, 'resources/js/views'),
        },
    },
});
