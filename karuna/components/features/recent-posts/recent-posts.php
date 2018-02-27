<?php
	$recent = new WP_Query( array(
		'posts_per_page'      => 4,
		'no_found_rows'       => true,
		'ignore_sticky_posts' => true,
	) );
?>

<?php if ( $recent->have_posts() ) : ?>
	<div id="front-page-recent-posts" class="recent-posts">
		<div class="recent-posts-wrapper">
			<h2 class="recent-posts-title"><?php echo esc_html_e( 'Recent Posts', 'karuna' ); ?></h2>
			<div class="grid-row">
				<?php
					while ( $recent->have_posts() ) : $recent->the_post();
						 get_template_part( 'components/features/recent-posts/content', 'recent-posts' );
					endwhile;

					wp_reset_postdata();
				?>
			</div>
			<a class="more-recent-posts button" href="<?php echo esc_url( get_permalink( get_option( 'page_for_posts' ) ) ); ?>">
				<?php esc_html_e( 'More Posts', 'karuna' ); ?>
			</a>
		</div>
	</div>
<?php endif;