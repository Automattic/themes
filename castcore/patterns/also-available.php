<?php
/**
 * Title: Also Available
 * Slug: castcore/also-available
 * Inserter: no
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:paragraph {"style":{"typography":{"textDecoration":"none"}},"fontSize":"medium"} -->
<p class="has-medium-font-size" style="text-decoration:none"><?php
	$pocketcasts = '<a href="#"><strong>PocketCasts</strong></a>';
	$soundcloud = '<a href="#"><strong>' . esc_html__( 'SoundCloud', 'castcore' ) . '</strong></a>';
	$spotify = '<a href="#"><strong>' . esc_html__( 'Spotify', 'castcore' ) . '</strong></a>';
	$googlepodcasts = '<a href="#"><strong>' . esc_html__( 'Google Podcasts', 'castcore' ) . '</strong></a>';
	$applepodcasts = '<a href="#"><strong>' . esc_html__( 'Apple Podcasts', 'castcore' ) . '</strong></a>';
	$rss = '<a href="#"><strong>' . esc_html__( 'RSS', 'castcore' ) . '</strong></a>';
	echo sprintf(
		esc_html__( 'Podcast also available on %1$s, %2$s, %3$s, %4$s, %5$s, and %6$s.', 'castcore' ),
		$pocketcasts, $soundcloud, $spotify, $googlepodcasts, $applepodcasts, $rss
	);?></p><!-- /wp:paragraph --></div>
<!-- /wp:group -->