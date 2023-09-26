<?php
/**
 * Title: Default header
 * Slug: peirao/header
 * Categories: header
 * Block Types: core/template-part/header
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
		<div class="wp-block-group">
			<!-- wp:site-title {"level":0} /-->

			<!-- wp:site-tagline {"textAlign":"center","style":{"typography":{"lineHeight":"1.5","letterSpacing":"0.212em"},"layout":{"selfStretch":"fill","flexSize":null}}} /-->
		</div>
		<!-- /wp:group -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"},"style":{"layout":{"selfStretch":"fit","flexSize":null}}} -->
		<div class="wp-block-buttons">
			<!-- wp:button {"className":"is-style-fill"} -->
			<div class="wp-block-button is-style-fill">
				<a class="wp-block-button__link wp-element-button" href="/#menu"><?php echo esc_html__( 'View Menu', 'peirao' ); ?></a>
			</div>
			<!-- /wp:button -->

			<!-- wp:button {"className":"is-style-fill"} -->
			<div class="wp-block-button is-style-fill">
				<a class="wp-block-button__link wp-element-button"><?php echo esc_html__( 'Make a Reservation', 'peirao' ); ?></a>
			</div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
