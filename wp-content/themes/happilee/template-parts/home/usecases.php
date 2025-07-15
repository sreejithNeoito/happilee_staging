<section class="container py-10 px-8">
    <div class="flex gap-6 smd:flex-col">

<?php

if (function_exists('get_posts')) :
        $posts = get_posts(array(
                'post_type' => 'landing',
                'numberposts' => 3,
                'orderby' => 'menu_order',
                'order' => 'ASC',
                'meta_query' => array(
                    array(
                        'key' => 'hero_section_title',
                        'compare' => 'EXISTS'
                    )
                )
            ));

    foreach ($posts as $post) :
        $post_id = $post->ID;
        $hero_title = get_post_meta($post_id, 'hero_section_title', true);

        if (has_post_thumbnail()) :

            $thumbnail_id       = get_post_thumbnail_id($post_id );
            $featured_image_url = get_the_post_thumbnail_url($post_id, 'full');
            $alt_text           = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);

        endif;

            $usecase_title      = get_post_meta($post_id, 'hero_section_title', true);
            $usecase_subtitle   = get_post_meta($post_id, 'hero_section_subtitle', true); 
                        
        if(! is_single()) :
            $usecase_title = str_replace('WhatsApp','<span class="text-secondary">WhatsApp</span>',$usecase_title);
        endif; ?>

            <div class="flex flex-1 gap-4 flex-col">
                <img src="<?= $featured_image_url ?>" alt="<?= $alt_text; ?>" class="relative bg-transparent z-10 w-full">
                <h2 class="text-20 leading-5 text-primary font-semibold"><?= $usecase_title; ?></h2>
                <p class="text-16 leading-6 text-black"><?= $usecase_subtitle; ?></p>
                <a href="<?php echo esc_url(get_permalink()); ?>" class="bg-transparent border block w-max border-primary  text-primary text-16 leading-5 font-semibold font-bold py-[10px] px-5 rounded-[20px]">
                    Learn More
                </a>
            </div>

        <?php endforeach; 
endif;?>

    </div>
</section>