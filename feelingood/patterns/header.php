<?php
/**
 * Title: Default header
 * Slug: feelingood/header
 * Categories: featured, header
 * Block Types: core/template-part/header
 */
declare( strict_types = 1 );
?>

<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|70"},"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|50"},"padding":{"right":"0px","left":"0px","top":"0px","bottom":"0px"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--70);padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
	<!-- wp:column {"verticalAlignment":"center","width":"100px"} -->
	<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:100px">
		<!-- wp:site-logo {"width":100,"shouldSyncIcon":true,"align":"center","className":"is-style-rounded"} /-->
	</div>
	<!-- /wp:column -->

	<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"right":"0px","left":"0px"}}},"layout":{"type":"constrained","contentSize":"360px"}} -->
	<div class="wp-block-column is-vertically-aligned-center" style="padding-right:0px;padding-left:0px">
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"0.7","letterSpacing":"0px"},"elements":{"link":{"color":{"text":"var:preset|color|contrast"},":hover":{"color":{"text":"var:preset|color|contrast"}}}},"layout":{"selfStretch":"fit","flexSize":null}},"textColor":"contrast","className":"rotate-10","fontSize":"xxx-large","fontFamily":"smooch"} -->
			<p class="has-text-align-center rotate-10 has-contrast-color has-text-color has-link-color has-smooch-font-family has-xxx-large-font-size" style="letter-spacing:0px;line-height:0.7"><?php echo esc_html__( 'Feelin&rsquo; Good!', 'feelingood' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1","fontStyle":"normal","fontWeight":"600","letterSpacing":"0px"}},"fontFamily":"noto-sans-jp"} -->
			<p class="has-text-align-center has-noto-sans-jp-font-family" style="font-style:normal;font-weight:600;letter-spacing:0px;line-height:1">いい気分だわ！</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:column -->

	<!-- wp:column {"verticalAlignment":"center","width":"100px"} -->
	<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:100px">
		<!-- wp:navigation {"overlayBackgroundColor":"base","overlayTextColor":"contrast","align":"wide","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"},"style":{"spacing":{"blockGap":"0"}}} /-->
	</div>
	<!-- /wp:column -->
</div>
<!-- /wp:columns -->
