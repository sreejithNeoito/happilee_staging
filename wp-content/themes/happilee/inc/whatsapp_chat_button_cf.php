<?php
add_action('cmb2_admin_init', 'cmb2_chat_button_metaboxes');

function cmb2_chat_button_metaboxes()
{
    $cmb = new_cmb2_box(array(
        'id'            => 'chat_button_metabox',
        'title'         => __('Banner Sections', 'happilee'),
        'object_types'  => array('page'),
        'show_on_cb'    => function($cmb) {
            global $post;
            return isset($post->post_name) && in_array($post->post_name, ['whatsapp-chat-button-widget']);
        },
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true,
    ));

    $cmb->add_field(array(
        'name' => __('Banner Title 1', 'happilee'),
        'id'   => 'chat_button_title_1',
        'type' => 'wysiwyg',
        'options'   => array(
            'textarea_rows' => 4,
            'media_buttons' => false,
            'teeny' => true,
        ),
    ));

    $cmb->add_field( array(
        'name' => __('Banner Title 2', 'happilee'),
        'id'   => 'chat_button_title_2',
        'type' => 'wysiwyg',
        'options'   => array(
            'textarea_rows' => 4,
            'media_buttons' => false,
            'teeny' => true,
        ),
    ) );

    $cmb->add_field( array(
        'name' => __('Banner Content', 'happilee'),
        'id'   => 'chat_button_content',
        'type' => 'wysiwyg',
        'options'   => array(
            'textarea_rows' => 4,
            'media_buttons' => false,
            'teeny' => true,
        ),
    ) );
}