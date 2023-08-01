<?php
/**
 * Title: footer
 * Slug: startfit/footer
 * Categories: featured, footer
 * Block Types: core/template-part/footer
 */
?>
<!-- wp:group {"align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-color has-contrast-background-color has-text-color has-background has-link-color" style="margin-top:0px;margin-bottom:0px;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)">
	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":"66.7%"} -->
		<div class="wp-block-column" style="flex-basis:66.7%">
			<!-- wp:group {"style":{"spacing":{"padding":{"right":"4rem"}},"dimensions":{"minHeight":"100%"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between"}} -->
			<div class="wp-block-group" style="min-height:100%;padding-right:4rem">
				<!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
				<div class="wp-block-group">
					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"top"}} -->
					<div class="wp-block-group">
						<!-- wp:site-title {"fontSize":"large"} /-->

						<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5"}},"fontSize":"small"} -->
						<p class="has-small-font-size" style="line-height:1.5"><?php echo esc_html__( 'Personal fitness training service', 'startfit' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->

					<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5"}},"fontSize":"small"} -->
					<p class="has-small-font-size" style="line-height:1.5"><?php echo esc_html__( 'Unlock your potential and redefine your limits with us. Our trainers tailor workouts to your ability, ensuring you&rsquo;re fit today and undeniably stronger tomorrow. It&rsquo;s our commitment to your health. We deliver effective, efficient workouts paired with nutritional guidance to help you reach your fitness peak.', 'startfit' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:paragraph {"align":"left","style":{"typography":{"lineHeight":"1.5"}},"fontSize":"small"} -->
				<p class="has-text-align-left has-small-font-size" style="line-height:1.5"><?php
					/* Translators: WordPress link. */
					$wordpress_link = '<a href="' . esc_url( __( 'https://wordpress.org', 'startfit' ) ) . '" rel="nofollow">WordPress</a>';
					echo sprintf(
						esc_html__( 'Designed with %1$s', 'startfit' ),
						$wordpress_link
					);?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"33.3%"} -->
		<div class="wp-block-column" style="flex-basis:33.3%">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"bottom":"2.4rem"}}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
			<div class="wp-block-group" style="margin-bottom:2.4rem">
				<!-- wp:heading {"level":4,"fontSize":"large"} -->
				<h4 class="wp-block-heading has-large-font-size"><?php echo esc_html__( 'Get updated', 'startfit' ); ?></h4>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5"}},"fontSize":"small"} -->
				<p class="has-small-font-size" style="line-height:1.5"><?php echo esc_html__( 'Stay ahead in your fitness journey with our exclusive tips and offers.', 'startfit' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:social-links {"iconColor":"contrast","iconColorValue":"#0F0F0F","iconBackgroundColor":"base","iconBackgroundColorValue":"#ffffff","size":"has-small-icon-size","style":{"spacing":{"blockGap":{"top":"1rem","left":"1rem"}}},"className":"is-style-default"} -->
				<ul class="wp-block-social-links has-small-icon-size has-icon-color has-icon-background-color is-style-default">
					<!-- wp:social-link {"url":"https://facebook.com","service":"facebook"} /-->

					<!-- wp:social-link {"url":"https://twitter.com","service":"twitter"} /-->

					<!-- wp:social-link {"url":"https://www.instagram.com","service":"instagram"} /-->

					<!-- wp:social-link {"url":"https://tiktok.com","service":"tiktok"} /-->
				</ul>
				<!-- /wp:social-links -->
			</div>
			<!-- /wp:group -->

			<!-- wp:jetpack/subscriptions {"buttonWidth":"","buttonBackgroundColor":"secondary","textColor":"contrast","fontSize":"0.8rem","customFontSize":"0.8rem","borderRadius":50,"borderWeight":0,"customBorderColor":"#a1a1a1","padding":10,"spacing":0,"successMessage":"Thanks! Please find the email now and click 'Confirm Follow' to start subscribing.","className":"is-style-compact"} /-->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
