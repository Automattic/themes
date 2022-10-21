<?php
/**
 * Title: Simple list of posts with title and background
 * Slug: archeo/simple-list-of-posts-with-background
 * Categories: featured, query
 * Block Types: query
 */
?>

<!-- wp:group {"layout":{"inherit":"true"},"align":"full","style":{"spacing":{"padding":{"top":"var(--wp--custom--spacing--medium)","bottom":"var(--wp--custom--spacing--medium)"},"margin":{"top":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"backgroundColor":"foreground","textColor":"background"} -->
<div class="wp-block-group alignfull has-background-color has-foreground-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--custom--spacing--medium);padding-bottom:var(--wp--custom--spacing--medium);margin-top:0px">

	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"left":"0px","right":"0px"}}}} -->
	<div class="wp-block-group alignwide" style="padding-left:0px;padding-right:0px;">
		<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"bottom":"40px"}}},"fontSize":"medium"} -->
		<h3 class="has-medium-font-size" style="margin-bottom:40px"><?php _e( 'Selected Writings', 'archeo' ); ?></h3>
		<!-- /wp:heading -->

		<!-- wp:query {"query":{"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"perPage":3,"parents":[]}} -->
		<div class="wp-block-query">
			<!-- wp:post-template -->
			<!-- wp:group {"className":"simple-list-of-posts","layout":{"type":"flex","allowOrientation":false}} -->
			<div class="wp-block-group simple-list-of-posts">
				<!-- wp:post-title {"isLink":true,"style":{"typography":{"lineHeight":"1.2","fontStyle":"normal","fontWeight":"100"},"spacing":{"margin":{"top":"1.25rem"}}},"fontSize":"huge"} /-->

				<!-- wp:post-author {"showAvatar":false,"style":{"typography":{"lineHeight":"1.2","fontStyle":"normal","fontWeight":"100"}},"fontSize":"medium"} /-->
			</div>
			<!-- /wp:group -->
			<!-- /wp:post-template -->

			<!-- wp:spacer {"height":"40px"} -->
			<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->

			<!-- wp:query-pagination {"paginationArrow":"chevron","layout":{"type":"flex","justifyContent":"space-between"}} -->
				<!-- wp:query-pagination-previous /-->
				<!-- wp:query-pagination-next /-->
			<!-- /wp:query-pagination -->
		</div>
		<!-- /wp:query -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
