<?php
/**
 * WordPress.com-specific functions and definitions.
 *
 * This file is centrally included from `wp-content/mu-plugins/wpcom-theme-compat.php`.
 *
 * @package Twenty Seventeen
 */

/**
 * Adds support for WP.com-specific theme functions.
 *
 * @global array $themecolors
 * @return void
 */
function twentyseventeen_wpcom_setup() {
	global $themecolors;

	// Set theme colors for third party services.
	if ( ! isset( $themecolors ) ) {
		$themecolors = array(
			'bg'     => 'ffffff',
			'border' => 'eeeeee',
			'text'   => '222222',
			'link'   => '767676',
			'url'    => '767676',
		);
	}

	// Add theme support for Content Options.
	add_theme_support( 'jetpack-content-options', array(
		'blog-display'   => 'content',
		'post-details'    => array(
			'stylesheet'    => 'twentyseventeen-style',
			'date'          => '.entry-date',
			'categories'    => '.cat-links',
			'tags'          => '.tags-links',
			'author'        => '.byline',
		),
		'featured-images' => array(
			'archive'       => true,
			'post'          => true,
			'page'          => true,
		),
	) );

	// Add theme support for Custom Background.
	add_theme_support( 'custom-background', apply_filters( 'twentyseventeen_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
add_action( 'after_setup_theme', 'twentyseventeen_wpcom_setup' );


/**
 * Video and Audio posts need some help to switch between the_content and the_excerpt predictably
 */

function twentyseventeen_audio_video_content( $content ) {

	// Get the Blog display setting
	$display_option = get_option( 'jetpack_content_blog_display' );

	//Check we're on the blog posts or archive pages, and have Post Display set to excerpt
	if ( ( is_home() || is_archive() ) && 'excerpt' == $display_option ) {

		// Check if video post format
		if ( has_post_format( 'video' ) ) {

			// Now we need to get rid of the filter added by Jetpack, to get our video
			remove_filter( 'the_content', 'jetpack_the_content_to_the_excerpt' );
			$video = false;

			// Only get video from the content if a playlist isn't present.
			if ( false === strpos( $content, 'wp-playlist-script' ) ) {
				$video = get_media_embedded_in_content( $content, array( 'video', 'object', 'embed', 'iframe' ) );
			}

			if ( ! empty( $video ) ) {
				$content = '';
				foreach ( $video as $video_html ) {
					$content .= '<div class="entry-video">';
						$content .= $video_html;
					$content .= '</div>';
				}
			} else {
				// If we don't have a video, re-add the filter from Jetpack
				add_filter( 'the_content', 'jetpack_the_content_to_the_excerpt' );
			}

		// Check if audio post
		} else if ( has_post_format( 'audio' ) ) {

			// Now we need to get rid of the filter added by Jetpack, to get our video
			remove_filter( 'the_content', 'jetpack_the_content_to_the_excerpt' );
			$audio = false;

			// Only get audio from the content if a playlist isn't present.
			if ( false === strpos( $content, 'wp-playlist-script' ) ) {
				$audio = get_media_embedded_in_content( $content, array( 'audio' ) );
			}

			if ( ! empty( $audio ) ) {
				$content = '';
				foreach ( $audio as $audio_html ) {
					$content .= '<div class="entry-audio">';
						$content .= $audio_html;
					$content .= '</div>';
				}
			} else {
				// If we don't have a video, re-add the filter from Jetpack
				// add_filter( 'the_content', 'jetpack_the_content_to_the_excerpt' );
			}

		} else {
			// If neither, re-add the filter for the other posts - otherwise it stays off
			add_filter( 'the_content', 'jetpack_the_content_to_the_excerpt' );
		}
	}

	return $content;
}
add_filter( 'the_content', 'twentyseventeen_audio_video_content', 9 );


/**
 * Enqueue our WP.com styles for front-end.
 * Loads after style.css so we can add overrides.
 */
function twentyseventeen_wpcom_scripts() {
	wp_enqueue_style( 'twentyseventeen-wpcom-style', get_template_directory_uri() . '/assets/css/style-wpcom.css', array( 'twentyseventeen-style' ), '20170306' );
}
add_action( 'wp_enqueue_scripts', 'twentyseventeen_wpcom_scripts' );


/**
 * Remove color scheme related stuff in favor of Custom Color in WP.com.
 */
remove_action( 'wp_head', 'twentyseventeen_colors_css_wrap' );
function twentyseventeen_wpcom_customize_update( $wp_customize ) {
	$wp_customize->remove_setting( 'colorscheme' );
	$wp_customize->remove_setting( 'colorscheme_hue' );
	$wp_customize->remove_control( 'colorscheme' );
	$wp_customize->remove_control( 'colorscheme_hue' );
}
add_action( 'customize_register', 'twentyseventeen_wpcom_customize_update' );


/**
 * Transform Hex color value to RGB.
 * Used in theme's color annotations.
 */
function twentyseventeen_hex2rgb( $hex ) {
	$hex = str_replace( "#", "", $hex );

	if( 3 === strlen( $hex ) ) {
		$r = hexdec( substr( $hex, 0 ,1 ).substr( $hex, 0, 1 ) );
		$g = hexdec( substr( $hex, 1, 1 ).substr( $hex, 1, 1 ) );
		$b = hexdec( substr( $hex, 2, 1 ).substr( $hex, 2, 1 ) );
	} else {
		$r = hexdec( substr( $hex, 0, 2 ) );
		$g = hexdec( substr( $hex, 2, 2 ) );
		$b = hexdec( substr( $hex, 4, 2 ) );
	}
	$rgb = array( $r, $g, $b );
	return implode( ",", $rgb ); // returns the rgb values separated by commas
}


/**
 * Show/Hide Featured Image on single posts view outside of the loop.
 */
function twentyseventeen_jetpack_featured_image_display() {
	if ( ! function_exists( 'jetpack_featured_images_remove_post_thumbnail' ) ) {
		return true;
	} else {
		$options         = get_theme_support( 'jetpack-content-options' );
		$featured_images = ( ! empty( $options[0]['featured-images'] ) ) ? $options[0]['featured-images'] : null;

		$settings = array(
			'post-default' => ( isset( $featured_images['post-default'] ) && false === $featured_images['post-default'] ) ? '' : 1,
			'page-default' => ( isset( $featured_images['page-default'] ) && false === $featured_images['page-default'] ) ? '' : 1,
		);

		$settings = array_merge( $settings, array(
			'post-option'  => get_option( 'jetpack_content_featured_images_post', $settings['post-default'] ),
			'page-option'  => get_option( 'jetpack_content_featured_images_page', $settings['page-default'] ),
		) );

		if ( ( ! $settings['post-option'] && is_single() ) || ( ! $settings['page-option'] && is_singular() && is_page() ) ) {
			return false;
		} else {
			return true;
		}
	}
}


/**
 * Make sure background colours work for users without Custom Colours.
 *
 * See: https://wpcom-themes.trac.automattic.com/ticket/4612
 */

function twentyseventeen_background_fix() {
	$background_color = get_theme_mod( 'background_color','ffffff' );
	$background_image = get_theme_mod( 'background_image' );
	$background_position_x = get_theme_mod( 'background_position_x', 'left' );
	$background_position_y = get_theme_mod( 'background_position_y', 'top' );
	$background_size = get_theme_mod( 'background_size', 'auto' );
	$background_repeat = get_theme_mod( 'background_repeat', 'repeat' );
	$background_attachment = get_theme_mod( 'background_attachment', 'scroll' );

	$background_styles = '.site-content-contain {';
	$background_styles .= 'background-color: #' . $background_color . '; ';
	$background_styles .= 'background-image: url("' . esc_url( $background_image ) . '"); ';
	$background_styles .= 'background-position: ' . $background_position_x . ' ' . $background_position_y . '; ';
	$background_styles .= 'background-size: ' . $background_size . '; ';
	$background_styles .= 'background-repeat: ' . $background_repeat . '; ';
	$background_styles .= 'background-attachment: ' . $background_attachment . '; ';
	$background_styles .= '}';

	wp_add_inline_style( 'twentyseventeen-style', $background_styles );

}
add_action( 'wp_enqueue_scripts', 'twentyseventeen_background_fix' );


/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function twentyseventeen_wpcom_body_classes( $classes ) {
	// Add class if featured image is hidden on single posts/pages via Content Options.
	if ( ! twentyseventeen_jetpack_featured_image_display() ) {
		$classes[] = 'hide-featured-image';
	}

	// Add class if current user can't edit. Used when category & tags hidden in Content Options.
	if( ! current_user_can( 'edit_post' ) ) {
		$classes[] = 'cannot-edit';
	}

	return $classes;
}
add_filter( 'body_class', 'twentyseventeen_wpcom_body_classes' );


/**
 * Bind JS handlers to instantly live-preview changes.
 */
function twentyseventeen_wpcom_customize_preview_js() {
	wp_enqueue_script( 'twentyseventeen_wpcom_customize_preview', get_theme_file_uri( '/inc/customize-preview-wpcom.js' ), array( 'customize-preview' ), '1.0', true );
}
add_action( 'customize_preview_init', 'twentyseventeen_wpcom_customize_preview_js' );
