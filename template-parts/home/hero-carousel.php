<?php
/**
 * Template part for displaying Hero Carousel
 *
 * @package pokrovce
 */

$slides = array(
    array(
        'discount'    => '30%',
        'title'       => 'True Wireless Noise Cancelling Headphone',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi at ipsum at risus euismod lobortis in',
        'image'       => get_template_directory_uri() . '/images/hero/hero-01.png',
        'link'        => '#',
    ),
    array(
        'discount'    => '25%',
        'title'       => 'Smart Watch Series 8 Pro Max',
        'description' => 'Experience the future on your wrist. Advanced health monitoring and seamless connectivity.',
        'image'       => get_template_directory_uri() . '/images/hero/hero-02.png',
        'link'        => '#',
    ),
    array(
        'discount'    => '40%',
        'title'       => 'Premium Bluetooth Speaker',
        'description' => 'Immersive 360° sound experience. Waterproof design for indoor and outdoor use.',
        'image'       => get_template_directory_uri() . '/images/hero/hero-01.png',
        'link'        => '#',
    ),
);
?>
<div class="swiper hero-carousel">
    <div class="swiper-wrapper">
        <?php foreach ( $slides as $slide ) : ?>
            <div class="swiper-slide">
                <div class="flex items-center pt-6 sm:pt-0 flex-col-reverse sm:flex-row">
                    <div class="max-w-[394px] py-10 sm:py-15 lg:py-24.5 pl-4 sm:pl-7.5 lg:pl-12.5">
                        <div class="flex items-center gap-4 mb-7.5 sm:mb-10">
                            <span class="block font-semibold text-heading-3 sm:text-heading-1 text-blue">
                                <?php echo esc_html( $slide['discount'] ); ?>
                            </span>
                            <span class="block text-dark text-sm sm:text-custom-1 sm:leading-[24px]">
                                Sale<br>Off
                            </span>
                        </div>

                        <h1 class="font-semibold text-dark text-xl sm:text-3xl mb-3">
                            <a href="<?php echo esc_url( $slide['link'] ); ?>"><?php echo esc_html( $slide['title'] ); ?></a>
                        </h1>

                        <p><?php echo esc_html( $slide['description'] ); ?></p>

                        <a href="<?php echo esc_url( $slide['link'] ); ?>" class="inline-flex font-medium text-white text-custom-sm rounded-md bg-dark py-3 px-9 ease-out duration-200 hover:bg-blue mt-10">
                            <?php esc_html_e( 'Shop Now', 'pokrovce' ); ?>
                        </a>
                    </div>

                    <div>
                        <img src="<?php echo esc_url( $slide['image'] ); ?>" alt="<?php echo esc_attr( $slide['title'] ); ?>" width="351" height="358">
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="swiper-pagination"></div>
</div>

