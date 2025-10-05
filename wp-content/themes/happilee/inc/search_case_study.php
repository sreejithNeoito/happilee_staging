<?php

// Handle AJAX search request
function handle_caseStudy_search_request()
{
    $search_term = isset($_POST['query']) ? sanitize_text_field($_POST['query']) : '';
    $args = [
        's' => $search_term,
        'post_type' => 'case_study',
        'posts_per_page' => 10,
    ];

    // Query posts
    $query = new WP_Query($args);

    // Prepare the response
    $results = [];
    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            $results[] = [
                'title' => get_the_title(),
                'link' => get_permalink(),
            ];
        }
    }

    // Restore original Post Data
    wp_reset_postdata();

    // Send the response as JSON
    wp_send_json($results);
}

// Register AJAX actions
add_action('wp_ajax_search_caseStudies', 'handle_caseStudy_search_request');
add_action('wp_ajax_nopriv_search_caseStudies', 'handle_caseStudy_search_request');