<?php
$about_title    = get_post_meta(get_the_ID(), 'case_study_aboutTitle_2', true);
$about_desc     = get_post_meta(get_the_ID(), 'case_study_aboutDesc_2', true);
$about_details  = get_post_meta(get_the_ID(), 'caseStudy_about_group', true);
$learn_more     = get_post_meta(get_the_ID(), 'caseStudy_learn_more', true);
$about_img      = get_post_meta(get_the_ID(), 'case_about_img', true);
$img_id         = attachment_url_to_postid($about_img);
$img_alt        = get_post_meta($img_id, '_wp_attachment_image_alt', true);
$alt_text       = !empty($img_alt) ? $img_alt : 'About Image';
?>

<section class="container py-10 px-5">
    <div class="flex mdd:flex-col p-4 gap-4 mdd:p-0">
        <div class="w-1/2 flex flex-col gap-6 mdd:w-full mdd:order-2">
            <h2 class="text-32 text-primary font-semibold"><?php echo $about_title; ?></h2>
            <p class="text-16 font-normal"><?php echo $about_desc; ?></p>
            <div class="flex flex-col gap-4">
            <?php 
            $counter = 0;
            foreach($about_details as $about_detail) { 
                if($counter >= 4) break; ?>
                <div class="flex gap-4">
                    <?php echo $about_detail['caseStudy_about_group_icon']; ?>
                    <div class="flex flex-col text-16 leading-6">
                        <p class="font-bold"><?php echo $about_detail['caseStudy_about_group_title']; ?></p>
                        <p class="font-normal"><?php echo $about_detail['caseStudy_about_group_content']; ?></p>
                    </div>
                </div>
            <?php
            $counter++;
            } ?>  
            </div>
            <?php if(!empty($learn_more)) { ?>
                <a href="<?php echo $learn_more; ?>" class="bg-transparent border block w-max border-primary text-primary text-16 leading-5 font-semibold py-[8px] px-3 rounded-[24px]"><span class="px-2">Learn more</span></a>
            <?php } ?>
        </div>
        <div class="w-1/2 mdd:w-full mdd:mb-[10px] mdd:justify-center flex gap-6 justify-end mdd:order-1">
            <img src="<?php echo $about_img; ?>" alt="<?php echo esc_attr($alt_text); ?>" loading="lazy">
        </div>
    </div>
</section>