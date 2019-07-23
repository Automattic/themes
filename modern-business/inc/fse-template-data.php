<?php
/**
 * Template data inserter file.
 *
 * @package full-site-editing
 */

/**
 * Class A8C_WP_Template_Data_Inserter
 */
class A8C_WP_Template_Data_Inserter {
	/**
	 * This function will be called on plugin activation hook.
	 */
	public function insert_default_template_data() {
		$current_theme_name = get_option( 'stylesheet' );
		/**
		 * This site option will be used to indicate that template data has already been
		 * inserted for this theme, in order to prevent this functionality from running
		 * more than once.
		 */
		$fse_template_data_option = $current_theme_name . '-fse-template-data';

		if ( get_option( $fse_template_data_option ) ) {
			/*
			 * Bail here to prevent inserting the FSE data twice for any given theme.
			 * Multiple themes will still be able to insert different template parts.
			 */
			return;
		}

		$this->register_template_post_types();

		$header_id = wp_insert_post(
			[
				'post_title'     => 'Header',
				'post_content'   => $this->get_header_content(),
				'post_status'    => 'publish',
				'post_type'      => 'wp_template_part',
				'comment_status' => 'closed',
				'ping_status'    => 'closed',
			]
		);

		if ( ! term_exists( "$current_theme_name-header", 'wp_template_part_type' ) ) {
			wp_insert_term( "$current_theme_name-header", 'wp_template_part_type' );
		}

		wp_set_object_terms( $header_id, "$current_theme_name-header", 'wp_template_part_type' );

		$footer_id = wp_insert_post(
			[
				'post_title'     => 'Footer',
				'post_content'   => $this->get_footer_content(),
				'post_status'    => 'publish',
				'post_type'      => 'wp_template_part',
				'comment_status' => 'closed',
				'ping_status'    => 'closed',
			]
		);

		if ( ! term_exists( "$current_theme_name-footer", 'wp_template_part_type' ) ) {
			wp_insert_term( "$current_theme_name-footer", 'wp_template_part_type' );
		}

		wp_set_object_terms( $footer_id, "$current_theme_name-footer", 'wp_template_part_type' );

		$page_template_id = wp_insert_post(
			[
				'post_title'     => 'Page Template',
				'post_content'   => $this->get_template_content( $header_id, $footer_id ),
				'post_status'    => 'publish',
				'post_type'      => 'wp_template',
				'comment_status' => 'closed',
				'ping_status'    => 'closed',
			]
		);

		if ( ! term_exists( "$current_theme_name-page-template", 'wp_template_type' ) ) {
			wp_insert_term( "$current_theme_name-page-template", 'wp_template_type' );
		}

		wp_set_object_terms( $page_template_id, "$current_theme_name-page-template", 'wp_template_type' );

		add_option( $fse_template_data_option, true );
	}

	/**
	 * Returns default header template part content.
	 *
	 * @return string
	 */
	public function get_header_content() {
		// TODO: replace with header blocks once they are ready.
		return '<!-- wp:group {"className":"site-header site-branding"} -->' .
		       '<div class="wp-block-group site-header site-branding">' .
		       '<div class="wp-block-group__inner-container">' .
		       '<!-- wp:a8c/site-description /-->' .
		       '<!-- wp:a8c/site-title /-->' .
		       '<!-- wp:a8c/navigation-menu /-->' .
		       '</div></div>' .
		       '<!-- /wp:group -->';
	}

	/**
	 * Returns default footer template part content.
	 *
	 * @return string
	 */
	public function get_footer_content() {
		return '<!-- wp:group {"align":"full","className":"site-footer"} -->' .
			   '<div class="wp-block-group alignfull site-footer">' .
			   '<div class="wp-block-group__inner-container">' .
			   '<!-- wp:separator {"className":"is-style-default"} -->' .
			   '<hr class="wp-block-separator is-style-default"/>' .
			   '<!-- /wp:separator -->' .
			   '<!-- wp:a8c/navigation-menu /-->' .
			   '</div>' .
			   '</div>' .
			   '<!-- /wp:group -->';
	}

	/**
	 * Returns default page template content.
	 *
	 * @param int $header_id ID of referenced header template part CPT.
	 * @param int $footer_id ID of referenced footer template part CPT.
	 *
	 * @return string
	 */
	public function get_template_content( $header_id, $footer_id ) {
		return "<!-- wp:a8c/template {\"templateId\":$header_id} /-->" .
		       '<!-- wp:a8c/post-content /-->' .
		       "<!-- wp:a8c/template {\"templateId\":$footer_id} /-->";
	}

	/**
	 * Register post types.
	 */
	public function register_template_post_types() {
		register_post_type(
			'wp_template',
			array(
				'labels'                => array(
					'name'                     => _x( 'Templates', 'post type general name', 'full-site-editing' ),
					'singular_name'            => _x( 'Template', 'post type singular name', 'full-site-editing' ),
					'menu_name'                => _x( 'Templates', 'admin menu', 'full-site-editing' ),
					'name_admin_bar'           => _x( 'Template', 'add new on admin bar', 'full-site-editing' ),
					'add_new'                  => _x( 'Add New', 'Template', 'full-site-editing' ),
					'add_new_item'             => __( 'Add New Template', 'full-site-editing' ),
					'new_item'                 => __( 'New Template', 'full-site-editing' ),
					'edit_item'                => __( 'Edit Template', 'full-site-editing' ),
					'view_item'                => __( 'View Template', 'full-site-editing' ),
					'all_items'                => __( 'All Templates', 'full-site-editing' ),
					'search_items'             => __( 'Search Templates', 'full-site-editing' ),
					'not_found'                => __( 'No templates found.', 'full-site-editing' ),
					'not_found_in_trash'       => __( 'No templates found in Trash.', 'full-site-editing' ),
					'filter_items_list'        => __( 'Filter templates list', 'full-site-editing' ),
					'items_list_navigation'    => __( 'Templates list navigation', 'full-site-editing' ),
					'items_list'               => __( 'Templates list', 'full-site-editing' ),
					'item_published'           => __( 'Template published.', 'full-site-editing' ),
					'item_published_privately' => __( 'Template published privately.', 'full-site-editing' ),
					'item_reverted_to_draft'   => __( 'Template reverted to draft.', 'full-site-editing' ),
					'item_scheduled'           => __( 'Template scheduled.', 'full-site-editing' ),
					'item_updated'             => __( 'Template updated.', 'full-site-editing' ),
				),
				'menu_icon'             => 'dashicons-layout',
				'public'                => false,
				'show_ui'               => true,
				'show_in_menu'          => true,
				'rewrite'               => false,
				'show_in_rest'          => true,
				'rest_base'             => 'templates',
				'rest_controller_class' => 'A8C_REST_Templates_Controller',
				'capability_type'       => 'template',
				'capabilities'          => array(
					// You need to be able to edit posts, in order to read templates in their raw form.
					'read'                   => 'edit_posts',
					// You need to be able to customize, in order to create templates.
					'create_posts'           => 'edit_theme_options',
					'edit_posts'             => 'edit_theme_options',
					'delete_posts'           => 'edit_theme_options',
					'edit_published_posts'   => 'edit_theme_options',
					'delete_published_posts' => 'edit_theme_options',
					'edit_others_posts'      => 'edit_theme_options',
					'delete_others_posts'    => 'edit_theme_options',
					'publish_posts'          => 'edit_theme_options',
				),
				'map_meta_cap'          => true,
				'supports'              => array(
					'title',
					'editor',
				),
			)
		);

		register_post_type(
			'wp_template_part',
			array(
				'labels'                => array(
					'name'                     => _x( 'Template Parts', 'post type general name', 'full-site-editing' ),
					'singular_name'            => _x( 'Template Part', 'post type singular name', 'full-site-editing' ),
					'menu_name'                => _x( 'Template Parts', 'admin menu', 'full-site-editing' ),
					'name_admin_bar'           => _x( 'Template Part', 'add new on admin bar', 'full-site-editing' ),
					'add_new'                  => _x( 'Add New', 'Template Part', 'full-site-editing' ),
					'add_new_item'             => __( 'Add New Template Part', 'full-site-editing' ),
					'new_item'                 => __( 'New Template Part', 'full-site-editing' ),
					'edit_item'                => __( 'Edit Template Part', 'full-site-editing' ),
					'view_item'                => __( 'View Template Part', 'full-site-editing' ),
					'all_items'                => __( 'All Template Parts', 'full-site-editing' ),
					'search_items'             => __( 'Search Template Parts', 'full-site-editing' ),
					'not_found'                => __( 'No template parts found.', 'full-site-editing' ),
					'not_found_in_trash'       => __( 'No template parts found in Trash.', 'full-site-editing' ),
					'filter_items_list'        => __( 'Filter template parts list', 'full-site-editing' ),
					'items_list_navigation'    => __( 'Template parts list navigation', 'full-site-editing' ),
					'items_list'               => __( 'Template parts list', 'full-site-editing' ),
					'item_published'           => __( 'Template part published.', 'full-site-editing' ),
					'item_published_privately' => __( 'Template part published privately.', 'full-site-editing' ),
					'item_reverted_to_draft'   => __( 'Template part reverted to draft.', 'full-site-editing' ),
					'item_scheduled'           => __( 'Template part scheduled.', 'full-site-editing' ),
					'item_updated'             => __( 'Template part updated.', 'full-site-editing' ),
				),
				'menu_icon'             => 'dashicons-layout',
				'public'                => false,
				'show_ui'               => true,
				'show_in_menu'          => true,
				'rewrite'               => false,
				'show_in_rest'          => true,
				'rest_base'             => 'template_parts',
				'rest_controller_class' => 'A8C_REST_Templates_Controller',
				'capability_type'       => 'template_part',
				'capabilities'          => array(
					// You need to be able to edit posts, in order to read templates in their raw form.
					'read'                   => 'edit_posts',
					// You need to be able to customize, in order to create templates.
					'create_posts'           => 'edit_theme_options',
					'edit_posts'             => 'edit_theme_options',
					'delete_posts'           => 'edit_theme_options',
					'edit_published_posts'   => 'edit_theme_options',
					'delete_published_posts' => 'edit_theme_options',
					'edit_others_posts'      => 'edit_theme_options',
					'delete_others_posts'    => 'edit_theme_options',
					'publish_posts'          => 'edit_theme_options',
				),
				'map_meta_cap'          => true,
				'supports'              => array(
					'title',
					'editor',
				),
			)
		);

		register_taxonomy(
			'wp_template_type',
			'wp_template',
			array(
				'labels'             => array(
					'name'              => _x( 'Template Types', 'taxonomy general name', 'full-site-editing' ),
					'singular_name'     => _x( 'Template Type', 'taxonomy singular name', 'full-site-editing' ),
					'menu_name'         => _x( 'Template Types', 'admin menu', 'full-site-editing' ),
					'all_items'         => __( 'All Template Types', 'full-site-editing' ),
					'edit_item'         => __( 'Edit Template Type', 'full-site-editing' ),
					'view_item'         => __( 'View Template Type', 'full-site-editing' ),
					'update_item'       => __( 'Update Template Type', 'full-site-editing' ),
					'add_new_item'      => __( 'Add New Template Type', 'full-site-editing' ),
					'new_item_name'     => __( 'New Template Type', 'full-site-editing' ),
					'parent_item'       => __( 'Parent Template Type', 'full-site-editing' ),
					'parent_item_colon' => __( 'Parent Template Type:', 'full-site-editing' ),
					'search_items'      => __( 'Search Template Types', 'full-site-editing' ),
					'not_found'         => __( 'No template types found.', 'full-site-editing' ),
					'back_to_items'     => __( 'Back to template types', 'full-site-editing' ),
				),
				'public'             => false,
				'publicly_queryable' => true,
				'show_ui'            => true,
				'show_in_menu'       => false,
				'show_in_nav_menu'   => false,
				'show_in_rest'       => true,
				'rest_base'          => 'template_types',
				'show_tagcloud'      => false,
				'show_admin_column'  => true,
				'hierarchical'       => true,
				'rewrite'            => false,
				'capabilities'       => array(
					'manage_terms' => 'edit_theme_options',
					'edit_terms'   => 'edit_theme_options',
					'delete_terms' => 'edit_theme_options',
					'assign_terms' => 'edit_theme_options',
				),
			)
		);

		register_taxonomy(
			'wp_template_part_type',
			'wp_template_part',
			array(
				'labels'             => array(
					'name'              => _x( 'Template Part Types', 'taxonomy general name', 'full-site-editing' ),
					'singular_name'     => _x( 'Template Part Type', 'taxonomy singular name', 'full-site-editing' ),
					'menu_name'         => _x( 'Template Part Types', 'admin menu', 'full-site-editing' ),
					'all_items'         => __( 'All Template Part Types', 'full-site-editing' ),
					'edit_item'         => __( 'Edit Template Part Type', 'full-site-editing' ),
					'view_item'         => __( 'View Template Part Type', 'full-site-editing' ),
					'update_item'       => __( 'Update Template Part Type', 'full-site-editing' ),
					'add_new_item'      => __( 'Add New Template Part Type', 'full-site-editing' ),
					'new_item_name'     => __( 'New Template Part Type', 'full-site-editing' ),
					'parent_item'       => __( 'Parent Template Part Type', 'full-site-editing' ),
					'parent_item_colon' => __( 'Parent Template Part Type:', 'full-site-editing' ),
					'search_items'      => __( 'Search Template Part Types', 'full-site-editing' ),
					'not_found'         => __( 'No template part types found.', 'full-site-editing' ),
					'back_to_items'     => __( 'Back to template part types', 'full-site-editing' ),
				),
				'public'             => false,
				'publicly_queryable' => true,
				'show_ui'            => true,
				'show_in_menu'       => false,
				'show_in_nav_menu'   => false,
				'show_in_rest'       => true,
				'rest_base'          => 'template_part_types',
				'show_tagcloud'      => false,
				'show_admin_column'  => true,
				'hierarchical'       => true,
				'rewrite'            => false,
				'capabilities'       => array(
					'manage_terms' => 'edit_theme_options',
					'edit_terms'   => 'edit_theme_options',
					'delete_terms' => 'edit_theme_options',
					'assign_terms' => 'edit_theme_options',
				),
			)
		);
	}
}
