<?php
$statistics = get_post_meta(get_the_ID(), 'feature_statistics_group', true);
if (! empty($statistics)) {
?>
    <section class="container mdd:px-0 px-0">
        <div class="p-5 mdd:p-5 flex justify-between gap-6 flex-wrap">
            <?php
            foreach ($statistics as $index => $statistic) {
                // Get individual fields for each statistic
                $icon_id = $statistic['statistics_icon_id'];
                $icon = $statistic['statistics_icon']; // Assuming the icon is stored within $statistic array
                $stat_title = $statistic['statistics_title'];
                $stat_content = $statistic['statistics_content'];
				$stat_alt = get_post_meta($icon_id, '_wp_attachment_image_alt', true);
				
                $bg_class = '';
                switch ($index) {
                    case 0:
                        $bg_class = 'bg-[#CEE1F5]';
                        break;
                    case 1:
                        $bg_class = 'bg-[#F5EBBA]';
                        break;
                    case 2:
                        $bg_class = 'bg-[#C4F5C4]';
                        break;
                }

            ?>
                <div class="flex flex-1 w-1/3 mdd:w-2/4 rounded-[10px] gap-2 flex-col p-4 text-primary <?php echo $bg_class; ?>">
                    <img width="26" height="26" src="<?php echo $icon; ?>" alt="<?php echo $stat_alt ?>" loading="lazy">
                    <h5 class="text-32 leading-[34px] font-semibold"><?php echo $stat_title ?></h5>
                    <div class="text-16 leading-5"><?php echo $stat_content; ?></div>
                </div>
            <?php
            }
            ?>
        </div>
    </section>
<?php
}
?>