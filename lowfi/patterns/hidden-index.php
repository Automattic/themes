<?php
/**
 * Title: Index
 * Slug: lowfi/hidden-index
 * Inserter: no
 */

declare( strict_types = 1 );
?>

<!-- wp:group {"align":"full","style":{"background":{"backgroundImage":{"url":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/texture.png","source":"file","title":"texture"},"backgroundSize":"auto"},"dimensions":{"minHeight":"100vh"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull" style="min-height:100vh">
	<!-- wp:template-part {"slug":"header","tagName":"header","align":"full"} /-->

	<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"constrained"}} -->
	<main class="wp-block-group" style="margin-top:0px;margin-bottom:0px">
		<!-- wp:pattern {"slug":"lowfi/hidden-post-list"} /-->
	</main>
	<!-- /wp:group -->

	<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull" style="margin-top:0px;margin-bottom:0px">
		<!-- wp:template-part {"slug":"footer","tagName":"footer","align":"full"} /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
