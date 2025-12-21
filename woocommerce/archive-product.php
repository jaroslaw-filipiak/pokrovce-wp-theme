<?php
/**
 * The Template for displaying product archives, including the main shop page
 *
 * Styled to match homepage product grid
 *
 * @package Pokrovce
 * @version 8.6.0
 */

defined('ABSPATH') || exit;

get_header('shop');
?>

<main id="primary" class="site-main pt-25 lg:pt-15 pb-15">
    <div class="max-w-[1170px] w-full mx-auto px-4 sm:px-8 xl:px-0">
        
        <?php
        /**
         * Hook: woocommerce_before_main_content.
         * We remove the default wrapper and add our own
         */
        // Remove default wrappers
        remove_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
        remove_action('woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
        
        // Output notices
        woocommerce_output_all_notices();
        ?>

        <!-- Section header -->
        <div class="mb-10">
            <span class="flex items-center gap-2.5 font-medium text-dark mb-1.5">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3.11826 15.4622C4.11794 16.6668 5.97853 16.6668 9.69971 16.6668H10.3007C14.0219 16.6668 15.8825 16.6668 16.8821 15.4622M3.11826 15.4622C2.11857 14.2577 2.46146 12.429 3.14723 8.77153C3.63491 6.17055 3.87875 4.87006 4.8045 4.10175M3.11826 15.4622C3.11826 15.4622 3.11826 15.4622 3.11826 15.4622ZM16.8821 15.4622C17.8818 14.2577 17.5389 12.429 16.8532 8.77153C16.3655 6.17055 16.1216 4.87006 15.1959 4.10175M16.8821 15.4622C16.8821 15.4622 16.8821 15.4622 16.8821 15.4622ZM15.1959 4.10175C14.2701 3.33345 12.947 3.33345 10.3007 3.33345H9.69971C7.0534 3.33345 5.73025 3.33345 4.8045 4.10175M15.1959 4.10175C15.1959 4.10175 15.1959 4.10175 15.1959 4.10175ZM4.8045 4.10175C4.8045 4.10175 4.8045 4.10175 4.8045 4.10175Z" stroke="#E67E22" stroke-width="1.5"/>
                    <path d="M7.64258 6.66678C7.98578 7.63778 8.91181 8.33345 10.0003 8.33345C11.0888 8.33345 12.0149 7.63778 12.3581 6.66678" stroke="#E67E22" stroke-width="1.5" stroke-linecap="round"/>
                </svg>
                <?php 
                if (is_shop()) {
                    esc_html_e('Sklep', 'pokrovce');
                } elseif (is_product_category()) {
                    esc_html_e('Kategoria', 'pokrovce');
                } elseif (is_product_tag()) {
                    esc_html_e('Tag', 'pokrovce');
                } else {
                    esc_html_e('Produkty', 'pokrovce');
                }
                ?>
            </span>
            <h1 class="font-semibold text-xl xl:text-heading-5 text-dark">
                <?php woocommerce_page_title(); ?>
            </h1>
            
            <?php
            // Show category description
            if (is_product_category()) {
                $term = get_queried_object();
                if ($term && !empty($term->description)) {
                    echo '<p class="text-dark-3 mt-2 max-w-[600px]">' . wp_kses_post($term->description) . '</p>';
                }
            }
            ?>
        </div>

        <?php if (woocommerce_product_loop()) : ?>
            
            <!-- Filters & sorting bar -->
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-7 pb-5 border-b border-gray-3">
                <div class="shop-result-count text-dark-4 text-custom-sm">
                    <?php woocommerce_result_count(); ?>
                </div>
                <div class="shop-ordering">
                    <?php woocommerce_catalog_ordering(); ?>
                </div>
            </div>

            <!-- Products grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-x-7.5 gap-y-9">
                <?php
                while (have_posts()) :
                    the_post();
                    global $product;
                    get_template_part('template-parts/content', 'product-card');
                endwhile;
                ?>
            </div>

            <!-- Pagination -->
            <div class="shop-pagination mt-12">
                <?php
                $total_pages = wc_get_loop_prop('total_pages');
                if ($total_pages > 1) :
                ?>
                <nav class="flex items-center justify-center gap-2">
                    <?php
                    echo paginate_links(array(
                        'total'     => $total_pages,
                        'current'   => max(1, get_query_var('paged')),
                        'format'    => '?paged=%#%',
                        'prev_text' => '<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12.5 15L7.5 10L12.5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>',
                        'next_text' => '<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.5 15L12.5 10L7.5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>',
                        'type'      => 'list',
                    ));
                    ?>
                </nav>
                <?php endif; ?>
            </div>

        <?php else : ?>
            
            <!-- No products found -->
            <div class="text-center py-16">
                <div class="flex items-center justify-center w-20 h-20 bg-gray-1 rounded-full mx-auto mb-6">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.11826 15.4622C4.11794 16.6668 5.97853 16.6668 9.69971 16.6668H10.3007C14.0219 16.6668 15.8825 16.6668 16.8821 15.4622M3.11826 15.4622C2.11857 14.2577 2.46146 12.429 3.14723 8.77153C3.63491 6.17055 3.87875 4.87006 4.8045 4.10175M3.11826 15.4622C3.11826 15.4622 3.11826 15.4622 3.11826 15.4622ZM16.8821 15.4622C17.8818 14.2577 17.5389 12.429 16.8532 8.77153C16.3655 6.17055 16.1216 4.87006 15.1959 4.10175M16.8821 15.4622C16.8821 15.4622 16.8821 15.4622 16.8821 15.4622ZM15.1959 4.10175C14.2701 3.33345 12.947 3.33345 10.3007 3.33345H9.69971C7.0534 3.33345 5.73025 3.33345 4.8045 4.10175M15.1959 4.10175C15.1959 4.10175 15.1959 4.10175 15.1959 4.10175ZM4.8045 4.10175C4.8045 4.10175 4.8045 4.10175 4.8045 4.10175Z" stroke="#8D93A5" stroke-width="1.5"/>
                    </svg>
                </div>
                <h2 class="font-semibold text-xl text-dark mb-2">
                    <?php esc_html_e('Brak produktów', 'pokrovce'); ?>
                </h2>
                <p class="text-dark-4 mb-6">
                    <?php esc_html_e('Nie znaleziono produktów spełniających kryteria wyszukiwania.', 'pokrovce'); ?>
                </p>
                <a href="<?php echo esc_url(get_permalink(wc_get_page_id('shop'))); ?>" 
                   class="inline-flex font-medium text-white bg-[#E67E22] py-3 px-7 rounded-lg ease-out duration-200 hover:bg-[#E67E22]/80">
                    <?php esc_html_e('Wróć do sklepu', 'pokrovce'); ?>
                </a>
            </div>

        <?php endif; ?>

    </div>
</main>

<?php get_footer('shop'); ?>
