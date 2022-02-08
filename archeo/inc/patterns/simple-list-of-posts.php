<?php
/**
 * Simple list of posts
 */
return array(
	'title'      => __( 'Simple list of posts', 'archeo' ),
	'categories' => array( 'pages' ),
	'content'    => '<!-- wp:group {"align":"full"} -->
	<div class="wp-block-group alignfull"><!-- wp:query {"queryId":3,"query":{"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"perPage":3}} -->
	<div class="wp-block-query"><!-- wp:post-template -->
	<!-- wp:group {"className":"simple-list-of-posts","layout":{"type":"flex","allowOrientation":false}} -->
	<div class="wp-block-group simple-list-of-posts"><!-- wp:post-title {"style":{"typography":{"lineHeight":"1.2","fontStyle":"normal","fontWeight":"300"}},"fontSize":"huge"} /-->
	
	<!-- wp:post-author-name {"fontSize":"medium"} /--></div>
	<!-- /wp:group -->
	<!-- /wp:post-template --></div>
	<!-- /wp:query --></div>
	<!-- /wp:group -->',
);
