<?php


if ( ! function_exists( 'quadrat_support' ) ) :
	function quadrat_support() {

		// Enqueue editor styles.
		add_editor_style(
			array(
				'/assets/theme.css',
			)
		);

		// Add support for core custom logo.
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 35,
				'width'       => 150,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);

		// Add support for starter content
		include get_stylesheet_directory() . '/inc/starter-content.php';
		add_theme_support(
			'starter-content',
			$quadrat_starter_content
		);

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
			array(
				'primary' => __( 'Primary Navigation', 'quadrat' ),
			)
		);

		remove_theme_support( 'block-templates' );
	}
	add_action( 'after_setup_theme', 'quadrat_support' );
endif;

/**
 * Enqueue scripts and styles.
 */
function quadrat_scripts() {
	// Enqueue front-end styles.
	wp_enqueue_style( 'quadrat-styles', get_stylesheet_directory_uri() . '/assets/theme.css', array( 'blockbase-ponyfill' ), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'quadrat_scripts' );

/**
 * Add a filter to the render callback of the footer, 
 * so it can be translated or customized for WordPress.com.
 */
function quadrat_add_markup_to_footer_template( $block_content, $block ) {
	if ( $block['blockName'] === 'core/template-part' && $block['attrs']['slug'] === 'footer' ) {
		// If we are on WPCOM, do not render a credit so that the WP.com footer credit plugin can handle it
		$wp_credit = '';
		if ( ! class_exists( 'WPCOM_Block_Theme_Footer_Credits') ){
			$wp_credit = '<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center">' . __( 'Proudly Powered by ', 'quadrat') . '<a href="https://wordpress.org" rel="nofollow">WordPress</a></p>
			<!-- /wp:paragraph -->';
		} 
		return sprintf( '<!-- wp:group {"className":"site-footer","style":{"spacing":{"padding":{"top":"150px","bottom":"150px"}}}} -->
		<div class="wp-block-group site-footer" style="padding-top:150px;padding-bottom: 150px">%s
		</div><!-- /wp:group -->', $wp_credit );
	}
	return $block_content;
}
add_filter( 'render_block', 'quadrat_add_markup_to_footer_template', 9, 2 ); // Make the priority one higher than the default so it filters before the WPCOM plugin

/**
 * Block Patterns.
 */
require get_stylesheet_directory() . '/inc/block-patterns.php';

/**
 * Block Styles.
 */
require get_stylesheet_directory() . '/inc/block-styles.php';
