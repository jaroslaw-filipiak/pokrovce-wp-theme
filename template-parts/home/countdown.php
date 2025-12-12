<?php
/**
 * Template part for displaying Countdown section
 *
 * @package pokrovce
 */

// Set countdown deadline - change this date as needed
$deadline = '2025-12-31';
?>
<section class="overflow-hidden py-20">
    <div class="max-w-[1170px] w-full mx-auto px-4 sm:px-8 xl:px-0">
        <div class="relative overflow-hidden z-1 rounded-lg bg-[#D0E9F3] p-4 sm:p-7.5 lg:p-10 xl:p-15">
            <div class="max-w-[422px] w-full">
                <span class="block font-medium text-custom-1 text-blue mb-2.5">
                    <?php esc_html_e( "Don't Miss!!", 'pokrovce' ); ?>
                </span>

                <h2 class="font-bold text-dark text-xl lg:text-heading-4 xl:text-heading-3 mb-3">
                    <?php esc_html_e( 'Enhance Your Music Experience', 'pokrovce' ); ?>
                </h2>

                <p><?php esc_html_e( 'The Havit H206d is a wired PC headphone.', 'pokrovce' ); ?></p>

                <!-- Countdown timer -->
                <div class="flex flex-wrap gap-6 mt-6" data-countdown="<?php echo esc_attr( $deadline ); ?>">
                    <!-- timer day -->
                    <div>
                        <span class="countdown-days min-w-[64px] h-14.5 font-semibold text-xl lg:text-3xl text-dark rounded-lg flex items-center justify-center bg-white shadow-2 px-4 mb-2">00</span>
                        <span class="block text-custom-sm text-dark text-center"><?php esc_html_e( 'Days', 'pokrovce' ); ?></span>
                    </div>

                    <!-- timer hours -->
                    <div>
                        <span class="countdown-hours min-w-[64px] h-14.5 font-semibold text-xl lg:text-3xl text-dark rounded-lg flex items-center justify-center bg-white shadow-2 px-4 mb-2">00</span>
                        <span class="block text-custom-sm text-dark text-center"><?php esc_html_e( 'Hours', 'pokrovce' ); ?></span>
                    </div>

                    <!-- timer minutes -->
                    <div>
                        <span class="countdown-minutes min-w-[64px] h-14.5 font-semibold text-xl lg:text-3xl text-dark rounded-lg flex items-center justify-center bg-white shadow-2 px-4 mb-2">00</span>
                        <span class="block text-custom-sm text-dark text-center"><?php esc_html_e( 'Minutes', 'pokrovce' ); ?></span>
                    </div>

                    <!-- timer seconds -->
                    <div>
                        <span class="countdown-seconds min-w-[64px] h-14.5 font-semibold text-xl lg:text-3xl text-dark rounded-lg flex items-center justify-center bg-white shadow-2 px-4 mb-2">00</span>
                        <span class="block text-custom-sm text-dark text-center"><?php esc_html_e( 'Seconds', 'pokrovce' ); ?></span>
                    </div>
                </div>
                <!-- Countdown timer ends -->

                <a href="#" class="inline-flex font-medium text-custom-sm text-white bg-blue py-3 px-9.5 rounded-md ease-out duration-200 hover:bg-blue-dark mt-7.5">
                    <?php esc_html_e( 'Check it Out!', 'pokrovce' ); ?>
                </a>
            </div>

            <!-- bg shapes -->
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/countdown/countdown-bg.png" alt="bg shapes" class="hidden sm:block absolute right-0 bottom-0 -z-1" width="737" height="482">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/countdown/countdown-01.png" alt="product" class="hidden lg:block absolute right-4 xl:right-33 bottom-4 xl:bottom-10 -z-1" width="411" height="376">
        </div>
    </div>
</section>



