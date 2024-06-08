<?php
/**
 * Title: Default footer
 * Slug: nook/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 */
declare( strict_types = 1 );
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|60","left":"var:preset|spacing|60","top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"backgroundColor":"tertiary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-tertiary-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap","verticalAlignment":"bottom"}} -->
<div class="wp-block-group alignwide"><!-- wp:site-title /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"right"}} -->
<div class="wp-block-group"><!-- wp:social-links {"iconColor":"background","iconColorValue":"#ffffff","iconBackgroundColor":"primary","iconBackgroundColorValue":"#11181F","size":"has-small-icon-size","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"}}},"className":"is-style-default"} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color has-icon-background-color is-style-default"><!-- wp:social-link {"url":"#","service":"pinterest"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"mail"} /--></ul>
<!-- /wp:social-links -->

<!-- wp:navigation {"overlayMenu":"never","style":{"typography":{"textTransform":"uppercase","fontSize":"14px","fontStyle":"normal","fontWeight":"500"}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.8em"}}} -->
<p class="has-text-align-center" style="font-size:0.8em"><?php
	/* Translators: WordPress link. */
	$wordpress_link = '<a href="' . esc_url( __( 'https://wordpress.org', 'nook' ) ) . '" rel="nofollow">WordPress</a>';
	echo sprintf(
		esc_html__( 'Designed with %1$s', 'nook' ),
		$wordpress_link
	);?></p>
<!-- /wp:paragraph -->