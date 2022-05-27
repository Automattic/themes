<?php
/**
 * Title: Default footer block pattern
 * Slug: cultivate/footer-default
 * Categories: footer
 * Block Types: core/template-part/footer
 */
?>
<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"inherit":true}} -->
<div class="wp-block-group">

	<!-- wp:group {"align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"spacing":{"padding":{"top":"4vw","bottom":"4vw"}}},"backgroundColor":"primary","textColor":"background","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
	<div class="wp-block-group alignfull has-background-color has-primary-background-color has-text-color has-background has-link-color" style="padding-top:4vw;padding-bottom:4vw">

		<!-- wp:paragraph {"align":"center"} -->
		<p class="has-text-align-center">
			<?php
				echo sprintf( '%1$s<br>%2$s',
				esc_html( 'Lindfield East Community Garden', 'cultivate' ),
				esc_html( '1234 Lindfield, NSW', 'cultivate' )
			);
			?>
		</p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"align":"center"} -->
		<p class="has-text-align-center">
			<?php
				echo sprintf( '%1$s<br>%2$s',
				esc_html( '123-456-789', 'cultivate' ),
				esc_html( 'hello@example.com', 'cultivate' )
			);
			?>
		</p>
		<!-- /wp:paragraph -->

	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"2vw","bottom":"2vw"}},"border":{"width":"2px"}},"borderColor":"primary"} -->
	<div class="wp-block-group alignfull has-border-color has-primary-border-color" style="border-width:2px;padding-top:2vw;padding-bottom:2vw"><!-- wp:paragraph {"align":"center","fontSize":"normal"} -->

		<p class="has-text-align-center has-normal-font-size">
			<?php
				printf(
					/* Translators: WordPress link. */
					esc_html__( 'Proudly powered by %s', 'cultivate' ),
					'<a href="' . esc_url( __( 'https://wordpress.org', 'cultivate' ) ) . '" rel="nofollow">WordPress</a>'
				)
			?>
		</p>
		<!-- /wp:paragraph -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->