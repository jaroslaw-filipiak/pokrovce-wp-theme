/**
 * About Page Scripts
 * Loaded only on About page
 */

import './about.css';

document.addEventListener('DOMContentLoaded', () => {
  // Animate stats on scroll
  const statItems = document.querySelectorAll('.stat-item');
  
  if (statItems.length > 0) {
    const animateStats = (entries, observer) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          const statNumber = entry.target.querySelector('.stat-number');
          if (statNumber && !statNumber.dataset.animated) {
            const targetValue = parseInt(entry.target.dataset.count, 10);
            animateValue(statNumber, 0, targetValue, 2000);
            statNumber.dataset.animated = 'true';
          }
          observer.unobserve(entry.target);
        }
      });
    };

    const observer = new IntersectionObserver(animateStats, {
      threshold: 0.5,
      rootMargin: '0px',
    });

    statItems.forEach((item) => observer.observe(item));
  }

  // Animate counting
  function animateValue(element, start, end, duration) {
    const range = end - start;
    const startTime = performance.now();

    function update(currentTime) {
      const elapsed = currentTime - startTime;
      const progress = Math.min(elapsed / duration, 1);

      // Easing function (ease-out)
      const easeOut = 1 - Math.pow(1 - progress, 3);
      const current = Math.round(start + range * easeOut);

      element.textContent = current.toLocaleString('pl-PL');

      if (progress < 1) {
        requestAnimationFrame(update);
      }
    }

    requestAnimationFrame(update);
  }

  // Smooth reveal for feature cards
  const featureCards = document.querySelectorAll('.feature-card');
  
  if (featureCards.length > 0) {
    const revealCards = (entries, observer) => {
      entries.forEach((entry, index) => {
        if (entry.isIntersecting) {
          setTimeout(() => {
            entry.target.classList.add('revealed');
          }, index * 100);
          observer.unobserve(entry.target);
        }
      });
    };

    const cardObserver = new IntersectionObserver(revealCards, {
      threshold: 0.2,
    });

    featureCards.forEach((card) => {
      card.style.opacity = '0';
      card.style.transform = 'translateY(20px)';
      card.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
      cardObserver.observe(card);
    });
  }

  // Add revealed class styles
  const style = document.createElement('style');
  style.textContent = `
    .feature-card.revealed {
      opacity: 1 !important;
      transform: translateY(0) !important;
    }
  `;
  document.head.appendChild(style);
});

