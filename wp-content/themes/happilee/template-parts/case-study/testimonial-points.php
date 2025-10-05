
<?php
$tstmnl_title       =  get_post_meta(get_the_ID(), 'testimonial_point_title_1', true);
$title_main         =  get_post_meta(get_the_ID(), 'testimonial_point_title_2', true);
$tstmnl_features    =  get_post_meta(get_the_ID(), 'testimonial_group', true);
$feedback_text      =  get_post_meta(get_the_ID(), 'client_feedback_text', true);
$feedback_content   =  get_post_meta(get_the_ID(), 'client_feedback_content', true);
$client_name        =  get_post_meta(get_the_ID(), 'customer_name', true);
$client_desig       =  get_post_meta(get_the_ID(), 'customer_designation', true);
$client_company     =  get_post_meta(get_the_ID(), 'customer_company_name', true);
$tstmnl_feedback    =  get_post_meta(get_the_ID(), 'testimonial_feedback_group', true);

?>
<section class="container flex flex-col gap-6 py-10 px-5">
    <div class="flex flex-col gap-6 p-8 mdd:p-0">
        <h3 class="text-24 font-normal text-primary smd:text-20"><?php echo $tstmnl_title; ?></h3>
        <h2 class="text-40 text-primary font-semibold leading-[44px] smd:text-32 smd:leading-[35px]"><?php echo $title_main; ?></h2>
    </div>
    <div class="grid grid-cols-3 grid-rows-3 gap-6 smd:grid-cols-1 smd:grid-rows-1">
    <?php 
    $feature_count = 0;
    foreach($tstmnl_features as $feature) { 
        if($feature_count >= 3) break; ?>
        <div class="flex flex-col gap-2 bg-[#CCFFCC] p-4 rounded-[10px] smd:row-span-2 smd:col-span-2">
            <?php echo $feature['testi_SVG_icon']; ?>
            <h2 class="text-24 font-semibold text-primary smd:text-20"><?php echo $feature['testimonial_title']; ?></h2>
            <p class="text-16 font-normal"><?php echo $feature['testimonial_description']; ?></p>
        </div>
    <?php 
    $feature_count++;
    } ?>
        
    <div class="row-span-2 col-span-2 bg-[#D4E5F7] rounded-[16px]">
        <div class="flex flex-col gap-6 p-9 ">
            <div class="flex gap-4">
                <svg width="24" height="20" viewBox="0 0 24 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M23.1373 0V3.66013C22.0915 3.79085 21.1983 4.20479 20.4575 4.90196C19.7603 5.59913 19.2157 6.49237 18.8235 7.5817C18.4749 8.62745 18.3007 9.76035 18.3007 10.9804H22.7451V20H13.5948V11.8301C13.5948 9.21569 14.0305 7.08061 14.902 5.42484C15.817 3.76906 16.9935 2.50545 18.4314 1.63399C19.8693 0.762528 21.4379 0.217865 23.1373 0ZM9.47712 0V3.66013C8.47495 3.79085 7.60349 4.20479 6.86274 4.90196C6.16558 5.59913 5.62091 6.49237 5.22876 7.5817C4.88017 8.62745 4.70588 9.76035 4.70588 10.9804H9.15033V20H0V11.8301C0 9.21569 0.43573 7.08061 1.30719 5.42484C2.22222 3.76906 3.39869 2.50545 4.8366 1.63399C6.27451 0.762528 7.82135 0.217865 9.47712 0Z" fill="#0B3966" />
                </svg>
                <h2 class="text-20 font-semibold text-primary"><?php echo $feedback_text; ?></h2>
            </div>
            <p class="text-base italic font-normal"><?php echo $feedback_content; ?></p>

            <div class="flex gap-4">
                <div class="w-[64px] h-[64px] rounded-[10px] bg-[#EFF5FB]"></div>
                <div class="flex flex-col">
                    <div class="text-16 text-primary font-bold"><?php echo $client_name; ?></div>
                    <div class="text-[14px]"><?php echo $client_desig; ?></div>
                    <div class="text-[14px]"><?php echo $client_company; ?></div>
                </div>
            </div>
        </div>
    </div>

    <?php 
    $feedback_count = 0;
    foreach($tstmnl_feedback as $feedback) { 
        if($feedback_count >= 2) break;?>
        <div class="flex flex-col gap-2 bg-[#FFF5C2] p-4 rounded-[16px] smd:row-span-2 smd:col-span-2">
            <?php echo $feedback['feedback_icon_svg']; ?>
            <h2 class="text-32 font-semibold text-primary"><?php echo $feedback['feedback_title']; ?></h2>
            <p class="text-16 font-normal leadding-5"><?php echo $feedback['feedback_description']; ?></p>
        </div>
    <?php 
    $feedback_count++;
    } ?>

    </div>
</section>