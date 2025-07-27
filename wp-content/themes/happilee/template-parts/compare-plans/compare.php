<?php
$features = [
    "Team Inbox",
    "Contacts Management",
    "Broadcast Center",
    "Template Management",
    "Chatbot Flow Builder",
    "Import Contacts from CSV",
    "Add Notes to Conversations",
    "Add Parameters to Contacts",
    "Attach Documents",
    "Audio in Chats",
    "Bulk Staff Assign to Contacts",
    "Scheduled Broadcast",
    "Broadcast from CSV",
    "Advanced Audience Filters",
    "Broadcast using Dynamic Data",
    "Business Feature",
    "Google Sheet Integration",
    "Export Chatbot Data",
    "Chatbot with Templates",
    "ChatGPT Integration",
    "API integration in Chatbot",
    "Business Logic in Chatbots",
    "Drip Campaigns (Schedule)",
    "Third Party Integrations"
];

$plans = [
    "basic" =>  [1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
    "growth" => [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0],
    "advanced" => [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1]
];

$planDetails = [
    'basic' => ['label' => 'Basic', 'color' => '#FFF5C2', 'price_inr' => '₹999', 'price_usd' => '$18'],
    'growth' => ['label' => 'Growth', 'color' => '#C4F5C4', 'price_inr' => '₹1799', 'price_usd' => '$34'],
    'advanced' => ['label' => 'Advanced', 'color' => '#CEE1F5', 'price_inr' => '₹3499', 'price_usd' => '$66']
];

function renderIcon($hasFeature)
{
    return $hasFeature
        ? '<svg class="mx-auto" width="17" height="12" viewBox="0 0 17 12" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1.33301 6.55556L5.6407 11L15.333 1" stroke="#28B53E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>'
        : '<svg class="mx-auto" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1 1L11 11M11 1L1 11" stroke="#F15642" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>';
}

function renderPlanColumn($planKey, $features, $plans, $planDetails)
{
    $details = $planDetails[$planKey];
    $featureList = $plans[$planKey];
?>
    <div class="bg-[<?= $details['color'] ?>] text-left flex flex-col p-4 rounded-[10px] gap-2 plan-col flex-1 min-w-[144px]" id="<?= $planKey ?>-col">

        <ul id="<?= $planKey ?>-features">
            <li class="space-y-2 !h-[124px]">
                <div class="spacer h-7"></div>
                <h3 class="text-24 font-semibold text-primary leading-7 "><?= $details['label'] ?></h3>
                <p class=" text-lg font-bold text-black">
                    <span class="price text-16 leading-6 font-bold" data-inr="<?= $details['price_inr'] ?>" data-usd="<?= $details['price_usd'] ?>">
                        ₹ <span class="text-20 leading-6 font-bold"><?= preg_replace('/[^\d.]/', '', $details['price_inr']) ?></span>
                    </span>
                    <span class="duration-text font-normal text-black opacity-60"> / Month </span>
                </p>
            </li>
            <?php foreach ($featureList as $index => $val):
                $border = $index !== array_key_last($featureList) ? 'border-b border-[#0B39661A]' : '';
            ?>
                <li class="mx-auto h-[33px] flex justify-center items-center <?= $border ?> text-16 leading-6">
                    <?= renderIcon($val) ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php
}

?>
<div class="container mt-0 md:mt-6 pr-0 md:pr-5">
    <div class="flex items-start md:justify-between md:items-center flex-col md:flex-row mb-10 md:mb-4">
        <a href="javascript:history.back()" class="text-24 text-primary flex justify-start items-center gap-4 md:px-4 py-5">
            <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 8H17M1 8L7.66667 1M1 8L7.66667 15" stroke="#0B3966" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            Compare&nbsp;Plans
        </a>
        <div class="flex flex-col md:flex-row justify-center md:justify-end md:items-center gap-5 md:gap-0 w-full">
            <div class="space-x-4 flex items-center md:p-4 rounded overflow-x-scroll md:overflow-auto">
                <?php foreach ($planDetails as $key => $plan): ?>
                    <label class="flex items-center justify-center  space-x-2 bg-white px-4 py-2  rounded-lg border-blue-300 shadow-sm cursor-pointer text-sm font-regular text-[#363636]">
                        <input
                            type="checkbox"
                            class="toggle-plan border-[1.5px] border-[#0B3966CC] text-[#0B3966CC] accent-[#D7E6F5]"
                            data-target="<?php echo $key; ?>"
                            checked>
                        <span class=" leading-6"><?php echo $plan['label']; ?></span>
                    </label>
                <?php endforeach; ?>

            </div>
            <div id="toggleCurrency" class="bg-primary cursor-pointer border block w-max border-primary  text-white text-16 smd:text-14 leading-5 font-semibold font-bold py-[10px] px-5 rounded-[20px]">
                Switch&nbsp;to&nbsp;USD
            </div>
        </div>
    </div>
</div>

<div class="container pb-10 md:pb-10 text-left">
    <div class="flex gap-6" id="plan-grid">
        <div class="w-[160px] md:w-2/5 md:min-w-[254px] flex-col p-4 rounded-[10px] bg-white gap-2" id="features-list">
            <div class="feature-item features-header">
                <div class="spacer h-7"></div>
                <h3 class="text-24 font-semibold text-primary leading-7"> Features </h3>
                <div class="spacer spacer-head"></div>
            </div>

            <?php foreach ($features as $index => $feature): ?>
                <div class="py-1 feature-item <?php echo $index !== array_key_last($features) ? 'border-b border-[#0B39661A]' : ''; ?> text-14 md:text-16 leading-6">
                    <?php echo $feature; ?>
                </div>
            <?php endforeach; ?>

        </div>
        <div class="flex w-3/5 flex-1 gap-6 overflow-x-scroll md:overflow-x-auto">
            <?php
            renderPlanColumn('basic', $features, $plans, $planDetails);
            renderPlanColumn('growth', $features, $plans, $planDetails);
            renderPlanColumn('advanced', $features, $plans, $planDetails);
            ?>
        </div>
    </div>

</div>