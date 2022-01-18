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

			//Post meta styles with icons
			register_block_style(
				'core/post-author',
				array(
					'name'         => 'post-author-icon',
					'label'        => __( 'With icon', 'blockbase' ),
					'style_handle' => 'post-author-icon',
				)
			);
			register_block_style(
				'core/post-date',
				array(
					'name'         => 'post-date-icon',
					'label'        => __( 'With icon', 'blockbase' ),
					'style_handle' => 'post-date-icon',
				)
			);
			register_block_style(
				'core/post-terms',
				array(
					'name'         => 'post-tag-icon',
					'label'        => __( 'With tag icon', 'blockbase' ),
					'style_handle' => 'post-tag-icon',
				)
			);
			register_block_style(
				'core/post-terms',
				array(
					'name'         => 'post-category-icon',
					'label'        => __( 'With category icon', 'blockbase' ),
					'style_handle' => 'post-category-icon',
				)
			);
			register_block_style(
				'core/search',
				array(
					'name'         => 'small-search',
					'label'        => __( 'Small', 'blockbase' ),
					'style_handle' => 'small-search',
				)
			);
		}
	}
endif;

add_action( 'after_setup_theme', 'blockbase_register_block_styles' );
