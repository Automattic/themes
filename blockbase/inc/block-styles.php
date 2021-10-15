<?php
/**
 * Blockbase Theme: Block Styles
 *
 * @package Blockbase
 * @since 1.2.8
 */

if ( ! function_exists( 'blockbase_register_block_styles' ) ) :

	function blockbase_register_block_styles() {

		if ( function_exists( 'register_block_style' ) ) {

			/**
			 * Register block styles
			 */
			register_block_style(
				'core/navigation',
				array(
					'name'         => 'blockbase-navigation-improved-responsive',
					'label'        => __( 'Improved Responsive Navigation', 'blockbase' ),
					'style_handle' => 'blockbase-navigation-improved-responsive',
				)
			);

			register_block_style(
				'core/heading',
				array(
					'name'         => 'retro',
					'label'        => __('Retro', 'blockbase' ),
					'style_handle' => 'blockbase-heading-retro',
				)
			);

			register_block_style(
				'core/heading',
				array(
					'name'         => 'neon',
					'label'        => __('Neon', 'blockbase' ),
					'style_handle' => 'blockbase-heading-neon',
				)
			);

			register_block_style(
				'core/heading',
				array(
					'name'         => 'inset',
					'label'        => __('Inset', 'blockbase' ),
					'style_handle' => 'blockbase-heading-inset',
				)
			);

			register_block_style(
				'core/heading',
				array(
					'name'         => '3d',
					'label'        => __('3D', 'blockbase' ),
					'style_handle' => 'blockbase-heading-3d',
				)
			);

			register_block_style(
				'core/heading',
				array(
					'name'         => 'burning',
					'label'        => __('Burning', 'blockbase' ),
					'style_handle' => 'blockbase-heading-burning',
				)
			);

			register_block_style(
				'core/heading',
				array(
					'name'         => 'stacked',
					'label'        => __('Stacked', 'blockbase' ),
					'style_handle' => 'blockbase-heading-stacked',
				)
			);
		}
	}
endif;

add_action( 'after_setup_theme', 'blockbase_register_block_styles' );
