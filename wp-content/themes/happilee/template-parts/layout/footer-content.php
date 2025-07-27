<?php

/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package happilee
 */

$copyright_text = cmb2_get_option( 'happilee-theme-options', 'happilee_copyright', '' );
$linkedin_url   = cmb2_get_option( 'happilee-theme-options', 'happilee_linkedin_url', '' );
$facebook_url   = cmb2_get_option( 'happilee-theme-options', 'happilee_facebook_url', '' );
$xplatform_url  = cmb2_get_option( 'happilee-theme-options', 'happilee_xplatform_url', '' );
$instagram_url  = cmb2_get_option( 'happilee-theme-options', 'happilee_instagram_url', '' );
$youtube_url    = cmb2_get_option( 'happilee-theme-options', 'happilee_youtube_url', '' );

?>

<footer id="colophon">
    <div class="container flex gap-6 pb-10 pt-24 mdd:flex-col mdd:p-5">
        <div class="flex flex-col gap-6 md:w-[320px]">
            <svg width="128" height="32" viewBox="0 0 128 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_470_4049)">
                    <path d="M36.08 24.4421C35.97 18.0004 35.94 12.6675 36 8.44356C36 8.23186 36.1499 8.07057 36.3499 8.05041C36.7297 8.02016 37.1696 8 37.6795 8C38.1893 8 38.6292 8.02016 38.9891 8.05041C39.189 8.07057 39.3389 8.24194 39.3489 8.45365C39.3789 11.2461 39.3789 13.3429 39.3689 14.724C40.1787 13.6353 41.2484 13.0909 42.5879 13.0909C44.1375 13.0909 45.3071 13.5748 46.0869 14.5426C46.8666 15.5104 47.2665 16.8612 47.2965 18.6052C47.3265 20.0468 47.3165 21.9924 47.2765 24.4421C47.2765 24.6538 47.1166 24.8252 46.9066 24.8454C46.5167 24.8756 46.0869 24.8857 45.607 24.8857C45.1272 24.8857 44.6873 24.8756 44.2874 24.8454C44.0775 24.8353 43.9175 24.6538 43.9175 24.4421V18.7464C43.8775 16.8814 43.1478 15.9539 41.7382 15.9539C40.8285 15.9539 40.0587 16.3773 39.4289 17.2241C39.4289 20.319 39.4189 22.7183 39.4089 24.4421C39.4089 24.6538 39.249 24.8252 39.049 24.8454C38.6492 24.8756 38.2093 24.8857 37.7494 24.8857C37.2796 24.8857 36.8497 24.8756 36.4398 24.8454C36.2399 24.8353 36.08 24.6538 36.08 24.4421Z" fill="#0B3966" />
                    <path d="M49.3458 21.3572C49.3458 20.1173 49.8057 19.1697 50.7154 18.4942C51.6251 17.8289 52.8348 17.4861 54.3343 17.4861C55.214 17.4861 56.1937 17.6273 57.2934 17.9095C57.2934 17.1232 57.0934 16.5385 56.6936 16.1655C56.2937 15.7925 55.5839 15.6111 54.5742 15.6111C53.5645 15.6111 52.4549 15.8732 51.2452 16.4075C51.0753 16.4881 50.8654 16.4276 50.7554 16.2663C50.4455 15.7724 50.1756 15.2582 49.9556 14.7239C49.8757 14.5324 49.9556 14.3005 50.1356 14.2098C51.5451 13.4638 53.1447 13.0908 54.9341 13.0908C55.6839 13.0908 56.3737 13.1614 56.9935 13.3025C57.6233 13.4437 58.2031 13.6856 58.7529 14.0183C59.3028 14.3509 59.7226 14.8348 60.0125 15.4599C60.3025 16.0849 60.4424 16.841 60.4124 17.718C60.4124 19.9257 60.3524 22.1738 60.2325 24.4622C60.2225 24.6638 60.0625 24.8352 59.8726 24.8453C59.4927 24.8755 59.1128 24.8856 58.7329 24.8856C58.2831 24.8856 57.8532 24.8755 57.4333 24.8453C57.2234 24.8352 57.0535 24.6336 57.0734 24.4118C57.1034 23.8573 57.1334 23.4339 57.1534 23.1416C56.3737 24.4622 55.154 25.1275 53.4846 25.1275C52.2449 25.1275 51.2452 24.805 50.4855 24.1497C49.7257 23.4944 49.3458 22.5569 49.3458 21.3572ZM52.3749 21.3976C52.3749 21.8411 52.5548 22.194 52.9047 22.4561C53.2546 22.7182 53.7445 22.8492 54.3643 22.8492C55.0841 22.8492 55.7239 22.577 56.2837 22.0327C56.8435 21.4883 57.1734 20.8129 57.2534 19.9862C56.4736 19.8048 55.6639 19.714 54.8141 19.714C54.0544 19.714 53.4546 19.8653 53.0247 20.1576C52.5848 20.4701 52.3749 20.8734 52.3749 21.3976Z" fill="#0B3966" />
                    <path d="M62.9716 29.9765C62.8017 25.6114 62.7217 20.208 62.7517 13.7662C62.7517 13.5545 62.9016 13.3832 63.1016 13.363C63.4615 13.3328 63.8813 13.3126 64.3712 13.3126C64.841 13.3126 65.2709 13.3328 65.6808 13.363C65.8807 13.3832 66.0307 13.5545 66.0307 13.7662V15.2078C66.3206 14.6231 66.7804 14.1292 67.4102 13.7158C68.04 13.3025 68.7998 13.0908 69.6795 13.0908C71.289 13.0908 72.5986 13.6755 73.6083 14.8449C74.618 16.0143 75.0879 17.4861 75.0379 19.2604C74.9779 21.0951 74.4481 22.5266 73.4484 23.5751C72.4487 24.6134 71.1891 25.1376 69.6595 25.1376C68.8198 25.1376 68.09 24.9562 67.4502 24.5932C66.8104 24.2303 66.3406 23.7666 66.0407 23.2021V29.9765C66.0407 30.1882 65.8807 30.3697 65.6708 30.3797C65.3109 30.3898 64.921 30.3999 64.4911 30.3999C64.0813 30.3999 63.6914 30.3898 63.3215 30.3596C63.1316 30.3495 62.9816 30.1781 62.9716 29.9765ZM66.9404 16.599C66.4005 17.1837 66.1206 18.0003 66.0906 19.0588C66.0607 20.1173 66.3106 20.9641 66.8204 21.6194C67.3403 22.2645 67.9901 22.5972 68.7598 22.6174C69.6096 22.6275 70.3093 22.3452 70.8492 21.7605C71.399 21.1758 71.6789 20.3391 71.7089 19.2705C71.7389 18.1817 71.489 17.3349 70.9491 16.7099C70.4193 16.095 69.7295 15.7724 68.8998 15.7623C68.14 15.732 67.4802 16.0143 66.9404 16.599Z" fill="#0B3966" />
                    <path d="M77.3672 29.9765C77.1973 25.6114 77.1173 20.208 77.1473 13.7662C77.1473 13.5545 77.2973 13.3832 77.4972 13.363C77.8571 13.3328 78.2769 13.3126 78.7668 13.3126C79.2367 13.3126 79.6665 13.3328 80.0764 13.363C80.2763 13.3832 80.4263 13.5545 80.4263 13.7662V15.2078C80.7162 14.6231 81.1761 14.1292 81.8059 13.7158C82.4357 13.3025 83.1954 13.0908 84.0752 13.0908C85.6847 13.0908 86.9943 13.6755 88.0039 14.8449C89.0136 16.0143 89.4835 17.4861 89.4335 19.2604C89.3735 21.0951 88.8437 22.5266 87.844 23.5751C86.8443 24.6134 85.5847 25.1376 84.0552 25.1376C83.2154 25.1376 82.4857 24.9562 81.8458 24.5932C81.206 24.2303 80.7362 23.7666 80.4363 23.2021V29.9765C80.4363 30.1882 80.2763 30.3697 80.0664 30.3797C79.7165 30.3898 79.3266 30.3999 78.8968 30.3999C78.4869 30.3999 78.097 30.3898 77.7271 30.3596C77.5372 30.3495 77.3772 30.1781 77.3672 29.9765ZM81.346 16.599C80.8062 17.1837 80.5263 18.0003 80.4963 19.0588C80.4663 20.1173 80.7162 20.9641 81.226 21.6194C81.7459 22.2645 82.3957 22.5972 83.1654 22.6174C84.0152 22.6275 84.715 22.3452 85.2548 21.7605C85.8046 21.1758 86.0845 20.3391 86.1145 19.2705C86.1445 18.1817 85.8946 17.3349 85.3548 16.7099C84.8249 16.095 84.1351 15.7724 83.3054 15.7623C82.5456 15.732 81.8858 16.0143 81.346 16.599Z" fill="#0B3966" />
                    <path d="M94.672 11.5485C94.3321 11.8611 93.9022 12.0224 93.3924 12.0224C92.8725 12.0224 92.4527 11.8611 92.1228 11.5485C91.7929 11.236 91.6229 10.8025 91.6229 10.2481C91.6229 9.69364 91.7929 9.27024 92.1228 8.96781C92.4527 8.66538 92.8825 8.51416 93.3924 8.51416C93.9122 8.51416 94.3421 8.67546 94.672 8.98797C95.0119 9.30048 95.1818 9.72388 95.1818 10.2582C95.1818 10.8025 95.0119 11.236 94.672 11.5485ZM91.6429 13.7563C91.6429 13.5446 91.8029 13.3631 92.0128 13.353C92.4127 13.3228 92.8625 13.3127 93.3524 13.3127C93.8422 13.3127 94.2921 13.3228 94.692 13.353C94.9019 13.3631 95.0619 13.5345 95.0619 13.7563C95.0919 16.6395 95.0519 20.198 94.9419 24.4522C94.9319 24.6639 94.782 24.8353 94.582 24.8454C94.2021 24.8756 93.7923 24.8857 93.3624 24.8857C92.9425 24.8857 92.5326 24.8756 92.1428 24.8454C91.9428 24.8353 91.7829 24.6539 91.7829 24.4422C91.6829 19.8755 91.6429 16.3169 91.6429 13.7563Z" fill="#0B3966" />
                    <path d="M97.7209 8.44356C97.7209 8.23186 97.8809 8.0504 98.0908 8.04032C98.5007 8.01008 98.9406 8 99.4304 8C99.9203 8 100.37 8.01008 100.77 8.04032C100.98 8.0504 101.14 8.23186 101.14 8.44356C101.16 12.3752 101.12 17.708 101.01 24.4522C101.01 24.6639 100.85 24.8353 100.65 24.8554C100.27 24.8857 99.8703 24.8958 99.4304 24.8958C99.0006 24.8958 98.6007 24.8857 98.2108 24.8554C98.0109 24.8454 97.8509 24.6639 97.8509 24.4623C97.7609 19.4419 97.7209 14.1091 97.7209 8.44356Z" fill="#0B3966" />
                    <path d="M109.337 25.1275C107.368 25.1275 105.858 24.5731 104.809 23.4642C103.759 22.3553 103.229 20.8935 103.229 19.0789C103.229 17.3248 103.769 15.8833 104.839 14.7643C105.908 13.6453 107.308 13.0908 109.037 13.0908C110.877 13.0908 112.276 13.605 113.236 14.6332C114.196 15.6615 114.726 16.8813 114.846 18.2926C114.886 18.8874 114.776 19.3612 114.496 19.714C114.226 20.0669 113.796 20.2383 113.226 20.2383L106.598 20.3491C106.838 21.7504 107.758 22.446 109.337 22.446C110.187 22.446 111.047 22.1738 111.907 21.6395C112.017 21.5689 112.147 21.5589 112.256 21.6093C112.876 21.8815 113.426 22.2746 113.916 22.7888C114.066 22.95 114.076 23.192 113.926 23.3533C113.866 23.4138 113.806 23.4843 113.736 23.5549C113.566 23.7263 113.286 23.9481 112.906 24.2102C112.526 24.4824 112.017 24.6941 111.397 24.8654C110.777 25.0469 110.087 25.1275 109.337 25.1275ZM106.618 18.1112L111.517 18.0406C111.287 16.5083 110.467 15.7421 109.057 15.7421C108.348 15.7421 107.788 15.9538 107.378 16.3873C106.958 16.8309 106.708 17.4055 106.618 18.1112Z" fill="#0B3966" />
                    <path d="M122.453 25.1275C120.484 25.1275 118.974 24.5731 117.925 23.4642C116.875 22.3553 116.345 20.8935 116.345 19.0789C116.345 17.3248 116.885 15.8833 117.955 14.7643C119.024 13.6453 120.424 13.0908 122.153 13.0908C123.993 13.0908 125.392 13.605 126.352 14.6332C127.312 15.6615 127.842 16.8813 127.962 18.2926C128.002 18.8874 127.892 19.3612 127.612 19.714C127.342 20.0669 126.912 20.2383 126.342 20.2383L119.714 20.3491C119.954 21.7504 120.874 22.446 122.453 22.446C123.303 22.446 124.163 22.1738 125.023 21.6395C125.133 21.5689 125.262 21.5589 125.372 21.6093C125.992 21.8815 126.542 22.2746 127.032 22.7888C127.182 22.95 127.192 23.192 127.042 23.3533C126.982 23.4138 126.922 23.4843 126.852 23.5549C126.682 23.7263 126.402 23.9481 126.022 24.2102C125.642 24.4824 125.133 24.6941 124.513 24.8654C123.893 25.0469 123.203 25.1275 122.453 25.1275ZM119.734 18.1112L124.633 18.0406C124.403 16.5083 123.583 15.7421 122.173 15.7421C121.464 15.7421 120.904 15.9538 120.494 16.3873C120.074 16.8309 119.824 17.4055 119.734 18.1112Z" fill="#0B3966" />
                    <path d="M16.5297 0C19.9997 0.09 23.4797 1.36 26.4697 3.98C28.9597 6.17 30.6497 8.85 31.4597 12.04C32.5497 16.28 32.0097 20.35 29.6997 24.08C29.0897 25.07 29.4597 25.93 29.5797 26.84C29.7697 28.21 30.0497 29.56 30.2597 30.93C30.3797 31.7 30.0497 31.97 29.3297 31.71C27.7297 31.13 26.1397 30.54 24.5497 29.92C24.2597 29.81 24.0297 29.8 23.7797 29.95C21.9197 31.03 19.8997 31.69 17.7697 31.9C15.6697 32.11 13.5797 31.97 11.5297 31.35C8.47968 30.44 5.91968 28.77 3.86968 26.37C1.74968 23.89 0.499677 21 0.109677 17.72C-0.270323 14.48 0.349677 11.44 1.85968 8.58C3.65968 5.17 6.36968 2.73 9.92968 1.22C11.8997 0.39 13.9297 0.02 16.5297 0ZM16.0997 27.63C19.9397 27.63 23.7797 25.67 26.0197 22.53C27.2497 20.8 28.0697 18.9 28.2497 16.76C28.2997 16.17 28.0697 15.73 27.5597 15.45C26.6297 14.94 25.5497 15.56 25.3397 16.74C24.9197 19.11 23.8397 21.08 21.9497 22.63C18.3597 25.56 12.8997 25.34 9.58968 22.08C8.09968 20.61 7.19968 18.83 6.86968 16.77C6.75968 16.12 6.37968 15.7 5.85968 15.4C5.36968 15.11 4.86968 15.27 4.43968 15.57C3.85968 15.97 3.87968 16.57 3.95968 17.17C4.81968 23.1 10.0897 27.64 16.0997 27.63Z" fill="#0B3966" />
                </g>
                <defs>
                    <clipPath id="clip0_470_4049">
                        <rect width="128" height="32" fill="white" />
                    </clipPath>
                </defs>
            </svg>
            <p class="text-16 leading-5 text-black">Best AI chatbot solution, WhatsApp API bot, WhatsApp business solutions, WhatsApp business automation, WhatsApp chatbot. WhatsApp CRM, WhatsApp Marketing.</p>
            <div class="flex flex-col gap-6 flex-1">
                <h2 class="text-16 leading-8 font-semibold text-primary mdd:font-semibold">Company</h2>
                <div class="flex flex-col gap-2">
                    <!-- <a class="text-16 leading-[19px] text-primary" href="<?php echo esc_url(site_url('/privacy-policy/')); ?>">Privacy Policy</a>
                    <a class="text-16 leading-[19px] text-primary" href="<?php echo esc_url(site_url('/terms-of-use/')); ?>">Terms of Use</a>
                    <a class="text-16 leading-[19px] text-primary" href="<?php echo esc_url(site_url('/blog/')); ?>">Blog</a> -->

                    <?php
                        wp_nav_menu(array(
                            'theme_location' => 'menu-3',
                            'items_wrap' => '%3$s',
                            'container' => false,
                            'fallback_cb' => false,
                            'depth' => 1,
                            'walker' => new Custom_Walker_Footer_Menu(),
                        ));
			        ?>
                </div>
                <div class="flex gap-4">
                    <a href="<?= esc_url($linkedin_url); ?>" target="_blank"><svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_470_4063)">
                                <path d="M11.56 9.78218C11.56 10.7624 10.937 11.5644 9.77998 11.5644C8.71199 11.5644 8 10.7624 8 9.87129C8 8.89109 8.71199 8 9.77998 8C10.848 8 11.56 8.80198 11.56 9.78218Z" fill="#0B3966" />
                                <path d="M11.5598 12.4453H8.00977V23.9998H11.5598V12.4453Z" fill="#0B3966" />
                                <path d="M20.0841 12.6235C18.2151 12.6235 17.157 13.6928 16.712 14.4057H16.623L16.445 12.8909H13.251C13.251 13.8711 13.34 15.0196 13.34 16.3562V23.9998H16.89V17.6928C16.89 17.3364 16.89 17.0691 16.979 16.8018C17.246 16.178 17.691 15.376 18.67 15.376C19.916 15.376 20.45 16.4453 20.45 17.8612V23.9899H24V17.4156C23.9902 14.1285 22.2992 12.6235 20.0841 12.6235Z" fill="#0B3966" />
                            </g>
                            <rect x="0.5" y="0.5" width="31" height="31" rx="7.5" stroke="#0B3966" stroke-opacity="0.2" />
                            <defs>
                                <clipPath id="clip0_470_4063">
                                    <rect width="32" height="32" rx="8" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                    </a>
                    <a href="<?= esc_url($facebook_url); ?>" target="_blank">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_470_4069)">
                                <path d="M19.4131 10.228H20.9911V7H18.6152C15.2465 7 13.6418 8.88508 13.6418 11.5709V14.1149H11V17.1844H13.6418V25H17.6046V17.1844H20.2465L21 14.1149H17.6135V12.013C17.6046 11.1622 18.1011 10.228 19.4131 10.228Z" fill="#0B3966" />
                            </g>
                            <rect x="0.5" y="0.5" width="31" height="31" rx="7.5" stroke="#0B3966" stroke-opacity="0.2" />
                            <defs>
                                <clipPath id="clip0_470_4069">
                                    <rect width="32" height="32" rx="8" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                    </a>
                    <a href="<?= esc_url($xplatform_url); ?>" target="_blank">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_470_4072)">
                                <path d="M7.0416 8L13.6418 16.8249L7 24H8.49492L14.3099 17.718L19.0081 24H24.095L17.1233 14.6788L23.3055 8H21.8106L16.4555 13.7855L12.1285 8H7.0416ZM9.23994 9.10103H11.5768L21.8964 22.899H19.5595L9.23994 9.10103Z" fill="#0B3966" />
                            </g>
                            <rect x="0.5" y="0.5" width="31" height="31" rx="7.5" stroke="#0B3966" stroke-opacity="0.2" />
                            <defs>
                                <clipPath id="clip0_470_4072">
                                    <rect width="32" height="32" rx="8" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>

                    </a>
                    <a href="<?= esc_url($instagram_url); ?>" target="_blank">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_1860_112)">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7 12.5161C7 9.46965 9.46965 7 12.5161 7H19.4839C22.5303 7 25 9.46965 25 12.5161V19.4839C25 22.5303 22.5303 25 19.4839 25H12.5161C9.46965 25 7 22.5303 7 19.4839V12.5161ZM12.5161 8.74194C10.4317 8.74194 8.74194 10.4317 8.74194 12.5161V19.4839C8.74194 21.5683 10.4317 23.2581 12.5161 23.2581H19.4839C21.5683 23.2581 23.2581 21.5683 23.2581 19.4839V12.5161C23.2581 10.4317 21.5683 8.74194 19.4839 8.74194H12.5161Z" fill="#0B3966" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M16 13.3871C14.5569 13.3871 13.3871 14.5569 13.3871 16C13.3871 17.4431 14.5569 18.6129 16 18.6129C16.6929 18.6129 17.3576 18.3376 17.8476 17.8476C18.3376 17.3576 18.6129 16.6929 18.6129 16C18.6129 14.5569 17.4431 13.3871 16 13.3871ZM11.6452 16C11.6452 13.5948 13.5948 11.6452 16 11.6452C18.4052 11.6452 20.3548 13.5948 20.3548 16C20.3548 17.1549 19.896 18.2626 19.0793 19.0793C18.2626 19.896 17.1549 20.3548 16 20.3548C13.5948 20.3548 11.6452 18.4052 11.6452 16Z" fill="#0B3966" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M20.6452 12.5161C20.0038 12.5161 19.4839 11.9962 19.4839 11.3548C19.4839 10.7135 20.0038 10.1935 20.6452 10.1935C21.2865 10.1935 21.8065 10.7135 21.8065 11.3548C21.8065 11.9962 21.2865 12.5161 20.6452 12.5161Z" fill="#0B3966" />
                            </g>
                            <rect x="0.5" y="0.5" width="31" height="31" rx="7.5" stroke="#0B3966" stroke-opacity="0.2" />
                            <defs>
                                <clipPath id="clip0_1860_112">
                                    <rect width="32" height="32" rx="8" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                    </a>
                    <a href="<?= esc_url($youtube_url); ?>" target="_blank">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_1463_99)">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.71213 23.1948C10.1998 23.5939 15.4107 23.6049 16 23.6049C16.5893 23.6049 21.8002 23.5934 23.2874 23.1943C23.8393 23.0459 24.3426 22.7552 24.7468 22.3511C25.151 21.947 25.4419 21.4437 25.5903 20.8918C25.9955 19.3785 26 16.4268 26 16.302C26 16.1772 25.9955 13.226 25.5903 11.7126C25.4419 11.1609 25.1511 10.6574 24.7471 10.2534C24.3431 9.84943 23.8401 9.55865 23.2884 9.41017C21.8002 9.01107 16.5893 9 16 9C15.4107 9 10.1998 9.01158 8.71263 9.41067C8.16085 9.55925 7.65776 9.85013 7.25369 10.2542C6.84963 10.6583 6.55875 11.1614 6.41017 11.7131C6.00453 13.2265 6 16.1782 6 16.303C6 16.4278 6.00403 19.3795 6.41017 20.8928C6.55832 21.4447 6.849 21.9479 7.25304 22.3519C7.65708 22.7559 8.16027 23.0466 8.71213 23.1948ZM14.0775 19.1631C14.1719 19.2575 14.2999 19.3105 14.4334 19.3105C14.5216 19.3104 14.6083 19.2873 14.685 19.2436L19.0227 16.7388C19.0992 16.6946 19.1627 16.6311 19.2069 16.5546C19.2511 16.4781 19.2743 16.3913 19.2743 16.3029C19.2743 16.2146 19.2511 16.1278 19.2069 16.0513C19.1627 15.9748 19.0992 15.9113 19.0227 15.8671L14.685 13.3623C14.6085 13.3178 14.5217 13.2943 14.4332 13.2942C14.3448 13.294 14.2578 13.3172 14.1812 13.3614C14.1046 13.4057 14.0411 13.4694 13.997 13.546C13.9529 13.6227 13.9298 13.7097 13.9301 13.7982V18.8072C13.9301 18.9407 13.9831 19.0687 14.0775 19.1631Z" fill="#0B3966" />
                            </g>
                            <rect x="0.5" y="0.5" width="31" height="31" rx="7.5" stroke="#0B3966" stroke-opacity="0.2" />
                            <defs>
                                <clipPath id="clip0_1463_99">
                                    <rect width="32" height="32" rx="8" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>

                    </a>
                </div>
                <div class="flex flex-col gap-6 flex-1">
                    <h2 class="text-16 leading-8 font-semibold text-primary mdd:font-semibold">Newsletter</h2>
                    <div class="flex flex-col gap-2">
                        <div class="text-16 leading-6 text-[#363636]">Explore how WhatsApp CRM integration can transform your business in 2025.</div>
                    </div>
                    <?php echo do_shortcode(HAPPILEE_SUBSCRIBE_FORM) ?>
                </div>
            </div>
        </div>

        <div class="flex flex-col gap-6 flex-1">
            <h2 class="text-16 leading-8 font-semibold text-primary mdd:font-semibold">Integrations</h2>
            <div class="flex flex-col gap-2">
                <a class="text-16 leading-[19px] text-primary" href="<?php echo esc_url(site_url('/integrations/')); ?>">Zapier</a>
                <a class="text-16 leading-[19px] text-primary" href="<?php echo esc_url(site_url('/integrations/')); ?>">HubSpot</a>
                <a class="text-16 leading-[19px] text-primary" href="<?php echo esc_url(site_url('/integrations/')); ?>">Zoho CRM</a>
                <a class="text-16 leading-[19px] text-primary" href="<?php echo esc_url(site_url('/integrations/')); ?>">Shopify</a>
                <a class="text-16 leading-[19px] text-primary" href="<?php echo esc_url(site_url('/integrations/')); ?>">Google Sheet</a>
                <a class="text-16 leading-[19px] text-primary" href="<?php echo esc_url(site_url('/integrations/')); ?>">FreshSales</a>
                <a class="text-16 leading-[19px] text-primary" href="<?php echo esc_url(site_url('/integrations/')); ?>">Zoho Books</a>
                <a class="text-16 leading-[19px] text-primary" href="<?php echo esc_url(site_url('/integrations/')); ?>">Pabbly Connect</a>
				<a class="text-16 leading-[19px] text-primary" href="<?php echo esc_url(site_url('/integrations/')); ?>">FB Leads App</a>
            </div>
        </div>
        <div class="flex flex-col gap-6 flex-1">
            <h2 class="text-16 leading-8 font-semibold text-primary mdd:font-semibold">Solutions</h2>
            <div class="flex flex-col gap-2">
                <?php
                $args = array(
                    'post_type' => 'industry',
                    'posts_per_page' => -1,
                );

                $industry_query = new WP_Query($args);

                if ($industry_query->have_posts()) :
                    while ($industry_query->have_posts()) : $industry_query->the_post();
                ?>
                        <a class="text-16 leading-[19px] text-primary" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    echo '<p>No industry posts found.</p>';
                endif;
                ?>
            </div>

        </div>
        <div class="flex flex-col gap-6 flex-1">
            <h2 class="text-16 leading-8 font-semibold text-primary mdd:font-semibold">Features</h2>
            <div class="flex flex-col gap-2">
                <div class="flex flex-col gap-2">
                    <?php
                    $args = array(
                        'post_type' => 'feature',
                        'posts_per_page' => -1,
                    );

                    $industry_query = new WP_Query($args);

                    if ($industry_query->have_posts()) :
                        while ($industry_query->have_posts()) : $industry_query->the_post();
                    ?>
                            <a class="text-16 leading-[19px] text-primary" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    <?php
                        endwhile;

                        wp_reset_postdata();
                    else :
                        echo '<p>No industry posts found.</p>';
                    endif;
                    ?>
                </div>
            </div>
            <h2 class="text-16 leading-8 font-semibold text-primary mdd:font-semibold">Quick Links</h2>

            <div class="flex flex-col gap-2">
                <a class="text-16 leading-[19px] text-primary" href="<?php echo esc_url(site_url('/how-to-apply-for-whatsapp-blue-tick-verification/')); ?>">WhatsApp Blue Tick Verification</a>
                <a class="text-16 leading-[19px] text-primary" href="<?php echo esc_url(site_url('/become-an-affiliate-partner/')); ?>">Become an Affiliate Partner</a>
                <a class="text-16 leading-[19px] text-primary" href="<?php echo esc_url(site_url('/#/')); ?>">WhatsApp Automation</a>
                <a class="text-16 leading-[19px] text-primary" href="<?php echo esc_url(site_url('/whatsapp-chatbot-provider-in-india/')); ?>">WhatsApp Chatbot</a>
                <a class="text-16 leading-[19px] text-primary" href="<?php echo esc_url(site_url('/#/')); ?>">WhatsApp Business Solutions</a>
                <a class="text-16 leading-[19px] text-primary" href="<?php echo esc_url(site_url('/whatsapp-crm/')); ?>">WhatsApp To CRM</a>
                <a class="text-16 leading-[19px] text-primary" href="<?php echo esc_url(site_url('/whatsapp-integration/')); ?>">WhatsApp Integration</a>
                <a class="text-16 leading-[19px] text-primary" href="<?php echo esc_url(site_url('/whatsapp-business-api/')); ?>">WhatsApp Business API</a>
                <a class="text-16 leading-[19px] text-primary" href="<?php echo esc_url(site_url('/free-whatsapp-link-generator/')); ?>">WhatsApp Chat Link Generator</a>
                <a class="text-16 leading-[19px] text-primary" href="<?php echo esc_url(site_url('/whatsapp-chat-button-widget/')); ?>">WhatsApp Chat Button Generator</a>

            </div>
            <!-- --------------------------- Meta Partner Logo ---------------------------------->
            <div class="flex flex-col gap-2 w-[140px] min-h-[54px]">
                <?php $partner_logo     = cmb2_get_option( 'happilee-theme-options', 'happilee_meta_partner_logo' );
                      $partner_logo_id  = attachment_url_to_postid( $partner_logo );
                      $partner_logo_alt = get_post_meta( $partner_logo_id, '_wp_attachment_image_alt', true ); ?>
                <img src ="<?= esc_url($partner_logo); ?>" class="w-full h-full object-contain" alt="<?= esc_attr($partner_logo_alt); ?>">
            </div>
        </div>
    </div>
    
    <!-- ----------------------------------------- Happilee Chatbot --------------------------------------------->

    <div id="chat-popup" class="hidden flex w-80 px-6 pt-6 pb-3 flex-col items-start gap-4 rounded-2xl border-2 border-[#1B982F] bg-[#FEFEFE] shadow-[0px_4px_12px_0px_rgba(0,0,0,0.25)] fixed bottom-[50px] right-9 z-[1000]">

         <!-- Close Button -->
        <button id="close-popup" class="absolute top-3 right-4 w-8 h-8 flex items-center justify-center" aria-label="Close">
            <svg class="w-[23px] h-[23px] text-black" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mascot.svg" alt="happilee mascot" class="w-[120px] bottom-[164px] right-[52px] drop-shadow-[4px_0_8px_rgba(0,0,0,0.15)] absolute">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/happilee-logo.svg" alt="happilee chatbot logo">
        I checked the website and have a few questions to ask.
        <a href="https://api.whatsapp.com/send/?phone=918848803679&text=I checked the website and have a few questions to ask.&type=phone_number&app_absent=0" target="_blank" class="font-semibold text-[14px] font-second w-full" >
            <div class="flex justify-center items-center gap-2 bg-[#1e9933] text-white px-4 py-2 rounded-[8px]">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <path d="M0.0833333 9.90875C0.0833333 11.6549 0.541667 13.3596 1.4125 14.8611L0 20L5.27917 18.623C6.73333 19.411 8.37083 19.8299 10.0375 19.8299H10.0417C15.5292 19.8299 19.9958 15.3837 20 9.92119C20 7.27499 18.9667 4.78225 17.0875 2.91165C15.2042 1.03277 12.7042 0 10.0417 0C4.55417 0 0.0875 4.44629 0.0833333 9.90875Z" fill="white" />
                    <path d="M1.075 9.91788C1.075 11.4894 1.4875 13.0236 2.27125 14.3749L1 19L5.75125 17.7607C7.06 18.4699 8.53375 18.847 10.0338 18.847H10.0375C14.9763 18.847 18.9963 14.8453 19 9.92907C19 7.54749 18.07 5.30402 16.3787 3.62049C14.6837 1.92949 12.4338 1 10.0375 1C5.09875 1 1.07875 5.00166 1.075 9.91788Z" fill="url(#paint0_linear_470_3448)" />
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.36251 5.43344C7.16251 4.98964 6.95001 4.98134 6.75834 4.97305C6.60001 4.96475 6.42084 4.96475 6.24584 4.96475C6.06667 4.96475 5.77501 5.03111 5.52917 5.30071C5.28334 5.56616 4.59167 6.2132 4.59167 7.528C4.59167 8.84281 5.55417 10.112 5.68751 10.2903C5.82084 10.4687 7.54584 13.2518 10.2708 14.3219C12.5375 15.2136 13 15.0353 13.4917 14.9896C13.9833 14.944 15.0792 14.3426 15.3042 13.7205C15.5292 13.0983 15.5292 12.5633 15.4625 12.4513C15.3958 12.3393 15.2167 12.2729 14.95 12.1402C14.6833 12.0075 13.3625 11.3604 13.1167 11.2692C12.8708 11.1821 12.6917 11.1365 12.5125 11.4019C12.3333 11.6674 11.8208 12.2688 11.6625 12.4471C11.5042 12.6255 11.35 12.6462 11.0792 12.5135C10.8125 12.3808 9.94584 12.0987 8.92084 11.1862C8.12501 10.477 7.58334 9.60183 7.42917 9.33638C7.27084 9.07093 7.41251 8.92576 7.54584 8.79304C7.66667 8.67276 7.81251 8.48196 7.95001 8.32435C8.08334 8.16674 8.12917 8.0589 8.21667 7.88055C8.30417 7.70221 8.26251 7.54459 8.19584 7.41187C8.12084 7.28329 7.60001 5.96019 7.36251 5.43344Z" fill="white" />
                    <defs>
                        <linearGradient id="paint0_linear_470_3448" x1="10.0013" y1="18.9719" x2="10.0013" y2="0.974382" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#20B038" />
                            <stop offset="1" stop-color="#60D66A" />
                        </linearGradient>
                    </defs>
                </svg>Chat With Us
            </div>
        </a>
        <div class="text-xs text-gray-500">Powered by <a href="https://happilee.io" target="_blank" class="text-gray-900">happilee.io</a></div>
    </div>
    <div id="happilee-chatbot" class="fixed bottom-[50px] right-9 z-[999]">
        <div class="flex w-14 h-14 p-3 items-center justify-center gap-2 shrink-0 rounded-[1.75rem] bg-[#1B982F] shadow-[0px_4px_8px_0px_rgba(0,0,0,0.20)] hover:shadow-[0px_4px_16px_0px_rgba(0,0,0,0.40)] hover:rounded-[16px] transition-all duration-300 cursor-pointer">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-white.svg" alt="happilee chatbot" class="w-full h-full object-contain">
        </div>
    </div>

    <!-- ----------------------------------------- Happilee Chatbot End ------------------------------------------ -->

    <!-- -------------------------------------------- Footer Copyright ------------------------------------------- -->

    <div class="border-t border-[#0B39661A]">
        <div class="container flex justify-between items-center text-14 leading-4 py-5 mdd:p-5 mdd:flex-col mdd:gap-2">
            <div class="text-black mdd:text-center"><?= esc_html($copyright_text); ?> <a href="https://happilee.io/" class="text-primary font-medium px-2">Happilee.io</a> All Rights Reserved</div>
            <div class="text-primary">
                <a href="<?php echo esc_url(site_url('/terms-of-use/')); ?>">Terms & Conditions</a>
                
            </div>
        </div>
    </div>
    
    <!-- ----------------------------------------- Footer Copyright End ------------------------------------------- -->
</footer><!-- #colophon -->