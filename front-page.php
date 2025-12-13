<?php
/**
 * The template for displaying the front page
 *
 * @package pokrovce
 */

get_header();
?>

<main id="primary" class="site-main">
    <?php get_template_part( 'template-parts/home/hero' ); ?>

    <?php /** get_template_part( 'template-parts/home/categories' ); **/ ?>
    <?php get_template_part( 'template-parts/home/new-arrivals' );  ?>
    <?php /** get_template_part( 'template-parts/home/promo-banner' ); **/ ?>
    <?php /** get_template_part( 'template-parts/home/best-seller' ); **/ ?>
    <?php /** get_template_part( 'template-parts/home/countdown' ); **/ ?>
    <?php get_template_part( 'template-parts/home/testimonials' ); ?>
    <?php get_template_part( 'template-parts/home/newsletter' ); ?>
</main>

<?php
get_footer();