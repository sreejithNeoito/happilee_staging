<?php

/**
 * The template for displaying single feature
 *
 * This is the template that displays a single feature. It is used when viewing a single post 
 * of the custom post type `solution`. If you have created a custom post type for feature, 
 * this template will handle the display of each individual feature post.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package happilee
 */


get_header();
?>
<main id="main">

    <?php
    get_template_part('template-parts/feature/banner');
    get_template_part('template-parts/feature/stats');
    get_template_part('template-parts/feature/details');
    get_template_part('template-parts/home/testimonials');
    get_template_part('template-parts/home/delight');

    ?>


</main><!-- #main -->

<?php
get_footer();
