<?php
/**
 * The template used for displaying Jetpack Portfolio posts on single porfolio pages
 *
 * @package Lodestar
 */
?>

<?php
	if ( have_posts() ) :
		while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<?php the_title( '<h1>', '</h1>' ); ?>
				</header>

				<div class="entry-content">
					<?php the_content(); ?>
				</div>
			</article><!-- #post-<?php the_ID(); ?> -->

		<?php endwhile;
	endif;
?>

<?php
	if ( get_query_var( 'paged' ) ) {
		$paged = get_query_var( 'paged' );
	} elseif ( get_query_var( 'page' ) ) {
		$paged = get_query_var( 'page' );
	} else {
		$paged = 1;
	}

	/**
	 * Query projects with a fixed posts-per-page. The category sorting in the template works
	 * best if all projects are loaded. A limit of 120 makes sure not too many projects are
	 * loaded at once, and the page speed is helped by lazy loading images.
	 */
	$args = array(
		'post_type'      => 'jetpack-portfolio',
		'posts_per_page' => '120',
		'paged'          => $paged,
	);
	$project_query = new WP_Query ( $args );
?>


<div class="portfolio-projects" id="portfolio-projects">

	<?php if ( post_type_exists( 'jetpack-portfolio' ) && $project_query -> have_posts() ) : ?>

		<?php lodestar_project_terms(); ?>

		<div class="portfolio-wrapper" id="main">

			<?php while ( $project_query -> have_posts() ) : $project_query -> the_post(); ?>

				<?php get_template_part( 'components/features/portfolio/content', 'portfolio' ); ?>

			<?php endwhile; ?>
		</div><!-- .portfolio-wrapper -->

	<?php endif; ?>
</div><!-- .portfolio-projects -->
