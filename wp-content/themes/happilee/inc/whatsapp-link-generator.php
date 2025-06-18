<?php

add_action('wp_ajax_generate_wa_link', 'wa_generate_link');
add_action('wp_ajax_nopriv_generate_wa_link', 'wa_generate_link');

function wa_generate_link()
{
    $number = preg_replace('/\D/', '', $_POST['number']);
    $message = urlencode(trim($_POST['message'] ?? ''));

    if (!$number) {
        wp_send_json_error(['message' => 'Invalid number']);
    }

    $link = "https://wa.me/{$number}" . ($message ? "?text={$message}" : "");

    // Instead of Google Chart API
    $qr_url = "https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=" . urlencode($link);


    wp_send_json_success([
        'link' => $link,
        'qr' => $qr_url
    ]);
}
