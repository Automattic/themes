<?php
/**
 * Category buttons
 */
return array(
	'title'      => __( 'Category buttons', 'lettre' ),
	'categories' => array( 'featured' ),
	'content'    => '<!-- wp:paragraph {"fontSize":"small","style":{"typography":{"textTransform":"uppercase"}}} -->
					<p class="has-small-font-size" style="text-transform:uppercase">' . esc_html__( 'Categories', 'lettre' ) . '</p>
					<!-- /wp:paragraph -->
					
					<!-- wp:tag-cloud {"taxonomy":"category","className":"is-style-outline"} /-->',
);
