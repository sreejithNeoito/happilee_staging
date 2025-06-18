<?php

// Add a meta box for both Featured and Trending posts
function cmb2_featured_trending_post_meta_box()
{
    $prefix = '_cmb2_'; // Prefix for meta keys to avoid conflicts

    // Create a meta box
    $cmb = new_cmb2_box(array(
        'id'           => $prefix . 'featured_trending_post',
        'title'        => __('Featured & Trending Post', 'cmb2'),
        'object_types' => array('post'), // Post types where this box will appear
        'context'      => 'side', // Side meta box
        'priority'     => 'high', // Priority
    ));

    // Add a checkbox field for "Featured" post
    $cmb->add_field(array(
        'name'    => __('Mark as Featured', 'cmb2'),
        'id'      => $prefix . 'is_featured',
        'type'    => 'checkbox',
        'desc'    => __('Check this box to feature this post.', 'cmb2'),
    ));

    // Add a checkbox field for "Trending" post
    $cmb->add_field(array(
        'name'    => __('Mark as Trending', 'cmb2'),
        'id'      => $prefix . 'is_trending',
        'type'    => 'checkbox',
        'desc'    => __('Check this box to mark this post as trending.', 'cmb2'),
    ));
}
add_action('cmb2_admin_init', 'cmb2_featured_trending_post_meta_box');

// Hook to save only one featured post, but allow multiple trending posts
function save_featured_and_trending_posts($post_id)
{
    // Check if we are saving a post and if the featured checkbox is checked
    if (isset($_POST['_cmb2_is_featured']) && $_POST['_cmb2_is_featured'] == 'on') {
        // Query to find any existing featured posts
        $existing_featured_query = new WP_Query(array(
            'meta_key'   => '_cmb2_is_featured',
            'meta_value' => 'on',
            'posts_per_page' => 1,
            'post__not_in' => array($post_id), // Exclude the current post from the query
        ));

        // If another post is already marked as featured, unmark it
        if ($existing_featured_query->have_posts()) {
            while ($existing_featured_query->have_posts()) {
                $existing_featured_query->the_post();
                delete_post_meta(get_the_ID(), '_cmb2_is_featured');
            }
        }
    }

    // Trending post doesn't have such restriction, so no need to unmark any existing ones
    if (isset($_POST['_cmb2_is_trending']) && $_POST['_cmb2_is_trending'] == 'on') {
        // If a post is marked as trending, no special logic needed
    }
}
add_action('save_post', 'save_featured_and_trending_posts');

// Add a submenu for the featured and trending posts page
function add_featured_trending_posts_submenu()
{
    add_submenu_page(
        'edit.php', // Parent slug
        'Featured & Trending Posts', // Page title
        'Featured & Trending Posts', // Menu title
        'manage_options', // Capability
        'featured-trending-posts', // Menu slug
        'display_featured_trending_posts_admin_page' // Callback function
    );
}
add_action('admin_menu', 'add_featured_trending_posts_submenu');

// Display the list of featured and trending posts
function display_featured_trending_posts_admin_page()
{
    // Query for featured post (only one)
    $featured_query = new WP_Query(array(
        'meta_key'   => '_cmb2_is_featured',
        'meta_value' => 'on',
        'posts_per_page' => 1, // Only one featured post
    ));

    echo '<div class="wrap"><h1>Featured & Trending Posts</h1>';

    // Display Featured Post
    echo '<h2>Featured Post</h2>';
    if ($featured_query->have_posts()) {
        echo '<ul>';
        while ($featured_query->have_posts()) {
            $featured_query->the_post();
            echo '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
        }
        echo '</ul>';
    } else {
        echo '<p>No featured post found.</p>';
    }
    wp_reset_postdata();

    // Query for trending posts (more than one allowed)
    $trending_query = new WP_Query(array(
        'meta_key'   => '_cmb2_is_trending',
        'meta_value' => 'on',
        'posts_per_page' => -1, // No limit on number of trending posts
    ));

    // Display Trending Posts
    echo '<h2>Trending Posts</h2>';
    if ($trending_query->have_posts()) {
        echo '<ul>';
        while ($trending_query->have_posts()) {
            $trending_query->the_post();
            echo '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
        }
        echo '</ul>';
    } else {
        echo '<p>No trending posts found.</p>';
    }

    echo '</div>';

    wp_reset_postdata();
}
