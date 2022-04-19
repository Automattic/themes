<?php
/**
 * Title: Default footer
 * Slug: stewart/footer-default
 * Categories: footer
 * Block Types: core/template-part/footer
 */
?>

<!-- wp:spacer {"height":60} -->
<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group -->
<div class="wp-block-group">
	<!-- wp:paragraph {"align":"center","fontSize":"tiny"} -->
	<p class="has-text-align-center has-small-font-size">
		<?php
			printf(
				/* Translators: WordPress link. */
				esc_html__( 'Proudly powered by %s', 'stewart' ),
				'<a href="' . esc_url( __( 'https://wordpress.org', 'stewart' ) ) . '" rel="nofollow">WordPress</a>'
			)
			?>
	</p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:spacer {"height":60} -->
<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
