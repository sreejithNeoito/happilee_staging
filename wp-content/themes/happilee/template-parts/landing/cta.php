<?php
// Retrieve the custom fields for the current post
$post_id = get_the_ID();


// Fetch CTA One Section
$cta_one_title = get_post_meta($post_id, 'cta_one_title', true);
$cta_one_description = get_post_meta($post_id, 'cta_one_description', true);
$cta_one_buttons = get_post_meta($post_id, 'cta_one_buttons', true); ?>

<!-- CTA One Section -->
<?php if ($cta_one_title): ?>
    <section class="mdd:p-5">
        <div class="container  text-primary py-10">
            <div class="flex gap-6  p-8 flex-col items-center justify-center bg-white rounded-[40px] text-center">
                <h2 class="text-25 leading-[26px]"><?php echo $cta_one_title; ?>
                </h2>
                <p class="text-16 leading-[18px] text-black"><?php echo esc_html($cta_one_description); ?></p>
                <div class="flex gap-4">
                    <?php foreach ((array) $cta_one_buttons as $index => $button):
                        if ($index % 2 === 0): ?>
                            <a href="<?php echo esc_url($button['cta_one_button_link']); ?>" class="bg-transparent border block w-max border-primary  text-primary text-16 smd:text-14 leading-5 font-bold py-[10px] px-5 rounded-[20px]" target="_blank">
                                <?php echo esc_html($button['cta_one_button_title']); ?>
                            </a>
                        <?php else: ?>
                            <a href="<?php echo esc_url($button['cta_one_button_link']); ?>" class="bg-primary border block w-max border-primary  text-white smd:text-14 text-16 leading-5  font-bold py-[10px] px-5 rounded-[20px]" target="_blank">
                                <?php echo esc_html($button['cta_one_button_title']); ?>
                            </a>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>