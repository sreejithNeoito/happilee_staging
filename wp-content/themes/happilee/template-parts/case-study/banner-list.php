<?php

$bnr_listing = get_post_meta(get_the_ID(), 'caseStudy_bnr_listing', true); 

foreach($bnr_listing as $bnr_list) { ?>
    <section class="container flex py-10 px-5 justify-between mdd:flex-col mdd:gap-5 mdd:py-0">
        <div class="flex w-1/2 mdd:w-full flex-col gap-6 p-8 mdd:order-2 mdd:p-4">
            <h3 class="text-24 font-normal text-primary smd:text-20"><?php echo $bnr_list['caseBnr_list_title_1']; ?></h3>
            <h1 class="font-semibold text-40 leading-[44px] text-primary smd:text-24 smd:leading-[30.46px]"><?php echo $bnr_list['caseBnr_list_title_2']; ?></h1>
            <?php if(!empty($bnr_list['caseBnr_list_description'])) { ?>
                <p><?php echo $bnr_list['caseBnr_list_description']; ?></p>
            <?php } ?>
            <?php if(!empty($bnr_list['caseBnr_book_demo']) || !empty($bnr_list['caseBnr_free_trial'])) { ?>
            <div class="flex gap-4">
                <?php if(!empty($bnr_list['caseBnr_book_demo'])) { ?>
                    <a href="<?php echo $bnr_list['caseBnr_book_demo']; ?>" class="bg-transparent border block w-max border-primary  text-primary text-16 smd:text-14 leading-5 font-semibold font-bold py-[10px] px-5 rounded-[20px]">
                        Book Demo
                    </a>
                <?php } 
                if(!empty($bnr_list['caseBnr_book_demo'])) { ?>
                    <a href="<?php echo $bnr_list['caseBnr_book_demo']; ?>" class="bg-primary border block w-max border-primary  text-white text-16 smd:text-14 leading-5 font-semibold font-bold py-[10px] px-5 rounded-[20px]">
                        <span class="mdd:hidden">Start</span> FREE Trial
                    </a>
                <?php } ?>
            </div>
            <?php } ?>
        </div>
        <div class="w-1/2 mdd:w-full mdd:justify-center lg:w-[480px] mdd:order-1 mdd:mt-5">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img-placeholder-case-study-1.webp" alt="Case Study Banner" loading="lazy">
        </div>
    </section>
<?php } ?>
