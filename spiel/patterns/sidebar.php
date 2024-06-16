<?php
/**
 * Title: Sidebar
 * Slug: spiel/sidebar
 * Categories: featured
 */

declare( strict_types = 1 );
?>

<!-- wp:group {"layout":{"type":"constrained","contentSize":"300px"}} -->
<div class="wp-block-group">
	<!-- wp:group {"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:group {"style":{"border":{"color":null,"style":null,"width":null,"top":[],"right":[],"bottom":{"color":"var:preset|color|contrast","style":"solid","width":"3px"},"left":[]}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--contrast);border-bottom-style:solid;border-bottom-width:3px">
			<!-- wp:heading {"level":3,"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"small"} -->
			<h3 class="wp-block-heading has-small-font-size" style="text-transform:uppercase"><?php echo esc_html__( 'Author', 'spiel' ); ?></h3>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
		<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40)">
			<!-- wp:avatar {"size":48} /-->

			<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.44"}},"fontSize":"x-small"} -->
				<p class="has-x-small-font-size" style="line-height:1.44"><?php echo esc_html__( 'Written by', 'spiel' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:post-author-name {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"typography":{"lineHeight":"1.44"}},"textColor":"contrast","fontSize":"x-small"} /-->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->

		<!-- wp:post-author-biography {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} /-->

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
			<h3 class="wp-block-heading has-small-font-size" style="text-transform:uppercase"><?php echo esc_html__( 'Recent Posts', 'spiel' ); ?></h3>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--40)">
			<!-- wp:query {"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
			<div class="wp-block-query">
				<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
					<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} /-->

					<!-- wp:group {"style":{"spacing":{"blockGap":"0.25rem","margin":{"top":"0px"}}},"layout":{"type":"constrained"}} -->
					<div class="wp-block-group" style="margin-top:0px">
						<!-- wp:post-terms {"term":"category","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}}} /-->

						<!-- wp:post-title {"isLink":true,"fontSize":"small"} /-->

						<!-- wp:post-author-name {"isLink":true} /-->
					</div>
					<!-- /wp:group -->
				<!-- /wp:post-template -->
			</div>
			<!-- /wp:query -->
		</div>
		<!-- /wp:group -->

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
			<h3 class="wp-block-heading has-small-font-size" style="text-transform:uppercase"><?php echo esc_html__( 'Categories', 'spiel' ); ?></h3>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->

		<!-- wp:categories {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"fontSize":"small"} /-->

		<!-- wp:spacer {"height":"2rem","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
		<div style="margin-top:0px;margin-bottom:0px;height:2rem" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
