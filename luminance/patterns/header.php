<?php
/**
 * Title: Default header
 * Slug: luminance/header
 * Categories: header
 * Block Types: core/template-part/header
 */

declare( strict_types = 1 );
?>

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"border":{"width":"1px"}},"borderColor":"contrast","backgroundColor":"base","layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap"}} -->
<div class="wp-block-group has-border-color has-contrast-border-color has-base-background-color has-background" style="border-width:1px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--50)">
	<!-- wp:site-logo /-->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"},"style":{"layout":{"selfStretch":"fit","flexSize":null}}} -->
	<div class="wp-block-buttons">
		<!-- wp:button {"className":"is-style-outline"} -->
		<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button"><?php echo esc_html__( 'About', 'luminance' ); ?></a></div>
		<!-- /wp:button -->

		<!-- wp:button {"style":{"border":{"width":"1px"}},"borderColor":"contrast","className":"is-style-outline"} -->
		<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-border-color has-contrast-border-color wp-element-button" style="border-width:1px"><?php echo esc_html__( 'Contact', 'luminance' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
