<?php
/**
 * Title: Default header
 * Slug: nausicaa/header
 * Categories: featured, header
 * Block Types: core/template-part/header
 */
?>

<!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|contrast","width":"8px"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--contrast);border-top-width:8px">
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide" style="margin-top:0px;margin-bottom:0px;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
		<!-- wp:site-title {"style":{"layout":{"selfStretch":"fixed","flexSize":"230px"}}} /-->

		<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:navigation {"align":"wide","layout":{"type":"flex"}} /-->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php echo esc_html_x( 'Work with me', 'This is a call to action button', 'nausicaa' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
