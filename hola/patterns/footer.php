<?php declare( strict_types = 1 ); ?>
<?php
/**
 * Title: footer
 * Slug: hola/footer
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50","padding":{"bottom":"var:preset|spacing|70","right":"var:preset|spacing|50","left":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"top":"var:preset|spacing|40"}},"border":{"top":{"width":"1px","style":"dotted"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top","justifyContent":"left"}} -->
<div class="wp-block-group" style="border-top-style:dotted;border-top-width:1px;padding-top:var(--wp--preset--spacing--40)"><!-- wp:paragraph {"align":"left","style":{"layout":{"selfStretch":"fit","flexSize":null}},"fontSize":"small"} -->
<p class="has-text-align-left has-small-font-size"><a href="#" target="_blank" rel="noreferrer noopener">Tumblr</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"left","style":{"layout":{"selfStretch":"fit","flexSize":null}},"fontSize":"small"} -->
<p class="has-text-align-left has-small-font-size">·</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"left","style":{"layout":{"selfStretch":"fit","flexSize":null}},"fontSize":"small"} -->
<p class="has-text-align-left has-small-font-size"><a href="#" target="_blank" rel="noreferrer noopener">Behance</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"left","style":{"layout":{"selfStretch":"fit","flexSize":null}},"fontSize":"small"} -->
<p class="has-text-align-left has-small-font-size">·</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"left","style":{"layout":{"selfStretch":"fit","flexSize":null}},"fontSize":"small"} -->
<p class="has-text-align-left has-small-font-size"><a href="#" target="_blank" rel="noreferrer noopener">Mastodon</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"left","style":{"layout":{"selfStretch":"fit","flexSize":null}},"fontSize":"small"} -->
<p class="has-text-align-left has-small-font-size">·</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"left","style":{"layout":{"selfStretch":"fit","flexSize":null}},"fontSize":"small"} -->
<p class="has-text-align-left has-small-font-size"><a href="#" target="_blank" rel="noreferrer noopener">LinkedIn</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group">
	<!-- wp:paragraph {"align":"left","style":{"layout":{"selfStretch":"fill","flexSize":null}},"fontSize":"small"} -->
<p class="has-text-align-left has-small-font-size"><?php esc_html_e('Get in touch', 'hola');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"left","fontSize":"small"} -->
<p class="has-text-align-left has-small-font-size">
		<?php
		/* Translators: WordPress link. */
		$wordpress_link = '<a href="' . esc_url( __( 'https://wordpress.org', 'hola' ) ) . '" rel="nofollow">WordPress</a>';
		echo sprintf(
			esc_html__( 'Designed with %1$s', 'hola' ),
			$wordpress_link
		);
		?>

</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->