<?php

function custom_post_types()
{
    // Features CPT
    register_post_type('feature', array(
        'labels'      => array(
            'name'          => __('Features'),
            'singular_name' => __('Feature'),
            'add_new'       => __('Add New Feature'),
            'add_new_item'  => __('Add New Feature'),
            'edit_item'     => __('Edit Feature'),
            'new_item'      => __('New Feature'),
            'view_item'     => __('View Feature'),
            'search_items'  => __('Search Features'),
            'not_found'     => __('No Features found'),
            'not_found_in_trash' => __('No Features found in Trash'),
        ),
        'public'      => true,
        'supports'    => array('title'),
        'menu_icon'   => 'dashicons-superhero',
        'has_archive' => false,
        'rewrite'     => array('slug' => 'feature', 'with_front' => true),
        'show_in_rest' => true,
    ));

    // Industries CPT
    register_post_type('industry', array(
        'labels'      => array(
            'name'          => __('Industries'),
            'singular_name' => __('Industry'),
            'add_new'       => __('Add New Industry'),
            'add_new_item'  => __('Add New Industry'),
            'edit_item'     => __('Edit Industry'),
            'new_item'      => __('New Industry'),
            'view_item'     => __('View Industry'),
            'search_items'  => __('Search Industries'),
            'not_found'     => __('No Industries found'),
            'not_found_in_trash' => __('No Industries found in Trash'),
        ),
        'public'      => true,
        'supports'    => array('title'),
        'menu_icon'   => 'dashicons-businessman',
        'has_archive' => false,
        'rewrite'     => array('slug' => 'industry', 'with_front' => true),
        'show_in_rest' => true,
    ));

    // Landing Pages CPT
    register_post_type('landing', array(
        'labels'      => array(
            'name'          => __('Landing Pages'),
            'singular_name' => __('Landing Page'),
            'add_new'       => __('Add New Landing Page'),
            'add_new_item'  => __('Add New Landing Page'),
            'edit_item'     => __('Edit Landing Page'),
            'new_item'      => __('New Landing Page'),
            'view_item'     => __('View Landing Page'),
            'search_items'  => __('Search Landing Pages'),
            'not_found'     => __('No Landing Pages found'),
            'not_found_in_trash' => __('No Landing Pages found in Trash'),
        ),
        'public'      => true,
        'supports'    => array('title'),
        'menu_icon' => 'dashicons-desktop',
        'has_archive' => false,
        'rewrite'     => array('slug' => 'landing', 'with_front' => true),
        'show_in_rest' => true,
    ));
}

add_action('init', 'custom_post_types');
