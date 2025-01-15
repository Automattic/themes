<?php
/**
 * Title: Default footer
 * Slug: goodskin/footer
 * Categories: featured, footer
 * Block Types: core/template-part/footer
 */
declare( strict_types = 1 );
?>

<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:spacer {"height":"20px"} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"isStackedOnMobile":false} -->
<div class="wp-block-columns is-not-stacked-on-mobile"><!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:site-title {"fontSize":"xx-large"} /-->

<!-- wp:site-tagline /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","width":"66.66%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:66.66%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"italic","fontWeight":"300"}},"fontSize":"large"} -->
<p class="has-large-font-size" style="font-style:italic;font-weight:300"><a href="#"><?php echo esc_html__( 'Instagram', 'goodskin' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"italic","fontWeight":"300"}},"fontSize":"large"} -->
<p class="has-large-font-size" style="font-style:italic;font-weight:300"><a href="#"><?php echo esc_html__( 'TikTok', 'goodskin' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"italic","fontWeight":"300"}},"fontSize":"large"} -->
<p class="has-large-font-size" style="font-style:italic;font-weight:300"><a href="#"><?php echo esc_html__( 'Youtube', 'goodskin' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"var:preset|spacing|40"} -->
<div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}},"typography":{"fontSize":"0.9rem"}}} -->
<p style="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;font-size:0.9rem">
	<?php
		/* Translators: WordPress link. */
		$wordpress_link = '<a href="' . esc_url( __( 'https://wordpress.org', 'goodskin' ) ) . '" rel="nofollow">WordPress</a>';
		echo sprintf(
			esc_html__( 'Designed with %1$s', 'goodskin' ),
			$wordpress_link
		);?>
</p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"var:preset|spacing|40"} -->
<div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->
