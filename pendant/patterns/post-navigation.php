<?php
/**
 * Title: Post Navigation
 * Slug: pendant/post-navigation
 * inserter: no
 */
?>

<!-- wp:columns {"isStackedOnMobile":false,"className":"pendant-post-navigation"} -->
<div class="wp-block-columns is-not-stacked-on-mobile pendant-post-navigation"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:post-navigation-link {"textAlign":"right","type":"previous","showTitle":true,"label":"<?php echo esc_html__( 'Previous Post', 'pendant' ); ?><br>","linkLabel":true} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:post-navigation-link {"showTitle":true,"label":"<?php echo esc_html__( 'Next Post', 'pendant' ); ?><br>","linkLabel":true} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->