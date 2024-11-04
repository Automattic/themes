<?php
/**
 * Title: Default footer
 * Slug: kansei/footer
 * Inserter: no
 */
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"3rem"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:3rem">
	<!-- wp:columns -->
	<div class="wp-block-columns">
		<!-- wp:column {"width":"40%"} -->
		<div class="wp-block-column" style="flex-basis:40%"></div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"60%"} -->
		<div class="wp-block-column" style="flex-basis:60%">
			<!-- wp:paragraph {"align":"right"} -->
			<p class="has-text-align-right"><?php
			/* Translators: WordPress link. */
			$wordpress_link = '<a href="' . esc_url( __( 'https://wordpress.org', 'kansei' ) ) . '" rel="nofollow">WordPress</a>';
			echo sprintf(
				esc_html__( 'Designed with %1$s', 'kansei' ),
				$wordpress_link
			);?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
