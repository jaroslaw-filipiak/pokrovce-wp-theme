<?php
/**
 * Template part for displaying New Arrivals section
 *
 * @package pokrovce
 */

$args = array(
    'post_type'      => 'product',
    'posts_per_page' => 8,
    'orderby'        => 'date',
    'order'          => 'DESC',
);

$products = new WP_Query( $args );
?>
<section class="overflow-hidden pt-15">
    <div class="max-w-[1170px] w-full mx-auto px-4 sm:px-8 xl:px-0">
        <!-- section title -->
        <div class="mb-7 flex items-center justify-between">
            <div>
                <span class="flex items-center gap-2.5 font-medium text-dark mb-1.5">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.11826 15.4622C4.11794 16.6668 5.97853 16.6668 9.69971 16.6668H10.3007C14.0219 16.6668 15.8825 16.6668 16.8821 15.4622M3.11826 15.4622C2.11857 14.2577 2.46146 12.429 3.14723 8.77153C3.63491 6.17055 3.87875 4.87006 4.8045 4.10175M3.11826 15.4622C3.11826 15.4622 3.11826 15.4622 3.11826 15.4622ZM16.8821 15.4622C17.8818 14.2577 17.5389 12.429 16.8532 8.77153C16.3655 6.17055 16.1216 4.87006 15.1959 4.10175M16.8821 15.4622C16.8821 15.4622 16.8821 15.4622 16.8821 15.4622ZM15.1959 4.10175C14.2701 3.33345 12.947 3.33345 10.3007 3.33345H9.69971C7.0534 3.33345 5.73025 3.33345 4.8045 4.10175M15.1959 4.10175C15.1959 4.10175 15.1959 4.10175 15.1959 4.10175ZM4.8045 4.10175C4.8045 4.10175 4.8045 4.10175 4.8045 4.10175Z" stroke="#3C50E0" stroke-width="1.5"/>
                        <path d="M7.64258 6.66678C7.98578 7.63778 8.91181 8.33345 10.0003 8.33345C11.0888 8.33345 12.0149 7.63778 12.3581 6.66678" stroke="#3C50E0" stroke-width="1.5" stroke-linecap="round"/>
                    </svg>
                    <?php esc_html_e( "This Week's", 'pokrovce' ); ?>
                </span>
                <h2 class="font-semibold text-xl xl:text-heading-5 text-dark">
                    <?php esc_html_e( 'New Arrivals', 'pokrovce' ); ?>
                </h2>
            </div>

            <a href="<?php echo esc_url( get_permalink( wc_get_page_id( 'shop' ) ) ); ?>" class="inline-flex font-medium text-custom-sm py-2.5 px-7 rounded-md border-gray-3 border bg-gray-1 text-dark ease-out duration-200 hover:bg-dark hover:text-white hover:border-transparent">
                <?php esc_html_e( 'View All', 'pokrovce' ); ?>
            </a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-x-7.5 gap-y-9">
            <?php if ( $products->have_posts() ) : ?>
                <?php while ( $products->have_posts() ) : $products->the_post(); ?>
                    <?php global $product; ?>
                    <?php get_template_part( 'template-parts/content', 'product-card' ); ?>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>
    </div>
</section>

