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
			'core/buttons',
			array(
				'name'         => 'linkinbio-large-transparent-white-buttons',
				'label'        => 'Large Transparent White Buttons',
				'style_handle' => 'linkinbio-large-transparent-white-buttons',
			)
		);
		register_block_style(
			'core/social-links',
			array(
				'name'         => 'linkinbio-transparent-white-buttons',
				'label'        => 'Transparent White Buttons',
				'style_handle' => 'linkinbio-transparent-white-buttons',
			)
		);
		register_block_style(
			'core/social-links',
			array(
				'name'         => 'linkinbio-secondary-color-buttons',
				'label'        => 'Secondary Color Buttons',
				'style_handle' => 'linkinbio-secondary-color-buttons',
			)
		);
	}

	add_action( 'init', 'linkinbio_register_block_styles' );
}