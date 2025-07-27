<?php
 
$book_demo   = cmb2_get_option( 'happilee-theme-options', 'happilee_demo_link', '' );
$free_trial  = cmb2_get_option( 'happilee-theme-options', 'happilee_free_trial_link', '' );

?>

<section class="mdd:p-5">
    <div class="container  text-primary py-10">
        <div class="flex gap-6  p-8 flex-col items-center justify-center bg-white rounded-[40px] text-center">
            <h2 class="text-25 leading-[26px]">Start Delighting <br>
                <b>Your Customers Today!</b>
            </h2>
            <p class="text-16 leading-[18px] text-black">Enhance Customer Engagement, Boost Sales, Increase Customer Satisfaction and Scale Support Effortlessly for your Business with One-stop WhatsApp Automation Solution.</p>
            <div class="flex gap-4">
                <a href="<?= esc_url($book_demo); ?>" class="bg-transparent border block w-max border-primary  text-primary text-16 smd:text-14 leading-5 font-semibold font-bold py-[10px] px-5 rounded-[20px]">
                    Book Demo
                </a>
                <a href="<?= esc_url($free_trial); ?>" class="bg-primary border block w-max border-primary  text-white text-16 smd:text-14 leading-5 font-semibold font-bold py-[10px] px-5 rounded-[20px]">
                    <span class="mdd:hidden">Start</span> FREE Trial
                </a>
            </div>
        </div>
    </div>
</section>