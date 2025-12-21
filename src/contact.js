/**
 * Contact Page Scripts
 * Loaded only on Contact page
 */

import './contact.css';

document.addEventListener('DOMContentLoaded', () => {
  // Animate contact cards on scroll
  const contactCards = document.querySelectorAll('.contact-card');
  
  if (contactCards.length > 0) {
    const revealCards = (entries, observer) => {
      entries.forEach((entry, index) => {
        if (entry.isIntersecting) {
          setTimeout(() => {
            entry.target.style.opacity = '1';
            entry.target.style.transform = 'translateY(0)';
          }, index * 100);
          observer.unobserve(entry.target);
        }
      });
    };

    const observer = new IntersectionObserver(revealCards, {
      threshold: 0.2,
    });

    contactCards.forEach((card) => {
      card.style.opacity = '0';
      card.style.transform = 'translateY(20px)';
      card.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
      observer.observe(card);
    });
  }

  // Form submission feedback
  const form = document.querySelector('.wpcf7-form');
  if (form) {
    form.addEventListener('wpcf7mailsent', () => {
      // Scroll to response message
      const response = form.querySelector('.wpcf7-response-output');
      if (response) {
        response.scrollIntoView({ behavior: 'smooth', block: 'center' });
      }
    });
  }
});

