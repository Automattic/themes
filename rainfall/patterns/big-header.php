<?php
/**
 * Title: Big Header
 * Slug: rainfall/big-header
 * Categories: featured
 */
?>

<!-- wp:group {"layout":{"type":"default"},"style":{"spacing":{"padding":{"right":"var:preset|spacing|90","left":"var:preset|spacing|90"}}}} -->
<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--90)">

<!-- wp:columns -->
<div class="wp-block-columns">
<!-- wp:column {"width":"75%"} -->
<div class="wp-block-column" style="flex-basis:75%">
<!-- wp:heading {"className":"indented-post-title","fontSize":"xx-large"} -->
<h2 class="has-xx-large-font-size indented-post-title"><?php esc_html_e( 'The City That Never Sleeps', 'rainfall' ); ?></h2>
<!-- /wp:heading -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"bottom","width":"33.33%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:33.33%"><!-- wp:heading {"fontSize":"xx-large"} -->
<h2 class="has-xx-large-font-size"><?php echo esc_html__( '002', 'rainfall' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"}}} -->
<p style="text-transform:uppercase"><a href="/about"><?php esc_html_e( 'Read Issue', 'rainfall' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:image {"align":"right","sizeSlug":"large","linkDestination":"custom"} -->
<figure class="wp-block-image alignright size-large"><a href="/about"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/home.jpg" alt="<?php esc_attr_e( 'Person with umbrella', 'rainfall' ); ?>"/></a></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

</div>
<!-- /wp:group -->

