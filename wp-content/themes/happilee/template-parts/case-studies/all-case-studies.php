<?php
// Query for case study Posts
$posts = new WP_Query(array(
    'post_type'      => 'case_study',
    'posts_per_page' => 9,
    'orderby'        => 'date',
    'order'          => 'DESC',
)); ?>

<section class="container py-10 px-5">
    <div class="flex flex-col gap-6">
        <div class="flex justify-between items-center lgmd:flex-col gap-2 smd:items-start smd:gap-4">
            <div class="text-primary text-24 leading-[22px]">All <b>Case Studies</b></div>
            <div class="search-container relative max-w-96 smd:max-w-[calc(100vw-4rem)]">
                <div class="relative w-96 smd:w-[calc(100vw-4rem)]">
                    <input
                        type="text"
                        id="search_caseInput"
                        data-context="default"
                        class="w-full px-4 py-2 pr-12 border rounded-lg focus:ring-2 focus:ring-primary focus:outline-none"
                        placeholder="Enter Keyword">
                    <svg
                        class="absolute right-4 top-1/2 -translate-y-1/2 pointer-events-none"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M16.1533 16.1255L20 20M18.2222 11.1111C18.2222 15.0385 15.0385 18.2222 11.1111 18.2222C7.18375 18.2222 4 15.0385 4 11.1111C4 7.18375 7.18375 4 11.1111 4C15.0385 4 18.2222 7.18375 18.2222 11.1111Z"
                            stroke="currentColor"
                            stroke-width="1.5"
                            stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </div>
                <div id="caseResults"
                    class="absolute top-12 left-0 w-full bg-white shadow-lg rounded-lg border max-h-60 overflow-y-auto hidden z-50">
                </div>
            </div>
        </div>

        <div class="grid grid-cols-3 gap-6 smd:grid-cols-1">
            <?php while ($posts->have_posts()) : $posts->the_post(); ?>
                <div class="flex flex-1 gap-4 flex-col">
                   <?php
                    if (has_post_thumbnail()) :
                        $featured_image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
					    $alt_text = get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true);
                        if (empty($alt_text)) {
                            $alt_text = 'Case study listing';
                        } ?>
                        <img class="relative bg-transparent z-10 w-full rounded-[20px]" src="<?php echo $featured_image_url; ?>" alt="<?php echo $alt_text; ?>" loading="lazy">
                    <?php endif; ?>
                    <h2 class="text-20 leading-[22px] text-primary font-semibold"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <p class="text-16 leading-6 text-black line-clamp-3">
                        <?php echo get_the_excerpt() ? get_the_excerpt() : get_the_content() ?>
                    </p>
                    <a href="#" class="bg-transparent border block w-max border-primary  text-primary text-16 leading-5 font-semibold font-bold py-[10px] px-5 rounded-[20px]">
                        Learn More
                    </a>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>