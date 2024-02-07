<?php
/**
 * Title: 404
 * Slug: cakely/hidden-404
 * Inserter: no
 */

declare( strict_types = 1 );
?>

<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide">
	<!-- wp:heading {"level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"0.99","textTransform":"uppercase"}},"textColor":"primary"} -->
	<h1 class="wp-block-heading has-primary-color has-text-color has-link-color" style="font-style:normal;font-weight:700;line-height:0.99;text-transform:uppercase"><?php echo esc_html__( 'Page Not Found', 'cakely' ); ?></h1>
	<!-- /wp:heading -->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","layout":{"type":"constrained","contentSize":"50%","justifyContent":"left"}} -->
<div class="wp-block-group alignwide">
	<!-- wp:paragraph -->
	<p><?php echo esc_html__( 'The page you are looking for does not exist, or it has been moved. Please try searching using the form below.', 'cakely' ); ?></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
