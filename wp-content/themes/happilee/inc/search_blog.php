<?php

// Handle AJAX search request
function handle_search_request()
{
    // Get the search term from the AJAX request
    $search_term = isset($_POST['query']) ? sanitize_text_field($_POST['query']) : '';
    $category_id = isset($_POST['category_id']) ? intval($_POST['category_id']) : 0;
    $taxonomy = isset($_POST['taxonomy']) ? sanitize_text_field($_POST['taxonomy']) : '';
    $term_id = isset($_POST['term_id']) ? intval($_POST['term_id']) : 0;

    // Prepare WP_Query based on context
    $args = [
        's' => $search_term,
        'post_type' => 'post',
        'posts_per_page' => 10,
    ];

    // Add category filter if on a category page
    if ($category_id) {
        $args['cat'] = $category_id;
    }

    // Add taxonomy filter if on a term page
    if ($taxonomy && $term_id) {
        $args['tax_query'] = [
            [
                'taxonomy' => $taxonomy,
                'field' => 'term_id',
                'terms' => $term_id,
            ]
        ];
    }

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
add_action('wp_ajax_search_posts', 'handle_search_request');
add_action('wp_ajax_nopriv_search_posts', 'handle_search_request');
