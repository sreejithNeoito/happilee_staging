<?php

/**
 * The template for displaying the Case Studies Archive page
 *
 * This template is used to display a list of case studies on the site.
 * It is used when viewing the archive for the 'case_study' custom post type.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package happilee
 */

get_header();
?>
<main id="main">
    <?php
    get_template_part('template-parts/case-studies/banner');
    get_template_part('template-parts/home/slider');
    get_template_part('template-parts/case-studies/case-studies');
    get_template_part('template-parts/case-studies/all-case-studies');
    get_template_part('template-parts/case-studies/explore');
    ?>
</main>
<?php
get_footer();