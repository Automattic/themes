<?php
/**
 * Title: Default footer
 * Slug: peirao/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:site-title {"level":0,"align":"wide"} /-->

	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph -->
			<p><?php echo esc_html__( 'We proudly stand today as a fifth-generation family-run seafood canteen in Ourense.', 'peirao' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:columns -->
			<div class="wp-block-columns">
				<!-- wp:column {"width":"65%"} -->
				<div class="wp-block-column" style="flex-basis:65%">
					<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
					<div class="wp-block-group">
						<!-- wp:paragraph -->
						<p><?php echo esc_html__( 'Rúa Ervedelo, 212, 37820 Ourense', 'peirao' ); ?></p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph -->
						<p>01234567890 &middot; <a href="mailto:info@example.com" target="_blank" rel="noreferrer noopener">info@example.com</a></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:column -->

				<!-- wp:column {"width":"35%"} -->
				<div class="wp-block-column" style="flex-basis:35%">
					<!-- wp:social-links {"iconColor":"base","iconColorValue":"#064626","iconBackgroundColor":"contrast","iconBackgroundColorValue":"#f1edda","size":"has-small-icon-size","style":{"spacing":{"margin":{"top":"var:preset|spacing|30"},"blockGap":{"left":"var:preset|spacing|40"}}}} -->
					<ul class="wp-block-social-links has-small-icon-size has-icon-color has-icon-background-color" style="margin-top:var(--wp--preset--spacing--30)">
						<!-- wp:social-link {"url":"https://facebook.com/","service":"facebook"} /-->

						<!-- wp:social-link {"url":"https://instagram.com/","service":"instagram"} /-->

						<!-- wp:social-link {"url":"https://tiktok.com/","service":"tiktok"} /-->

						<!-- wp:social-link {"url":"https://twitter.com/","service":"twitter"} /-->

						<!-- wp:social-link {"url":"https://tumblr.com/","service":"tumblr"} /-->
					</ul>
					<!-- /wp:social-links -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:paragraph {"fontSize":"x-small"} -->
		<p class="has-x-small-font-size"><?php
		/* Translators: WordPress link. */
		$wordpress_link = '<a href="' . esc_url( __( 'https://wordpress.org', 'peirao' ) ) . '" rel="nofollow">WordPress</a>';
		echo sprintf(
			esc_html__( 'Designed with %1$s', 'peirao' ),
			$wordpress_link
		);?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
