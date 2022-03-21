<?php
/**
 * Title: Image with headline and description
 * Slug: archeo/image-with-headline-description
 * Categories: images
 */
?>

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide">
	<!-- wp:column {"width":"64%"} -->
	<div class="wp-block-column" style="flex-basis:64%">
		<!-- wp:group -->
		<div class="wp-block-group">
			<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/chahk.gif" alt="<?php esc_attr_e( 'Chahk: rain deity', 'archeo' ); ?>"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:group -->
	</div><!-- /wp:column -->

	<!-- wp:column -->
	<div class="wp-block-column">
		<!-- wp:heading {"textAlign":"right","style":{"typography":{"fontSize":"clamp(64px, 6vw, 100px)","lineHeight":"1","textTransform":"uppercase"}}} -->
		<h2 class="has-text-align-right" id="chahk-raindeity" style="font-size:clamp(64px, 6vw, 100px);line-height:1;text-transform:uppercase"><?php echo wp_kses_post( __( 'Chahk:<br>Rain<br>deity', 'archeo' ) ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:columns -->
		<div class="wp-block-columns">
			<!-- wp:column {"width":"26%"} -->
			<div class="wp-block-column" style="flex-basis:26%"></div>
			<!-- /wp:column -->
			<!-- wp:column {"width":""} -->
			<div class="wp-block-column">
				<!-- wp:paragraph {"align":"right","fontSize":"small"} -->
				<p class="has-text-align-right has-small-font-size"><?php esc_html_e( 'Chaahk is shown here clutching his axe, ready to strike rain and thunder from the clouds. This sculpture was likely created in the Puuc hills of Yucatan and Campeche.', 'archeo' ); ?></p>
				<!-- /wp:paragraph -->
			</div><!-- /wp:column -->
		</div><!-- /wp:columns -->
	</div><!-- /wp:column -->
</div><!-- /wp:columns -->
