<?php
$tagline    = get_post_meta(get_the_ID(), 'feature_banner_tagline', true);
$title      = get_post_meta(get_the_ID(), 'feature_banner_title', true);
$paragraph  = get_post_meta(get_the_ID(), 'feature_banner_paragraph', true);
$image      = get_post_meta(get_the_ID(), 'feature_banner_image', true); // Assume this returns the URL
$image_id   = attachment_url_to_postid($image);
$alt_text   = get_post_meta($image_id, '_wp_attachment_image_alt', true);
$free_trial = cmb2_get_option( 'happilee-theme-options', 'happilee_free_trial_link', '' );
?>


<section class="container flex gap-10 py-10 mdd:flex-col mdd:py-0 mdd:px-5 mdd:gap-5 items-end">
    <div class="flex w-1/2 lg:flex-1  p-8 gap-6 flex-col mdd:w-full order-2 md:order-1 mdd:p-4 mdd:gap-6
">
        <div class="rounded-[10px] w-max text-20 leading-[22px] text-primary"><?php echo $tagline  ?></div>
        <h1 class="font-semibold text-40 leading-[44px] text-primary"><?php echo $title  ?></h1>
        <p class="text-16 leading-[24px]"><?php echo $paragraph; ?></p>
        <a href="<?= esc_url($free_trial); ?>" class="bg-primary border block w-max border-primary  text-white smd:text-14 text-16 leading-5 font-semibold font-bold py-[10px] px-5 rounded-[20px]">
            Start FREE Trial
        </a>
    </div>
    <div class="w-1/2 lg:w-[480px] py-0 px-4 md:p-8 md:pt-0 relative mdd:w-full order-1 md:order-2">
        <img src="<?php echo $image ?>" alt="<?php echo $alt_text; ?>">
    </div>
</section>