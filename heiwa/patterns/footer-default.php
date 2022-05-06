<?php
/**
 * Title: Default footer block pattern
 * Slug: heiwa/footer-default
 * Categories: footer
 * Block Types: core/template-part/footer
 */
?>

<!-- wp:group {"style":{"spacing":{"blockGap":{"top":"0px","left":"0px"},"margin":{"top":"0px","bottom":"0px"}}},"layout":{"inherit":true}} -->
<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px">

	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"7vw","bottom":"7vw"}},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"backgroundColor":"foreground","textColor":"background"} -->
	<div class="wp-block-group alignfull has-background-color has-foreground-background-color has-text-color has-background has-link-color" style="padding-top:7vw;padding-bottom:7vw">

		<!-- wp:columns -->
		<div class="wp-block-columns">

			<!-- wp:column {"width":"32%"} -->
			<div class="wp-block-column" style="flex-basis:32%">

				<!-- wp:group {"style":{"spacing":{"blockGap":{"top":"0px","left":"0px"}}}} -->
				<div class="wp-block-group">

					<!-- wp:site-title {"style":{"typography":{"fontSize":"1.375rem","lineHeight":"1.272"}}} /-->

					<!-- wp:paragraph -->
						<p>
							<?php
								echo esc_html__( 'A design and development agency. We create digital products that make people’s lives better and healthier.', 'heiwa' );
							?>
						</p>
					<!-- /wp:paragraph -->

				</div>
				<!-- /wp:group -->

			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"16%"} -->
			<div class="wp-block-column" style="flex-basis:16%"></div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"16%"} -->
			<div class="wp-block-column" style="flex-basis:16%">

				<!-- wp:paragraph -->
				<p>
					<?php
						echo sprintf( '%1$s<br>%2$s<br>%3$s',
							esc_html( '123 Example St,', 'heiwa' ),
							esc_html( 'San Francisco,', 'heiwa' ),
							esc_html( 'CA 12345-6789', 'heiwa' )
						);
					?>
				</p>
				<!-- /wp:paragraph -->

			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"16%"} -->
			<div class="wp-block-column" style="flex-basis:16%">

				<!-- wp:group {"style":{"spacing":{"blockGap":{"top":"0px","left":"0px"}}}} -->
				<div class="wp-block-group">

					<!-- wp:paragraph -->
					<p>
						<a href="#">
							<?php echo esc_html__( 'example@example.com', 'heiwa' ); ?>
						</a>
					</p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph -->
					<p>
						<?php echo esc_html__( '123-456-7890', 'heiwa' ); ?>
					</p>
					<!-- /wp:paragraph -->

				</div>
				<!-- /wp:group -->

			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"20%"} -->
			<div class="wp-block-column" style="flex-basis:20%">

				<!-- wp:group {"style":{"spacing":{"blockGap":{"top":"0px","left":"0px"}}}} -->
				<div class="wp-block-group">

					<!-- wp:paragraph -->
					<p>
						<a href="#">
							<?php echo esc_html__( 'Facebook', 'heiwa' ); ?>
						</a>
					</p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph -->
					<p>
						<a href="#">
							<?php echo esc_html__( 'Twitter', 'heiwa' ); ?>
						</a>
					</p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph -->
					<p>
						<a href="#">
							<?php echo esc_html__( 'Instagram', 'heiwa' ); ?>
						</a>
					</p>
					<!-- /wp:paragraph -->

				</div>
				<!-- /wp:group -->

			</div>
			<!-- /wp:column -->

		</div>
		<!-- /wp:columns -->

	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"backgroundColor":"foreground","textColor":"background","layout":{"inherit":false}} -->
	<div class="wp-block-group alignfull has-background-color has-foreground-background-color has-text-color has-background has-link-color">

		<!-- wp:paragraph {"align":"left"} -->
		<p class="has-text-align-left">
			<?php
				printf(
					/* Translators: WordPress link. */
					esc_html__( 'Proudly powered by %s', 'heiwa' ),
					'<a href="' . esc_url( __( 'https://wordpress.org', 'heiwa' ) ) . '" rel="nofollow">WordPress</a>'
				);
			?>
		</p>
		<!-- /wp:paragraph -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
