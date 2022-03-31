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

	//Needed until https://github.com/WordPress/gutenberg/issues/39500 is fixed.
	$block_pattern_categories = array(
		'featured' => array( 'label' => __( 'Featured', 'remote' ) ),
		'columns'  => array( 'label' => __( 'Columns', 'remote' ) ),
		'text'     => array( 'label' => __( 'Text', 'remote' ) ),
		'query'    => array( 'label' => __( 'Query', 'remote' ) ),
	);

	/**
	 * Filters the theme block pattern categories.
	 *
	 * @since remote 1.0
	 *
	 * @param array[] $block_pattern_categories {
	 *     An associative array of block pattern categories, keyed by category name.
	 *
	 *     @type array[] $properties {
	 *         An array of block category properties.
	 *
	 *         @type string $label A human-readable label for the pattern category.
	 *     }
	 * }
	 */
	$block_pattern_categories = apply_filters( 'remote_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}

	$block_patterns = array(
		'hero-text',
		'large-quote',
		'small-quote',
		'hidden-404-content',
		'hidden-search-form',
		'image-with-text',
		'posts-grid',
		'posts-list',
		'subscribe',
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


