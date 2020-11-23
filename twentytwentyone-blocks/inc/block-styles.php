<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since 1.0.0
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	function twenty_twenty_one_register_block_styles() {
		// Columns: Overlap.
		register_block_style(
			'core/columns',
			array(
				'name'  => 'twentytwentyone-columns-overlap',
				'label' => esc_html__( 'Overlap', 'twentytwentyone-blocks' ),
			)
		);

		// Cover: Borders.
		register_block_style(
			'core/cover',
			array(
				'name'  => 'twentytwentyone-border',
				'label' => esc_html__( 'Borders', 'twentytwentyone-blocks' ),
			)
		);

		// Group: Borders.
		register_block_style(
			'core/group',
			array(
				'name'  => 'twentytwentyone-border',
				'label' => esc_html__( 'Borders', 'twentytwentyone-blocks' ),
			)
		);

		// Image: Borders.
		register_block_style(
			'core/image',
			array(
				'name'  => 'twentytwentyone-border',
				'label' => esc_html__( 'Borders', 'twentytwentyone-blocks' ),
			)
		);

		// Image: Frame.
		register_block_style(
			'core/image',
			array(
				'name'  => 'twentytwentyone-image-frame',
				'label' => esc_html__( 'Frame', 'twentytwentyone-blocks' ),
			)
		);

		// Latest Posts: Dividers.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'twentytwentyone-latest-posts-dividers',
				'label' => esc_html__( 'Dividers', 'twentytwentyone-blocks' ),
			)
		);

		// Latest Posts: Borders.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'twentytwentyone-latest-posts-borders',
				'label' => esc_html__( 'Borders', 'twentytwentyone-blocks' ),
			)
		);

		// Media & Text: Borders.
		register_block_style(
			'core/media-text',
			array(
				'name'  => 'twentytwentyone-border',
				'label' => esc_html__( 'Borders', 'twentytwentyone-blocks' ),
			)
		);

		// Separator: Thick.
		register_block_style(
			'core/separator',
			array(
				'name'  => 'twentytwentyone-separator-thick',
				'label' => esc_html__( 'Thick', 'twentytwentyone-blocks' ),
			)
		);

		// Social icons: Dark gray color.
		register_block_style(
			'core/social-links',
			array(
				'name'  => 'twentytwentyone-social-icons-color',
				'label' => esc_html__( 'Dark Gray', 'twentytwentyone-blocks' ),
			)
		);
	}
	add_action( 'init', 'twenty_twenty_one_register_block_styles' );
}
