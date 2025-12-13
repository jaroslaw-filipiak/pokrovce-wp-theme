<?php
/**
 * Single Product title
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/title.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see        https://woocommerce.com/document/template-structure/
 * @package    WooCommerce\Templates
 * @version    1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

global $product;

// Calculate discount percentage
$discount_percent = 0;
if ( $product && $product->is_on_sale() ) {
	$regular_price = (float) $product->get_regular_price();
	$sale_price    = (float) $product->get_sale_price();
	if ( $regular_price > 0 ) {
		$discount_percent = round( ( ( $regular_price - $sale_price ) / $regular_price ) * 100 );
	}
}
?>
<div class="flex items-center justify-between mb-3">
    <?php the_title( '<h2 class="product_title entry-title text-xl font-semibold sm:text-2xl xl:text-custom-3 text-dark">', '</h2>' ); ?>
    <?php if ( $discount_percent > 0 ) : ?>
    <div class="inline-flex rounded-full shrink-0 font-medium text-xs text-white bg-[#E67E22] py-0.5 px-2.5">
        <?php echo esc_html( $discount_percent ); ?>% <?php esc_html_e( 'taniej', 'pokrovce' ); ?>
    </div>
    <?php endif; ?>
</div>
<?php