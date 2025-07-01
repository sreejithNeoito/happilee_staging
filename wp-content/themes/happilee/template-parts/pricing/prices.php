<?php
// Fetch pricing data from WordPress REST API
$api_url = get_site_url() . '/wp-json/pricing/v1/plans';
$response = wp_remote_get($api_url);
$pricing_data = [];

if (!is_wp_error($response)) {
    $pricing_data = json_decode(wp_remote_retrieve_body($response), true);
}

$color_sets = [
    ['primary' => '#FFF5C2', 'secondary' => '#FFE047'],
    ['primary' => '#C4F5C4', 'secondary' => '#75E075'],
    ['primary' => '#CEE1F5', 'secondary' => '#7FB9F5'],
    ['primary' => '#FFDDD6', 'secondary' => '#FF9985'],
];

$index = 0;
?>

<div class="flex flex-col container  gap-10 py-10 mdd:flex-col mdd:py-0 mdd:px-5 mdd:gap-5">
    <div class="flex gap-5  justify-between items-center">
        <div class="flex justify-center bg-bg-footer rounded-lg">
            <div class="hidden md:flex flex-wrap justify-center items-center p-5 md:p-0 gap-5 md:gap-0">
                <button class="text-16 font-medium text-primary px-4 py-2 bg-primary text-white rounded-lg duration-switch active" data-duration="monthly">Monthly</button>
                <button class="flex justify-center items-center gap-2 text-16 font-medium leading-6 text-primary px-4 py-2 rounded-lg duration-switch" data-duration="quarterly">
                    Quarterly
                    <span class="bg-[#28B53E] flex justify-center items-center gap-1 p-1 rounded">
                        <svg class="shrink-0" width="16" height="16" fill="white" viewBox="0 0 16 16">
                            <path d="M7 2.85714C7 2.38376 7.44772 2 8 2C8.55228 2 9 2.38376 9 2.85714V8C9 8.47339 8.55228 8.85714 8 8.85714C7.44772 8.85714 7 8.47339 7 8V2.85714Z" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M11.0455 7.14286C11.794 7.14286 12.2503 7.97571 11.8536 8.61778L8.80813 13.5469C8.43488 14.151 7.56513 14.151 7.19187 13.5469L4.14638 8.61778C3.74967 7.97571 4.206 7.14286 4.95451 7.14286H11.0455Z" />
                        </svg>
                        <span class="text-16 font-medium leading-4 text-white">8%</span>
                    </span>
                </button>
                <button class="flex justify-center items-center gap-2 text-16 font-medium leading-6 text-primary px-4 py-2 rounded-lg duration-switch" data-duration="half_yearly">
                    Half-Yearly
                    <span class="bg-[#28B53E] flex justify-center items-center gap-1 p-1 rounded">
                        <svg class="shrink-0" width="16" height="16" fill="white" viewBox="0 0 16 16">
                            <path d="M7 2.85714C7 2.38376 7.44772 2 8 2C8.55228 2 9 2.38376 9 2.85714V8C9 8.47339 8.55228 8.85714 8 8.85714C7.44772 8.85714 7 8.47339 7 8V2.85714Z" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M11.0455 7.14286C11.794 7.14286 12.2503 7.97571 11.8536 8.61778L8.80813 13.5469C8.43488 14.151 7.56513 14.151 7.19187 13.5469L4.14638 8.61778C3.74967 7.97571 4.206 7.14286 4.95451 7.14286H11.0455Z" />
                        </svg>
                        <span class="text-16 font-medium leading-4 text-white">15%</span>
                    </span>
                </button>
                <button class="flex justify-center items-center gap-2 text-16 font-medium leading-6 text-primary px-4 py-2 rounded-lg duration-switch" data-duration="yearly">
                    Yearly
                    <span class="bg-[#28B53E] flex justify-center items-center gap-1 p-1 rounded">
                        <svg class="shrink-0" width="16" height="16" fill="white" viewBox="0 0 16 16">
                            <path d="M7 2.85714C7 2.38376 7.44772 2 8 2C8.55228 2 9 2.38376 9 2.85714V8C9 8.47339 8.55228 8.85714 8 8.85714C7.44772 8.85714 7 8.47339 7 8V2.85714Z" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M11.0455 7.14286C11.794 7.14286 12.2503 7.97571 11.8536 8.61778L8.80813 13.5469C8.43488 14.151 7.56513 14.151 7.19187 13.5469L4.14638 8.61778C3.74967 7.97571 4.206 7.14286 4.95451 7.14286H11.0455Z" />
                        </svg>
                        <span class="text-16 font-medium leading-4 text-white">20%</span>
                    </span>
                </button>
            </div>
            <div class="relative w-full md:hidden">
                <button type="button" class="w-full px-3 py-2 border-none border-gray-300 rounded-lg text-left flex justify-between items-center text-primary font-medium text-16 duration-dropdown-toggle">
                    <span class="selected-label gap-2 hover:bg-gray-100 flex justify-between items-center">Monthly</span>
                    <svg class="w-4 h-4 ml-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>

                <div class="absolute z-50 mt-1 w-max bg-white border border-gray-300 rounded-lg shadow-lg duration-dropdown hidden">
                    <div class="cursor-pointer px-4 py-2 hover:bg-gray-100 flex justify-between items-center duration-option" data-duration="monthly">
                        <span>Monthly</span>
                    </div>
                    <div class="cursor-pointer gap-2 px-4 py-2 hover:bg-gray-100 flex justify-between items-center duration-option" data-duration="quarterly">
                        <span>Quarterly</span>
                        <!-- <span class="bg-[#28B53E] text-white text-sm font-medium px-2 py-0.5 rounded">8%</span> -->
                        <span class="bg-[#28B53E] flex justify-center items-center gap-1 p-1 rounded">
                            <svg class="shrink-0" width="15" height="15" fill="white" viewBox="0 0 16 16">
                                <path d="M7 2.85714C7 2.38376 7.44772 2 8 2C8.55228 2 9 2.38376 9 2.85714V8C9 8.47339 8.55228 8.85714 8 8.85714C7.44772 8.85714 7 8.47339 7 8V2.85714Z" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.0455 7.14286C11.794 7.14286 12.2503 7.97571 11.8536 8.61778L8.80813 13.5469C8.43488 14.151 7.56513 14.151 7.19187 13.5469L4.14638 8.61778C3.74967 7.97571 4.206 7.14286 4.95451 7.14286H11.0455Z" />
                            </svg>
                            <span class="text-sm font-medium leading-4 text-white">8%</span>
                        </span>
                    </div>
                    <div class="cursor-pointer gap-2 px-4 py-2 hover:bg-gray-100 flex justify-between items-center duration-option" data-duration="half_yearly">
                        <span>Half-Yearly</span>
                        <!-- <span class="bg-[#28B53E] text-white text-sm font-medium px-2 py-0.5 rounded">15%</span> -->
                        <span class="bg-[#28B53E] flex justify-center items-center gap-1 p-1 rounded">
                            <svg class="shrink-0" width="15" height="15" fill="white" viewBox="0 0 16 16">
                                <path d="M7 2.85714C7 2.38376 7.44772 2 8 2C8.55228 2 9 2.38376 9 2.85714V8C9 8.47339 8.55228 8.85714 8 8.85714C7.44772 8.85714 7 8.47339 7 8V2.85714Z" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.0455 7.14286C11.794 7.14286 12.2503 7.97571 11.8536 8.61778L8.80813 13.5469C8.43488 14.151 7.56513 14.151 7.19187 13.5469L4.14638 8.61778C3.74967 7.97571 4.206 7.14286 4.95451 7.14286H11.0455Z" />
                            </svg>
                            <span class="text-sm font-medium leading-4 text-white">15%</span>
                        </span>
                    </div>
                    <div class="cursor-pointer gap-2 px-4 py-2 hover:bg-gray-100 flex justify-between items-center duration-option" data-duration="yearly">
                        <span>Yearly</span>
                        <!-- <span class="bg-[#28B53E] text-white text-sm font-medium px-2 py-0.5 rounded">20%</span> -->
                        <span class="bg-[#28B53E] flex justify-center items-center gap-1 p-1 rounded">
                            <svg class="shrink-0" width="15" height="15" fill="white" viewBox="0 0 16 16">
                                <path d="M7 2.85714C7 2.38376 7.44772 2 8 2C8.55228 2 9 2.38376 9 2.85714V8C9 8.47339 8.55228 8.85714 8 8.85714C7.44772 8.85714 7 8.47339 7 8V2.85714Z" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.0455 7.14286C11.794 7.14286 12.2503 7.97571 11.8536 8.61778L8.80813 13.5469C8.43488 14.151 7.56513 14.151 7.19187 13.5469L4.14638 8.61778C3.74967 7.97571 4.206 7.14286 4.95451 7.14286H11.0455Z" />
                            </svg>
                            <span class="text-sm font-medium leading-4 text-white">20%</span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-center bg-bg-footer rounded-lg">
            <div class="flex">
                <button class="text-16  font-medium leading-6 px-4 py-2 text-primary text-white rounded-lg bg-primary currency-switch active" data-currency="INR">INR</button>
                <button class="text-16  font-medium leading-6 px-4 py-2  rounded-lg currency-switch" data-currency="USD">USD</button>
            </div>
        </div>
    </div>

    <div class="flex w-full overflow-scroll md:overflow-auto md:grid md:grid-cols-3 lg:grid-cols-4 gap-6">
        <?php foreach ($pricing_data as $plan) :
            $colors = $color_sets[$index % count($color_sets)];
            $index++;
        ?>
            <div class="min-w-[240px] md:w-auto flex flex-col p-4 rounded-[10px] gap-2" style="background-color: <?php echo $colors['primary']; ?>;">
                <?php if ($plan['name'] === 'Advanced'): ?>
                    <div class="w-max rounded-[10px] text-14 leading-4 font-medium px-2 py-1 text-primary bg-white">Best value</div>
                <?php else: ?>
                    <div class="spacer h-6"></div>
                <?php endif; ?>

                <h3 class="text-24 font-semibold text-primary  leading-7 text-left"> <?php echo esc_html($plan['name']); ?> </h3>
                <p class="text-left text-lg font-bold text-black">
                    <span class="price text-16 leading-6 font-bold"
                        data-monthly-enabled="<?php echo esc_attr($plan['pricing']['monthly']['enabled'] ? '1' : '0'); ?>"
                        data-monthly-inr="<?php echo esc_attr($plan['pricing']['monthly']['inr']); ?>"
                        data-monthly-usd="<?php echo esc_attr($plan['pricing']['monthly']['usd']); ?>"
                        data-monthly-custom-text="<?php echo esc_attr($plan['pricing']['monthly']['custom_text']); ?>"
                        data-quarterly-enabled="<?php echo esc_attr($plan['pricing']['quarterly']['enabled'] ? '1' : '0'); ?>"
                        data-quarterly-inr="<?php echo esc_attr($plan['pricing']['quarterly']['inr']); ?>"
                        data-quarterly-usd="<?php echo esc_attr($plan['pricing']['quarterly']['usd']); ?>"
                        data-quarterly-custom-text="<?php echo esc_attr($plan['pricing']['quarterly']['custom_text']); ?>"
                        data-half_yearly-enabled="<?php echo esc_attr($plan['pricing']['half_yearly']['enabled'] ? '1' : '0'); ?>"
                        data-half_yearly-inr="<?php echo esc_attr($plan['pricing']['half_yearly']['inr']); ?>"
                        data-half_yearly-usd="<?php echo esc_attr($plan['pricing']['half_yearly']['usd']); ?>"
                        data-half_yearly-custom-text="<?php echo esc_attr($plan['pricing']['half_yearly']['custom_text']); ?>"
                        data-yearly-enabled="<?php echo esc_attr($plan['pricing']['yearly']['enabled'] ? '1' : '0'); ?>"
                        data-yearly-inr="<?php echo esc_attr($plan['pricing']['yearly']['inr']); ?>"
                        data-yearly-usd="<?php echo esc_attr($plan['pricing']['yearly']['usd']); ?>"
                        data-yearly-custom-text="<?php echo esc_attr($plan['pricing']['yearly']['custom_text']); ?>">
                        <?php echo $plan['pricing']['monthly']['enabled'] ? '₹' : '' ?>
                        <span class="text-20 leading-6 font-bold">
                            <?php echo esc_attr($plan['pricing']['monthly']['enabled'] ?
                                $plan['pricing']['monthly']['inr'] : $plan['pricing']['monthly']['custom_text']); ?>
                            <?php echo $plan['pricing']['monthly']['enabled']
                                ? '<span style="font-size:14px; font-weight:700; color:#1a1a1a;"> +GST</span>' : '' ?>
                        </span>
                    </span>
                    <span class="duration-text price-duration font-normal text-black opacity-60">
                        <?php echo esc_attr($plan['pricing']['monthly']['enabled'] ? '/ Month' : ''); ?>
                    </span>
                </p>
                <p class="text-left text-black font-normal text-16 leading-5">
                    <?php echo esc_attr($plan['description']); ?></p>
                <div class="spacer h-7"></div>
                <a href="https://app.happilee.io/" target="_blank" class=" border block w-max text-black text-16 smd:text-14 leading-5 font-semibold py-[10px] px-5 rounded-[20px]"
                    style="background-color: <?php echo $colors['secondary']; ?>;">
                    Get Started
                </a>

                <p class="text-left text-sm leading-5"> <?php echo esc_attr($plan['users_included']); ?></p>
                <p class="text-left add_users text-sm leading-5"
                    data-add-usr-inr="<?php echo esc_html($plan['additional_user']['inr']); ?>"
                    data-add-usr-usd="<?php echo esc_html($plan['additional_user']['usd']); ?>">
                    Additional Users @ <span class="currency-symbol">₹</span>
                    <span class="add_user_price">
                        <?php echo esc_html($plan['additional_user']['inr']); ?>/Month/User
                    </span>
                </p>
                <div class="spacer h-7"></div>
                <div class="spacer h-1 rounded-s-sm bg-white"></div>
                <p class="font-semibold text-16 leading-5 text-black text-left"> <?php echo esc_html($plan['main_feature']); ?> </p>
                <div class="spacer h-1 rounded-s-sm bg-white"></div>

                <ul class="list-none">
                    <?php foreach ($plan['features'] as $feature) : ?>
                        <li class="text-16 leading-[18.75px] py-2 text-left"><?php echo $feature; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="flex gap-6  p-8 flex-col items-center justify-center text-center">
        <p class="text-16 leading-[18px] text-black">All our plans come packed with value - see the difference here.</p>
        <div class="flex gap-4">
            <a href="<?php echo esc_url(site_url('/compare-plans/')); ?>" class="bg-transparent border block w-max border-primary  text-primary text-16 smd:text-14 leading-5 font-semibold font-bold py-[10px] px-5 rounded-[20px]">
                Compare Plans in Detail
            </a>
        </div>
    </div>
</div>