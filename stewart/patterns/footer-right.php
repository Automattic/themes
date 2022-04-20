<?php
/**
 * Title: Right-aligned footer
 * Slug: stewart/footer-right
 * Categories: footer
 * Block Types: core/template-part/footer
 */
?>

<!-- wp:spacer {"height":60} -->
<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"align":"full","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull">
<!-- wp:group {"align":"wide"} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"align":"right","fontSize":"small"} -->
<p class="has-text-align-right has-small-font-size">
<?php
	printf(
		/* Translators: WordPress link. */
		esc_html__( 'Proudly powered by %s', 'stewart' ),
		'<a href="' . esc_url( __( 'https://wordpress.org', 'stewart' ) ) . '" rel="nofollow">WordPress</a>'
	);
	?>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":60} -->
<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
