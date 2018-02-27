<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package Gazette
 */

if ( ! is_active_sidebar( 'sidebar-1' ) && ( ( 1 != get_theme_mod( 'gazette_author_bio' ) && ! get_the_author_meta( 'description' ) ) || ! is_single() ) ) {
	return;
}
?>

<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
	<button class="sidebar-toggle" aria-controls="secondary" aria-expanded="false"><span class="screen-reader-text"><?php _e( 'Sidebar', 'gazette' ); ?></span></button>
<?php endif; ?>

<div id="secondary" class="widget-area" role="complementary">
	<?php
		// Author Bio
		if ( 1 == get_theme_mod( 'gazette_author_bio' ) && get_the_author_meta( 'description' ) && is_single() ) {
			get_template_part( 'author-bio' );
		}

		// Sidebar
		dynamic_sidebar( 'sidebar-1' );
	?>
</div><!-- #secondary -->
