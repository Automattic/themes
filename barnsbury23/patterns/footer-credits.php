<?php
/**
 * Title: Footer credits
 * Slug: barnsbury23/footer-credits
 * Categories: footer
 * Block Types: core/template-part/footer
 */
?>

<!-- wp:paragraph {"align":"left","style":{"spacing":{"margin":{"top":"0"},"blockGap":"2rem"},"typography":{"lineHeight":1,"textTransform":"none","fontStyle":"normal","fontWeight":"300"}},"fontSize":"medium","fontFamily":"rubik"} -->
<p class="has-text-align-left has-rubik-font-family has-medium-font-size" style="margin-top:0;font-style:normal;font-weight:300;line-height:1;text-transform:none">
<?php
	/* Translators: WordPress link. */
	$wordpress_link = '<a href="' . esc_url( __( 'https://wordpress.org', 'barnsbury23' ) ) . '" rel="nofollow">WordPress</a>';
	echo sprintf(
		esc_html__( 'Designed with %1$s', 'barnsbury23' ),
		$wordpress_link
	);
	?>
</p>
<!-- /wp:paragraph -->
