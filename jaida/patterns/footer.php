<?php
/**
 * Title: Default footer
 * Slug: jaida/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 */
?>

<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"spacing":{"padding":{"top":"0","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"},"blockGap":"0"}},"backgroundColor":"primary","textColor":"background","layout":{"type":"constrained","wideSize":"1400px"}} -->
<div class="wp-block-group has-background-color has-primary-background-color has-text-color has-background has-link-color" style="padding-top:0;padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns {"verticalAlignment":"top","align":"wide","style":{"spacing":{"padding":{"right":"0","left":"0","top":"var:preset|spacing|80","bottom":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-top" style="padding-top:var(--wp--preset--spacing--80);padding-right:0;padding-bottom:var(--wp--preset--spacing--60);padding-left:0"><!-- wp:column {"verticalAlignment":"top","width":"38.1%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:38.1%"><!-- wp:site-title /-->

<!-- wp:site-tagline {"fontSize":"small"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"28.57%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:28.57%"><!-- wp:social-links {"iconColor":"background","iconColorValue":"#e9e1e5","iconBackgroundColor":"primary","iconBackgroundColorValue":"#3b2b27","size":"has-normal-icon-size","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"layout":{"type":"flex","justifyContent":"right"}} -->
<ul class="wp-block-social-links has-normal-icon-size has-icon-color has-icon-background-color"><!-- wp:social-link {"url":"https://twitter.com","service":"twitter"} /-->

<!-- wp:social-link {"url":"https://youtube.com","service":"youtube"} /-->

<!-- wp:social-link {"url":"https://pinterest.com","service":"pinterest"} /-->

<!-- wp:social-link {"url":"https://tiktok.com","service":"tiktok"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"right":"0","left":"0","top":"var:preset|spacing|80","bottom":"var:preset|spacing|70"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--80);padding-right:0;padding-bottom:var(--wp--preset--spacing--70);padding-left:0"><!-- wp:paragraph {"style":{"typography":{"fontSize":"0.8rem"}}} -->
<p style="font-size:0.8rem"><?php echo esc_html__( 'Jaida Theme', 'jaida' ); ?> © 2023</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"right","style":{"typography":{"fontSize":"0.8rem"}}} -->
<p class="has-text-align-right" style="font-size:0.8rem">
	<?php
	$wordpress_link = '<a href="' . esc_url( __( 'https://wordpress.org', 'jaida' ) ) . '" rel="nofollow">WordPress</a>';
	echo sprintf(
		/* Translators: WordPress link. */
		esc_html__( 'Designed with %1$s', 'jaida' ),
		$wordpress_link
	);
	?>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
