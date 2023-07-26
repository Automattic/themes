<?php
/**
 * Title: Default footer
 * Slug: snd/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 */
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|80","bottom":"2.625rem"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--80);margin-bottom:2.625rem">
	<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"secondary","fontSize":"small"} -->
	<p class="has-secondary-color has-text-color has-link-color has-small-font-size" style="line-height:1.5"><?php
			/* Translators: WordPress link. */
			$wordpress_link = '<a href="' . esc_url( __( 'https://wordpress.org', 'snd' ) ) . '" rel="nofollow">WordPress</a>';
			echo sprintf(
				esc_html__( 'Designed with %1$s', 'snd' ),
				$wordpress_link
			);
		?></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
