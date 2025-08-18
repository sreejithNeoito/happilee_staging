<section class="container flex gap-10 py-10 mdd:flex-col mdd:py-0 mdd:px-5 mdd:gap-5 items-end">
    <div class="flex w-1/2 lg:flex-1 p-8 gap-6 flex-col mdd:w-full order-2 md:order-1 mdd:p-4 mdd:gap-6">
        <div class="rounded-[10px] w-max text-20 leading-[22px] text-primary">WhatsApp Link <b>Generator</b></div>
        <h1 class="font-semibold text-40 leading-[44px] text-primary">One-click WhatsApp chat links for your social media pages</h1>
        <p class="text-16 leading-[24px]">Make it easy for your followers to reach you on WhatsApp with one-click chat links. Add them to your Instagram, Facebook, or any social profile.</p>
    </div>
    <div class="w-1/2 lg:w-[480px] py-0 px-4 md:p-8 md:pt-0 relative mdd:w-full order-1 md:order-2">
        <?php 
        if (has_post_thumbnail()): 
            $featured_image_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); 
			$post_thumbnail_id  = get_post_thumbnail_id(get_the_ID()); 
			$alt_text = get_post_meta($post_thumbnail_id, '_wp_attachment_image_alt', true) ?: get_the_title(); ?>
        <img src="<?= $featured_image_url; ?>" alt="<?= esc_attr($alt_text); ?>" loading="eager">
        <?php endif; ?>
    </div>
</section>