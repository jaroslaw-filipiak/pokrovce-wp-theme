<?php
/**
 * Template part for displaying Hero section
 *
 * @package pokrovce
 */
?>
<section class="overflow-hidden pb-10 lg:pb-12.5 xl:pb-15 pt-57.5 sm:pt-45 lg:pt-30 xl:pt-51.5 bg-[#E5EAF4]">
    <div class="max-w-[1170px] w-full mx-auto px-4 sm:px-8 xl:px-0">
        <div class="flex flex-wrap gap-5">
            <div class="xl:max-w-[757px] w-full">
                <div class="relative z-1 rounded-[10px] bg-white overflow-hidden">
                    <!-- bg shapes -->
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/hero/hero-bg.png" alt="hero bg shapes" class="absolute right-0 bottom-0 -z-1" width="534" height="520">

                    <?php get_template_part( 'template-parts/home/hero', 'carousel' ); ?>
                </div>
            </div>

            <div class="xl:max-w-[393px] w-full">
                <div class="flex flex-col sm:flex-row xl:flex-col gap-5">
                    <div class="w-full relative rounded-[10px] bg-white p-4 sm:p-7.5">
                        <div class="flex items-center gap-14">
                            <div>
                                <h2 class="max-w-[153px] font-semibold text-dark text-xl mb-20">
                                    <a href="#">iPhone 14 Plus & 14 Pro Max</a>
                                </h2>

                                <div>
                                    <p class="font-medium text-dark-4 text-custom-sm mb-1.5">limited time offer</p>
                                    <span class="flex items-center gap-3">
                                        <span class="font-medium text-heading-5 text-red">$699</span>
                                        <span class="font-medium text-2xl text-dark-4 line-through">$999</span>
                                    </span>
                                </div>
                            </div>

                            <div>
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/hero/hero-02.png" alt="mobile image" width="123" height="161">
                            </div>
                        </div>
                    </div>

                    <div class="w-full relative rounded-[10px] bg-white p-4 sm:p-7.5">
                        <div class="flex items-center gap-14">
                            <div>
                                <h2 class="max-w-[153px] font-semibold text-dark text-xl mb-20">
                                    <a href="#">Wireless Headphone</a>
                                </h2>

                                <div>
                                    <p class="font-medium text-dark-4 text-custom-sm mb-1.5">limited time offer</p>
                                    <span class="flex items-center gap-3">
                                        <span class="font-medium text-heading-5 text-red">$699</span>
                                        <span class="font-medium text-2xl text-dark-4 line-through">$999</span>
                                    </span>
                                </div>
                            </div>

                            <div>
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/hero/hero-01.png" alt="headphone image" width="123" height="161">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php get_template_part( 'template-parts/home/hero', 'feature' ); ?>
</section>

