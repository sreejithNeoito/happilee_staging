<?php

/**
 * The template for displaying the faqs page
 *
 * This is the template that displays the become-an-affiate-partner page of the site.
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
    get_template_part('template-parts/contact/banner');
    get_template_part('template-parts/contact/points');
    get_template_part('template-parts/contact/time');
    get_template_part('template-parts/home/testimonials');
    get_template_part('template-parts/home/slider');
    ?>


</main><!-- #main -->

<?php
get_footer();
