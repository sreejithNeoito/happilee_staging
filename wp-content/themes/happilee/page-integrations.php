<?php

/**
 * The template for displaying the integrations page
 *
 * This is the template that displays the integrations page of the site.
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
    get_template_part('template-parts/integrations/banner');
    get_template_part('template-parts/integrations/integrations');
    get_template_part('template-parts/integrations/points');
    get_template_part('template-parts/integrations/stats');
    get_template_part('template-parts/integrations/cta');
    get_template_part('template-parts/home/slider');
    get_template_part('template-parts/integrations/faq');
    ?>


</main><!-- #main -->

<?php
get_footer();
