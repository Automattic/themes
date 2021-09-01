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
				'core/quote',
				array(
					'name'         => 'side-quote',
					'label'        => __( 'Side quote', 'skatepark' ),
					'style_handle' => 'side-quote',
				)
			);

			register_block_style(
				'core/quote',
				array(
					'name'         => 'testimonial-quote',
					'label'        => __( 'Testimonial', 'skatepark' ),
					'style_handle' => 'testimonial-quote',
				)
			);
		}
	}
endif;

add_action( 'after_setup_theme', 'skatepark_register_block_styles' );
