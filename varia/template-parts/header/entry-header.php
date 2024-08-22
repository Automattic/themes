<?php declare( strict_types = 1 ); ?>
<?php
/**
 * Displays the post header
 *
 * @package WordPress
 * @subpackage Varia
 * @since 1.0.0
 */
?>

<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

<?php if ( ! is_page() ) : ?>
<div class="entry-meta">
	<?php varia_entry_footer(); ?>
</div><!-- .meta-info -->
<?php endif; ?>
