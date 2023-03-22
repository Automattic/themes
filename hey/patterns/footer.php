<?php
/**
 * Title: Default footer
 * Slug: hey/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--70)">
	<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"secondary","fontSize":"small"} -->
	<p class="has-secondary-color has-text-color has-link-color has-small-font-size" style="line-height:1.5"><?php
			/* Translators: WordPress link. */
			$wordpress_link = '<a href="' . esc_url( __( 'https://wordpress.org', 'hey' ) ) . '" rel="nofollow">WordPress</a>';
			echo sprintf(
				esc_html__( 'Designed with %1$s', 'hey' ),
				$wordpress_link
			);
		?></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
