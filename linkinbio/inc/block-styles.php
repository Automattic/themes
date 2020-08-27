<?php
/**
 * Block Styles
 *
 * @package linkinbio
 * @since 1.0.0
 */

/**
 * Register Custom Block Styles
 */
if ( function_exists( 'register_block_style' ) ) {
	function linkinbio_register_block_styles() {

		/**
		 * Register block style
		 */
		register_block_style(
			'core/social-links',
			array(
				'name'         => 'linkinbio-large-buttons',
				'label'        => 'Large Buttons',
				'style_handle' => 'linkinbio-large-buttons',
			)
		);
	}

	add_action( 'init', 'linkinbio_register_block_styles' );
}