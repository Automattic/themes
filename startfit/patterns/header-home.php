<?php
/**
 * Title: Header Home
 * Slug: startfit/header-home
 * Categories: featured, header
 * Block Types: core/template-part/header
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/barbell-human-leg-physical-fitness-exercise-equipment-strength-training-bodybuilding-1564101-pxhere.com.jpg","dimRatio":40,"customOverlayColor":"#101323","focalPoint":{"x":0.5,"y":0.28000000000000003},"minHeight":70,"minHeightUnit":"vh","style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover" style="margin-top:0px;margin-bottom:0px;padding-top:0;padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50);min-height:70vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-40 has-background-dim" style="background-color:#101323"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/barbell-human-leg-physical-fitness-exercise-equipment-strength-training-bodybuilding-1564101-pxhere.com.jpg" style="object-position:50% 28%" data-object-fit="cover" data-object-position="50% 28%"/>
	<div class="wp-block-cover__inner-container">
		<!-- wp:group {"style":{"dimensions":{"minHeight":"70vh"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} -->
		<div class="wp-block-group" style="min-height:70vh">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"0px","bottom":"var:preset|spacing|40","left":"0px"},"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
			<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px;padding-top:var(--wp--preset--spacing--40);padding-right:0px;padding-bottom:var(--wp--preset--spacing--40);padding-left:0px">
				<!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
				<div class="wp-block-group">
					<!-- wp:site-logo {"shouldSyncIcon":false} /-->

					<!-- wp:site-title /-->
				</div>
				<!-- /wp:group -->

				<!-- wp:navigation {"textColor":"base","overlayBackgroundColor":"contrast","overlayTextColor":"base","layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right","orientation":"horizontal"},"style":{"spacing":{"margin":{"top":"0"},"blockGap":"2rem"}}} /-->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|60","padding":{"right":"0px","left":"0px"}},"dimensions":{"minHeight":""}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group" style="padding-right:0px;padding-left:0px">
				<!-- wp:heading {"textAlign":"center","level":1,"fontSize":"xxxx-large"} -->
				<h1 class="wp-block-heading has-text-align-center has-xxxx-large-font-size"><?php echo wp_kses_post( __( 'Fit today,<br>Stronger tomorrow', 'startfit' ) ); ?></h1>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"align":"center"} -->
				<p class="has-text-align-center"><?php echo esc_html__( 'Unlock your potential and redefine your limits with us. Our trainers tailor workouts to your ability, ensuring you&rsquo;re fit today and undeniably stronger tomorrow.', 'startfit' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
				<div class="wp-block-buttons">
					<!-- wp:button {"backgroundColor":"secondary","textColor":"contrast","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"className":"is-style-fill"} -->
					<div class="wp-block-button is-style-fill">
						<a class="wp-block-button__link has-contrast-color has-secondary-background-color has-text-color has-background has-link-color wp-element-button"><?php echo esc_html__( 'Learn More', 'startfit' ); ?></a>
					</div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->

			<!-- wp:spacer {"height":"0px","style":{"layout":{"flexSize":"29px","selfStretch":"fixed"}}} -->
			<div style="height:0px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->
		</div>
		<!-- /wp:group -->
	</div>
</div>
<!-- /wp:cover -->
