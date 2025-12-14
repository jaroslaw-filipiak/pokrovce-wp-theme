/**
 * WooCommerce Single Product JS
 */
document.addEventListener('DOMContentLoaded', function () {
  // Quantity Buttons
  document.querySelectorAll('.quantity-minus').forEach(function (btn) {
    btn.addEventListener('click', function () {
      const input = this.closest('.cart, .border').querySelector('input.qty');
      if (input) {
        const val = parseInt(input.value) || 1;
        const min = parseInt(input.min) || 1;
        if (val > min) {
          input.value = val - 1;
          input.dispatchEvent(new Event('change', { bubbles: true }));
        }
      }
    });
  });

  document.querySelectorAll('.quantity-plus').forEach(function (btn) {
    btn.addEventListener('click', function () {
      const input = this.closest('.cart, .border').querySelector('input.qty');
      if (input) {
        const val = parseInt(input.value) || 1;
        const max = parseInt(input.max) || 9999;
        if (val < max) {
          input.value = val + 1;
          input.dispatchEvent(new Event('change', { bubbles: true }));
        }
      }
    });
  });

  // Product Thumbnails
  document.querySelectorAll('.product-thumbnail').forEach(function (thumb) {
    thumb.addEventListener('click', function () {
      document.querySelectorAll('.product-thumbnail').forEach(function (t) {
        t.classList.remove('border-blue');
        t.classList.add('border-transparent');
      });
      this.classList.remove('border-transparent');
      this.classList.add('border-blue');
    });
  });

  // Custom Zoom Button - trigger WooCommerce lightbox
  document.querySelectorAll('.gallery__Image').forEach(function (btn) {
    btn.addEventListener('click', function () {
      // Find the main gallery image link and trigger click
      const galleryImage = document.querySelector('.woocommerce-product-gallery__image a');
      if (galleryImage) {
        galleryImage.click();
      }
    });
  });
});






