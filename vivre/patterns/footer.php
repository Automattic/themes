<?php
/**
 * Title: Default footer
 * Slug: vivre/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 */
?>

<!-- wp:group {"align":"full","layout":{"inherit":false}} -->
<div class="wp-block-group alignfull"><!-- wp:group {"style":{"spacing":{"padding":{"top":"1.5rem","bottom":"1.5rem"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="padding-top:1.5rem;padding-bottom:1.5rem"><!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left">
  <?php
	printf(
		/* Translators: WordPress link. */
		esc_html__( 'Proudly powered by %s', 'vivre' ),
		'<a href="' . esc_url( __( 'https://wordpress.org', 'vivre' ) ) . '" rel="nofollow">WordPress</a>'
	);
	?>
</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"1rem"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"right"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}}} -->
<p class="has-link-color">
	<?php
		echo(
			'<a href="' . esc_url( __( 'https://instagram.com', 'vivre' ) ) . '" rel="nofollow">' . esc_html__( 'Instagram', 'vivre' ) . '</a>'
		);
		?>
</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}}} -->
<p class="has-link-color">
	<?php
		echo(
			'<a href="' . esc_url( __( 'https://twitter.com', 'vivre' ) ) . '" rel="nofollow">' . esc_html__( 'Twitter', 'vivre' ) . '</a>'
		);
		?>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

