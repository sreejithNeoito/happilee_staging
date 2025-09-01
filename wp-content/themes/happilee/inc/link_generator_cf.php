<?php
add_action('cmb2_admin_init', 'cmb2_link_generator_metaboxes');

function cmb2_link_generator_metaboxes()
{
    $cmb = new_cmb2_box(array(
        'id'            => 'link_generator_metabox',
        'title'         => __('Banner Sections', 'happilee'),
        'object_types'  => array('page'),
        'show_on_cb'    => function($cmb) {
            global $post;
            return isset($post->post_name) && in_array($post->post_name, [
                'whatsapp-qr-code-generator',
                'free-whatsapp-link-generator'
            ]);
        },
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true,
    ));

    $cmb->add_field(array(
        'name' => __('Banner Title 1', 'happilee'),
        'id'   => 'link_generator_title_1',
        'type' => 'wysiwyg',
        'options'   => array(
            'textarea_rows' => 4,
            'media_buttons' => false,
            'teeny' => true,
        ),
    ));

    $cmb->add_field( array(
        'name' => __('Banner Title 2', 'happilee'),
        'id'   => 'link_generator_title_2',
        'type' => 'wysiwyg',
        'options'   => array(
            'textarea_rows' => 4,
            'media_buttons' => false,
            'teeny' => true,
        ),
    ) );

    $cmb->add_field( array(
        'name' => __('Banner Content', 'happilee'),
        'id'   => 'link_generator_content',
        'type' => 'wysiwyg',
        'options'   => array(
            'textarea_rows' => 4,
            'media_buttons' => false,
            'teeny' => true,
        ),
    ) );
}