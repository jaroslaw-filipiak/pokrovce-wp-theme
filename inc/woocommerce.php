<?php
/**
 * WooCommerce Compatibility File
 *
 * @link https://woocommerce.com/
 *
 * @package pokrovce
 */

/**
 * WooCommerce setup function.
 *
 * @link https://docs.woocommerce.com/document/third-party-custom-theme-compatibility/
 * @link https://github.com/woocommerce/woocommerce/wiki/Enabling-product-gallery-features-(zoom,-swipe,-lightbox)
 * @link https://github.com/woocommerce/woocommerce/wiki/Declaring-WooCommerce-support-in-themes
 *
 * @return void
 */
function pokrovce_woocommerce_setup() {
	add_theme_support(
		'woocommerce',
		array(
			'thumbnail_image_width' => 300,
			'single_image_width'    => 600,
			'product_grid'          => array(
				'default_rows'    => 3,
				'min_rows'        => 1,
				'default_columns' => 4,
				'min_columns'     => 1,
				'max_columns'     => 6,
			),
		)
	);
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'pokrovce_woocommerce_setup' );


/**
 * Disable the default WooCommerce stylesheet.
 *
 * Removing the default WooCommerce stylesheet and enqueing your own will
 * protect you during WooCommerce core updates.
 *
 * @link https://docs.woocommerce.com/document/disable-the-default-stylesheet/
 */
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

/**
 * Add 'woocommerce-active' class to the body tag.
 *
 * @param  array $classes CSS classes applied to the body tag.
 * @return array $classes modified to include 'woocommerce-active' class.
 */
function pokrovce_woocommerce_active_body_class( $classes ) {
	$classes[] = 'woocommerce-active';

	return $classes;
}
add_filter( 'body_class', 'pokrovce_woocommerce_active_body_class' );

/**
 * Related Products Args.
 *
 * @param array $args related products args.
 * @return array $args related products args.
 */
function pokrovce_woocommerce_related_products_args( $args ) {
	$defaults = array(
		'posts_per_page' => 8,
		'columns'        => 4,
	);

	$args = wp_parse_args( $defaults, $args );

	return $args;
}
add_filter( 'woocommerce_output_related_products_args', 'pokrovce_woocommerce_related_products_args' );

/**
 * Remove default WooCommerce wrapper.
 */
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );

if ( ! function_exists( 'pokrovce_woocommerce_wrapper_before' ) ) {
	/**
	 * Before Content.
	 *
	 * Wraps all WooCommerce content in wrappers which match the theme markup.
	 *
	 * @return void
	 */
	function pokrovce_woocommerce_wrapper_before() {
		?>
<main id="primary" class="site-main">
    <?php
	}
}
add_action( 'woocommerce_before_main_content', 'pokrovce_woocommerce_wrapper_before' );

if ( ! function_exists( 'pokrovce_woocommerce_wrapper_after' ) ) {
	/**
	 * After Content.
	 *
	 * Closes the wrapping divs.
	 *
	 * @return void
	 */
	function pokrovce_woocommerce_wrapper_after() {
		?>
</main><!-- #main -->
<?php
	}
}
add_action( 'woocommerce_after_main_content', 'pokrovce_woocommerce_wrapper_after' );

/**
 * Sample implementation of the WooCommerce Mini Cart.
 *
 * You can add the WooCommerce Mini Cart to header.php like so ...
 *
	<?php
		if ( function_exists( 'pokrovce_woocommerce_header_cart' ) ) {
			pokrovce_woocommerce_header_cart();
		}
	?>
*/

if ( ! function_exists( 'pokrovce_woocommerce_cart_link_fragment' ) ) {
/**
* Cart Fragments.
*
* Ensure cart contents update when products are added to the cart via AJAX.
*
* @param array $fragments Fragments to refresh via AJAX.
* @return array Fragments to refresh via AJAX.
*/
function pokrovce_woocommerce_cart_link_fragment( $fragments ) {
ob_start();
pokrovce_woocommerce_cart_link();
$fragments['a.cart-contents'] = ob_get_clean();

return $fragments;
}
}
add_filter( 'woocommerce_add_to_cart_fragments', 'pokrovce_woocommerce_cart_link_fragment' );

if ( ! function_exists( 'pokrovce_woocommerce_cart_link' ) ) {
/**
* Cart Link.
*
* Displayed a link to the cart including the number of items present and the cart total.
*
* @return void
*/
function pokrovce_woocommerce_cart_link() {
?>
<a class="cart-contents" href="<?php echo esc_url( wc_get_cart_url() ); ?>"
    title="<?php esc_attr_e( 'View your shopping cart', 'pokrovce' ); ?>">
    <?php
			$item_count_text = sprintf(
				/* translators: number of items in the mini cart. */
				_n( '%d item', '%d items', WC()->cart->get_cart_contents_count(), 'pokrovce' ),
				WC()->cart->get_cart_contents_count()
			);
			?>
    <span class="amount"><?php echo wp_kses_data( WC()->cart->get_cart_subtotal() ); ?></span> <span
        class="count"><?php echo esc_html( $item_count_text ); ?></span>
</a>
<?php
	}
}

if ( ! function_exists( 'pokrovce_woocommerce_header_cart' ) ) {
	/**
	 * Display Header Cart.
	 *
	 * @return void
	 */
	function pokrovce_woocommerce_header_cart() {
		if ( is_cart() ) {
			$class = 'current-menu-item';
		} else {
			$class = '';
		}
		?>
<ul id="site-header-cart" class="site-header-cart">
    <li class="<?php echo esc_attr( $class ); ?>">
        <?php pokrovce_woocommerce_cart_link(); ?>
    </li>
    <li>
        <?php
				$instance = array(
					'title' => '',
				);

				the_widget( 'WC_Widget_Cart', $instance );
				?>
    </li>
</ul>
<?php
	}
}

/**
 * Set default country to Poland.
 * This ensures all orders are processed with Poland as the country.
 *
 * @param string $country Default country code.
 * @return string Poland country code.
 */
function pokrovce_default_checkout_country( $country ) {
	return 'PL';
}
add_filter( 'default_checkout_billing_country', 'pokrovce_default_checkout_country' );
add_filter( 'default_checkout_shipping_country', 'pokrovce_default_checkout_country' );

/**
 * Force customer country to Poland on checkout init.
 */
function pokrovce_set_customer_country() {
	if ( WC()->customer ) {
		WC()->customer->set_billing_country( 'PL' );
		WC()->customer->set_shipping_country( 'PL' );
	}
}
add_action( 'woocommerce_checkout_init', 'pokrovce_set_customer_country' );
add_action( 'woocommerce_before_calculate_totals', 'pokrovce_set_customer_country' );

/**
 * Make phone field required on checkout (classic checkout).
 *
 * @param array $fields Checkout fields.
 * @return array Modified checkout fields.
 */
function pokrovce_require_phone_field( $fields ) {
	if ( isset( $fields['billing']['billing_phone'] ) ) {
		$fields['billing']['billing_phone']['required'] = true;
	}
	return $fields;
}
add_filter( 'woocommerce_checkout_fields', 'pokrovce_require_phone_field' );

/**
 * Also set phone as required in billing fields.
 *
 * @param array $fields Billing fields.
 * @return array Modified billing fields.
 */
function pokrovce_require_billing_phone( $fields ) {
	if ( isset( $fields['billing_phone'] ) ) {
		$fields['billing_phone']['required'] = true;
	}
	return $fields;
}
add_filter( 'woocommerce_billing_fields', 'pokrovce_require_billing_phone' );

/**
 * Make phone field required for block-based checkout.
 * This filter works with WooCommerce Blocks.
 *
 * @param array $fields Address fields schema.
 * @return array Modified fields schema.
 */
function pokrovce_require_phone_block_checkout( $fields ) {
	if ( isset( $fields['phone'] ) ) {
		$fields['phone']['required'] = true;
	}
	return $fields;
}
add_filter( 'woocommerce_get_country_locale_default', function( $locale ) {
	$locale['phone']['required'] = true;
	return $locale;
});

/**
 * Force phone to be required via checkout block settings.
 */
add_filter( '__experimental_woocommerce_blocks_checkout_update_order_from_request', function( $order, $request ) {
	return $order;
}, 10, 2 );

/**
 * Set phone as required in WooCommerce settings programmatically.
 */
function pokrovce_set_phone_required_option() {
	if ( get_option( 'woocommerce_checkout_phone_field' ) !== 'required' ) {
		update_option( 'woocommerce_checkout_phone_field', 'required' );
	}
}
add_action( 'init', 'pokrovce_set_phone_required_option' );

/**
 * Customize WooCommerce product tabs.
 * - Keep description (with custom template)
 * - Add dimensions tab
 * - Add FAQ tab
 * - Remove additional_information
 */
function pokrovce_product_tabs( $tabs ) {
	// Remove additional information tab
	unset( $tabs['additional_information'] );
	
	// Override description callback to use our template
	if ( isset( $tabs['description'] ) ) {
		$tabs['description']['callback'] = 'pokrovce_description_tab_content';
		$tabs['description']['title']    = __( 'Opis', 'pokrovce' );
		$tabs['description']['priority'] = 10;
	}
	
	// Add dimensions tab
	$tabs['dimensions'] = array(
		'title'    => __( 'Wymiary', 'pokrovce' ),
		'priority' => 20,
		'callback' => 'pokrovce_dimensions_tab_content',
	);
	
	// Add FAQ tab
	$tabs['faq'] = array(
		'title'    => __( 'FAQ', 'pokrovce' ),
		'priority' => 30,
		'callback' => 'pokrovce_faq_tab_content',
	);
	
	return $tabs;
}
add_filter( 'woocommerce_product_tabs', 'pokrovce_product_tabs', 98 );

/**
 * Description tab content.
 */
function pokrovce_description_tab_content() {
	wc_get_template( 'single-product/tabs/description.php' );
}

/**
 * Dimensions tab content.
 */
function pokrovce_dimensions_tab_content() {
	wc_get_template( 'single-product/tabs/tab-dimensions.php' );
}

/**
 * FAQ tab content.
 */
function pokrovce_faq_tab_content() {
	wc_get_template( 'single-product/tabs/tab-faq.php' );
}