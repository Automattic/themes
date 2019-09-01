<?php

function varia_get_navigation_menu_block( $menu ) {
     ?>
    <nav class="main-navigation wp-block-a8c-navigation-menu">
		<input type="checkbox" role="button" aria-haspopup="true" id="toggle" class="hide-visually">
		<label for="toggle" id="toggle-menu" class="button">
			<?php esc_html_e( 'Menu', 'full-site-editing' ); ?>
			<span class="dropdown-icon open">+</span>
			<span class="dropdown-icon close">&times;</span>
			<span class="hide-visually expanded-text"><?php esc_html_e( 'expanded', 'full-site-editing' ); ?></span>
			<span class="hide-visually collapsed-text"><?php esc_html_e( 'collapsed', 'full-site-editing' ); ?></span>
		</label>
		<div class="menu-primary-container">
			<?php echo $menu ?>
		</div>
    </nav>
    <?php;
}