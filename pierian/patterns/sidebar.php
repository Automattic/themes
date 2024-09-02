<?php
/**
 * Title: sidebar
 * Slug: pierian/sidebar
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:group {"metadata":{"categories":["hidden"]},"style":{"spacing":{"blockGap":"3rem","padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"margin":{"top":"0px","bottom":"0px"}},"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between"}} -->
<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><?php  echo __('Sappho, spelled (in the dialect spoken by the poet) Psappho, (born c. 610, Lesbos, Greece — died c. 570 BCE). A lyric poet greatly admired in all ages for the beauty of her writing style.', 'pierian'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php  echo __('Her language contains elements from Aeolic vernacular and poetic tradition, with traces of epic vocabulary familiar to readers of Homer. She has the ability to judge critically her own ecstasies and grief, and her emotions lose nothing of their force by being recollected in tranquillity.', 'pierian'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":[]}} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/sappho-statue_bw.webp" alt="<?php esc_attr_e('Marble statue of Sappho on side profile', 'pierian')?>" style="aspect-ratio:3/4;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left">
<?php
	/* Translators: WordPress link. */
	$wordpress_link = '<a href="' . esc_url( __( 'https://wordpress.org', 'pierian' ) ) . '" rel="nofollow">WordPress</a>';
	echo sprintf(
		esc_html__( 'Designed with %1$s', 'pierian' ),
		$wordpress_link
	);
?>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->