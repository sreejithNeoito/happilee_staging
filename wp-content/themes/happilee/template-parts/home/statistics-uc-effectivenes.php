<?php

/**
 * Display dynamic Use Case statistics section.
 *
 * Retrieves data from the 'use_case_statics' custom field and dynamically
 * generates a styled statistics section using Tailwind CSS classes.
 *
 * @since 10/07/2025
 */


$home_page_id = get_option('page_on_front');

$use_case_data = get_post_meta($home_page_id, 'use_case_statics', true);

if (empty($use_case_data)) {
    return;
}

// Background color classes to be applied in sequence
$bg_color = ["bg-accent-2", "bg-accent-4", "bg-accent-3"];
?>

<section class="container mdd:px-0 px-0">
    <div class="gap-6">
        <h2 class="text-primary text-24 leading-[26px] text-center">Statistics of <br>
            <b>Use Case Effectiveness</b>
        </h2>
    </div>
    <div class="p-5 mdd:p-5 flex justify-between gap-6 flex-wrap">

        <?php
        $i = 0;
        foreach ($use_case_data as $case_data) {
            
            if ($i == 2 || $i == 3) {
                $bg_style = $bg_color[2];
            } elseif ($i == 1) {
                $bg_style = $bg_color[1];
            } else {
                $bg_style = $bg_color[0];
            }
        ?>
    
            
        <div class="flex flex-1 w-1/4 mdd:w-2/4 rounded-[10px] gap-2 flex-col p-4 text-primary <?= $bg_style; ?>">
            <?= $case_data['case_id_3']; ?>
            <h5 class="text-32 leading-[34px] font-semibold"><?= $case_data['case_id_2']; ?></h5>
            <div class="text-16 leading-5"><?= nl2br($case_data['case_id_1']); ?></div>
        </div>

    <?php $i++; } ?>

    </div>
</section>