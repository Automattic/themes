<?php
/**
 * Title: Footer for Post
 * Slug: beep/footer-post
 * Inserter: no
 */

declare( strict_types = 1 );
?>

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","right":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|80"}},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","layout":{"type":"default"}} -->
<div class="wp-block-group has-secondary-color has-text-color has-link-color" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--80)">
	<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|inactive"}}}},"textColor":"inactive"} -->
		<p class="has-inactive-color has-text-color has-link-color"><?php echo esc_html__( 'code_is_poetry', 'beep' ); ?>( '</p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph -->
		<p><?php
		/* Translators: WordPress link. */
		$wordpress_link = '<a href="' . esc_url( __( 'https://wordpress.org', 'beep' ) ) . '" rel="nofollow">WordPress</a>';
		echo sprintf(
			esc_html__( 'Designed with %1$s', 'beep' ),
			$wordpress_link
		);?></p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|inactive"}}}},"textColor":"inactive"} -->
		<p class="has-inactive-color has-text-color has-link-color">' );</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->


