<?php

/**
* Enqueue scripts and styles.
*/

function pokrovce_scripts() {
	wp_enqueue_style( 'pokrovce-style', get_stylesheet_uri(), array(), _S_VERSION );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	/**
	 * Vite global.js
	 */
	wp_enqueue_script( 'pokrovce-global', get_template_directory_uri() . '/dist/assets/global.js', array(), _S_VERSION, true );
	wp_enqueue_style( 'pokrovce-global', get_template_directory_uri() . '/dist/assets/global.css', array(), _S_VERSION );

	/**
	 * Cart styles - load only on cart page
	 */
	if ( function_exists( 'is_cart' ) && is_cart() ) {
		wp_enqueue_style( 'pokrovce-cart', get_template_directory_uri() . '/dist/assets/cart.css', array( 'pokrovce-global' ), _S_VERSION );
	}

	/**
	 * Checkout styles - load only on checkout page
	 */
	if ( function_exists( 'is_checkout' ) && is_checkout() ) {
		wp_enqueue_style( 'pokrovce-checkout', get_template_directory_uri() . '/dist/assets/checkout.css', array( 'pokrovce-global' ), _S_VERSION );
	}

	/**
	 * FAQ styles - load only on FAQ page template
	 */
	if ( is_page_template( 'page-templates/page-faq.php' ) ) {
		wp_enqueue_style( 'pokrovce-faq', get_template_directory_uri() . '/dist/assets/faq.css', array( 'pokrovce-global' ), _S_VERSION );
		wp_enqueue_script( 'pokrovce-faq', get_template_directory_uri() . '/dist/assets/faq.js', array( 'pokrovce-global' ), _S_VERSION, true );
	}

	/**
	 * About page - load only on About page template
	 */
	if ( is_page_template( 'page-templates/page-about.php' ) ) {
		wp_enqueue_style( 'pokrovce-about', get_template_directory_uri() . '/dist/assets/about.css', array( 'pokrovce-global' ), _S_VERSION );
		wp_enqueue_script( 'pokrovce-about', get_template_directory_uri() . '/dist/assets/about.js', array( 'pokrovce-global' ), _S_VERSION, true );
	}

	/**
	 * Contact page - load only on Contact page template
	 */
	if ( is_page_template( 'page-templates/page-contact.php' ) ) {
		wp_enqueue_style( 'pokrovce-contact', get_template_directory_uri() . '/dist/assets/contact.css', array( 'pokrovce-global' ), _S_VERSION );
		wp_enqueue_script( 'pokrovce-contact', get_template_directory_uri() . '/dist/assets/contact.js', array( 'pokrovce-global' ), _S_VERSION, true );
	}

	/**
	 * My Account styles - load only on WooCommerce account pages
	 */
	if ( function_exists( 'is_account_page' ) && is_account_page() ) {
		wp_enqueue_style( 'pokrovce-myaccount', get_template_directory_uri() . '/dist/assets/myaccount.css', array( 'pokrovce-global' ), _S_VERSION );
		wp_enqueue_script( 'pokrovce-myaccount', get_template_directory_uri() . '/dist/assets/myaccount.js', array( 'pokrovce-global' ), _S_VERSION, true );
	}

	/**
	 * Single Product - load only on single product pages
	 */
	if ( function_exists( 'is_product' ) && is_product() ) {
		wp_enqueue_script( 'pokrovce-woocommerce-single', get_template_directory_uri() . '/dist/assets/woocommerce-single.js', array(), _S_VERSION, true );
	}
}
add_action( 'wp_enqueue_scripts', 'pokrovce_scripts' );