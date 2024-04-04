<?php
/**
 * Title: Stack Contact
 * Slug: fotograma/stack-contact
 * Categories: featured
 */
?>

<!-- wp:group {"style":{"dimensions":{"minHeight":"100vh"},"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"}},"position":{"type":"sticky","top":"0px"}},"backgroundColor":"base","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group has-base-background-color has-background" style="min-height:100vh;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|50"},"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}},"border":{"top":{"color":"var:preset|color|contrast","width":"1px"},"bottom":{"color":"var:preset|color|contrast","width":"1px"}},"layout":{"selfStretch":"fit","flexSize":null}}} -->
	<div class="wp-block-columns" style="border-top-color:var(--wp--preset--color--contrast);border-top-width:1px;border-bottom-color:var(--wp--preset--color--contrast);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
		<!-- wp:column {"width":"25%","style":{"spacing":{"blockGap":"0"}}} -->
		<div class="wp-block-column" style="flex-basis:25%">
			<!-- wp:pattern {"slug":"fotograma/header"} /-->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"25%"} -->
		<div class="wp-block-column" style="flex-basis:25%"></div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"25%","style":{"spacing":{"blockGap":"0px"}}} -->
		<div class="wp-block-column" style="flex-basis:25%">
			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size"><?php echo esc_html__( 'Contact', 'fotograma' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"25%","style":{"spacing":{"blockGap":"0px"}}} -->
		<div class="wp-block-column" style="flex-basis:25%"></div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:group {"style":{"spacing":{"blockGap":"0"},"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","flexWrap":"wrap","verticalAlignment":"space-between"}} -->
	<div class="wp-block-group">
		<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"style":{"typography":{"lineHeight":"0.9","letterSpacing":"-0.02em"}},"fontSize":"huge"} -->
			<p class="has-huge-font-size no-underline" style="letter-spacing:-0.02em;line-height:0.9"><a href="#"><?php echo esc_html__( 'Email', 'fotograma' ); ?></a></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"style":{"typography":{"lineHeight":"0.9","letterSpacing":"-0.02em"}},"fontSize":"huge"} -->
			<p class="has-huge-font-size no-underline" style="letter-spacing:-0.02em;line-height:0.9"><a href="#"><?php echo esc_html__( 'Tumblr', 'fotograma' ); ?></a></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"style":{"typography":{"lineHeight":"0.9","letterSpacing":"-0.02em"}},"fontSize":"huge"} -->
			<p class="has-huge-font-size no-underline" style="letter-spacing:-0.02em;line-height:0.9"><a href="#"><?php echo esc_html__( 'Instagram', 'fotograma' ); ?></a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:pattern {"slug":"fotograma/footer-home"} /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
