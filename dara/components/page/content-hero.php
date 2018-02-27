<?php
/**
 * The template used for displaying hero content in page.php and page-templates.
 *
 * @package Dara
 */
?>

<?php if ( has_post_thumbnail() ) : ?>
	<div class="hero">
		<div class="entry-thumbnail">
			<?php the_post_thumbnail( 'dara-page-thumbnail' ); ?>
		</div>
	</div><!-- .hero -->
<?php endif; ?>
