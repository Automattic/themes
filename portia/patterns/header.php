<?php
/**
 * Title: header
 * Slug: portia/header
 * Categories: header
 * Block Types: core/template-part/header
 * Viewport width: 1824
 */

declare( strict_types = 1 );
?>

<!-- wp:group {"align":"wide","style":{"elements":{"link":{"color":{"text":"var:preset|color|theme-2"},":hover":{"color":{"text":"var:preset|color|theme-1"}}}},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"position":{"type":""}},"backgroundColor":"theme-5","textColor":"theme-2","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-theme-2-color has-theme-5-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--50)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"left"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size">♦</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph -->
			<p><a href="https://www.google.com/maps/place/Chicago,+IL,+USA/@41.8337329,-87.7319639,11z/data=!3m1!4b1!4m6!3m5!1s0x880e2c3cd0f4cbed:0xafe0a6ad09c0c000!8m2!3d41.8781136!4d-87.6297982!16zL20vMDFfZDQ?entry=ttu" data-type="link" data-id="https://www.google.com/maps/place/Chicago,+IL,+USA/@41.8337329,-87.7319639,11z/data=!3m1!4b1!4m6!3m5!1s0x880e2c3cd0f4cbed:0xafe0a6ad09c0c000!8m2!3d41.8781136!4d-87.6297982!16zL20vMDFfZDQ?entry=ttu" rel="nofollow"><?php echo esc_html__( '742 Evergreen Terrace, Suite 200,Chicago, IL 60642, USA', 'portia' ); ?></a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size">♦</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph -->
			<p><?php
				$tel_link = '<a href="tel:0123456789" rel="nofollow">(012) 345-6789</a>';
				echo sprintf(
					esc_html__( 'Direct Line %1$s', 'portia' ),
					$tel_link
				);?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size">♦</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph -->
			<p><?php echo esc_html__( 'Available 24/7', 'portia' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|theme-5"}}},"border":{"bottom":{"color":"var:preset|color|theme-6","width":"1px"},"top":[],"right":[],"left":[]}},"backgroundColor":"theme-2","textColor":"theme-5","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-theme-5-color has-theme-2-background-color has-text-color has-background has-link-color" style="border-bottom-color:var(--wp--preset--color--theme-6);border-bottom-width:1px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--50)">
	<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:site-title {"level":0,"style":{"layout":{"selfStretch":"fit","flexSize":null}}} /-->

		<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","flexWrap":"wrap"}} /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
