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
    get_template_part('template-parts/faqs/banner');
    get_template_part('template-parts/faqs/faq');
    ?>


</main><!-- #main -->

<?php
get_footer();
