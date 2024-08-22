<?php
/**
 * Title: Search
 * Slug: lowfi/hidden-single
 * Inserter: no
 */

declare( strict_types = 1 );
?>

<!-- wp:group {"align":"full","style":{"background":{"backgroundImage":{"url":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/texture.png","source":"file","title":"texture"},"backgroundSize":"auto"},"dimensions":{"minHeight":"100vh"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull" style="min-height:100vh">
	<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

	<!-- wp:group {"tagName":"main","align":"full","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
	<main class="wp-block-group alignfull" style="margin-top:0px;margin-bottom:0px">
		<!-- wp:group {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
			<div class="wp-block-group">
				<!-- wp:post-date /-->

				<!-- wp:post-title /-->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->

		<!-- wp:post-content {"lock":{"move":false,"remove":true},"layout":{"type":"constrained","justifyContent":"center"}} /-->

		<!-- wp:group {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"top":"var:preset|spacing|30"}},"border":{"top":{"color":"var:preset|color|contrast","width":"2px"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
			<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--contrast);border-top-width:2px;padding-top:var(--wp--preset--spacing--30)">
				<!-- wp:post-terms {"term":"category"} /-->

				<!-- wp:post-terms {"term":"post_tag"} /-->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|80"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
			<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--80)">
				<!-- wp:post-navigation-link {"type":"previous","arrow":"arrow"} /-->

				<!-- wp:post-navigation-link {"arrow":"arrow"} /-->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</main>
	<!-- /wp:group -->

	<!-- wp:group {"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:template-part {"slug":"comments"} /-->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull" style="margin-top:0px;margin-bottom:0px">
		<!-- wp:template-part {"slug":"footer","tagName":"footer","align":"full"} /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
