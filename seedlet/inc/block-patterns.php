<?php
/**
 * Seedlet Theme: Block Patterns
 *
 * @package Seedlet
 * @since   1.0.0
 */

/**
 * Register Block Pattern Category.
 */
if ( function_exists( 'register_block_pattern_category' ) ) {

	register_block_pattern_category(
		'seedlet',
		array( 'label' => __( 'Seedlet', 'seedlet' ) )
	);
}

/**
 * Register Block Patterns.
 */
if ( function_exists( 'register_block_pattern' ) ) {
	register_block_pattern(
		'seedlet/group-split-background',
		array(
			'title'      => __( 'Group with Split Background', 'seedlet' ),
			'categories' => array( 'seedlet' ),
			'content'    => "<!-- wp:group {\"align\":\"full\",\"gradient\":\"hard-diagonal\"} -->\n<div class=\"wp-block-group alignfull has-hard-diagonal-gradient-background has-background\"><div class=\"wp-block-group__inner-container\"><!-- wp:spacer -->\n<div style=\"height:100px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\n<!-- /wp:spacer -->\n\n<!-- wp:image -->\n<figure class=\"wp-block-image\"><img src=\"" . get_template_directory_uri() . "/assets/img/envelope.jpg\" alt=\"" . __( 'Envelope', 'seedlet' ) . "\" /></figure>\n<!-- /wp:image -->\n\n<!-- wp:spacer -->\n<div style=\"height:100px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\n<!-- /wp:spacer --></div></div>\n<!-- /wp:group -->",
		)
	);

	register_block_pattern(
		'seedlet/group-image-overlap',
		array(
			'title'      => __( 'Group with Image Overlap', 'seedlet' ),
			'categories' => array( 'seedlet' ),
			'content'    => "
			<!-- wp:group {\"align\":\"full\",\"className\":\"is-style-overflow\",\"gradient\":\"stripe\"} -->\n<div class=\"wp-block-group alignfull is-style-overflow has-stripe-gradient-background has-background\"><div class=\"wp-block-group__inner-container\"><!-- wp:columns {\"align\":\"wide\"} -->\n<div class=\"wp-block-columns alignwide\"><!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:image -->\n<figure class=\"wp-block-image\">
			<img src=\"" . get_template_directory_uri() . "/assets/img/plant_a.png\" alt=\"" . __( 'Plant', 'seedlet' ) . "\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:image -->\n<figure class=\"wp-block-image\"><img src=\"" . get_template_directory_uri() . "/assets/img/plant_c.png\" alt=\"" . __( 'Plant', 'seedlet' ) . "\"/></figure>\n<!-- /wp:image --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"verticalAlignment\":\"center\"} -->\n<div class=\"wp-block-column is-vertically-aligned-center\"><!-- wp:image -->\n<figure class=\"wp-block-image\"><img src=\"" . get_template_directory_uri() . "/assets/img/plant_b.png\" alt=\"" . __( 'Plant', 'seedlet' ) . "\"/></figure>\n<!-- /wp:image --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns --></div></div>\n<!-- /wp:group -->",
		)
	);
	register_block_pattern(
		'seedlet/latest-posts-alternating-grid',
		array(
			'title'      => __( 'Alternating Grid of Latest Posts', 'seedlet' ),
			'categories' => array( 'seedlet' ),
			'content'    => '<!-- wp:latest-posts {"displayPostContent":true,"columns":5,"className":"is-style-seedlet-alternating-grid"} /-->',
		)
	);
}
