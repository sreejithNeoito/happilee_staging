<?php $highlights = get_post_meta(get_the_ID(), 'industry_highlights_group', true);
if (! empty($highlights)) {
?>
    <section class="px-5 py-10">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 p-8 container bg-white rounded-[40px]">
            <?php
            foreach ($highlights as $highlight) {

                $icon = isset($highlight['highlight_icon']) && !empty($highlight['highlight_icon'])
                    ? $highlight['highlight_icon']
                    : "https://placehold.co/64";
                $highlight_title = $highlight['highlight_title'];
                $highlight_content = $highlight['highlight_content'];
				$highlight_alt = get_post_meta($highlight['highlight_icon_id'], '_wp_attachment_image_alt', true); ?>

                <div class="flex flex-col gap-4">
                    <img src="<?php echo $icon; ?>" class="h-16 w-16" alt="<?= esc_attr($highlight_alt); ?>">
                    <h3 class="text-20 font-semibold leading-6 text-primary"><?php echo $highlight_title; ?></h3>
                    <p class="text-16 leading-6"><?php echo $highlight_content; ?></p>
                </div>
            <?php } ?>
        </div>

    </section>
<?php } ?>