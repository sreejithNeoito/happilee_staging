<?php

/**
 * The template for displaying the become-a-partner page
 *
 * This is the template that displays the become-a-partner page of the site.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package happilee
 */

get_header();
?>
<main id="main">

    <?php
        get_template_part('template-parts/become-a-partner/banner');
        get_template_part('template-parts/become-a-partner/points');
        get_template_part('template-parts/become-a-partner/offers');
        get_template_part('template-parts/become-a-partner/form');
        get_template_part('template-parts/home/slider');
    ?>
</main>
<?php
get_footer();
