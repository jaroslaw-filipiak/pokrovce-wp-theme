<?php
/**
 * Template part for displaying Newsletter section
 *
 * @package pokrovce
 */
?>
<section class="overflow-hidden">
    <div class="max-w-[1170px] mx-auto px-4 sm:px-8 xl:px-0">
        <div class="bg-gradient-to-r from-[#E67E22]/10 to-[#E67E22]/5 rounded-2xl p-8 sm:p-12 relative overflow-hidden">
            <!-- Decorative circles (same as "Nasza misja" section) -->
            <div class="absolute top-0 right-0 w-64 h-64 bg-[#E67E22]/10 rounded-full -translate-y-1/2 translate-x-1/2">
            </div>
            <div
                class="absolute bottom-0 left-0 w-48 h-48 bg-[#E67E22]/5 rounded-full translate-y-1/2 -translate-x-1/2">
            </div>

            <div class="relative z-10 flex flex-col lg:flex-row lg:items-center lg:justify-between gap-6">
                <div class="max-w-[500px] w-full">
                    <h2 class="font-semibold text-xl xl:text-heading-5 text-dark mb-3 flex items-center gap-3">
                        <span class="flex items-center justify-center w-10 h-10 bg-[#E67E22] rounded-full shrink-0">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M4 4H20C21.1 4 22 4.9 22 6V18C22 19.1 21.1 20 20 20H4C2.9 20 2 19.1 2 18V6C2 4.9 2.9 4 4 4Z"
                                    stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M22 6L12 13L2 6" stroke="white" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </span>
                        <?php esc_html_e( "Nie przegap naszych ofert", 'pokrovce' ); ?>
                    </h2>
                    <p class="text-dark-3 text-custom-lg leading-relaxed">
                        <?php esc_html_e( 'Zapisz się do newslettera i otrzymuj informacje o promocjach, nowościach oraz ekskluzywne kody rabatowe.', 'pokrovce' ); ?>
                    </p>
                </div>

                <div class="flex-1 w-full max-w-[500px]">
                    <?php echo do_shortcode('[contact-form-7 id="5995ec1" title="Newsletter"]'); ?>
                </div>
            </div>
        </div>
    </div>
</section>