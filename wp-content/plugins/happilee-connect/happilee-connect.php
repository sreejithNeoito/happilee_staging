<?php
/**
 * Plugin Name: Happilee Connect
 * Plugin Slug: happilee-connect
 * Plugin URI: https://happilee.io/
 * Description: Connect happilee customers.
 * Author: Sreejith
 * Author URI: https://happilee.io/
 * Version: 1.0.0
 * Text Domain: happilee-connect
 * License: GNU General Public License v3.0
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if(! defined( 'HAPPILE_VERSION' )){
    define( 'HAPPILE_VERSION', '1.0' );
    define('HAPPILE_PLUGIN_NAME',plugin_basename(dirname(__FILE__, 1)));
    define('HAPPILE_PLUGIN_DIR',WP_PLUGIN_DIR . '/' . HAPPILE_PLUGIN_NAME);
}

require_once (HAPPILE_PLUGIN_DIR . '/includes/happilee-custom-functions.php');
require_once (HAPPILE_PLUGIN_DIR . '/includes/form-handler.php');
require_once (HAPPILE_PLUGIN_DIR . '/includes/happilee-list-table.php');

function happilee_frontend_scripts(){

	wp_register_script('happilee-custom-js', plugins_url('assets/js/custom.js', __FILE__), array('jquery'), HAPPILE_VERSION, false);

     // Localize script with AJAX URL or other variables
    wp_localize_script('happilee-custom-js', 'hpl_ajax_object', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce'    => wp_create_nonce('hpl_ajax_nonce')
    ));
	wp_enqueue_script('happilee-custom-js');
	
}
add_action('wp_enqueue_scripts', 'happilee_frontend_scripts');


// function hpl_con_ajaxurl() {
// 	echo '<script type="text/javascript">
//            var ajaxurl = "' . admin_url('admin-ajax.php') . '";
//          </script>';
// }
// add_action('wp_head', 'hpl_con_ajaxurl');

register_activation_hook(__FILE__, 'happilee_create_table');

function happilee_create_table() {
    global $wpdb;

    $table_name = $wpdb->prefix . 'happilee_user_data';
    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE IF NOT EXISTS $table_name (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        country_code varchar(10) NOT NULL,
        phone varchar(20) NOT NULL,
        created_date DATE DEFAULT (CURRENT_DATE) NOT NULL,
        created_time TIME DEFAULT (CURRENT_TIME) NOT NULL,
        PRIMARY KEY  (id)
    ) $charset_collate;";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}
