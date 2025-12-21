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
	<header class="entry-header mb-10">
		<span class="flex items-center gap-2.5 font-medium text-dark mb-1.5">
			<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M2.5 7.5H17.5M2.5 7.5V13.5C2.5 15.7091 4.29086 17.5 6.5 17.5H13.5C15.7091 17.5 17.5 15.7091 17.5 13.5V7.5M2.5 7.5V6.5C2.5 4.29086 4.29086 2.5 6.5 2.5H13.5C15.7091 2.5 17.5 4.29086 17.5 6.5V7.5" stroke="#E67E22" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
				<path d="M7.5 11.25H12.5" stroke="#E67E22" stroke-width="1.5" stroke-linecap="round"/>
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
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__('Edytuj <span class="screen-reader-text">%s</span>', 'pokrovce'),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post(get_the_title())
				),
				'<span class="edit-link inline-flex font-medium text-custom-sm py-2.5 px-5 rounded-md border-gray-3 border bg-gray-1 text-dark ease-out duration-200 hover:bg-dark hover:text-white hover:border-transparent">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
