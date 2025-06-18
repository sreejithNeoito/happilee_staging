<?php

/**
 * The template for displaying the whatsapp-link-generator page
 *
 * This is the template that displays the whatsapp-link-generator page of the site.
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
    get_template_part('template-parts/whatsapp-link-generator/banner');
    get_template_part('template-parts/whatsapp-link-generator/link-generator');
    get_template_part('template-parts/whatsapp-link-generator/faq');
    get_template_part('template-parts/home/delight');
    ?>
</main><!-- #main -->

<?php
get_footer();
