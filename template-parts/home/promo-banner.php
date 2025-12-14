<?php
/**
 * Template part for displaying Promo Banner section
 *
 * @package pokrovce
 */
?>
<section class="overflow-hidden py-20">
    <div class="max-w-[1170px] w-full mx-auto px-4 sm:px-8 xl:px-0">
        <!-- promo banner big -->
        <div class="relative z-1 overflow-hidden rounded-lg bg-[#F5F5F7] py-12.5 lg:py-17.5 xl:py-22.5 px-4 sm:px-7.5 lg:px-14 xl:px-19 mb-7.5">
            <div class="max-w-[550px] w-full">
                <span class="block font-medium text-xl text-dark mb-3">
                    Apple iPhone 14 Plus
                </span>

                <h2 class="font-bold text-xl lg:text-heading-4 xl:text-heading-3 text-dark mb-5">
                    UP TO 30% OFF
                </h2>

                <p>
                    iPhone 14 has the same superspeedy chip that's in iPhone 13 Pro,
                    A15 Bionic, with a 5‑core GPU, powers all the latest features.
                </p>

                <a href="#" class="inline-flex font-medium text-custom-sm text-white bg-blue py-[11px] px-9.5 rounded-md ease-out duration-200 hover:bg-blue-dark mt-7.5">
                    <?php esc_html_e( 'Buy Now', 'pokrovce' ); ?>
                </a>
            </div>

            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/promo/promo-01.png" alt="promo img" class="absolute bottom-0 right-4 lg:right-26 -z-1" width="274" height="350">
        </div>

        <div class="grid gap-7.5 grid-cols-1 lg:grid-cols-2">
            <!-- promo banner small -->
            <div class="relative z-1 overflow-hidden rounded-lg bg-[#DBF4F3] py-10 xl:py-16 px-4 sm:px-7.5 xl:px-10">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/promo/promo-02.png" alt="promo img" class="absolute top-1/2 -translate-y-1/2 left-3 sm:left-10 -z-1" width="241" height="241">

                <div class="text-right">
                    <span class="block text-lg text-dark mb-1.5">
                        Foldable Motorised Treadmill
                    </span>

                    <h2 class="font-bold text-xl lg:text-heading-4 text-dark mb-2.5">
                        Workout At Home
                    </h2>

                    <p class="font-semibold text-custom-1 text-teal">
                        Flat 20% off
                    </p>

                    <a href="#" class="inline-flex font-medium text-custom-sm text-white bg-teal py-2.5 px-8.5 rounded-md ease-out duration-200 hover:bg-teal-dark mt-9">
                        <?php esc_html_e( 'Grab Now', 'pokrovce' ); ?>
                    </a>
                </div>
            </div>

            <!-- promo banner small -->
            <div class="relative z-1 overflow-hidden rounded-lg bg-[#FFECE1] py-10 xl:py-16 px-4 sm:px-7.5 xl:px-10">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/promo/promo-03.png" alt="promo img" class="absolute top-1/2 -translate-y-1/2 right-3 sm:right-8.5 -z-1" width="200" height="200">

                <div>
                    <span class="block text-lg text-dark mb-1.5">
                        Apple Watch Ultra
                    </span>

                    <h2 class="font-bold text-xl lg:text-heading-4 text-dark mb-2.5">
                        Up to <span class="text-orange">40%</span> off
                    </h2>

                    <p class="max-w-[285px] text-custom-sm">
                        The aerospace-grade titanium case strikes the perfect balance of everything.
                    </p>

                    <a href="#" class="inline-flex font-medium text-custom-sm text-white bg-orange py-2.5 px-8.5 rounded-md ease-out duration-200 hover:bg-orange-dark mt-7.5">
                        <?php esc_html_e( 'Buy Now', 'pokrovce' ); ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>






