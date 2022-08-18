<?php
/**
 * Title: A 404 page
 * Slug: disco/404
 * Inserter: no
 */

?>

<!-- wp:group {"tagName":"main"} -->
<main class="wp-block-group"><!-- wp:spacer {"height":"clamp(1rem, calc(1rem + ((1vw - 0.48rem) * 5.7692)), 4rem)"} -->
<div style="height:clamp(1rem, calc(1rem + ((1vw - 0.48rem) * 5.7692)), 4rem)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textAlign":"left","level":1,"style":{"typography":{"textTransform":"uppercase"}}} -->
<h1 class="has-text-align-left" id="oops-that-page-can-t-be-found" style="text-transform:uppercase"><?php echo esc_html__( 'Uh Oh :((((((((((', 'disco' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size"><?php echo esc_html__( 'This page could not be found. Try searching posts using the search field.', 'disco' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:pattern {"slug":"disco/search"} /-->

<!-- /wp:group -->
