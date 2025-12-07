<?php
/**
 * Template part for displaying horizontal product card (for best sellers)
 *
 * @package pokrovce
 */

global $product;

if ( ! is_a( $product, 'WC_Product' ) ) {
    return;
}

$product_id     = $product->get_id();
$product_title  = $product->get_name();
$product_link   = $product->get_permalink();
$regular_price  = $product->get_regular_price();
$sale_price     = $product->get_sale_price();
$current_price  = $product->get_price();
$average_rating = $product->get_average_rating();
$review_count   = $product->get_review_count();
$image_url      = wp_get_attachment_image_url( $product->get_image_id(), 'woocommerce_thumbnail' );
?>
<div class="flex items-center gap-4 rounded-lg bg-gray-1 p-4">
    <div class="flex-shrink-0 w-[100px] h-[100px] rounded-lg bg-white flex items-center justify-center">
        <?php if ( $image_url ) : ?>
            <img src="<?php echo esc_url( $image_url ); ?>" alt="<?php echo esc_attr( $product_title ); ?>" class="object-contain w-full h-full">
        <?php else : ?>
            <img src="<?php echo esc_url( wc_placeholder_img_src() ); ?>" alt="<?php echo esc_attr( $product_title ); ?>" class="object-contain w-full h-full">
        <?php endif; ?>
    </div>

    <div>
        <div class="flex items-center gap-1 mb-2">
            <?php for ( $i = 1; $i <= 5; $i++ ) : ?>
                <svg class="<?php echo $i <= round( $average_rating ) ? 'fill-[#FFA645]' : 'fill-gray-4'; ?>" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6.99961 0.958374L8.96378 4.93171L13.3717 5.57504L10.1857 8.68171L10.9279 13.0717L6.99961 11.0067L3.07128 13.0717L3.81294 8.68171L0.626953 5.57504L5.03545 4.93171L6.99961 0.958374Z"/>
                </svg>
            <?php endfor; ?>
            <span class="text-custom-xs text-dark-4 ml-1">(<?php echo esc_html( $review_count ); ?>)</span>
        </div>

        <h3 class="font-medium text-dark ease-out duration-200 hover:text-blue mb-1.5 line-clamp-2">
            <a href="<?php echo esc_url( $product_link ); ?>"><?php echo esc_html( $product_title ); ?></a>
        </h3>

        <span class="flex items-center gap-2 font-medium">
            <?php if ( $sale_price ) : ?>
                <span class="text-dark"><?php echo wc_price( $sale_price ); ?></span>
                <span class="text-dark-4 line-through text-sm"><?php echo wc_price( $regular_price ); ?></span>
            <?php else : ?>
                <span class="text-dark"><?php echo wc_price( $current_price ); ?></span>
            <?php endif; ?>
        </span>
    </div>
</div>

