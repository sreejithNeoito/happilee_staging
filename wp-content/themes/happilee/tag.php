<?php

/**
 * The template for displaying Tag Archive pages
 *
 * This template is used to display a list of posts associated with a specific tag.
 * It is used when viewing an archive page for a tag.
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
        get_template_part('template-parts/tag/banner');
        get_template_part('template-parts/tag/content');
        ?>

    </main><!-- #main -->
</section><!-- #primary -->
<?php
get_footer();
