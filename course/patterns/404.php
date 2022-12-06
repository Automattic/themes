<?php
/**
 * Title: A 404 page
 * Slug: course/404
 * Inserter: no
 */

?>

<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"100px"}}},"layout":{"type":"constrained","contentSize":"1000px","wideSize":"1200px","justifyContent":"left"}} -->
<div class="wp-block-group" style="padding-bottom:100px;"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0px","left":"0px"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"70%","style":{"spacing":{"padding":{"right":"20px"}}}} -->
<div class="wp-block-column" style="padding-right:20px;flex-basis:70%"><!-- wp:heading {"level":1,"style":{"typography":{"lineHeight":0.9}},"fontSize":"xxx-large"} -->
<h1 class="has-xxx-large-font-size" style="line-height:0.9">404</h1>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"40px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:40px"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.3"}}} -->
<p style="line-height:1.3"><?php echo esc_html__( 'This page could not be found.', 'course' ); ?><br><?php echo esc_html__( 'Maybe you should try a search.', 'course' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"","showLabel":false,"placeholder":"<?php echo esc_html__( 'Search...', 'course' ); ?>","width":100,"widthUnit":"%","buttonText":"Search","buttonUseIcon":true,"style":{"border":{"radius":"4px","width":"1px"}},"borderColor":"primary","textColor":"tertiary","className":"course-search-sidebar"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
