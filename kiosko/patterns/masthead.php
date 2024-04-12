<?php
/**
 * Title: Masthead
 * Slug: kiosko/masthead
 * Categories: text
 */

declare( strict_types = 1 );
?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"0","right":"0"}},"border":{"top":{"color":"var:preset|color|contrast","width":"4px"},"bottom":{"color":"var:preset|color|contrast","width":"4px"}},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-primary-color has-text-color has-link-color" style="border-top-color:var(--wp--preset--color--contrast);border-top-width:4px;border-bottom-color:var(--wp--preset--color--contrast);border-bottom-width:4px;padding-top:var(--wp--preset--spacing--70);padding-right:0;padding-bottom:var(--wp--preset--spacing--70);padding-left:0">
	<!-- wp:heading {"level":1,"align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40","top":"0px"}},"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"500"}}} -->
	<h1 class="wp-block-heading alignwide" style="margin-top:0px;margin-bottom:var(--wp--preset--spacing--40);font-style:normal;font-weight:500;text-transform:uppercase"><?php echo esc_html__( 'Prints', 'kiosko' ); ?></h1>
	<!-- /wp:heading -->

	<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
	<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--40)">
		<!-- wp:group {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size"><?php echo esc_html__( 'We take pride in the quality of our products and use only the highest quality materials to ensure that each poster is durable and long-lasting. Browse our collection and discover the perfect geometric poster to add a touch of sophistication to your home or office.', 'kiosko' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
