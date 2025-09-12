<?php

/**
 * The template for displaying the Link Generator page
 *
 * This is the template that displays the pricing of the site.
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
 get_template_part('template-parts/whatsapp-qr-code-generator/banner');
 get_template_part('template-parts/whatsapp-qr-code-generator/qr-code-generator');
 get_template_part('template-parts/whatsapp-qr-code-generator/page-content');
 get_template_part('template-parts/whatsapp-qr-code-generator/faq');
 get_template_part('template-parts/home/delight');
 ?>
 
</main>
<?php
get_footer();
