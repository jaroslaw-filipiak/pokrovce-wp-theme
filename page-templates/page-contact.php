<?php
/**
 * Template Name: Kontakt
 * Template Post Type: page
 *
 * Contact page template
 *
 * @package Pokrovce
 */

get_header();
?>

<main id="primary" class="site-main pt-25 lg:pt-15 pb-15">

    <!-- Hero section -->
    <section class="contact-hero mb-10">
        <div class="max-w-[1170px] w-full mx-auto px-4 sm:px-8 xl:px-0">
            <div class="text-center max-w-[600px] mx-auto">
                <span class="inline-flex items-center gap-2.5 font-medium text-dark mb-3 justify-center">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.3333 14.1V16.6C18.3343 16.8321 18.2867 17.0618 18.1937 17.2745C18.1008 17.4871 17.9644 17.678 17.7934 17.8349C17.6224 17.9918 17.4205 18.1113 17.2006 18.1856C16.9808 18.26 16.7479 18.2876 16.5167 18.2667C13.9523 17.9881 11.4892 17.1118 9.32499 15.7083C7.31151 14.4289 5.60443 12.7218 4.32499 10.7083C2.91663 8.53438 2.04019 6.05923 1.76666 3.48333C1.74583 3.25292 1.77321 3.02067 1.84707 2.80139C1.92092 2.58211 2.03963 2.38061 2.19562 2.20972C2.35162 2.03883 2.54145 1.9023 2.75309 1.80881C2.96473 1.71532 3.19348 1.66692 3.42499 1.66667H5.92499C6.32941 1.66273 6.72148 1.80594 7.02812 2.06965C7.33476 2.33336 7.53505 2.69958 7.59166 3.1C7.69717 3.9001 7.89286 4.68565 8.17499 5.44167C8.2871 5.73998 8.31137 6.06414 8.24491 6.37577C8.17844 6.68741 8.02404 6.97347 7.79999 7.2L6.74166 8.25833C7.92795 10.3446 9.65536 12.072 11.7417 13.2583L12.8 12.2C13.0265 11.976 13.3126 11.8216 13.6242 11.7551C13.9359 11.6886 14.26 11.7129 14.5583 11.825C15.3144 12.1071 16.0999 12.3028 16.9 12.4083C17.3048 12.4655 17.6745 12.6694 17.9388 12.9813C18.2031 13.2932 18.3436 13.6914 18.3333 14.1Z" stroke="#E67E22" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <?php esc_html_e('Skontaktuj się', 'pokrovce'); ?>
                </span>
                <h1 class="font-semibold text-heading-5 xl:text-heading-4 text-dark mb-4">
                    <?php esc_html_e('Masz pytania? Napisz do nas!', 'pokrovce'); ?>
                </h1>
                <p class="text-dark-3 text-custom-lg">
                    <?php esc_html_e('Jesteśmy tutaj, aby pomóc. Odpowiadamy na wiadomości w ciągu 24 godzin w dni robocze.', 'pokrovce'); ?>
                </p>
            </div>
        </div>
    </section>

    <!-- Contact cards -->
    <section class="contact-cards mb-12">
        <div class="max-w-[1170px] w-full mx-auto px-4 sm:px-8 xl:px-0">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Email card -->
                <a href="mailto:kontakt@pokrovce.pl" class="contact-card group bg-white rounded-xl shadow-1 p-6 border border-gray-3 hover:shadow-2 hover:border-[#E67E22]/30 transition-all duration-300 text-center">
                    <div class="flex items-center justify-center w-14 h-14 bg-[#E67E22]/10 rounded-xl mx-auto mb-4 group-hover:bg-[#E67E22] transition-colors duration-300">
                        <svg class="text-[#E67E22] group-hover:text-white transition-colors duration-300" width="28" height="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 4H20C21.1 4 22 4.9 22 6V18C22 19.1 21.1 20 20 20H4C2.9 20 2 19.1 2 18V6C2 4.9 2.9 4 4 4Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M22 6L12 13L2 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-dark mb-2">Email</h3>
                    <p class="text-[#E67E22] font-medium">kontakt@pokrovce.pl</p>
                    <p class="text-dark-4 text-custom-sm mt-2">Odpowiadamy w 24h</p>
                </a>

                <!-- Phone card -->
                <a href="tel:+48123456789" class="contact-card group bg-white rounded-xl shadow-1 p-6 border border-gray-3 hover:shadow-2 hover:border-[#E67E22]/30 transition-all duration-300 text-center">
                    <div class="flex items-center justify-center w-14 h-14 bg-[#E67E22]/10 rounded-xl mx-auto mb-4 group-hover:bg-[#E67E22] transition-colors duration-300">
                        <svg class="text-[#E67E22] group-hover:text-white transition-colors duration-300" width="28" height="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M22 16.92V19.92C22.0011 20.1985 21.9441 20.4742 21.8325 20.7293C21.7209 20.9845 21.5573 21.2136 21.3521 21.4019C21.1468 21.5901 20.9046 21.7335 20.6407 21.8227C20.3769 21.9119 20.0974 21.9451 19.82 21.92C16.7428 21.5856 13.787 20.5341 11.19 18.85C8.77382 17.3147 6.72533 15.2662 5.18999 12.85C3.49997 10.2412 2.44824 7.271 2.11999 4.18C2.095 3.90347 2.12787 3.62476 2.21649 3.36162C2.30512 3.09849 2.44756 2.85669 2.63476 2.65162C2.82196 2.44655 3.0498 2.28271 3.30379 2.17052C3.55777 2.05833 3.83233 2.00026 4.10999 2H7.10999C7.5953 1.99522 8.06579 2.16708 8.43376 2.48353C8.80173 2.79999 9.04207 3.23945 9.10999 3.72C9.23662 4.68007 9.47144 5.62273 9.80999 6.53C9.94454 6.88792 9.97366 7.27691 9.8939 7.65088C9.81415 8.02485 9.62886 8.36811 9.35999 8.64L8.08999 9.91C9.51355 12.4135 11.5865 14.4864 14.09 15.91L15.36 14.64C15.6319 14.3711 15.9751 14.1858 16.3491 14.1061C16.7231 14.0263 17.1121 14.0555 17.47 14.19C18.3773 14.5286 19.3199 14.7634 20.28 14.89C20.7658 14.9585 21.2094 15.2032 21.5265 15.5775C21.8437 15.9518 22.0122 16.4296 22 16.92Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-dark mb-2">Telefon</h3>
                    <p class="text-[#E67E22] font-medium">+48 123 456 789</p>
                    <p class="text-dark-4 text-custom-sm mt-2">Pon-Pt: 9:00 - 17:00</p>
                </a>

                <!-- Location card -->
                <div class="contact-card bg-white rounded-xl shadow-1 p-6 border border-gray-3 text-center">
                    <div class="flex items-center justify-center w-14 h-14 bg-[#E67E22]/10 rounded-xl mx-auto mb-4">
                        <svg class="text-[#E67E22]" width="28" height="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M21 10C21 17 12 23 12 23C12 23 3 17 3 10C3 7.61305 3.94821 5.32387 5.63604 3.63604C7.32387 1.94821 9.61305 1 12 1C14.3869 1 16.6761 1.94821 18.364 3.63604C20.0518 5.32387 21 7.61305 21 10Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M12 13C13.6569 13 15 11.6569 15 10C15 8.34315 13.6569 7 12 7C10.3431 7 9 8.34315 9 10C9 11.6569 10.3431 13 12 13Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-dark mb-2">Adres</h3>
                    <p class="text-dark-3 font-medium">Wielkopolska, Polska</p>
                    <p class="text-dark-4 text-custom-sm mt-2">Wysyłka z magazynu</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact form section -->
    <section class="contact-form-section">
        <div class="max-w-[1170px] w-full mx-auto px-4 sm:px-8 xl:px-0">
            <div class="grid grid-cols-1 lg:grid-cols-5 gap-10">
                <!-- Left side - info -->
                <div class="lg:col-span-2">
                    <h2 class="font-semibold text-xl xl:text-heading-5 text-dark mb-4">
                        Wyślij nam wiadomość
                    </h2>
                    <p class="text-dark-3 mb-6">
                        Wypełnij formularz, a my odpowiemy tak szybko, jak to możliwe. Możesz też skontaktować się z nami bezpośrednio przez email lub telefon.
                    </p>

                    <!-- FAQ link -->
                    <div class="bg-gray-1 rounded-xl p-5 mb-6">
                        <h4 class="font-medium text-dark mb-2 flex items-center gap-2">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 18.3333C14.6024 18.3333 18.3334 14.6024 18.3334 10C18.3334 5.39763 14.6024 1.66667 10 1.66667C5.39765 1.66667 1.66669 5.39763 1.66669 10C1.66669 14.6024 5.39765 18.3333 10 18.3333Z" stroke="#E67E22" stroke-width="1.5"/>
                                <path d="M7.57495 7.49999C7.77087 6.94304 8.15758 6.47341 8.66658 6.17426C9.17558 5.87512 9.77403 5.76577 10.3559 5.86558C10.9378 5.96539 11.4657 6.26792 11.8459 6.71959C12.2261 7.17126 12.4342 7.74292 12.4333 8.33332C12.4333 9.99999 9.93328 10.8333 9.93328 10.8333" stroke="#E67E22" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M10 14.1667H10.0083" stroke="#E67E22" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            Szukasz szybkiej odpowiedzi?
                        </h4>
                        <p class="text-dark-4 text-custom-sm mb-3">
                            Sprawdź nasze FAQ - być może znajdziesz tam odpowiedź na swoje pytanie.
                        </p>
                        <a href="<?php echo esc_url(home_url('/faq')); ?>" class="inline-flex items-center gap-2 text-[#E67E22] font-medium text-custom-sm hover:gap-3 transition-all duration-200">
                            Przejdź do FAQ
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3.33334 8H12.6667" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M8 3.33334L12.6667 8L8 12.6667" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </div>

                    <!-- Response time -->
                    <div class="flex items-start gap-4">
                        <div class="flex items-center justify-center w-10 h-10 bg-green/10 rounded-lg flex-shrink-0">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 17.5C14.1421 17.5 17.5 14.1421 17.5 10C17.5 5.85786 14.1421 2.5 10 2.5C5.85786 2.5 2.5 5.85786 2.5 10C2.5 14.1421 5.85786 17.5 10 17.5Z" stroke="#22AD5C" stroke-width="1.5"/>
                                <path d="M10 5.83334V10L13.3333 11.6667" stroke="#22AD5C" stroke-width="1.5" stroke-linecap="round"/>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-medium text-dark mb-1">Szybka odpowiedź</h4>
                            <p class="text-dark-4 text-custom-sm">Odpowiadamy w ciągu 24 godzin w dni robocze</p>
                        </div>
                    </div>
                </div>

                <!-- Right side - form -->
                <div class="lg:col-span-3">
                    <div class="contact-form-wrapper bg-gray-1 rounded-2xl p-6 sm:p-8">
                        <?php echo do_shortcode('[contact-form-7 id="46e9ad9" title="Formularz 1"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map section (optional) -->
    <section class="contact-map mt-15">
        <div class="max-w-[1170px] w-full mx-auto px-4 sm:px-8 xl:px-0">
            <div class="bg-gray-1 rounded-2xl p-8 text-center">
                <div class="flex items-center justify-center w-16 h-16 bg-[#E67E22]/10 rounded-full mx-auto mb-4">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21 10C21 17 12 23 12 23C12 23 3 17 3 10C3 7.61305 3.94821 5.32387 5.63604 3.63604C7.32387 1.94821 9.61305 1 12 1C14.3869 1 16.6761 1.94821 18.364 3.63604C20.0518 5.32387 21 7.61305 21 10Z" stroke="#E67E22" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12 13C13.6569 13 15 11.6569 15 10C15 8.34315 13.6569 7 12 7C10.3431 7 9 8.34315 9 10C9 11.6569 10.3431 13 12 13Z" stroke="#E67E22" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <h3 class="font-semibold text-xl text-dark mb-2">Wysyłamy z Wielkopolski</h3>
                <p class="text-dark-3 max-w-[500px] mx-auto">
                    Nasz magazyn znajduje się w Wielkopolsce, dzięki czemu paczki docierają do Ciebie szybko i bezpiecznie. Współpracujemy z InPost, DPD i DHL.
                </p>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>

