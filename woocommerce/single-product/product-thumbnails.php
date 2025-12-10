<?php
/**
 * Single Product Thumbnails
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-thumbnails.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     9.8.0
 */

defined( 'ABSPATH' ) || exit;

// Note: `wc_get_gallery_image_html` was added in WC 3.3.2 and did not exist prior. This check protects against theme overrides being used on older versions of WC.
if ( ! function_exists( 'wc_get_gallery_image_html' ) ) {
	return;
}

global $product;

if ( ! $product || ! $product instanceof WC_Product ) {
	return '';
}

$attachment_ids  = $product->get_gallery_image_ids();
$main_image_id   = $product->get_image_id();

// Main image thumbnail (first, active)
if ( $main_image_id ) {
	$main_thumb = wp_get_attachment_image( $main_image_id, 'thumbnail' );
	echo '<button class="product-thumbnail flex items-center justify-center w-15 sm:w-25 h-15 sm:h-25 overflow-hidden rounded-lg bg-gray-2 shadow-1 ease-out duration-200 border-2 hover:border-blue border-blue" data-thumb-id="' . esc_attr( $main_image_id ) . '">' . $main_thumb . '</button>';
}

// Gallery thumbnails
if ( $attachment_ids && $main_image_id ) {
	foreach ( $attachment_ids as $key => $attachment_id ) {
		$thumb = wp_get_attachment_image( $attachment_id, 'thumbnail' );
		echo '<button class="product-thumbnail flex items-center justify-center w-15 sm:w-25 h-15 sm:h-25 overflow-hidden rounded-lg bg-gray-2 shadow-1 ease-out duration-200 border-2 hover:border-blue border-transparent" data-thumb-id="' . esc_attr( $attachment_id ) . '">' . $thumb . '</button>';
	}
}
