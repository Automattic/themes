<?php
/**
 * Title: Footer
 * Slug: lettre/hidden-footer
 * Inserter: no
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"58px","bottom":"58px"}}},"layout":{"contentSize":"500px"}} -->
<div class="wp-block-group" style="padding-top:58px;padding-bottom:58px;"><!-- wp:pattern {"slug":"lettre/hidden-subscription-form"} /--></div>
<!-- /wp:group -->
<!-- wp:spacer {"height":"170px"} -->
<div style="height:170px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"bottom":"var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dspacing\u002d\u002douter)","left":"var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dspacing\u002d\u002douter)","right":"var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dspacing\u002d\u002douter)"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull" style="padding-right:var(--wp--custom--spacing--outer);padding-bottom:var(--wp--custom--spacing--outer);padding-left:var(--wp--custom--spacing--outer)"><!-- wp:group {"layout":{"type":"flex","allowOrientation":false,"justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size">
	<?php
		echo sprintf(
			esc_html__( 'A %s newsletter', 'lettre' ),
			'<a href="' . esc_url( __( 'https://wordpress.org', 'lettre' ) ) . '" rel="nofollow">WordPress</a>'
		); 
	?>
</p>
<!-- /wp:paragraph -->

<!-- wp:site-title {"style":{"spacing":{"padding":{"top":"20px","bottom":"20px"}}},"fontSize":"small"} /--></div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
