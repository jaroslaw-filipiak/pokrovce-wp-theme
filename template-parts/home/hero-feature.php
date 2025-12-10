<?php
/**
 * Template part for displaying Hero Features
 *
 * @package pokrovce
 */

$features = array(
    array(
        'icon'        => get_template_directory_uri() . '/images/icons/icon-01.svg',
        'title'       => __( 'Free Shipping', 'pokrovce' ),
        'description' => __( 'For all orders $200', 'pokrovce' ),
    ),
    array(
        'icon'        => get_template_directory_uri() . '/images/icons/icon-02.svg',
        'title'       => __( '1 & 1 Returns', 'pokrovce' ),
        'description' => __( 'Cancellation after 1 day', 'pokrovce' ),
    ),
    array(
        'icon'        => get_template_directory_uri() . '/images/icons/icon-03.svg',
        'title'       => __( '100% Secure Payments', 'pokrovce' ),
        'description' => __( 'Gurantee secure payments', 'pokrovce' ),
    ),
    array(
        'icon'        => get_template_directory_uri() . '/images/icons/icon-04.svg',
        'title'       => __( '24/7 Dedicated Support', 'pokrovce' ),
        'description' => __( 'Anywhere & anytime', 'pokrovce' ),
    ),
);
?>
<div class="max-w-[1060px] w-full mx-auto px-4 sm:px-8 xl:px-0">
    <div class="flex flex-wrap items-center gap-7.5 xl:gap-12.5 mt-10">
        <?php foreach ( $features as $feature ) : ?>
            <div class="flex items-center gap-4">
                <img src="<?php echo esc_url( $feature['icon'] ); ?>" alt="<?php echo esc_attr( $feature['title'] ); ?>" width="40" height="41">

                <div>
                    <h3 class="font-medium text-lg text-dark"><?php echo esc_html( $feature['title'] ); ?></h3>
                    <p class="text-sm"><?php echo esc_html( $feature['description'] ); ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>


