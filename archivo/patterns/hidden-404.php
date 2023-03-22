<?php
/**
 * Title: A 404 page
 * Slug: archivo/hidden-404
 * Inserter: no
 */
?>

<!-- wp:heading {"textAlign":"left","level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":1.666666667}},"fontSize":"medium"} -->
<h1 class="wp-block-heading has-text-align-left has-medium-font-size" id="oops-that-page-can-t-be-found" style="font-style:normal;font-weight:700;line-height:1.666666667;">
	<?php echo esc_html__( 'Oops! That page can&rsquo;t be found.', 'archivo' ); ?>
</h1>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo  esc_html__( 'It looks like nothing was found at this location. Maybe try a search?', 'archivo' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"showLabel":false,"placeholder":"<?php echo esc_attr_x( 'Search...', 'placeholder for search field', 'archivo' ); ?>","buttonText":"<?php esc_attr_e( 'Search', 'archivo' ); ?>"} /-->
