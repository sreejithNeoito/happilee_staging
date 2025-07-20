<?php

$prefix = 'home_page_';

function cmb2_home_metaboxes()
{
    
    $cmb = new_cmb2_box( array(
        'id'            => $prefix . 'metabox',
        'title'         => __( 'Statistics of Use Case Effectiveness', 'happilee' ),
        'object_types'  => array( 'page' ),
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true,
        'show_on_cb'    => 'show_on_front_page',
    ) );

    $useCase_group_id = $cmb->add_field( array(
		'id'             => 'use_case_statics',
		'type'           => 'group',
		'repeatable'     =>  true,
        'repeatable_max' => 4,
		'options'        => array(
			'group_title'   => 'Statistic {#}',
			'add_button'    => 'Add Another Field',
			'remove_button' => 'Remove Field',
			'closed'        => true,
			'sortable'      => true,
		),
	) );
	$cmb->add_group_field( $useCase_group_id, array(
		'name'      => __('Section Title', 'happilee'),
		'desc'      => __('Enter the title of the section.','happilee'),
		'id'        => 'case_id_1',
		'type'      => 'wysiwyg',
        'options'   => array(
            'textarea_rows' => 5,
            'media_buttons' => false,
            'teeny' => true, // Simplified toolbar
        ),
	) );

    $cmb->add_group_field( $useCase_group_id, array(
		'name'               => __('SVG Icon', 'happilee'),
		'desc'               => __('Paste your SVG markup here.', 'happilee' ),
		'id'                 => 'case_id_3',
		'type'               => 'textarea_code',
        'options'            => array(
            'disable_codemirror' => false,
        ),
	) );

    $cmb->add_group_field( $useCase_group_id, array(
		'name' => __('User Count', 'happilee'),
		'desc' => __('Enter the number of customers (e.g., 1200+, 3K, 4M, etc.)', 'happilee' ),
		'id'   => 'case_id_2',
		'type' => 'text',
	) );

}
add_action('cmb2_admin_init', 'cmb2_home_metaboxes');

function cmb2_home_features_metaboxes()
{

    $cmb = new_cmb2_box( array(
        'id'            => $prefix . 'features',
        'title'         => __( 'Key Features', 'happilee' ),
        'object_types'  => array( 'page' ),
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true,
        'show_on_cb'    => 'show_on_front_page',
    ) );

    $cmb->add_field( array(
        'name' => __('Section Title', 'happilee'),
        'id'   => 'happilee_automation_title',
        'type' => 'wysiwyg',
        'options'   => array(
            'textarea_rows' => 4,
            'media_buttons' => false,
            'teeny' => true,
        ),
    ) );

    $features_home_groupId = $cmb->add_field( array(
		'id'             => 'home_features_id',
		'type'           => 'group',
		'repeatable'     =>  true,
        'repeatable_max' => 4,
		'options'        => array(
			'group_title'   => 'Feature box {#}',
			'add_button'    => 'Add Feature',
			'remove_button' => 'Remove Feature',
			'closed'        => true,
			'sortable'      => true,
		),
	) );

    $cmb->add_group_field( $features_home_groupId, array(
        'name' => __('Features Title', 'happilee'),
        'id'   => 'feature_title',
        'type' => 'text',
        'desc' => __('Enter the feature title.', 'happilee'),
    ) );

    $cmb->add_group_field( $features_home_groupId, array(
        'name' => __('SVG Icon', 'happilee'),
        'desc' => __('Paste your SVG markup (e.g. <svg>...</svg>)', 'happilee'),
        'id'   => 'happilee_automation_svg',
        'type' => 'textarea_code',
        'attributes' => array(
            'rows' => 5,
        ),
        'options' => array(
            'disable_codemirror' => false,
        ),
    ) );

    $cmb->add_group_field( $features_home_groupId, array(
        'name' => __('Features Icon URL', 'happilee'),
        'desc' => __('Paste the SVG icon URL or anchor link (e.g., #feat-one).', 'happilee'),
        'id'   => 'happilee_automation_svg_url',
        'type' => 'text_url',
    ) );
}
add_action('cmb2_admin_init', 'cmb2_home_features_metaboxes');

function cmb2_home_integration_metaboxes()
{

    $cmb = new_cmb2_box( array(
        'id'            => $prefix . 'Integration',
        'title'         => __( 'Integration Section', 'happilee' ),
        'object_types'  => array( 'page' ),
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true,
        'show_on_cb'    => 'show_on_front_page',
    ) );

    $cmb->add_field( array(
        'name' => __('Section Title', 'happilee'),
        'id'   => 'happilee_integration_title',
        'type' => 'wysiwyg',
        'options'   => array(
            'textarea_rows' => 4,
            'media_buttons' => false,
            'teeny' => true,
        ),
    ) );

    $cmb->add_field( array(
        'name' => __('Section Content', 'happilee'),
        'id'   => 'happilee_integration_content',
        'type' => 'textarea',
        'attributes' => array(
            'rows' => 5,
        ),
    ) );

}
add_action('cmb2_admin_init', 'cmb2_home_integration_metaboxes');

function cmb2_home_delight_metaboxes()
{

    $cmb = new_cmb2_box( array(
        'id'            => $prefix . 'delight',
        'title'         => __( 'Start Delighting Section', 'happilee' ),
        'object_types'  => array( 'page' ),
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true,
        'show_on_cb'    => 'show_on_front_page',
    ) );

    $cmb->add_field( array(
        'name' => __('Section Title', 'happilee'),
        'id'   => 'happilee_delight_title',
        'type' => 'wysiwyg',
        'options'   => array(
            'textarea_rows' => 4,
            'media_buttons' => false,
            'teeny' => true,
        ),
    ) );

    $cmb->add_field( array(
        'name' => __('Section Content', 'happilee'),
        'id'   => 'happilee_delight_content',
        'type' => 'textarea',
        'attributes' => array(
            'rows' => 5,
        ),
    ) );

}
add_action('cmb2_admin_init', 'cmb2_home_delight_metaboxes');

function show_on_front_page( $cmb ) {

    $screen = get_current_screen();
    
    if ( $screen && $screen->id === 'page' ) {
        $page_id = isset( $_GET['post'] ) ? intval( $_GET['post'] ) : 0;
        
        if ( $page_id ) {
            // Check if this page is set as front page
            $front_page_id = get_option( 'page_on_front' );
            return $page_id == $front_page_id;
        }
    }
    
    return false;
}