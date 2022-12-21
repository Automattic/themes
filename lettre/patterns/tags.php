<?php
/**
 * List of posts
 */
return array(
	'title'      => __( 'Tag buttons', 'lettre' ),
	'categories' => array( 'featured' ),
	'content'    => '<!-- wp:paragraph {"fontSize":"small","style":{"typography":{"textTransform":"uppercase"}}} -->
					<p class="has-small-font-size" style="text-transform:uppercase">' . esc_html__( 'Tags', 'lettre' ) . '</p>
					<!-- /wp:paragraph -->
					
					<!-- wp:tag-cloud {"className":"is-style-outline"} /-->',
);
