<?php
/**
 * Title: footer
 * Slug: archivo/footer
 * Inserter: no
 */
?>
<!-- wp:spacer {"height":"10vw"} -->
<div style="height:10vw" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:site-logo {"width":96,"shouldSyncIcon":false,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}}} /-->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:site-title {"level":0} /-->

<!-- wp:paragraph -->
<p><a href="#"><?php echo esc_html__( 'Tumblr', 'archivo' ); ?></a> / <a href="#"><?php echo esc_html__( 'Instagram', 'archivo' ); ?></a> / <a href="#"><?php echo esc_html__( 'Email', 'archivo' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p><?php
	$wordpress_link = '<a href="' . esc_url( __( 'https://wordpress.org', 'archivo' ) ) . '" rel="nofollow">WordPress</a>';
	echo sprintf(
		esc_html__( 'Designed with %1$s', 'archivo' ),
		$wordpress_link
	);
?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
