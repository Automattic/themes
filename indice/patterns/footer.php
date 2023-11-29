<?php
/**
 * Title: Footer
 * Slug: indice/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 */
?>

<!-- wp:columns -->
<div class="wp-block-columns">
	<!-- wp:column {"width":"18%"} -->
	<div class="wp-block-column" style="flex-basis:18%">
		<!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"left":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
		<div class="wp-block-group" style="padding-left:var(--wp--preset--spacing--60)">
			<!-- wp:paragraph -->
			<p><?php echo esc_html__( 'Indice –––––––––', 'indice' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph -->
			<p><?php
				/* Translators: WordPress link. */
				$wordpress_link = '<a href="' . esc_url( __( 'https://wordpress.org', 'indice' ) ) . '" rel="nofollow">WordPress</a>';
				echo sprintf(
					esc_html__( 'Designed with %1$s', 'indice' ),
					$wordpress_link
				);
			?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:column -->

	<!-- wp:column {"width":"50%"} -->
	<div class="wp-block-column" style="flex-basis:50%"></div>
	<!-- /wp:column -->

	<!-- wp:column {"width":"18%"} -->
	<div class="wp-block-column" style="flex-basis:18%"></div>
	<!-- /wp:column -->
</div>
<!-- /wp:columns -->
