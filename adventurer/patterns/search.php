<?php
/**
 * Title: Search
 * Slug: adventurer/search
 * Inserter: no
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"8rem","bottom":"8rem","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"primary","layout":{"type":"constrained","contentSize":"1100px"}} -->
<div class="wp-block-group alignfull has-primary-background-color has-background" style="padding-top:8rem;padding-right:var(--wp--preset--spacing--50);padding-bottom:8rem;padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"textAlign":"left","level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","fontSize":"large"} -->
<h3 class="wp-block-heading has-text-align-left has-background-color has-text-color has-link-color has-large-font-size"><?php echo esc_html__( 'Don\'t find what you\'re looking for? Search posts here.', 'adventurer' ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:search {"label":"<?php echo esc_html__( 'Search', 'adventurer' ); ?>","showLabel":false,"placeholder":"<?php echo esc_attr__( 'E.g. "Botswana"', 'adventurer' ); ?>","width":538,"widthUnit":"px","buttonText":"<?php echo esc_html__( 'Search', 'adventurer' ); ?>","style":{"border":{"width":"0px","style":"none","radius":"2px"},"typography":{"letterSpacing":"1px","fontStyle":"normal","fontWeight":"400","fontSize":"0.8rem"}},"backgroundColor":"background","textColor":"primary"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
