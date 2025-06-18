<?php

/**
 * The template for displaying the Blog Archive page
 *
 * This template is used to display a list of blog posts on the site.
 * It is used when viewing the blog posts page or any archive of posts.
 * If the site is set to display the latest posts, this template will be used.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package happilee
 */

get_header();
?>

<section id="primary">
    <main id="main">

        <?php
        get_template_part('template-parts/blog/banner');
        get_template_part('template-parts/blog/trending');
        get_template_part('template-parts/blog/categories');
        get_template_part('template-parts/blog/recent-blogs');
        get_template_part('template-parts/blog/explore');
        ?>


    </main><!-- #main -->
</section><!-- #primary -->

<?php
get_footer();
