<?php
/**
 * Title: front-page
 * Slug: bute/front-page
 * Categories: featured
 */

declare( strict_types = 1 );
?>

<!-- wp:group {"style":{"position":{"type":""}},"layout":{"type":"default"}} -->
<div class="wp-block-group">
	<!-- wp:cover {"url":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/StockSnap_D49XR0MX5L.jpg","dimRatio":0,"focalPoint":{"x":1,"y":1},"minHeight":100,"minHeightUnit":"vh","isDark":false,"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"default"}} -->
	<div class="wp-block-cover is-light" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:100vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span>
		<img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/StockSnap_D49XR0MX5L.jpg" style="object-position:100% 100%" data-object-fit="cover" data-object-position="100% 100%"/>

		<div class="wp-block-cover__inner-container">
			<!-- wp:group {"style":{"dimensions":{"minHeight":"100vh"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} -->
			<div class="wp-block-group" style="min-height:100vh">
				<!-- wp:pattern {"slug":"bute/header"} /-->

				<!-- wp:group {"style":{"layout":{"flexSize":"88px","selfStretch":"fixed"}},"layout":{"type":"constrained","contentSize":"900px"}} -->
				<div class="wp-block-group">
					<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"lineHeight":"0.8","textTransform":"uppercase","fontStyle":"normal","fontWeight":"800"},"color":{"text":"#dcbc06"}},"fontSize":"xxxx-large"} -->
					<h1 class="wp-block-heading has-text-align-center has-text-color has-xxxx-large-font-size" style="color:#dcbc06;font-style:normal;font-weight:800;line-height:0.8;text-transform:uppercase"><?php echo wp_kses_post( __( 'Embark<br>on an<br>Adventure', 'bute' ) ); ?></h1>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"},":hover":{"color":{"text":"var:preset|color|base"}}}},"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
					<p class="has-text-align-center has-link-color" style="font-style:normal;font-weight:500"><a href="#" data-type="URL" data-id="#"><?php echo esc_html__( 'Explore our insights', 'bute' ); ?></a>→ </p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:spacer {"height":"0px","style":{"layout":{"flexSize":"88px","selfStretch":"fixed"}}} -->
				<div style="height:0px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->
			</div>
			<!-- /wp:group -->
		</div>
	</div>
	<!-- /wp:cover -->
</div>
<!-- /wp:group -->
