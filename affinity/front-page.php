<?php
/**
 * The front page template file.
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Affinity
 */

if ( 'posts' == get_option( 'show_on_front' ) ) :

	get_template_part( 'index' );

else :

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php // Show the selected frontpage content

		if ( have_posts() ) :
			while ( have_posts() ) : the_post();
				get_template_part( 'components/page/content', 'page' );
			endwhile;
		else : // I'm not sure it's possible to have no posts when this page is shown, but WTH
			get_template_part( 'components/posts/content', 'none' );
		endif;

		?>

		<?php

		// Get each of our panels and show the post data
		$panels = array( '1', '2', '3', '4', '5' );
		$titles = array();

		global $affinitycounter; //Used in content-frontpage.php

		if ( 0 !== affinity_panel_count() ) : //If we have pages to show...

			$affinitycounter = 1;

			foreach ( $panels as $panel ) :

				if ( get_theme_mod( 'affinity_panel' . $panel ) ) :

					$post = get_post( get_theme_mod( 'affinity_panel' . $panel ) );

					setup_postdata( $post );

					if ( 'publish' === get_post_status() ) :

						// echo get_post_status();

						set_query_var( 'affinity_panel', $panel );

						get_template_part( 'components/page/content', 'frontpage' );

						$titles[] = get_the_title(); //Put page titles in an array for use in navigation

						wp_reset_postdata();

						$affinitycounter++;

					else :

						wp_reset_postdata();

					endif; // if ( 'publish' === get_post_status() )

				endif; // if ( get_theme_mod( 'affinity_panel' . $panel ) )

			endforeach; // foreach ( $panels as $panel )

			/* In-page navigation */

			echo '<ul class="panel-navigation">';
			echo '<li><a class="panel0" href="#page"><span class="sep">&diams;</span><span class="hidden">' . esc_html__( 'Back to Top', 'affinity' ) . '</span></a></li>';

			$counter = 0;

			foreach ( $panels as $panel ) : //Iterate over each panel and grab titles from $titles[] defined in the previous loop

				if ( get_theme_mod( 'affinity_panel' . $panel ) ) : //If the theme mod is set...

					$post = get_post( get_theme_mod( 'affinity_panel' . $panel ) );

					setup_postdata( $post );

					if ( 'publish' === get_post_status() ) :

						echo '<li><a class="panel' . $panel . '" href="#panel' . $panel . '"><span class="sep">&diams;</span><span class="hidden">' . $titles[$counter] . '</span></a></li>';

						wp_reset_postdata();

						$counter++;

					else :

						wp_reset_postdata();

					endif; // if ( 'publish' === get_post_status() )

				endif;

			endforeach; // foreach ( $panels as $panel )

			echo '</ul><!-- .panel-navigation -->';

		endif; // if ( 0 !== affinity_panel_count() )

		?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer();

endif; ?>
