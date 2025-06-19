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

    $userListTable = new Happilee_User_List();
    $userListTable->prepare_items();

    echo '<div class="wrap">';
    echo '<h1>' . esc_html__('Happilee User Data', 'happilee-connect') . '</h1>';

    // Export to CSV link
    echo '<a href="' . esc_url(add_query_arg('happilee_export', 'csv')) . '" class="page-title-action">Export to CSV</a>';

    echo '<form method="post">';
    echo '<input type="hidden" name="page" value="' . esc_attr($_REQUEST['page']) . '" />';
    $userListTable->search_box(__('Search Info', 'happilee-connect'), 'happilee-user');
    $userListTable->display();
    echo '</form>';
    echo '</div>';
   
}
add_action('admin_init', 'happilee_export_user_data_to_csv');

function happilee_export_user_data_to_csv() {
    if (isset($_GET['happilee_export']) && $_GET['happilee_export'] === 'csv') {
        if (!current_user_can('manage_options')) {
            wp_die(__('You do not have permission to export data.', 'happilee-connect'));
        }

        // Include the class file if it's not autoloaded
        if (!class_exists('Happilee_User_List')) {
            require_once plugin_dir_path(__FILE__) . 'path-to-your/Happilee_User_List.php';
        }

        $userListTable = new Happilee_User_List();
        $userListTable->prepare_items();
        $items = $userListTable->items;

        if (empty($items)) {
            wp_die(__('No user data to export.', 'happilee-connect'));
        }

        // Set CSV headers
        header('Content-Type: text/csv; charset=utf-8');
        header('Content-Disposition: attachment; filename=happilee-users.csv');
        header('Pragma: no-cache');
        header('Expires: 0');

        $output = fopen('php://output', 'w');

        // Write CSV column headers
        $first_item = reset($items);
        fputcsv($output, array_keys((array) $first_item));

        // Write each row
        foreach ($items as $item) {
            fputcsv($output, (array) $item);
        }

        fclose($output);
        exit;
    }
}
