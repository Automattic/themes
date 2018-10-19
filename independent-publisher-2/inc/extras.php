<?php
/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features
 *
 * @package Independent_Publisher_2
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function independent_publisher_2_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class if are no widgets to render in main sidebar.
	if ( is_active_sidebar( 'sidebar-1' ) && ! is_404() ) {
		$classes[] = 'has-sidebar';
	}
	$is_wc_product_page = false;
	if ( class_exists( 'WooCommerce' ) && is_product() ) {
		$is_wc_product_page = true;
	}

	if ( independent_publisher_2_has_header_image() ||
		 ( independent_publisher_2_has_cover_image() && 1 == independent_publisher_2_jetpack_featured_image_display() && ! $is_wc_product_page ) ) {
		$classes[] = 'has-header-image';
	}

	// Adds a gravatar-logo-disabled when gravatar display is disabled.
	if  ( false === get_theme_mod( 'independent_publisher_2_display_gravatar', true ) ) {
		$classes[] = 'gravatar-logo-disabled';
	}

	return $classes;
}
add_filter( 'body_class', 'independent_publisher_2_body_classes' );

/**
 * Adds custom classes to the array of post classes.
 *
 * @param array $classes Classes for the post
 * @return array
 */
function independent_publisher_2_post_class( $classes ) {
	$content = get_post_field( 'post_content', get_the_ID() );
	if ( empty( $content ) ) {
		$classes[] = 'empty-content';
	}
	return $classes;
}
add_filter( 'post_class', 'independent_publisher_2_post_class' );


/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function independent_publisher_2_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'independent_publisher_2_pingback_header' );

/**
 * Utility function to check if a gravatar exists for a given email or id
 * @param int|string|object $id_or_email A user ID,  email address, or comment object
 * @return bool if the gravatar exists or not
 * @link https://gist.github.com/justinph/5197810
 */

function validate_gravatar( $id_or_email ) {
	// The id or email code is borrowed from wp-includes/pluggable.php.
	$email = '';
	if ( is_numeric( $id_or_email ) ) {
		$id   = (int) $id_or_email;
		$user = get_userdata( $id );
		if ( $user ) {
			$email = $user->user_email;
		}
	} elseif ( is_object( $id_or_email ) ) {
		// No avatar for pingbacks or trackbacks.
		$allowed_comment_types = apply_filters( 'get_avatar_comment_types', array( 'comment' ) );
		if ( ! empty( $id_or_email->comment_type ) && ! in_array( $id_or_email->comment_type, (array) $allowed_comment_types, true ) ) {
			return false;
		}

		if ( ! empty( $id_or_email->user_id ) ) {
			$id   = (int) $id_or_email->user_id;
			$user = get_userdata( $id );
			if ( $user ) {
				$email = $user->user_email;
			}
		} elseif ( ! empty( $id_or_email->comment_author_email ) ) {
			$email = $id_or_email->comment_author_email;
		}
	} else {
		$email = $id_or_email;
	}

	$hashkey = md5( strtolower( trim( $email ) ) );
	$uri     = 'http://www.gravatar.com/avatar/' . $hashkey . '?d=404';
	$data    = wp_cache_get( $hashkey );
	$expire  = 60 * 5;
	$group   = '';
	if ( false === $data ) {
		$response = wp_remote_head( $uri );
		if ( is_wp_error( $response ) ) {
			$data = 'not200';
		} else {
			$data = $response['response']['code'];
		}
		wp_cache_set( $hashkey, $data, $group, $expire );
	}
	if ( 200 === $data ) {
		return true;
	} else {
		return false;
	}
}
