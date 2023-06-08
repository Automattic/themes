<?php
/**
 * Title: Stack Photo
 * Slug: fotograma/stack-photo
 * Categories: featured
 */
?>

<!-- wp:group {"style":{"dimensions":{"minHeight":"100vh"},"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"}},"position":{"type":"sticky","top":"0px"}},"backgroundColor":"base","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group has-base-background-color has-background" style="min-height:100vh;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|50"},"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}},"border":{"top":{"color":"var:preset|color|contrast","width":"1px"},"bottom":{"color":"var:preset|color|contrast","width":"1px"},"right":[],"left":[]}}} -->
	<div class="wp-block-columns" style="border-top-color:var(--wp--preset--color--contrast);border-top-width:1px;border-bottom-color:var(--wp--preset--color--contrast);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
		<!-- wp:column {"width":"25%","style":{"spacing":{"blockGap":"0"}}} -->
		<div class="wp-block-column" style="flex-basis:25%">
			<!-- wp:template-part {"slug":"header","theme":"fotograma","area":"header"} /-->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"25%"} -->
		<div class="wp-block-column" style="flex-basis:25%"></div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"25%","style":{"spacing":{"blockGap":"0px"}}} -->
		<div class="wp-block-column" style="flex-basis:25%">
			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size"><?php echo esc_html__( 'August 1973: North Philadelphia Children', 'fotograma' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size"><?php echo esc_html__( 'Photographer: Dick Swanson', 'fotograma' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"25%","style":{"spacing":{"blockGap":"0px"}}} -->
		<div class="wp-block-column" style="flex-basis:25%">
			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size"><?php echo esc_html__( 'In the 1970s, North Philadelphia, a largely African American, working-class area, boasted rich history and lively culture. With row houses, apartments, small businesses, it nurtured a close-knit community with robust pride and belonging.', 'fotograma' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:cover {"url":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/documerica-vOxIhoEXPvc-unsplash.jpg","dimRatio":0,"focalPoint":{"x":0.5,"y":0.8},"style":{"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-cover"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span>
		<img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/documerica-vOxIhoEXPvc-unsplash.jpg" style="object-position:50% 80%" data-object-fit="cover" data-object-position="50% 80%"/>
		<div class="wp-block-cover__inner-container">
			<!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
			<p class="has-text-align-center has-large-font-size"></p>
			<!-- /wp:paragraph -->
		</div>
	</div>
	<!-- /wp:cover -->
</div>
<!-- /wp:group -->
