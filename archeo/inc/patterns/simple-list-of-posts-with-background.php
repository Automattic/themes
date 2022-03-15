<?php
/**
 * Simple list of posts with title and background
 */
return array(
	'title'      => __( 'Simple list of posts with title and background', 'archeo' ),
	'categories' => array( 'featured', 'query' ),
	'content'    => '<!-- wp:group {"layout":{"inherit":"true"},"align":"full","style":{"spacing":{"padding":{"top":"var(--wp--custom--spacing--medium)","bottom":"var(--wp--custom--spacing--medium)"},"margin":{"top":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"backgroundColor":"foreground","textColor":"background"} -->
	<div class="wp-block-group alignfull has-background-color has-foreground-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--custom--spacing--medium);padding-bottom:var(--wp--custom--spacing--medium);margin-top:0px">

		<!-- wp:group {"align":"wide"} -->
		<div class="wp-block-group alignwide">
			<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"bottom":"60px"}}},"fontSize":"medium"} -->
			<h3 class="has-medium-font-size" style="margin-bottom:60px">' . __( 'Selected Writings', 'archeo' ) . '</h3>
			<!-- /wp:heading -->
			
			<!-- wp:query {"queryId":3,"query":{"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"perPage":3}} -->
			<div class="wp-block-query"><!-- wp:post-template -->
			<!-- wp:group {"className":"simple-list-of-posts","layout":{"type":"flex","allowOrientation":false}} -->
			<div class="wp-block-group simple-list-of-posts"><!-- wp:post-title {"isLink":true,"style":{"typography":{"lineHeight":"1.2","fontStyle":"normal","fontWeight":"100"}},"fontSize":"huge"} /-->
			
			<!-- wp:post-author-name {"style":{"typography":{"fontStyle":"normal","fontWeight":"100","lineHeight":"1.2"}},"fontSize":"medium"} /--></div>
			<!-- /wp:group -->
			<!-- /wp:post-template -->
			<!-- wp:spacer {"height":"40px"} -->
			<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->
			<!-- wp:query-pagination {"paginationArrow":"chevron","layout":{"type":"flex","justifyContent":"space-between"}} -->
			<!-- wp:query-pagination-previous /-->
			<!-- wp:query-pagination-next /-->
			<!-- /wp:query-pagination --></div>
			<!-- /wp:query --></div>
		<!-- /wp:group --></div>
	<!-- /wp:group -->',
);
