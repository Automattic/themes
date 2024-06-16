<?php
/**
 * Title: post-meta
 * Slug: bedrock/post-meta
 * Inserter: no
 */
declare( strict_types = 1 );
?>

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"},"typography":{"lineHeight":"1"}},"textColor":"secondary","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group has-secondary-color has-text-color" style="line-height:1">
	<!-- wp:image {"width":"20px","height":"20px","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/Diamond_Pickaxe.png" alt="" class="" style="object-fit:cover;width:20px;height:20px"/></figure>
	<!-- /wp:image -->

	<!-- wp:post-date {"format":"M j, Y","isLink":true} /-->

	<!-- wp:image {"width":"20px","height":"20px","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/Book.png" alt="" class="" style="object-fit:cover;width:20px;height:20px"/></figure>
	<!-- /wp:image -->

	<!-- wp:post-terms {"term":"category"} /-->

	<!-- wp:image {"width":"20px","height":"20px","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/Gold_Ingot.png" alt="" class="" style="object-fit:cover;width:20px;height:20px"/></figure>
	<!-- /wp:image -->

	<!-- wp:post-terms {"term":"post_tag"} /-->
</div>
<!-- /wp:group -->
