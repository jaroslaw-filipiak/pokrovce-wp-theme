/**
 * My Account page scripts
 *
 * @package pokrovce
 */

import './myaccount.css';

// My Account specific functionality
document.addEventListener('DOMContentLoaded', function () {
    // Tab navigation enhancement
    const navLinks = document.querySelectorAll('.woocommerce-MyAccount-navigation-link a');
    
    navLinks.forEach(link => {
        link.addEventListener('mouseenter', function() {
            this.parentElement.classList.add('is-hovered');
        });
        
        link.addEventListener('mouseleave', function() {
            this.parentElement.classList.remove('is-hovered');
        });
    });

    // Mobile menu toggle for account navigation
    const accountNav = document.querySelector('.woocommerce-MyAccount-navigation');
    const accountContent = document.querySelector('.woocommerce-MyAccount-content');
    
    if (accountNav && window.innerWidth < 768) {
        // Create mobile toggle button
        const toggleBtn = document.createElement('button');
        toggleBtn.className = 'myaccount-nav-toggle';
        toggleBtn.innerHTML = `
            <span>Menu konta</span>
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M5 7.5L10 12.5L15 7.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        `;
        
        accountNav.parentNode.insertBefore(toggleBtn, accountNav);
        accountNav.classList.add('is-collapsed');
        
        toggleBtn.addEventListener('click', function() {
            accountNav.classList.toggle('is-collapsed');
            this.classList.toggle('is-active');
        });
    }
});

