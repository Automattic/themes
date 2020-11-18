<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/block-editor/developers/filters/block-filters/#server-side-registration-helper
 *
 * @package WordPress
 * @subpackage Monticello
 * @since 1.0.0
 */

 /**
 * Register Custom Block Styles
 */
if ( function_exists( 'register_block_style' ) ) {
	function block_styles_register_block_styles() {

		/**
		 * Register stylesheet
		 */
		wp_register_style(
			'monticello-block-style',
			get_template_directory_uri() . '/inc/block-styles.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		/**
		 * Register block style
		 */
		register_block_style(
			'core/group',
			array(
				'name'         => 'menu-list-item',
				'label'        => 'Menu List Item',
				'style_handle' => 'monticello-block-style',
			)
		);
	}

	add_action( 'init', 'block_styles_register_block_styles' );
}
