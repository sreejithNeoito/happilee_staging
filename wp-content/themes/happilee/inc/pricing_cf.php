<?php
// Register Pricing CPT
$args = [
    'labels' => [
        'name'               => __('Pricing Plans', 'happilee'),
        'singular_name'      => __('Price Plan', 'happilee'),
        'menu_name'          => __('Pricing Plans', 'happilee'),
        'name_admin_bar'     => __('Price Plan', 'happilee'),
        'add_new'            => __('Add New Price Plan', 'happilee'),
        'add_new_item'       => __('Add New Price Plan', 'happilee'),
        'edit_item'          => __('Edit Price Plan', 'happilee'),
        'new_item'           => __('New Price Plan', 'happilee'),
        'view_item'          => __('View Price Plan', 'happilee'),
        'view_items'         => __('View Price Plans', 'happilee'),
        'search_items'       => __('Search Price Plans', 'happilee'),
        'not_found'          => __('No price plans found', 'happilee'),
        'not_found_in_trash' => __('No price plans found in Trash', 'happilee'),
        'all_items'          => __('All Price Plans', 'happilee'),
        'archives'           => __('Price Plan Archives', 'happilee'),
        'insert_into_item'   => __('Insert into price plan', 'happilee'),
        'uploaded_to_this_item' => __('Uploaded to this price plan', 'happilee'),
        'featured_image'     => __('Price Plan Image', 'happilee'),
        'set_featured_image' => __('Set price plan image', 'happilee'),
        'remove_featured_image' => __('Remove price plan image', 'happilee'),
        'use_featured_image' => __('Use as price plan image', 'happilee'),
        'items_list'         => __('Price Plans list', 'happilee'),
        'items_list_navigation' => __('Price Plans list navigation', 'happilee'),
        'filter_items_list'  => __('Filter price plans list', 'happilee'),
    ],
    'public'             => true,
    'has_archive'        => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'menu_position'      => 10,
    'supports'           => ['title', 'page-attributes'],
    'menu_icon'          => 'dashicons-cart',
    'rewrite'            => ['slug' => 'pricing-plan', 'with_front' => false],
    'publicly_queryable' => false,
    'show_in_rest'       => true,
    'hierarchical'       => true,
];

register_post_type('pricing', $args);


// Admin Sorting Scripts
function pricing_cpt_enqueue_admin_sort_script($hook)
{
    global $typenow;
    if ($typenow === 'pricing' && $hook === 'edit.php') {
        wp_enqueue_script('jquery-ui-sortable');
        wp_enqueue_script('pricing-admin-sort', get_template_directory_uri() . '/js/pricing-admin-sort.js', ['jquery', 'jquery-ui-sortable'], null, true);
        wp_localize_script('pricing-admin-sort', 'pricing_sorting', [
            'ajaxurl'  => admin_url('admin-ajax.php'),
            'security' => wp_create_nonce('pricing-sort-nonce'),
        ]);
    }
}
add_action('admin_enqueue_scripts', 'pricing_cpt_enqueue_admin_sort_script');

// Save Sorting Order
function pricing_cpt_save_sorting_order()
{
    check_ajax_referer('pricing-sort-nonce', 'security');
    if (!current_user_can('edit_posts')) wp_send_json_error('Unauthorized access.');
    if (!isset($_POST['order']) || !is_array($_POST['order'])) wp_send_json_error('Invalid data.');

    foreach ($_POST['order'] as $item) {
        wp_update_post([
            'ID'         => intval($item['id']),
            'menu_order' => intval($item['position']),
        ]);
    }
    wp_send_json_success('Sorting updated successfully.');
}
add_action('wp_ajax_save_pricing_order', 'pricing_cpt_save_sorting_order');

// Remove View Link
function remove_view_link_from_pricing_cpt($actions, $post)
{
    if ($post->post_type === 'pricing') unset($actions['view']);
    return $actions;
}
add_filter('post_row_actions', 'remove_view_link_from_pricing_cpt', 10, 2);

// Pricing Metabox
add_action('cmb2_admin_init', 'register_dynamic_pricing_metabox');
function register_dynamic_pricing_metabox()
{
    $cmb = new_cmb2_box([
        'id'            => 'pricing_metabox',
        'title'         => __('Pricing Details', 'happilee'),
        'object_types'  => ['pricing'],
    ]);

    // Basic Plan Info
    $cmb->add_field([
        'name' => 'Plan Name',
        'id'   => 'plan_name',
        'type' => 'text',
    ]);

    $cmb->add_field([
        'name' => 'Plan Description',
        'id'   => 'plan_description',
        'type' => 'textarea',
    ]);

    // User Information
    $cmb->add_field([
        'name' => 'Users Included',
        'id'   => 'users_included',
        'type' => 'text',
    ]);

    $cmb->add_field([
        'name' => 'Additional User Price (INR)',
        'id'   => 'additional_user_price_inr',
        'type' => 'text_money',
        'before_field' => '₹',
    ]);

    $cmb->add_field([
        'name' => 'Additional User Price (USD)',
        'id'   => 'additional_user_price_usd',
        'type' => 'text_money',
        'before_field' => '$',
    ]);

    // Features
    $cmb->add_field([
        'name' => 'Main Feature Title',
        'id'   => 'main_feature_title',
        'type' => 'text',
    ]);

    $features_group_id = $cmb->add_field([
        'id'          => 'features_list',
        'type'        => 'group',
        'description' => __('Add Features', 'happilee'),
        'repeatable'  => true,
        'options'     => [
            'group_title'   => __('Feature {#}', 'happilee'),
            'add_button'    => __('Add Feature', 'happilee'),
            'remove_button' => __('Remove Feature', 'happilee'),
            'sortable'      => true,
        ],
    ]);

    $cmb->add_group_field($features_group_id, [
        'name' => 'Feature Title',
        'id'   => 'feature_title',
        'type' => 'text',
        'sanitization_cb' => 'wp_kses_post',
        'escape_cb'       => 'wp_kses_post',
    ]);

    // Pricing Intervals
    $intervals = ['monthly', 'quarterly', 'half_yearly', 'yearly'];
    foreach ($intervals as $interval) {
        $group_id = $cmb->add_field([
            'id'          => $interval . '_pricing',
            'type'        => 'group',
            'repeatable'  => false,
            'options'     => ['closed' => true],
            'description' => ucfirst(str_replace('_', ' ', $interval)) . ' Pricing',
        ]);

        // Enable/Disable Toggle
        $cmb->add_group_field($group_id, [
            'name'    => 'Enable Price',
            'id'      => 'enable_price',
            'type'    => 'checkbox',
            'default' => false,
        ]);

        // INR Price
        $cmb->add_group_field($group_id, [
            'name'         => 'Price (INR)',
            'id'           => 'inr',
            'type'         => 'text_money',
            'before_field' => '₹',
            'attributes'   => [
                'data-conditional-id'    => 'enable_price',
                'data-conditional-value' => 'on',
            ],
        ]);

        // USD Price
        $cmb->add_group_field($group_id, [
            'name'         => 'Price (USD)',
            'id'           => 'usd',
            'type'         => 'text_money',
            'before_field' => '$',
            'attributes'   => [
                'data-conditional-id'    => 'enable_price',
                'data-conditional-value' => 'on',
            ],
        ]);

        // Custom Text
        $cmb->add_group_field($group_id, [
            'name'         => 'Custom Text',
            'id'           => 'custom_text',
            'type'         => 'text',
            'desc'         => 'Display when price is disabled',
            'attributes'   => [
                'data-conditional-id'    => 'enable_price',
                'data-conditional-value' => 'off',
            ],
        ]);
    }
}

// Get Pricing Data
function get_dynamic_pricing_data()
{
    $pricing_posts = get_posts([
        'post_type'      => 'pricing',
        'posts_per_page' => -1,
        'post_status'    => 'publish',
        'orderby'        => 'menu_order',
        'order'          => 'ASC',
    ]);

    $pricing_data = [];
    $intervals = ['monthly', 'quarterly', 'half_yearly', 'yearly'];

    foreach ($pricing_posts as $post) {
        $plan_data = [
            'id'            => $post->ID,
            'title'         => $post->post_title,
            'name'          => get_post_meta($post->ID, 'plan_name', true),
            'description'   => get_post_meta($post->ID, 'plan_description', true),
            'users_included' => get_post_meta($post->ID, 'users_included', true),
            'additional_user' => [
                'inr' => get_post_meta($post->ID, 'additional_user_price_inr', true),
                'usd' => get_post_meta($post->ID, 'additional_user_price_usd', true),
            ],
            'main_feature'  => get_post_meta($post->ID, 'main_feature_title', true),
            'features'      => [],
        ];

        // Handle features
        $features = get_post_meta($post->ID, 'features_list', true);
        if (is_array($features)) {
            foreach ($features as $feature) {
                $plan_data['features'][] = $feature['feature_title'];
            }
        }

        // Handle pricing intervals
        foreach ($intervals as $interval) {
            $interval_data = get_post_meta($post->ID, $interval . '_pricing', true);
            // print_r($interval_data[0]['enable_price']);

            $plan_data['pricing'][$interval] = [
                'enabled' => isset($interval_data[0]['enable_price']) && $interval_data[0]['enable_price'],
                'inr'         => $interval_data[0]['inr'] ?? '',
                'usd'         => $interval_data[0]['usd'] ?? '',
                'custom_text' => $interval_data[0]['custom_text'] ?? '',
            ];
        }

        $pricing_data[] = $plan_data;
    }

    return rest_ensure_response($pricing_data);
}

// Register REST Route
add_action('rest_api_init', function () {
    register_rest_route('pricing/v1', '/plans', [
        'methods' => 'GET',
        'callback' => 'get_dynamic_pricing_data',
        'permission_callback' => '__return_true',
    ]);
});

// FAQ Metabox (for Pricing Page)
add_action('cmb2_admin_init', 'register_pricing_page_faq');
function register_pricing_page_faq()
{
    if (!isset($_GET['post'])) return;

    $post_id = intval($_GET['post']);
    $post = get_post($post_id);

    if ($post && $post->post_name === 'pricing') {
        $cmb = new_cmb2_box([
            'id'            => 'pricing_faq_metabox',
            'title'         => __('FAQ Section', 'cmb2'),
            'object_types'  => ['page'],
        ]);

        $cmb->add_field([
            'name' => __('FAQ Section Title', 'cmb2'),
            'id'   => 'faq_section_title',
            'type' => 'text',
        ]);

        $faq_group_id = $cmb->add_field([
            'id'          => 'faq_section',
            'type'        => 'group',
            'description' => __('Add FAQs'),
            'options'     => [
                'group_title'   => __('FAQ {#}'),
                'add_button'    => __('Add FAQ'),
                'remove_button' => __('Remove FAQ'),
                'sortable'      => true,
            ],
        ]);

        $cmb->add_group_field($faq_group_id, [
            'name' => 'Question',
            'id'   => 'faq_question',
            'type' => 'text',
        ]);

        $cmb->add_group_field($faq_group_id, [
            'name' => 'Answer',
            'id'   => 'faq_answer',
            'type' => 'textarea',
        ]);
    }
}
