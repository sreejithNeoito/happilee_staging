<?php

/**
 * The template for displaying the whatsapp-chat-button-widget page
 *
 * This is the template that displays the whatsapp-chat-button-widget page of the site.
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
    get_template_part('template-parts/whatsapp-chat-button/banner');
    get_template_part('template-parts/whatsapp-chat-button/button');
    get_template_part('template-parts/whatsapp-chat-button/widget');
    get_template_part('template-parts/whatsapp-chat-button/faq');

    ?>
</main><!-- #main -->

<?php
get_footer();
