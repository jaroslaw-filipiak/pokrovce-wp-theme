<?php
/**
 * Template part for displaying Best Seller section
 *
 * @package pokrovce
 */

$args = array(
    'post_type'      => 'product',
    'posts_per_page' => 6,
    'meta_key'       => 'total_sales',
    'orderby'        => 'meta_value_num',
    'order'          => 'DESC',
);

$products = new WP_Query( $args );
?>
<section class="overflow-hidden">
    <div class="max-w-[1170px] w-full mx-auto px-4 sm:px-8 xl:px-0">
        <!-- section title -->
        <div class="mb-10 flex items-center justify-between">
            <div>
                <span class="flex items-center gap-2.5 font-medium text-dark mb-1.5">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icons/icon-07.svg" alt="icon" width="17" height="17">
                    <?php esc_html_e( 'This Month', 'pokrovce' ); ?>
                </span>
                <h2 class="font-semibold text-xl xl:text-heading-5 text-dark">
                    <?php esc_html_e( 'Best Sellers', 'pokrovce' ); ?>
                </h2>
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-7.5">
            <?php if ( $products->have_posts() ) : ?>
                <?php while ( $products->have_posts() ) : $products->the_post(); ?>
                    <?php global $product; ?>
                    <?php get_template_part( 'template-parts/content', 'product-card-horizontal' ); ?>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>

        <div class="text-center mt-12.5">
            <a href="<?php echo esc_url( get_permalink( wc_get_page_id( 'shop' ) ) ); ?>" class="inline-flex font-medium text-custom-sm py-3 px-7 sm:px-12.5 rounded-md border-gray-3 border bg-gray-1 text-dark ease-out duration-200 hover:bg-dark hover:text-white hover:border-transparent">
                <?php esc_html_e( 'View All', 'pokrovce' ); ?>
            </a>
        </div>
    </div>
</section>




