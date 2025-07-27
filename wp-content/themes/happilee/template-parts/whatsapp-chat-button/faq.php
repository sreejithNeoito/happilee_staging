<?php
$faq_title = 'Frequently Asked Questions ?';

$faqs = [
    [
        'faq_question' => 'What is the Happilee WhatsApp Chat Button?',
        'faq_answer' => 'The Happilee WhatsApp Chat Button is a customizable widget that you can easily embed on your website. It allows your website visitors to directly initiate a WhatsApp chat with your business by simply clicking a button, connecting them instantly to your WhatsApp Business account.'
    ],
    [
        'faq_question' => 'How can I add the Happilee WhatsApp Chat Button to my website?',
        'faq_answer' => 'It is simple! You visit the Happilee chat button generator page, configure your button appearance and message, generate the code snippet, and then copy and paste this code just before the closing </body> tag on every page of your website where you want the button to appear.'
    ],
    [
        'faq_question' => 'Is the Happilee WhatsApp Chat Button free to use?',
        'faq_answer' => ' Yes, Happilee offers its WhatsApp Chat Button as a free tool. You can generate and use the widget code on your website without any cost.'
    ],
	[
        'faq_question' => 'Do I need a Happilee account or a WhatsApp Business API account to use this button?',
        'faq_answer' => 'While the Happilee WhatsApp Chat Button can be used with a standard WhatsApp Business App number, it is designed to seamlessly integrate with a WhatsApp Business API account. Using it with the API (like Happilee provides) unlocks advanced features like team inboxes, automation, and broadcasting for efficient management.'
    ],
	[
        'faq_question' => 'What is a WhatsApp Widget Button?',
        'faq_answer' => 'A WhatsApp Widget Button (often called a WhatsApp chat button or plugin) is a small, interactive icon or pop-up embedded on a website. When clicked, it allows website visitors to instantly open a chat on WhatsApp with your business, providing a direct and convenient communication channel.'
    ],
	[
        'faq_question' => 'Is a WhatsApp Widget Button the same as WhatsApp Business API?',
        'faq_answer' => 'No, they are related but distinct. A WhatsApp Widget Button is a website element that initiates a chat. The WhatsApp Business API is the underlying platform that allows businesses to manage those conversations at scale, enable automation, and integrate with CRM systems. A widget typically links to either your WhatsApp Business App number or, more powerfully, a number connected to the WhatsApp Business API.'
    ],
    [
        'faq_question' => 'How do I install a WhatsApp Widget Button on my website?',
        'faq_answer' => 'Installation typically involves generating a small code snippet from a widget provider (like Happilee, or another platform). You then copy and paste this code into the HTML of your website, usually just before the closing </body> tag on the pages where you want the button to appear. Many website builders and CMS platforms (like WordPress, Shopify) also have dedicated plugins or integration options.'
    ]
];
?>

<!-- FAQ Section -->
<?php if ($faq_title || $faqs): ?>
    <section class="container py-10">
        <div class="faq-items space-y-4">
            <h3 class="text-center text-24 text-primary leading-[26.11px] mb-5">FAQ <br> <span class="font-bold"><?php echo $faq_title; ?></span></h3>

            <?php foreach ((array) $faqs as $faq): ?>
                <div class="faq-item rounded-[10px] p-4 bg-white">
                    <div class="faq-item-title flex justify-between items-center cursor-pointer rounded-[10px]">
                        <div class="text-16 leading-5 font-medium text-primary font-main flex justify-start items-center gap-3">
                            <svg class="shrink-0" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 18C14.4183 18 18 14.4183 18 9.99998C18 5.5817 14.4183 1.99998 10 1.99998C5.58172 1.99998 2 5.5817 2 9.99998C2 14.4183 5.58172 18 10 18Z" stroke="#0B3966" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M8.4375 7.39583C8.4375 6.53289 9.13708 5.83333 10 5.83333C10.8629 5.83333 11.5625 6.53289 11.5625 7.39583C11.5625 7.96871 11.2542 8.46958 10.7945 8.74158C10.3983 8.97592 10 9.33142 10 9.79167V10.8333" stroke="#0B3966" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M10 13V14" stroke="#0B3966" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <?php echo esc_html($faq['faq_question']); ?>
                        </div>
                        <svg class="arrow-faq rotate-180 shrink-0" width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11 6L6 1L1 6" stroke="#0B3966" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <div class="faq-item-content hidden text-16 leading-[18.75px] pt-4 pl-8 text-black">
                        <?php echo esc_html($faq['faq_answer']); ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
<?php endif; ?>