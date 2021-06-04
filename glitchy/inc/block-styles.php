<?php

/**
 * Register Custom Block Styles
 */
if ( function_exists( 'register_block_style' ) ) {
	function glitchy_register_block_styles() {

		/**
		 * Register block styles
		 */

		// Heading (Warped)
		register_block_style(
			'core/heading',
			array(
				'name'         => 'photocopy-warped',
				'label'        => 'Warped (Experimental)'
			)
		);

		// Heading (Warped + Stretched)
		register_block_style(
			'core/heading',
			array(
				'name'         => 'photocopy-warped-stretched',
				'label'        => 'Warped + Stretched (Experimental)'
			)
		);

		// Image
		register_block_style(
			'core/image',
			array(
				'name'         => 'photocopy',
				'label'        => 'Photocopy'
			)
		);

		// Image (Warped)
		register_block_style(
			'core/image',
			array(
				'name'         => 'photocopy-warped',
				'label'        => 'Warped Photocopy'
			)
		);

		// Featured Image
		register_block_style(
			'core/post-featured-image',
			array(
				'name'         => 'photocopy',
				'label'        => 'Photocopy'
			)
		);

		// Featured Image (Warped)
		register_block_style(
			'core/post-featured-image',
			array(
				'name'         => 'photocopy-warped',
				'label'        => 'Warped Photocopy'
			)
		);

		// Gallery
		register_block_style(
			'core/gallery',
			array(
				'name'         => 'photocopy',
				'label'        => 'Photocopy'
			)
		);

		// Gallery (Warped)
		register_block_style(
			'core/gallery',
			array(
				'name'         => 'photocopy-warped',
				'label'        => 'Warped Photocopy'
			)
		);

		// Media & Text
		register_block_style(
			'core/media-text',
			array(
				'name'         => 'photocopy',
				'label'        => 'Photocopy'
			)
		);

		// Media & Text (Warped)
		register_block_style(
			'core/media-text',
			array(
				'name'         => 'photocopy-warped',
				'label'        => 'Warped Photocopy'
			)
		);

		// Paragraph (Warped)
		register_block_style(
			'core/paragraph',
			array(
				'name'         => 'photocopy-warped',
				'label'        => 'Warped (Experimental)'
			)
		);

		// Paragraph (Warped + Stretched)
		register_block_style(
			'core/paragraph',
			array(
				'name'         => 'photocopy-warped-stretched',
				'label'        => 'Warped + Stretched (Experimental)'
			)
		);
	}

	add_action( 'init', 'glitchy_register_block_styles' );
}

/**
 * Load the distortion SVG into the footer in the front end and editor.
 */
function glitchy_load_svg_filter() { 
    echo "<svg class='photocopier-svg-filter'><filter id='photocopy-filter-warp' filterUnits='userSpaceOnUse' x='0' y='0'><feTurbulence baseFrequency='0 0.021' seed='1' result='photocopy-turbulance'></feTurbulence><feDisplacementMap in='SourceGraphic' in2='photocopy-turbulance' scale='38' result='photocopy-displacement'></feDisplacementMap><feOffset dx='-14' dy='-9' result='photocopy-offset' in='photocopy-displacement'></feOffset><feComposite in='photocopy-offset' in2='SourceGraphic' result='photocopy-composite'></feComposite></filter></svg><svg class='photocopier-svg-filter'><filter id='photocopy-filter-warp-text' filterUnits='userSpaceOnUse' x='0' y='0'><feTurbulence baseFrequency='0 0.05125' seed='2' result='photocopy-turbulance'></feTurbulence><feDisplacementMap in='SourceGraphic' in2='photocopy-turbulance' scale='100' result='photocopy-displacement'></feDisplacementMap><feOffset dx='-20' dy='-20' result='photocopy-offset' in='photocopy-displacement'></feOffset></filter></svg>";
}
add_action('wp_footer', 'glitchy_load_svg_filter');
add_action('admin_footer', 'glitchy_load_svg_filter');