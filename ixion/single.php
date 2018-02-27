<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Ixion
 */

get_header();

//Starting The Loop earlier to take advantage of functions like has_post_thumbnail()
while ( have_posts() ) : the_post();

	if ( has_post_thumbnail() ) : ?>

		<div class="post-thumbnail">
			<?php the_post_thumbnail( 'ixion-featured-image' ); ?>
		</div>

<?php
	endif;

	if ( 'post' === get_post_type() ) {
		get_template_part( 'components/post/content', 'meta' );
	}

	the_title( '<h1 class="entry-title">', '</h1>' );

?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php

			get_template_part( 'components/post/content', get_post_format() );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

			the_post_navigation();
		?>

		</main>
	</div>
<?php
endwhile; // End of the loop.

get_sidebar();
get_footer();
