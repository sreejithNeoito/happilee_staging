<?php
add_action('cmb2_admin_init', 'cmb2_feature_metaboxes');

function cmb2_feature_metaboxes()
{

    // Create the meta box for the 'feature' post type
    $cmb = new_cmb2_box(array(
        'id'            => 'feature_metabox',
        'title'         => __('Feature Details', 'cmb2'),
        'object_types'  => array('feature'), // The custom post type 'feature'
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names
    ));

    // Banner Group Fields
    $cmb->add_field(array(
        'name' => __('Tagline', 'cmb2'),
        'id'   => 'feature_banner_tagline',
        'type' => 'textarea',
        'attributes' => array(
            'rows' => 1, // Set the number of rows to control the height
        ),
    ));

    $cmb->add_field(array(
        'name' => __('Title', 'cmb2'),
        'id'   => 'feature_banner_title',
        'type' => 'text',
    ));

    $cmb->add_field(array(
        'name' => __('Paragraph', 'cmb2'),
        'id'   => 'feature_banner_paragraph',
        'type' => 'textarea',
    ));

    $cmb->add_field(array(
        'name' => __('Banner Image', 'cmb2'),
        'id'   => 'feature_banner_image',
        'type' => 'file',
    ));

    // Repeatable Group: Statistics
    $statistics_group_id = $cmb->add_field(array(
        'id'          => 'feature_statistics_group',
        'type'        => 'group',
        'description' => __('Add multiple statistics', 'cmb2'),
        'options'     => array(
            'group_title'       => __('Statistic {#}', 'cmb2'), // {#} gets replaced by row number
            'add_button'        => __('Add Another Statistic', 'cmb2'),
            'remove_button'     => __('Remove Statistic', 'cmb2'),
            'sortable'          => true, // Allow reordering
            'closed'         => true, // Start closed by default
        ),
    ));

    // Fields inside the repeatable group for Statistics
    $cmb->add_group_field($statistics_group_id, array(
        'name' => __('Icon Image', 'cmb2'),
        'id'   => 'statistics_icon',
        'type' => 'file',
    ));

    $cmb->add_group_field($statistics_group_id, array(
        'name' => __('Statistics Title', 'cmb2'),
        'id'   => 'statistics_title',
        'type' => 'text',
    ));

    $cmb->add_group_field($statistics_group_id, array(
        'name' => __('Statistics Content', 'cmb2'),
        'id'   => 'statistics_content',
        'type' => 'textarea',
    ));

    // Repeatable Group: Details
    $group_field_id = $cmb->add_field(array(
        'id'          => 'feature_details_group',
        'type'        => 'group',
        'description' => __('Add multiple details', 'cmb2'),
        'options'     => array(
            'group_title'       => __('Detail {#}', 'cmb2'), // {#} gets replaced by row number
            'add_button'        => __('Add Another Detail', 'cmb2'),
            'remove_button'     => __('Remove Detail', 'cmb2'),
            'sortable'          => true, // Allow reordering
            'closed'         => true, // Start closed by default
        ),
    ));

    // Fields inside the repeatable group for Details
    $cmb->add_group_field($group_field_id, array(
        'name' => __('Detail Title', 'cmb2'),
        'id'   => 'detail_title',
        'type' => 'text',
    ));

    $cmb->add_group_field($group_field_id, array(
        'name' => __('Detail Content', 'cmb2'),
        'id'   => 'detail_content',
        'type' => 'textarea',
    ));

    $cmb->add_group_field($group_field_id, array(
        'name' => __('Detail List', 'cmb2'),
        'id'   => 'detail_list',
        'type' => 'textarea',
        'description' => __('Enter a list of items, one per line', 'cmb2'),
    ));

    $cmb->add_group_field($group_field_id, array(
        'name' => __('Detail Image', 'cmb2'),
        'id'   => 'detail_image',
        'type' => 'file',
    ));
}
