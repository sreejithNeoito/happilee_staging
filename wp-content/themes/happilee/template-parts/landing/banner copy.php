<?php
$post_id = get_the_ID();

// Fetch Hero Section Fields
$hero_title = get_post_meta($post_id, 'hero_section_title', true);
$hero_subtitle = get_post_meta($post_id, 'hero_section_subtitle', true);
$hero_small_note = get_post_meta($post_id, 'hero_section_small_note', true);
$hero_image = wp_get_attachment_url(get_post_meta($post_id, 'hero_section_image_id', true));
$hero_buttons = get_post_meta($post_id, 'hero_section_buttons', true);

if ($hero_title || $hero_image): ?>
    <section class="container flex gap-10 py-10 mdd:flex-col mdd:py-0 mdd:px-5 mdd:gap-5 items-end">
        <div class="flex w-1/2 lg:flex-1  p-8 gap-6 flex-col mdd:w-full order-2 md:order-1 mdd:p-4 mdd:gap-6">

            <h1 class="font-semibold line-clamp-3 text-40 leading-[44px] text-primary smd:text-24 smd:leading-[30.46px]"><?php echo esc_html($hero_title); ?></h1>
            <p class="text-20 leading-6 line-clamp-2 smd:line-clamp-3 font-normal text-[#363636]">
                <?php echo esc_html($hero_subtitle); ?>
            </p>

            <div class="flex gap-4">
                <?php foreach ((array) $hero_buttons as $index => $button):
                    if ($index % 2 === 0): ?>
                        <a href="<?php echo esc_url($button['button_link']); ?>" class="bg-transparent border block w-max border-primary  text-primary text-16 smd:text-14 leading-5 font-bold py-[10px] px-5 rounded-[20px]" target="_blank">
                            <?php echo esc_html($button['button_title']); ?>
                        </a>
                    <?php else: ?>
                        <a href="<?php echo esc_url($button['button_link']); ?>" class="bg-primary border block w-max border-primary  text-white smd:text-14 text-16 leading-5  font-bold py-[10px] px-5 rounded-[20px]" target="_blank">
                            <?php echo esc_html($button['button_title']); ?>
                        </a>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
            <div class="text-10 leading-3 text-black"><?php echo esc_html($hero_small_note); ?></small>
            </div>
        </div>

        <div class="w-1/2 lg:w-[480px] py-0 px-4 md:p-8 md:pt-0 relative mdd:w-full mdd:mt-5 mdd:px-0 order-1 md:order-2">
            <?php if ($hero_image): ?>
                <img class=" rounded-[16px]" src="<?php echo esc_url($hero_image); ?>" alt="<?php echo esc_attr($hero_title); ?>">
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>