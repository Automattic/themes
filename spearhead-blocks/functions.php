<?php
/**
 * Spearhead Blocks functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Spearhead Blocks
 * @since Spearhead Blocks 1.0
 */


if ( ! function_exists( 'spearhead_blocks_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Spearhead Blocks 1.0
	 *
	 * @return void
	 */
	function spearhead_blocks_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;

add_action( 'after_setup_theme', 'spearhead_blocks_support' );

if ( ! function_exists( 'spearhead_blocks_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Spearhead Blocks 1.0
	 *
	 * @return void
	 */
	function spearhead_blocks_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'spearhead_blocks-style',
			get_template_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'spearhead_blocks-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'spearhead_blocks_styles' );

require get_template_directory() . '/inc/fonts/custom-fonts.php';

function spearhead_blocks_the_excerpt( $excerpt ) {

	$audio_block = '';
	if ( has_block( 'audio' ) ) {
		$post   = get_post();
		$blocks = parse_blocks( $post->post_content );
		foreach ( $blocks as $block ) {
			if ( 'core/audio' === $block['blockName'] ) {
				$audio_block .= '<div class="excerpt-audio-block">' . wp_kses_post( $block['innerHTML'] ) . '</div>';
				break;
			}
		}
	}

	// For cases where the post excerpt is empty
	// (but the post might have content)
	if ( 0 === strlen( $excerpt ) ) {
		return $excerpt . $audio_block;
	}

	return $excerpt . $audio_block;
}

// Filter the excerpt
add_filter( 'get_the_excerpt', 'spearhead_blocks_the_excerpt' );
