<?php
/**
 * Title: Grid of Posts
 * slug: pendant/grid-of-posts
 * categories: featured, query
 */
?>

<!-- wp:query {"query":{"perPage":4,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":true},"tagName":"main","displayLayout":{"type":"flex","columns":2},"layout":{"inherit":true}} -->
<main class="wp-block-query"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"1em","bottom":"1.5em"}}}} -->
	<div class="wp-block-group alignwide" style="padding-top:1em;padding-bottom: 1.5em"><!-- wp:post-template -->
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"2em","bottom":"2em"}}}} -->
	<div class="wp-block-group" style="padding-top:2em;padding-bottom:2em"><!-- wp:post-featured-image {"isLink":true,"width":"100%","height":"16em"} /-->
	
	<!-- wp:post-title {"level":3,"isLink":true} /-->
	<!-- wp:post-excerpt /-->

	<!-- wp:read-more {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"medium"} /--></div>
	<!-- /wp:group -->
	<!-- /wp:post-template -->

	</div>
	<!-- /wp:group -->
	
	<!-- wp:separator {"align":"wide","backgroundColor":"foreground","className":"is-style-wide"} -->
	<hr class="wp-block-separator alignwide has-text-color has-foreground-color has-alpha-channel-opacity has-foreground-background-color has-background is-style-wide"/>
	<!-- /wp:separator -->

	<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"2.5em","bottom":"2.5em"}}}} -->
	<div class="wp-block-group alignwide" style="margin-top:0;padding-top:2.5em;padding-bottom:2.5em"><!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"space-between"}} -->
	<!-- wp:query-pagination-previous /-->
	
	<!-- wp:query-pagination-numbers /-->
	
	<!-- wp:query-pagination-next /-->
	<!-- /wp:query-pagination --></div>
	<!-- /wp:group -->

</main>
<!-- /wp:query -->
