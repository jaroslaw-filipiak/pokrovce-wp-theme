import './style.css';

// Swiper
import Swiper from 'swiper';
import { Navigation, Pagination, Autoplay } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

// Make Swiper available globally
window.Swiper = Swiper;

// Import custom scripts
import './js/swiper-init.js';
import './js/countdown.js';
import './js/woocommerce-single.js';

// ============================================
// Mobile Menu Toggle
// ============================================
document.addEventListener('DOMContentLoaded', function () {
  const navToggle = document.getElementById('navToggle');
  const mobileMenu = document.getElementById('mobileMenu');
  const mobileMenuOverlay = document.getElementById('mobileMenuOverlay');
  const mobileMenuClose = document.getElementById('mobileMenuClose');

  if (!navToggle || !mobileMenu || !mobileMenuOverlay) return;

  let isMenuOpen = false;

  // Toggle mobile menu
  function openMobileMenu() {
    isMenuOpen = true;
    mobileMenu.classList.add('is-open');
    mobileMenuOverlay.classList.add('is-visible');
    navToggle.classList.add('is-active');
    document.body.style.overflow = 'hidden';
  }

  function closeMobileMenu() {
    isMenuOpen = false;
    mobileMenu.classList.remove('is-open');
    mobileMenuOverlay.classList.remove('is-visible');
    navToggle.classList.remove('is-active');
    document.body.style.overflow = '';
  }

  // Event listeners
  navToggle.addEventListener('click', function (e) {
    e.stopPropagation();
    if (isMenuOpen) {
      closeMobileMenu();
    } else {
      openMobileMenu();
    }
  });

  if (mobileMenuClose) {
    mobileMenuClose.addEventListener('click', closeMobileMenu);
  }

  mobileMenuOverlay.addEventListener('click', closeMobileMenu);

  // Close menu on escape key
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape' && isMenuOpen) {
      closeMobileMenu();
    }
  });

  // Close menu on resize to desktop
  window.addEventListener('resize', function () {
    if (window.innerWidth >= 1280 && isMenuOpen) {
      closeMobileMenu();
    }
  });

  // Close menu when clicking on menu links
  const menuLinks = mobileMenu.querySelectorAll('a');
  menuLinks.forEach(function (link) {
    link.addEventListener('click', function () {
      closeMobileMenu();
    });
  });
});
