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

			register_block_style(
				'core/image',
				array(
					'name'         => 'skatepark-aside-caption',
					'label'        => __( 'Aside caption', 'skatepark' ),
					'style_handle' => 'skatepark-aside-caption',
					)
				);
	
			register_block_style(
				'core/paragraph',
				array(
					'name'         => 'indented-paragraph',
					'label'        => __( 'Indented paragraph', 'skatepark' ),
					'style_handle' => 'indented-paragraph',
				)
			);
		}
	}
endif;

<<<<<<< HEAD
add_action( 'after_setup_theme', 'skatepark_register_block_styles' );
=======
add_action( 'after_setup_theme', 'skatepark_register_block_styles' );
>>>>>>> d5bb84db (two columns pattern and indented paragraph block style)
