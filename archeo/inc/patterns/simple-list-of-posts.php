<?php
/**
 * Simple list of posts
 */
return array(
	'title'      => __( 'Simple list of posts', 'archeo' ),
	'categories' => array( 'pages' ),
	'content'    => '<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var(--wp--custom--spacing--medium)","bottom":"var(--wp--custom--spacing--medium)"}}},"className":"no-vertical-margin"} -->
	<div class="wp-block-group alignwide no-vertical-margin" style="padding-top:var(--wp--custom--spacing--medium);padding-bottom:var(--wp--custom--spacing--medium)"><!-- wp:query {"queryId":3,"query":{"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"perPage":3}} -->
	<div class="wp-block-query"><!-- wp:post-template -->
	<!-- wp:group {"className":"simple-list-of-posts","layout":{"type":"flex","allowOrientation":false}} -->
	<div class="wp-block-group simple-list-of-posts"><!-- wp:post-title {"style":{"typography":{"lineHeight":"1.2","fontStyle":"normal","fontWeight":"100"}},"fontSize":"huge"} /-->
	
	<!-- wp:post-author-name {"style":{"typography":{"fontStyle":"normal","fontWeight":"100","lineHeight":"1.2"}},"fontSize":"medium"} /--></div>
	<!-- /wp:group -->
	<!-- /wp:post-template --></div>
	<!-- /wp:query --></div>
	<!-- /wp:group -->',
);
