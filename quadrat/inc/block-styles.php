<?php
/**
 * Quadrat Theme: Block Styles
 *
 * @package Seedlet
 * @since 1.0.0
 */

if ( ! function_exists( 'quadrat_register_block_styles' ) ) :

	function quadrat_register_block_styles() {

		if ( function_exists( 'register_block_style' ) ) {

			/**
			 * Register block styles
			 */
			register_block_style(
				'core/cover',
				array(
					'name'         => 'quadrat-cover-diamond',
					'label'        => __( 'Diamond', 'quadrat' ),
					'style_handle' => 'quadrat-cover-diamond',
				)
			);
		}
	}
endif;

add_action( 'after_setup_theme', 'quadrat_register_block_styles' );
