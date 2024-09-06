<?php
/**
 * Title: Footer Dark
 * Slug: fontaine/footer-dark
 * Categories: footer
 * Block Types: core/template-part/footer
 * Viewport width: 1600
 */

declare( strict_types = 1 );
?>

<!-- wp:group {"metadata":{"categories":["footer"]},"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|40"},"elements":{"link":{"color":{"text":"var:preset|color|theme-1"},":hover":{"color":{"text":"var:preset|color|theme-4"}}}}},"backgroundColor":"theme-5","textColor":"theme-1","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"},"fontSize":"small"} -->
<div class="wp-block-group has-theme-1-color has-theme-5-background-color has-text-color has-background has-link-color has-small-font-size" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
	<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group">
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph -->
			<p><a href="#"><?php echo esc_html__( 'Mail', 'fontaine' ); ?></a></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph -->
			<p><a href="#"><?php echo esc_html__( 'Instagram', 'fontaine' ); ?></a></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph -->
			<p><a href="#"><?php echo esc_html__( 'Behance', 'fontaine' ); ?></a></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph -->
			<p><a href="#"><?php echo esc_html__( 'LinkedIn', 'fontaine' ); ?></a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"right"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph -->
			<p><a href="#"><?php echo esc_html__( 'Privacy Policy', 'fontaine' ); ?></a></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph -->
			<p><a href="#"><?php echo esc_html__( 'Terms & Conditions', 'fontaine' ); ?></a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group">
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group">
		</div>
		<!-- /wp:group -->

		<!-- wp:paragraph {"align":"right","lock":{"move":false,"remove":true}} -->
		<p class="has-text-align-right"><?php
			/* Translators: WordPress link. */
			$wordpress_link = '<a href="' . esc_url( __( 'https://wordpress.org', 'fontaine' ) ) . '" rel="nofollow">WordPress</a>';
			echo sprintf(
				esc_html__( 'Designed with %1$s', 'fontaine' ),
				$wordpress_link
			);
		?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
