<?php

if (!class_exists('WP_List_Table')) {
    require_once ABSPATH . 'wp-admin/includes/class-wp-list-table.php';
}

class Happilee_User_List extends WP_List_Table {

    private $table_name;

    function __construct() {
        global $wpdb;
        $this->table_name = $wpdb->prefix . 'happilee_user_data';

        parent::__construct([
            'singular' => 'Customer',
            'plural'   => 'Customers',
            'ajax'     => false
        ]);
    }

    function get_columns() {
        return array(
            'cb'            => '<input type="checkbox" />',
            // 'id'            => 'ID',
            'country_code'  => 'Country Code',
            'phone'         => 'Phone',
            'created_date'  => 'Created Date',
            'created_time'  => 'Created Time',
        );
    }

    function get_sortable_columns() {
        return array(
            // 'id'           => ['id', false],
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

    function prepare_items() {
        global $wpdb;
        $table_name = $wpdb->prefix . 'happilee_user_data';
        
        if ((isset($_POST['action']) && $_POST['action'] === 'delete') ||(isset($_POST['action2']) && $_POST['action2'] === 'delete')) {
            
            if (!empty($_POST['element']) && is_array($_POST['element'])) {
                $ids_to_delete = array_map('intval', $_POST['element']);
                $placeholders = implode(',', array_fill(0, count($ids_to_delete), '%d'));

               $result = $wpdb->query(
                    $wpdb->prepare(
                        "DELETE FROM {$this->table_name} WHERE id IN ($placeholders)",
                        ...$ids_to_delete
                    )
                );
  
                // Redirect to avoid form resubmission
                wp_redirect(admin_url('admin.php?page=happilee-dashboard&deleted=1'));
                exit;
            }
        }

        $per_page = 20;
        $current_page = $this->get_pagenum();
        $offset = ($current_page - 1) * $per_page;

        $columns = array_keys($this->get_columns());
        $orderby = isset($_GET['orderby']) && in_array($_GET['orderby'], $columns) ? $_GET['orderby'] : 'id';
        $order = isset($_GET['order']) && in_array(strtoupper($_GET['order']), ['ASC', 'DESC']) ? strtoupper($_GET['order']) : 'ASC';

        $total_items = $wpdb->get_var("SELECT COUNT(*) FROM {$this->table_name}");
        $query = "SELECT * FROM {$this->table_name} ORDER BY $orderby $order LIMIT %d OFFSET %d";
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
