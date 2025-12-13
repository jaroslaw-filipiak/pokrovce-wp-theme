<?php
/**
 * Template part for displaying Hero Features
 *
 * @package pokrovce
 */

$features = array(
    array(
        'icon'        => get_template_directory_uri() . '/public/images/icons/icon-01.svg',
        'title'       => __( 'Darmowa wysyłka', 'pokrovce' ),
        'description' => __( 'Dla zamówień powyżej 200 zł', 'pokrovce' ),
    ),
    array(
        'icon'        => get_template_directory_uri() . '/public/images/icons/icon-02.svg',
        'title'       => __( 'Zwrot do 14 dni', 'pokrovce' ),
        'description' => __( 'W przypadku, gdy produkt nie odpowiada Twoim oczekiwaniom', 'pokrovce' ),
    ),
    array(
        'icon'        => get_template_directory_uri() . '/public/images/icons/icon-03.svg',
        'title'       => __( '100% bezpieczne płatności', 'pokrovce' ),
        'description' => __( 'Zapewniamy bezpieczne płatności', 'pokrovce' ),
    ),
   
);
?>
<div class="max-w-[1060px] w-full mx-auto px-4 sm:px-8 xl:px-0">
    <div class="flex flex-wrap items-center gap-2 xl:gap-4 mt-10">
        <?php foreach ( $features as $feature ) : ?>
        <div class="flex items-center gap-4">
            <img src="<?php echo esc_url( $feature['icon'] ); ?>" alt="<?php echo esc_attr( $feature['title'] ); ?>"
                width="40" height="41">

            <div>
                <h3 class="font-medium text-lg text-dark"><?php echo esc_html( $feature['title'] ); ?></h3>
                <p class="text-sm"><?php echo esc_html( $feature['description'] ); ?></p>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>