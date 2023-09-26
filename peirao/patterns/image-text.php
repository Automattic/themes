<?php
/**
 * Title: Two columns of image and text
 * Slug: peirao/image-text
 * Categories: featured, text
 */
?>

<!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center">
	<!-- wp:column {"verticalAlignment":"center"} -->
	<div class="wp-block-column is-vertically-aligned-center">
		<!-- wp:image {"align":"center","width":"280px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|default-filter"}}} -->
		<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/image-from-rawpixel-id-6265131-original.png" alt="" class="" style="width:280px"/></figure>
		<!-- /wp:image -->
	</div>
	<!-- /wp:column -->

	<!-- wp:column {"verticalAlignment":"center"} -->
	<div class="wp-block-column is-vertically-aligned-center">
		<!-- wp:heading {"fontSize":"xx-large"} -->
		<h2 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html__( 'Our Story', 'peirao' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph -->
		<p><?php echo esc_html__( 'Established over a century ago, Peirao is not just a restaurant—it&rsquo;s a cherished institution woven into the very fabric of Ourense. Spanning five generations of family ownership, our canteen is a haven for both locals and global travellers alike. The accolades may speak for themselves, but it is the enduring bonds we form with our guests that stand as our proudest achievement.', 'peirao' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:column -->
</div>
<!-- /wp:columns -->
