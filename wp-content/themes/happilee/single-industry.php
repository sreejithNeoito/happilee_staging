<?php

/**
 * The template for displaying single industry
 *
 * This is the template that displays a single industry. It is used when viewing a single post 
 * of the custom post type `industry`. If you have created a custom post type for industry, 
 * this template will handle the display of each individual industry post.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package happilee
 */

get_header();
?>
<main id="main">

    <?php
    get_template_part('template-parts/industry/banner');
    get_template_part('template-parts/industry/slider');
    get_template_part('template-parts/industry/highlights');
    get_template_part('template-parts/industry/details');
    get_template_part('template-parts/home/testimonials');
    get_template_part('template-parts/home/delight');

    ?>


</main><!-- #main -->
<?php
get_footer();
