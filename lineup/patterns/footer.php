<?php
/**
 * Title: Default footer
 * Slug: lineup/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:var(--wp--preset--spacing--50);padding-bottom:0;padding-left:var(--wp--preset--spacing--50)">
	<!-- wp:paragraph {"style":{"typography":{"fontSize":"1rem"}}} -->
	<p style="font-size:1rem">
	<?php
		$wordpress_link = '<a href="' . esc_url( __( 'https://wordpress.org', 'lineup' ) ) . '" rel="nofollow">WordPress</a>';
		echo sprintf(
			/* translators: WordPress link. */
			esc_html__( 'Designed with %1$s', 'lineup' ),
			$wordpress_link
		);
		?>
	</p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
