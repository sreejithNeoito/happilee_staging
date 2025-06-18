<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package happilee
 */

get_header();
?>

<section id="primary" class="mt-10 smd:mt-5">
	<main id="main">
		<?php
		while (have_posts()) :
			the_post();
			$permalink = get_permalink();
			$secure_permalink = str_replace('http://', 'https://', $permalink);
			$content = get_the_content();
			preg_match_all('/<h([1-6])[^>]*>(.*?)<\/h\1>/i', $content, $matches);
		?>

			<div class="container flex flex-col justify-start items-start">
				<a href="javascript:history.back()" class="text-24 text-primary flex justify-start items-center gap-4 px-4 py-5">
					<svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M1 8H17M1 8L7.66667 1M1 8L7.66667 15" stroke="#0B3966" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
					</svg>
					Back
				</a>

				<div class="toc-container hidden lgmd:flex flex-col gap-2 lgmd:h-full pl-4 w-[calc(100vw-4rem)]">
					<div id="tocDropdown" class="relative">
						<!-- Selected Option Display -->
						<div class="selected-option flex justify-between items-center gap-1 px-4 py-2 bg-white border border-gray-300 rounded-lg cursor-pointer">
							<!-- Default Icon -->
							<div class="flex justify-center items-center">
								<span class="selected-icon w-6 h-6 flex justify-center items-center mr-2">
									<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M5 6H11M5 10H7.25M2.5 15H13.5C14.3284 15 15 14.3284 15 13.5V2.5C15 1.67157 14.3284 1 13.5 1H2.5C1.67157 1 1 1.67157 1 2.5V13.5C1 14.3284 1.67157 15 2.5 15Z" stroke="#0B3966" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
									</svg>
								</span>
								<span class="selected-text">Select a Heading</span>
							</div>
							<span class="ml-2"><svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M1 1L6 6L11 1" stroke="#222222" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
								</svg>
							</span>
						</div>

						<!-- Dropdown Options List -->
						<ul class="dropdown-options hidden absolute left-0 right-0 bg-white border border-gray-300 rounded-lg shadow-lg max-h-60 overflow-y-auto mt-1 z-50">
							<?php if (!empty($matches[0])): ?>
								<?php foreach ($matches[2] as $index => $heading): ?>
									<?php $id = sanitize_title($heading); ?>
									<li data-value="<?php echo $id; ?>" data-icon="icon<?php echo $index; ?>" class="dropdown-item flex gap-2 items-center py-2 px-3 hover:bg-gray-100 cursor-pointer">
										<div class="w-6 h-6 flex justify-center items-center">
											<!-- Option-specific SVG Icon -->
											<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M5 6H11M5 10H7.25M2.5 15H13.5C14.3284 15 15 14.3284 15 13.5V2.5C15 1.67157 14.3284 1 13.5 1H2.5C1.67157 1 1 1.67157 1 2.5V13.5C1 14.3284 1.67157 15 2.5 15Z" stroke="#0B3966" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
											</svg>
										</div>
										<div class="text-sm font-medium text-gray-800">
											<?php echo $heading; ?>
										</div>
									</li>
								<?php endforeach; ?>
							<?php endif; ?>
						</ul>
					</div>
				</div>



			</div>

			<div class="container flex justify-between lgmd:flex-col">
				<div class="content-left w-8/12 lgmd:w-full p-5 pr-8 lgmd:pr-5">
					<h1 class="title leading-[44px] text-40 smd:text-28 smd:leading-[30.46px] font-semibold text-primary mb-6"><?php echo get_the_title(); ?></h1>
					<?php if (has_post_thumbnail()) :
						$featured_image_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
						<img class="relative bg-transparent z-10 w-full rounded-[10px] mb-6" src="<?php echo esc_url($featured_image_url); ?>" alt="<?php the_title(); ?>">
					<?php endif; ?>
					<div class="post-content">
						<?php
						the_content();
						?>
					</div>
					<div class="flex gap-4 flex-wrap mb-6">
						<?php
						$tags = get_the_terms(get_the_ID(), 'post_tag');

						if (!empty($tags) && !is_wp_error($tags)) : ?>
							<div class="flex flex-wrap gap-2 group">
								<?php foreach ($tags as $tag) : ?>
									<div class="p-2 rounded-[10px] w-max font-semibold text-14 leading-4 bg-bg-footer text-primary">
										<?php echo esc_html($tag->name);
										?>
									</div>
								<?php endforeach; ?>
							</div>
						<?php endif; ?>
					</div>

					<div class="author flex gap-2 items-center justify-start mb-6">
						<div class="text-14 leading-4"><?php the_author(); ?></div>
						<svg width="4" height="4" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M0.950195 1.99609V1.71582C0.950195 1.32389 1.07324 1.00033 1.31934 0.745117C1.56999 0.489909 1.90951 0.362305 2.33789 0.362305C2.77083 0.362305 3.11263 0.489909 3.36328 0.745117C3.61393 1.00033 3.73926 1.32389 3.73926 1.71582V1.99609C3.73926 2.38346 3.61393 2.70475 3.36328 2.95996C3.11719 3.21061 2.77767 3.33594 2.34473 3.33594C1.91634 3.33594 1.57682 3.21061 1.32617 2.95996C1.07552 2.70475 0.950195 2.38346 0.950195 1.99609Z" fill="#363636" fill-opacity="0.6" />
						</svg>
						<div class="text-14 leading-4"><?php the_time('j M Y'); ?></div>
					</div>
					<div class="border-b border-[#0B39661A] pb-6">
						<div class="text-16 font-semibold leading-[18px] underline cursor-pointer text-primary" id="toggle-categories">
							See more from same category
						</div>
						<div class="flex gap-4 flex-wrap mt-6 hidden" id="categories-container">
							<?php
							$categories = get_the_category();
							if (!empty($categories)) : ?>
								<div class="flex flex-wrap gap-2 group">
									<?php foreach ($categories as $cat) :
										$category_ids[] = $cat->term_id;
										$category_link = get_category_link($cat->term_id); ?>
										<a href="<?php echo esc_url($category_link); ?>" class="p-2 rounded-[10px] w-max font-semibold text-14 leading-4 bg-bg-footer text-primary">
											<?php echo esc_html($cat->name); ?>
										</a>
									<?php endforeach;

									$related_query = new WP_Query(array(
										'category__in'   => $category_ids,
										'posts_per_page' => 2, // Limit to 2 posts
										'post__not_in'   => array(get_the_ID()), // Exclude the current post
									));

									?>
								</div>
							<?php endif; ?>
						</div>
					</div>

					<div class="share border-b py-6 border-[#0B39661A]">
						Share this article to like-minded people
					</div>
					<div class="flex gap-4 pt-6">
						<a href="https://www.facebook.com/sharer.php?u=<?php echo esc_url($secure_permalink); ?>" class="bg-bg-footer w-10 h-10 rounded-[20px] flex justify-center items-center">
							<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M30.0003 16C30.0003 12.287 28.5253 8.72602 25.8998 6.10051C23.2742 3.475 19.7133 2.00001 16.0003 2.00001C12.4749 1.99675 9.07818 3.32359 6.48845 5.71548C3.89873 8.10738 2.30671 11.3882 2.0304 14.9027C1.75409 18.4172 2.81384 21.9065 4.99795 24.6737C7.18207 27.4409 10.3298 29.2823 13.8123 29.83V20.046H10.2603V16H13.8143V12.916C13.8143 9.40801 15.9043 7.46801 19.1023 7.46801C20.6343 7.46801 22.2363 7.74201 22.2363 7.74201V11.188H20.4703C18.7303 11.188 18.1903 12.268 18.1903 13.374V16H22.0723L21.4523 20.046H18.1883V29.83C21.4813 29.3085 24.4801 27.6292 26.6454 25.0939C28.8107 22.5587 30.0003 19.3341 30.0003 16Z" fill="#1877F2" />
								<path d="M21.4498 20.0458L22.0698 15.9998H18.1878V13.3738C18.1878 12.2678 18.7278 11.1878 20.4678 11.1878H22.2338V7.73982C22.2338 7.73982 20.6318 7.46582 19.0998 7.46582C15.8998 7.46582 13.8118 9.40582 13.8118 12.9138V15.9998H10.2598V20.0458H13.8138V29.8298C15.2635 30.058 16.74 30.058 18.1898 29.8298V20.0458H21.4498Z" fill="white" />
							</svg>
						</a>
						<!-- <a href="" class="bg-bg-footer w-10 h-10 rounded-[20px] flex justify-center items-center">
							<svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M6.59292 25.908C5.04669 25.8377 4.20673 25.5804 3.64805 25.3625C2.90778 25.0743 2.38 24.7312 1.82441 24.1764C1.26882 23.6215 0.924956 23.0938 0.638274 22.3535C0.420364 21.7948 0.163046 20.9549 0.0927274 19.4086C0.0154546 17.7372 0 17.2357 0 13.0012C0 8.76661 0.017 8.26588 0.0919547 6.59292C0.162273 5.04669 0.421137 4.20828 0.637501 3.64805C0.925729 2.90778 1.26959 2.38 1.82364 1.82364C2.37846 1.26882 2.90623 0.924183 3.64728 0.637501C4.20596 0.419592 5.04592 0.162273 6.59215 0.0919547C8.26433 0.0154546 8.76661 0 12.9996 0C17.2342 0 17.7349 0.017 19.4079 0.0919547C20.9541 0.162273 21.7925 0.421137 22.3527 0.637501C23.093 0.924183 23.6208 1.26882 24.1764 1.82364C24.732 2.37846 25.0743 2.90701 25.3625 3.64728C25.5804 4.20596 25.8377 5.04592 25.908 6.59215C25.9845 8.26511 26 8.76583 26 13.0004C26 17.2334 25.9845 17.7357 25.908 19.4086C25.8377 20.9549 25.5789 21.7948 25.3625 22.3535C25.0743 23.0938 24.7312 23.6215 24.1764 24.1764C23.6215 24.7312 23.093 25.0743 22.3527 25.3625C21.794 25.5804 20.9541 25.8377 19.4079 25.908C17.7364 25.9845 17.2342 26 12.9996 26C8.76661 26 8.26433 25.9853 6.59292 25.908Z" fill="url(#paint0_radial_1620_130)" />
								<path d="M6.59292 25.908C5.04669 25.8377 4.20673 25.5804 3.64805 25.3625C2.90778 25.0743 2.38 24.7312 1.82441 24.1764C1.26882 23.6215 0.924956 23.0938 0.638274 22.3535C0.420364 21.7948 0.163046 20.9549 0.0927274 19.4086C0.0154546 17.7372 0 17.2357 0 13.0012C0 8.76661 0.017 8.26588 0.0919547 6.59292C0.162273 5.04669 0.421137 4.20828 0.637501 3.64805C0.925729 2.90778 1.26959 2.38 1.82364 1.82364C2.37846 1.26882 2.90623 0.924183 3.64728 0.637501C4.20596 0.419592 5.04592 0.162273 6.59215 0.0919547C8.26433 0.0154546 8.76661 0 12.9996 0C17.2342 0 17.7349 0.017 19.4079 0.0919547C20.9541 0.162273 21.7925 0.421137 22.3527 0.637501C23.093 0.924183 23.6208 1.26882 24.1764 1.82364C24.732 2.37846 25.0743 2.90701 25.3625 3.64728C25.5804 4.20596 25.8377 5.04592 25.908 6.59215C25.9845 8.26511 26 8.76583 26 13.0004C26 17.2334 25.9845 17.7357 25.908 19.4086C25.8377 20.9549 25.5789 21.7948 25.3625 22.3535C25.0743 23.0938 24.7312 23.6215 24.1764 24.1764C23.6215 24.7312 23.093 25.0743 22.3527 25.3625C21.794 25.5804 20.9541 25.8377 19.4079 25.908C17.7364 25.9845 17.2342 26 12.9996 26C8.76661 26 8.26433 25.9853 6.59292 25.908Z" fill="url(#paint1_radial_1620_130)" />
								<path d="M9.80711 13.0556C9.80711 11.2775 11.2482 9.83563 13.0263 9.83563C14.8044 9.83563 16.2463 11.2775 16.2463 13.0556C16.2463 14.8337 14.8044 16.2756 13.0263 16.2756C11.2482 16.2756 9.80711 14.8337 9.80711 13.0556ZM8.06646 13.0556C8.06646 15.7949 10.287 18.0154 13.0263 18.0154C15.7656 18.0154 17.9861 15.7949 17.9861 13.0556C17.9861 10.3163 15.7656 8.09576 13.0263 8.09576C10.287 8.09576 8.06654 10.3161 8.06654 13.0556M17.0235 7.8991C17.0234 8.12835 17.0913 8.35247 17.2185 8.54313C17.3458 8.7338 17.5268 8.88243 17.7386 8.97025C17.9503 9.05806 18.1834 9.08111 18.4082 9.03647C18.6331 8.99184 18.8397 8.88153 19.0018 8.71949C19.164 8.55745 19.2745 8.35097 19.3193 8.12614C19.3641 7.90132 19.3412 7.66826 19.2536 7.45642C19.166 7.24459 19.0175 7.06351 18.8269 6.93607C18.6363 6.80863 18.4123 6.74056 18.183 6.74047H18.1826C17.8753 6.74061 17.5806 6.86271 17.3633 7.07995C17.1459 7.29719 17.0237 7.59181 17.0235 7.8991ZM9.12402 20.918C8.18229 20.8751 7.67044 20.7182 7.33028 20.5857C6.87932 20.4101 6.55755 20.201 6.21925 19.8632C5.88095 19.5253 5.67154 19.2039 5.49675 18.7529C5.36415 18.4129 5.20729 17.9009 5.16448 16.9592C5.11765 15.941 5.1083 15.6352 5.1083 13.0557C5.1083 10.4763 5.11842 10.1713 5.16448 9.15231C5.20736 8.21058 5.36539 7.69958 5.49675 7.35857C5.67231 6.90761 5.88141 6.58584 6.21925 6.24754C6.55709 5.90924 6.87854 5.69983 7.33028 5.52504C7.67028 5.39244 8.18229 5.23558 9.12402 5.19277C10.1422 5.14594 10.448 5.13659 13.0263 5.13659C15.6046 5.13659 15.9107 5.14656 16.9297 5.19292C17.8715 5.23581 18.3825 5.39383 18.7235 5.5252C19.1744 5.69999 19.4962 5.90986 19.8345 6.2477C20.1728 6.58554 20.3814 6.90776 20.557 7.35873C20.6896 7.69873 20.8465 8.21074 20.8893 9.15246C20.9361 10.1715 20.9454 10.4765 20.9454 13.0559C20.9454 15.6353 20.9361 15.9403 20.8893 16.9593C20.8464 17.9011 20.6887 18.4129 20.557 18.7531C20.3814 19.204 20.1723 19.5258 19.8345 19.8633C19.4967 20.2009 19.1744 20.4103 18.7235 20.5858C18.3835 20.7184 17.8715 20.8753 16.9297 20.9181C15.9116 20.9649 15.6057 20.9743 13.0263 20.9743C10.4468 20.9743 10.1419 20.9649 9.12402 20.9181M9.04404 3.45498C8.01577 3.50181 7.31313 3.66485 6.6995 3.90363C6.0644 4.1502 5.52604 4.48101 4.98845 5.01775C4.45086 5.55448 4.12091 6.09292 3.87433 6.7288C3.63556 7.34281 3.47251 8.04507 3.42568 9.07334C3.37808 10.1032 3.36719 10.4325 3.36719 13.0556C3.36719 15.6787 3.37808 16.008 3.42568 17.0379C3.47251 18.0662 3.63556 18.7684 3.87433 19.3824C4.12091 20.0175 4.45094 20.5569 4.98845 21.0934C5.52596 21.6299 6.06362 21.9603 6.6995 22.2076C7.31429 22.4463 8.01577 22.6094 9.04404 22.6562C10.0745 22.703 10.4032 22.7147 13.0263 22.7147C15.6494 22.7147 15.9787 22.7038 17.0086 22.6562C18.0369 22.6094 18.7391 22.4463 19.3531 22.2076C19.9882 21.9603 20.5266 21.6302 21.0641 21.0934C21.6017 20.5567 21.931 20.0175 22.1783 19.3824C22.417 18.7684 22.5809 18.0661 22.6269 17.0379C22.6737 16.0072 22.6846 15.6787 22.6846 13.0556C22.6846 10.4325 22.6737 10.1032 22.6269 9.07334C22.5801 8.04499 22.417 7.34242 22.1783 6.7288C21.931 6.09369 21.6009 5.55533 21.0641 5.01775C20.5274 4.48016 19.9882 4.1502 19.3539 3.90363C18.7391 3.66485 18.0368 3.50103 17.0093 3.45498C15.9793 3.40792 15.6502 3.39648 13.0275 3.39648C10.4047 3.39648 10.0749 3.40738 9.04442 3.45498" fill="white" />
								<defs>
									<radialGradient id="paint0_radial_1620_130" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(1.68269 25.4304) scale(33.0103)">
										<stop offset="0.09" stop-color="#FA8F21" />
										<stop offset="0.78" stop-color="#D82D7E" />
									</radialGradient>
									<radialGradient id="paint1_radial_1620_130" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(18.0093 24.5956) scale(29.0494)">
										<stop offset="0.64" stop-color="#8C3AAA" stop-opacity="0" />
										<stop offset="1" stop-color="#8C3AAA" />
									</radialGradient>
								</defs>
							</svg>
						</a> -->
						<a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo esc_url($secure_permalink); ?>" class="bg-bg-footer w-10 h-10 rounded-[20px] flex justify-center items-center">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M20.45 20.45H16.894V14.88C16.894 13.552 16.87 11.842 15.044 11.842C13.192 11.842 12.908 13.29 12.908 14.782V20.45H9.352V8.99603H12.766V10.562H12.814C13.51 9.37403 14.806 8.66203 16.182 8.71203C19.786 8.71203 20.452 11.082 20.452 14.168L20.45 20.448V20.45ZM5.34 7.43003C4.79375 7.42741 4.27059 7.20938 3.88414 6.8233C3.49769 6.43723 3.27915 5.91428 3.276 5.36803C3.276 4.23603 4.208 3.30403 5.34 3.30403C6.472 3.30403 7.402 4.23603 7.404 5.36803C7.404 6.50003 6.472 7.43003 5.34 7.43003ZM7.118 20.45H3.558V8.99603H7.118V20.45ZM22.22 2.97265e-05H1.77C1.3063 -0.00266353 0.860275 0.177749 0.528846 0.502062C0.197418 0.826375 0.00736933 1.26838 0 1.73203V22.268C0.00736933 22.7317 0.197418 23.1737 0.528846 23.498C0.860275 23.8223 1.3063 24.0027 1.77 24H22.222C22.6868 24.0038 23.1342 23.824 23.4672 23.4997C23.8001 23.1753 23.9916 22.7327 24 22.268V1.73003C23.9916 1.26568 23.8 0.823487 23.4669 0.499807C23.1339 0.176127 22.6864 -0.00279651 22.222 0.00202958L22.22 2.97265e-05Z" fill="#0A66C2" />
							</svg>

						</a>
						<a href="mailto:?subject=Check out this post&body=<?php echo esc_url($secure_permalink); ?>" class="bg-bg-footer w-10 h-10 rounded-[20px] flex justify-center items-center">
							<svg width="24" height="18" viewBox="0 0 24 18" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M5.46667 17.9718V8.50518L0 4.30518V15.9718C0 17.3052 0.666667 17.9718 2 17.9718" fill="#4285F4" />
								<path d="M5.2002 8.43861L12.0002 13.5719L18.8002 8.43861V1.90527L12.0002 7.03861L5.2002 1.90527" fill="#EA4335" />
								<path d="M18.5332 17.9718V8.50518L23.9999 4.30518V15.9718C23.9999 17.3052 23.3332 17.9718 21.9999 17.9718" fill="#34A853" />
								<path d="M0 4.43848L5.46667 8.63848V2.10515L3.46667 0.571818C1.66667 -0.828182 0 0.571818 0 2.30515" fill="#C5221F" />
								<path d="M23.9999 4.43848L18.5332 8.63848V2.10515L20.5332 0.571818C22.3332 -0.828182 23.9999 0.571818 23.9999 2.30515" fill="#FBBC04" />
							</svg>

						</a>
					</div>
					<?php
					if ($related_query->have_posts()) :
					?>
						<div class="rounded-[10px] text-24 w-full leading-[26px] text-primary my-6">Other Blogs <b>You May Like</b></div>

						<div class="grid grid-cols-2 gap-6 smd:grid-cols-1">
							<?php
							while ($related_query->have_posts()) : $related_query->the_post();
							?>
								<div class="flex flex-1 gap-4 flex-col">
									<?php if (has_post_thumbnail()) :
										$featured_image_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
										<img class="relative bg-transparent z-10 w-full rounded-[10px]" src="<?php echo esc_url($featured_image_url); ?>" alt="<?php the_title(); ?>">
									<?php endif; ?>

									<div class="flex gap-4 flex-wrap">
										<?php
										$categories = get_the_category();
										if (!empty($categories)) :
											$category_count = count($categories); ?>
											<div class="flex flex-wrap gap-2 group">
												<?php for ($i = 0; $i < min(2, $category_count); $i++) :
													$category_link = get_category_link($categories[$i]->term_id); ?>
													<a href="<?php echo esc_url($category_link); ?>" class="p-2 rounded-[10px] w-max font-semibold text-14 leading-4 bg-bg-footer text-primary">
														<?php echo esc_html($categories[$i]->name); ?>
													</a>
												<?php endfor; ?>

												<?php if ($category_count > 2) : ?>
													<div class="p-2 rounded-[10px] w-max font-semibold text-14 leading-4 bg-bg-footer text-primary cursor-pointer">
														+ <?php echo $category_count - 2; ?>
													</div>
													<div class="additional-categories hidden group-hover:flex flex-wrap gap-2">
														<?php for ($i = 2; $i < $category_count; $i++) :
															$category_link = get_category_link($categories[$i]->term_id); ?>
															<a href="<?php echo esc_url($category_link); ?>" class="p-2 rounded-[10px] w-max font-semibold text-14 leading-4 bg-bg-footer text-primary">
																<?php echo esc_html($categories[$i]->name); ?>
															</a>
														<?php endfor; ?>
													</div>
												<?php endif; ?>
											</div>
										<?php endif; ?>
									</div>

									<h2 class="text-20 leading-5 text-primary font-semibold"><?php the_title(); ?></h2>
									<div class="author flex gap-2 items-center justify-start">
										<div class="text-14 leading-4"><?php the_author(); ?></div>
										<svg width="4" height="4" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
											<circle cx="2" cy="2" r="2" fill="#363636" fill-opacity="0.6"></circle>
										</svg>
										<div class="text-14 leading-4"><?php the_time('j M Y'); ?></div>
									</div>
									<p class="text-16 leading-6 text-black line-clamp-3">
										<?php echo get_the_excerpt() ?: get_the_content(); ?>
									</p>
									<a href="<?php the_permalink(); ?>" class="bg-transparent border block w-max border-primary text-primary text-16 leading-5 font-semibold py-[10px] px-5 rounded-[20px]">
										Read More
									</a>
								</div>
							<?php
							endwhile;
							?>
						</div>
					<?php
						wp_reset_postdata();
					endif
					?>
				</div>
				<div class="content-right w-4/12 lgmd:w-full p-5 pl-8 lgmd:pl-5 flex flex-col gap-6 sticky top-[75px] h-max">
					<div class="rounded-[10px] lgmd:hidden text-24 w-full leading-[26px] text-primary">Table of<b> Contents</b></div>
					<div class="flex flex-col border-0 border-b border-[#0B39661A] pb-6 gap-2 lgmd:hidden toc-container">
						<?php
						if (!empty($matches[0])):
							foreach ($matches[2] as $index => $heading):
								$id = sanitize_title($heading); ?>

								<div class="flex gap-2 items-center toc-item py-1">
									<div class="w-6 h-6 flex justify-center items-center">
										<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M5 6H11M5 10H7.25M2.5 15H13.5C14.3284 15 15 14.3284 15 13.5V2.5C15 1.67157 14.3284 1 13.5 1H2.5C1.67157 1 1 1.67157 1 2.5V13.5C1 14.3284 1.67157 15 2.5 15Z" stroke="#0B3966" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
										</svg>
									</div>
									<a class="text-16 font-medium leading-6 line-clamp-1 flex-1" href="#<?php echo $id; ?>"><?php echo $heading ?></a>
								</div>

							<?php endforeach; ?>
						<?php endif; ?>
					</div>
					<div class="rounded-[10px] text-24 w-full leading-[26px] text-primary">Get <b>Updates</b></div>
					<div class="text-16 leading-6 text-[#363636]">Explore how WhatsApp CRM integration can transform your business in 2025.</div>
					<?php echo do_shortcode(HAPPILEE_SUBSCRIBE_FORM) ?>
				</div>
			</div>
		<?php
		endwhile;
		?>

	</main><!-- #main -->
</section><!-- #primary -->

<?php
get_footer();
