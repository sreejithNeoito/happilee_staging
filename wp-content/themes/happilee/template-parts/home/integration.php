<section class="container flex p-0 py-10 gap-6 justify-start items-start mdd:flex-col relative">
    <?php
        $home_page_id        = get_option('page_on_front');
        $integration_title   = get_post_meta($home_page_id, 'happilee_integration_title', true);
        $integration_content = get_post_meta($home_page_id, 'happilee_integration_content', true);
        $integration_link    = get_post_meta($home_page_id, 'integration_link', true);

         // Remove auto <p> tags from wpautop
        $formatted_title   = wpautop($integration_title);

        if (preg_match('/^<p>(.*?)<\/p>$/s', trim($formatted_title), $matches)) {
            $clean_title = $matches[1];
        } else {
            $clean_title = $formatted_title;
        }
        
    ?>
    <div class="relative w:480px px-0 mdd:w-full">
        <div class="container-logos-integration mdd:hidden">
            <img class="logo kylas-logo" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/integration/kylas-logo.25f273e3d4d6733b0eb8.webp" alt="Kylas Logo" loading="lazy"/>
            <img class="logo pabbly-logo" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/integration/Pabbly-logo.webp" alt="Pabbly Logo" loading="lazy"/>
            <img class="logo google-ads-logo" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/integration/google-ads-logo.webp" alt="Google Ads Logo" loading="lazy"/>
            <img class="logo another-logo" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/integration/0503JFSfbnsU8sDkO8tK8Vt-48.webp" alt="Another Logo" loading="lazy"/>
            <img class="logo zapier-logo" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/integration/zapier-logo-freelogovectors.net_.webp" alt="Zapier Logo" loading="lazy"/>
            <img class="logo bitrix24-logo" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/integration/Bitrix24-logo.webp" alt="Bitrix24 Logo" loading="lazy"/>
            <img class="logo frame5-logo" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/integration/Frame-5.webp" alt="Frame 5" loading="lazy"/>
            <img class="logo meta-logo" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/integration/Meta-Logo.webp" alt="Meta Logo" loading="lazy"/>
            <img class="logo gmail-logo" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/integration/gmail.webp" alt="Gmail Logo" loading="lazy"/>
            <img class="logo slack-logo" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/integration/slack.webp" alt="Slack Logo" loading="lazy"/>
            <img class="logo googlesheet-logo" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/integration/googlesheet.webp" alt="Google Sheets Logo" loading="lazy"/>
        </div>
        <img class="hidden w-full mdd:block px-5" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/integration/integration.webp" alt="Integrations" loading="lazy"/>

    </div>

    <div class=" mdd:w-full p-5 mdd:px-10 gap-5 flex flex-1 flex-col">
        <h2 class="text-primary text-24 leading-[26px]"><?= $clean_title; ?></h2>
        <p class="text-16 leading-6"><?= $integration_content; ?></p>
        <a href="<?php echo esc_url($integration_link); ?>" class=" bg-transparent border block w-max border-primary  text-primary text-16 leading-5 font-semibold font-bold py-[10px] px-5 rounded-[20px]">
            Explore
        </a>
    </div>
</section>