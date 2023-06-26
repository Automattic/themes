<?php
/**
 * Title: Header
 * Slug: optimismo/homepage
 * Categories: featured
 */
?>

<!-- wp:group {"align":"full","style":{"dimensions":{"minHeight":"100vh"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
<div class="wp-block-group alignfull" style="min-height:100vh;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
	<!-- wp:spacer {"height":"1px"} -->
	<div style="height:1px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:group {"align":"full","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull">
		<!-- wp:template-part {"slug":"header","tagName":"header","align":"full"} /-->

		<!-- wp:group {"align":"full","layout":{"type":"default"}} -->
		<div class="wp-block-group alignfull">
			<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"textTransform":"uppercase","lineHeight":"0.8","letterSpacing":"0.25em","fontStyle":"normal","fontWeight":"800"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"fontSize":"huge"} -->
			<h1 class="wp-block-heading has-text-align-center has-huge-font-size" style="margin-top:0px;margin-bottom:0px;font-style:normal;font-weight:800;letter-spacing:0.25em;line-height:0.8;text-transform:uppercase">HappierWorld</h1>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"var:preset|spacing|70","bottom":"0"}}},"layout":{"type":"constrained"}} -->
		<main class="wp-block-group" style="margin-top:var(--wp--preset--spacing--70);margin-bottom:0">
			<!-- wp:query {"query":{"perPage":"5","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[]},"layout":{"type":"constrained"}} -->
			<div class="wp-block-query">
				<!-- wp:post-template {"className":"home-post-template"} -->
					<!-- wp:post-title {"textAlign":"center","isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"fontSize":"small"} /-->
				<!-- /wp:post-template -->
			</div>
			<!-- /wp:query -->
		</main>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- wp:template-part {"slug":"footer","tagName":"footer","align":"full"} /-->
</div>
<!-- /wp:group -->
