<?php 
	$gallery_images = get_post_meta(get_option('page_on_front'), '_homepage_slider_gallery', true);
	$integration_title   = get_post_meta(get_option('page_on_front'), '_gallery_description', true );
if ($gallery_images): ?>
    <section class="container py-10 mdd:px-5">
        <?php
// 		<div class="text-24 text-primary font-main leading-6 mdd:leading-[26px] text-center pb-8">Trusted by <span class=" font-bold text-secondary">1600+ Customers</span> across the Globe</div> 
		?>
		<div class="text-24 text-primary font-main leading-6 mdd:leading-[26px] text-center pb-8"><?= $integration_title; ?></div>
        <div class="happileeclients-container relative">
            <div class="happileeclients owl-carousel owl-theme">
                <?php
                $gallery_images = explode(',', $gallery_images);
                foreach ($gallery_images as $image_id):
                    $image_url = wp_get_attachment_image_url($image_id, 'full'); 
					$alt_text  = get_post_meta($image_id, '_wp_attachment_image_alt', true); ?>
                    <img src="<?php echo esc_url($image_url) ?>" alt="<?= esc_attr($alt_text); ?>" class="bg-transparent w-full">
                <?php
                endforeach;
                ?>
            </div>
        </div>
    </section>
<?php endif; ?>