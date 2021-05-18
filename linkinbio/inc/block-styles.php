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
				'label'        => __( 'Large Buttons', 'linkinbio' ),
				'style_handle' => 'linkinbio-large-buttons',
			)
		);
		register_block_style(
			'core/buttons',
			array(
				'name'         => 'linkinbio-large-transparent-white-buttons',
				'label'        => __( 'Large Transparent White Buttons', 'linkinbio' ),
				'style_handle' => 'linkinbio-large-transparent-white-buttons',
			)
		);
		register_block_style(
			'core/social-links',
			array(
				'name'         => 'linkinbio-transparent-white-buttons',
				'label'        => __( 'Transparent White Buttons', 'linkinbio' ),
				'style_handle' => 'linkinbio-transparent-white-buttons',
			)
		);
		register_block_style(
			'core/social-links',
			array(
				'name'         => 'linkinbio-foreground-color-buttons',
				'label'        => __( 'Foreground Color Buttons', 'linkinbio' ),
				'style_handle' => 'linkinbio-foreground-color-buttons',
			)
		);
	}

	add_action( 'init', 'linkinbio_register_block_styles' );
}