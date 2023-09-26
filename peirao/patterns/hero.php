<?php
/**
 * Title: Large Heading and two columns of image and text
 * Slug: peirao/hero
 * Categories: featured, text, banners
 */
?>

<!-- wp:heading {"level":1,"align":"wide","style":{"typography":{"fontStyle":"normal","fontWeight":"800","lineHeight":"1"}},"fontSize":"xxxx-large"} -->
<h1 class="wp-block-heading alignwide has-xxxx-large-font-size" style="font-style:normal;font-weight:800;line-height:1"><?php echo esc_html__( 'We proudly stand today as a fifth-generation family-run canteen.', 'peirao' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center">
	<!-- wp:column {"verticalAlignment":"center"} -->
	<div class="wp-block-column is-vertically-aligned-center">
		<!-- wp:image {"align":"center","lightbox":{"enabled":false},"width":"387px","height":"auto","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|default-filter"}}} -->
		<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/image-from-rawpixel-id-6314549-original.png" alt="" class="" style="width:387px;height:auto"/></figure>
		<!-- /wp:image -->
	</div>
	<!-- /wp:column -->

	<!-- wp:column {"verticalAlignment":"center"} -->
	<div class="wp-block-column is-vertically-aligned-center">
		<!-- wp:paragraph -->
		<p><?php echo esc_html__( 'Our core principles have remained unaltered—authentic cuisine, congenial atmosphere, and an unwavering commitment to excellence. As we pass the torch to the next generation, we pledge to maintain these principles, honouring the legacy bestowed upon us while continually capturing the essence of true Ourense hospitality.', 'peirao' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph -->
		<p><?php echo esc_html__( 'Whether you&rsquo;re a local, a returning visitor, or embarking upon your first Ourense experience, we offer not just meals, but moments—etched in the richness of traditional flavours and the warmth of community.', 'peirao' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:column -->
</div>
<!-- /wp:columns -->
