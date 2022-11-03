<?php
/**
 * Title: Gallery
 * Slug: vivre/gallery
 * Categories: gallery
 */

?>

<!-- wp:group -->
<div class="wp-block-group">
<!-- wp:heading {"level":6} -->
<h6><?php echo esc_html__( 'Recent photos', 'vivre' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:query {"query":{"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false,"perPage":2},"displayLayout":{"type":"flex","columns":2}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:post-featured-image /-->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

</div>
<!-- /wp:group -->
