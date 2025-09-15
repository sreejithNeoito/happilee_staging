<?php

/**
 * happilee functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package happilee
 */

if (! defined('HAPPILEE_VERSION')) {
	/*
	 * Set the theme’s version number.
	 *
	 * This is used primarily for cache busting. If you use `npm run bundle`
	 * to create your production build, the value below will be replaced in the
	 * generated zip file with a timestamp, converted to base 36.
	 */
	define('HAPPILEE_VERSION', '30.1.1');
}

if (! defined('HAPPILEE_TYPOGRAPHY_CLASSES')) {
	/*
	 * Set Tailwind Typography classes for the front end, block editor and
	 * classic editor using the constant below.
	 *
	 * For the front end, these classes are added by the `happilee_content_class`
	 * function. You will see that function used everywhere an `entry-content`
	 * or `page-content` class has been added to a wrapper element.
	 *
	 * For the block editor, these classes are converted to a JavaScript array
	 * and then used by the `./javascript/block-editor.js` file, which adds
	 * them to the appropriate elements in the block editor (and adds them
	 * again when they’re removed.)
	 *
	 * For the classic editor (and anything using TinyMCE, like Advanced Custom
	 * Fields), these classes are added to TinyMCE’s body class when it
	 * initializes.
	 */
	define(
		'HAPPILEE_TYPOGRAPHY_CLASSES',
		'prose prose-neutral max-w-none prose-a:text-primary'
	);
}

if (! defined('HAPPILEE_SUBSCRIBE_FORM')) {
	/*
	 * Set the form_shortcode.
	 */
	define('HAPPILEE_SUBSCRIBE_FORM', '[forminator_form id="1083"]');
}

if (! function_exists('happilee_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function happilee_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on happilee, use a find and replace
		 * to change 'happilee' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('happilee', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
			array(
				'menu-1' => __('Primary', 'happilee'),
				'menu-2' => __('Primary end menu', 'happilee'),
				'menu-3' => __('Footer Menu', 'happilee'),
			)
		);

		class Custom_Walker_Nav_Menu extends Walker_Nav_Menu
		{
			//Start level for submenu (opens the <ul>)
			function start_lvl(&$output, $depth = 0, $args = array())
			{

				$indent = str_repeat("\t", $depth);
				if ($depth == 0) {
					$output .= "\n$indent<ul class=\"sub-menu sub-menu-" . $depth . " flex list-none\">\n";
				} else {
					$output .= "\n$indent<ul class=\"sub-menu sub-menu-" . $depth . " flex flex-col list-none\">\n";
				}
			}

			// End level for submenu (closes the </ul>)
			function end_lvl(&$output, $depth = 0, $args = array())
			{
				$indent = str_repeat("\t", $depth);
				$output .= "$indent</ul>\n";
			}

			// Start element (individual <li> with potential submenu)
			function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
			{
				$indent = ($depth) ? str_repeat("\t", $depth) : '';

				// Default class
				$class = 'font-semibold text-[14px] text-primary hover:text-secondary font-second';

				// Check if the current item is active
				if (in_array('current-menu-item', $item->classes)) {
					$class = 'font-semibold text-[14px] text-secondary hover:text-secondary font-second';
				}

				// Add any custom classes from WordPress admin
				$classes = implode(' ', array_filter($item->classes));

				// Check if the item has children (submenu)
				if (in_array('menu-item-has-children', $item->classes)) {
					$output .= $indent . '<li class="menu-item has-submenu ' . esc_attr($classes) . '" aria-haspopup="true" aria-expanded="false">';
				} else {
					$output .= $indent . '<li class="menu-item ' . esc_attr($classes) . '">';
				}

				// Create the anchor tag
				$output .= '<a href="' . esc_url($item->url) . '" class="' . esc_attr($class) . '">';
				$output .= esc_html($item->title);
				$output .= '</a>';

				// $output .= "</li>\n";
			}


			// End element (closes the </li>)
			function end_el(&$output, $item, $depth = 0, $args = array())
			{
				$output .= "</li>\n";
			}
		}




		// You may need to adjust your theme's functions.php or the place where you render the menu to use this custom walker




		class Custom_Walker_Primary_End extends Walker_Nav_Menu
		{
			function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
			{
				$class = '';
				if ($item->title === 'Login') {
					$class = 'bg-bg-footer text-primary';
				} elseif ($item->title === 'Start FREE Trial') {
					$class = 'bg-[#0b3966] text-white';
				}

				$output .= '<div class="flex justify-center items-center gap-2 ' . esc_attr($class) . ' px-4 py-2 rounded-[20px]">';
				$output .= '<a href="' . esc_url($item->url) . '" class="font-semibold text-[14px] font-second">';
				$output .= esc_html($item->title);
				$output .= '</a>';
				$output .= '</div>';
			}
		}


		class Custom_Walker_Footer_Menu extends Walker_Nav_Menu
		{
			function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
			{
				$output .= '<a href="' . esc_url($item->url) . '" class="text-16 leading-[19px] text-primary">';
				$output .= esc_html($item->title);
				$output .= '</a>';
			}
		}


		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

		// Add support for editor styles.
		add_theme_support('editor-styles');

		// Enqueue editor styles.
		add_editor_style('style-editor.css');
		add_editor_style('style-editor-extra.css');

		// Add support for responsive embedded content.
		add_theme_support('responsive-embeds');

		// Remove support for block templates.
		remove_theme_support('block-templates');
	}
endif;
add_action('after_setup_theme', 'happilee_setup');

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function happilee_widgets_init()
{
	register_sidebar(
		array(
			'name'          => __('Footer', 'happilee'),
			'id'            => 'sidebar-1',
			'description'   => __('Add widgets here to appear in your footer.', 'happilee'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'happilee_widgets_init');

/**
 * Enqueue scripts and styles.
 */

function happilee_scripts()
{
	// homepage
	// if (is_page('home')) { // Check if it's the homepage

	wp_enqueue_style('intl-tel-input-css', 'https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/24.6.0/build/css/intlTelInput.min.css');
	wp_enqueue_script('jquery');
	wp_enqueue_script('intl-tel-input-js', 'https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/24.6.0/build/js/intlTelInput.min.js', array('jquery'), null);

	//owl carousal

	wp_enqueue_style('owl-carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css');
	wp_enqueue_style('owl-theme', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css');
	wp_enqueue_script('owl-carousel-js', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', array('jquery'), null, true);
	// }


	wp_enqueue_script('lottie-js','https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.12.2/lottie.min.js',array(),'5.12.2',true);
	wp_enqueue_style('happilee-style', get_stylesheet_uri(), array(), HAPPILEE_VERSION);
	wp_enqueue_script('happilee-script', get_template_directory_uri() . '/js/script.min.js', array('jquery'), HAPPILEE_VERSION, true);

	wp_localize_script('happilee-script', 'ajax_obj', [
		'ajax_url' => admin_url('admin-ajax.php')
	]);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'happilee_scripts');



/**
 * Enqueue the block editor script.
 */
function happilee_enqueue_block_editor_script()
{
	if (is_admin()) {
		wp_enqueue_script(
			'happilee-editor',
			get_template_directory_uri() . '/js/block-editor.min.js',
			array(
				'wp-blocks',
				'wp-edit-post',
			),
			HAPPILEE_VERSION,
			true
		);
		wp_add_inline_script('happilee-editor', "tailwindTypographyClasses = '" . esc_attr(HAPPILEE_TYPOGRAPHY_CLASSES) . "'.split(' ');", 'before');
	}
}
add_action('enqueue_block_assets', 'happilee_enqueue_block_editor_script');

/*
 * Add defer attribute to specific scripts
 */

function happilee_add_defer_attribute($tag, $handle) {
	$scripts_to_defer = ['intl-tel-input-js', 'owl-carousel-js', 'happilee-script','forminator-form','forminator-front-scripts',
	'forminator-jquery-validate','lottie-js'];

	if (in_array($handle, $scripts_to_defer)) {
		return str_replace('<script ', '<script defer ', $tag);
	}

	return $tag;
}
add_filter('script_loader_tag', 'happilee_add_defer_attribute', 10, 2);


/**
 * Remove Post Type Slugs from URLs
 * This code removes the post type slug from URLs for specified post types
 */

// Remove post type slugs from URLs for specified post types
$post_types = ['landing']; // Add more post types here

// Remove slug from generated URLs
add_filter('post_type_link', function($post_link, $post) use ($post_types) {
    if (!in_array($post->post_type, $post_types) || $post->post_status !== 'publish') {
        return $post_link;
    }
    $obj = get_post_type_object($post->post_type);
    $slug = $obj->rewrite['slug'] ?? $obj->name ?? $post->post_type;
    return $slug ? str_replace("/{$slug}/", '/', $post_link) : $post_link;
}, 10, 2);


// Handle queries for clean URLs
add_action('pre_get_posts', function($query) use ($post_types) {
    if ($query->is_main_query() 
        && count($query->query) === 2 
        && isset($query->query['page']) 
        && !empty($query->query['name'])) {
        $query->set('post_type', array_merge(['post', 'page'], $post_types));
    }
});

// Redirect old URLs with slugs to new clean URLs
add_action('template_redirect', function() use ($post_types) {
    if (!is_singular($post_types) || is_admin() || is_preview()) return;
    
    global $wp;
    $obj = get_post_type_object(get_post_type());
    $slug = $obj->rewrite['slug'] ?? $obj->name ?? get_post_type();
    $current_url = trailingslashit(home_url($wp->request ?? ''));
    
    if ($slug && str_contains($current_url, "/{$slug}")) {
        wp_safe_redirect(str_replace("/{$slug}", '', $current_url), 301);
        exit;
    }
});


/**
 * Add the Tailwind Typography classes to TinyMCE.
 *
 * @param array $settings TinyMCE settings.
 * @return array
 */
function happilee_tinymce_add_class($settings)
{
	$settings['body_class'] = HAPPILEE_TYPOGRAPHY_CLASSES;
	return $settings;
}
add_filter('tiny_mce_before_init', 'happilee_tinymce_add_class');

/**
 * Get page ID by slug
 */
function get_page_id_by_path($path)
{
	// Sanitize the path
	$sanitized_path = trim($path);

	// Get the page by path (slug)
	$page = get_page_by_path($sanitized_path);

	// Return the page ID or null if not found
	return $page ? $page->ID : null;
}

/**
 * Disable the emoji's
 */
function disable_emojis()
{
	remove_action('wp_head', 'print_emoji_detection_script', 7);
	remove_action('admin_print_scripts', 'print_emoji_detection_script');
	remove_action('wp_print_styles', 'print_emoji_styles');
	remove_action('admin_print_styles', 'print_emoji_styles');
	remove_filter('the_content_feed', 'wp_staticize_emoji');
	remove_filter('comment_text_rss', 'wp_staticize_emoji');
	remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
	add_filter('tiny_mce_plugins', 'disable_emojis_tinymce');
	add_filter('wp_resource_hints', 'disable_emojis_remove_dns_prefetch', 10, 2);
}
add_action('init', 'disable_emojis');

/**
 * Filter function used to remove the tinymce emoji plugin.
 * 
 * @param array $plugins 
 * @return array Difference betwen the two arrays
 */
function disable_emojis_tinymce($plugins)
{
	if (is_array($plugins)) {
		return array_diff($plugins, array('wpemoji'));
	} else {
		return array();
	}
}

/**
 * Remove emoji CDN hostname from DNS prefetching hints.
 *
 * @param array $urls URLs to print for resource hints.
 * @param string $relation_type The relation type the URLs are printed for.
 * @return array Difference betwen the two arrays.
 */
function disable_emojis_remove_dns_prefetch($urls, $relation_type)
{
	if ('dns-prefetch' == $relation_type) {
		/** This filter is documented in wp-includes/formatting.php */
		$emoji_svg_url = apply_filters('emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/');

		$urls = array_diff($urls, array($emoji_svg_url));
	}

	return $urls;
}

/**
 * Remove jQuery Migrate from being loaded on the frontend.
 *
 * This function removes jQuery Migrate from the dependency array of jQuery,
 * preventing it from being loaded unless it's required by an admin page or
 * plugin/theme.
 *
 * @param WP_Scripts $scripts The scripts instance.
 * @return void
 */
function remove_jquery_migrate($scripts)
{
	if (! is_admin() && isset($scripts->registered['jquery'])) {
		$scripts->registered['jquery']->deps = array_diff($scripts->registered['jquery']->deps, array('jquery-migrate'));
	}
}
add_action('wp_default_scripts', 'remove_jquery_migrate');

// full credit for this code goes to: https://jeroensormani.com/automatically-add-ids-to-your-headings/
function auto_id_headings($content)
{

	$content = preg_replace_callback('/(\<h[1-6](.*?))\>(.*)(<\/h[1-6]>)/i', function ($matches) {
		if (! stripos($matches[0], 'id=')) :
			$matches[0] = $matches[1] . $matches[2] . ' id="' . sanitize_title($matches[3]) . '">' . $matches[3] . $matches[4];
		endif;
		return $matches[0];
	}, $content);

	return $content;
}
add_filter('the_content', 'auto_id_headings');


/*Composer autoload*/

$composer_autoload = get_template_directory() . '/vendor/autoload.php';
if (file_exists($composer_autoload)) {
	require_once $composer_autoload;
}

/*
 * Happilee login URL
 * @since june 2025
 */

function happilee_login_logo() {
	$logo_url = get_template_directory_uri() . '/assets/images/logo.png';
	echo '<style type="text/css">
		#login h1 a, .login h1 a {
			background-image: url("' . esc_url($logo_url) . '");
			height: 80px;
			width: 300px;
			background-size: contain;
			background-repeat: no-repeat;
			padding-bottom: 10px;
		}
	</style>';
}
add_action('login_enqueue_scripts', 'happilee_login_logo');

/**
 *  Change wordpress login logo URL
 */

function happilee_login_logo_url() {
    return home_url();
}
add_filter('login_headerurl', 'happilee_login_logo_url');

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Custom-fields for pages / posts
 */

require get_template_directory() . '/inc/cpt.php';

require_once get_template_directory() . '/inc/cmb2/init.php';

require_once get_template_directory() . '/inc/home_page_cf.php';

require get_template_directory() . '/inc/sliderclients_cf.php';

require get_template_directory() . '/inc/features_cf.php';

require get_template_directory() . '/inc/industries_cf.php';

require get_template_directory() . '/inc/landing_cf.php';

require get_template_directory() . '/inc/pricing_cf.php';

require get_template_directory() . '/inc/theme_option_cf.php';

require get_template_directory() . '/inc/link_generator_cf.php';

require get_template_directory() . '/inc/partner_cf.php';
/**
 * Custom cpt
 */
require get_template_directory() . '/inc/testimonials_cpt.php';

require get_template_directory() . '/inc/post_featured.php';

require get_template_directory() . '/inc/search_blog.php';

/*free whatsapp link generator */
require get_template_directory() . '/inc/whatsapp-link-generator.php';