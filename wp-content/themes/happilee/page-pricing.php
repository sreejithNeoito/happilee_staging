<?php

/**
 * The template for displaying the Pricing page
 *
 * This is the template that displays the pricing of the site.
 * If the home page is set to a static page, this template will be used.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package happilee
 */


get_header();
?>
<main id="main">

    <?php
    get_template_part('template-parts/pricing/banner');
    get_template_part('template-parts/pricing/prices');
    get_template_part('template-parts/home/delight');
    get_template_part('template-parts/home/testimonials');
    get_template_part('template-parts/home/slider');
    get_template_part('template-parts/pricing/faq');
    ?>


</main><!-- #main -->

<?php
get_footer();
