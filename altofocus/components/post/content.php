<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package AltoFocus
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( altofocus_has_post_thumbnail() ) : ?>
		<figure class="post-thumbnail">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail( 'altofocus-thumb-image' ); ?>
			</a>
		</figure>
	<?php endif; ?>

	<header class="entry-header">
		<a href="<?php echo esc_url( get_permalink() ) ?>" class="entry-header-wrap" rel="bookmark">
			<?php the_title( '<span class="entry-title">', '</span>' ); ?>
			<?php
				$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
				if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
					$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
				}

				$time_string = sprintf( $time_string,
					esc_attr( get_the_date( 'c' ) ),
					esc_html( get_the_date() ),
					esc_attr( get_the_modified_date( 'c' ) ),
					esc_html( get_the_modified_date() )
				);

				echo '<span class="posted-on">' . $time_string . '</span>'; // WPCS: XSS OK.
			?>
		</a>
		<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					esc_html__( 'Edit %s', 'altofocus' ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				),
				'<span class="edit-link">',
				'</span>'
			);
		?>
	</header>
</article>
