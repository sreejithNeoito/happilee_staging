<?php

/**
 * The template for displaying the book-a-demo page
 *
 * This is the template that displays the book-a-demo page of the site.
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
    get_template_part('template-parts/book-a-demo/banner');
    get_template_part('template-parts/book-a-demo/points');
    get_template_part('template-parts/book-a-demo/form');
    get_template_part('template-parts/book-a-demo/stats');
    get_template_part('template-parts/home/slider');
    get_template_part('template-parts/book-a-demo/faq');
    ?>


</main><!-- #main -->

<?php
get_footer();
