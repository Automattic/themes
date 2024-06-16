<?php declare( strict_types = 1 ); ?>
<?php
/**
 * Title: Default footer
 * Slug: fotograma/footer-home
 * Inserter: no
 */
?>

<!-- wp:paragraph {"fontSize":"x-small"} -->
<p class="has-x-small-font-size"><?php
	/* Translators: WordPress link. */
	$wordpress_link = '<a href="' . esc_url( __( 'https://wordpress.org', 'fotograma' ) ) . '" rel="nofollow">WordPress</a>';
	echo sprintf(
	esc_html__( 'Designed with %1$s', 'fotograma' ),
	$wordpress_link
);?></p>
<!-- /wp:paragraph -->
