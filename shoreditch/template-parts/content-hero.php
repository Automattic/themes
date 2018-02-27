<?php
/**
 * Template part for displaying hero image on the single page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Shoreditch
 */

if ( post_password_required() || is_attachment() ) {
	return;
}

if ( 'post' !== get_post_type() && ! has_post_thumbnail() || 'post' === get_post_type() && ! shoreditch_has_post_thumbnail() ) {
	return;
}
?>

<div class="entry-hero" <?php shoreditch_background_image(); ?>>
	<div class="entry-hero-wrapper">
		<?php
		shoreditch_entry_meta();

		the_title( '<h1 class="entry-title">', '</h1>' );
		?>
	</div><!-- .entry-hero-wrapper -->
</div><!-- .entry-hero -->
