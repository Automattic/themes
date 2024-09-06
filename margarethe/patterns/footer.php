<?php
/**
 * Title: footer
 * Slug: margarethe/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","right":"var:preset|spacing|60","bottom":"var:preset|spacing|70","left":"var:preset|spacing|60"}},"border":{"bottom":{"width":"0px","style":"none"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="border-bottom-style:none;border-bottom-width:0px;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--60)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":""} -->
<div class="wp-block-column"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:site-title {"level":0,"style":{"layout":{"selfStretch":"fit","flexSize":""}},"fontSize":"x-large"} /-->

<!-- wp:social-links {"iconColor":"primary","iconColorValue":"#3d3d31","size":"has-small-icon-size","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}},"className":"is-style-logos-only"} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"https://instagram.com/","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"x"} /-->

<!-- wp:social-link {"url":"#","service":"pinterest"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"65.16%"} -->
<div class="wp-block-column" style="flex-basis:65.16%"><!-- wp:columns {"style":{"typography":{"fontStyle":"normal","fontWeight":"400","letterSpacing":"-0.01em","lineHeight":"1.2"},"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}},"fontSize":"x-large"} -->
<div class="wp-block-columns has-x-large-font-size" style="font-style:normal;font-weight:400;letter-spacing:-0.01em;line-height:1.2"><!-- wp:column -->
<div class="wp-block-column">
<!-- wp:paragraph {"style":{"typography":{"letterSpacing":"-0.01em","lineHeight":"1.1"}},"fontSize":"x-large","fontFamily":"lucette"} -->
<p class="has-lucette-font-family has-x-large-font-size" style="letter-spacing:-0.01em;line-height:1.1"><?php esc_html_e('Monday: Closed', 'margarethe');?><br><?php esc_html_e( 'Tue to Sun: 9am — 7pm', 'margarethe' ); ?><br><?php esc_html_e( 'Sat and Sun: 10am — 7pm', 'margarethe');?></p>
<!-- /wp:paragraph -->	
</div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"style":{"typography":{"letterSpacing":"-0.01em","lineHeight":"1.1"}},"fontSize":"x-large","fontFamily":"lucette"} -->
<p class="has-lucette-font-family has-x-large-font-size" style="letter-spacing:-0.01em;line-height:1.1"><?php esc_html_e('Grote Baan 343', 'margarethe' ); ?><br><?php esc_html_e( '2460 Kasterlee, Antwerp', 'margarethe' ); ?><br><?php esc_html_e( '+32 0123 45 67 89', 'margarethe');?></p>
<!-- /wp:paragraph -->	</div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"0"},"margin":{"top":"0px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="margin-top:0px;padding-top:var(--wp--preset--spacing--80);padding-bottom:0"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.05em"}},"fontSize":"x-small"} -->
<p class="has-x-small-font-size" style="letter-spacing:0.05em;text-transform:uppercase">
<?php
	/* Translators: WordPress link. */
	$wordpress_link = '<a href="' . esc_url( __( 'https://wordpress.org', 'margarethe' ) ) . '" rel="nofollow">WordPress</a>';
	echo sprintf(
		esc_html__( 'Designed with %1$s', 'margarethe' ),
		$wordpress_link
	);
?>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->