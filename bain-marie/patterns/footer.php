<?php
/**
 * Title: Footer
 * Slug: bain-marie/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 */
?>

<!-- wp:spacer {"height":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d80)"} -->
<div style="height:var(--wp--preset--spacing--80)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"6vw","left":"6vw","top":"var:preset|spacing|50","bottom":"2.2rem"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-right:6vw;padding-bottom:2.2rem;padding-left:6vw"><!-- wp:columns {"verticalAlignment":"center","isStackedOnMobile":false,"align":"wide"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center is-not-stacked-on-mobile"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:social-links {"iconColor":"primary","iconColorValue":"#000000","size":"has-small-icon-size","className":"is-style-logos-only"} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"x"} /-->

<!-- wp:social-link {"url":"#","service":"pinterest"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"align":"center","fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size"> 
	<?php
		/* Translators: WordPress link. */
		$wordpress_link = '<a href="' . esc_url( __( 'https://wordpress.org', 'saison' ) ) . '" rel="nofollow">WordPress</a>';
		echo sprintf(
			esc_html__( 'Designed with %1$s', 'saison' ),
			$wordpress_link
		);
	?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"right"}} -->
<div class="wp-block-group"><!-- wp:navigation {"style":{"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"uppercase","letterSpacing":"0.16em"}},"fontSize":"small","fontFamily":"jost"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->