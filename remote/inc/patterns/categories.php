<?php
/**
 * Categories Pattern
 */
return array(
	'title'      => __( 'Categories', 'remote' ),
	'categories' => array( 'text', 'featured' ),
	'content'    => '<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"small"} -->
		<p class="has-small-font-size" style="text-transform:uppercase">' . esc_html__( 'Categories', 'remote' ) . '</p>
		<!-- /wp:paragraph -->
		<!-- wp:tag-cloud {"className":"is-style-outline","taxonomy":"category"} /-->',
);
