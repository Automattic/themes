<?php
/**
 * Title: Headline over dark image
 * Slug: archeo/headline-over-dark-image
 * Categories: images
 */
?>

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/palais-du-gouverneur.jpg","dimRatio":80,"overlayColor":"foreground","minHeight":100,"minHeightUnit":"vh","contentPosition":"bottom left","align":"full"} -->
<div class="wp-block-cover alignfull has-custom-content-position is-position-bottom-left" style="min-height:100vh"><span aria-hidden="true" class="has-foreground-background-color has-background-dim-80 wp-block-cover__gradient-background has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php esc_attr_e( 'Photo of the Governor\'s Palace at Uxmal', 'archeo' ); ?>" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/palais-du-gouverneur.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"left","placeholder":"Write title…","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"100","lineHeight":"1"}},"textColor":"white","fontSize":"huge"} -->
	<p class="has-text-align-left has-white-color has-text-color has-huge-font-size" style="font-style:normal;font-weight:100;line-height:1;text-transform:uppercase"><?php echo wp_kses_post( __( 'Governor\'s <br>palace at Uxmal, <br>detail of the <br>main gate', 'archeo' ) ); ?></p>
	<!-- /wp:paragraph -->
</div>
</div><!-- /wp:cover -->
