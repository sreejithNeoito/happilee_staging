<?php

/**
 * The template for displaying the Home page
 *
 * This is the template that displays the front page or home page of the site.
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
    get_template_part('template-parts/home/banner');
    get_template_part('template-parts/home/slider');
    get_template_part('template-parts/home/benefits');
    get_template_part('template-parts/home/usecases');
    get_template_part('template-parts/home/features');
    get_template_part('template-parts/home/statistics-uc-effectivenes');
    get_template_part('template-parts/home/integration');
    get_template_part('template-parts/home/testimonials');
    get_template_part('template-parts/home/delight');

    ?>


</main><!-- #main -->

<?php
get_footer();
