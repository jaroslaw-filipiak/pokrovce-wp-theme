<?php
/**
 * Template part for displaying Hero Carousel
 *
 * @package pokrovce
 */

$slides = array(
    array(
        'discount'    => '30%',
        'title'       => 'A może kawa?',
        'description' => 'Pokrowce w kolorze coffee – ciepły odcień, który pasuje do każdego wnętrza. Teraz w promocji -30%!',
        'image'       => get_template_directory_uri() . '/public/images/banner-coffee.avif',
        'link'        => '/produkt/pokrowiec-na-krzeslo-skandynawskie-coffee-kawa/',
        'btn_color'   => 'bg-[#513a2c] hover:bg-[#513a2c]/80',
    ),
    array(
        'discount'    => '30%',
        'title'       => 'Mocna czerwień',
        'description' => 'Pokrowce w kolorze czerwonym. Teraz w promocji -30%!',
        'image'       => get_template_directory_uri() . '/public/images/banner-red.avif',
        'link'        => '/produkt/pokrowiec-na-krzeslo-skandynawskie-wine-red-wino/',
        'btn_color'   => 'bg-[#1a1a1a] hover:bg-[#333333]',
    ),
    array(
        'discount'    => '30%',
        'title'       => 'Butelkowa zieleń',
        'description' => 'Pokrowce w kolorze zielonym. Teraz w promocji -30%!',
        'image'       => get_template_directory_uri() . '/public/images/banner-green.avif',
        'link'        => '/produkt/pokrowiec-na-krzeslo-skandynawskie-dark-green-butelkowa-ciemna-zielen/',
        'btn_color'   => 'bg-[#1a1a1a] hover:bg-[#333333]',
    ),
   
);
?>
<div class="swiper hero-carousel h-full">
    <div class="swiper-wrapper h-full">
        <?php foreach ( $slides as $slide ) : ?>
        <div class="swiper-slide h-full">
            <div class="relative h-full min-h-[400px] bg-cover bg-center bg-no-repeat"
                style="background-image: url('<?php echo esc_url( $slide['image'] ); ?>');">
                <!-- Overlay for better text readability -->
                <div class="absolute inset-0 bg-black/30"></div>

                <div class="relative z-10 max-w-[500px] py-10 sm:py-15 lg:py-24.5 pl-4 sm:pl-7.5 lg:pl-12.5">
                    <div class="flex items-center gap-4 mb-7.5 sm:mb-10">
                        <span class="block font-semibold text-heading-3 sm:text-heading-1 text-white hidden">
                            <?php echo esc_html( $slide['discount'] ); ?>
                        </span>
                        <span class="block text-white text-sm sm:text-custom-1 sm:leading-[24px] hidden">
                            Sale<br>Off
                        </span>
                    </div>

                    <h1 class="font-semibold text-white text-xl sm:text-3xl mb-3">
                        <a
                            href="<?php echo esc_url( $slide['link'] ); ?>"><?php echo esc_html( $slide['title'] ); ?></a>
                    </h1>

                    <p class="text-white/90"><?php echo esc_html( $slide['description'] ); ?></p>

                    <a href="<?php echo esc_url( $slide['link'] ); ?>"
                        class="inline-flex font-medium text-white text-custom-sm rounded-md <?php echo esc_attr( $slide['btn_color'] ); ?> py-3 px-9 ease-out duration-200 transition-all duration-200 mt-10">
                        <span class="transition-all duration-200">
                            <?php esc_html_e( 'Kup teraz', 'pokrovce' ); ?>
                        </span>
                    </a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <div class="swiper-pagination"></div>
</div>