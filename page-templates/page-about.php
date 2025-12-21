<?php
/**
 * Template Name: O nas
 * Template Post Type: page
 *
 * About page template with contact form
 *
 * @package Pokrovce
 */

get_header();
?>

<main id="primary" class="site-main pt-25 lg:pt-15 pb-15">

    <!-- Hero section -->
    <section class="about-hero mb-15">
        <div class="max-w-[1170px] w-full mx-auto px-4 sm:px-8 xl:px-0">
            <div class="text-center max-w-[700px] mx-auto">
                <span class="inline-flex items-center gap-2.5 font-medium text-dark mb-3 justify-center">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10 10C12.3012 10 14.1667 8.13452 14.1667 5.83333C14.1667 3.53214 12.3012 1.66667 10 1.66667C7.69882 1.66667 5.83334 3.53214 5.83334 5.83333C5.83334 8.13452 7.69882 10 10 10Z"
                            stroke="#E67E22" stroke-width="1.5" />
                        <path
                            d="M10 12.5C5.85786 12.5 2.5 14.357 2.5 16.6667C2.5 17.1269 2.8731 17.5 3.33333 17.5H16.6667C17.1269 17.5 17.5 17.1269 17.5 16.6667C17.5 14.357 14.1421 12.5 10 12.5Z"
                            stroke="#E67E22" stroke-width="1.5" />
                    </svg>
                    <?php esc_html_e('Poznaj nas', 'pokrovce'); ?>
                </span>
                <h1 class="font-semibold text-heading-5 xl:text-heading-4 text-dark mb-4">
                    O Pokrovce.pl
                </h1>
                <p class="text-dark-3 text-custom-lg">
                    Jesteśmy polskim sklepem z siedzibą w Wielkopolsce, który specjalizuje się w sprzedaży wysokiej
                    jakości pokrowców na krzesła skandynawskie.
                </p>
            </div>
        </div>
    </section>

    <!-- Mission section -->
    <section class="about-mission mb-15">
        <div class="max-w-[1170px] w-full mx-auto px-4 sm:px-8 xl:px-0">
            <div
                class="bg-gradient-to-r from-[#E67E22]/10 to-[#E67E22]/5 rounded-2xl p-8 sm:p-12 relative overflow-hidden">
                <div
                    class="absolute top-0 right-0 w-64 h-64 bg-[#E67E22]/10 rounded-full -translate-y-1/2 translate-x-1/2">
                </div>
                <div
                    class="absolute bottom-0 left-0 w-48 h-48 bg-[#E67E22]/5 rounded-full translate-y-1/2 -translate-x-1/2">
                </div>

                <div class="relative z-10 max-w-[800px]">
                    <h2 class="font-semibold text-xl xl:text-heading-5 text-dark mb-4 flex items-center gap-3">
                        <span class="flex items-center justify-center w-10 h-10 bg-[#E67E22] rounded-full">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10 17.5C14.1421 17.5 17.5 14.1421 17.5 10C17.5 5.85786 14.1421 2.5 10 2.5C5.85786 2.5 2.5 5.85786 2.5 10C2.5 14.1421 5.85786 17.5 10 17.5Z"
                                    stroke="white" stroke-width="1.5" />
                                <path d="M10 6.66667V10L12.5 12.5" stroke="white" stroke-width="1.5"
                                    stroke-linecap="round" />
                            </svg>
                        </span>
                        Nasza misja
                    </h2>
                    <p class="text-dark-3 text-custom-lg leading-relaxed">
                        Pomagamy Polakom w <strong class="text-dark">odświeżaniu wnętrz w prosty, ekonomiczny i
                            ekologiczny sposób</strong> – bez konieczności wymiany całych mebli. Wierzymy, że każdy
                        zasługuje na piękne wnętrze, a mała zmiana może zrobić wielką różnicę.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Features section -->
    <section class="about-features mb-15">
        <div class="max-w-[1170px] w-full mx-auto px-4 sm:px-8 xl:px-0">
            <div class="text-center mb-10">
                <span class="flex items-center gap-2.5 font-medium text-dark mb-1.5 justify-center">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10 2.5L12.0312 7.65625L17.5 8.4375L13.4375 12.0938L14.5625 17.5L10 14.8438L5.4375 17.5L6.5625 12.0938L2.5 8.4375L7.96875 7.65625L10 2.5Z"
                            stroke="#E67E22" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    Dlaczego my?
                </span>
                <h2 class="font-semibold text-xl xl:text-heading-5 text-dark">
                    Co nas wyróżnia
                </h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Feature 1 -->
                <div
                    class="feature-card bg-white rounded-xl shadow-1 p-6 border border-gray-3 hover:shadow-2 hover:border-[#E67E22]/30 transition-all duration-300">
                    <div class="flex items-center justify-center w-14 h-14 bg-[#E67E22]/10 rounded-xl mb-5">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M16 16L19 19M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3"
                                stroke="#E67E22" stroke-width="2" stroke-linecap="round" />
                            <path d="M14 5L19 5M19 5L19 10M19 5L14 10" stroke="#E67E22" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <span
                        class="inline-flex items-center justify-center w-8 h-8 bg-[#E67E22] text-white font-bold rounded-full text-sm mb-3">1</span>
                    <h3 class="font-semibold text-custom-lg text-dark mb-3">Szybka dostawa z Polski</h3>
                    <p class="text-dark-3">
                        Wszystkie pokrowce wysyłamy bezpośrednio z naszego magazynu w Wielkopolsce, co gwarantuje
                        ekspresową realizację zamówień w 1-2 dni robocze.
                    </p>
                </div>

                <!-- Feature 2 -->
                <div
                    class="feature-card bg-white rounded-xl shadow-1 p-6 border border-gray-3 hover:shadow-2 hover:border-[#E67E22]/30 transition-all duration-300">
                    <div class="flex items-center justify-center w-14 h-14 bg-[#E67E22]/10 rounded-xl mb-5">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9 12L11 14L15 10M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z"
                                stroke="#E67E22" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <span
                        class="inline-flex items-center justify-center w-8 h-8 bg-[#E67E22] text-white font-bold rounded-full text-sm mb-3">2</span>
                    <h3 class="font-semibold text-custom-lg text-dark mb-3">Wyselekcjonowane produkty</h3>
                    <p class="text-dark-3">
                        Oferujemy wyłącznie pokrowce z materiałów premium (poliester + elastan), które są trwałe,
                        przyjemne w dotyku i łatwe w utrzymaniu czystości.
                    </p>
                </div>

                <!-- Feature 3 -->
                <div
                    class="feature-card bg-white rounded-xl shadow-1 p-6 border border-gray-3 hover:shadow-2 hover:border-[#E67E22]/30 transition-all duration-300">
                    <div class="flex items-center justify-center w-14 h-14 bg-[#E67E22]/10 rounded-xl mb-5">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M17 8C17 10.7614 14.7614 13 12 13C9.23858 13 7 10.7614 7 8C7 5.23858 9.23858 3 12 3C14.7614 3 17 5.23858 17 8Z"
                                stroke="#E67E22" stroke-width="2" />
                            <path d="M3 21C3 17.134 7.02944 14 12 14C16.9706 14 21 17.134 21 21" stroke="#E67E22"
                                stroke-width="2" stroke-linecap="round" />
                        </svg>
                    </div>
                    <span
                        class="inline-flex items-center justify-center w-8 h-8 bg-[#E67E22] text-white font-bold rounded-full text-sm mb-3">3</span>
                    <h3 class="font-semibold text-custom-lg text-dark mb-3">Setki zadowolonych klientów</h3>
                    <p class="text-dark-3">
                        Zaufały nam już rodziny z całej Polski, które codziennie cieszą się odświeżonymi wnętrzami.
                        Sprawdź opinie naszych klientów!
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats section -->
    <section class="about-stats mb-15">
        <div class="max-w-[1170px] w-full mx-auto px-4 sm:px-8 xl:px-0">
            <div class="bg-dark rounded-2xl p-8 sm:p-12">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                    <div class="stat-item text-center" data-count="500">
                        <div class="text-heading-4 xl:text-heading-3 font-bold text-[#E67E22] mb-2">
                            <span class="stat-number">500</span>+
                        </div>
                        <p class="text-white/80">Zadowolonych klientów</p>
                    </div>
                    <div class="stat-item text-center" data-count="1500">
                        <div class="text-heading-4 xl:text-heading-3 font-bold text-[#E67E22] mb-2">
                            <span class="stat-number">1500</span>+
                        </div>
                        <p class="text-white/80">Sprzedanych pokrowców</p>
                    </div>
                    <div class="stat-item text-center" data-count="24">
                        <div class="text-heading-4 xl:text-heading-3 font-bold text-[#E67E22] mb-2">
                            <span class="stat-number">24</span>h
                        </div>
                        <p class="text-white/80">Czas wysyłki</p>
                    </div>
                    <div class="stat-item text-center" data-count="98">
                        <div class="text-heading-4 xl:text-heading-3 font-bold text-[#E67E22] mb-2">
                            <span class="stat-number">98</span>%
                        </div>
                        <p class="text-white/80">Pozytywnych opinii</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Values section -->
    <section class="about-values mb-15">
        <div class="max-w-[1170px] w-full mx-auto px-4 sm:px-8 xl:px-0">
            <div class="text-center mb-10">
                <span class="flex items-center gap-2.5 font-medium text-dark mb-1.5 justify-center">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10 17.5L3.47487 10.2526C1.84171 8.43229 1.84171 5.56771 3.47487 3.74738C5.10804 1.92706 7.68061 1.92706 9.31378 3.74738L10 4.51866L10.6862 3.74738C12.3194 1.92706 14.892 1.92706 16.5251 3.74738C18.1583 5.56771 18.1583 8.43229 16.5251 10.2526L10 17.5Z"
                            stroke="#E67E22" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    Nasze wartości
                </span>
                <h2 class="font-semibold text-xl xl:text-heading-5 text-dark">
                    W co wierzymy
                </h2>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="value-item text-center p-6">
                    <div class="flex items-center justify-center w-16 h-16 bg-green/10 rounded-full mx-auto mb-4">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 3C12 3 4 7 4 12C4 17 8 21 12 21C16 21 20 17 20 12C20 7 12 3 12 3Z"
                                stroke="#22AD5C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M12 21V11" stroke="#22AD5C" stroke-width="2" stroke-linecap="round" />
                            <path d="M12 11C12 11 8 13 8 16" stroke="#22AD5C" stroke-width="2" stroke-linecap="round" />
                            <path d="M12 14C12 14 15 15 16 17" stroke="#22AD5C" stroke-width="2"
                                stroke-linecap="round" />
                        </svg>
                    </div>
                    <h3 class="font-semibold text-dark mb-2">Ekologia</h3>
                    <p class="text-dark-4 text-custom-sm">Przedłużamy życie mebli zamiast wyrzucać</p>
                </div>

                <div class="value-item text-center p-6">
                    <div class="flex items-center justify-center w-16 h-16 bg-blue/10 rounded-full mx-auto mb-4">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12 2L14.09 8.26L21 9.27L16 14.14L17.18 21.02L12 18.77L6.82 21.02L8 14.14L3 9.27L9.91 8.26L12 2Z"
                                stroke="#3C50E0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <h3 class="font-semibold text-dark mb-2">Jakość</h3>
                    <p class="text-dark-4 text-custom-sm">Tylko sprawdzone materiały premium</p>
                </div>

                <div class="value-item text-center p-6">
                    <div class="flex items-center justify-center w-16 h-16 bg-[#E67E22]/10 rounded-full mx-auto mb-4">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M19 14C20.49 12.54 22 10.79 22 8.5C22 7.04131 21.4205 5.64236 20.3891 4.61091C19.3576 3.57946 17.9587 3 16.5 3C14.74 3 13.5 3.5 12 5C10.5 3.5 9.26 3 7.5 3C6.04131 3 4.64236 3.57946 3.61091 4.61091C2.57946 5.64236 2 7.04131 2 8.5C2 10.8 3.5 12.55 5 14L12 21L19 14Z"
                                stroke="#E67E22" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <h3 class="font-semibold text-dark mb-2">Pasja</h3>
                    <p class="text-dark-4 text-custom-sm">Kochamy to, co robimy</p>
                </div>

                <div class="value-item text-center p-6">
                    <div class="flex items-center justify-center w-16 h-16 bg-yellow/10 rounded-full mx-auto mb-4">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M17 21V19C17 17.9391 16.5786 16.9217 15.8284 16.1716C15.0783 15.4214 14.0609 15 13 15H5C3.93913 15 2.92172 15.4214 2.17157 16.1716C1.42143 16.9217 1 17.9391 1 19V21"
                                stroke="#FBBF24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M9 11C11.2091 11 13 9.20914 13 7C13 4.79086 11.2091 3 9 3C6.79086 3 5 4.79086 5 7C5 9.20914 6.79086 11 9 11Z"
                                stroke="#FBBF24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M23 21V19C22.9993 18.1137 22.7044 17.2528 22.1614 16.5523C21.6184 15.8519 20.8581 15.3516 20 15.13"
                                stroke="#FBBF24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M16 3.13C16.8604 3.35031 17.623 3.85071 18.1676 4.55232C18.7122 5.25392 19.0078 6.11683 19.0078 7.005C19.0078 7.89318 18.7122 8.75608 18.1676 9.45769C17.623 10.1593 16.8604 10.6597 16 10.88"
                                stroke="#FBBF24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <h3 class="font-semibold text-dark mb-2">Klient</h3>
                    <p class="text-dark-4 text-custom-sm">Twoja satysfakcja jest priorytetem</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA section -->
    <section class="about-cta">
        <div class="max-w-[1170px] w-full mx-auto px-4 sm:px-8 xl:px-0">
            <div
                class="bg-gradient-to-r from-dark to-dark-2 rounded-2xl p-8 sm:p-12 text-center relative overflow-hidden">
                <!-- Background decoration -->
                <div
                    class="absolute top-0 right-0 w-64 h-64 bg-[#E67E22]/10 rounded-full -translate-y-1/2 translate-x-1/2">
                </div>
                <div
                    class="absolute bottom-0 left-0 w-48 h-48 bg-[#E67E22]/5 rounded-full translate-y-1/2 -translate-x-1/2">
                </div>

                <div class="relative z-10">
                    <h2 class="font-semibold text-xl xl:text-heading-5 text-white mb-3">
                        Masz pytania? Chętnie pomożemy!
                    </h2>
                    <p class="text-white/70 mb-6 max-w-[500px] mx-auto">
                        Skontaktuj się z nami - odpowiadamy w ciągu 24 godzin w dni robocze.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="<?php echo esc_url(home_url('/kontakt')); ?>"
                            class="inline-flex items-center justify-center gap-2 font-medium text-white bg-[#E67E22] py-3 px-7 rounded-lg ease-out duration-200 hover:bg-[#E67E22]/90">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M4 4H20C21.1 4 22 4.9 22 6V18C22 19.1 21.1 20 20 20H4C2.9 20 2 19.1 2 18V6C2 4.9 2.9 4 4 4Z"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M22 6L12 13L2 6" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                            Napisz do nas
                        </a>
                        <a href="<?php echo esc_url(home_url('/faq')); ?>"
                            class="inline-flex items-center justify-center gap-2 font-medium text-white bg-white/10 border border-white/20 py-3 px-7 rounded-lg ease-out duration-200 hover:bg-white/20">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10 18.3333C14.6024 18.3333 18.3334 14.6024 18.3334 10C18.3334 5.39763 14.6024 1.66667 10 1.66667C5.39765 1.66667 1.66669 5.39763 1.66669 10C1.66669 14.6024 5.39765 18.3333 10 18.3333Z"
                                    stroke="currentColor" stroke-width="1.5" />
                                <path
                                    d="M7.57495 7.49999C7.77087 6.94304 8.15758 6.47341 8.66658 6.17426C9.17558 5.87512 9.77403 5.76577 10.3559 5.86558C10.9378 5.96539 11.4657 6.26792 11.8459 6.71959C12.2261 7.17126 12.4342 7.74292 12.4333 8.33332C12.4333 9.99999 9.93328 10.8333 9.93328 10.8333"
                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M10 14.1667H10.0083" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            Sprawdź FAQ
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>