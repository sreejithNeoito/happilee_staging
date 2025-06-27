<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if (!class_exists('WP_List_Table')) {
    require_once ABSPATH . 'wp-admin/includes/class-wp-list-table.php';
}

add_action('admin_init', 'handle_happilee_deletion');

function handle_happilee_deletion() {
    global $wpdb;

    if (!is_admin()) return;
    
    $action   = isset($_GET['action']) ? sanitize_text_field($_GET['action']) : '';
    $action2  = isset($_GET['action2']) ? sanitize_text_field($_GET['action2']) : '';
    $elements = isset($_GET['element']) && is_array($_GET['element']) ? $_GET['element'] : [];

    if (($action === 'delete' || $action2 === 'delete') && is_array($elements) && !empty($elements)) {
        $ids_to_delete = array_map('intval', $elements);
            $placeholders = implode(',', array_fill(0, count($ids_to_delete), '%d'));

            $wpdb->query(
                $wpdb->prepare(
                    "DELETE FROM {$wpdb->prefix}happilee_user_data WHERE id IN ($placeholders)",
                    ...$ids_to_delete
                )
            );

            wp_redirect(admin_url('admin.php?page=happilee-dashboard&deleted=1'));
            exit;
        }
    }

class Happilee_User_List extends WP_List_Table {

    private $table_name;
    private $per_page;

    function __construct($per_page = 25) {
        global $wpdb;

        $this->table_name = $wpdb->prefix . 'happilee_user_data';
        $this->per_page = $per_page;

        parent::__construct([
            'singular' => 'Customer',
            'plural'   => 'Customers',
            'ajax'     => false
        ]);
    }

    function get_columns() {
        return array(
            'cb'            => '<input type="checkbox" />',
            'country_code'  => 'Country Code',
            'phone'         => 'Phone',
            'created_date'  => 'Created Date',
            'created_time'  => 'Created Time',
        );
    }

    function get_sortable_columns() {
        return array(
            'country_code' => ['country_code', false],
            'phone'        => ['phone', false],
            'created_date' => ['created_date', false],
            'created_time' => ['created_time', false],
        );
    }

    function get_bulk_actions() {
        return [
            'delete' => 'Delete'
        ];
    }

    function column_cb($item) {
        return sprintf(
            '<input type="checkbox" name="element[]" value="%s" />',
            $item['id']
        );
    }

    function column_default($item, $column_name) {
        return esc_html($item[$column_name]);
    }

    // Date filter
    
    function extra_tablenav($which) {
        if ($which === 'top') {
            $from_date = isset($_GET['from_date']) ? esc_attr($_GET['from_date']) : '';
            $to_date   = isset($_GET['to_date']) ? esc_attr($_GET['to_date']) : '';

            echo '<div class="alignleft actions">';
            echo '<label for="from_date" class="screen-reader-text">From Date</label>';
            echo '<input type="date" id="from_date" name="from_date" value="' . $from_date . '" placeholder="From Date" />';
            
            echo '<label for="to_date" class="screen-reader-text">To Date</label>';
            echo '<input type="date" id="to_date" name="to_date" value="' . $to_date . '" placeholder="To Date" />';

            submit_button('Filter', '', 'filter_action', false);
            echo '</div>';
        }
    }
    
    function prepare_items() {
        global $wpdb;
        $table_name = $wpdb->prefix . 'happilee_user_data';
        
        $per_page = $this->per_page;
        $current_page = $this->get_pagenum();
        $offset = ($current_page - 1) * $per_page;

        $columns   = array_keys($this->get_columns());
        $orderby   = isset($_GET['orderby']) && in_array($_GET['orderby'], $columns) ? $_GET['orderby'] : 'id';
        $order     = isset($_GET['order']) && in_array(strtoupper($_GET['order']), ['ASC', 'DESC']) ? strtoupper($_GET['order']) : 'ASC';
        $search    = isset($_REQUEST['s']) ? sanitize_text_field($_REQUEST['s']) : '';
        $from_date = isset($_GET['from_date']) ? sanitize_text_field($_GET['from_date']) : '';
        $to_date   = isset($_GET['to_date']) ? sanitize_text_field($_GET['to_date']) : '';


        $where_parts = [];
    
        // Search condition
        if (!empty($search)) {
            $where_parts[] = $wpdb->prepare("(phone LIKE %s OR country_code LIKE %s)", 
                                        '%' . $wpdb->esc_like($search) . '%', 
                                        '%' . $wpdb->esc_like($search) . '%');
        }
    
        // Date filter conditions
        if (!empty($from_date)) {
            $where_parts[] = $wpdb->prepare("created_date >= %s", $from_date);
        }
    
        if (!empty($to_date)) {
            $where_parts[] = $wpdb->prepare("created_date <= %s", $to_date);
        }

        $where = '';
        if (!empty($where_parts)) {
            $where = 'WHERE ' . implode(' AND ', $where_parts);
        }
    
        $total_items = $wpdb->get_var("SELECT COUNT(*) FROM {$this->table_name} $where");

        $query = "SELECT * FROM {$this->table_name} $where ORDER BY $orderby $order LIMIT %d OFFSET %d";
        $prepared_query = $wpdb->prepare($query, $per_page, $offset);

        $this->items = $wpdb->get_results($prepared_query, ARRAY_A);

        $this->_column_headers = [$this->get_columns(), [], $this->get_sortable_columns()];
        $this->set_pagination_args([
            'total_items' => $total_items,
            'per_page'    => $per_page,
            'total_pages' => ceil($total_items / $per_page)
        ]);
    }
}
