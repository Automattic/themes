<?php
/**
 * Title: Default footer
 * Slug: trellick/footer
 * Categories: featured, footer
 * Block Types: core/template-part/footer
 * Inserter: no
 */
declare( strict_types = 1 );
?>

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"fontSize":"x-small"} -->
<p class="has-x-small-font-size" style="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px"><?php
		/* Translators: WordPress link. */
		$wordpress_link = '<a href="' . esc_url( __( 'https://wordpress.org', 'trellick' ) ) . '" rel="nofollow">WordPress</a>';
		echo sprintf(
			esc_html__( 'Designed with %1$s', 'trellick' ),
			$wordpress_link
		);?></p>
<!-- /wp:paragraph -->
