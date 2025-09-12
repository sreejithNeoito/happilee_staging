<?php
$faq_title = 'Frequently Asked Questions';

$faqs = [
    [
        'faq_question' => 'What is a WhatsApp QR Code?',
        'faq_answer' => 'A WhatsApp QR Code is a scannable code that instantly opens a direct chat with your WhatsApp number. Customers don’t need to save your contact — one scan is all it takes.'
    ],
    [
        'faq_question' => 'Can I add a custom message?',
        'faq_answer' => 'Yes! You can set a pre-filled message so when someone scans the code, WhatsApp opens with your chosen text. This is helpful for guiding customer queries (e.g., “Hi, I’m interested in your product”).'
    ],
    [
        'faq_question' => 'Is it free?',
        'faq_answer' => 'Absolutely. Our WhatsApp QR Code Generator is 100% free to use, with no hidden costs.'
    ],
    [
        'faq_question' => 'Where can I use the QR code?',
        'faq_answer' => 'You can use your QR code anywhere — posters, menus, flyers, product packaging, business cards, websites, emails, or even social media posts.'
    ],
    [
        'faq_question' => 'Do WhatsApp QR Codes expire?',
        'faq_answer' => 'No, the generated WhatsApp QR codes do not expire unless you change your phone number. They remain valid as long as your WhatsApp account is active.'
    ],
    [
        'faq_question' => 'Can I use it with WhatsApp Business as well?',
        'faq_answer' => 'Yes. The QR code works with both WhatsApp and WhatsApp Business accounts, making it perfect for individuals and companies alike.'
    ],
    [
        'faq_question' => 'Do my customers need to install any special app to scan the QR code?',
        'faq_answer' => 'No extra app is needed. Most smartphones can scan QR codes directly from their camera or built-in QR scanner.'
    ],
    [
        'faq_question' => 'Can I create multiple QR codes for the same number?',
        'faq_answer' => 'Yes. You can generate as many QR codes as you want. This is useful if you want to use different pre-filled messages for different campaigns.'
    ],
    [
        'faq_question' => 'Is my data safe when using the generator?',
        'faq_answer' => 'Yes. The generator only creates a link to your WhatsApp number. No chats or personal data are stored or shared.'
    ],
    [
        'faq_question' => 'Can I customize the QR code design?',
        'faq_answer' => 'Some generators allow you to customize colors, add a logo, or change the style of the QR code. This helps match your brand identity.'
    ],
    [
        'faq_question' => 'Does the QR code work internationally?',
        'faq_answer' => 'Yes. As long as you include the correct country code with your phone number, people can scan and message you from anywhere in the world.'
    ],
    [
        'faq_question' => 'Can I track how many people scanned my QR code?',
        'faq_answer' => 'By default, WhatsApp does not provide scan analytics. However, you can use third-party tools or URL shorteners with tracking to monitor engagement.'
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