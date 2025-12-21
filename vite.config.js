import { defineConfig } from 'vite';

export default defineConfig({
  build: {
    rollupOptions: {
      input: {
        global: 'src/global.js',
        cart: 'src/cart.js',
        checkout: 'src/checkout.js',
        faq: 'src/faq.js',
        // admin: 'src/admin.js',
      },
      output: {
        entryFileNames: 'assets/[name].js',
        chunkFileNames: 'assets/[name].js',
        assetFileNames: 'assets/[name].[ext]',
      },
    },
  },
});
