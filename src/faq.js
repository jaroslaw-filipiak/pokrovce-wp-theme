/**
 * FAQ Accordion
 * Loaded only on FAQ page
 */

import './faq.css';

document.addEventListener('DOMContentLoaded', () => {
  const faqItems = document.querySelectorAll('.faq-item');

  faqItems.forEach((item) => {
    const header = item.querySelector('h3');
    const content = item.querySelector('p');

    if (!header || !content) return;

    // Set initial state - first item open, rest closed
    const index = Array.from(faqItems).indexOf(item);
    if (index === 0) {
      item.classList.add('is-open');
    } else {
      item.classList.add('is-closed');
    }

    header.addEventListener('click', () => {
      const isOpen = item.classList.contains('is-open');

      //Close other items
      faqItems.forEach((otherItem) => {
        if (otherItem !== item) {
          otherItem.classList.remove('is-open');
          otherItem.classList.add('is-closed');
        }
      });

      // Toggle current item
      if (isOpen) {
        item.classList.remove('is-open');
        item.classList.add('is-closed');
      } else {
        item.classList.remove('is-closed');
        item.classList.add('is-open');
      }
    });
  });
});
