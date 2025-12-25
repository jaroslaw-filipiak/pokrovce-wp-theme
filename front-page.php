<?php
/**
 * The template for displaying the front page
 *
 * @package pokrovce
 */

get_header();

// WebSite Schema for homepage (enables sitelinks search box in Google)
$website_schema = array(
    '@context' => 'https://schema.org',
    '@type' => 'WebSite',
    '@id' => home_url('/') . '#website',
    'name' => get_bloginfo('name'),
    'url' => home_url('/'),
    'description' => get_bloginfo('description'),
    'inLanguage' => 'pl-PL',
    'potentialAction' => array(
        '@type' => 'SearchAction',
        'target' => array(
            '@type' => 'EntryPoint',
            'urlTemplate' => home_url('/') . '?s={search_term_string}'
        ),
        'query-input' => 'required name=search_term_string'
    ),
    'publisher' => array(
        '@type' => 'Organization',
        '@id' => home_url('/') . '#organization',
        'name' => 'Pokrovce.pl',
        'url' => home_url('/'),
        'logo' => array(
            '@type' => 'ImageObject',
            'url' => get_template_directory_uri() . '/public/pokrovce-logo.svg'
        )
    )
);

// Get testimonials for AggregateRating
$testimonials_for_schema = array(
    array('rating' => 5, 'name' => 'Monika'),
    array('rating' => 5, 'name' => 'Sara'),
    array('rating' => 4, 'name' => 'Mariusz'),
);
$total_reviews = count($testimonials_for_schema);
$avg_rating = array_sum(array_column($testimonials_for_schema, 'rating')) / $total_reviews;

// Organization with AggregateRating
$organization_schema = array(
    '@context' => 'https://schema.org',
    '@type' => 'Organization',
    '@id' => home_url('/') . '#organization',
    'name' => 'Pokrovce.pl',
    'url' => home_url('/'),
    'logo' => get_template_directory_uri() . '/public/pokrovce-logo.svg',
    'description' => 'Polski sklep z pokrowcami na krzesła skandynawskie. Szybka wysyłka z Wielkopolski.',
    'telephone' => '+48 661 962 732',
    'email' => 'kontakt@pokrovce.pl',
    'address' => array(
        '@type' => 'PostalAddress',
        'addressRegion' => 'Wielkopolska',
        'addressCountry' => 'PL'
    ),
    'aggregateRating' => array(
        '@type' => 'AggregateRating',
        'ratingValue' => number_format($avg_rating, 1),
        'reviewCount' => $total_reviews,
        'bestRating' => '5',
        'worstRating' => '1'
    )
);

// Combined schema with @graph
$homepage_schema = array(
    '@context' => 'https://schema.org',
    '@graph' => array($website_schema, $organization_schema)
);
?>

<script type="application/ld+json">
<?php echo wp_json_encode($homepage_schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); ?>
</script>

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