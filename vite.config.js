import { defineConfig } from 'vite';

export default defineConfig({
  build: {
    rollupOptions: {
      input: {
        global: 'src/global.js',
        cart: 'src/cart.js',
        checkout: 'src/checkout.js',
        faq: 'src/faq.js',
        about: 'src/about.js',
        contact: 'src/contact.js',
        myaccount: 'src/myaccount.js',
        'single-product': 'src/single-product.css',
        'woocommerce-single': 'src/js/woocommerce-single.js',
      },
      output: {
        entryFileNames: 'assets/[name].js',
        chunkFileNames: 'assets/[name].js',
        assetFileNames: 'assets/[name].[ext]',
      },
    },
  },
});
