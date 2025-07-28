<?php
// Query for Featured Posts
$trending_query = new WP_Query(array(
    'meta_key'   => '_cmb2_is_trending',
    'meta_value' => 'on', // CMB2 saves the checkbox value as "on"
    'posts_per_page' => -1, // Adjust the number of featured posts
)); ?>

<section class="container py-10 px-8">
    <div class="rounded-[10px] w-max text-20 leading-[22px] text-primary mb-6">What's <b>Trending</b></div>
    <div class="grid grid-cols-3 gap-6 smd:grid-cols-1">
        <?php while ($trending_query->have_posts()) : $trending_query->the_post(); ?>
            <div class="flex flex-1 gap-4 flex-col">
                <?php
                if (has_post_thumbnail()) :
                    $featured_image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
					$alt_text = get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true); ?>
                    <img loading="lazy" class="relative bg-transparent z-10 w-full rounded-[10px]" src="<?php echo esc_url($featured_image_url); ?>" alt="<?php echo esc_attr($alt_text ?: get_the_title()); ?>">
                <?php endif; ?>
                <div class="flex gap-4 flex-wrap">
                    <?php
                    // Get the categories of the current post
                    $categories = get_the_category();

                    if (! empty($categories)) :
                        $category_count = count($categories);
                    ?>
                        <div class="flex flex-wrap gap-2 cat_container">
                            <?php
                            // Loop through categories and display the first two as links
                            for ($i = 0; $i < min(2, $category_count); $i++) :
                                $category_link = get_category_link($categories[$i]->term_id);
                            ?>
                                <a href="<?php echo esc_url($category_link); ?>" class="p-2 rounded-[10px] w-max font-semibold text-14 leading-4 bg-bg-footer text-primary">
                                    <?php echo esc_html($categories[$i]->name); ?>
                                </a>
                            <?php endfor; ?>

                            <?php if ($category_count > 2) : ?>
                                <div class="p-2 rounded-[10px] w-max font-semibold text-14 leading-4 bg-bg-footer text-primary cursor-pointer cat_count">
                                    + <?php echo $category_count - 2; ?>
                                </div>
                                <div class="additional-categories hidden group-hover:flex flex-wrap gap-2">
                                    <?php
                                    // Display remaining categories as links
                                    for ($i = 2; $i < $category_count; $i++) :
                                        $category_link = get_category_link($categories[$i]->term_id);
                                    ?>
                                        <a href="<?php echo esc_url($category_link); ?>" class="p-2 rounded-[10px] w-max font-semibold text-14 leading-4 bg-bg-footer text-primary">
                                            <?php echo esc_html($categories[$i]->name); ?>
                                        </a>
                                    <?php endfor; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                </div>
                <h2 class="text-20 leading-5 text-primary font-semibold">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h2>
                <div class="author flex gap-2 items-center justify-start">
                    <div class="text-14 leading-4"><?php the_author(); ?></div>
                    <svg width="4" height="4" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.950195 1.99609V1.71582C0.950195 1.32389 1.07324 1.00033 1.31934 0.745117C1.56999 0.489909 1.90951 0.362305 2.33789 0.362305C2.77083 0.362305 3.11263 0.489909 3.36328 0.745117C3.61393 1.00033 3.73926 1.32389 3.73926 1.71582V1.99609C3.73926 2.38346 3.61393 2.70475 3.36328 2.95996C3.11719 3.21061 2.77767 3.33594 2.34473 3.33594C1.91634 3.33594 1.57682 3.21061 1.32617 2.95996C1.07552 2.70475 0.950195 2.38346 0.950195 1.99609Z" fill="#363636" fill-opacity="0.6" />
                    </svg>
                    <div class="text-14 leading-4"><?php the_time('j M Y'); ?></div>
                </div>
                <p class="text-16 leading-6 text-black line-clamp-3">
                    <?php echo get_the_excerpt() ? get_the_excerpt() : get_the_content() ?>
                </p>
                <a href="<?php the_permalink(); ?>" class="bg-transparent border block w-max border-primary  text-primary text-16 leading-5 font-semibold font-bold py-[10px] px-5 rounded-[20px]">
                    Read More
                </a>
            </div>
        <?php endwhile; ?>

    </div>
</section>