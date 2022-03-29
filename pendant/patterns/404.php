<?php
/**
 * Title: A 404 page
 * slug: pendant/404
 * Inserter: no
 */

?>

<!-- wp:heading {"textAlign":"left","level":2,"align":"wide","style":{"typography":{"fontSize":"clamp(2rem, 12vw, 8rem)"}}} -->
<h2 class="alignwide has-text-align-left" id="oops-that-page-can-t-be-found" style="font-size:clamp(2rem, 12vw, 8rem)"><?php echo esc_html__( 'There\'s nothing here.', 'pendant' ); ?></h2>
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

<!-- wp:search {"label":"","showLabel":false,"placeholder":"<?php echo  esc_html__( 'Search', 'pendant' ); ?>","width":100,"widthUnit":"%","buttonText":"<?php echo  esc_html__( 'Search', 'pendant' ); ?>","style":{"border":{"radius":"0px"}},"className":"custom-404-wp-search"} /-->
</div>
<!-- /wp:group -->

