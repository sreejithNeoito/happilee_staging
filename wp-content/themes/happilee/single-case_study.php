<?php

/**
 * The template for displaying single Case Study
 *
 * This is the template that displays a single case study. It is used when viewing a single post 
 * of the custom post type `case_study`. If you have created a post for case study, 
 * this template will handle the display of each individual case study post.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package happilee
 */

get_header();
?>
<main id="main">
    <?php
        $sections = get_post_meta(get_the_ID(), 'case_study_sections', true);
        $template_map = [
            'about_client'       => 'template-parts/case-study/about-client',
            'about_two_column'   => 'template-parts/case-study/about-two-column',
            'banner'             => 'template-parts/case-study/banner-list',
            'connect'            => 'template-parts/case-study/connect',
            'media_block'        => 'template-parts/case-study/media-block',
            'slider'             => 'template-parts/home/slider',
            'stats'              => 'template-parts/case-study/stats',
            'testimonial_points' => 'template-parts/case-study/testimonial-points',
            
        ];

        if (!empty($sections) && is_array($sections)) {

            foreach ($sections as $section) {

                if (!empty($section['enabled']) && $section['enabled'] === 'on' && !empty($section['section_type']) && 
                    isset($template_map[$section['section_type']])) {

                    get_template_part($template_map[$section['section_type']]);
                }
            }
        }
    ?>
</main><!-- #main -->

<?php
get_footer();