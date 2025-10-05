<?php
$aboutTitle   = get_post_meta(get_the_ID(), 'case_study_aboutTitle', true);
$aboutContent = get_post_meta(get_the_ID(), 'case_study_aboutDesc', true);
?>

<section class="container py-10 px-5">
    <div class="flex flex-col gap-6 bg-white p-8 rounded-[32px]">
        <h3 class="text-24 text-primary font-bold text-center"><?php echo $aboutTitle; ?></h3>
        <p class="text-16 font-normal text-center"><?php echo $aboutContent; ?></p>
    </div>
</section>