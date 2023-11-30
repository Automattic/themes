<?php
/**
 * Title: A 404 page
 * Slug: pomme/hidden-404
 * Inserter: no
 */

declare( strict_types = 1 );
?>

<!-- wp:heading {"textAlign":"left","level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":1.388888889}},"fontSize":"medium"} -->
<h1 class="wp-block-heading has-text-align-left has-medium-font-size" id="oops-that-page-can-t-be-found" style="font-style:normal;font-weight:700;line-height:1.388888889;">
	<?php echo esc_html__( 'Oops! That page can&rsquo;t be found.', 'pomme' ); ?>
</h1>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo  esc_html__( 'It looks like nothing was found at this location. Maybe try a search?', 'pomme' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:pattern {"slug":"pomme/hidden-search-field"} /-->
