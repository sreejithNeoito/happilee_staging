<section class="container py-10 px-5">
    <div class="flex gap-6 flex-col rounded-[32px] bg-white p-8">
        <div class="rounded-[10px] text-24 w-full leading-[22px] text-primary"><b>_case studies</b></div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php
            $categories = get_terms([
                'taxonomy' => 'category',
                'hide_empty' => true,
                'number' => 8,
            ]);

            if (!empty($categories) && !is_wp_error($categories)):
                foreach ($categories as $category): ?>
                    <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>" class="flex justify-center items-center gap-2 px-4 py-2 border rounded-lg border-primary w-max">
                        <div class="text-16 font-medium leading-6 text-primary">
                            <?php echo esc_html($category->name); ?>
                        </div>
                        <svg width="21" height="18" viewBox="0 0 21 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 9H20.2M20.2 9L12.2 1M20.2 9L12.2 17" stroke="#0B3966" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                <?php endforeach; ?>
                <a href="<?php echo site_url() ?>/all-case-studies/" class="bg-primary border block w-max border-primary  text-white text-16 smd:text-14 leading-5 font-semibold font-bold py-[10px] px-5 rounded-[20px]">Explore More Articles</a>

            <?php else: ?>
                <p class="text-primary">No categories found.</p>
            <?php endif; ?>
        </div>
    </div>
</section>