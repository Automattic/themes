<?php
/**
 * Title: Default Footer
 * Slug: kentwood/footer
 * Categories: featured, footer
 * Block Types: core/template-part/footer
 */

declare( strict_types = 1 );
?>

<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"border":{"bottom":{"color":"var:preset|color|base","width":"1px"},"top":[],"right":[],"left":[]}},"backgroundColor":"primary","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-color has-primary-background-color has-text-color has-background has-link-color" style="border-bottom-color:var(--wp--preset--color--base);border-bottom-width:1px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
	<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:paragraph {"align":"left","fontSize":"large"} -->
		<p class="has-text-align-left has-large-font-size"><?php echo esc_html__( 'We look forward to welcoming you to Kentwood.', 'kentwood' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button {"textColor":"base","style":{"border":{"width":"2px"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"borderColor":"base","className":"is-style-outline"} -->
			<div class="wp-block-button is-style-outline">
				<a class="wp-block-button__link has-base-color has-text-color has-link-color has-border-color has-base-border-color wp-element-button" style="border-width:2px">
					<?php echo esc_html__( 'Visit', 'kentwood' ); ?>
				</a>
			</div>
			<!-- /wp:button -->

			<!-- wp:button {"textColor":"base","style":{"border":{"width":"2px"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"borderColor":"base","className":"is-style-outline"} -->
			<div class="wp-block-button is-style-outline">
				<a class="wp-block-button__link has-base-color has-text-color has-link-color has-border-color has-base-border-color wp-element-button" style="border-width:2px"><?php echo esc_html__( 'Enquire', 'kentwood' ); ?>
				</a>
			</div>
			<!-- /wp:button -->

			<!-- wp:button {"textColor":"base","style":{"border":{"width":"2px"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"borderColor":"base","className":"is-style-outline"} -->
			<div class="wp-block-button is-style-outline">
				<a class="wp-block-button__link has-base-color has-text-color has-link-color has-border-color has-base-border-color wp-element-button" style="border-width:2px"><?php echo esc_html__( 'Apply', 'kentwood' ); ?>
				</a>
			</div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"primary","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-color has-primary-background-color has-text-color has-background has-link-color" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:site-logo {"width":80} /-->

		<!-- wp:site-title {"level":0,"align":"wide","fontSize":"large"} /-->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph -->
				<p><?php echo esc_html__( 'Greenwood Lane, Hawthorn Hill, Kent, CT12 4YZ', 'kentwood' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph -->
				<p>01234567890</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"textColor":"base","style":{"border":{"width":"2px"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"borderColor":"base","className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline">
					<a class="wp-block-button__link has-base-color has-text-color has-link-color has-border-color has-base-border-color wp-element-button" style="border-width:2px">
					<?php echo esc_html__( 'Get Directions', 'kentwood' ); ?>
					</a>
				</div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:columns -->
			<div class="wp-block-columns">
				<!-- wp:column {"width":"33.33%"} -->
				<div class="wp-block-column" style="flex-basis:33.33%">
					<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"},"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
						<!-- wp:navigation-link {"label":"Cookie Policy","url":"#"} /-->
						<!-- wp:navigation-link {"label":"Privacy Policy","url":"#"} /-->
						<!-- wp:navigation-link {"label":"Policies","url":"#"} /-->
					<!-- /wp:navigation -->
				</div>
				<!-- /wp:column -->

				<!-- wp:column {"width":"33.33%"} -->
				<div class="wp-block-column" style="flex-basis:33.33%">
					<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"},"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
						<!-- wp:navigation-link {"label":"Parent Portal","url":"#"} /-->
						<!-- wp:navigation-link {"label":"Pupil Portal","url":"#"} /-->
						<!-- wp:navigation-link {"label":"Stuff Portal","url":"#"} /-->
					<!-- /wp:navigation -->
				</div>
				<!-- /wp:column -->

				<!-- wp:column {"width":"33.33%"} -->
				<div class="wp-block-column" style="flex-basis:33.33%">
					<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"},"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
						<!-- wp:navigation-link {"label":"Term Dates","url":"#"} /-->
						<!-- wp:navigation-link {"label":"School Calendar","url":"#"} /-->
						<!-- wp:navigation-link {"label":"Admissions","url":"#"} /-->
					<!-- /wp:navigation -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:social-links {"iconColor":"base","iconColorValue":"#064626","size":"has-small-icon-size","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}},"className":"is-style-logos-only"} -->
		<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only">
			<!-- wp:social-link {"url":"https://facebook.com/","service":"facebook"} /-->

			<!-- wp:social-link {"url":"https://instagram.com/","service":"instagram"} /-->

			<!-- wp:social-link {"url":"https://tiktok.com/","service":"tiktok"} /-->

			<!-- wp:social-link {"url":"https://tumblr.com/","service":"tumblr"} /-->
		</ul>
		<!-- /wp:social-links -->

		<!-- wp:paragraph {"fontSize":"x-small"} -->
		<p class="has-x-small-font-size">
			<?php
			/* Translators: WordPress link. */
			$wordpress_link = '<a href="' . esc_url( __( 'https://wordpress.org', 'kentwood' ) ) . '" rel="nofollow">WordPress</a>';
			echo sprintf(
				esc_html__( 'Designed with %1$s', 'kentwood' ),
				$wordpress_link
			);?>
		</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
