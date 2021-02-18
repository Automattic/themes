<?php
/**
 * toujours functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Toujours
 */

if ( ! function_exists( 'toujours_setup' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function toujours_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on toujours, use a find and replace
		 * to change 'toujours' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'toujours', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		// Add support for responsive embeds.
		add_theme_support( 'responsive-embeds' );

		// Add custom colors to Gutenberg
		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => esc_html__( 'Blue', 'toujours' ),
					'slug'  => 'blue',
					'color' => '#2590ec',
				),
				array(
					'name'  => esc_html__( 'Dark Gray', 'toujours' ),
					'slug'  => 'dark-gray',
					'color' => '#404040',
				),
				array(
					'name'  => esc_html__( 'Medium Gray', 'toujours' ),
					'slug'  => 'medium-gray',
					'color' => '#666',
				),
				array(
					'name'  => esc_html__( 'Light Gray', 'toujours' ),
					'slug'  => 'light-gray',
					'color' => '#eee',
				),
				array(
					'name'  => esc_html__( 'White', 'toujours' ),
					'slug'  => 'white',
					'color' => '#fff',
				),
			)
		);

		/*
		 * Editor styles
		 */
		add_editor_style( array( get_template_directory_uri() . '/editor-style.css', toujours_fonts_url() ) );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		/*
		 * Custom image sizes
		 */
		add_image_size( 'toujours-banner', 1160, 600, true );
		add_image_size( 'toujours-featured', 940, 9999 );
		add_image_size( 'toujours-trio', 680, 383, true ); /* image size larger for mobile */

		/*
		 * Register menu locations
		 *
		 * Include check to see if jetpack_social_menu supported
		 */
		if ( ! function_exists( 'jetpack_social_menu' ) ) {
			register_nav_menus(
				array(
					'primary' => esc_html__( 'Primary Menu', 'toujours' ),
					'social'  => esc_html__( 'Social Menu', 'toujours' ),
				)
			);
		} else {
			register_nav_menus(
				array(
					'primary' => esc_html__( 'Primary Menu', 'toujours' ),
				)
			);
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
			)
		);

		/*
		 * Enable support for Post Formats.
		 * See https://developer.wordpress.org/themes/functionality/post-formats/
		 */
		add_theme_support(
			'post-formats',
			array(
				'aside',
				'audio',
				'gallery',
				'image',
				'video',
				'quote',
				'link',
				'status',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'toujours_custom_background_args',
				array(
					'default-color' => 'eeeeee',

					/*
					* We're using a unique filename for the background image
					* to avoid users uploading a file with the same filename
					* and avoiding conflict with the `user-background` body_class
					* in inc/extras.php and assets/js/customizer.js
					*/

					'default-image' => esc_url( get_template_directory_uri() ) . '/images/toujoursbackground20160105.png',
				)
			)
		);
	}
endif; // toujours_setup
add_action( 'after_setup_theme', 'toujours_setup' );


/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function toujours_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'toujours_content_width', 760 );
}
add_action( 'after_setup_theme', 'toujours_content_width', 0 );


function toujours_excerpt_length( $length ) {
	return 35;
}
add_filter( 'excerpt_length', 'toujours_excerpt_length', 999 );

/**
 * Replaces the excerpt "more" text by a link
 */
if ( ! function_exists( 'toujours_excerpt_continue_reading' ) ) {
	function toujours_excerpt_continue_reading() {
		return '&hellip; <a href="' . esc_url( get_permalink() ) . '">' . sprintf( esc_html__( 'More', 'toujours' ), '<span class="screen-reader-text"> "' . get_the_title() . '"</span>' ) . '</a>';
	}
}
add_filter( 'excerpt_more', 'toujours_excerpt_continue_reading' );

/**
 *
 */
function toujours_recent_three_posts() {

	// Return early if this feature has been disabled.
	if ( ! get_theme_mod( 'toujours_recent_posts' ) ) {
		return false;
	}

	if ( false === ( $latest_post_ids = get_transient( 'latest_post_ids' ) ) ) {
		/*
		Check if Featured Content option 'Display tag content in all listings' is checked
		If not, exclude those posts from the three recent posts as well
		*/
		$exclude_tag = '';
		if ( toujours_has_banner_posts( 1 ) ) {
			$featured_options = get_option( 'featured-content' );
			$featured_tag_id  = $featured_options['tag-id'];
			$featured_show    = $featured_options['show-all'];

			if ( 0 == $featured_show ) {
				$exclude_tag = $featured_tag_id;
			}
		}

		$args   = array(
			'ignore_sticky_posts' => 1,
			'post__not_in'        => get_option( 'sticky_posts' ),
			'posts_per_page'      => '3',
			'tag__not_in'         => array( $exclude_tag ),
		);
		$latest = new WP_Query();
		$latest->query( $args );

		while ( $latest->have_posts() ) {
			$latest->the_post();
			$latest_post_ids[] = $latest->post->ID;
		}
		wp_reset_postdata();
	}

	return $latest_post_ids;
}
add_filter( 'toujours-recent-posts', 'toujours_recent_three_posts' );


/**
 * Filter the home page posts, and remove any featured post IDs from it. Hooked
 * onto the 'pre_get_posts' action, this changes the parameters of the query
 * before it gets any posts.
 *
 * @global array $featured_post_id
 * @param WP_Query $query
 * @return WP_Query Possibly modified WP_query
 */
function toujours_home_posts( $query = false ) {
	// Bail if not home, not a query, not main query.
	if ( ! is_home() || ! is_a( $query, 'WP_Query' ) || ! $query->is_main_query() ) {
		return $query;
	}

	$recent = apply_filters( 'toujours-recent-posts', false );

	// Bail if no featured posts.
	if ( ! $recent ) {
		return $query;
	}

	// Exclude featured posts from the main query.
	$query->query_vars['post__not_in'] = (array) $recent;

	return $query;
}
add_action( 'pre_get_posts', 'toujours_home_posts' );


/**
 * Wrap avatars in HTML for easier styling
 */
function toujours_get_avatar( $avatar ) {
	if ( ! is_admin() ) {
		$avatar = '<span class="avatar-container"><span class="avatar-crop">' . $avatar . '</span></span>';
	}
	return $avatar;
}
add_filter( 'get_avatar', 'toujours_get_avatar', 10, 5 );

/**
 * Enqueuing Google Fonts
 */
function toujours_fonts_url() {
	$fonts_url = '';

	/* Translators: If there are characters in your language that are not
	* supported by Alegreya Sans, translate this to 'off'. Do not translate
	* into your own language.
	*/
	$alegreya_sans = esc_html_x( 'on', 'Alegreya Sans font: on or off', 'toujours' );

	/* Translators: If there are characters in your language that are not
	* supported by Open Sans, translate this to 'off'. Do not translate
	* into your own language.
	*/
	$merriweather = esc_html_x( 'on', 'Merriweather font: on or off', 'toujours' );

	if ( 'off' !== $alegreya_sans || 'off' !== $merriweather ) {
		$font_families = array();

		if ( 'off' !== $alegreya_sans ) {
			$font_families[] = 'Alegreya Sans:300,500,300italic,500italic';
		}

		if ( 'off' !== $merriweather ) {
			$font_families[] = 'Merriweather:700italic,400,400italic,700,600';
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
function toujours_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'toujours' ),
			'id'            => 'sidebar-1',
			'description'   => '',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer', 'toujours' ),
			'id'            => 'footer',
			'description'   => '',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
}
add_action( 'widgets_init', 'toujours_widgets_init' );



/**
 * Counts the number of widgets in a specific sidebar
 *
 * @param   string  $id
 * @return  integer number of widgets in the sidebar
 */
function toujours_count_widgets( $id ) {
	$count            = 0;
	$sidebars_widgets = wp_get_sidebars_widgets();

	if ( array_key_exists( $id, $sidebars_widgets ) ) {
		$count = (int) count( (array) $sidebars_widgets[ $id ] );
	}
	return $count;
}

/**
 * Widget column class helper
 *
 * @param   string  $id
 * @return  string  grid class
 */
function toujours_widget_column_class( $widget_id ) {
	$count = toujours_count_widgets( $widget_id );
	$class = '';
	if ( $count >= 4 ) {
		$class .= 'widgets-four';
	} elseif ( 3 === $count ) {
		$class .= 'widgets-three';
	} elseif ( 2 === $count ) {
		$class .= 'widgets-two';
	} else {
		$class .= 'widget-one';
	}
	return $class;
}


/**
 * Return the post URL.
 *
 * @uses get_url_in_content() to get the URL in the post meta (if it exists) or
 * the first link found in the post content.
 *
 * Falls back to the post permalink if no URL is found in the post.
 *
 * Borrowed from Twenty Thirteen.
*/
function toujours_get_link_url() {
	$content = get_the_content();
	$has_url = get_url_in_content( $content );

	return ( $has_url ) ? $has_url : apply_filters( 'the_permalink', get_permalink() );
}


/**
 * Enqueue scripts and styles.
 */
function toujours_scripts() {
	wp_enqueue_style( 'toujours-style', get_stylesheet_uri() );
	wp_enqueue_style( 'toujours-fonts', toujours_fonts_url(), array(), null );

	// Gutenberg styles
	wp_enqueue_style( 'toujours-blocks', get_template_directory_uri() . '/blocks.css' );

	wp_enqueue_script( 'flexslider', get_template_directory_uri() . '/js/jquery.flexslider.js', array( 'jquery' ), '20160104', true );
	wp_enqueue_script( 'imagesloaded', get_template_directory_uri() . '/js/imagesloaded.pk.js', array( 'jquery' ), '20151221', true );
	wp_enqueue_script( 'toujours-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );
	wp_enqueue_script( 'toujours-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	wp_enqueue_script( 'toujours-global', get_template_directory_uri() . '/js/global.js', array( 'jquery', 'flexslider', 'masonry' ), '20151215', true );
	// Localize 'Previous' and 'Next' links in slideshow
	$translation_array = array(
		'next_link'     => esc_html__( 'Next Slide', 'toujours' ),
		'previous_link' => esc_html__( 'Previous Slide', 'toujours' ),
	);
	wp_localize_script( 'toujours-global', 'toujours_script_strings', $translation_array );

	if ( wp_style_is( 'genericons', 'registered' ) ) {
		wp_enqueue_style( 'genericons' );
	} else {
		wp_enqueue_style( 'genericons', get_template_directory_uri() . '/genericons/genericons.css', array(), null );
	}

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'toujours_scripts' );

/**
 * Gutenberg Editor Styles
 */
function toujours_editor_styles() {
	wp_enqueue_style( 'toujours-editor-block-style', get_template_directory_uri() . '/editor-blocks.css' );
	wp_enqueue_style( 'toujours-fonts', toujours_fonts_url(), array(), null );
}
add_action( 'enqueue_block_editor_assets', 'toujours_editor_styles' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
