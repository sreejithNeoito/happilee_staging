<section class="container py-10 px-8">
    <div class="flex gap-6 smd:flex-col">

    <?php 
        $args = array(
        'post_type'      => 'landing',
        'posts_per_page' => 3,
        'order'          => 'ASC',
     );

        $landing_query = new WP_Query($args);

        if ($landing_query->have_posts()) :

            while ($landing_query->have_posts()) :

                $landing_query->the_post();
                $post_id  = get_the_ID();

                $featured_image_url = '';
                $alt_text           = '';
                
                if (has_post_thumbnail()) :

                    $thumbnail_id       = get_post_thumbnail_id($post_id );
                    $featured_image_url = get_the_post_thumbnail_url($post_id, 'full');
                    $alt_text           = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);

                endif;
                    $usecase_title      = get_post_meta($post_id, 'hero_section_title', true);
                    $usecase_subtitle   = get_post_meta($post_id, 'hero_section_subtitle', true); 
                        
                if(! is_single()) { 
                    $usecase_title = str_replace('WhatsApp','<span class="text-secondary">WhatsApp</span>',$usecase_title);
                } ?>
                
                <div class="flex flex-1 gap-4 flex-col">
                    <img src="<?= $featured_image_url ?>" alt="<?= $alt_text; ?>" class="relative bg-transparent z-10 w-full">
                    <h2 class="text-20 leading-5 text-primary font-semibold"><?= $usecase_title; ?></h2>
                    <p class="text-16 leading-6 text-black"><?= $usecase_subtitle; ?></p>
                    <a href="<?php echo esc_url(get_permalink()); ?>" class="bg-transparent border block w-max border-primary  text-primary text-16 leading-5 font-semibold font-bold py-[10px] px-5 rounded-[20px]">
                        Learn More
                    </a>
                </div>
 
            <?php 
            endwhile;

            wp_reset_postdata();

        endif; ?>

        <!-- 
        =====================================================================================
        The following section contains static content previously created by Musthafa M.
        It has been commented out in favor of dynamic content generation above.
        =====================================================================================
        -->
        <!-- <div class="flex flex-1 gap-4 flex-col">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/usecases/whatsapp-chatbot.webp" alt="WhatsApp Chatbot Platform" class="relative bg-transparent z-10 w-full">
            <h2 class="text-20 leading-5 text-primary font-semibold">Enhance Customer Support with <span class=" text-secondary">Whatsapp</span> Chatbot</h2>
            <p class="text-16 leading-6 text-black">Respond to customers instantly and effortlessly, allowing you to focus on your business to the next level.</p>
            <a href="<?php echo esc_url(site_url('/landing/whatsapp-chatbot/')); ?>" class="bg-transparent border block w-max border-primary  text-primary text-16 leading-5 font-semibold font-bold py-[10px] px-5 rounded-[20px]">
                Learn More
            </a>
        </div> -->
        <!-- <div class="flex flex-1 gap-4 flex-col">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/usecases/whatsapp-catalog.webp" alt="WhatsApp Catalog" class="relative bg-transparent z-10 w-full">
            <h2 class="text-20 leading-5 text-primary font-semibold">Boost Sales via <span class=" text-secondary">WhatsApp</span> Catalog with Payment</h2>
            <p class="text-16 leading-6 text-black">Set up a WhatsApp storefront, letting customers browse and buy directly while you drive traffic through ads.</p>
            <a href="<?php echo esc_url(site_url('/landing/whatsapp-catalog/')); ?>" class="bg-transparent border block w-max border-primary  text-primary text-16 leading-5 font-semibold font-bold py-[10px] px-5 rounded-[20px]">
                Learn More
            </a>
        </div>
        <div class="flex flex-1 gap-4 flex-col">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/usecases/whatsapp-marketing.webp" alt="WhatsApp Retargeting" class="relative bg-transparent z-10 w-full">
            <h2 class="text-20 leading-5 text-primary font-semibold">Effective Retargeting on <span class=" text-secondary">WhatsApp</span> for 3X Sales</h2>
            <p class="text-16 leading-6 text-black">Re-engage potential customers directly on WhatsApp, converting into repeat sales with personalised follow-ups.</p>
            <a href="<?php echo esc_url(site_url('/landing/whatsapp-retargeting/')); ?>" class="bg-transparent border block w-max border-primary  text-primary text-16 leading-5 font-semibold font-bold py-[10px] px-5 rounded-[20px]">
                Learn More
            </a>
        </div> -->

    </div>
</section>