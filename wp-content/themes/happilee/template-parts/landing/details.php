<?php
$details = get_post_meta(get_the_ID(), 'details_sections', true);

if (!empty($details)) :
    foreach ($details as $index => $detail) :
        $flexDirection = $index % 2 == 0 ? 'md:flex-row-reverse' : 'md:flex-row'; ?>
        <section class="container flex lgmd:flex-col py-10 my-10 gap-6 mdd:flex-col mdd:py-5 mdd:my-5 items-start justify-between <?php echo esc_attr($flexDirection); ?>">
            <div class="flex w-1/2 lg:flex-1 p-5 gap-6 flex-col lgmd:w-full lgmd:order-2">
                <h3 class="text-24 leading-[26.11px]"><?php echo esc_html($detail['section_tagline']); ?></h3>
                <h2 class="font-semibold text-32 leading-[35px] text-primary"><?php echo esc_html($detail['section_title']); ?></h2>
                <p class="text-16 leading-[18.75px]"><?php echo $detail['section_content']; ?></p>
                <a href="<?php echo esc_url($detail['section_button_url']); ?>" class="bg-transparent border block w-max border-primary  text-primary text-16 leading-5 font-bold py-[10px] px-5 rounded-[20px]">
                    <?php echo esc_html($detail['section_button_text']); ?>
                </a>
            </div>
            <div class="w-1/2 md:w-[480px] mdd:order-1 lgmd:w-full relative feature-container">
                <img class="rounded-3xl" src="<?php echo esc_url($detail['section_image']); ?>" alt="<?php echo esc_attr($detail['section_title']); ?>">
            </div>
        </section>
<?php endforeach;
endif; ?>