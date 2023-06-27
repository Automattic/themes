<?php
/**
 * Title: Featured Posts
 * Slug: tenaz/featured-posts
 * Categories: featured
 */
?>
<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--70);margin-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:group {"align":"wide","style":{"border":{"bottom":{"color":"var:preset|color|contrast","style":"solid","width":"3px"}},"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}},"layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide" style="border-bottom-color:var(--wp--preset--color--contrast);border-bottom-style:solid;border-bottom-width:3px;margin-bottom:var(--wp--preset--spacing--50)">
		<!-- wp:heading {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"medium"} -->
		<h2 class="wp-block-heading has-medium-font-size" style="text-transform:uppercase"><?php echo  esc_html__( 'Trending', 'tenaz' ); ?></h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:query {"query":{"perPage":"4","pages":0,"offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"displayLayout":{"type":"flex","columns":4},"align":"wide"} -->
	<div class="wp-block-query alignwide">
		<!-- wp:post-template -->
			<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} /-->

			<!-- wp:group {"style":{"spacing":{"blockGap":"0.25rem"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">
				<!-- wp:post-terms {"term":"category"} /-->

				<!-- wp:post-title {"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"medium"} /-->

				<!-- wp:post-author-name {"isLink":true} /-->
			</div>
			<!-- /wp:group -->
		<!-- /wp:post-template -->
	</div>
	<!-- /wp:query -->
</div>
<!-- /wp:group -->
