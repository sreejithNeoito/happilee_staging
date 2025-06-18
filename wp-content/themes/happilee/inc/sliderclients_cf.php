<?php function my_custom_gallery_metabox()
{



    $home_id = get_page_id_by_path('home');

    add_meta_box(
        'homepage_slider_gallery',
        'Homepage Slider Gallery',
        'render_gallery_metabox',
        'page',
        'normal',
        'high',
        array('id' => $home_id)
    );
}

add_action('add_meta_boxes', 'my_custom_gallery_metabox');

function render_gallery_metabox($post)
{
    // Check if the current page is the "home" page
    $home_page = get_page_by_path('home');
    if ($post->ID !== $home_page->ID) {
        return;
    }



    // Add nonce for security
    wp_nonce_field('gallery_nonce_action', 'gallery_nonce_name');

    // Retrieve existing gallery data
    $gallery_images = get_post_meta($post->ID, '_homepage_slider_gallery', true);
    $gallery_images = !empty($gallery_images) ? explode(',', $gallery_images) : [];

?>
    <div id="gallery-container">
        <ul class="gallery-list">
            <?php foreach ($gallery_images as $image_id): ?>
                <li class="gallery-item">
                    <?php echo wp_get_attachment_image($image_id, 'thumbnail'); ?>
                    <input type="hidden" name="gallery_images[]" value="<?php echo esc_attr($image_id); ?>">
                    <button class="remove-image">Remove</button>
                </li>
            <?php endforeach; ?>
        </ul>
        <button class="button add-gallery-image">Add Image</button>
    </div>
    <script>
        jQuery(document).ready(function($) {
            var mediaUploader;

            $('.add-gallery-image').click(function(e) {
                e.preventDefault();
                if (mediaUploader) {
                    mediaUploader.open();
                    return;
                }
                mediaUploader = wp.media({
                    title: 'Select Images',
                    button: {
                        text: 'Add to Gallery'
                    },
                    multiple: true
                });
                mediaUploader.on('select', function() {
                    var attachments = mediaUploader.state().get('selection').toJSON();
                    $.each(attachments, function(index, attachment) {
                        $('#gallery-container .gallery-list').append(
                            '<li class="gallery-item">' +
                            '<img src="' + attachment.sizes.thumbnail.url + '" />' +
                            '<input type="hidden" name="gallery_images[]" value="' + attachment.id + '">' +
                            '<button class="remove-image">Remove</button>' +
                            '</li>'
                        );
                    });
                });
                mediaUploader.open();
            });

            $(document).on('click', '.remove-image', function(e) {
                e.preventDefault();
                $(this).closest('.gallery-item').remove();
            });
        });
    </script>
    <style>
        .gallery-list {
            list-style: none;
            padding: 0;
        }

        .gallery-item {
            display: inline-block;
            margin: 5px;
            position: relative;
        }

        .remove-image {
            position: absolute;
            top: 0;
            right: 0;
        }
    </style>
<?php
}


function save_gallery_metabox_data($post_id)
{
    // Check nonce
    if (!isset($_POST['gallery_nonce_name']) || !wp_verify_nonce($_POST['gallery_nonce_name'], 'gallery_nonce_action')) {
        return;
    }

    // Save gallery images
    if (isset($_POST['gallery_images'])) {
        $gallery_images = array_map('intval', $_POST['gallery_images']);
        update_post_meta($post_id, '_homepage_slider_gallery', implode(',', $gallery_images));
    } else {
        delete_post_meta($post_id, '_homepage_slider_gallery');
    }
}
add_action('save_post', 'save_gallery_metabox_data');
