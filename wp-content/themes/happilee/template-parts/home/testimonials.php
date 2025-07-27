<section class="container py-10">
    <div class="testimonials owl-carousel owl-theme px-0">
        <?php
        // Query the Testimonials custom post type
        $args = array(
            'post_type' => 'testimonial',
            'posts_per_page' => -1, // Get all testimonials
        );

        $testimonial_query = new WP_Query($args);

        if ($testimonial_query->have_posts()) :
            while ($testimonial_query->have_posts()) : $testimonial_query->the_post();
                // Get the meta values
                $youtube_link = get_post_meta(get_the_ID(), '_testimonial_youtube_link', true);
                $name = get_post_meta(get_the_ID(), '_testimonial_name', true);
                $position = get_post_meta(get_the_ID(), '_testimonial_position', true);
                $company = get_the_title(); // Title is the company name
                $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); // Get the thumbnail URL
				$alt_text = get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true);
        ?>
                <div class="flex flex-col gap-6 p-5">
                    <!-- Icon and Divider -->
                    <div class="flex gap-4 items-end">
                        <svg width="24" height="20" viewBox="0 0 24 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M23.1373 0V3.66013C22.0915 3.79085 21.1983 4.20479 20.4575 4.90196C19.7603 5.59913 19.2157 6.49237 18.8235 7.5817C18.4749 8.62745 18.3007 9.76035 18.3007 10.9804H22.7451V20H13.5948V11.8301C13.5948 9.21569 14.0305 7.08061 14.902 5.42484C15.817 3.76906 16.9935 2.50545 18.4314 1.63399C19.8693 0.762528 21.4379 0.217865 23.1373 0ZM9.47712 0V3.66013C8.47495 3.79085 7.60349 4.20479 6.86274 4.90196C6.16558 5.59913 5.62091 6.49237 5.22876 7.5817C4.88017 8.62745 4.70588 9.76035 4.70588 10.9804H9.15033V20H0V11.8301C0 9.21569 0.43573 7.08061 1.30719 5.42484C2.22222 3.76906 3.39869 2.50545 4.8366 1.63399C6.27451 0.762528 7.82135 0.217865 9.47712 0Z" fill="#0B3966" />
                        </svg>
                        <div class="w-full h-1 bg-bg-footer rounded-sm"></div>
                    </div>

                    <!-- Review Text -->
                    <p class="text-16 leading-[19px] text-black">
                        <?php the_content(); ?>
                    </p>

                    <!-- Client Information and Thumbnail -->
                    <div class="flex justify-between items-center">
                        <!-- Client Name, Position, Company -->
                        <div class="flex flex-col gap-2">
                            <div class="text-16 leading-5 font-semibold text-primary"><?php echo esc_html($name); ?></div>
                            <div class="text-14 leading-[18px] text-black">
                                <div><?php echo esc_html($position); ?></div>
                                <div><?php echo esc_html($company); ?></div>
                            </div>
                        </div>

                        <!-- Thumbnail Image and Play Icon -->
                        <a href="<?php echo esc_url($youtube_link); ?>" class="relative w-max" target="_blank">
                            <img src="<?php echo esc_url($thumbnail_url); ?>" alt="<?php echo esc_attr($alt_text ?: get_the_title()); ?>" class="w-[112px] rounded-[10px] testimonial-thumpnail" loading="lazy">
                            <svg width="20" height="23" viewBox="0 0 20 23" fill="none" xmlns="http://www.w3.org/2000/svg" class="absolute top-[37%] left-[41%]">
                                <path d="M19.2846 10.4034C19.9513 10.7883 19.9513 11.7506 19.2846 12.1355L1.5 22.4034C0.833333 22.7883 -3.3649e-08 22.3072 0 21.5374L8.97653e-07 1.00149C9.31302e-07 0.231691 0.833334 -0.249434 1.5 0.135467L19.2846 10.4034Z" fill="#FF421D" />
                            </svg>
                        </a>
                    </div>
                </div>
        <?php
            endwhile;
            wp_reset_postdata();
        else :
            echo '<p>No testimonials found.</p>';
        endif;
        ?>


    </div>
</section>