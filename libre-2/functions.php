<?php
/**
 * Libre 2 functions and definitions
 *
 * @package Libre 2
 */

if ( ! function_exists( 'libre_2_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function libre_2_setup() {

		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 */
		load_theme_textdomain( 'libre-2', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Header', 'libre-2' ),
			)
		);

		/*
		 * Add support for Featured Images
		 */
		add_theme_support( 'post-thumbnails' );
		add_image_size( 'libre-2-post-thumbnail', '1088', '9999' );

		/*
		 * Add support for core Custom Logos
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'     => 300,
				'width'      => 300,
				'flex-width' => true,
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'gallery',
				'caption',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'libre_2_custom_background_args',
				array(
					'default-color' => 'ffffff',
				)
			)
		);

		/* Add support for editor styles */
		add_theme_support( 'editor-styles' );
		// Load regular editor styles into the new block-based editor.
		add_editor_style(
			array(
				'style.css',
				'/css/blocks.css',
				libre_2_fonts_url(),
			)
		);

		// Add support for responsive embeds.
		add_theme_support( 'responsive-embeds' );

		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );
	}
endif; // libre_2_setup
add_action( 'after_setup_theme', 'libre_2_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function libre_2_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'libre_2_content_width', 739 );
}
add_action( 'after_setup_theme', 'libre_2_content_width', 0 );

/*
 * Adjust $content_width for full-width page template
 */

if ( ! function_exists( 'libre_2_content_width' ) ) :

	function libre_2_content_width() {
		 global $content_width;

		if ( is_page_template( 'templates/full-width-page.php' ) ) {
			$content_width = 1088; //pixels
		}
	}
	add_action( 'template_redirect', 'libre_2_content_width' );

endif; // if ! function_exists( 'libre_2_content_width' )

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function libre_2_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'libre-2' ),
			'id'            => 'sidebar-1',
			'description'   => '',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer 1', 'libre-2' ),
			'id'            => 'sidebar-2',
			'description'   => '',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer 2', 'libre-2' ),
			'id'            => 'sidebar-3',
			'description'   => '',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer 3', 'libre-2' ),
			'id'            => 'sidebar-4',
			'description'   => '',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'libre_2_widgets_init' );

/**
 * Register Google Fonts
 */
function libre_2_fonts_url() {
	$fonts_url = '';

	/* Translators: If there are characters in your language that are not
	 * supported by Libre Baskerville, translate this to 'off'. Do not translate
	 * into your own language.
	 */
	$libre = esc_html_x( 'on', 'Libre Baskerville font: on or off', 'libre-2' );

	if ( 'off' !== $libre ) {
		$font_families   = array();
		$font_families[] = 'Libre Baskerville:400,400italic,700';

		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext' ),
		);

		$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}

	return esc_url_raw( $fonts_url );

}

/**
 * Add preconnect for Google Fonts.
 *
 * @param array  $urls           URLs to print for resource hints.
 * @param string $relation_type  The relation type the URLs are printed.
 * @return array $urls           URLs to print for resource hints.
 */
/*
function libre_2_resource_hints( $urls, $relation_type ) {
	if ( wp_style_is( 'libre-2-fonts', 'queue' ) && 'preconnect' === $relation_type ) {
		$urls[] = array(
			'href' => 'https://fonts.gstatic.com',
			'crossorigin',
		);
	}

	return $urls;
}
add_filter( 'wp_resource_hints', 'libre_2_resource_hints', 10, 2 );
*/

/**
 * Enqueue scripts and styles.
 */
function libre_2_scripts() {
	wp_enqueue_style( 'libre-2-style', get_stylesheet_uri() );

	// Theme block stylesheet.
	wp_enqueue_style( 'libre-2-block-style', get_theme_file_uri( '/css/blocks.css' ), array( 'libre-2-style' ), '1.0' );

	wp_enqueue_style( 'libre-2-fonts', libre_2_fonts_url(), array(), null );

	wp_enqueue_script( 'libre-2-script', get_template_directory_uri() . '/js/libre.js', array( 'jquery' ), '20150623', true );

	$adminbar = is_admin_bar_showing();
	wp_localize_script( 'libre-2-script', 'libreadminbar', array( $adminbar ) );

	wp_enqueue_script( 'libre-2-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'libre-2-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'libre_2_scripts' );

/*
 * Filters the Categories archive widget to add a span around the post count
 */

function libre_2_cat_count_span( $links ) {
	$links = str_replace( '</a> (', '</a><span class="post-count">(', $links );
	$links = str_replace( ')', ')</span>', $links );
	return $links;
}
add_filter( 'wp_list_categories', 'libre_2_cat_count_span' );

/*
 * Add a span around the post count in the Archives widget
 */

function libre_2_archive_count_span( $links ) {
	$links = str_replace( '</a>&nbsp;(', '</a><span class="post-count">(', $links );
	$links = str_replace( ')', ')</span>', $links );
	return $links;
}
add_filter( 'get_archives_link', 'libre_2_archive_count_span' );

if ( ! function_exists( 'libre_2_continue_reading_link' ) ) :
	/**
	 * Returns an ellipsis and "Continue reading" plus off-screen title link for excerpts
	 */
	function libre_2_continue_reading_link() {
		return '&hellip; <a class="more-link" href="' . esc_url( get_permalink() ) . '">' . sprintf( wp_kses_post( __( 'Continue reading <span class="screen-reader-text">%1$s</span> <span class="meta-nav" aria-hidden="true">&rarr;</span>', 'libre-2' ) ), esc_attr( strip_tags( get_the_title() ) ) ) . '</a>';
	}
endif; // libre_2_continue_reading_link


/**
 * Replaces "[...]" (appended to automatically generated excerpts) with libre_2_continue_reading_link().
 *
 * To override this in a child theme, remove the filter and add your own
 * function tied to the excerpt_more filter hook.
 */
function libre_2_auto_excerpt_more( $more ) {
	return libre_2_continue_reading_link();
}
add_filter( 'excerpt_more', 'libre_2_auto_excerpt_more' );


/**
 * Adds a pretty "Continue Reading" link to custom post excerpts.
 *
 * To override this link in a child theme, remove the filter and add your own
 * function tied to the get_the_excerpt filter hook.
 */
function libre_2_custom_excerpt_more( $output ) {
	if ( has_excerpt() && ! is_attachment() ) {
		$output .= libre_2_continue_reading_link();
	}
	return $output;
}
add_filter( 'get_the_excerpt', 'libre_2_custom_excerpt_more' );

/*
 * Custom comments display to move Reply link,
 * used in comments.php
 */
function libre_2_comments( $comment, $args, $depth ) {
	?>
		<li id="comment-<?php comment_ID(); ?>" <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ); ?>>
			<article id="div-comment-<?php comment_ID(); ?>" class="comment-body">
				<footer class="comment-meta">
					<div class="comment-metadata">
						<span class="comment-author vcard">
							<?php
							if ( 0 != $args['avatar_size'] ) {
								echo get_avatar( $comment, $args['avatar_size'] );}
							?>

							<?php printf( '<b class="fn">%s</b>', get_comment_author_link() ); ?>
						</span>
						<a href="<?php echo esc_url( get_comment_link( $comment->comment_ID, $args ) ); ?>">
							<time datetime="<?php comment_time( 'c' ); ?>">
								<?php printf( '<span class="comment-date">%1$s</span><span class="comment-time screen-reader-text">%2$s</span>', get_comment_date(), get_comment_time() ); ?>
							</time>
						</a>
						<?php
						comment_reply_link(
							array_merge(
								$args,
								array(
									'add_below' => 'div-comment',
									'depth'     => $depth,
									'max_depth' => $args['max_depth'],
									'before'    => '<span class="reply">',
									'after'     => '</span>',
								)
							)
						);
						?>
						<?php edit_comment_link( esc_html__( 'Edit', 'libre-2' ), '<span class="edit-link">', '</span>' ); ?>

					</div><!-- .comment-metadata -->

					<?php if ( '0' == $comment->comment_approved ) : ?>
					<p class="comment-awaiting-moderation"><?php esc_html_e( 'Your comment is awaiting moderation.', 'libre-2' ); ?></p>
					<?php endif; ?>
				</footer><!-- .comment-meta -->

				<div class="comment-content">
					<?php comment_text(); ?>
				</div><!-- .comment-content -->

			</article><!-- .comment-body -->
	<?php
}

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

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}
