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
    'basic' => ['label' => 'Basic', 'color' => '#FFF5C2', 'price_inr' => '₹125', 'price_usd' => '$1.50'],
    'growth' => ['label' => 'Growth', 'color' => '#C4F5C4', 'price_inr' => '₹325', 'price_usd' => '$3.90'],
    'advanced' => ['label' => 'Advanced', 'color' => '#CEE1F5', 'price_inr' => '₹750', 'price_usd' => '$9.00']
]; ?>

<div class="container py-10">
    <div class="flex justify-between items-center flex-col md:flex-row mb-4">
        <a href="javascript:history.back()" class="text-24 text-primary flex justify-start items-center gap-4 px-4 py-5">
            <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 8H17M1 8L7.66667 1M1 8L7.66667 15" stroke="#0B3966" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            Compare Plans
        </a>
        <div class="flex flex-col md:flex-row justify-center items-center">
            <div class="space-x-4 flex items-center p-4 rounded">
                <?php foreach ($planDetails as $key => $plan): ?>
                    <label class="flex items-center justify-center space-x-2 bg-white px-4 py-2 rounded-lg border-blue-300 shadow-sm cursor-pointer text-sm font-regular text-[#363636]">
                        <input
                            type="checkbox"
                            class="toggle-plan border-[1.5px] border-[#0B3966CC] text-[#0B3966CC] accent-[#D7E6F5]"
                            data-target="<?php echo $key; ?>"
                            checked>
                        <span class="leading-6"><?php echo $plan['label']; ?></span>
                    </label>
                <?php endforeach; ?>
            </div>
            <div id="toggleCurrency" class="bg-primary cursor-pointer border block w-max border-primary text-white text-16 smd:text-14 leading-5 font-semibold font-bold py-[10px] px-5 rounded-[20px]">
                Switch to USD
            </div>
        </div>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr>
                    <th class="w-1/3 bg-white text-primary text-24 font-semibold px-4 py-3 rounded-tl-[10px]">Features</th>
                    <?php foreach ($planDetails as $key => $details): ?>
                        <th id="<?= $key ?>-col-header"
                            class="plan-col-header text-center px-4 py-3 text-24 font-semibold text-primary leading-7 bg-[<?= $details['color'] ?>]"
                            style="min-width: 180px;"
                        >
                            <?= $details['label'] ?>
                            <div class="text-lg font-bold text-black">
                                <span class="price text-16 leading-6 font-bold" data-inr="<?= $details['price_inr'] ?>" data-usd="<?= $details['price_usd'] ?>">
                                    ₹ <span class="text-20 leading-6 font-bold"><?= preg_replace('/[^\d.]/', '', $details['price_inr']) ?></span>
                                </span>
                                <span class="duration-text font-normal text-black opacity-60"> / Month </span>
                            </div>
                        </th>
                    <?php endforeach; ?>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($features as $index => $feature): ?>
                    <tr>
                        <td class="bg-white px-4 py-2 border-t border-[#0B39661A] text-14 md:text-16 leading-6"><?= $feature ?></td>
                        <?php foreach ($plans as $key => $plan): ?>
                            <td
                                id="<?= $key ?>-col"
                                class="plan-col px-4 py-2 text-center border-t border-[#0B39661A] bg-[<?= $planDetails[$key]['color'] ?>]"
                            >
                                <?= renderIcon($plan[$index]) ?>
                            </td>
                        <?php endforeach; ?>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <p class="space-y-6 p-8 text-center text-16 leading-[18px] text-black">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit
    </p>
</div>
