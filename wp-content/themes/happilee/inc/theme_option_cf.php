<?php
/*
 * Custom field for theme options
 */

add_action( 'cmb2_admin_init', 'happilee_register_theme_options' );

function happilee_register_theme_options() {
    $prefix = 'happilee_';

    $cmb = new_cmb2_box( array(
        'id'           => $prefix . 'options_page',
        'title'        => esc_html__( 'Theme Options', 'happilee' ),
        'object_types' => array( 'options-page' ),
        'option_key'   => 'happilee-theme-options',
        'icon_url'     => 'dashicons-admin-generic',
        'position'     => 59,
    ) );

     // Book Demo Link
    $cmb->add_field( array(
        'name' => 'Book Demo Link',
        'desc' => 'URL for the Book Demo button',
        'id'   => $prefix . 'demo_link',
        'type' => 'text_url',
    ) );

    // Start Free Trial Link
    $cmb->add_field( array(
        'name' => 'Start Free Trial Link',
        'desc' => 'URL for the Start FREE Trial button',
        'id'   => $prefix . 'free_trial_link',
        'type' => 'text_url',
    ) );

    // Copyright
    $cmb->add_field( array(
        'name' => 'Copyright Text',
        'desc' => 'Footer copyright text',
        'id'   => $prefix . 'copyright',
        'type' => 'text',
    ) );

    // Social Media URL
    $cmb->add_field( array(
        'name' => 'LinkedIn URL',
        'id'   => $prefix . 'linkedin_url',
        'type' => 'text_url',
    ) );

    $cmb->add_field( array(
        'name' => 'Facebook URL',
        'id'   => $prefix . 'facebook_url',
        'type' => 'text_url',
    ) );

    $cmb->add_field( array(
        'name' => 'X Platform',
        'id'   => $prefix . 'xplatform_url',
        'type' => 'text_url',
    ) );
    
    $cmb->add_field( array(
        'name' => 'Instagram URL',
        'id'   => $prefix . 'instagram_url',
        'type' => 'text_url',
    ) );

    $cmb->add_field( array(
        'name' => 'YouTube URL',
        'id'   => $prefix . 'youtube_url',
        'type' => 'text_url',
    ) );
      
}
