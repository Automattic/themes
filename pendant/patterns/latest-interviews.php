<?php
/**
 * Title: Posts and Topics
 * slug: pendant/latest-interviews
 * inserter: no
 */
?>

<!-- wp:heading {"level":4,"fontSize":"large"} -->
<h4 class="has-large-font-size"><?php echo esc_html__( 'Latest Interviews', 'pendant' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:columns {"style":{"spacing":{"blockGap":"20px"}}} -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/jewelery-making-1.jpeg'; ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":4} -->
<h4><?php echo esc_html__( 'Q&amp;A with Lana DeVito, Jewelry designer', 'pendant' ); ?></h4>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/jewelery-making-2.jpeg'; ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":4} -->
<h4><?php echo esc_html__( 'Q&amp;A with Andrew Holsen, handmaker', 'pendant' ); ?></h4>
<!-- /wp:heading --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->