<?php
/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features
 *
 * @package Publication
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function publication_body_classes( $classes ) {
	// Adds a class of has-hero to the body if first post on the blog or single has a featured image.
	if ( ( is_home() && ! is_paged() && has_post_thumbnail() ) || ( is_singular() && has_post_thumbnail() ) ) {
		$classes[] = 'has-hero';
	}

	// Adds a class of no-sidebar to the body when the sidebar is missing.
	if ( ! is_active_sidebar( 'sidebar-1' ) && ! is_active_sidebar( 'sidebar-2' ) ) {
		$classes[] = 'no-sidebar';
	}

	// Adds a class of no-menu to the body when the menus are missing.
	if ( ! has_nav_menu( 'primary' ) && ! has_nav_menu( 'social' ) ) {
		$classes[] = 'no-menu';
	}

	return $classes;
}
add_filter( 'body_class', 'publication_body_classes' );

/**
 * Adds custom classes to the array of post classes.
 *
 * @param array $classes Classes for the post element.
 * @return array
 */
function publication_post_classes( $classes ) {
	global $wp_query;

	// Adds a class of hero to the 1st post on the 1st page if it has a featured image.
	if ( is_home() && ! is_paged() && 0 === $wp_query->current_post && has_post_thumbnail() ) {
		$classes[] = 'hero';
	}

	return $classes;
}
add_filter( 'post_class', 'publication_post_classes' );

if ( ! function_exists( 'publication_excerpt_more' ) && ! is_admin() ) :
/**
 * Replaces "[...]" (appended to automatically generated excerpts) with ...
 *
 * @since Publication 1.0
 */
function publication_excerpt_more( $more ) {
	return ' &hellip;';
}
add_filter( 'excerpt_more', 'publication_excerpt_more' );
endif;

if ( ! function_exists( 'publication_continue_reading' ) && ! is_admin() ) :
/**
 * Adds a "Continue reading" link to all instances of the_excerpt
 *
 * @since Publication 1.0.2
 *
 * @return string The excerpt with a 'Continue reading' link appended.
 */
function publication_continue_reading( $the_excerpt ) {
	$the_excerpt = sprintf( '%1$s <a href="%2$s" class="more-link">%3$s</a>',
		$the_excerpt,
		esc_url( get_permalink( get_the_ID() ) ),
		/* translators: %s: Name of current post */
		sprintf( __( 'Continue reading %s', 'publication' ), '<span class="screen-reader-text">' . get_the_title( get_the_ID() ) . '</span>' )
	);
	return $the_excerpt;
}
add_filter( 'the_excerpt', 'publication_continue_reading', 9 );
endif;

/**
 * Custom lenght of the excerpt depending on the post.
 */
function publication_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'publication_excerpt_length', 999 );

/**
 * Add featured image as background image to hero.
 *
 * @see wp_add_inline_style()
 */
function publication_hero_background() {
	global $wp_query;
	global $post;

	if ( ( ! is_single() && ! has_post_thumbnail() ) || ( ! is_home() && ! is_paged() && 0 !== $wp_query->current_post && ! has_post_thumbnail() ) ) {
		return;
	}

	$featuredImage = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'publication-hero' );
	$css = '.hero { background-image: url(' . esc_url( $featuredImage[0] ) . '); }';

	wp_add_inline_style( 'publication-style', $css );
}
add_action( 'wp_enqueue_scripts', 'publication_hero_background' );

/**
 * Add featured image as background image to post navigation elements.
 *
 * @see wp_add_inline_style()
 */
function publication_post_nav_background() {
	if ( ! is_single() ) {
		return;
	}

	$previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
	$next     = get_adjacent_post( false, '', false );
	$css      = '';

	if ( is_attachment() && 'attachment' == $previous->post_type ) {
		return;
	}

	if ( $previous &&  has_post_thumbnail( $previous->ID ) ) {
		$prevThumb = wp_get_attachment_image_src( get_post_thumbnail_id( $previous->ID ), 'publication-navigation' );
		$css .= '
			.post-navigation .nav-previous { background-image: url(' . esc_url( $prevThumb[0] ) . '); }
			.post-navigation .nav-previous .post-title, .post-navigation .nav-previous a:hover .post-title, .post-navigation .nav-previous .meta-nav { color: #fff; }
			.post-navigation .nav-previous .meta-nav { box-shadow: inset 0 -0.5em 0 #222; }
			.post-navigation .nav-previous a { background-color: rgba(0, 0, 0, 0.25); border: 0; text-shadow: 0 0 0.125em rgba(0, 0, 0, 0.5); }
			.post-navigation .nav-previous a:active, .post-navigation .nav-previous a:focus, .post-navigation .nav-previous a:hover { background-color: rgba(0, 0, 0, 0.5); }
			.post-navigation .nav-previous a:active .meta-nav, .post-navigation .nav-previous a:focus .meta-nav, .post-navigation .nav-previous a:hover .meta-nav { background: #222; }
			.post-navigation .nav-previous a:focus .post-title { color: #fff; }
		';
	}

	if ( $next && has_post_thumbnail( $next->ID ) ) {
		$nextThumb = wp_get_attachment_image_src( get_post_thumbnail_id( $next->ID ), 'publication-navigation' );
		$css .= '
			.post-navigation .nav-next { background-image: url(' . esc_url( $nextThumb[0] ) . '); }
			.post-navigation .nav-next .post-title, .post-navigation .nav-next a:hover .post-title, .post-navigation .nav-next .meta-nav { color: #fff; }
			.post-navigation .nav-next .meta-nav { box-shadow: inset 0 -0.5em 0 #222; }
			.post-navigation .nav-next a { background-color: rgba(0, 0, 0, 0.25); border: 0; text-shadow: 0 0 0.125em rgba(0, 0, 0, 0.5); }
			.post-navigation .nav-next a:active, .post-navigation .nav-next a:focus, .post-navigation .nav-next a:hover { background-color: rgba(0, 0, 0, 0.5); }
			.post-navigation .nav-next a:active .meta-nav, .post-navigation .nav-next a:focus .meta-nav, .post-navigation .nav-next a:hover .meta-nav { background: #222; }
			.post-navigation .nav-next a:focus .post-title { color: #fff; }
		';
	}

	wp_add_inline_style( 'publication-style', $css );
}
add_action( 'wp_enqueue_scripts', 'publication_post_nav_background' );
