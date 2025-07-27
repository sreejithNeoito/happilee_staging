<?php

/**
 * The template for displaying the default page
 *
 * This is the template that displays the page of the site.
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
    get_template_part('template-parts/content/content', 'page');
    ?>


</main><!-- #main -->

<?php
get_footer();
