<?php 
    $home_page_id           = get_option('page_on_front');
    $free_trial             = cmb2_get_option( 'happilee-theme-options', 'happilee_free_trial_link', '' ); 
    $home_featuer_title     = get_post_meta($home_page_id, 'happilee_automation_title', true);
    $home_features_data     = get_post_meta($home_page_id, 'home_features_id', true);
 ?>
<section>
    <div class="container features-header pt-5 mt-5 ">
        <h2 class="text-center text-24 leading-[26px] text-primary mb-6 mdd:px-5"><?= nl2br($home_featuer_title); ?></h2>

    </div>

    <div class="flex gap-4 items-center features-happilee pb-5 mb-5">

    <?php foreach($home_features_data as $home_features): ?>
        <a href="<?= $home_features['happilee_automation_svg_url']?>" class="flex flex-col items-center justify-center rounded-xl p-4 gap-2 bg-white hover:bg-bg-footer cursor-pointer scroll-to">
            <?= $home_features['happilee_automation_svg']; ?>
            <div class="text-16 font-medium font-second leadin-[20] whitespace-nowrap"><?= $home_features['feature_title']; ?></div>
        </a>
    <?php endforeach; ?>
    </div>



    <!-- feature -->

    <div id="feat-one" class="container flex lgmd:flex-col py-10 gap-6 mdd:flex-col mdd:py-5  items-start">
        <div class="w-1/2 md:w-[480px]
 mdd:order-1 lgmd:w-full relative feature-container items-start">
            <img data-aos="zoom-in" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/features/1/feat-1.webp" alt="Happilee Chatbot Builder" class="relative bg-transparent z-10 w-full feat-image">
            <div class="w-[468px] h-[480px] feature relative">
                <div class="w-[320px] h-[200px] bg-[#CCFFCC] rounded-3xl absolute bottom-7 right-[30px] person">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/features/1/person.webp" alt="Happilee Chatbot Builder" class="absolute bottom-0 right-5 z-50 w-[270px] h-[320px]" width="270" height="320">
                </div>
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/features/1/box1.webp" alt="Happilee Chatbot Builder 1" class="box-1 w-[160px] h-[250px]" width="160" height="250">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/features/1/box2.webp" alt="Happilee Chatbot Builder 2" class="box-2 w-[200px] h-[144px]" width="200" height="144">
                <svg width="30" height="53" viewBox="0 0 30 53" fill="none" xmlns="http://www.w3.org/2000/svg" class="connection">
                    <path d="M29 52C22.4375 52 17.0488 52 17.0488 27.4586C17.0488 0.999996 8 0.999999 1 0.999999" stroke="#0B3966" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <div class="box-3">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/features/1/box3.webp" alt="Happilee Chatbot Builder 3" width="200" height="174" class="w-[200px] h-[174px]">
                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" class="absolute -top-5 right-[37px]">
                        <rect width="48" height="48" rx="10" fill="url(#paint0_linear_470_3558)" />
                        <path d="M37 24.0807V30.5404M24 11.8075V17.6211M11 24.0807V30.5404M28 30C25.7908 32.2092 22.2091 32.2092 20 30M30.5 37H17.5C15.7125 37 14.25 35.5466 14.25 33.7702V20.8509C14.25 19.0745 15.7125 17.6211 17.5 17.6211H30.5C32.2875 17.6211 33.75 19.0745 33.75 20.8509V33.7702C33.75 35.5466 32.2875 37 30.5 37ZM20.75 24.8882C20.75 25.3341 20.3862 25.6957 19.9375 25.6957C19.4888 25.6957 19.125 25.3341 19.125 24.8882C19.125 24.4423 19.4888 24.0807 19.9375 24.0807C20.3862 24.0807 20.75 24.4423 20.75 24.8882ZM28.7125 24.8882C28.7125 25.3341 28.3487 25.6957 27.9 25.6957C27.4513 25.6957 27.0875 25.3341 27.0875 24.8882C27.0875 24.4423 27.4513 24.0807 27.9 24.0807C28.3487 24.0807 28.7125 24.4423 28.7125 24.8882ZM25.3 12.2919C25.3 13.0054 24.718 13.5839 24 13.5839C23.282 13.5839 22.7 13.0054 22.7 12.2919C22.7 11.5784 23.282 11 24 11C24.718 11 25.3 11.5784 25.3 12.2919Z" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" />
                        <defs>
                            <linearGradient id="paint0_linear_470_3558" x1="0.0469" y1="24.0271" x2="48.0473" y2="24.0271" gradientUnits="userSpaceOnUse">
                                <stop offset="0.0192603" stop-color="#25D366" />
                                <stop offset="1" stop-color="#DEDC00" />
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
            </div>

        </div>
        <div class="flex w-1/2 lg:flex-1 p-5 gap-6 flex-col order-1 lgmd:w-full lgmd:order-2
">
            <div class="p-2 rounded-[10px] w-max font-semibold text-14 leading-4 bg-bg-footer text-primary">Chatbot Builder</div>
            <h2 class="font-semibold text-32 leading-[35px] text-primary">Create AI Chatbots Easily with No Code</h2>
            <p class="text-16 leading-[24px]">Design and deploy custom chatbots without technical skills.
                <b>Automate Customer Interactions, Handle FAQs</b> and <b>Provide 24/7 Support</b> with a user-friendly drag-and-drop chatbot builder
            </p>
            <div class="flex gap-6 mdd:flex-col w-4/5">
                <div class="flex gap-2 flex-col">
                    <h3 class="font-semibold text-primary text-24 leading-[26px]">100%</h3>
                    <div class="w-20 h-1 bg-bg-footer rounded-sm"></div>
                    <p class="text-14 leading-4 font-normal text-primary">Boost in First Response Time</p>
                </div>
                <div class="flex gap-2 flex-col">
                    <h3 class="font-semibold text-primary text-24 leading-[26px]">30%</h3>
                    <div class="w-20 h-1 bg-[#F5EBBA] rounded-sm"></div>
                    <p class="text-14 leading-4 font-normal text-primary">Rise in Sales through Instant Engagement</p>
                </div>
                <div class="flex gap-2 flex-col">
                    <h3 class="font-semibold text-primary text-24 leading-[26px]">25%</h3>
                    <div class="w-20 h-1 bg-[#C4F5C4] rounded-sm"></div>
                    <p class="text-14 leading-4 font-normal text-primary">Improvement in Customer&nbsp;Satisfaction</p>
                </div>
            </div>
            <div class="flex gap-4">
                <a href="<?php echo esc_url(site_url('/feature/chatbot-builder/')); ?>" class="bg-transparent border block w-max border-primary  text-primary text-16 smd:text-14 leading-5 font-semibold font-bold py-[10px] px-5 rounded-[20px]">
                    Learn More
                </a>
                <a href="<?= esc_url($free_trial); ?>" class="bg-primary border block w-max border-primary  text-white smd:text-14 text-16 leading-5 font-semibold font-bold py-[10px] px-5 rounded-[20px]">
                    Start FREE Trial
                </a>
            </div>
        </div>
    </div>

    <div id="feat-two" class="container flex lgmd:flex-col py-10 gap-6 mdd:flex-col mdd:py-5 items-start">

        <div class="flex w-1/2 lg:flex-1 p-5 gap-6 flex-col  lgmd:w-full lgmd:order-2
">
            <div class="p-2 rounded-[10px] w-max font-semibold text-14 leading-4 bg-bg-footer text-primary">Team Inbox</div>
            <h2 class="font-semibold text-32 leading-[35px] text-primary">Manage Conversations Effectively</h2>
            <p class="text-16 leading-[24px]">Happilee's Team Inbox centralizes all customer conversations that allow teams to make <b>Effective Collaboration</b> , <b>Faster Response</b>, and <b>provide Consistent Support.</b>
            </p>
            <div class="flex gap-6 mdd:flex-col w-4/5">
                <div class="flex gap-2 flex-col">
                    <h3 class="font-semibold text-primary text-24 leading-[26px]">70%</h3>
                    <div class="w-20 h-1 bg-bg-footer rounded-sm"></div>
                    <p class="text-14 leading-4 font-normal text-primary">Customers Prefer
                        Human Assistance</p>
                </div>
                <div class="flex gap-2 flex-col">
                    <h3 class="font-semibold text-primary text-24 leading-[26px]">30%</h3>
                    <div class="w-20 h-1 bg-[#F5EBBA] rounded-sm"></div>
                    <p class="text-14 leading-4 font-normal text-primary">Rise in Customer
                        Satisfaction</p>
                </div>
                <div class="flex gap-2 flex-col">
                    <h3 class="font-semibold text-primary text-24 leading-[26px]">80%</h3>
                    <div class="w-20 h-1 bg-[#C4F5C4] rounded-sm"></div>
                    <p class="text-14 leading-4 font-normal text-primary">Reduction in
                        Support Calls</p>
                </div>
            </div>
            <div class="flex gap-4">
                <a href="<?php echo esc_url(site_url('/feature/team-inbox/')); ?>" class="bg-transparent border block w-max border-primary  text-primary text-16 smd:text-14 leading-5 font-semibold font-bold py-[10px] px-5 rounded-[20px]">
                    Learn More
                </a>
                <a href="<?= esc_url($free_trial); ?>" class="bg-primary border block w-max border-primary  text-white smd:text-14 text-16 leading-5 font-semibold font-bold py-[10px] px-5 rounded-[20px]">
                    Start FREE Trial
                </a>
            </div>
        </div>
        <div class="w-1/2 md:w-[480px]
 mdd:order-1 lgmd:w-full relative feature-container">
            <img data-aos="zoom-in" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/features/2/feat-2.webp" alt="WhatsApp Shared Team Inbox" class="relative bg-transparent z-10 w-full feat-image">

            <div class="w-[468px] h-[480px] feature relative">
                <div class="w-[320px] h-[200px] bg-[#FFDDD6] rounded-3xl absolute bottom-0 left-5 right-0 person">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/features/2/person.webp" alt="WhatsApp Shared Team Inbox" class="absolute bottom-0 left-5 z-50 w-[240px] h-[320px]" width="240" height="320">
                    <svg class="absolute -top-[30px] left-5 z-30" width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="48" height="48" rx="10" fill="url(#paint0_linear_791_2436)" />
                        <path d="M19.5 26.25H25.5M19.5 21.75H28.5M21.5944 12.2316C16.8078 13.1254 13.0682 16.9981 12.1707 21.7647C11.7219 24.5948 12.1707 27.4249 13.3674 29.6592L12.0211 35.4684C12.0211 35.7663 12.1707 35.9152 12.4699 35.9152L18.3036 34.5746C20.5474 35.7663 23.3894 36.3621 26.2315 35.7663C31.0182 34.8725 34.9073 31.1487 35.8048 26.3822C37.3007 17.8919 29.9711 10.5932 21.5944 12.2316Z" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" />
                        <defs>
                            <linearGradient id="paint0_linear_791_2436" x1="5.4832" y1="45.6925" x2="60.4841" y2="13.1072" gradientUnits="userSpaceOnUse">
                                <stop offset="0.02" stop-color="#EB6E72" />
                                <stop offset="1" stop-color="#F6B8A5" />
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/features/2/box1.webp" alt="WhatsApp Shared Team Inbox 1" class="box-1">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/features/2/box2.webp" alt="WhatsApp Shared Team Inbox 2" class="box-2">
                <img src=" <?php echo get_stylesheet_directory_uri() ?>/assets/images/features/2/box3.webp" alt="WhatsApp Shared Team Inbox 3" class="box-3">
            </div>
        </div>
    </div>

    <div id="feat-three" class="container flex lgmd:flex-col py-10 gap-6 mdd:flex-col mdd:py-5">
        <div class="w-1/2 md:w-[480px]
 mdd:order-1 lgmd:w-full relative feature-container items-start">
            <img data-aos="zoom-in" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/features/3/feat-3.webp" alt="WhatsApp Broadcast Messages" class="relative bg-transparent z-10 w-full feat-image">

            <div class="w-[468px] h-[480px] feature relative">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/features/3/box1.webp" alt="WhatsApp Broadcast Messages 1" class="box-1">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/features/3/box2.webp" alt="WhatsApp Broadcast Messages 2" class="box-2">
                <div class="w-[320px] h-[200px] bg-[#FFF5C2] rounded-3xl absolute bottom-[50px] z-10 right-5">
                </div>
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/features/3/person.webp" width="360"
                    height="320" alt="WhatsApp Broadcast Messages" class="absolute right-5 z-50 person bottom-[50px]">
                <div class="box-3">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/features/3/box3.webp" alt="WhatsApp Broadcast Messages 3">
                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" class="absolute -bottom-9 left-5">
                        <rect width="48" height="48" rx="10" fill="url(#paint0_linear_791_2447)" />
                        <path d="M18.861 19.2L23.4 36M35.9218 28.39L31.966 13.6551C31.5359 12.053 29.5669 11.4628 28.3236 12.5632L25.8304 14.7698C23.0558 17.2254 19.7467 19.0024 16.1648 19.9603C13.1666 20.7622 11.3897 23.847 12.1931 26.8394C12.9964 29.8319 16.0806 31.6167 19.0789 30.8148C22.6607 29.8569 26.4168 29.7444 30.0498 30.4865L33.3144 31.1532C34.9424 31.4857 36.3518 29.992 35.9218 28.39Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <defs>
                            <linearGradient id="paint0_linear_791_2447" x1="0" y1="24" x2="48" y2="24" gradientUnits="userSpaceOnUse">
                                <stop offset="0.02" stop-color="#F9B233" />
                                <stop offset="1" stop-color="#FCEA10" />
                            </linearGradient>
                        </defs>
                    </svg>

                </div>
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/features/3/box4.webp" alt="WhatsApp Broadcast Messages 4" class="box-4">
            </div>

        </div>
        <div class="flex w-1/2 lg:flex-1 p-5 gap-6 flex-col order-1 lgmd:w-full lgmd:order-2
">
            <div class="p-2 rounded-[10px] w-max font-semibold text-14 leading-4 bg-bg-footer text-primary">Broadcast</div>
            <h2 class="font-semibold text-32 leading-[35px] text-primary">Send Messages to Targeted Audience </h2>
            <p class="text-16 leading-[24px]">Reach multiple customers simultaneously with WhatsApp messages. <b>Boost Engagement</b>, <b>Promote offers</b>, and communicate <b>Important Updates</b> effortlessly, all while maintaining a personal touch.
            </p>
            <div class="flex gap-6 mdd:flex-col w-4/5">
                <div class="flex gap-2 flex-col">
                    <h3 class="font-semibold text-primary text-24 leading-[26px]">200%</h3>
                    <div class="w-20 h-1 bg-bg-footer rounded-sm"></div>
                    <p class="text-14 leading-4 font-normal text-primary">Higher Click-Through
                        Rate than SMS</p>
                </div>
                <div class="flex gap-2 flex-col">
                    <h3 class="font-semibold text-primary text-24 leading-[26px]">40%</h3>
                    <div class="w-20 h-1 bg-[#F5EBBA] rounded-sm"></div>
                    <p class="text-14 leading-4 font-normal text-primary">Uptick in
                        Sales</p>
                </div>
                <div class="flex gap-2 flex-col">
                    <h3 class="font-semibold text-primary text-24 leading-[26px]">32%</h3>
                    <div class="w-20 h-1 bg-[#C4F5C4] rounded-sm"></div>
                    <p class="text-14 leading-4 font-normal text-primary">Increase in
                        Responses</p>
                </div>
            </div>
            <div class="flex gap-4">
                <a href="<?php echo esc_url(site_url('/feature/broadcast-bulk-messages/')); ?>" class="bg-transparent border block w-max border-primary  text-primary text-16 smd:text-14 leading-5 font-semibold font-bold py-[10px] px-5 rounded-[20px]">
                    Learn More
                </a>
                <a href="<?= esc_url($free_trial); ?>" class="bg-primary border block w-max border-primary  text-white smd:text-14 text-16 leading-5 font-semibold font-bold py-[10px] px-5 rounded-[20px]">
                    Start FREE Trial
                </a>
            </div>
        </div>
    </div>

    <div id="feat-four" class="container flex lgmd:flex-col py-10 gap-6 mdd:flex-col mdd:py-5 items-start">

        <div class="flex w-1/2 lg:flex-1 p-5 gap-6 flex-col  lgmd:w-full lgmd:order-2
">
            <div class="p-2 rounded-[10px] w-max font-semibold text-14 leading-4 bg-bg-footer text-primary">WhatsApp Commerce</div>
            <h2 class="font-semibold text-32 leading-[35px] text-primary">Sell More with WhatsApp Catalogs</h2>
            <p class="text-16 leading-[24px]">Display products directly within WhatsApp, making it easy for customers to <b>Browse, Select,</b> and <b>Purchase</b>. Enhance shopping experiences with organized product listings and streamline the sales process.
            </p>
            <div class="flex gap-6 mdd:flex-col w-4/5">
                <div class="flex gap-2 flex-col">
                    <h3 class="font-semibold text-primary text-24 leading-[26px]">26%</h3>
                    <div class="w-20 h-1 bg-bg-footer rounded-sm"></div>
                    <p class="text-14 leading-4 font-normal text-primary">Uplift in
                        Sales</p>
                </div>
                <div class="flex gap-2 flex-col">
                    <h3 class="font-semibold text-primary text-24 leading-[26px]">30%</h3>
                    <div class="w-20 h-1 bg-[#F5EBBA] rounded-sm"></div>
                    <p class="text-14 leading-4 font-normal text-primary">Decrease in
                        Abandoned Carts</p>
                </div>
                <div class="flex gap-2 flex-col">
                    <h3 class="font-semibold text-primary text-24 leading-[26px]">45%</h3>
                    <div class="w-20 h-1 bg-[#C4F5C4] rounded-sm"></div>
                    <p class="text-14 leading-4 font-normal text-primary">Increase in
                        Recurring Sales</p>
                </div>
            </div>
            <div class="flex gap-4">
                <a href="<?php echo esc_url(site_url('/feature/whatsapp-commerce/')); ?>" class="bg-transparent border block w-max border-primary  text-primary text-16 smd:text-14 leading-5 font-semibold font-bold py-[10px] px-5 rounded-[20px]">
                    Learn More
                </a>
                <a href="<?= esc_url($free_trial); ?>" class="bg-primary border block w-max border-primary  text-white smd:text-14 text-16 leading-5 font-semibold font-bold py-[10px] px-5 rounded-[20px]">
                    Start FREE Trial
                </a>
            </div>
        </div>
        <div class="w-1/2 md:w-[480px]
 mdd:order-1 lgmd:w-full relative feature-container">
            <img data-aos="zoom-in" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/features/4/feat-4.webp" alt="WhatsApp Commerce Store" class="relative bg-transparent z-10 w-full feat-image">

            <div class="w-[468px] h-[480px] feature relative">
                <div class="w-[320px] h-[200px] bg-[#CCFFCC] rounded-3xl absolute bottom-0 right-5 person">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/features/4/person.webp" alt="WhatsApp Commerce Store" class="absolute bottom-0 z-50">
                </div>

                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/features/4/box1.webp" alt="WhatsApp Commerce Store 1" class="box-1">
                <div class="box-2">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/features/4/box2.webp" alt="WhatsApp Commerce Store 2">
                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" class="absolute bottom-[-30px] right-6">
                        <path d="M0 10C0 4.47715 4.47715 0 10 0H38C43.5229 0 48 4.47715 48 10V38C48 43.5229 43.5228 48 38 48H10C4.47715 48 0 43.5228 0 38V10Z" fill="url(#paint0_linear_827_895)" />
                        <path d="M28.8 18V14.4C28.8 13.0745 27.7255 12 26.4 12H21.6C20.2745 12 19.2 13.0745 19.2 14.4V18M36 24L24.4706 26.3059C24.16 26.368 23.84 26.368 23.5294 26.3059L12 24M12 20.4C12 19.0745 13.0745 18 14.4 18H33.6C34.9255 18 36 19.0745 36 20.4V33.6C36 34.9255 34.9255 36 33.6 36H14.4C13.0745 36 12 34.9255 12 33.6V20.4Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <defs>
                            <linearGradient id="paint0_linear_827_895" x1="0.0469" y1="24.0271" x2="48.0473" y2="24.0271" gradientUnits="userSpaceOnUse">
                                <stop offset="0.0192603" stop-color="#25D366" />
                                <stop offset="1" stop-color="#DEDC00" />
                            </linearGradient>
                        </defs>
                    </svg>
                </div>


                <img src=" <?php echo get_stylesheet_directory_uri() ?>/assets/images/features/4/box3.webp" class="box-3">
                <img src=" <?php echo get_stylesheet_directory_uri() ?>/assets/images/features/4/box4.webp" class="box-4">
            </div>
        </div>
    </div>

    <div id="feat-five" class="container flex lgmd:flex-col py-10 gap-6 mdd:flex-col mdd:py-5">
        <div class="w-1/2 md:w-[480px]
 mdd:order-1 lgmd:w-full relative feature-container items-start">
            <img data-aos="zoom-in" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/features/5/feat-5.webp" alt="WhatsApp Scheduler" class="relative bg-transparent z-10 w-full feat-image">

            <div class="w-[468px] h-[480px] feature relative">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/features/5/box3.webp" alt="WhatsApp Scheduler 1" class="box-3">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/features/5/box2.webp" alt="WhatsApp Scheduler 2" class="box-2">
                <div class="w-[320px] h-[200px] bg-[#FFDDD6] rounded-3xl absolute bottom-11 right-5 person">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/features/5/person.webp" alt="WhatsApp Scheduler 3" class="absolute z-50 bottom-0">
                </div>
                <div class="box-1">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/features/5/box1.webp" alt="">
                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" class="absolute -bottom-6 right-10">
                        <rect width="48" height="48" rx="10" fill="url(#paint0_linear_791_2447)" />
                        <path d="M18.861 19.2L23.4 36M35.9218 28.39L31.966 13.6551C31.5359 12.053 29.5669 11.4628 28.3236 12.5632L25.8304 14.7698C23.0558 17.2254 19.7467 19.0024 16.1648 19.9603C13.1666 20.7622 11.3897 23.847 12.1931 26.8394C12.9964 29.8319 16.0806 31.6167 19.0789 30.8148C22.6607 29.8569 26.4168 29.7444 30.0498 30.4865L33.3144 31.1532C34.9424 31.4857 36.3518 29.992 35.9218 28.39Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <defs>
                            <linearGradient id="paint0_linear_791_2447" x1="0" y1="24" x2="48" y2="24" gradientUnits="userSpaceOnUse">
                                <stop offset="0.02" stop-color="#F9B233" />
                                <stop offset="1" stop-color="#FCEA10" />
                            </linearGradient>
                        </defs>
                    </svg>

                </div>
            </div>

        </div>
        <div class="flex w-1/2 lg:flex-1 p-5 gap-6 flex-col order-1 lgmd:w-full lgmd:order-2
">
            <div class="p-2 rounded-[10px] w-max font-semibold text-14 leading-4 bg-bg-footer text-primary">Scheduler</div>
            <h2 class="font-semibold text-32 leading-[35px] text-primary">Automate Customer Engagement </h2>
            <p class="text-16 leading-[24px]">Enable drip campaigns for personalized communications. <b>Nurture Leads, Boost Retention,</b> and <b>Maintain Consistent Engagement</b> effortlessly, ensuring no customer interaction is missed.
            </p>
            <div class="flex gap-6 mdd:flex-col w-4/5">
                <div class="flex gap-2 flex-col">
                    <h3 class="font-semibold text-primary text-24 leading-[26px]">60%</h3>
                    <div class="w-20 h-1 bg-bg-footer rounded-sm"></div>
                    <p class="text-14 leading-4 font-normal text-primary">Acceleration in
                        Sales Closure</p>
                </div>
                <div class="flex gap-2 flex-col">
                    <h3 class="font-semibold text-primary text-24 leading-[26px]">23%</h3>
                    <div class="w-20 h-1 bg-[#F5EBBA] rounded-sm"></div>
                    <p class="text-14 leading-4 font-normal text-primary">Uplift in Sales
                        Conversion</p>
                </div>
                <div class="flex gap-2 flex-col">
                    <h3 class="font-semibold text-primary text-24 leading-[26px]">70%</h3>
                    <div class="w-20 h-1 bg-[#C4F5C4] rounded-sm"></div>
                    <p class="text-14 leading-4 font-normal text-primary">Click-Through
                        Rate</p>
                </div>
            </div>
            <div class="flex gap-4">
                <a href="<?php echo esc_url(site_url('/feature/scheduler/')); ?>" class="bg-transparent border block w-max border-primary  text-primary text-16 smd:text-14 leading-5 font-semibold font-bold py-[10px] px-5 rounded-[20px]">
                    Learn More
                </a>
                <a href="<?= esc_url($free_trial); ?>" class="bg-primary border block w-max border-primary  text-white smd:text-14 text-16 leading-5 font-semibold font-bold py-[10px] px-5 rounded-[20px]">
                    Start FREE Trial
                </a>
            </div>
        </div>
    </div>

    <div id="feat-six" class="container flex lgmd:flex-col py-10 gap-6 mdd:flex-col mdd:py-5 items-start">

        <div class="flex w-1/2 lg:flex-1 p-5 gap-6 flex-col  lgmd:w-full lgmd:order-2
">
            <div class="p-2 rounded-[10px] w-max font-semibold text-14 leading-4 bg-bg-footer text-primary">Meta Leads CRM</div>
            <h2 class="font-semibold text-32 leading-[35px] text-primary">Connect Facebook Leads with WhatsApp</h2>
            <p class="text-16 leading-[24px]">Receive and respond to Facebook leads instantly with WhatsApp. <b>Engage Prospects, Build Relationships</b> and <b>Increase Conversions</b> by connecting with potential customers the moment they show interest.
            </p>
            <div class="flex gap-6 mdd:flex-col w-4/5">
                <div class="flex gap-2 flex-col">
                    <h3 class="font-semibold text-primary text-24 leading-[26px]">80%</h3>
                    <div class="w-20 h-1 bg-bg-footer rounded-sm"></div>
                    <p class="text-14 leading-4 font-normal text-primary">Acceleration in
                        Sales Clouser</p>
                </div>
                <div class="flex gap-2 flex-col">
                    <h3 class="font-semibold text-primary text-24 leading-[26px]">60%</h3>
                    <div class="w-20 h-1 bg-[#F5EBBA] rounded-sm"></div>
                    <p class="text-14 leading-4 font-normal text-primary">Reduction in
                        Human Effort</p>
                </div>
                <div class="flex gap-2 flex-col">
                    <h3 class="font-semibold text-primary text-24 leading-[26px]">45%</h3>
                    <div class="w-20 h-1 bg-[#C4F5C4] rounded-sm"></div>
                    <p class="text-14 leading-4 font-normal text-primary">Uplift in Sales
                        Conversion</p>
                </div>
            </div>
            <div class="flex gap-4">
                <a href="<?php echo esc_url(site_url('/feature/meta-leads-crm/')); ?>" class="bg-transparent border block w-max border-primary  text-primary text-16 smd:text-14 leading-5 font-semibold font-bold py-[10px] px-5 rounded-[20px]">
                    Learn More
                </a>
                <a href="<?= esc_url($free_trial); ?>" class="bg-primary border block w-max border-primary  text-white smd:text-14 text-16 leading-5 font-semibold font-bold py-[10px] px-5 rounded-[20px]">
                    Start FREE Trial
                </a>
            </div>
        </div>
        <div class="w-1/2 md:w-[480px]
 mdd:order-1 lgmd:w-full relative feature-container">
            <img data-aos="zoom-in" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/features/6/feat-6.webp" alt="Meta Leads CRM" class="relative bg-transparent z-10 w-full feat-image">

            <div class="w-[468px] h-[480px] feature relative">
                <div class="w-[320px] h-[200px] bg-[#CEE1F5] rounded-3xl absolute bottom-[26px] right-5 person">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/features/6/person.webp" alt="Meta Leads CRM" class="absolute bottom-0">
                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" class="absolute -top-[18px] -left-[17px]">
                        <rect width="48" height="48" rx="10" fill="url(#paint0_linear_827_913)" />
                        <path d="M24 20.1357C22.3345 17.2249 20.3143 15 17.9857 15C15.6571 15 11 18.3457 11 26.1747C11 31.9461 12.4341 33 13.9609 33C17.8933 33 22.0724 24.184 24 20.1357ZM24 20.1357C25.6655 17.2249 27.6857 15 30.0143 15C32.3429 15 37 18.3457 37 26.1747C37 31.9461 35.5659 33 34.0391 33C30.1067 33 25.9276 24.184 24 20.1357Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <defs>
                            <linearGradient id="paint0_linear_827_913" x1="1.71131e-08" y1="8.25" x2="48" y2="50.625" gradientUnits="userSpaceOnUse">
                                <stop offset="0.0595625" stop-color="#A7DBF2" />
                                <stop offset="0.752" stop-color="#1D8EB5" />
                            </linearGradient>
                        </defs>
                    </svg>

                </div>

                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/features/6/box1.webp" alt="Meta Leads CRM 1" class="box-1">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/features/6/box2.webp" alt="Meta Leads CRM 2" class="box-2">
                <img src=" <?php echo get_stylesheet_directory_uri() ?>/assets/images/features/6/box3.webp" alt="Meta Leads CRM 3" class="box-3">
            </div>
        </div>
    </div>
</section>