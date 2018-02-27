<?php
/**
 * The front page template file.
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Pique
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

	<?php // Show the selected frontpage content
	if ( have_posts() ) :
		while ( have_posts() ) : the_post();
			get_template_part( 'components/content', 'hero' );
		endwhile;
	else : // I'm not sure it's possible to have no posts when this page is shown, but WTH
		get_template_part( 'components/content', 'none' );
	endif;
	?>

	<?php
	// Get each of our panels and show the post data
	$panels = array( '1', '2', '3', '4', '5', '6', '7', '8' );
	foreach ( $panels as $panel ) :
		if ( get_theme_mod( 'pique_panel' . $panel ) ) :
			$post = get_post( get_theme_mod( 'pique_panel' . $panel ) );
			setup_postdata( $post );
			set_query_var( 'pique_panel', $panel );
			get_template_part( 'components/content', 'front' );
			wp_reset_postdata();
		endif;
	endforeach;
	?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
