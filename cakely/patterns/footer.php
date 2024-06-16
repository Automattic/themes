<?php
/**
 * Title: Default Footer
 * Slug: cakely/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 * Viewport width: 1488
 */

declare( strict_types = 1 );
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","right":"var:preset|spacing|60","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60"}}},"backgroundColor":"accent-one","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-accent-one-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60)">
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60","left":"10.5%"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":"57.5%","style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
		<div class="wp-block-column" style="flex-basis:57.5%">
			<!-- wp:site-title {"level":0,"style":{"layout":{"selfStretch":"fill","flexSize":null},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast"} /-->

			<!-- wp:paragraph {"fontSize":"large"} -->
			<p class="has-large-font-size"><?php echo esc_html__( 'Delivering joy in Scaynes Hill with every slice. Our service offers a range of scrumptious cakes and treats, perfect for any occasion. Quick, reliable, and utterly delicious.', 'cakely' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"32%"} -->
		<div class="wp-block-column" style="flex-basis:32%">
			<!-- wp:columns -->
			<div class="wp-block-columns">
				<!-- wp:column {"style":{"spacing":{"blockGap":"0px"}}} -->
				<div class="wp-block-column">
					<!-- wp:paragraph -->
					<p><?php echo wp_kses_post( __( '123 High Street,<br>Scaynes Hill,<br>Haywards Heath<br>CB12 3PJ', 'cakely' ) ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph -->
					<p><a href="tel:0123456789"><?php echo esc_html__( '(012)345-6789', 'cakely' ); ?></a></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph -->
					<p><a href="mailto:hello@example.com" target="_blank" rel="noreferrer noopener"><?php echo esc_html__( 'hello@example.com', 'cakely' ); ?></a></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->

				<!-- wp:column {"style":{"spacing":{"blockGap":"0px"}}} -->
				<div class="wp-block-column">
					<!-- wp:paragraph -->
					<p><a href="#"><?php echo esc_html__( 'Facebook', 'cakely' ); ?></a></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph -->
					<p><a href="#"><?php echo esc_html__( 'Instagram', 'cakely' ); ?></a></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph -->
					<p><a href="#"><?php echo esc_html__( 'TikTok', 'cakely' ); ?></a></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph -->
					<p><a href="#"><?php echo esc_html__( 'About', 'cakely' ); ?></a></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph -->
					<p><a href="#"><?php echo esc_html__( 'Contact', 'cakely' ); ?></a></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph -->
					<p><a href="#"><?php echo esc_html__( 'Privacy and Cookies', 'cakely' ); ?></a></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->

<!-- wp:cover {"url":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/footer.jpg","dimRatio":0,"minHeight":40,"minHeightUnit":"vh","contentPosition":"bottom center","isDark":false,"align":"full","style":{"spacing":{"padding":{"bottom":"0px","right":"var:preset|spacing|60","left":"var:preset|spacing|60"},"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull is-light has-custom-content-position is-position-bottom-center" style="margin-top:0px;margin-bottom:0px;padding-right:var(--wp--preset--spacing--60);padding-bottom:0px;padding-left:var(--wp--preset--spacing--60);min-height:40vh">
	<span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/footer.jpg" data-object-fit="cover"/>
	<div class="wp-block-cover__inner-container">
		<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"primary","textColor":"base","layout":{"type":"default"}} -->
			<div class="wp-block-group alignwide has-base-color has-primary-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--40)">
				<!-- wp:paragraph {"lock":{"move":false,"remove":true},"className":"has-small-font-size","fontSize":"small"} -->
				<p class="has-small-font-size"><?php
					$wordpress_link = '<a href="' . esc_url( __( 'https://wordpress.org', 'cakely' ) ) . '" rel="nofollow">WordPress</a>';
					echo sprintf(
						/* Translators: WordPress link. */
						esc_html__( 'Designed with %1$s', 'cakely' ),
						$wordpress_link
					);?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
</div>
<!-- /wp:cover -->
