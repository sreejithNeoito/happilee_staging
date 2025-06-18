<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$args = array(
    'post_type'      => 'post',       // Fetch posts
    'posts_per_page' => 9,            // Limit to 6 posts
    'orderby'        => 'date',       // Order by post date
    'order'          => 'DESC',       // Most recent posts first
    'paged' => $paged,
);



$query = new WP_Query($args);

$total_posts = $query->found_posts;
$start = (($paged - 1) * $posts_per_page) + 1;
$end = min($paged * $posts_per_page, $total_posts);
?>
<section class="container pb-10 px-8">
    <?php if ($query->have_posts()) : ?>
        <div class="grid grid-cols-3 gap-6 smd:grid-cols-1">
            <?php while ($query->have_posts()) : $query->the_post(); ?>
                <div class="flex flex-1 gap-4 flex-col">
                    <?php if (has_post_thumbnail()) :
                        $featured_image_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
                        <img class="relative bg-transparent z-10 w-full rounded-[10px]" src="<?php echo esc_url($featured_image_url); ?>" alt="<?php the_title(); ?>">
                    <?php endif; ?>

                    <div class="flex gap-4 flex-wrap">
                        <?php
                        $categories = get_the_category();
                        if (!empty($categories)) :
                            $category_count = count($categories); ?>
                            <div class="flex flex-wrap gap-2 cat_container">
                                <?php for ($i = 0; $i < min(2, $category_count); $i++) :
                                    $category_link = get_category_link($categories[$i]->term_id); ?>
                                    <a href="<?php echo esc_url($category_link); ?>" class="p-2 rounded-[10px] w-max font-semibold text-14 leading-4 bg-bg-footer text-primary">
                                        <?php echo esc_html($categories[$i]->name); ?>
                                    </a>
                                <?php endfor; ?>

                                <?php if ($category_count > 2) : ?>
                                    <div class="p-2 rounded-[10px] w-max font-semibold text-14 leading-4 bg-bg-footer text-primary cursor-pointer cat_count">
                                        + <?php echo $category_count - 2; ?>
                                    </div>
                                    <div class="additional-categories hidden flex-wrap gap-2">
                                        <?php for ($i = 2; $i < $category_count; $i++) :
                                            $category_link = get_category_link($categories[$i]->term_id); ?>
                                            <a href="<?php echo esc_url($category_link); ?>" class="p-2 rounded-[10px] w-max font-semibold text-14 leading-4 bg-bg-footer text-primary">
                                                <?php echo esc_html($categories[$i]->name); ?>
                                            </a>
                                        <?php endfor; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                    </div>

                    <h2 class="text-20 leading-5 text-primary font-semibold"><?php the_title(); ?></h2>
                    <div class="author flex gap-2 items-center justify-start">
                        <div class="text-14 leading-4"><?php the_author(); ?></div>
                        <svg width="4" height="4" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="2" cy="2" r="2" fill="#363636" fill-opacity="0.6"></circle>
                        </svg>
                        <div class="text-14 leading-4"><?php the_time('j M Y'); ?></div>
                    </div>
                    <p class="text-16 leading-6 text-black line-clamp-3">
                        <?php echo get_the_excerpt() ?: get_the_content(); ?>
                    </p>
                    <a href="<?php the_permalink(); ?>" class="bg-transparent border block w-max border-primary text-primary text-16 leading-5 font-semibold py-[10px] px-5 rounded-[20px]">
                        Read More
                    </a>
                </div>
            <?php endwhile; ?>
        </div>

        <!-- Pagination Section -->
        <?php
        $pagination_links = paginate_links(array(
            'base'    => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
            'format'  => '?paged=%#%',
            'current' => max(1, $paged),
            'total'   => $query->max_num_pages,
            'mid_size' => 2,
            'end_size' => 1,
            'prev_text' => __('Previous'),
            'next_text' => __('Next'),
            'type'     => 'array',
        ));

        if ($pagination_links) : ?>
            <div class="flex justify-between items-center mt-10 lgmd:flex-col smd:items-start">
                <div class="blog_count_container flex justify-center items-center">
                    <div class="blog-info mb-4 text-14">
                        <?php if ($total_posts > 0) : ?>
                            Showing <span class="font-medium"><?php echo $start; ?>-<?php echo $end; ?></span> of<span class="font-medium"> <?php echo $total_posts; ?></span> blogs
                        <?php else : ?>
                            No blogs found.
                        <?php endif; ?>
                    </div>
                </div>
                <div class="pagination-container flex justify-center items-center gap-4 smd:gap-2">
                    <?php if ($paged > 1) : ?>
                        <!-- First Page -->
                        <a class="rounded-lg px-2 py-2 bg-bg-footer" href="<?php echo esc_url(get_pagenum_link(1)); ?>" class="first-page" aria-label="First Page">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13 1L7 7L13 13M1 1V13" stroke="#0B3966" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>

                        </a>
                    <?php endif; ?>

                    <div class="pagination-links flex gap-4 smd:gap-2">
                        <?php foreach ($pagination_links as $link) : ?>
                            <?php echo str_replace('page-numbers', 'page-link', $link); ?>
                        <?php endforeach; ?>
                    </div>

                    <?php if ($paged < $query->max_num_pages) : ?>
                        <!-- Last Page -->
                        <a class="rounded-lg px-2 py-2 bg-bg-footer" href="<?php echo get_pagenum_link($query->max_num_pages); ?>" class="last-page" aria-label="Last Page">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L7 7L1 13M13 1V13" stroke="#0B3966" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                    <?php endif; ?>
                </div>
            </div>

        <?php endif; ?>

    <?php else : ?>
        <p>No posts found.</p>
    <?php endif;
    wp_reset_postdata(); ?>
</section>