import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        [vue()],
        build: {
          rollupOptions: {
            input: {
              main: resolve(__dirname, 'resources/js/app.js'),
              // Tambahkan file JS kamu di sini jika diperlukan
            },
          },
    ],
});
