<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package TextBook
 */

?>

<article id="post-<?php the_ID(); ?>" tabindex="0" <?php post_class( 'card' ); ?>>
	<header class="entry-header">
		<?php // Hide category text for everything but posts
			if ( 'post' === get_post_type() ) { ?>
		<div class="entry-meta">
			<?php $category = get_the_category();
				$category_count = is_countable( $category ) ? count( $category ) : 0;

				if ( $category && $category_count >= 2 ) {
					$cat_links =  '<a href="' . esc_url( get_permalink() ) . '">' . $category[0]->name.'&hellip;</a>';
				} elseif ( $category ) {
					$cat_links =  '<a href="' . esc_url( get_permalink() ) . '">' . $category[0]->name.'</a>';
				}

				echo '<span class="cat-links">' . $cat_links . '</span>'; ?>
		</div>
		<?php } ?>
		<?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>

		<?php if ( '' != get_the_post_thumbnail() ) :
			$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'textbook-featured-content-image' ); ?>
			<div class="post-thumbnail" style="background-image:url(<?php echo esc_url( $large_image_url[0] ); ?>);"></div>
		<?php endif; ?>
	</header>

	<div class="entry-content">
		<?php // Hide category text for everything but posts
			if ( 'post' === get_post_type() ) { ?>
			<div class="entry-meta">
			<?php // Date
				$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
				if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
					$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
				}

				if ( get_option( 'date_format' ) != 'F j, Y' ) {
					$date_format = esc_html( get_the_date() );
				} else {
					$date_format = '<span class="day">' . esc_html( get_the_date( 'j' ) ) . '</span> <span class="month-year">' . esc_html( get_the_date( 'M Y' ) ) . '</span>';
				}

				$time_string = sprintf( $time_string,
					esc_attr( get_the_date( 'c' ) ),
					$date_format,
					esc_attr( get_the_modified_date( 'c' ) ),
					esc_html( get_the_modified_date() )
				);

				$posted_on = '<a href="' . esc_url( get_permalink() ) . '" tabindex="-1" rel="bookmark">' . $time_string . '</a>';

				echo '<span class="posted-on">' . $posted_on . '</span>'; ?>
			</div>
		<?php } ?>
		<?php
			// Custom excerpt and read more link
			$content = get_the_content();
			$content = strip_shortcodes( $content );
			$content = wp_trim_words( $content, '30' );
			echo '<a href="' . esc_url( get_permalink() ) . '" tabindex="-1" rel="bookmark"><span>' . $content . '</span></a>';
			?>

		<?php edit_post_link( esc_html__( 'Edit', 'textbook' ), '<span class="edit-link">', '</span>'); ?>
	</div>
	<?php // A star to sticky posts
		if ( is_sticky() ) {?>
	<svg class="star" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" xml:space="preserve">
		<g id="Polygon_1_3_"><g>
		<polygon points="14,7.01 9.41,7.018 8,2.833 6.59,7.018 2,7.01 5.718,9.588 4.292,13.768 8,11.175 11.708,13.768 10.282,9.588"/>
		</g></g>
	</svg>
	<?php } ?>
</article><!-- #post-## -->
