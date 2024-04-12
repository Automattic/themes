<?php
/**
 * Title: Site Notice
 * Slug: kiosko/site-notice
 * Categories: text
 */

declare( strict_types = 1 );
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","right":"var:preset|spacing|50","left":"var:preset|spacing|50"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"primary","textColor":"base","layout":{"type":"default"}} -->
<div class="wp-block-group has-base-color has-primary-background-color has-text-color has-background has-link-color" style="margin-top:0px;margin-bottom:0px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--50)">
	<!-- wp:paragraph {"align":"center","fontSize":"x-small"} -->
	<p class="has-text-align-center has-x-small-font-size"><?php echo esc_html__('Free shipping on all orders over $50 ・ Use cods15 at checkout to get 15% off', 'kiosko' ); ?></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
