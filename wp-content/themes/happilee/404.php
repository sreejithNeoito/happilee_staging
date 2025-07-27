<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package happilee
 */

get_header();
?>
<main id="main">

	<section class="container py-10 flex justify-center items-center">
		<div class=" smd:max-w-[320px] w-[360px] h-[240px] rounded-2xl flex flex-col justify-center items-center gap-6 bg-bg-footer">
			<svg width="48" height="58" viewBox="0 0 48 58" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path opacity="0.25" fill-rule="evenodd" clip-rule="evenodd" d="M0 52.1604L7.09566 0.831543L35.8379 4.07119L48 19.7618L42.7331 57.1686L0 52.1604ZM30.0372 21.7203L33.1904 7.18246L10.4087 4.88995L3.95426 48.8736L39.4181 53.2143L43.7032 23.5589L30.0372 21.7203ZM14.1586 41.1039C13.9116 40.7791 11.7213 38.945 11.3093 38.3778C17.1382 31.8861 31.3714 31.9666 35.3244 40.555C34.6661 40.7981 31.7251 42.0714 31.1487 42.3956C29.4994 37.6029 19.8401 36.0912 14.1586 41.1039ZM25.1181 23.3558L22.7168 25.1636L19.1045 20.8131L14.1874 23.4528L12.2034 20.1325L16.6764 17.8878L13.7119 14.3168L17.3144 11.9063L20.1898 16.1239L25.3113 13.553L26.8545 16.6519L22.2387 19.1297L25.1181 23.3558Z" fill="#0B3966" />
			</svg>

			<h1 class="text-24 leading-[26.11px] text-primary">Page Not Found!</h1>
			<p class="text-14 leading-4 text-primary">Stay Tuned. Thank You!</p>
		</div>
	</section>

</main><!-- #main -->

<?php
get_footer();
