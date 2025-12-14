<?php
/**
 * Related Products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/related.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     9.6.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( $related_products ) : ?>

<section class="related products overflow-hidden pt-17.5">
    <div class="w-full px-4 mx-auto border-b max-w-7xl sm:px-6 xl:px-0 pb-15 border-gray-3">
        <?php
			$heading = apply_filters( 'woocommerce_product_related_products_heading', __( 'Related products', 'woocommerce' ) );

			if ( $heading ) :
				?>
        <!-- Header with navigation -->
        <div class="flex items-center justify-between mb-10">
            <h2 class="text-xl font-semibold xl:text-heading-5 text-dark"><?php echo esc_html( $heading ); ?></h2>
            <div class="flex items-center gap-2.5">
                <button class="related-prev w-9 h-9 rounded-lg bg-white text-dark border border-gray-3 flex items-center justify-center ease-out duration-200 hover:bg-[#E67E22] hover:text-white hover:border-[#E67E22]">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </button>
                <button class="related-next w-9 h-9 rounded-lg bg-white text-dark border border-gray-3 flex items-center justify-center ease-out duration-200 hover:bg-[#E67E22] hover:text-white hover:border-[#E67E22]">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </button>
            </div>
        </div>
        <?php endif; ?>

        <!-- Swiper Container -->
        <div class="related-carousel swiper">
            <div class="swiper-wrapper">
                <?php foreach ( $related_products as $related_product ) : ?>
                    <?php
                    $post_object = get_post( $related_product->get_id() );
                    setup_postdata( $GLOBALS['post'] = $post_object );
                    
                    global $product;
                    ?>
                    <div class="swiper-slide">
                        <div class="group">
                            <a href="<?php the_permalink(); ?>" class="block relative overflow-hidden rounded-lg bg-gray-1 aspect-square mb-4">
                                <?php if ( $product->is_on_sale() ) : ?>
                                    <span class="absolute top-3 left-3 bg-green text-white text-xs font-medium px-3 py-1 rounded-full z-10">
                                        <?php esc_html_e( 'Promocja!', 'pokrovce' ); ?>
                                    </span>
                                <?php endif; ?>
                                <?php echo $product->get_image( 'woocommerce_thumbnail', array( 'class' => 'w-full h-full object-cover group-hover:scale-105 transition-transform duration-300' ) ); ?>
                            </a>
                            <h3 class="font-medium text-dark mb-2 group-hover:text-[#E67E22] transition-colors">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h3>
                            <div class="flex items-center gap-2 mb-3">
                                <?php if ( $product->is_on_sale() ) : ?>
                                    <span class="text-gray-5 line-through text-sm"><?php echo wc_price( $product->get_regular_price() ); ?></span>
                                    <span class="font-semibold text-dark"><?php echo wc_price( $product->get_sale_price() ); ?></span>
                                <?php else : ?>
                                    <span class="font-semibold text-dark"><?php echo $product->get_price_html(); ?></span>
                                <?php endif; ?>
                            </div>
                            <a href="<?php echo esc_url( $product->add_to_cart_url() ); ?>" 
                               class="inline-flex py-2 px-4 bg-[#E67E22] text-white rounded-full text-sm ease-out duration-200 hover:bg-[#E67E22]/80"
                               data-product_id="<?php echo esc_attr( $product->get_id() ); ?>"
                               data-product_sku="<?php echo esc_attr( $product->get_sku() ); ?>"
                               aria-label="<?php echo esc_attr( sprintf( __( 'Dodaj do koszyka: %s', 'pokrovce' ), get_the_title() ) ); ?>">
                                <?php esc_html_e( 'Dodaj do koszyka', 'pokrovce' ); ?>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<?php
endif;

wp_reset_postdata();