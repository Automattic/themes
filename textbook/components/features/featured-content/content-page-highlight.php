<?php
/**
 * The template for displaying featured content on the front page
 *
 * @package TextBook
 */

/**
 * Adds a class to the featured page so that,
 * the header image is positioned correctly
 */
$offset_header = '';
if ( ! get_header_image() ) {
	$offset_header = ' offset';
}

// Featured page output.
$featured_page_id = absint( get_theme_mod( 'featured_page' ) );

if ( $featured_page_id ) :

	$featured_page = new WP_Query( array(
		'post_type'      => 'page',
		'page_id'        => $featured_page_id,
		'posts_per_page' => 1,
		'no_found_rows'  => true,
	) );

	if ( $featured_page->have_posts() ) :

	?>
		<div class="featured-page-highlight<?php echo $offset_header; ?>">

			<?php while ( $featured_page->have_posts() ) : $featured_page->the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>

					<div class="entry-content entry-summary">
						<?php
							$continue_reading = sprintf(
								/* translators: %s: Name of current post. */
								wp_kses( __( 'Continue reading %s', 'textbook' ), array( 'span' => array( 'class' => array() ) ) ),
								the_title( '<span class="screen-reader-text">"', '"</span>', false )
							);

							$content = get_the_content();
							$content = strip_shortcodes( $content );
							$content = wp_trim_words( $content, '50' );
							$content .= '<a class="more-link" href="' . esc_url( get_permalink() ) . '">' . $continue_reading . '</a>';

							echo apply_filters( 'the_content', $content );
						?>
					</div>

				</article>

			<?php
				endwhile;
				wp_reset_postdata();
			?>

		</div>
	<?php endif; // end if ( $featured_page->have_posts() )
endif; // end if ( $featured_page_id )
