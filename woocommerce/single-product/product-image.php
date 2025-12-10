<?php
/**
 * Single Product Image
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-image.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 9.7.0
 */

use Automattic\WooCommerce\Enums\ProductType;

defined( 'ABSPATH' ) || exit;

// Note: `wc_get_gallery_image_html` was added in WC 3.3.2 and did not exist prior. This check protects against theme overrides being used on older versions of WC.
if ( ! function_exists( 'wc_get_gallery_image_html' ) ) {
	return;
}

global $product;

$columns           = apply_filters( 'woocommerce_product_thumbnails_columns', 4 );
$post_thumbnail_id = $product->get_image_id();
$gallery_image_ids = $product->get_gallery_image_ids();
$wrapper_classes   = apply_filters(
	'woocommerce_single_product_image_gallery_classes',
	array(
		'woocommerce-product-gallery',
		'woocommerce-product-gallery--' . ( $post_thumbnail_id ? 'with-images' : 'without-images' ),
		'woocommerce-product-gallery--columns-' . absint( $columns ),
		'images',
	)
);
?>
<div class="<?php echo esc_attr( implode( ' ', array_map( 'sanitize_html_class', $wrapper_classes ) ) ); ?>" data-columns="<?php echo esc_attr( $columns ); ?>">
	<!-- Main Image Container -->
	<div class="lg:min-h-[512px] rounded-lg shadow-1 bg-gray-2 p-4 sm:p-7.5 relative flex items-center justify-center">
		<div class="woocommerce-product-gallery__wrapper">
			<!-- Zoom Button -->
			<button aria-label="<?php esc_attr_e( 'Zoom', 'pokrovce' ); ?>" class="gallery__Image w-11 h-11 rounded-full bg-gray-1 shadow-1 flex items-center justify-center ease-out duration-200 text-dark hover:text-blue absolute top-4 lg:top-6 right-4 lg:right-6 z-50">
				<svg class="w-6 h-6" width="24" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M3.5625 5.5C3.5625 4.25736 4.56986 3.25 5.8125 3.25H8.31213C8.72635 3.25 9.06213 3.58579 9.06213 4C9.06213 4.41421 8.72635 4.75 8.31213 4.75H5.8125C5.39829 4.75 5.0625 5.08579 5.0625 5.5V8C5.0625 8.41421 4.72671 8.75 4.3125 8.75C3.89829 8.75 3.5625 8.41421 3.5625 8V5.5Z" fill="currentColor"/>
					<path d="M15.5614 4C15.5614 3.58579 15.8972 3.25 16.3114 3.25H18.811C20.0537 3.25 21.061 4.25736 21.061 5.5L21.061 8C21.061 8.41421 20.7253 8.75 20.311 8.75C19.8968 8.75 19.561 8.41421 19.561 8L19.561 5.5C19.561 5.08579 19.2253 4.75 18.811 4.75H16.3114C15.8972 4.75 15.5614 4.41421 15.5614 4Z" fill="currentColor"/>
					<path d="M4.3125 15.25C4.72671 15.25 5.0625 15.5858 5.0625 16V18.5C5.0625 18.9142 5.39829 19.25 5.8125 19.25H8.31214C8.72635 19.25 9.06214 19.5858 9.06214 20C9.06214 20.4142 8.72635 20.75 8.31214 20.75H5.8125C4.56986 20.75 3.5625 19.7426 3.5625 18.5V16C3.5625 15.5858 3.89829 15.25 4.3125 15.25Z" fill="currentColor"/>
					<path d="M20.3111 15.25C20.7253 15.25 21.0611 15.5858 21.0611 16L21.0611 18.5C21.0611 19.7426 20.0537 20.75 18.8111 20.75H16.3114C15.8972 20.75 15.5614 20.4142 15.5614 20C15.5614 19.5858 15.8972 19.25 16.3114 19.25H18.8111C19.2253 19.25 19.5611 18.9142 19.5611 18.5L19.5611 16C19.5611 15.5858 19.8968 15.25 20.3111 15.25Z" fill="currentColor"/>
				</svg>
			</button>
			<?php
			if ( $post_thumbnail_id ) {
				$html = wc_get_gallery_image_html( $post_thumbnail_id, true );
			} else {
				$wrapper_classname = $product->is_type( ProductType::VARIABLE ) && ! empty( $product->get_available_variations( 'image' ) ) ?
					'woocommerce-product-gallery__image woocommerce-product-gallery__image--placeholder' :
					'woocommerce-product-gallery__image--placeholder';
				$html              = sprintf( '<div class="%s">', esc_attr( $wrapper_classname ) );
				$html             .= sprintf( '<img src="%s" alt="%s" class="wp-post-image" />', esc_url( wc_placeholder_img_src( 'woocommerce_single' ) ), esc_html__( 'Awaiting product image', 'woocommerce' ) );
				$html             .= '</div>';
			}

			echo apply_filters( 'woocommerce_single_product_image_thumbnail_html', $html, $post_thumbnail_id ); // phpcs:disable WordPress.XSS.EscapeOutput.OutputNotEscaped
			?>
		</div>
	</div>
	
	<!-- Thumbnails -->
	<?php if ( $post_thumbnail_id || ! empty( $gallery_image_ids ) ) : ?>
	<div class="flex flex-wrap sm:flex-nowrap gap-4.5 mt-6">
		<?php
		do_action( 'woocommerce_product_thumbnails' );
		?>
	</div>
	<?php endif; ?>
</div>
