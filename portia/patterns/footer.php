<?php
/**
 * Title: Footer
 * Slug: portia/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 * Viewport width: 1824
 */

declare( strict_types = 1 );
?>

<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|theme-2"},":hover":{"color":{"text":"var:preset|color|theme-1"}}}},"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"theme-5","textColor":"theme-2","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-theme-2-color has-theme-5-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)">
	<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:columns -->
		<div class="wp-block-columns">
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"style":{"dimensions":{"minHeight":"100%"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} -->
				<div class="wp-block-group" style="min-height:100%">
					<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
					<div class="wp-block-group">
						<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"840px","justifyContent":"left"}} -->
						<div class="wp-block-group">
							<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.1em","fontStyle":"normal","fontWeight":"600"}},"fontSize":"small"} -->
							<p class="has-small-font-size" style="font-style:normal;font-weight:600;letter-spacing:0.1em;text-transform:uppercase"><?php echo esc_html__( 'Contact', 'portia' ); ?></p>
							<!-- /wp:paragraph -->

							<!-- wp:site-title {"level":0,"style":{"typography":{"textTransform":"none","fontStyle":"normal","fontWeight":"400","letterSpacing":"0px"}},"fontSize":"x-large"} /-->
						</div>
						<!-- /wp:group -->

						<!-- wp:group {"layout":{"type":"constrained","justifyContent":"left","contentSize":"396px"}} -->
						<div class="wp-block-group">
							<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
							<div class="wp-block-group">
								<!-- wp:paragraph {"fontSize":"large"} -->
								<p class="has-large-font-size"><a href="https://www.google.com/maps/place/Chicago,+IL,+USA/@41.8337329,-87.7319639,11z/data=!3m1!4b1!4m6!3m5!1s0x880e2c3cd0f4cbed:0xafe0a6ad09c0c000!8m2!3d41.8781136!4d-87.6297982!16zL20vMDFfZDQ?entry=ttu" rel="nofollow"><?php echo esc_html__( '742 Evergreen Terrace, Suite 200, Chicago, IL 60642, USA', 'portia' ); ?></a></p>
								<!-- /wp:paragraph -->

								<!-- wp:paragraph {"fontSize":"large"} -->
								<p class="has-large-font-size"><?php
									$tel_link = '<a href="tel:0123456789" rel="nofollow">(012) 345-6789</a>';
									echo sprintf(
										esc_html__( 'Direct Line %1$s', 'portia' ),
										$tel_link
								);?></p><!-- /wp:paragraph -->

								<!-- wp:paragraph {"fontSize":"large"} -->
								<p class="has-large-font-size"><?php echo esc_html__( 'Available 24/7', 'portia' ); ?></p>
								<!-- /wp:paragraph -->
							</div>
							<!-- /wp:group -->

							<!-- wp:paragraph -->
							<p><?php echo esc_html__( 'For expert legal guidance and strategic solutions tailored to your needs, trust our firm. With a focus on family law, estate planning, property disputes, and litigation, we ensure clarity and confidence at every step. Contact us for a consultation and experience peace of mind with a trusted ally by your side.', 'portia' ); ?></p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:group -->

					<!-- wp:social-links {"iconColor":"theme-2","iconColorValue":"#F2EADE","openInNewTab":true,"size":"has-small-icon-size","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"className":"is-style-logos-only"} -->
					<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only">
						<!-- wp:social-link {"url":"https://facebook.com/","service":"facebook"} /-->

						<!-- wp:social-link {"url":"https://twitter.com/","service":"x"} /-->

						<!-- wp:social-link {"url":"https://www.linkedin.com/","service":"linkedin"} /-->

						<!-- wp:social-link {"url":"https://yelp.com/","service":"yelp"} /-->
					</ul>
					<!-- /wp:social-links -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:jetpack/contact-form -->
				<div class="wp-block-jetpack-contact-form">
					<!-- wp:jetpack/field-name {"label":"First Name","required":true,"requiredText":"(required)","width":50,"inputColor":"#0C203B","labelColor":"#F2EADE","fieldBackgroundColor":"#ffffff","borderColor":"#949494"} /-->

					<!-- wp:jetpack/field-name {"label":"Last Name","required":true,"requiredText":"(required)","width":50,"inputColor":"#0C203B","labelColor":"#F2EADE","fieldBackgroundColor":"#ffffff","borderColor":"#949494"} /-->

					<!-- wp:jetpack/field-email {"required":true,"requiredText":"(required)","width":50,"inputColor":"#0C203B","labelColor":"#F2EADE","fieldBackgroundColor":"#ffffff","borderColor":"#949494"} /-->

					<!-- wp:jetpack/field-telephone {"required":true,"requiredText":"(required)","width":50,"inputColor":"#0C203B","labelColor":"#F2EADE","fieldBackgroundColor":"#ffffff","borderColor":"#949494"} /-->

					<!-- wp:jetpack/field-textarea {"label":"Message","requiredText":"(required)","inputColor":"#0C203B","labelColor":"#F2EADE","fieldBackgroundColor":"#ffffff","borderColor":"#949494"} /-->

					<!-- wp:jetpack/button {"element":"button","text":"Contact Us","textColor":"theme-1","backgroundColor":"theme-4","borderRadius":0,"lock":{"remove":true}} /-->
				</div>
				<!-- /wp:jetpack/contact-form -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->

		<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
		<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--50)">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"fontSize":"small"} -->
				<p class="has-small-font-size"><a href="#"><?php echo esc_html__( 'Privacy Policy', 'portia' ); ?></a></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"fontSize":"small"} -->
				<p class="has-small-font-size"><a href="#"><?php echo esc_html__( 'Terms & Conditions', 'portia' ); ?></a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:paragraph {"align":"right","lock":{"move":false,"remove":false},"className":"has-small-font-size","fontSize":"small"} -->
			<p class="has-text-align-right has-small-font-size"><?php
				$wordpress_link = '<a href="' . esc_url( __( 'https://wordpress.org', 'portia' ) ) . '" rel="nofollow">WordPress</a>';
				echo sprintf(
					/* Translators: WordPress link. */
					esc_html__( 'Designed with %1$s', 'portia' ),
					$wordpress_link
				);?>
			</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:cover {"url":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/abraham-lincoln.png","hasParallax":true,"dimRatio":0,"minHeight":100,"minHeightUnit":"vh","contentPosition":"center center","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"color":{"duotone":["rgb(136, 99, 67)","rgb(242, 234, 222)"]},"elements":{"link":{"color":{"text":"var:preset|color|theme-5"}}}},"textColor":"theme-5","layout":{"type":"constrained"},"fontSize":"large"} -->
<div class="wp-block-cover has-parallax has-theme-5-color has-text-color has-link-color has-large-font-size" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40);min-height:100vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span>
	<div role="img" class="wp-block-cover__image-background has-parallax" style="background-position:50% 50%;background-image:url(<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/abraham-lincoln.png)"></div><div class="wp-block-cover__inner-container">
		<!-- wp:columns {"align":"wide"} -->
		<div class="wp-block-columns alignwide">
			<!-- wp:column -->
			<div class="wp-block-column"></div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"center","layout":{"type":"constrained"}} -->
			<div class="wp-block-column is-vertically-aligned-center">
				<!-- wp:quote {"style":{"elements":{"link":{"color":{"text":"var:preset|color|theme-4"}}}},"textColor":"theme-4","fontSize":"medium"} -->
				<blockquote class="wp-block-quote has-theme-4-color has-text-color has-link-color has-medium-font-size">
					<!-- wp:paragraph {"fontSize":"large"} -->
					<p class="has-large-font-size"><?php echo esc_html__( 'The people’s will, constitutionally expressed, is the ultimate law for all.', 'portia' ); ?></p>
					<!-- /wp:paragraph --><cite>—<?php echo esc_html__( 'Abraham Lincoln', 'portia' ); ?></cite>
				</blockquote>
				<!-- /wp:quote -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
</div>
<!-- /wp:cover -->
