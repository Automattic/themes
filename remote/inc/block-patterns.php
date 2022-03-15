<?php
/**
 * remote: Block Patterns
 *
 * @since remote 1.0
 */

/**
 * Registers block patterns and categories.
 *
 * @since remote 1.0
 *
 * @return void
 */
function remote_register_block_patterns() {

	$block_patterns = array(
		'hero-text',
		'hidden-404-content',
		'hidden-search-form',
		'image-with-text',
		'posts-grid',
		'posts-list',
		'tags',
		'categories',
	);

	/**
	 * Filters the theme block patterns.
	 *
	 * @since remote 1.0
	 *
	 * @param array $block_patterns List of block patterns by name.
	 */
	$block_patterns = apply_filters( 'remote_block_patterns', $block_patterns );

	foreach ( $block_patterns as $block_pattern ) {
		$pattern_file = get_theme_file_path( '/inc/patterns/' . $block_pattern . '.php' );

		register_block_pattern(
			'remote/' . $block_pattern,
			require $pattern_file
		);
	}
}
add_action( 'init', 'remote_register_block_patterns', 9 );


