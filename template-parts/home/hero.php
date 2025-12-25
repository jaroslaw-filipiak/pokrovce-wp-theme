<?php
/**
 * Template part for displaying Hero section
 *
 * @package pokrovce
 */
?>
<section class="overflow-hidden pb-10 lg:pb-12.5 xl:pb-15  pt-45 lg:pt-30  bg-[#E5EAF4]">
    <div class="max-w-[1170px] w-full mx-auto px-4 sm:px-8 xl:px-0">
        <div class="flex flex-wrap gap-5 items-stretch">
            <div class="xl:max-w-[757px] w-full">
                <div class="relative z-1 rounded-[10px] bg-white overflow-hidden h-full">
                    <!-- bg shapes -->
                    <?php get_template_part( 'template-parts/home/hero', 'carousel' ); ?>
                </div>
            </div>

            <div class="xl:max-w-[393px] w-full ">
                <div class="flex flex-col sm:flex-row xl:flex-col gap-5">
                    <div class="w-full relative rounded-[10px] bg-white p-4 sm:p-7.5">
                        <div class="flex items-center gap-14">
                            <div>
                                <h3 class="max-w-[353px] font-semibold text-dark text-xl mb-20">
                                    Wysyłka tego samego dnia
                                </h3>

                                <div>
                                    <h4 class="font-medium text-dark-4 text-custom-sm mb-1.5">Kurier lub paczkomat.
                                        Zamówienia złożone do 14:00 realizowane są tego samego dnia.</h4>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="w-full relative rounded-[10px] bg-white p-4 sm:p-7.5">
                        <div class="flex items-center gap-14">
                            <div>
                                <h2 class="max-w-[353px] font-semibold text-dark text-xl mb-20">
                                    <a href="#">Materiał premium
                                    </a>
                                </h2>

                                <div>
                                    <p class="font-medium text-dark-4 text-custom-sm mb-1.5">Polyester, elastan. Plamy?
                                        ściągasz, pierzesz i zakładasz. Szybko i łatwo.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php get_template_part( 'template-parts/home/hero', 'feature' ); ?>
</section>