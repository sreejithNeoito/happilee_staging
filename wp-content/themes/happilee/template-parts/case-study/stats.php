<?php
$statistics = get_post_meta(get_the_ID(), 'case_study_static_group', true);
if (! empty($statistics)) {
?>
    <section class="container py-10 px-5">
        <div class="p-5 mdd:p-5 flex gap-6 flex-wrap smd:flex-col">
            <?php
            foreach ($statistics as $index => $statistic) {
                $icon = $statistic['case_study_statIcon'];
                $icon_id = $statistic['case_study_statIcon_id'];
                $stat_value = $statistic['case_study_statValue'];
                $stat_content = $statistic['case_study_statContent'];
				$stat_alt = get_post_meta($icon_id, '_wp_attachment_image_alt', true);
				
                $bg_class = '';
                switch ($index) {
                    case 0:
                        $bg_class = 'bg-[#CEE1F5]';
                        break;
                    case 1:
                        $bg_class = 'bg-[#FFDDD6]';
                        break;
                    case 2:
                        $bg_class = 'bg-[#FFF5C2]';
                        break;
                }

            ?>
                <div class="flex flex-1 w-1/3 smd:w-full rounded-[10px] gap-2 flex-col p-4 text-primary <?php echo $bg_class; ?>">
                    <img width="26" height="26" src="<?php echo $icon; ?>" alt="<?php echo $stat_alt ?>" loading="lazy">
                    <h5 class="text-32 leading-[34px] font-semibold"><?php echo $stat_value ?></h5>
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