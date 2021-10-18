<?php
/**
 * REST endpoint for exporting the contents of the Edit Site Page editor.
 *
 * @package gutenberg
 */

function gutenberg_edit_site_get_theme_json_for_export() {
	$child_theme_json = json_decode( file_get_contents( get_stylesheet_directory() . '/theme.json' ), true );
	$child_theme_json_class_instance = new WP_Theme_JSON_Gutenberg( $child_theme_json );
	$user_theme_json = WP_Theme_JSON_Resolver_Gutenberg::get_user_data();
	// Merge the user theme.json into the child theme.json.
	$child_theme_json_class_instance->merge( $user_theme_json );

	// I feel like there should be a function to do this in Gutenberg but I couldn't find it
	function remove_theme_key( $data ) {
		if ( is_array( $data ) ) {
			if ( array_key_exists( 'theme', $data ) ) {
				if ( array_key_exists( 'user', $data ) ) {
					return $data['user'];
				}

				return $data['theme'];
			}
			foreach( $data as $node_name => $node_value  ) {
				$data[ $node_name ] = remove_theme_key( $node_value );
			}
		}

		return $data;
	}

	return remove_theme_key( $child_theme_json_class_instance->get_raw_data() );
}

function blockbase_get_style_css( $theme ) {
	$slug = $theme['slug'];
	$name = $theme['name'];
	$description = $theme['description'];
	$uri = $theme['uri'];
	$author = $theme['author'];
	$author_uri = $theme['author_uri'];

	return "/*
Theme Name: {$name}
Theme URI: {$uri}
Author: {$author}
Author URI: {$author_uri}
Description: {$description}
Requires at least: 5.8
Tested up to: 5.8
Requires PHP: 5.7
Version: 0.0.1
License: GNU General Public License v2 or later
License URI: https://raw.githubusercontent.com/Automattic/themes/trunk/LICENSE
Template: blockbase
Text Domain: {$slug}
Tags:
*/";
}

function blockbase_get_functions_php( $theme ) {
	$slug = $theme['slug'];
	return "<?php
/**
 * Add Editor Styles
 */
function {$slug}_editor_styles() {
	// Enqueue editor styles.
	add_editor_style(
		array(
			'/assets/theme.css',
		)
	);
}
add_action( 'after_setup_theme', '{$slug}_editor_styles' );

/**
 *
 * Enqueue scripts and styles.
 */
function {$slug}_scripts() {
	wp_enqueue_style( '{$slug}-styles', get_stylesheet_directory_uri() . '/assets/theme.css', array( 'blockbase-ponyfill' ), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', '{$slug}_scripts' );";
}

function blockbase_get_theme_css( $theme ) {
	return file_get_contents( get_stylesheet_directory() . '/assets/theme.css' );
}

/**
 * Creates an export of the current templates and
 * template parts from the site editor at the
 * specified path in a ZIP file.
 *
 * @param string $filename path of the ZIP file.
 */
function gutenberg_edit_site_export_theme_create_zip( $filename, $theme ) {
	if ( ! class_exists( 'ZipArchive' ) ) {
		return new WP_Error( 'Zip Export not supported.' );
	}

	$zip = new ZipArchive();
	$zip->open( $filename, ZipArchive::OVERWRITE );
	$zip->addEmptyDir( $theme['slug'] );
	$zip->addEmptyDir( $theme['slug'] . '/block-templates' );
	$zip->addEmptyDir( $theme['slug'] . '/block-template-parts' );

	// Load templates into the zip file.
	$templates = gutenberg_get_block_templates();
	foreach ( $templates as $template ) {
		$template->content = _remove_theme_attribute_from_content( $template->content );

		$zip->addFromString(
			$theme['slug'] . '/block-templates/' . $template->slug . '.html',
			$template->content
		);
	}

	// Load template parts into the zip file.
	$template_parts = gutenberg_get_block_templates( array(), 'wp_template_part' );
	foreach ( $template_parts as $template_part ) {
		$zip->addFromString(
			$theme['slug'] . '/block-template-parts/' . $template_part->slug . '.html',
			$template_part->content
		);
	}

	// Add theme.json.

	// TODO only get child theme settings not the parent.
	$zip->addFromString(
		$theme['slug'] . '/theme.json',
		wp_json_encode( gutenberg_edit_site_get_theme_json_for_export(), JSON_PRETTY_PRINT )
	);

	// Add style.css.
	$zip->addFromString(
		$theme['slug'] . '/style.css',
		blockbase_get_style_css( $theme )
	);

	// Add theme.css.
	// TODO get any CSS that the theme is already using
	$zip->addFromString(
		$theme['slug'] . '/theme.css',
		blockbase_get_theme_css( $theme )
	);

	// Add functions.php.
	$zip->addFromString(
		$theme['slug'] . '/functions.php',
		blockbase_get_functions_php( $theme )
	);

	// Save changes to the zip file.
	$zip->close();
}

/**
 * Output a ZIP file with an export of the current templates
 * and template parts from the site editor, and close the connection.
 */
function gutenberg_edit_site_export_theme( $theme ) {
	$theme['slug'] = str_replace( '-', '_', $theme['slug'] ); // Slugs can't contain -.
	// Create ZIP file in the temporary directory.
	$filename = tempnam( get_temp_dir(), $theme['slug'] );
	gutenberg_edit_site_export_theme_create_zip( $filename, $theme );

	header( 'Content-Type: application/zip' );
	header( 'Content-Disposition: attachment; filename=' . $theme['slug'] . '.zip' );
	header( 'Content-Length: ' . filesize( $filename ) );
	flush();
	echo readfile( $filename );
	die();
}

// In Gutenberg a simialr route is called from the frontend to export template parts
// I've left this in although we aren't using it at the moment, as I think eventually this will become part of Gutenberg.
add_action(
	'rest_api_init',
	function () {
		register_rest_route(
			'__experimental/edit-site/v1',
			'/create-theme',
			array(
				'methods'             => 'GET',
				'callback'            => 'gutenberg_edit_site_export_theme',
				'permission_callback' => function () {
					return current_user_can( 'edit_theme_options' );
				},
			)
		);
	}
);

function create_theme_page() {
	?>
		<div class="wrap">
			<h2>Create Theme</h2>
			<p>Save your current block templates and theme.json settings as a new theme.
			<form method="get" action="/wp-admin/admin.php">
				<label>Theme name<br /><input type="text" name="theme[name]" /></label><br /><br />
				<label>Theme slug<br /><input type="text" name="theme[slug]"/></label><br /><br />
				<label>Theme description<br /><input type="text" name="theme[description]"/></label><br /><br />
				<label>Theme URI<br /><input type="text" name="theme[uri]"/></label><br /><br />
				<label>Author<br /><input type="text" name="theme[author]"/></label><br /><br />
				<label>Author URI<br /><input type="text" name="theme[author_uri]"/></label><br /><br />
				<input type="hidden" name="page" value="create-theme" />
				<input type="submit" value="Create theme" />
			</form>
		</div>
	<?php
}
function blockbase_create_theme_menu() {
	add_menu_page( 'Create theme', 'Create theme', 'edit_theme_options', 'create-theme', 'create_theme_page' );
}

add_action( 'admin_menu', 'blockbase_create_theme_menu' );

function blockbase_save_theme() {
	// I can't work out how to call the API but this works for now.
	if ( ! empty( $_GET['page'] ) && $_GET['page'] === 'create-theme' && ! empty( $_GET['theme'] ) ) {
		gutenberg_edit_site_export_theme( $_GET['theme'] );
	}
}
add_action( 'init', 'blockbase_save_theme');
