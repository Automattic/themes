<?php
/**
 * Title: Footer 2
 * Slug: kigen/footer-2
 * Categories: featured, footer
 * Block Types: core/template-part/footer
 */
?>

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"fontSize":"x-small"} -->
<p class="has-x-small-font-size" style="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px"><?php
	$wordpress_link = '<a href="' . esc_url( __( 'https://wordpress.org', 'kigen' ) ) . '" rel="nofollow">WordPress</a>';
	echo sprintf(
		/* Translators: WordPress link. */
		esc_html__( 'Designed with %1$s', 'kigen' ),
		$wordpress_link
	);?></p>
<!-- /wp:paragraph -->
