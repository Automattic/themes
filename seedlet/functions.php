<?php
/**
 * Seedlet functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Seedlet
 * @since 1.1.0
 */

/**
 * seedlet only works in WordPress 4.7 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.7', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
	return;
}

if ( ! function_exists( 'seedlet_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */

	function seedlet_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on seedlet, use a find and replace
		 * to change 'seedlet' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'seedlet', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 1568, 9999 );

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
			array(
				'primary' => __( 'Primary Navigation', 'seedlet' ),
				'footer'  => __( 'Footer Navigation', 'seedlet' ),
				'social'  => __( 'Social Links Navigation', 'seedlet' ),
			)
		);

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
				'navigation-widgets',
			)
		);

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 240,
				'width'       => 240,
				'flex-width'  => false,
				'flex-height' => false,
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		$editor_stylesheet_path = './assets/css/style-editor.css';

		// Enqueue editor styles.
		add_editor_style(
			array(
				seedlet_fonts_url(),
				'./assets/css/style-editor.css',
			)
		);

		// Add custom editor font sizes.
		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name'      => __( 'Tiny', 'seedlet' ),
					'shortName' => __( 'XS', 'seedlet' ),
					'size'      => 14,
					'slug'      => 'tiny',
				),
				array(
					'name'      => __( 'Small', 'seedlet' ),
					'shortName' => __( 'S', 'seedlet' ),
					'size'      => 16,
					'slug'      => 'small',
				),
				array(
					'name'      => __( 'Normal', 'seedlet' ),
					'shortName' => __( 'M', 'seedlet' ),
					'size'      => 18,
					'slug'      => 'normal',
				),
				array(
					'name'      => __( 'Large', 'seedlet' ),
					'shortName' => __( 'L', 'seedlet' ),
					'size'      => 24,
					'slug'      => 'large',
				),
				array(
					'name'      => __( 'Huge', 'seedlet' ),
					'shortName' => __( 'XL', 'seedlet' ),
					'size'      => 28,
					'slug'      => 'huge',
				),
			)
		);

		// Editor color palette.
		$colors_theme_mod = get_theme_mod( 'custom_colors_active' );
		$primary          = ( ! empty( $colors_theme_mod ) && 'default' === $colors_theme_mod || empty( get_theme_mod( 'seedlet_--global--color-primary' ) ) ) ? '#000000' : get_theme_mod( 'seedlet_--global--color-primary' );
		$secondary        = ( ! empty( $colors_theme_mod ) && 'default' === $colors_theme_mod || empty( get_theme_mod( 'seedlet_--global--color-secondary' ) ) ) ? '#3C8067' : get_theme_mod( 'seedlet_--global--color-secondary' );
		$foreground       = ( ! empty( $colors_theme_mod ) && 'default' === $colors_theme_mod || empty( get_theme_mod( 'seedlet_--global--color-foreground' ) ) ) ? '#333333' : get_theme_mod( 'seedlet_--global--color-foreground' );
		$tertiary         = ( ! empty( $colors_theme_mod ) && 'default' === $colors_theme_mod || empty( get_theme_mod( 'seedlet_--global--color-tertiary' ) ) ) ? '#FAFBF6' : get_theme_mod( 'seedlet_--global--color-tertiary' );
		$background       = ( ! empty( $colors_theme_mod ) && 'default' === $colors_theme_mod || empty( get_theme_mod( 'seedlet_--global--color-background' ) ) ) ? '#FFFFFF' : get_theme_mod( 'seedlet_--global--color-background' );

		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => __( 'Primary', 'seedlet' ),
					'slug'  => 'primary',
					'color' => $primary,
				),
				array(
					'name'  => __( 'Secondary', 'seedlet' ),
					'slug'  => 'secondary',
					'color' => $secondary,
				),
				array(
					'name'  => __( 'Foreground', 'seedlet' ),
					'slug'  => 'foreground',
					'color' => $foreground,
				),
				array(
					'name'  => __( 'Tertiary', 'seedlet' ),
					'slug'  => 'tertiary',
					'color' => $tertiary,
				),
				array(
					'name'  => __( 'Background', 'seedlet' ),
					'slug'  => 'background',
					'color' => $background,
				),
			)
		);

		$gradient_color_a = $secondary;
		$gradient_color_b = $tertiary;

		add_theme_support(
			'editor-gradient-presets',
			array(
				array(
					'name'     => __( 'Diagonal', 'seedlet' ),
					'gradient' => 'linear-gradient(to bottom right, ' . $gradient_color_a . ' 49.9%, ' . $gradient_color_b . ' 50%)',
					'slug'     => 'hard-diagonal',
				),
				array(
					'name'     => __( 'Diagonal inverted', 'seedlet' ),
					'gradient' => 'linear-gradient(to top left, ' . $gradient_color_a . ' 49.9%, ' . $gradient_color_b . ' 50%)',
					'slug'     => 'hard-diagonal-inverted',
				),
				array(
					'name'     => __( 'Horizontal', 'seedlet' ),
					'gradient' => 'linear-gradient(to bottom, ' . $gradient_color_a . ' 50%, ' . $gradient_color_b . ' 50%)',
					'slug'     => 'hard-horizontal',
				),
				array(
					'name'     => __( 'Horizontal inverted', 'seedlet' ),
					'gradient' => 'linear-gradient(to top, ' . $gradient_color_a . ' 50%, ' . $gradient_color_b . ' 50%)',
					'slug'     => 'hard-horizontal-inverted',
				),
				array(
					'name'     => __( 'Diagonal gradient', 'seedlet' ),
					'gradient' => 'linear-gradient(to bottom right, ' . $gradient_color_a . ', ' . $gradient_color_b . ')',
					'slug'     => 'diagonal',
				),
				array(
					'name'     => __( 'Diagonal inverted gradient', 'seedlet' ),
					'gradient' => 'linear-gradient(to top left, ' . $gradient_color_a . ', ' . $gradient_color_b . ')',
					'slug'     => 'diagonal-inverted',
				),
				array(
					'name'     => __( 'Horizontal gradient', 'seedlet' ),
					'gradient' => 'linear-gradient(to bottom, ' . $gradient_color_a . ', ' . $gradient_color_b . ')',
					'slug'     => 'horizontal',
				),
				array(
					'name'     => __( 'Horizontal inverted gradient', 'seedlet' ),
					'gradient' => 'linear-gradient(to top, ' . $gradient_color_a . ', ' . $gradient_color_b . ')',
					'slug'     => 'horizontal-inverted',
				),
				array(
					'name'     => __( 'Stripe', 'seedlet' ),
					'gradient' => 'linear-gradient(to bottom, transparent 20%, ' . $gradient_color_a . ' 20%, ' . $gradient_color_a . ' 80%, transparent 80%)',
					'slug'     => 'stripe',
				),
			)
		);

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Add support for custom line height controls.
		add_theme_support( 'custom-line-height' );

		// Add support for experimental link color control.
		add_theme_support( 'experimental-link-color' );

		// Add support for experimental cover block spacing.
		add_theme_support( 'custom-spacing' );

		// Add support for custom units.
		add_theme_support( 'custom-units' );

		// Add support for WordPress.com Global Styles.
		add_theme_support(
			'jetpack-global-styles',
			array(
				'enable_theme_default' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'seedlet_setup' );

/**
 * Add Google webfonts, if necessary
 *
 * - See: http://themeshaper.com/2014/08/13/how-to-add-google-fonts-to-wordpress-themes/
 */
function seedlet_fonts_url() {

	$fonts_url = '';

	/* Translators: If there are characters in your language that are not
	* supported by Fira Sans, translate this to 'off'. Do not translate
	* into your own language.
	*/
	$fira_sans = esc_html_x( 'on', 'Fira Sans: on or off', 'seedlet' );

	/* Translators: If there are characters in your language that are not
	* supported by Playfair Display, translate this to 'off'. Do not translate
	* into your own language.
	*/
	$playfair_display = esc_html_x( 'on', 'Playfair Display: on or off', 'seedlet' );

	if ( 'off' !== $fira_sans || 'off' !== $playfair_display ) {
		$font_families = array();

		if ( 'off' !== $fira_sans ) {
			$font_families[] = 'Fira Sans:ital,wght@0,400;0,500;1,400';
		}

		if ( 'off' !== $playfair_display ) {
			$font_families[] = 'Playfair Display:ital,wght@0,400;0,700;1,400';
		}

		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext' ),
		);

		$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}

	return esc_url_raw( $fonts_url );
}


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function seedlet_widgets_init() {

	register_sidebar(
		array(
			'name'          => __( 'Footer', 'seedlet' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Add widgets here to appear in your footer.', 'seedlet' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'seedlet_widgets_init' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width Content width.
 */
function seedlet_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'seedlet_content_width', 620 );
}
add_action( 'after_setup_theme', 'seedlet_content_width', 0 );

/**
 * Enqueue scripts and styles.
 */
function seedlet_scripts() {
	// Enqueue Google fonts
	wp_enqueue_style( 'seedlet-fonts', seedlet_fonts_url(), array(), null );

	// Theme styles
	wp_enqueue_style( 'seedlet-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );

	// Navigation styles
	wp_enqueue_style( 'seedlet-style-navigation', get_template_directory_uri() . '/assets/css/style-navigation.css', array(), wp_get_theme()->get( 'Version' ) );

	// RTL styles
	wp_style_add_data( 'seedlet-style', 'rtl', 'replace' );
	wp_style_add_data( 'seedlet-style-navigation', 'rtl', 'replace' );

	// Print styles
	wp_enqueue_style( 'seedlet-print-style', get_template_directory_uri() . '/assets/css/print.css', array(), wp_get_theme()->get( 'Version' ), 'print' );

	// Threaded comment reply styles
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	// Main navigation scripts
	wp_enqueue_script( 'seedlet-primary-navigation-script', get_template_directory_uri() . '/assets/js/primary-navigation.js', array(), wp_get_theme()->get( 'Version' ), true );

	// Note, the is_IE global variable is defined by WordPress and is used
	// to detect if the current browser is internet explorer.
	global $is_IE;
	if ( $is_IE ) {
		// If IE 11 or below, use a ponyfill to add CSS Variable support
		wp_register_script( 'css-vars-ponyfill', get_template_directory_uri() . '/assets/js/css-vars-ponyfill2.js' );
		wp_enqueue_script(
			'ie11-fix',
			get_template_directory_uri() . '/assets/js/ie11-fix.js',
			array( 'css-vars-ponyfill' ),
			'1.0'
		);
	}

}
add_action( 'wp_enqueue_scripts', 'seedlet_scripts' );

/**
 * Fix skip link focus in IE11.
 *
 * This does not enqueue the script because it is tiny and because it is only for IE11,
 * thus it does not warrant having an entire dedicated blocking script being loaded.
 *
 * @link https://git.io/vWdr2
 */
function seedlet_skip_link_focus_fix() {
	// The following is minified via `terser --compress --mangle -- js/skip-link-focus-fix.js`.
	?>
	<script>
	/(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())},!1);
	</script>
	<?php
}
add_action( 'wp_print_footer_scripts', 'seedlet_skip_link_focus_fix' );

if ( ! function_exists( 'seedlet_author_bio' ) ) {
	/**
	 * Implements the Jetpack Author bio
	 */
	function seedlet_author_bio() {
		if ( ! function_exists( 'jetpack_author_bio' ) ) {
			if ( ! is_singular( 'attachment' ) ) {
				get_template_part( 'template-parts/post/author-bio' );
			}
		} else {
			jetpack_author_bio();
		}
	}
}

/**
 * SVG Icons class.
 */
require get_template_directory() . '/classes/class-seedlet-svg-icons.php';

/**
 * Custom colors class.
 */
if ( ! class_exists( 'Colors_Manager' ) ) { // Check for presence of wpcom color manager to avoid duplicate color customization functionality.
	require get_template_directory() . '/classes/class-seedlet-custom-colors.php';
}

/**
 * Enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * SVG Icons related functions.
 */
require get_template_directory() . '/inc/icon-functions.php';

/**
 * Custom template tags for the theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Block Patterns.
 */
require get_template_directory() . '/inc/block-patterns.php';

/**
 * Block Styles.
 */
require get_template_directory() . '/inc/block-styles.php';

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
