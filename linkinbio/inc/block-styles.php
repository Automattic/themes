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
		 * Register block styles
		 */
		register_block_style(
			'core/buttons',
			array(
				'name'         => 'linkinbio-large-buttons',
				'label'        => 'Large Buttons',
				'style_handle' => 'linkinbio-large-buttons',
			)
		);
		register_block_style(
			'core/cover',
			array(
				'name'         => 'linkinbio-blurry-background',
				'label'        => 'Blurry Background',
				'style_handle' => 'linkinbio-blurry-background',
			)
		);
	}

	add_action( 'init', 'linkinbio_register_block_styles' );
}