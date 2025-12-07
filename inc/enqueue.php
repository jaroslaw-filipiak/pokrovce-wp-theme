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


}
add_action( 'wp_enqueue_scripts', 'pokrovce_scripts' );