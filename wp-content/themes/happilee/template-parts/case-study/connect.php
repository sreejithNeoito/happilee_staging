
<?php
$book_demo     = cmb2_get_option( 'happilee-theme-options', 'happilee_demo_link', '' );
$free_trial    = cmb2_get_option( 'happilee-theme-options', 'happilee_free_trial_link', '' );
$cnt_title     = get_post_meta(get_the_ID(), 'case_study_cnt_title', true);
$cnt_desc      = get_post_meta(get_the_ID(), 'case_study_cntDesc', true);
?>
<section class="container text-primary py-10 mdd:p-5">
    <div class="flex gap-6 p-8 flex-col items-center justify-center bg-white rounded-[32px] text-center">
        <h2 class="text-25 leading-[26px]"><?php echo $cnt_title; ?></h2>
        <p class="text-16 leading-[18px] text-black"><?php echo $cnt_desc; ?></p>
        <div class="flex gap-4">
        <?php if (!empty($book_demo)) { ?>
            <a href="<?= esc_url($book_demo); ?>" class="bg-transparent border block w-max border-primary  text-primary text-16 smd:text-14 leading-5 font-semibold font-bold py-[10px] px-5 rounded-[20px]">
                Book Demo
            </a>
        <?php } 
        if (!empty($free_trial)) { ?>
            <a href="<?= esc_url($free_trial); ?>" class="bg-primary border block w-max border-primary  text-white text-16 smd:text-14 leading-5 font-semibold font-bold py-[10px] px-5 rounded-[20px]">
                <span class="mdd:hidden">Start</span> FREE Trial
            </a>
        <?php } ?>
        </div>
    </div>
</section>