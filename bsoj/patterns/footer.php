<?php
/**
 * Title: Default footer
 * Slug: bsoj/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 */
?>

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
	<!-- wp:columns {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80"}}}} -->
	<div class="wp-block-columns alignwide" style="padding-top:var(--wp--preset--spacing--80)">
		<!-- wp:column {"width":"20%"} -->
		<div class="wp-block-column" style="flex-basis:20%"></div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"80%"} -->
		<div class="wp-block-column" style="flex-basis:80%">
			<!-- wp:paragraph -->
			<p>
			<?php

				$wordpress_link = '<a href="' . esc_url( __( 'https://wordpress.org', 'bsoj' ) ) . '" rel="nofollow">WordPress</a>';
				echo sprintf(
					/* Translators: WordPress link. */
					esc_html__( 'Designed with %1$s', 'bsoj' ),
					$wordpress_link
				);
				?>
			</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
