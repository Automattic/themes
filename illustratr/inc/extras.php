<?php
/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features
 *
 * @package Illustratr
 */

/**
 * Get our wp_nav_menu() fallback, wp_page_menu(), to show a home link.
 *
 * @param array $args Configuration arguments.
 * @return array
 */
function illustratr_page_menu_args( $args ) {
	$args['show_home'] = true;
	return $args;
}
add_filter( 'wp_page_menu_args', 'illustratr_page_menu_args' );

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function illustratr_body_classes( $classes ) {
	// Adds a class of body-borders to blogs with default background settings.
	if ( ! get_background_image() ) {
		$classes[] = 'body-borders';
	}
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}
	// Adds a class of has-header-image to blogs with a header image.
	if ( get_header_image() ) {
		$classes[] = 'has-header-image';
	}
	// Adds a class of hide-portfolio-page-content to blogs if Theme Option hide portfolio page content is ticked and page is using the Portfolio Template
	if ( get_theme_mod( 'illustratr_hide_portfolio_page_content' ) && is_page_template( 'page-templates/portfolio-page.php' ) ) {
		$classes[] = 'hide-portfolio-page-content';
	}

	return $classes;
}
add_filter( 'body_class', 'illustratr_body_classes' );

/**
 * Adds custom classes to the array of post classes.
 *
 * @param array $classes Classes for the post element.
 * @return array
 */
function illustratr_post_classes( $classes ) {

	// Adds a class of empty-entry-meta to pages/projects without any entry meta.
	$comments_status = false;
	$tags_list = false;
	if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) {
		$comments_status = true;
	}
	if ( 'jetpack-portfolio' == get_post_type() ) {
		$tags_list = get_the_term_list( get_the_ID(), 'jetpack-portfolio-tag' );
	}
	if ( ! current_user_can( 'edit_posts' ) && 'post' != get_post_type() && ! $comments_status && ! $tags_list ) {
		$classes[] = 'empty-entry-meta';
	}
	// Adds a class of portfolio-entry to portfolio projects.
	if ( 'jetpack-portfolio' == get_post_type() ) {
		$classes[] = 'portfolio-entry';
	}

	return $classes;
}
add_filter( 'post_class', 'illustratr_post_classes' );

/**
 * Filters wp_title to print a neat <title> tag based on what is being viewed.
 *
 * @param string $title Default title text for current view.
 * @param string $sep Optional separator.
 * @return string The filtered title.
 */
function illustratr_wp_title( $title, $sep ) {
	if ( is_feed() ) {
		return $title;
	}

	global $page, $paged;

	// Add the blog name
	$title .= get_bloginfo( 'name', 'display' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) ) {
		$title .= " $sep $site_description";
	}

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 ) {
		$title .= " $sep " . sprintf( __( 'Page %s', 'illustratr' ), max( $paged, $page ) );
	}

	return $title;
}
add_filter( 'wp_title', 'illustratr_wp_title', 10, 2 );

/**
 * Sets the authordata global when viewing an author archive.
 *
 * This provides backwards compatibility with
 * http://core.trac.wordpress.org/changeset/25574
 *
 * It removes the need to call the_post() and rewind_posts() in an author
 * template to print information about the author.
 *
 * @global WP_Query $wp_query WordPress Query object.
 * @return void
 */
function illustratr_setup_author() {
	global $wp_query;

	if ( $wp_query->is_author() && isset( $wp_query->post ) ) {
		$GLOBALS['authordata'] = get_userdata( $wp_query->post->post_author );
	}
}
add_action( 'wp', 'illustratr_setup_author' );

/**
 * Returns the URL from the post.
 *
 * @uses get_the_link() to get the URL in the post meta (if it exists) or
 * the first link found in the post content.
 *
 * Falls back to the post permalink if no URL is found in the post.
 *
 * @return string URL
 */
function illustratr_get_link_url() {
	$content = get_the_content();
	$has_url = get_url_in_content( $content );

	return ( $has_url ) ? $has_url : apply_filters( 'the_permalink', get_permalink() );
}

/**
 * Use &hellip; instead of [...] for excerpts.
 */
function illustratr_excerpt_more( $more ) {
	return '&hellip;';
}
add_filter( 'excerpt_more', 'illustratr_excerpt_more' );

/**
 * Wrap more link
 */
function illustratr_more_link( $link ) {
	return '<div class="more-link-wrapper">' . $link . '</div>';
}
add_filter( 'the_content_more_link', 'illustratr_more_link' );

/**
 * Remove WordPress's default padding on images with captions
 *
 * @param int $width Default WP .wp-caption width (image width + 10px)
 * @return int Updated width to remove 10px padding
 */
function illustratr_remove_caption_padding( $width ) {
	return $width - 10;
}
add_filter( 'img_caption_shortcode_width', 'illustratr_remove_caption_padding' );

/**
* Remove the 1st gallery shortcode from gallery post format content.
*/
function illustratr_strip_first_gallery( $content ) {
	if ( 'gallery' === get_post_format() && 'post' === get_post_type() && get_post_gallery() ) {
		$regex   = get_shortcode_regex( array( 'gallery' ) );
		$content = preg_replace( '/'. $regex .'/s', '', $content, 1 );
		$content = wp_kses_post( $content );
	}

	return $content;
}
add_filter( 'the_content', 'illustratr_strip_first_gallery' );

/**
 * Checking for the existence of a Gravatar
 */
function illustratr_validate_gravatar( $email ) {
	$hash = md5( strtolower( trim( $email ) ) );
	$uri = 'http://www.gravatar.com/avatar/' . $hash . '?d=404';
	$headers = @get_headers( $uri );
	if ( ! preg_match( "|200|", $headers[0] ) ) {
		$has_valid_avatar = false;
	} else {
		$has_valid_avatar = true;
	}
	return $has_valid_avatar;
}

/**
 * Adds a wrapper to videos and enqueue script
 *
 * @return string
 */
function illustratr_videos_embed_html( $html ) {
	if ( empty( $html ) || ! is_string( $html ) ) {
		return $html;
	}

	wp_enqueue_script( 'illustratr-responsive-videos', get_template_directory_uri() . '/js/responsive-videos.js', array( 'jquery', 'underscore' ), '20140320', true );

	return '<div class="video-wrapper">' . $html . '</div>';
}
add_filter( 'wp_video_shortcode', 'illustratr_videos_embed_html' );
add_filter( 'video_embed_html',   'illustratr_videos_embed_html' );
add_filter( 'embed_oembed_html',  'illustratr_videos_maybe_wrap_oembed', 10, 2 );
add_filter( 'embed_handler_html', 'illustratr_videos_maybe_wrap_oembed', 10, 2 );

/**
 * Check if oEmbed is YouTube or Vimeo before wrapping.
 *
 * @return string
 */
function illustratr_videos_maybe_wrap_oembed( $html, $url ) {
	if ( empty( $html ) || ! is_string( $html ) || ! $url ) {
		return $html;
	}

	$video_wrapper = '<div class="video-wrapper">';

	$already_wrapped = strpos( $html, $video_wrapper );

	// If the oEmbed has already been wrapped, return the html.
	if ( false !== $already_wrapped ) {
		return $html;
	}

	/**
	 * oEmbed Video Providers.
	 *
	 * A whitelist of oEmbed video provider Regex patterns to check against before wrapping the output.
	 *
	 * @param array $video_patterns oEmbed video provider Regex patterns.
	 */
	$video_patterns = apply_filters( 'illustratr_videos_oembed_videos', array(
		'https?://((m|www)\.)?youtube\.com/watch',
		'https?://((m|www)\.)?youtube\.com/playlist',
		'https?://youtu\.be/',
		'https?://(.+\.)?vimeo\.com/',
		'https?://(www\.)?dailymotion\.com/',
		'https?://dai.ly/',
		'https?://(www\.)?hulu\.com/watch/',
		'https?://wordpress.tv/',
		'https?://(www\.)?funnyordie\.com/videos/',
		'https?://vine.co/v/',
		'https?://(www\.)?collegehumor\.com/video/',
		'https?://(www\.|embed\.)?ted\.com/talks/'
	) );

	// Merge patterns to run in a single preg_match call.
	$video_patterns = '(' . implode( '|', $video_patterns ) . ')';

	$is_video = preg_match( $video_patterns, $url );

	// If the oEmbed is a video, wrap it in the responsive wrapper.
	if ( false === $already_wrapped && 1 === $is_video ) {
		return illustratr_videos_embed_html( $html );
	}

	return $html;
}
