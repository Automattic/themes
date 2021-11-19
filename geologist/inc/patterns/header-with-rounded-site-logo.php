<?php
/**
 * Authors
 *
 * @package Geologist
 */

return array(
	'title'      => __( 'Header with Rounded Site Logo and Title', 'geologist' ),
	'categories' => array( 'geologist' ),
	'blockTypes' => array( 'core/template-part/header' ),
	'content'    => '<!-- wp:group {"tagName":"header","style":{"spacing":{"padding":{"bottom":"90px"}}},"className":"site-header","layout":{"type":"flex"}} -->
<header class="wp-block-group site-header" style="padding-bottom:90px">
	<!-- wp:site-logo {"className":"is-style-rounded"} /-->
	<!-- wp:site-title /-->
	<!-- wp:navigation {"__unstableLocation":"primary","layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right","orientation":"horizontal"}} /-->
</header>
<!-- /wp:group -->',
);
