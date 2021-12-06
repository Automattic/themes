<?php
/**
 * Post Navigation Links.
 *
 * @package Skatepark
 */

return array(
	'title'      => __( 'Post Navigation Links', 'skatepark' ),
	'categories' => array( 'skatepark' ),
	'content'    => '
<!-- wp:group {"style":{"spacing":{"padding":{"top":"3em","bottom":"3em"}}},"layout":{"inherit":true}} -->
<div class="wp-block-group" style="padding-top:3em;padding-bottom:3em">

	<!-- wp:separator {"align":"wide","className":"is-style-wide"} -->
	<hr class="wp-block-separator alignwide is-style-wide"/>
	<!-- /wp:separator -->

	<!-- wp:columns {"align":"wide","className":"next-prev-links"} -->
	<div class="wp-block-columns alignwide next-prev-links">
		<!-- wp:column {"style":{"spacing":{"padding":{"top":"1em","bottom":"1em"}}}} -->
		<div class="wp-block-column" style="padding-top:1em;padding-bottom:1em">
			<!-- wp:paragraph {"align":"left","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"800","fontSize":"14px","letterSpacing":"0.1em"},"spacing":{"margins":{"top":"0px", "bottom":"0px"}}}} -->
			<p class="has-text-align-left" id="next-post" style="font-size:14px;font-style:normal;font-weight:800;text-transform:uppercase;letter-spacing:0.1em;margin-top:0px;margin-bottom:0px;">' . esc_html__( 'previous post', 'skatepark' ) . '</p>
			<!-- /wp:paragraph -->
			<!-- wp:post-navigation-link {"type":"previous","showTitle":true,"style":{"typography":{"fontSize":"14px"}}} /-->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"style":{"spacing":{"padding":{"top":"1em","bottom":"1em"}}}} -->
		<div class="wp-block-column" style="padding-top:1em;padding-bottom:1em">
			<!-- wp:paragraph {"align":"right","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"800","fontSize":"14px","letterSpacing":"0.1em"},"spacing":{"margins":{"top":"0px", "bottom":"0px"}}}} -->
			<p class="has-text-align-right" id="next-post" style="font-size:14px;font-style:normal;font-weight:800;text-transform:uppercase;letter-spacing:0.1em;margin-top:0px;margin-bottom:0px;">' . esc_html__( 'next post', 'skatepark' ) . '</p>
			<!-- /wp:paragraph -->
			<!-- wp:post-navigation-link {"textAlign":"right","showTitle":true,"style":{"typography":{"fontSize":"14px"}}} /-->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:separator {"align":"wide","className":"is-style-wide"} -->
	<hr class="wp-block-separator alignwide is-style-wide"/>
	<!-- /wp:separator -->
</div>
<!-- /wp:group -->
',
);
