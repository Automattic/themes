<?php
/**
 * Title: Comments
 * slug: course/comments
 * inserter: no
 */

?>

<!-- wp:comments {"className":"wp-block-comments-query-loop "} -->
<div class="wp-block-comments wp-block-comments-query-loop"><!-- wp:separator {"opacity":"css","className":"is-style-wide"} -->
	<hr class="wp-block-separator has-css-opacity is-style-wide"/>
	<!-- /wp:separator -->

	<!-- wp:comments-title {"showPostTitle":false,"showCommentsCount":false,"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0px","left":"0"},"margin":{"top":"0","right":"0","left":"0"}}},"fontSize":"large"} /-->

	<!-- wp:comment-template {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","left":"0","bottom":"0"},"blockGap":"0","margin":{"bottom":"5rem"}}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"wrap"}} -->
	<div class="wp-block-group" style="margin-bottom:5rem;padding-top:0;padding-right:0;padding-bottom:0rem;padding-left:0"><!-- wp:group {"style":{"spacing":{"blockGap":"20px","padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left","verticalAlignment":"top"}} -->
		<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:avatar {"size":48,"style":{"border":{"radius":"24px","width":"1px"}}} /-->

			<!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:comment-author-name {"isLink":false} /-->

				<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"blockGap":"0.5em"}},"layout":{"type":"flex","verticalAlignment":"bottom"}} -->
				<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px"><!-- wp:comment-date {"format":"F j, Y \\a\\t g:i a","isLink":false} /-->

					<!-- wp:comment-edit-link /--></div>
				<!-- /wp:group -->

				<!-- wp:comment-content {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} /-->

				<!-- wp:comment-reply-link /--></div>
			<!-- /wp:group --></div>
		<!-- /wp:group --></div>
	<!-- /wp:group -->
	<!-- /wp:comment-template -->

	<!-- wp:comments-pagination -->
	<!-- wp:comments-pagination-previous /-->

	<!-- wp:comments-pagination-numbers /-->

	<!-- wp:comments-pagination-next /-->
	<!-- /wp:comments-pagination -->

	<!-- wp:post-comments-form /--></div>
<!-- /wp:comments -->
