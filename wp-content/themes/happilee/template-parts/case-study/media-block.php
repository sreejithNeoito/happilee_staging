<?php 
$media_data = get_post_meta(get_the_ID(), 'caseStudy_media_group', true); 

if(is_array($media_data) && !empty($media_data)) { 
    foreach($media_data as $media) { ?>
        <section class="container py-10 px-5 mdd:py-0">
            <div class="flex flex-col gap-6 p-8 mdd:p-5">
                <h2 class="text-40  text-primary font-semibold leading-[44px] smd:text-32 smd:leading-[35px]"><?php echo $media['case_study_media_title']; ?></h2>
                <div class="mx-auto">
                    <?php
                    $media_url     = $media['case_study_media_file'];
                    $media_id      = $media['case_study_media_file_id'];
                    $default_alt   = $alt_text = get_post_meta($media_id, '_wp_attachment_image_alt', true);
                    $alt_text      = $default_alt ? $default_alt : $media['case_study_media_title'];
                    if(!empty($media_url)) {
                        $file_extension = strtolower(pathinfo($media_url, PATHINFO_EXTENSION));
                        $image_extensions = array('jpg', 'jpeg', 'png', 'gif', 'webp', 'svg', 'bmp', 'ico', 'tiff');
                        $video_extensions = array('mp4', 'webm', 'ogg', 'avi', 'mov', 'wmv', 'flv', 'm4v', 'mkv');

                        if(in_array($file_extension, $image_extensions)) {
                            echo '<img src="' . esc_url($media_url) . '" alt="' . esc_attr($alt_text) . '" loading="lazy">';
                        } elseif(in_array($file_extension, $video_extensions)) { 
                            echo '<video autoplay muted loop playsinline preload="metadata" style="width: 640px; max-width: 100%; pointer-events: none;">';
                            echo '<source src="' . esc_url($media_url) . '" type="video/' . $file_extension . '">';
                            echo 'Your browser does not support the video tag.';
                            echo '</video>';
                        }
                    } ?>
                </div>
                <?php if(!empty($media['case_study_media_description'])) { ?>
                    <p class="font-normal text-16 leading-[24px]"><?php echo $media['case_study_media_description']; ?></p>
                <?php } ?>
            </div>
        </section>
    <?php }
} ?>
