/**
 * Swiper Carousels Initialization
 */

import Swiper from 'swiper';
import { Navigation, Pagination, Autoplay } from 'swiper/modules';

document.addEventListener('DOMContentLoaded', function() {
    // Hero Carousel
    if (document.querySelector('.hero-carousel')) {
        new Swiper('.hero-carousel', {
            modules: [Pagination, Autoplay],
            slidesPerView: 1,
            spaceBetween: 0,
            loop: true,
            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.hero-carousel .swiper-pagination',
                clickable: true,
            },
        });
    }

    // Categories Carousel
    if (document.querySelector('.categories-carousel')) {
        new Swiper('.categories-carousel', {
            modules: [Navigation],
            slidesPerView: 6,
            spaceBetween: 20,
            navigation: {
                nextEl: '.categories-carousel .swiper-button-next',
                prevEl: '.categories-carousel .swiper-button-prev',
            },
            breakpoints: {
                0: {
                    slidesPerView: 2,
                    spaceBetween: 10,
                },
                640: {
                    slidesPerView: 3,
                    spaceBetween: 15,
                },
                1000: {
                    slidesPerView: 4,
                    spaceBetween: 15,
                },
                1200: {
                    slidesPerView: 6,
                    spaceBetween: 20,
                },
            },
        });
    }

    // Testimonials Carousel
    if (document.querySelector('.testimonial-carousel')) {
        new Swiper('.testimonial-carousel', {
            modules: [Navigation],
            slidesPerView: 3,
            spaceBetween: 20,
            navigation: {
                nextEl: '.testimonial-carousel .swiper-button-next',
                prevEl: '.testimonial-carousel .swiper-button-prev',
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                    spaceBetween: 15,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 15,
                },
                1200: {
                    slidesPerView: 3,
                    spaceBetween: 20,
                },
            },
        });
    }

    // Related Products Carousel
    if (document.querySelector('.related-carousel')) {
        new Swiper('.related-carousel', {
            modules: [Navigation],
            slidesPerView: 4,
            spaceBetween: 24,
            navigation: {
                nextEl: '.related-next',
                prevEl: '.related-prev',
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                    spaceBetween: 16,
                },
                480: {
                    slidesPerView: 2,
                    spaceBetween: 16,
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 20,
                },
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 24,
                },
            },
        });
    }
});

