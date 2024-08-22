<?php
/**
 * Title: Header Dusk
 * Slug: lowfi/header-dusk
 * Categories: header
 * Block Types: core/template-part/header
 * Viewport width: 1280
 */

declare( strict_types = 1 );
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80)">
	<!-- wp:image {"lightbox":{"enabled":false},"width":"400px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"custom","style":{"border":{"radius":"6px"}}} -->
	<figure class="wp-block-image size-full is-resized has-custom-border"><a href="/"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/header-image-dusk.jpg" alt="" class="" style="border-radius:6px;aspect-ratio:1;object-fit:cover;width:400px"/></a></figure>
	<!-- /wp:image -->

	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
	<div class="wp-block-group">
		<!-- wp:site-title {"level":0,"style":{"layout":{"selfStretch":"fit","flexSize":null}}} /-->
		<!-- wp:site-tagline /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
