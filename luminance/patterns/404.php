<?php
/**
 * Title: A 404 page
 * Slug: luminance/404
 * Inserter: no
 */

declare( strict_types = 1 );
?>

<!-- wp:heading {"textAlign":"left","level":1,"fontSize":"x-large"} -->
<h1 class="wp-block-heading has-text-align-left has-x-large-font-size" id="oops-that-page-can-t-be-found"><?php echo esc_html__( 'Oops! That page can&rsquo;t be found.', 'luminance' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo  esc_html__( 'It looks like nothing was found at this location. Maybe try a search?', 'luminance' ); ?></p>
<!-- /wp:paragraph -->
