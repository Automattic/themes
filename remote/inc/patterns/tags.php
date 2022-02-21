<?php
/**
 * Tags Pattern
 */
return array(
	'title'      => __( 'Tags', 'remote' ),
	'categories' => array( 'text' ),
	'content'    => '<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"small"} -->
		<p class="has-small-font-size" style="text-transform:uppercase">' . esc_html__( 'Tags', 'remote' ) . '</p>
		<!-- /wp:paragraph -->
		<!-- wp:tag-cloud {"className":"is-style-outline"} /-->',
);
