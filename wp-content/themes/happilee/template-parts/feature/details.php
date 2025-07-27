<?php
$details = get_post_meta(get_the_ID(), 'feature_details_group', true);
if (!empty($details)) :
    foreach ($details as $index => $detail) :
        $flexDirection = $index % 2 == 0 ? 'md:flex-row' : 'md:flex-row-reverse';
		$details_img_id = $detail['detail_image_id'];
        $img_alt = get_post_meta($details_img_id, '_wp_attachment_image_alt', true); ?>
        <section class="container flex lgmd:flex-col py-10 my-10 gap-6 mdd:flex-col mdd:py-5 mdd:my-5 items-start justify-between <?php echo esc_attr($flexDirection); ?>">
            <div class="flex w-1/2 lg:flex-1 p-5 gap-6 flex-col lgmd:w-full lgmd:order-2">
                <h2 class="font-semibold text-32 leading-[35px] text-primary"><?php echo esc_html($detail['detail_title']); ?></h2>
                <p class=" font-main text-20 leading-[21px] font-medium"><?php echo esc_html($detail['detail_content']); ?></p>
                <ul class="flex gap-4 flex-col">
                    <?php
                    $items = explode("\n", $detail['detail_list']);
                    foreach ($items as $item) : ?>
                        <li class="flex items-start">
                            <div class="min-w-[12px] min-h-[4px] rounded-lg bg-black mr-4 mt-[11px]"></div>
                            <div><?php echo $item; ?></div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="w-1/2 md:w-[480px] mdd:order-1 lgmd:w-full relative feature-container">
                <img src="<?php echo esc_url($detail['detail_image']); ?>" alt="<?php echo !empty($img_alt) ? esc_attr($img_alt) : esc_attr($detail['detail_title']); ?>">
            </div>
        </section>
<?php endforeach;
endif; ?>