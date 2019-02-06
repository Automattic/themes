<?php
/**
 * Template part for displaying grid posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package photos
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="container">
		<?php photos_post_thumbnail(); ?>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
