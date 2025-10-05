<?php
    $section_desc = get_post_meta(get_the_ID(), 'happilee_form_desc', true);
    $form_shortcode = get_post_meta(get_the_ID(), 'form_shortcode', true);
?>
<section id="register-now" class="mdd:p-5">
    <div class="container  text-primary py-10">
        <div class="flex gap-6 p-8 flex-col lg:flex-row items-start justify-center bg-white rounded-[40px]">
            <div class="w-full lg:w-1/3  space-y-8">
                <h1 class="text-24  font-normal font-main text-primary">
                    Willing to be Partner? <br>
                    <b><span class="text-[#28B53E]">Register</span> to Happilee!</b>
                </h1>
                <p class="text-16 leading-6"><?php echo $section_desc; ?></p>
            </div>
            <div class="w-full lg:w-2/3 happilee-form">
                <?php echo do_shortcode($form_shortcode); ?>
            </div>
        </div>
    </div>
</section>