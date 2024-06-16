<?php
/**
 * Title: 404
 * Slug: feelingood/hidden-404
 * Inserter: no
 */
declare( strict_types = 1 );
?>

<!-- wp:cover {"url":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/background.jpg","hasParallax":true,"dimRatio":0,"minHeight":100,"minHeightUnit":"vh","contentPosition":"top center","align":"full","style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover alignfull has-parallax has-custom-content-position is-position-top-center" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;min-height:100vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span>
	<div role="img" class="wp-block-cover__image-background has-parallax" style="background-position:50% 50%;background-image:url(<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/background.jpg)"></div>
	<div class="wp-block-cover__inner-container">
		<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"dimensions":{"minHeight":""}},"layout":{"type":"default"}} -->
		<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
			<!-- wp:template-part {"slug":"header","tagName":"header","align":"full"} /-->

			<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}}},"layout":{"type":"constrained"}} -->
			<main class="wp-block-group" style="margin-top:var(--wp--preset--spacing--70);margin-bottom:var(--wp--preset--spacing--70);padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"0rem","bottom":"0rem","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"default"}} -->
				<div class="wp-block-group" style="padding-top:0rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:0rem;padding-left:var(--wp--preset--spacing--40)">
					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
					<div class="wp-block-group">
						<!-- wp:heading {"level":1,"fontSize":"xx-large"} -->
						<h1 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html__( 'Oh, no!', 'feelingood' ); ?></h1>
						<!-- /wp:heading -->

						<!-- wp:paragraph {"align":"left","fontSize":"medium"} -->
						<p class="has-text-align-left has-medium-font-size"><?php echo esc_html__( 'The page you are looking for does not exist, or it has been moved. Please try searching using the form below.', 'feelingood' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->

					<!-- wp:search {"showLabel":false,"placeholder":"","buttonText":"Search","style":{"border":{"radius":"999px"}}} /-->
				</div>
				<!-- /wp:group -->
			</main>
			<!-- /wp:group -->

			<!-- wp:template-part {"slug":"footer","tagName":"footer","align":"full"} /-->
		</div>
		<!-- /wp:group -->
	</div>
</div>
<!-- /wp:cover -->
