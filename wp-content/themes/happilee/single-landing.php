<?php

/**
 * The template for displaying the  landing pages.
 * This is the template that displays landing pages of the site.
 * Template Post Type: landing
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package happilee
 */

get_header();
?>
<main id="main">
    <?php
    get_template_part('template-parts/landing/banner');
    get_template_part('template-parts/landing/features');
    get_template_part('template-parts/landing/cta');
    get_template_part('template-parts/landing/details');
    get_template_part('template-parts/landing/cta2');
    get_template_part('template-parts/landing/customer');
    get_template_part('template-parts/landing/faq');

    ?>
</main><!-- #main -->

<?php
get_footer();
