<?php
/**
 * Single Product Rating
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/rating.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

global $product;

$rating_count = $product->get_rating_count();
$review_count = $product->get_review_count();
$average      = $product->get_average_rating();
$stock_status = $product->get_stock_status();
?>

<div class="woocommerce-product-rating flex flex-wrap items-center gap-5.5 mb-4.5">
    <!-- Star Rating -->
    <div class="flex items-center gap-2.5">
        <div class="flex items-center gap-1">
            <?php for ( $i = 1; $i <= 5; $i++ ) : ?>
            <svg width="18" height="18" viewBox="0 0 18 18" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                class="<?php echo $i <= round( $average ) ? 'fill-yellow' : 'fill-gray-4'; ?>">
                <g clip-path="url(#clip0_star_<?php echo esc_attr( $i ); ?>)">
                    <path
                        d="M16.7906 6.72187L11.7 5.93438L9.39377 1.09688C9.22502 0.759375 8.77502 0.759375 8.60627 1.09688L6.30002 5.9625L1.23752 6.72187C0.871891 6.77812 0.731266 7.25625 1.01252 7.50938L4.69689 11.3063L3.82502 16.6219C3.76877 16.9875 4.13439 17.2969 4.47189 17.0719L9.05627 14.5687L13.6125 17.0719C13.9219 17.2406 14.3156 16.9594 14.2313 16.6219L13.3594 11.3063L17.0438 7.50938C17.2688 7.25625 17.1563 6.77812 16.7906 6.72187Z"
                        fill="" />
                </g>
                <defs>
                    <clipPath id="clip0_star_<?php echo esc_attr( $i ); ?>">
                        <rect width="18" height="18" fill="white" />
                    </clipPath>
                </defs>
            </svg>
            <?php endfor; ?>
        </div>
        <span>( <?php echo esc_html( $review_count ); ?> <?php esc_html_e( 'opini', 'pokrovce' ); ?> )</span>
    </div>

    <!-- Stock Status -->
    <div class="flex items-center gap-1.5 hidden">
        <?php if ( 'instock' === $stock_status ) : ?>
        <svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor" class="fill-green">
            <g clip-path="url(#clip0_stock)">
                <path
                    d="M10 0.5625C4.78125 0.5625 0.5625 4.78125 0.5625 10C0.5625 15.2188 4.78125 19.4688 10 19.4688C15.2188 19.4688 19.4688 15.2188 19.4688 10C19.4688 4.78125 15.2188 0.5625 10 0.5625ZM10 18.0625C5.5625 18.0625 1.96875 14.4375 1.96875 10C1.96875 5.5625 5.5625 1.96875 10 1.96875C14.4375 1.96875 18.0625 5.59375 18.0625 10.0312C18.0625 14.4375 14.4375 18.0625 10 18.0625Z" />
                <path
                    d="M12.6875 7.09374L8.9688 10.7187L7.2813 9.06249C7.00005 8.78124 6.56255 8.81249 6.2813 9.06249C6.00005 9.34374 6.0313 9.78124 6.2813 10.0625L8.2813 12C8.4688 12.1875 8.7188 12.2812 8.9688 12.2812C9.2188 12.2812 9.4688 12.1875 9.6563 12L13.6875 8.12499C13.9688 7.84374 13.9688 7.40624 13.6875 7.12499C13.4063 6.84374 12.9688 6.84374 12.6875 7.09374Z" />
            </g>
            <defs>
                <clipPath id="clip0_stock">
                    <rect width="20" height="20" fill="white" />
                </clipPath>
            </defs>
        </svg>
        <span class="text-green "><?php esc_html_e( 'Na stanie', 'pokrovce' ); ?></span>
        <?php elseif ( 'outofstock' === $stock_status ) : ?>
        <span class="text-red "><?php esc_html_e( 'Brak towaru', 'pokrovce' ); ?></span>
        <?php else : ?>
        <span class="text-yellow-dark "><?php esc_html_e( 'Na zamówienie', 'pokrovce' ); ?></span>
        <?php endif; ?>
    </div>
</div>