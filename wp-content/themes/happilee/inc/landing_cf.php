<?php
add_action('cmb2_admin_init', 'register_combined_sections');

function register_combined_sections()
{
    $cmb = new_cmb2_box(array(
        'id'            => 'combined_sections_metabox',
        'title'         => __('Page Sections', 'cmb2'),
        'object_types'  => array('landing'),
    ));

    /**
     * Hero Section
     */
    $cmb->add_field(array(
        'name' => __('Hero Section - Title', 'cmb2'),
        'id'   => 'hero_section_title',
        'type' => 'text',
    ));

    $cmb->add_field(array(
        'name' => __('Hero Section - Subtitle', 'cmb2'),
        'id'   => 'hero_section_subtitle',
        'type' => 'textarea_small',
    ));

    $cmb->add_field(array(
        'name' => __('Hero Section - Small Note', 'cmb2'),
        'id'   => 'hero_section_small_note',
        'type' => 'text',
        'description' => __('Add a small note below the hero content.', 'cmb2'),
    ));

    // Hero Section - Buttons as a group
    $button_group_field_id = $cmb->add_field(array(
        'id'          => 'hero_section_buttons',
        'type'        => 'group',
        'description' => __('Add multiple buttons with title, link, and target.', 'cmb2'),
        'options'     => array(
            'group_title'   => __('Button {#}', 'cmb2'),
            'add_button'    => __('Add Another Button', 'cmb2'),
            'remove_button' => __('Remove Button', 'cmb2'),
            'sortable'      => true,
        ),
    ));

    $cmb->add_group_field($button_group_field_id, array(
        'name' => __('Button Title', 'cmb2'),
        'id'   => 'button_title',
        'type' => 'text',
    ));

    $cmb->add_group_field($button_group_field_id, array(
        'name' => __('Button Link', 'cmb2'),
        'id'   => 'button_link',
        'type' => 'text_url',
    ));

    $cmb->add_field(array(
        'name' => __('Hero Section - Image', 'cmb2'),
        'id'   => 'hero_section_image',
        'type' => 'file',
        'description' => __('Upload the hero section image.', 'cmb2'),
    ));

    /**
     * Features Section
     */
    $features_group_field_id = $cmb->add_field(array(
        'id'          => 'features_section',
        'type'        => 'group',
        'description' => __('Add multiple feature items with image, title, and content.', 'cmb2'),
        'options'     => array(
            'group_title'   => __('Feature {#}', 'cmb2'),
            'add_button'    => __('Add Another Feature', 'cmb2'),
            'remove_button' => __('Remove Feature', 'cmb2'),
            'sortable'      => true,
        ),
    ));

    // Fields for the Features group
    $cmb->add_group_field($features_group_field_id, array(
        'name' => __('Feature Image', 'cmb2'),
        'id'   => 'feature_image',
        'type' => 'file',
    ));

    $cmb->add_group_field($features_group_field_id, array(
        'name' => __('Feature Title', 'cmb2'),
        'id'   => 'feature_title',
        'type' => 'text',
    ));

    $cmb->add_group_field($features_group_field_id, array(
        'name' => __('Feature Content', 'cmb2'),
        'id'   => 'feature_content',
        'type' => 'textarea',
    ));

    /**
     * CTA One Section
     */
    $cmb->add_field(array(
        'name' => __('CTA One - Title', 'cmb2'),
        'id'   => 'cta_one_title',
        'type' => 'text',
    ));

    $cmb->add_field(array(
        'name' => __('CTA One - Description', 'cmb2'),
        'id'   => 'cta_one_description',
        'type' => 'textarea_small',
    ));

    // CTA One Buttons as a group
    $cta_one_button_group_id = $cmb->add_field(array(
        'id'          => 'cta_one_buttons',
        'type'        => 'group',
        'description' => __('Add multiple buttons for CTA One.', 'cmb2'),
        'options'     => array(
            'group_title'   => __('CTA One Button {#}', 'cmb2'),
            'add_button'    => __('Add Another Button', 'cmb2'),
            'remove_button' => __('Remove Button', 'cmb2'),
            'sortable'      => true,
        ),
    ));

    $cmb->add_group_field($cta_one_button_group_id, array(
        'name' => __('Button Title', 'cmb2'),
        'id'   => 'cta_one_button_title',
        'type' => 'text',
    ));

    $cmb->add_group_field($cta_one_button_group_id, array(
        'name' => __('Button Link', 'cmb2'),
        'id'   => 'cta_one_button_link',
        'type' => 'text_url',
    ));


    /**
     * Details Sections (Repeatable Sections)
     */
    $group_field_id = $cmb->add_field(array(
        'id'          => 'details_sections',
        'type'        => 'group',
        'description' => __('Add multiple sections with title, tagline, content, image, and button.', 'cmb2'),
        'options'     => array(
            'group_title'    => __('Section {#}', 'cmb2'), // {#} gets replaced by row number
            'add_button'     => __('Add Another Section', 'cmb2'),
            'remove_button'  => __('Remove Section', 'cmb2'),
            'sortable'       => true, // Allows drag-and-drop sorting
        ),
    ));

    // Fields within the group
    $cmb->add_group_field($group_field_id, array(
        'name' => __('Title', 'cmb2'),
        'id'   => 'section_title',
        'type' => 'text',
    ));

    $cmb->add_group_field($group_field_id, array(
        'name' => __('Tagline', 'cmb2'),
        'id'   => 'section_tagline',
        'type' => 'text',
    ));

    $cmb->add_group_field($group_field_id, array(
        'name' => __('Content', 'cmb2'),
        'id'   => 'section_content',
        'type' => 'textarea',
    ));

    $cmb->add_group_field($group_field_id, array(
        'name' => __('Image', 'cmb2'),
        'id'   => 'section_image',
        'type' => 'file',
    ));

    $cmb->add_group_field($group_field_id, array(
        'name' => __('Button Text', 'cmb2'),
        'id'   => 'section_button_text',
        'type' => 'text',
    ));

    $cmb->add_group_field($group_field_id, array(
        'name' => __('Button URL', 'cmb2'),
        'id'   => 'section_button_url',
        'type' => 'text_url',
    ));

    /**
     * CTA Two Section
     */
    $cmb->add_field(array(
        'name' => __('CTA Two - Title', 'cmb2'),
        'id'   => 'cta_two_title',
        'type' => 'text',
    ));

    $cmb->add_field(array(
        'name' => __('CTA Two - Description', 'cmb2'),
        'id'   => 'cta_two_description',
        'type' => 'textarea_small',
    ));

    // CTA Two Buttons as a group
    $cta_two_button_group_id = $cmb->add_field(array(
        'id'          => 'cta_two_buttons',
        'type'        => 'group',
        'description' => __('Add multiple buttons for CTA Two.', 'cmb2'),
        'options'     => array(
            'group_title'   => __('CTA Two Button {#}', 'cmb2'),
            'add_button'    => __('Add Another Button', 'cmb2'),
            'remove_button' => __('Remove Button', 'cmb2'),
            'sortable'      => true,
        ),
    ));

    $cmb->add_group_field($cta_two_button_group_id, array(
        'name' => __('Button Title', 'cmb2'),
        'id'   => 'cta_two_button_title',
        'type' => 'text',
    ));

    $cmb->add_group_field($cta_two_button_group_id, array(
        'name' => __('Button Link', 'cmb2'),
        'id'   => 'cta_two_button_link',
        'type' => 'text_url',
    ));


    /**
     * Customers Section
     */
    $cmb->add_field(array(
        'name' => __('Customers Section', 'cmb2'),
        'id'   => 'customers_section',
        'type' => 'file_list',
        'description' => __('Upload and select multiple customer images.', 'cmb2'),
        'preview_size' => array(100, 100), // Thumbnail preview size
    ));

    /**
     * FAQ Section
     */
    $cmb->add_field(array(
        'name' => __('FAQ Section - Main Title', 'cmb2'),
        'id'   => 'faq_section_title',
        'type' => 'text',
    ));

    $faq_group_field_id = $cmb->add_field(array(
        'id'          => 'faq_section',
        'type'        => 'group',
        'description' => __('Add multiple FAQs with questions and answers.', 'cmb2'),
        'options'     => array(
            'group_title'   => __('FAQ {#}', 'cmb2'),
            'add_button'    => __('Add Another FAQ', 'cmb2'),
            'remove_button' => __('Remove FAQ', 'cmb2'),
            'sortable'      => true,
        ),
    ));

    $cmb->add_group_field($faq_group_field_id, array(
        'name' => __('Question', 'cmb2'),
        'id'   => 'faq_question',
        'type' => 'text',
    ));

    $cmb->add_group_field($faq_group_field_id, array(
        'name' => __('Answer', 'cmb2'),
        'id'   => 'faq_answer',
        'type' => 'textarea',
    ));
}
