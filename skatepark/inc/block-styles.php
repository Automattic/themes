<?php
/**
 * Skatepark Theme: Block Styles
 *
 * @package Skatepark
 * @since 1.0.0
 */

if ( ! function_exists( 'skatepark_register_block_styles' ) ) :

	function skatepark_register_block_styles() {

		if ( function_exists( 'register_block_style' ) ) {

			/**
			 * Register block styles
			 */
			register_block_style(
				'core/heading',
				array(
					'name'         => 'skatepark-heading-border',
					'label'        => __( 'Top Border', 'skatepark' ),
					'style_handle' => 'skatepark-heading-border',
				)
			);
		}
	}
endif;

add_action( 'after_setup_theme', 'skatepark_register_block_styles' );
