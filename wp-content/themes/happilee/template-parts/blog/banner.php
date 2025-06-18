<?php
// Query for Featured Posts
$featured_query = new WP_Query(array(
    'meta_key'   => '_cmb2_is_featured',
    'meta_value' => 'on',
    'posts_per_page' => 1,
));

if ($featured_query->have_posts()) : ?>
    <section class="container flex gap-10 py-10 mdd:flex-col mdd:py-0 mdd:px-5 mdd:gap-5 items-end">
        <div class="flex w-1/2 lg:flex-1  p-8 gap-6 flex-col mdd:w-full order-2 md:order-1 mdd:p-4 mdd:gap-6">
            <div class="rounded-[10px] w-max text-20 leading-[22px] text-primary">Featured <b>Blog</b></div>
            <?php while ($featured_query->have_posts()) : $featured_query->the_post(); ?>
                <h1 class="font-semibold line-clamp-3 text-40 leading-[44px] text-primary smd:text-24 smd:leading-[30.46px]"><?php echo get_the_title(); ?></h1>
                <p class="text-20 leading-6 line-clamp-2 smd:line-clamp-3 font-normal text-[#363636]">
                    <?php echo get_the_excerpt() ? get_the_excerpt() : get_the_content() ?>
                </p>
                <a href="<?php the_permalink(); ?>" class="bg-primary border block w-max border-primary  text-white smd:text-14 text-16 leading-5 font-semibold font-bold py-[10px] px-5 rounded-[20px]">
                    Read More
                </a>
            <?php endwhile; ?>
        </div>

        <div class="w-1/2 lg:w-[480px] py-0 px-4 md:p-8 md:pt-0 relative mdd:w-full mdd:mt-5 mdd:px-0 order-1 md:order-2">
            <?php
            if (has_post_thumbnail()) :
                $featured_image_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
                <img class=" rounded-[16px]" src="<?php echo $featured_image_url ?>" alt="<?php the_title(); ?>">
            <?php endif; ?>
        </div>
    </section>
<?php
endif;

// Reset post data
wp_reset_postdata();
?>