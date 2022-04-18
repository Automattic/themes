<?php
/**
 * Title: A 404 page
 * slug: pendant/404
 * inserter: no
 */

?>

<!-- wp:heading {"textAlign":"left","level":1,"align":"wide"} -->
<h1 class="alignwide has-text-align-left" id="oops-that-page-can-t-be-found"><?php echo esc_html__( 'There\'s nothing here.', 'pendant' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"0.8em"} -->
<div style="height:0.8em" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"align":"wide"} -->
<div class="wp-block-group alignwide">
<!-- wp:paragraph -->
<p class="has-text-align-left has-medium-font-size">
<?php echo  esc_html__( 'This page could not be found. Try searching posts using the search field.', 'pendant' ); ?>
</p>
<!-- /wp:paragraph -->

<!-- wp:search {"showLabel":false,"placeholder":"<?php echo  esc_html__( 'Search…', 'pendant' ); ?>","width":500,"widthUnit":"px","buttonText":"<?php echo  esc_html__( 'Search', 'pendant' ); ?>","buttonPosition":"button-inside"} /-->

</div>
<!-- /wp:group -->
