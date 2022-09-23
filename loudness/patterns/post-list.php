<?php
/**
 * Title: Posts list
 * Slug: loudness/posts-list
 * Inserter: no
 */
?>

<!-- wp:query {"tagName":"main"} -->
<main class="wp-block-query">

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"var:style|root|padding-right","bottom":"0","left":"var:style|root|padding-left"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:var(--wp--style--root--padding-right);padding-bottom:0;padding-left:var(--wp--style--root--padding-left)">

<!-- wp:post-template -->

<!-- wp:columns -->
<div class="wp-block-columns">

	<!-- wp:column {"width":"215px"} -->
	<div class="wp-block-column" style="flex-basis:215px">
		<!-- wp:post-date {"isLink":true} /-->
		<!-- wp:post-terms {"term":"category"} /-->
		<!-- wp:post-terms {"term": "post_tag"} /-->
	</div>
	<!-- /wp:column -->

	<!-- wp:column -->
	<div class="wp-block-column">
		<!-- wp:post-title {"isLink":true,"fontSize":"x-large"} /-->
		<!-- wp:post-author {"showAvatar":false,"showBio":false} /-->
		<!-- wp:post-excerpt /-->
	</div>
	<!-- /wp:column -->

	<!-- wp:column {"width":"215px"} -->
	<div class="wp-block-column" style="flex-basis:215px">
		<!-- wp:post-featured-image {"isLink":true} /-->
	</div>
	<!-- /wp:column -->

</div>
<!-- /wp:columns -->

<!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}}} -->
<hr class="wp-block-separator has-alpha-channel-opacity" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--60)"/>
<!-- /wp:separator -->

<!-- /wp:post-template -->

<!-- wp:query-pagination {"align":"wide", "paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"space-between"}} -->
	<!-- wp:query-pagination-previous /-->
	<!-- wp:query-pagination-numbers /-->
	<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

</div>
<!-- /wp:group -->

</main>
<!-- /wp:query -->
