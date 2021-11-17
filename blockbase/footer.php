<footer class="wp-block-template-part site-footer-container">
		<?php
			if ( function_exists( 'block_template_part' ) ) {
				echo block_template_part( 'footer' );
			} else {
				echo gutenberg_block_template_part( 'footer' );
			}
		?>
	</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
