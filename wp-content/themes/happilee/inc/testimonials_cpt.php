<?php

function create_testimonials_cpt()
{
    $labels = array(
        'name' => __('Testimonials'),
        'singular_name' => __('Testimonial'),
        'menu_name' => __('Testimonials'),
        'all_items' => __('All Testimonials'),
        'add_new' => __('Add New Testimonial'),
        'add_new_item' => __('Add New Testimonial'),
        'edit_item' => __('Edit Testimonial'),
        'new_item' => __('New Testimonial'),
        'view_item' => __('View Testimonial'),
        'search_items' => __('Search Testimonials'),
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => false, // Prevent single page viewing
        'has_archive' => false, // No archive page needed
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_icon' => 'dashicons-testimonial',
    );

    register_post_type('testimonial', $args);
}
add_action('init', 'create_testimonials_cpt');


function add_testimonial_meta_box()
{
    add_meta_box(
        'testimonial_details',
        __('Testimonial Details'),
        'render_testimonial_meta_box',
        'testimonial',
        'normal',
        'default'
    );
}
add_action('add_meta_boxes', 'add_testimonial_meta_box');


function render_testimonial_meta_box($post)
{
    // Get current values if already set
    $youtube_link = get_post_meta($post->ID, '_testimonial_youtube_link', true);
    $name = get_post_meta($post->ID, '_testimonial_name', true);
    $position = get_post_meta($post->ID, '_testimonial_position', true);

    wp_nonce_field('save_testimonial_details', 'testimonial_meta_box_nonce');
?>
    <p>
        <label for="testimonial_youtube_link">YouTube Link:</label><br>
        <input type="url" id="testimonial_youtube_link" name="testimonial_youtube_link" value="<?php echo esc_url($youtube_link); ?>" style="width:100%;" />
    </p>
    <p>
        <label for="testimonial_name">Name:</label><br>
        <input type="text" id="testimonial_name" name="testimonial_name" value="<?php echo esc_attr($name); ?>" style="width:100%;" />
    </p>
    <p>
        <label for="testimonial_position">Position:</label><br>
        <input type="text" id="testimonial_position" name="testimonial_position" value="<?php echo esc_attr($position); ?>" style="width:100%;" />
    </p>
<?php
}

function save_testimonial_details($post_id)
{
    if (!isset($_POST['testimonial_meta_box_nonce']) || !wp_verify_nonce($_POST['testimonial_meta_box_nonce'], 'save_testimonial_details')) {
        return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    if (isset($_POST['testimonial_youtube_link'])) {
        update_post_meta($post_id, '_testimonial_youtube_link', esc_url_raw($_POST['testimonial_youtube_link']));
    }

    if (isset($_POST['testimonial_name'])) {
        update_post_meta($post_id, '_testimonial_name', sanitize_text_field($_POST['testimonial_name']));
    }

    if (isset($_POST['testimonial_position'])) {
        update_post_meta($post_id, '_testimonial_position', sanitize_text_field($_POST['testimonial_position']));
    }
}
add_action('save_post', 'save_testimonial_details');
