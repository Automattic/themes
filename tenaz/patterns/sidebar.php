<?php
/**
 * Title: Sidebar
 * Slug: tenaz/sidebar
 * Categories: featured
 */
?>
<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
	<!-- wp:group {"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:group {"style":{"border":{"color":null,"style":null,"width":null,"top":[],"right":[],"bottom":{"color":"var:preset|color|contrast","style":"solid","width":"3px"},"left":[]}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--contrast);border-bottom-style:solid;border-bottom-width:3px">
			<!-- wp:heading {"level":3,"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"small"} -->
			<h3 class="wp-block-heading has-small-font-size" style="text-transform:uppercase">Author</h3>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->

		<!-- wp:post-author {"showBio":false,"byline":"Written by","isLink":true,"style":{"spacing":{"margin":{"top":"1rem"}},"elements":{"link":{":hover":{"color":{"text":"var:preset|color|primary"}}}}}} /-->

		<!-- wp:post-author-biography {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}},"elements":{"link":{"color":{"text":"var:preset|color|primary"},":hover":{"color":{"text":"var:preset|color|tertiary"}}}}},"textColor":"contrast","fontSize":"small"} /-->

		<!-- wp:spacer {"height":"2rem","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
		<div style="margin-top:0px;margin-bottom:0px;height:2rem" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:group {"style":{"border":{"color":null,"style":null,"width":null,"top":[],"right":[],"bottom":{"color":"var:preset|color|contrast","style":"solid","width":"3px"},"left":[]}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--contrast);border-bottom-style:solid;border-bottom-width:3px">
			<!-- wp:heading {"level":3,"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"small"} -->
			<h3 class="wp-block-heading has-small-font-size" style="text-transform:uppercase"><?php echo esc_html__( 'Recent Posts', 'tenaz' ); ?></h3>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->

		<!-- wp:query {"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"list"}} -->
		<div class="wp-block-query">
			<!-- wp:post-template -->
				<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} /-->

				<!-- wp:group {"style":{"spacing":{"blockGap":"0.25rem","margin":{"top":"0px"}}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group" style="margin-top:0px">
					<!-- wp:post-terms {"term":"category","style":{"typography":{"fontStyle":"italic","fontWeight":"500"}}} /-->

					<!-- wp:post-title {"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"small"} /-->

					<!-- wp:post-author-name {"isLink":true,"fontSize":"x-small"} /-->
				</div>
				<!-- /wp:group -->
			<!-- /wp:post-template -->
		</div>
		<!-- /wp:query -->

		<!-- wp:spacer {"height":"2rem","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
		<div style="margin-top:0px;margin-bottom:0px;height:2rem" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:group {"style":{"border":{"color":null,"style":null,"width":null,"top":[],"right":[],"bottom":{"color":"var:preset|color|contrast","style":"solid","width":"3px"},"left":[]}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--contrast);border-bottom-style:solid;border-bottom-width:3px">
			<!-- wp:heading {"level":3,"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"small"} -->
			<h3 class="wp-block-heading has-small-font-size" style="text-transform:uppercase"><?php echo esc_html__( 'Categories', 'tenaz' ); ?></h3>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->

		<!-- wp:categories {"fontSize":"small"} /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
