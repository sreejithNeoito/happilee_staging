<?php
/**
 * Custom Metaboxes and Fields for Case Study Post Type
 *
 * This file contains the code to create custom metaboxes and fields for the Case Study post type using the CMB2 library.
 *
 * @package happilee
 */

function cmb2_caseStudy_bnrList()
{
    $cmb = new_cmb2_box(array(
        'id'            => 'case_study_bnrList',
        'title'         => __('Banner Section', 'happilee'),
        'object_types'  => array('case_study'),
    ));

    $caseStudy_bnr_group = $cmb->add_field( array(
		'id'             => 'caseStudy_bnr_listing',
		'type'           => 'group',
		'repeatable'     =>  true,
		'options'        => array(
			'group_title'   => 'Banner {#}',
			'add_button'    => 'Add Another Banner',
			'remove_button' => 'Remove Bnner',
			'closed'        => true,
			'sortable'      => true,
		),
	) );

    $cmb->add_group_field( $caseStudy_bnr_group, array(
		'name'      => __('Title 1', 'happilee'),
		'id'        => 'caseBnr_list_title_1',
		'type'      => 'text'
	) );

    $cmb->add_group_field( $caseStudy_bnr_group, array(
		'name'      => __('Title 2', 'happilee'),
		'id'        => 'caseBnr_list_title_2',
		'type'      => 'wysiwyg',
        'options'   => array(
            'textarea_rows' => 4,
            'media_buttons' => false,
            'teeny' => true,
        ),
	) );

    $cmb->add_group_field( $caseStudy_bnr_group, array(
        'name' => __('Short Description', 'happilee'),
        'id'   => 'caseBnr_list_description',
        'type' => 'wysiwyg',
        'options'   => array(
            'textarea_rows' => 4,
            'media_buttons' => false,
            'teeny' => true,
        ),
    ) );

    $cmb->add_group_field( $caseStudy_bnr_group, array(
		'name'      => __('Book Demo Link', 'happilee'),
		'id'        => 'caseBnr_book_demo',
		'type'      => 'text'
	) );

    $cmb->add_group_field( $caseStudy_bnr_group, array(
		'name'      => __('Free Trial Link', 'happilee'),
		'id'        => 'caseBnr_free_trial',
		'type'      => 'text'
	) );
}
add_action('cmb2_admin_init', 'cmb2_caseStudy_bnrList');

function cmb2_caseStudy_statistic()
{
    $cmb = new_cmb2_box(array(
        'id'            => 'case_study_statistic',
        'title'         => __('Statistic Section', 'happilee'),
        'object_types'  => array('case_study'),
    ));

    $statistics_group = $cmb->add_field(array(
        'id'          => 'case_study_static_group',
        'type'        => 'group',
        'options'     => array(
            'group_title'       => __('Statistic {#}', 'happilee'),
            'add_button'        => __('Add Another Statistic', 'happilee'),
            'remove_button'     => __('Remove Statistic', 'happilee'),
            'sortable'          => true,
            'closed'         => true,
        ),
    ));

    $cmb->add_group_field($statistics_group, array(
        'name' => __('Icon Image', 'happilee'),
        'id'   => 'case_study_statIcon',
        'type' => 'file',
    ));

    $cmb->add_group_field($statistics_group, array(
        'name' => __('Statistics Value', 'happilee'),
        'id'   => 'case_study_statValue',
        'type' => 'text',
    ));

    $cmb->add_group_field($statistics_group, array(
        'name' => __('Statistics Content', 'happilee'),
        'id'   => 'case_study_statContent',
        'type' => 'text',
    ));

}
add_action('cmb2_admin_init', 'cmb2_caseStudy_statistic');

function cmb2_caseStudy_testimonialPoints()
{
    $cmb = new_cmb2_box(array(
        'id'            => 'case_study_testimonial',
        'title'         => __('Testimonial Points', 'happilee'),
        'object_types'  => array('case_study'),
    ));

    $cmb->add_field(array(
        'name' => __('Title 1', 'happilee'),
        'id'   => 'testimonial_point_title_1',
        'type' => 'text',
    ));

    $cmb->add_field( array(
        'name' => __('Title 2', 'happilee'),
        'id'   => 'testimonial_point_title_2',
        'type' => 'wysiwyg',
        'options'   => array(
            'textarea_rows' => 4,
            'media_buttons' => false,
            'teeny' => true,
        ),
    ) );

    $testimonial_group = $cmb->add_field( array(
		'id'             => 'testimonial_group',
		'type'           => 'group',
        'name'           => __('Customer Feedback Features', 'happilee'),
        'desc'           => __('Features points on top side of the customer feedback section', 'happilee'),
		'repeatable'     =>  true,
		'options'        => array(
			'group_title'   => 'Feature {#}',
			'add_button'    => 'Add Point',
			'remove_button' => 'Remove Point',
			'closed'        => true,
			'sortable'      => true,
		),
	) );

    $cmb->add_group_field($testimonial_group, array(
        'name'            => __('Icon', 'happilee'),
        'id'              => 'testi_SVG_icon',
        'type'            => 'textarea_small',
        'sanitization_cb' => false, // Disable sanitization to preserve SVG code
        'escape_cb'       => false,
    ));

    $cmb->add_group_field($testimonial_group, array(
        'name' => __('Title', 'happilee'),
        'id'   => 'testimonial_title',
        'type' => 'text',
    ));

    $cmb->add_group_field($testimonial_group, array(
        'name' => __('Description', 'happilee'),
        'id'   => 'testimonial_description',
        'type' => 'text',
    ));

    $cmb->add_field(array(
        'name' => __('Feedback Title', 'happilee'),
        'id'   => 'client_feedback_text',
        'type' => 'text',
    ));

    $cmb->add_field(array(
        'name' => __('Feedback Content', 'happilee'),
        'id'   => 'client_feedback_content',
        'type' => 'wysiwyg',
        'options'   => array(
            'textarea_rows' => 5,
            'media_buttons' => false,
            'teeny' => true,
        ),
    ));

    $cmb->add_field(array(
        'name' => __('Client Name', 'happilee'),
        'id'   => 'customer_name',
        'type' => 'text',
    ));

    $cmb->add_field(array(
        'name' => __('Client Designation', 'happilee'),
        'id'   => 'customer_designation',
        'type' => 'text',
    ));

    $cmb->add_field(array(
        'name' => __('Company Name', 'happilee'),
        'id'   => 'customer_company_name',
        'type' => 'text',
    ));

    $cmb->add_field(array(
        'name' => __('Client Image', 'happilee'),
        'id'   => 'customer_image',
        'type' => 'file',
    ));

    $testimonial_feedback = $cmb->add_field( array(
        'id'          => 'testimonial_feedback_group',
        'name'        => __('Customer Feedback Features', 'happilee'),
        'desc'        => __('Features points on right side of the customer feedback section', 'happilee'),
        'type'        => 'group',
        'repeatable'  => true,
        'options'     => array(
            'group_title'   => __('Feature {#}', 'happilee'),
            'add_button'    => __('Add Feature', 'happilee'),
            'remove_button' => __('Remove Feature', 'happilee'),
            'closed'        => true,
            'sortable'      => true,
            'limit'         => 6,
        ),
    ) );

    $cmb->add_group_field( $testimonial_feedback, array(
        'name' => __('Icon', 'happilee'),
        'desc' => __('Paste SVG code for the feature icon', 'happilee'),
        'id'   => 'feedback_icon_svg',
        'type'            => 'textarea_small',
        'sanitization_cb' => false,
        'escape_cb'       => false,
    ) );

    $cmb->add_group_field( $testimonial_feedback, array(
        'name' => __('Title', 'happilee'),
        'id'   => 'feedback_title',
        'type' => 'text',
    ) );

    $cmb->add_group_field( $testimonial_feedback, array(
        'name'    => __('Description', 'happilee'),
        'id'      => 'feedback_description',
        'type'    => 'text',
        'options' => array(
            'textarea_rows' => 3,
        ),
    ) );

}
add_action('cmb2_admin_init', 'cmb2_caseStudy_testimonialPoints');

function cmb2_caseStudy_mediaSection()
{
    $cmb = new_cmb2_box(array(
        'id'            => 'case_study_mediaPoint',
        'title'         => __('Media Section', 'happilee'),
        'object_types'  => array('case_study'),
    ));

    $caseStudy_media_group = $cmb->add_field( array(
		'id'             => 'caseStudy_media_group',
		'type'           => 'group',
		'repeatable'     =>  true,
		'options'        => array(
			'group_title'   => 'Media Section {#}',
			'add_button'    => 'Add Media Section',
			'remove_button' => 'Remove Media Section',
			'closed'        => true,
			'sortable'      => true,
		),
	) );

    $cmb->add_group_field($caseStudy_media_group, array(
        'name' => __('Title', 'happilee'),
        'id'   => 'case_study_media_title',
        'type' => 'text',
    ));

    $cmb->add_group_field($caseStudy_media_group, array(
        'name'         => 'Media File',
        'desc'         => 'Upload image or video',
        'id'           => 'case_study_media_file',
        'type'         => 'file',
        'options'      => array(
            'url' => false,
        ),
        'text'         => array(
            'add_upload_file_text' => 'Add Media File'
        ),
        'query_args'   => array(
            'type' => array(
                'image/jpeg',
                'image/jpg',
                'image/png',
                'image/gif',
                'image/webp',
                'video/mp4',
                'video/webm',
                'video/ogg',
                'video/avi',
                'video/mov'
            )
        ),
    ));

    $cmb->add_group_field($caseStudy_media_group, array(
        'name' => __('Description', 'happilee'),
        'id'   => 'case_study_media_description',
        'type' => 'textarea',
        'type'    => 'textarea',
    ));

}
add_action('cmb2_admin_init', 'cmb2_caseStudy_mediaSection');

function cmb2_caseStudy_aboutSection()
{  
    $cmb = new_cmb2_box(array(
        'id'            => 'case_study_aboutClient',
        'title'         => __('About Section', 'happilee'),
        'object_types'  => array('case_study'),
    ));

    $cmb->add_field(array(
        'name' => __('Title', 'happilee'),
        'id'   => 'case_study_aboutTitle',
        'type' => 'text',
    ));

    $cmb->add_field(array(
        'name' => __('Description', 'happilee'),
        'id'   => 'case_study_aboutDesc',
        'type' => 'textarea',
    ));
}
add_action('cmb2_admin_init', 'cmb2_caseStudy_aboutSection');

function cmb2_caseStudy_connect()
{
    $cmb = new_cmb2_box(array(
        'id'            => 'case_study_connect',
        'title'         => __('Connect with Happilee Section', 'happilee'),
        'object_types'  => array('case_study'),
    ));

    $cmb->add_field(array(
        'name' => __('Title', 'happilee'),
        'id'   => 'case_study_cnt_title',
        'type' => 'textarea_small',
    ));

    $cmb->add_field(array(
        'name' => __('Description', 'happilee'),
        'id'   => 'case_study_cntDesc',
        'type' => 'textarea_small',
    ));
}
add_action('cmb2_admin_init', 'cmb2_caseStudy_connect');

function cmb2_caseStudy_aboutTwocolumn()
{

    $cmb = new_cmb2_box(array(
        'id'            => 'case_study_aboutTwocolumn',
        'title'         => __('About Section (Two Column)', 'happilee'),
        'object_types'  => array('case_study'),
    ));

    $cmb->add_field(array(
        'name' => __('Title', 'happilee'),
        'id'   => 'case_study_aboutTitle_2',
        'type' => 'text',
    ));

    $cmb->add_field(array(
        'name' => __('Description', 'happilee'),
        'id'   => 'case_study_aboutDesc_2',
        'type' => 'textarea',
    ));
    
    $caseStudy_aboutGroup = $cmb->add_field( array(
		'id'             => 'caseStudy_about_group',
		'type'           => 'group',
		'repeatable'     =>  true,
		'options'        => array(
			'group_title'   => 'About Details {#}',
			'add_button'    => 'Add Details',
			'remove_button' => 'Remove Details',
			'closed'        => true,
			'sortable'      => true,
		),
	) );

    $cmb->add_group_field($caseStudy_aboutGroup, array(
        'name' => __('Icon', 'happilee'),
        'id'   => 'caseStudy_about_group_icon',
        'type'            => 'textarea_small',
        'sanitization_cb' => false,
        'escape_cb'       => false,
    ));

    $cmb->add_group_field($caseStudy_aboutGroup, array(
        'name' => __('Title', 'happilee'),
        'id'   => 'caseStudy_about_group_title',
        'type' => 'text',
    ));

    $cmb->add_group_field($caseStudy_aboutGroup, array(
        'name' => __('Content', 'happilee'),
        'id'   => 'caseStudy_about_group_content',
        'type' => 'text',
    ));

    $cmb->add_field(array(
        'name' => __('Learn More Link', 'happilee'),
        'id'   => 'caseStudy_learn_more',
        'type' => 'text',
    ));

    $cmb->add_field(array(
        'name' => __('About Image', 'happilee'),
        'id'   => 'case_about_img',
        'type' => 'file',
    ));

}
add_action('cmb2_admin_init', 'cmb2_caseStudy_aboutTwocolumn');

function caseStudy_order_sections_metabox() {
    $cmb = new_cmb2_box([
        'id'           => 'case_study_sections_order',
        'title'        => __('Case Study Sections - Frontend Order & Visibility','happilee'),
        'object_types'  => array('case_study'),
    ]);
    
    $group_field = $cmb->add_field([
        'id'          => 'case_study_sections',
        'type'        => 'group',
        'description' => 'Drag to reorder sections. Only enabled sections will appear on the frontend.',
        'options'     => [
            'group_title'       => 'Section {#}',
            'add_button'        => 'Add Section',
            'remove_button'     => 'Remove Section',
            'sortable'          => true,
            'closed'            => true,
            'remove_confirm'    => true,
        ],
    ]);
    
    $cmb->add_group_field($group_field, [
        'name'             => 'Section Type',
        'id'               => 'section_type',
        'type'             => 'select',
        'show_option_none' => '-- Select Section --',
        'options'          => [
            'about_client'       => 'About Client',
            'about_two_column'   => 'About Two Column',
            'connect'            => 'Connect',
            'banner'             => 'Banner',
            'media_block'        => 'Media Block',
            'slider'             => 'Slider',
            'stats'              => 'Statistic',
            'testimonial_points' => 'Testimonial Points',
            
        ],
    ]);
    
    $cmb->add_group_field($group_field, [
        'name' => 'Enable Section',
        'id'   => 'enabled',
        'type' => 'checkbox',
        'desc' => 'Check to display this section on the frontend',
    ]);
}
add_action('cmb2_admin_init', 'caseStudy_order_sections_metabox');