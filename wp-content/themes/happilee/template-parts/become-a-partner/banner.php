<?php
$bnr_title_1 = get_post_meta(get_the_ID(), 'partner_banner_title_1', true);
$bnr_title_2 = get_post_meta(get_the_ID(), 'partner_banner_title_2', true);
$bnr_desc    = get_post_meta(get_the_ID(), 'partner_short_desc', true);
$image       = get_the_post_thumbnail_url(get_the_ID(), 'full');
$alt_text    = get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true);
?>
<section class="container flex gap-6 py-10 mdd:py-0 mdd:flex-col justify-between">
    <div class="flex flex-col w-1/2 p-8 gap-6 mdd:w-full mdd:order-2 mdd:p-4">
        <div class="rounded-[10px] w-max text-24 text-primary font-normal"><?php echo $bnr_title_1; ?></div>
        <h1 class="font-semibold text-40 text-primary leading-[44px]" ><?php echo $bnr_title_2; ?></h1>
        <p class="font-second text-20 leading-7"><?php echo $bnr_desc; ?></p>
        <a href="#" class="w-max px-5 py-[10px] rounded-[24px] bg-primary text-16 text-white font-semibold">Become a Partner</a>
    </div>
    <div class="w-1/2 lg:w-[480px] mdd:w-full mdd:order-1 mdd:p-4">
        <img src="<?php echo $image ?>" alt="<?php echo $alt_text; ?>" loading="eager">
    </div>
</section>