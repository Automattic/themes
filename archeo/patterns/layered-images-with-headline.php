<?php
/**
 * Title: Layered images with headline
 * Slug: archeo/layered-images-with-headline
 * Categories: featured, images
 */
?>

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/palais-du-cirque.jpg","dimRatio":80,"overlayColor":"background","minHeight":100,"minHeightUnit":"vh","contentPosition":"center center","isDark":false,"align":"full","style":{"spacing":{"padding":{"top":"0px","bottom":"3vw","right":"0px","left":"0px"},"margin":{"top":"0px"}}}} -->
<div class="wp-block-cover alignfull is-light" style="margin-top:0px;padding-top:0px;padding-right:0px;padding-bottom:3vw;padding-left:0px;min-height:100vh"><span aria-hidden="true" class="has-background-background-color has-background-dim-80 wp-block-cover__gradient-background has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php esc_attr_e( 'Photo of Palace of the Circus', 'archeo' ); ?>" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/palais-du-cirque.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
	<!-- wp:group {"layout":{"inherit":"true"}} -->
	<div class="wp-block-group">
		<!-- wp:columns {"verticalAlignment":"top","align":"wide","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0"}}}} -->
		<div class="wp-block-columns alignwide are-vertically-aligned-top" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0">
			<!-- wp:column {"verticalAlignment":"top"} -->
			<div class="wp-block-column is-vertically-aligned-top">
				<!-- wp:spacer {"height":"14vw"} -->
				<div style="height:14vw" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->

				<!-- wp:paragraph {"style":{"typography":{"fontSize":"clamp(64px, 6vw, 100px)","textTransform":"uppercase","fontStyle":"normal","fontWeight":"100","lineHeight":"1"}}} -->
				<p style="font-size:clamp(64px, 6vw, 100px);font-style:normal;font-weight:100;line-height:1;text-transform:uppercase"><?php echo wp_kses_post( __( 'Palace of <br>the Circus at <br>Chichen-Itza, <br><em>bas-relief</em> of <br>tigers', 'archeo' ) ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"top"} -->
			<div class="wp-block-column is-vertically-aligned-top">
				<!-- wp:spacer {"height":"8vw"} -->
				<div style="height:8vw" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->

				<!-- wp:image {"align":"right","sizeSlug":"full","linkDestination":"none"} -->
				<div class="wp-block-image"><figure class="alignright size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/palais-du-cirque.jpg" alt="<?php esc_attr_e( 'Photo of Palace of the Circus', 'archeo' ); ?>"/></figure></div>
				<!-- /wp:image -->
			</div><!-- /wp:column -->
		</div><!-- /wp:columns -->
	</div><!-- /wp:group -->
</div></div><!-- /wp:cover -->
