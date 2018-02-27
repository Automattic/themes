<?php
/**
 * The front page template file.
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Lodestar
 */

// Access global variable directly to set content_width
if ( isset( $GLOBALS['content_width'] ) ) {
	$GLOBALS['content_width'] = 1120;
}

get_header(); ?>


<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php // Show the selected frontpage content
		if ( have_posts() ) :
			while ( have_posts() ) : the_post();
				echo '<div class="wrap">';
				get_template_part( 'components/page/content', 'front-page' );
				echo '</div>';
			endwhile;
		else : // I'm not sure it's possible to have no posts when this page is shown, but WTH
			echo '<div class="wrap">';
			get_template_part( 'components/post/content', 'none' );
			echo '</div>';
		endif; ?>

		<?php
		// Get each of our panels and show the post data
		$panels = array( '1', '2', '3', '4' );
		$titles = array();

		global $lodestarcounter; // Used in components/page/content-front-page-panels.php file.

		if ( 0 !== lodestar_panel_count() || is_customize_preview() ) : //If we have pages to show...

			$lodestarcounter = 1;

			foreach ( $panels as $panel ) :
				if ( get_theme_mod( 'lodestar_panel' . $panel ) ) :
					$post = get_post( get_theme_mod( 'lodestar_panel' . $panel ) );
					setup_postdata( $post );
					set_query_var( 'lodestar_panel', $panel );

					$titles[] = get_the_title(); //Put page titles in an array for use in navigation
					get_template_part( 'components/page/content', 'front-page-panels' );

					wp_reset_postdata();
				else :
					// output placeholder anchor
					echo '<article class="lodestar-panel panel-placeholder">';
					echo '<span class="panel lodestar-panel' . esc_attr( $lodestarcounter ) .' label-placeholder" id="panel' . esc_attr( $lodestarcounter ) . '">';
					echo '<span class="lodestar-panel-title">' . sprintf( esc_html__( 'Panel %1$s Placeholder', 'lodestar' ), esc_attr( $lodestarcounter ) ) . '</span>';
					echo '</span></article>';
				endif;

				$lodestarcounter++;
			endforeach;
			?>

	<?php endif; // if ( 0 !== lodestar_panel_count() )
	?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
