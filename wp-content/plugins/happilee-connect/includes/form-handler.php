<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

add_shortcode('whatsapp_phone_form', 'wpc_render_form');

function wpc_render_form() {
    ob_start(); ?>
    <form id="wpc-form" class="justify-start items-center gap-2 flex smd:flex-col smd:gap-[10px]">
        <input type="tel" class="shadow appearance-none border rounded-lg w-full py-3 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="phone" name="phone" placeholder="123-456-7890" required>
        <button class="px-[15px] py-[10px] bg-[#1e9933] rounded-[10px] justify-center items-center gap-2.5 flex smd:w-full" type="submit">

            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                <path d="M0.0833333 9.90875C0.0833333 11.6549 0.541667 13.3596 1.4125 14.8611L0 20L5.27917 18.623C6.73333 19.411 8.37083 19.8299 10.0375 19.8299H10.0417C15.5292 19.8299 19.9958 15.3837 20 9.92119C20 7.27499 18.9667 4.78225 17.0875 2.91165C15.2042 1.03277 12.7042 0 10.0417 0C4.55417 0 0.0875 4.44629 0.0833333 9.90875Z" fill="white" />
                <path d="M1.075 9.91788C1.075 11.4894 1.4875 13.0236 2.27125 14.3749L1 19L5.75125 17.7607C7.06 18.4699 8.53375 18.847 10.0338 18.847H10.0375C14.9763 18.847 18.9963 14.8453 19 9.92907C19 7.54749 18.07 5.30402 16.3787 3.62049C14.6837 1.92949 12.4338 1 10.0375 1C5.09875 1 1.07875 5.00166 1.075 9.91788Z" fill="url(#paint0_linear_470_3448)" />
                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.36251 5.43344C7.16251 4.98964 6.95001 4.98134 6.75834 4.97305C6.60001 4.96475 6.42084 4.96475 6.24584 4.96475C6.06667 4.96475 5.77501 5.03111 5.52917 5.30071C5.28334 5.56616 4.59167 6.2132 4.59167 7.528C4.59167 8.84281 5.55417 10.112 5.68751 10.2903C5.82084 10.4687 7.54584 13.2518 10.2708 14.3219C12.5375 15.2136 13 15.0353 13.4917 14.9896C13.9833 14.944 15.0792 14.3426 15.3042 13.7205C15.5292 13.0983 15.5292 12.5633 15.4625 12.4513C15.3958 12.3393 15.2167 12.2729 14.95 12.1402C14.6833 12.0075 13.3625 11.3604 13.1167 11.2692C12.8708 11.1821 12.6917 11.1365 12.5125 11.4019C12.3333 11.6674 11.8208 12.2688 11.6625 12.4471C11.5042 12.6255 11.35 12.6462 11.0792 12.5135C10.8125 12.3808 9.94584 12.0987 8.92084 11.1862C8.12501 10.477 7.58334 9.60183 7.42917 9.33638C7.27084 9.07093 7.41251 8.92576 7.54584 8.79304C7.66667 8.67276 7.81251 8.48196 7.95001 8.32435C8.08334 8.16674 8.12917 8.0589 8.21667 7.88055C8.30417 7.70221 8.26251 7.54459 8.19584 7.41187C8.12084 7.28329 7.60001 5.96019 7.36251 5.43344Z" fill="white" />
                <defs>
                    <linearGradient id="paint0_linear_470_3448" x1="10.0013" y1="18.9719" x2="10.0013" y2="0.974382" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#20B038" />
                        <stop offset="1" stop-color="#60D66A" />
                    </linearGradient>
                </defs>
            </svg>
                <div class="text-white text-16 leading-[20px] font-semibold">Connect!</div>
        </button>
    </form>
    <?php
    return ob_get_clean();
}

function happilee_whatsapp_contact() {
   
    global $wpdb;
    $phone          = isset($_POST['phone']) ? sanitize_text_field($_POST['phone']) : '';
    $country_code   = isset($_POST['country_code']) ? sanitize_text_field($_POST['country_code']) : '';
    $table_name     = $wpdb->prefix . 'happilee_user_data';
    $current_date = current_time('Y-m-d');
    $current_time = current_time('H:i:s');

     // Insert into database
    $result = $wpdb->insert($table_name, [
                'country_code'  => "+".$country_code,
                'phone'         => $phone,
                'created_date'  => $current_date,
                'created_time'  => $current_time,
            ]);
    
    if ($result !== false) {
        wp_send_json_success(['message' => 'Thank you.']);
    } else {
        wp_send_json_error(['message' => "Something went wrong."]);
    }
    wp_die();
}

add_action( 'wp_ajax_happilee_whatsapp_contact', 'happilee_whatsapp_contact' );
add_action( 'wp_ajax_nopriv_happilee_whatsapp_contact', 'happilee_whatsapp_contact' );
