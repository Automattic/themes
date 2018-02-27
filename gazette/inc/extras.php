<?php
/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features
 *
 * @package Gazette
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function gazette_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class of has-header-image to blogs with a header image.
	if ( get_header_image() ) {
		$classes[] = 'has-header-image';
	}

	// Adds a class of no-sidebar-widget to blogs with no widgets in the sidebar area.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar-widget';
	}

	// Adds a class of no-footer-widget to blogs with no widgets in the footer area.
	if ( ! is_active_sidebar( 'sidebar-2' ) ) {
		$classes[] = 'no-footer-widget';
	}

	// Adds a class of unfixed-header to blogs with unfixed header theme option ticked.
	if ( 1 == get_theme_mod( 'gazette_unfixed_header' ) ) {
		$classes[] = 'unfixed-header';
	}

	return $classes;
}
add_filter( 'body_class', 'gazette_body_classes' );

if ( version_compare( $GLOBALS['wp_version'], '4.1', '<' ) ) :
	/**
	 * Filters wp_title to print a neat <title> tag based on what is being viewed.
	 *
	 * @param string $title Default title text for current view.
	 * @param string $sep Optional separator.
	 * @return string The filtered title.
	 */
	function gazette_wp_title( $title, $sep ) {
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
		if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() ) {
			$title .= " $sep " . sprintf( __( 'Page %s', 'gazette' ), max( $paged, $page ) );
		}

		return $title;
	}
	add_filter( 'wp_title', 'gazette_wp_title', 10, 2 );

	/**
	 * Title shim for sites older than WordPress 4.1.
	 *
	 * @link https://make.wordpress.org/core/2014/10/29/title-tags-in-4-1/
	 * @todo Remove this function when WordPress 4.3 is released.
	 */
	function gazette_render_title() {
		?>
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<?php
	}
	add_action( 'wp_head', 'gazette_render_title' );
endif;

if ( ! function_exists( 'gazette_excerpt_more' ) && ! is_admin() ) :
/**
 * Replaces "[...]" (appended to automatically generated excerpts) with ...
 *
 * @since Gazette 1.0.4
 */
function gazette_excerpt_more( $more ) {
	return ' &hellip;';
}
add_filter( 'excerpt_more', 'gazette_excerpt_more' );
endif;

if ( ! function_exists( 'gazette_continue_reading' ) && ! is_admin() ) :
/**
 * Adds a "Continue reading" link to all instances of the_excerpt
 *
 * @since Gazette 1.0.5
 *
 * @return string The excerpt with a 'Continue reading' link appended.
 */
function gazette_continue_reading( $the_excerpt ) {
	$the_excerpt = sprintf( '%1$s <a href="%2$s" class="more-link">%3$s</a>',
		$the_excerpt,
		esc_url( get_permalink( get_the_ID() ) ),
		/* translators: %s: Name of current post */
		sprintf( __( 'Continue reading %s', 'gazette' ), '<span class="screen-reader-text">' . get_the_title( get_the_ID() ) . '</span>' )
	);
	return $the_excerpt;
}
add_filter( 'the_excerpt', 'gazette_continue_reading', 9 );
endif;

/**
 * Custom lenght of the excerpt depending on the post type.
 */
function gazette_excerpt_length( $length ) {
	if ( has_post_thumbnail() && ( has_post_format( 'image' ) || has_post_format( 'gallery' ) ) ) {
		return 26;
	} else if ( ( has_post_thumbnail() && ! has_post_format( 'aside' ) ) || has_post_format( 'link' ) || has_post_format( 'video' ) ) {
		return 40;
	} else if ( has_post_format( 'aside' ) ) {
		return 106;
	} else {
		return 100;
	}
}
add_filter( 'excerpt_length', 'gazette_excerpt_length', 999 );

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
function gazette_get_link_url() {
	$content = get_the_content();
	$has_url = get_url_in_content( $content );

	return ( $has_url && has_post_format( 'link' ) ) ? $has_url : apply_filters( 'the_permalink', get_permalink() );
}