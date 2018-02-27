<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Shoreditch
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function shoreditch_body_classes( $classes ) {
	global $post;

	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of sticky-header to blogs with theme option turned on.
	if ( get_theme_mod( 'shoreditch_sticky_header' ) ) {
		$classes[] = 'sticky-header';
	}

	// Adds a class of no-sidebar to blogs without a sidebar or using a specific page template.
	if ( is_page_template( 'panel-page.php' ) || is_page_template( 'full-width-page.php' ) || is_singular( 'jetpack-testimonial' ) || ( is_post_type_archive( 'jetpack-testimonial' ) && have_posts() ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'shoreditch_body_classes' );

/**
 * Add featured image as background image.
 */
function shoreditch_background_image() {

	if ( 'post' === get_post_type() ) {
		$image = shoreditch_get_attachment_image_src( get_the_ID(), get_post_thumbnail_id( get_the_ID() ), 'post-thumbnail' );
	}
	else {
		$image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'post-thumbnail' );
		$image = $image[0];
	}

	if ( ! $image ) {
		return;
	}

	printf( ' style="background-image: url(\'%s\');"', esc_url( $image ) );
}

/**
 * Modifies tag cloud widget arguments to have all tags in the widget same font size.
 *
 * @param array $args Arguments for tag cloud widget.
 * @return array A new modified arguments.
 */
function shoreditch_widget_tag_cloud_args( $args ) {
	$args['largest'] = 1;
	$args['smallest'] = 1;
	$args['unit'] = 'em';
	return $args;
}
add_filter( 'widget_tag_cloud_args', 'shoreditch_widget_tag_cloud_args' );

/**
 * Replaces "[...]" (appended to automatically generated excerpts) with ... and a 'Continue reading' link.
 * @return string 'Continue reading' link prepended with an ellipsis.
 */
if ( ! function_exists( 'shoreditch_excerpt_more' ) ) :
    function shoreditch_excerpt_more( $more ) {
        $link = sprintf( '<a href="%1$s" class="more-link">%2$s</a>',
            esc_url( get_permalink( get_the_ID() ) ),
            /* translators: %s: Name of current post. */
            sprintf( esc_html__( 'Continue reading %s', 'shoreditch' ), '<span class="screen-reader-text">' . get_the_title( get_the_ID() ) . '</span>' )
            );
        return ' &hellip; ' . $link;
    }
    add_filter( 'excerpt_more', 'shoreditch_excerpt_more' );
endif;
