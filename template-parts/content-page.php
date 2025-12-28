<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pokrovce
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <!-- Section header - consistent with homepage components -->
    <header class="entry-header lg:mb-10">
        <span class="flex items-center gap-2.5 font-medium text-dark mb-1.5">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M2.5 7.5H17.5M2.5 7.5V13.5C2.5 15.7091 4.29086 17.5 6.5 17.5H13.5C15.7091 17.5 17.5 15.7091 17.5 13.5V7.5M2.5 7.5V6.5C2.5 4.29086 4.29086 2.5 6.5 2.5H13.5C15.7091 2.5 17.5 4.29086 17.5 6.5V7.5"
                    stroke="#E67E22" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M7.5 11.25H12.5" stroke="#E67E22" stroke-width="1.5" stroke-linecap="round" />
            </svg>
            <?php esc_html_e('Strona', 'pokrovce'); ?>
        </span>
        <?php the_title('<h1 class="font-semibold text-xl xl:text-heading-5 text-dark">', '</h1>'); ?>
    </header><!-- .entry-header -->

    <?php pokrovce_post_thumbnail(); ?>

    <div class="entry-content">
        <?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links flex items-center gap-2 mt-7">' . esc_html__('Strony:', 'pokrovce'),
				'after'  => '</div>',
			)
		);
		?>
    </div><!-- .entry-content -->

    <?php if (get_edit_post_link()) : ?>
    <footer class="entry-footer mt-10 pt-7 border-t border-gray-3">
        <a href="<?php echo esc_url(get_edit_post_link()); ?>"
            class="inline-flex items-center gap-2 font-medium text-custom-sm py-2.5 px-5 rounded-md border border-gray-3 bg-gray-1 text-dark no-underline ease-out duration-200 hover:bg-dark hover:text-white hover:border-transparent">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M11 4H4C3.46957 4 2.96086 4.21071 2.58579 4.58579C2.21071 4.96086 2 5.46957 2 6V20C2 20.5304 2.21071 21.0391 2.58579 21.4142C2.96086 21.7893 3.46957 22 4 22H18C18.5304 22 19.0391 21.7893 19.4142 21.4142C19.7893 21.0391 20 20.5304 20 20V13"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <path
                    d="M18.5 2.50001C18.8978 2.10219 19.4374 1.87869 20 1.87869C20.5626 1.87869 21.1022 2.10219 21.5 2.50001C21.8978 2.89784 22.1213 3.4374 22.1213 4.00001C22.1213 4.56262 21.8978 5.10219 21.5 5.50001L12 15L8 16L9 12L18.5 2.50001Z"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <?php
				printf(
					/* translators: %s: Name of current post. Only visible to screen readers */
					wp_kses(
						__('Edytuj <span class="screen-reader-text">%s</span>', 'pokrovce'),
						array('span' => array('class' => array()))
					),
					wp_kses_post(get_the_title())
				);
				?>
        </a>
    </footer><!-- .entry-footer -->
    <?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->