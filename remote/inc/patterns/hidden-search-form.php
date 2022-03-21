<?php
/**
 * Search form
 */
return array(
	'title'    => __( 'Search form', 'remote' ),
	'inserter' => false,
	'content'  => '<!-- wp:group {"layout":{"inherit":true}} -->
    <div class="wp-block-group"><!-- wp:spacer {"height":"32px"} -->
    <div style="height:32px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
    <!-- wp:search {"label":"' . esc_attr__( 'Search', 'remote' ) . '","width":100,"widthUnit":"%","buttonText":"' . esc_attr__( 'Search', 'remote' ) . '","style":{"border":{"radius":"0px"}}} /-->
    <!-- wp:spacer -->
    <div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer --></div>
    <!-- /wp:group -->',
);
