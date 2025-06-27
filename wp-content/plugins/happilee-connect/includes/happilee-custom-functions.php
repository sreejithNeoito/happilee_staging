<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function happilee_connect_admin_menu() {
    add_menu_page(
        __('Happilee', 'happilee-connect'),
        __('Happilee', 'happilee-connect'),
        'manage_options',
        'happilee-dashboard',
        'happilee_dashboard_page',
        'dashicons-smiley',
        25 
    );
}
add_action('admin_menu', 'happilee_connect_admin_menu');

function happilee_dashboard_page() {
    // Determine number of items per page
    $per_page = isset($_GET['items_per_page']) ? absint($_GET['items_per_page']) : 25;

    // Initialize the custom user list table
    $userListTable = new Happilee_User_List($per_page);
    $userListTable->prepare_items();

    echo '<div class="wrap">';
    echo '<h1>' . esc_html__('Happilee User Data', 'happilee-connect') . '</h1>';

    // Build secure Export to CSV URL with nonce
    $export_url = add_query_arg([
        'happilee_export'           => 'csv',
        'happilee_user_list_nonce'  => wp_create_nonce('happilee_user_list_action'),
    ]);

    echo '<a href="' . esc_url($export_url) . '" class="page-title-action">';
    echo esc_html__('Export to CSV', 'happilee-connect');
    echo '</a>';

    // Start the filter/search form
    echo '<form method="get">';

    // Preserve the current page slug in hidden input
    $page = isset($_REQUEST['page']) ? sanitize_text_field($_REQUEST['page']) : '';
    echo '<input type="hidden" name="page" value="' . esc_attr($page) . '" />';

    // Add nonce field for security (used in form submission)
    wp_nonce_field('happilee_user_list_action', 'happilee_user_list_nonce');

    // Items per page selector
    echo '<label for="items_per_page">' . esc_html__('Items per page:', 'happilee-connect') . '</label> ';
    echo '<select name="items_per_page" id="items_per_page" onchange="this.form.submit();">';
    foreach ([10, 20, 50, 100] as $value) {
        printf(
            '<option value="%1$d"%2$s>%1$d</option>',
            $value,
            selected($per_page, $value, false)
        );
    }
    echo '</select> ';

    // Search field and display user list table
    $userListTable->search_box(__('Search Info', 'happilee-connect'), 'happilee-user');
    $userListTable->display();

    echo '</form>';
    echo '</div>';
}

add_action('admin_init', 'happilee_export_user_data_to_csv');


/**
 * Export user data to CSV.
 *
 * This function handles the export of user data to a CSV file when the appropriate
 * query parameter is set and the user has the necessary permissions.
 */

function happilee_export_user_data_to_csv() {
    if (!isset($_GET['happilee_export']) || $_GET['happilee_export'] !== 'csv') {
        return;
    }

    // Permission check
    if (!current_user_can('manage_options')) {
        wp_die(__('You do not have permission to export data.', 'happilee-connect'));
    }

    // Nonce validation
    if (!isset($_GET['happilee_user_list_nonce']) || !wp_verify_nonce($_GET['happilee_user_list_nonce'], 'happilee_user_list_action')) {
        wp_die(__('Security check failed.', 'happilee-connect'));
    }

    // Include the required class if not autoloaded
    if (!class_exists('Happilee_User_List')) {
        require_once plugin_dir_path(__FILE__) . 'includes/class-happilee-user-list.php'; // Adjust the path
    }

    // Pagination and per_page values
    $paged = isset($_GET['paged']) ? max(1, absint($_GET['paged'])) : 1;
    $per_page = get_user_meta(get_current_user_id(), 'happilee_user_per_page', true);
    $per_page = $per_page ? absint($per_page) : 25;

    // Prepare the user list
    $_REQUEST['paged'] = $paged;
    $_REQUEST['items_per_page'] = $per_page;

    $userListTable = new Happilee_User_List($per_page);
    $userListTable->prepare_items();
    $items = $userListTable->items;

    if (empty($items)) {
        wp_die(__('No user data to export.', 'happilee-connect'));
    }

    // Output CSV headers
    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename=happilee-users.csv');
    header('Pragma: no-cache');
    header('Expires: 0');

    $output = fopen('php://output', 'w');

    // Write header row
    $first_item = reset($items);
    fputcsv($output, array_keys((array) $first_item));

    // Write data rows
    foreach ($items as $item) {
        fputcsv($output, (array) $item);
    }

    fclose($output);
    exit;
}
