<?php
$faq_title = 'Frequently Asked Questions';

$faqs = [
    [
        'faq_question' => 'What is the WhatsApp Link Generator and how does it work?',
        'faq_answer' => 'It’s a free tool that creates clickable WhatsApp links. Enter your phone number and an optional message, and get a link customers can click to start chatting instantly.'
    ],
    [
        'faq_question' => 'Can I customize the message that appears when customers click the link?',
        'faq_answer' => 'Yes, you can add a default message that will automatically appear in the chat when customers open WhatsApp via your link.'
    ],
    [
        'faq_question' => 'Do customers need to save my number before messaging?',
        'faq_answer' => 'No, customers can start a conversation immediately by clicking the link without saving your number first.'
    ],
    [
        'faq_question' => 'Where can I share my generated WhatsApp link?',
        'faq_answer' => 'You can share it anywhere online - your website, social media, email campaigns, or advertisements.'
    ],
    [
        'faq_question' => 'Is the tool free and safe to use?',
        'faq_answer' => 'Yes, the tool is completely free. Your phone number is only used to create the link and is not stored or shared by Happilee'
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