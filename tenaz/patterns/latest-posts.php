<?php
/**
 * Title: Latest Posts
 * Slug: tenaz/latest-posts
 * Categories: featured
 */
?>
<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--70);margin-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:group {"align":"wide","style":{"border":{"bottom":{"color":"var:preset|color|contrast","style":"solid","width":"3px"}},"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}},"layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide" style="border-bottom-color:var(--wp--preset--color--contrast);border-bottom-style:solid;border-bottom-width:3px;margin-bottom:var(--wp--preset--spacing--50)">
		<!-- wp:heading {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"medium"} -->
		<h2 class="wp-block-heading has-medium-font-size" style="text-transform:uppercase"><?php echo esc_html__( 'Latest', 'tenaz' ); ?></h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:query {"queryId":9,"query":{"perPage":"5","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","className":"query-latest-posts"} -->
	<div class="wp-block-query alignwide query-latest-posts">
		<!-- wp:post-template {"layout":{"type":"grid","columnCount":"4"}} -->
			<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} /-->

			<!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group"><!-- wp:post-terms {"term":"category","style":{"elements":{"link":{"color":[],":hover":{"color":{"text":"var:preset|color|primary"}}}},"color":[]},"textColor":"contrast"} /-->

				<!-- wp:post-title {"isLink":true,"style":{"spacing":[],"elements":{"link":{"color":[],":hover":{"color":{"text":"var:preset|color|primary"}}}},"color":[],"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"contrast"} /-->

				<!-- wp:post-excerpt {"style":{"typography":{"lineHeight":"1.5"}},"fontSize":"small"} /-->

				<!-- wp:post-author-name {"isLink":true} /-->
			</div>
			<!-- /wp:group -->
		<!-- /wp:post-template -->
	</div>
	<!-- /wp:query -->
</div>
<!-- /wp:group -->
