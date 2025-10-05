<?php
add_action('cmb2_admin_init', 'cmb2_partner_metaboxes');

function cmb2_partner_metaboxes()
{
    $cmb = new_cmb2_box(array(
        'id'            => 'become-a-partner',
        'title'         => __('Banner Sections', 'happilee'),
        'object_types'  => array('page'),
        'show_on_cb'    => 'show_on_partner_page',
    ));

    $cmb->add_field(array(
        'name' => __('Banner Title 1', 'happilee'),
        'id'   => 'partner_banner_title_1',
        'type' => 'wysiwyg',
        'options'   => array(
            'textarea_rows' => 4,
            'media_buttons' => false,
            'teeny' => true,
        ),
    ));

    $cmb->add_field(array(
        'name' => __('Banner Title 2', 'happilee'),
        'id'   => 'partner_banner_title_2',
        'type' => 'wysiwyg',
        'options'   => array(
            'textarea_rows' => 4,
            'media_buttons' => false,
            'teeny' => true,
        ),
    ));

    $cmb->add_field(array(
        'name' => __('Banner Short Description', 'happilee'),
        'id'   => 'partner_short_desc',
        'type' => 'wysiwyg',
        'options'   => array(
            'textarea_rows' => 4,
            'media_buttons' => false,
            'teeny' => true,
        ),
    ));
}

add_action('cmb2_admin_init', 'cmb2_partner_section1_metaboxes');

function cmb2_partner_section1_metaboxes()
{
    $cmb = new_cmb2_box(array(
        'id'            => 'happilee_partner_section1',
        'title'         => __('Offerings Section 1', 'happilee'),
        'object_types'  => array('page'),
        'show_on_cb'    => 'show_on_partner_page',
    ));

    $cmb->add_field([
        'name' => __('Section Title', 'happilee'),
        'id'   => 'section_title1',
        'type' => 'text',
        'description' => __('Common for both White Label and API partnership', 'happilee'),
    ]);

    $cmb->add_field([
        'name' => __('Description', 'happilee'),
        'id'   => 'section_description1',
        'type' => 'textarea_small',
        'description' => __('Common for both White Label and API partnership', 'happilee'),
    ]);

    $cmb->add_field([
        'name' => __('Description', 'happilee'),
        'id'   => 'section_description1',
        'type' => 'textarea_small',
        'description' => __('Common for both White Label and API partnership', 'happilee'),
    ]);
    
    $cmb->add_field([
        'name' => __('White Label Partnership Image', 'happilee'),
        'id'   => 'wlp_image1',
        'type' => 'file',
        'description' => __('Upload the White Label Partnership image.', 'happilee'),
    ]);

    $cmb->add_field([
        'name' => __('API Partnership Image', 'happilee'),
        'id'   => 'api_partner_image1',
        'type' => 'file',
        'description' => __('Upload the API Partnership image.', 'happilee'),
    ]);

    $wlp_points = $cmb->add_field(array(
        'id'          => 'partner_offering_points',
        'type'        => 'group',
        'description' => __('Advantages of White Label Partnership', 'happilee'),
        'options'     => array(
            'group_title'   => __('White Label Partnership Feature {#}', 'happilee'),
            'add_button'    => __('Add Feature', 'happilee'),
            'remove_button' => __('Remove Feature', 'happilee'),
            'closed'        => true,
        ),
    ));

    $cmb->add_group_field($wlp_points, array(
        'name' => __('Feature Point', 'happilee'),
        'id'   => 'wlp_feature_point',
        'type' => 'textarea_small',
    ));


    $api_points = $cmb->add_field(array(
        'id'          => 'offering_points_api',
        'type'        => 'group',
        'description' => __('Advantages of API Partnership', 'happilee'),
        'options'     => array(
            'group_title'   => __('API Partnership Feature {#}', 'happilee'),
            'add_button'    => __('Add Feature', 'happilee'),
            'remove_button' => __('Remove Feature', 'happilee'),
            'closed'        => true,
        ),
    ));

    $cmb->add_group_field($api_points, array(
        'name' => __('Feature Point', 'happilee'),
        'id'   => 'api_feature_point',
        'type' => 'textarea_small',
    ));

}

add_action('cmb2_admin_init', 'cmb2_partner_section2_metaboxes');

function cmb2_partner_section2_metaboxes()
{
    $cmb = new_cmb2_box(array(
        'id'            => 'happilee_partner_section2',
        'title'         => __('Offerings Section 2', 'happilee'),
        'object_types'  => array('page'),
        'show_on_cb'    => 'show_on_partner_page',
    ));

    $cmb->add_field([
        'name' => __('Section Title', 'happilee'),
        'id'   => 'section_title2',
        'type' => 'text',
        'description' => __('Common for both White Label and API partnership', 'happilee'),
    ]);

    $cmb->add_field([
        'name' => __('Description', 'happilee'),
        'id'   => 'section_description2',
        'type' => 'textarea_small',
        'description' => __('Common for both White Label and API partnership', 'happilee'),
    ]);

    $cmb->add_field([
        'name' => __('Description', 'happilee'),
        'id'   => 'section_description2',
        'type' => 'textarea_small',
        'description' => __('Common for both White Label and API partnership', 'happilee'),
    ]);
    
    $cmb->add_field([
        'name' => __('White Label Partnership Image', 'happilee'),
        'id'   => 'wlp_image2',
        'type' => 'file',
        'description' => __('Upload the White Label Partnership image.', 'happilee'),
    ]);

    $cmb->add_field([
        'name' => __('API Partnership Image', 'happilee'),
        'id'   => 'api_partner_image2',
        'type' => 'file',
        'description' => __('Upload the API Partnership image.', 'happilee'),
    ]);

    $wlp_points = $cmb->add_field(array(
        'id'          => 'partner_offering_points2',
        'type'        => 'group',
        'description' => __('Advantages of White Label Partnership', 'happilee'),
        'options'     => array(
            'group_title'   => __('White Label Partnership Feature {#}', 'happilee'),
            'add_button'    => __('Add Feature', 'happilee'),
            'remove_button' => __('Remove Feature', 'happilee'),
            'closed'        => true,
        ),
    ));

    $cmb->add_group_field($wlp_points, array(
        'name' => __('Feature Point', 'happilee'),
        'id'   => 'wlp_feature_point2',
        'type' => 'textarea_small',
    ));


    $api_points = $cmb->add_field(array(
        'id'          => 'offering_points_api2',
        'type'        => 'group',
        'description' => __('Advantages of API Partnership', 'happilee'),
        'options'     => array(
            'group_title'   => __('API Partnership Feature {#}', 'happilee'),
            'add_button'    => __('Add Feature', 'happilee'),
            'remove_button' => __('Remove Feature', 'happilee'),
            'closed'        => true,
        ),
    ));

    $cmb->add_group_field($api_points, array(
        'name' => __('Feature Point', 'happilee'),
        'id'   => 'api_feature_point2',
        'type' => 'textarea_small',
    ));

}


add_action('cmb2_admin_init', 'cmb2_partner_section3_metaboxes');

function cmb2_partner_section3_metaboxes()
{
    $cmb = new_cmb2_box(array(
        'id'            => 'happilee_partner_section3',
        'title'         => __('Offerings Section 3', 'happilee'),
        'object_types'  => array('page'),
        'show_on_cb'    => 'show_on_partner_page',
    ));

    $cmb->add_field([
        'name' => __('Section Title', 'happilee'),
        'id'   => 'section_title3',
        'type' => 'text',
        'description' => __('Common for both White Label and API partnership', 'happilee'),
    ]);

    $cmb->add_field([
        'name' => __('Description', 'happilee'),
        'id'   => 'section_description3',
        'type' => 'textarea_small',
        'description' => __('Common for both White Label and API partnership', 'happilee'),
    ]);

    $cmb->add_field([
        'name' => __('Description', 'happilee'),
        'id'   => 'section_description3',
        'type' => 'textarea_small',
        'description' => __('Common for both White Label and API partnership', 'happilee'),
    ]);
    
    $cmb->add_field([
        'name' => __('White Label Partnership Image', 'happilee'),
        'id'   => 'wlp_image3',
        'type' => 'file',
        'description' => __('Upload the White Label Partnership image.', 'happilee'),
    ]);

    $cmb->add_field([
        'name' => __('API Partnership Image', 'happilee'),
        'id'   => 'api_partner_image3',
        'type' => 'file',
        'description' => __('Upload the API Partnership image.', 'happilee'),
    ]);

    $wlp_points = $cmb->add_field(array(
        'id'          => 'partner_offering_points3',
        'type'        => 'group',
        'description' => __('Advantages of White Label Partnership', 'happilee'),
        'options'     => array(
            'group_title'   => __('White Label Partnership Feature {#}', 'happilee'),
            'add_button'    => __('Add Feature', 'happilee'),
            'remove_button' => __('Remove Feature', 'happilee'),
            'closed'        => true,
        ),
    ));

    $cmb->add_group_field($wlp_points, array(
        'name' => __('Feature Point', 'happilee'),
        'id'   => 'wlp_feature_point3',
        'type' => 'textarea_small',
    ));


    $api_points = $cmb->add_field(array(
        'id'          => 'offering_points_api3',
        'type'        => 'group',
        'description' => __('Advantages of API Partnership', 'happilee'),
        'options'     => array(
            'group_title'   => __('API Partnership Feature {#}', 'happilee'),
            'add_button'    => __('Add Feature', 'happilee'),
            'remove_button' => __('Remove Feature', 'happilee'),
            'closed'        => true,
        ),
    ));

    $cmb->add_group_field($api_points, array(
        'name' => __('Feature Point', 'happilee'),
        'id'   => 'api_feature_point3',
        'type' => 'textarea_small',
    ));

}

add_action('cmb2_admin_init', 'cmb2_register_form_metaboxes');

function cmb2_register_form_metaboxes()
{
    $cmb = new_cmb2_box([
        'id'            => 'happilee_partner_form',
        'title'         => __('Register Form Section', 'happilee'),
        'object_types'  => array('page'),
        'show_on_cb'    => 'show_on_partner_page',
    ]);

    $cmb->add_field([
        'name' => __('Section Description', 'happilee'),
        'id'   => 'happilee_form_desc',
        'type' => 'wysiwyg',
        'options'   => array(
            'textarea_rows' => 4,
            'media_buttons' => false,
            'teeny' => true,
        ),
    ]);

    $cmb->add_field([
        'name' => __('Form Shortcode', 'happilee'),
        'id'   => 'form_shortcode',
        'type' => 'text',
        'description' => __('Paste form shortcode here', 'happilee'),
    ]);
}


function show_on_partner_page($cmb)
{
    if (!isset($_GET['post']) && !isset($_POST['post_ID'])) {
        return false;
    }
    $post_id = isset($_GET['post']) ? (int) $_GET['post'] : (int) $_POST['post_ID'];
    if (!$post_id) {
        return false;
    }
    $post = get_post($post_id);
    
    if (!$post) {
        return false;
    }
    return $post->post_name === 'become-a-partner';
}