<?php
/**
 * Title: Footer with right navigation
 * Slug: livro/footer-nav-right
 * Categories: footer
 * Block Types: core/template-part/footer
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"bottom":"var(--wp--custom--spacing--large, 10rem)","top":"var(--wp--custom--spacing--small, 1.25rem)"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--custom--spacing--small, 1.25rem);padding-bottom:var(--wp--custom--spacing--large, 10rem)"><!-- wp:paragraph {"align":"left","fontSize":"small"} -->
<p class="has-text-align-left has-small-font-size">
<?php echo sprintf(
	/* Translators: WordPress link. */
	esc_html__( 'Proudly powered by %s', 'livro' ),
	'<a href="' . esc_url( __( 'https://wordpress.org', 'livro' ) ) . '" rel="nofollow">WordPress</a>'
); ?></p>
<!-- /wp:paragraph -->

<!-- wp:navigation {"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"left"},"overlayBackgroundColor":"background","overlayTextColor":"foreground","style":{"typography":{"fontStyle":"normal"}},"fontSize":"small"} /--></div>
<!-- /wp:group -->
