<?php
/**
 * Template part for displaying Newsletter section
 *
 * @package pokrovce
 */
?>
<section class="overflow-hidden">
    <div class="max-w-[1170px] mx-auto px-4 sm:px-8 xl:px-0">
        <div class="relative z-1 overflow-hidden rounded-xl">
            <!-- bg shapes -->
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/public/images/shapes/newsletter-bg.jpg"
                alt="background illustration" class="absolute -z-1 w-full h-full left-0 top-0 rounded-xl object-cover"
                width="1170" height="200">
            <div class="absolute -z-1 max-w-[523px] max-h-[243px] w-full h-full right-0 top-0 bg-gradient-1"></div>

            <div
                class="flex flex-col lg:flex-row lg:items-start lg:justify-between gap-4 px-4 sm:px-7.5 xl:pl-12.5 xl:pr-14 py-11 min-h-[224px] ">
                <div class="max-w-[491px] w-full">
                    <h2 class="max-w-[399px] text-white font-bold text-lg sm:text-xl xl:text-heading-4 mb-3">
                        <?php esc_html_e( "Nie przegap naszych ofert i promocji", 'pokrovce' ); ?>
                    </h2>
                    <p class="text-white">
                        <?php esc_html_e( 'Zapisz się do naszego newslettera, aby otrzymać informacje o naszych ofertach i kodach promocyjnych', 'pokrovce' ); ?>
                    </p>
                </div>

                <div class="flex-1 w-full lg:pt-8">
                    <div class="flex flex-col sm:flex-row gap-4 justify-end">
                        <?php echo do_shortcode('[contact-form-7 id="5995ec1" title="Newsletter"]'); ?>

                        <!-- <input type="email" name="email"
                                placeholder="<?php esc_attr_e( 'Wpisz swój email', 'pokrovce' ); ?>" required
                                class="w-full bg-gray-1 border border-gray-3 outline-none rounded-md placeholder:text-dark-4 py-3 px-5">
                            <button type="submit"
                                class="flex justify-center py-3 px-7 text-white text-nowrap bg-[#E67E22] font-medium rounded-md ease-out duration-200 hover:bg-[#E67E22]/80">
                                <?php esc_html_e( 'Zapisz się', 'pokrovce' ); ?>
                            </button> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>