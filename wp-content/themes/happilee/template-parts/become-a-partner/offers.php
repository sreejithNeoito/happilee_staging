<?php
    $section_title1         =   get_post_meta(get_the_ID(), 'section_title1', true);
    $section_title2         =   get_post_meta(get_the_ID(), 'section_title2', true);
    $section_title3         =   get_post_meta(get_the_ID(), 'section_title3', true);
    $section_description1   =   get_post_meta(get_the_ID(), 'section_description1', true);
    $section_description2   =   get_post_meta(get_the_ID(), 'section_description2', true);
    $section_description3   =   get_post_meta(get_the_ID(), 'section_description3', true);
    $wlp_image1             =   get_post_meta(get_the_ID(), 'wlp_image1', true);
    $api_image1             =   get_post_meta(get_the_ID(), 'api_partner_image1', true);
    $wlp_image2             =   get_post_meta(get_the_ID(), 'wlp_image2', true);
    $api_image2             =   get_post_meta(get_the_ID(), 'api_partner_image2', true);
    $wlp_image3             =   get_post_meta(get_the_ID(), 'wlp_image3', true);
    $api_image3             =   get_post_meta(get_the_ID(), 'api_partner_image3', true);
   
    $wlp_offering_points1   =   get_post_meta(get_the_ID(), 'partner_offering_points', true);
    $api_offering_points1   =   get_post_meta(get_the_ID(), 'offering_points_api', true);
    $wlp_offering_points2   =   get_post_meta(get_the_ID(), 'partner_offering_points2', true);
    $api_offering_points2   =   get_post_meta(get_the_ID(), 'offering_points_api2', true);
    $wlp_offering_points3   =   get_post_meta(get_the_ID(), 'partner_offering_points3', true);
    $api_offering_points3   =   get_post_meta(get_the_ID(), 'offering_points_api3', true);
?>
<section class="container flex flex-col gap-6 py-10">
    <div class="text-center text-24 text-primary font-main font-normal" >
        <h3>Our Partnership Offerings</h3>
    </div>
    <div class="flex justify-center">
        <div class="flex bg-bg-footer rounded-lg">
                <button class="text-16 text-second leading-6 px-4 py-2 rounded-lg partner-switch text-primary bg-primary text-white active" data-partner="white-label">White Label Partnership</button>
                <button class="text-16 text-second leading-6 px-4 py-2 rounded-lg partner-switch" data-partner="api">API Partnership</button>
        </div>
    </div>

    <!-- Why Choose It Section -->  
    <div class="flex gap-4 p-4 mdd:flex-col">
        <div class="flex w-1/2 flex-col gap-6 p-4 mdd:w-full mdd:order-2">
            <h2 class="text-32 text-primary font-semibold"><?= $section_title1; ?></h2>
            <p class="text-20 font-main font-medium"><?= $section_description1; ?></p>
            <ul class="flex gap-4 flex-col font-second text-4 leading-6 offerings" data-partner="white-label">
            <?php foreach ($wlp_offering_points1 as $point): ?>
                <li class="flex items-start">
                    <div class="min-w-[12px] min-h-[4px] rounded-lg bg-black mr-4 mt-[11px]"></div>
                    <div><?= $point['wlp_feature_point']; ?></div>
                </li>
            <?php endforeach; ?>
            </ul>

            <ul class="flex gap-4 flex-col font-second text-4 leading-6 offerings hidden" data-partner="api">
            <?php foreach ($api_offering_points1 as $point): ?>
                <li class="flex items-start">
                    <div class="min-w-[12px] min-h-[4px] rounded-lg bg-black mr-4 mt-[11px]"></div>
                    <div><?= $point['api_feature_point']; ?></div>
                </li>
            <?php endforeach; ?>
            </ul>

        </div>
        <div class="w-1/2 mdd:w-full offerings" data-partner="white-label">
            <img src="<?php echo $wlp_image1; ?>" alt="" loading="lazy">
        </div>
        <div class="w-1/2 mdd:w-full offerings hidden" data-partner="api">
            <img src="<?php echo $api_image1; ?>" alt="" loading="lazy">
        </div>
    </div>

    <!-- Benefits Section -->
    <div class="flex gap-4 p-4 mdd:flex-col">
        <div class="w-1/2 mdd:w-full offerings" data-partner="white-label">
              <img src="<?php echo $wlp_image2; ?>" alt="" loading="lazy">
        </div>
        <div class="w-1/2 mdd:w-full offerings hidden" data-partner="api"">
              <img src="<?php echo $api_image2; ?>" alt="" loading="lazy">
        </div>
        <div class="flex w-1/2 flex-col gap-6 p-4 mdd:w-full">
            <h2 class="text-32 text-primary font-semibold"><?= $section_title2; ?></h2>
            <p class="text-20 font-main font-medium"><?= $section_description2; ?></p>

            <ul class="flex gap-4 flex-col font-second text-4 leading-6 offerings" data-partner="white-label">
            <?php foreach($wlp_offering_points2 as $point): ?>
                <li class="flex items-start">
                    <div class="min-w-[12px] min-h-[4px] rounded-lg bg-black mr-4 mt-[11px]"></div>
                    <div><?= $point['wlp_feature_point2']; ?></div>
                </li>
            <?php endforeach; ?>
            </ul>

            <ul class="flex gap-4 flex-col font-second text-4 leading-6 offerings hidden" data-partner="api">
                <?php foreach($api_offering_points2 as $point): ?>
                <li class="flex items-start">
                    <div class="min-w-[12px] min-h-[4px] rounded-lg bg-black mr-4 mt-[11px]"></div>
                    <div><?= $point['api_feature_point2']; ?></div>
                </li>
                <?php endforeach; ?>
            </ul>

        </div>
    </div>

    <!-- Pre-requisites Section -->
    <div class="flex gap-4 p-4 mdd:flex-col">
        <div class="flex w-1/2 flex-col gap-6 p-4 mdd:w-full mdd:order-2">
            <h2 class="text-32 text-primary font-semibold"><?= $section_title3; ?></h2>
            <p class="text-20 font-main font-medium"><?= $section_description3; ?></p>
            <ul class="flex gap-4 flex-col font-second text-4 leading-6 offerings" data-partner="white-label">
                <?php foreach($wlp_offering_points3 as $point): ?>
                <li class="flex items-start">
                    <div class="min-w-[12px] min-h-[4px] rounded-lg bg-black mr-4 mt-[11px]"></div>
                    <div><?= $point['wlp_feature_point3']; ?></div>
                </li>
                <?php endforeach; ?>
            </ul>
            <ul class="flex gap-4 flex-col font-second text-4 leading-6 offerings hidden" data-partner="api">
                <?php foreach($api_offering_points3 as $point): ?>
                <li class="flex items-start">
                    <div class="min-w-[12px] min-h-[4px] rounded-lg bg-black mr-4 mt-[11px]"></div>
                    <div><?= $point['api_feature_point3']; ?></div>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="w-1/2 mdd:w-full offerings" data-partner="white-label">
             <img src="<?php echo $wlp_image3; ?>" alt="" loading="lazy">
        </div>
        <div class="w-1/2 mdd:w-full offerings hidden" data-partner="api">
            <img src="<?php echo $api_image3; ?>" alt="" loading="lazy">
        </div>
    </div>
</section>