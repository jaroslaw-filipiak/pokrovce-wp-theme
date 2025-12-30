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

  // Zoom Button - trigger WooCommerce PhotoSwipe lightbox
  document.querySelectorAll('.gallery__Image').forEach(function (btn) {
    btn.addEventListener('click', function (e) {
      e.stopPropagation();

      // Trigger click on the gallery trigger button (WooCommerce default)
      var trigger = document.querySelector(
        '.woocommerce-product-gallery__trigger'
      );
      if (trigger) {
        trigger.click();
        return;
      }

      // Or trigger click on the main image link
      var imageLink = document.querySelector(
        '.woocommerce-product-gallery__image a'
      );
      if (imageLink) {
        imageLink.click();
      }
    });
  });
});
