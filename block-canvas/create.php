<?php
/**
 * Generates a theme based on the this theme.
 * Simplified version of https://github.com/Automattic/underscores.me/blob/master/plugins/underscoresme-generator/underscoresme-generator.php
 */

class Generate_Theme {

	protected $theme;
	protected $old_themename = 'Block Canvas';
	protected $old_themeslug = 'block-canvas';

	function __construct() {

		$this->theme = array(
			'name'        => $this->old_themename,
			'slug'        => $this->old_themeslug,
			'uri'         => 'https://github.com/wordpress/theme-experiments/',
			'author'      => 'Kjell Reigstad',
			'description' => 'The base for a block-based theme.',
		);
		$this->get_theme_info();
		$this->create_folder();
	}

	function get_theme_info() {

		echo "Please provide the following information: ";
		echo "\n";
		echo "Theme name: ";
		$input = fopen ("php://stdin","r");
		$this->theme['name'] = trim(fgets($input));
		if($this->theme['name'] === ''){
			echo "ABORTING!\n";
			exit;
		}
		$this->theme['slug'] = $this->sanitize_title_with_dashes($this->theme['name']);
		$this->theme['functions_slug'] = str_replace( '-', '_', $this->theme['slug'] );

		echo "Description: ";
		$input = fopen ("php://stdin","r");
		$this->theme['description'] = trim(fgets($input));

		echo "Author: ";
		$input = fopen ("php://stdin","r");
		$this->theme['author'] = trim(fgets($input));

		echo "Theme URI: ";
		$input = fopen ("php://stdin","r");
		$this->theme['uri'] = trim(fgets($input));
	}

	function create_folder() {

		$dir = '../' . $this->theme['slug'];

		if( is_dir($dir) === false ) {
			
			mkdir($dir);
			$prototype_dir = './';
			$exclude_files = array( 'create.php', '.travis.yml', 'codesniffer.ruleset.xml', '.jscsrc', '.jshintignore', 'README.md', 'CONTRIBUTING.md', '.git', '.svn', '.DS_Store', '.gitignore', '.', '..' );
			$exclude_directories = array( '.git', '.svn', '.github', '.', '..' );

			foreach ( $iterator = new \RecursiveIteratorIterator( new \RecursiveDirectoryIterator($prototype_dir, \RecursiveDirectoryIterator::SKIP_DOTS), \RecursiveIteratorIterator::SELF_FIRST) as $item ) {
				if ( in_array( $iterator->getSubPathName(), $exclude_files ) || in_array( $iterator->getSubPathName(), $exclude_directories ) ){
					continue;
				}

				if ($item->isDir()) {
				   	mkdir($dir . DIRECTORY_SEPARATOR . $iterator->getSubPathName());
				} else {
					$contents = file_get_contents( $prototype_dir . $iterator->getSubPathName() );
					$file = fopen( $dir . '/' . $iterator->getSubPathName(),"w" );
					fwrite( $file, $this->replace_theme_name($contents, $iterator->getSubPathName()) );
					fclose( $file );
				}
			}
			echo "\n";
			echo "Your new theme is ready!\n";
		} else {
			echo "\n";
			echo "This theme already exists\n";
		}
	}

	function replace_theme_name($contents, $filename) {

		// Replace only text files, skip png's and other stuff.
		$valid_extensions = array( 'php', 'css', 'scss', 'js', 'txt', 'html' );
		$valid_extensions_regex = implode( '|', $valid_extensions );
		if ( ! preg_match( "/\.({$valid_extensions_regex})$/", $filename ) ) {
			return $contents;
		}
		$theme_slug_underscore = str_replace( '-', '_', $this->old_themeslug );
		
		
		// Special treatment for style.css
		if ( 'style.css' === $filename ) {
			$theme_headers = array(
				'Theme Name'  => $this->theme['name'],
				'Text Domain' => $this->theme['slug'],
				'Theme URI' => $this->theme['uri'],
				'Description' => $this->theme['description'],
				'Author' => $this->theme['author'],
			);

			foreach ( $theme_headers as $key => $value ) {
				$contents = preg_replace( '/(' . preg_quote( $key ) . ':)\s?(.+)/', '\\1 ' . $value, $contents );
			}

			$contents = str_replace( $this->old_themename, $this->theme['name'], $contents );
			return $contents;
		}

		// Special treatment for functions.php
		if ( 'functions.php' === $filename ) {

			$function_names = array(
				'wp_enqueue_style',
				'wp_enqueue_script'
			);

			foreach ( $function_names as $function ) {
				$contents = preg_replace('/('.preg_quote($function).'[ ]?\([ ]?(?:\'|"))('.preg_quote($theme_slug_underscore).')/', '$1'.$this->theme['slug'], $contents);
			}

			$contents = str_replace( $theme_slug_underscore, $this->theme['functions_slug'], $contents );
			$contents = str_replace( $this->old_themeslug, $this->theme['functions_slug'], $contents );
			$contents = str_replace( $this->old_themename, $this->theme['name'], $contents );
			return $contents;
		}

		// Special treatment for php files
		else if ( 'php' === substr($filename, strrpos($filename, '.') + 1) ) {
			$contents = str_replace( $theme_slug_underscore, $this->theme['slug'], $contents );
			$contents = str_replace( $this->old_themeslug, $this->theme['slug'], $contents );
			return $contents;
		}

		// Special treatment for templates
		else if ( 'html' === substr($filename, strrpos($filename, '.') + 1) ) {
			$contents = str_replace( $theme_slug_underscore, $this->theme['slug'], $contents );
			$contents = str_replace( $this->old_themeslug, $this->theme['slug'], $contents );
			return $contents;
		}

		return $contents;
	}

	function sanitize_title_with_dashes( $title, $raw_title = '', $context = 'display' ) {
		$title = strip_tags( $title );
		// Preserve escaped octets.
		$title = preg_replace( '|%([a-fA-F0-9][a-fA-F0-9])|', '---$1---', $title );
		// Remove percent signs that are not part of an octet.
		$title = str_replace( '%', '', $title );
		// Restore octets.
		$title = preg_replace( '|---([a-fA-F0-9][a-fA-F0-9])---|', '%$1', $title );
	 
		$title = strtolower( $title );
	 
		if ( 'save' === $context ) {
			// Convert &nbsp, &ndash, and &mdash to hyphens.
			$title = str_replace( array( '%c2%a0', '%e2%80%93', '%e2%80%94' ), '-', $title );
			// Convert &nbsp, &ndash, and &mdash HTML entities to hyphens.
			$title = str_replace( array( '&nbsp;', '&#160;', '&ndash;', '&#8211;', '&mdash;', '&#8212;' ), '-', $title );
			// Convert forward slash to hyphen.
			$title = str_replace( '/', '-', $title );
	 
			// Strip these characters entirely.
			$title = str_replace(
				array(
					// Soft hyphens.
					'%c2%ad',
					// &iexcl and &iquest.
					'%c2%a1',
					'%c2%bf',
					// Angle quotes.
					'%c2%ab',
					'%c2%bb',
					'%e2%80%b9',
					'%e2%80%ba',
					// Curly quotes.
					'%e2%80%98',
					'%e2%80%99',
					'%e2%80%9c',
					'%e2%80%9d',
					'%e2%80%9a',
					'%e2%80%9b',
					'%e2%80%9e',
					'%e2%80%9f',
					// Bullet.
					'%e2%80%a2',
					// &copy, &reg, &deg, &hellip, and &trade.
					'%c2%a9',
					'%c2%ae',
					'%c2%b0',
					'%e2%80%a6',
					'%e2%84%a2',
					// Acute accents.
					'%c2%b4',
					'%cb%8a',
					'%cc%81',
					'%cd%81',
					// Grave accent, macron, caron.
					'%cc%80',
					'%cc%84',
					'%cc%8c',
				),
				'',
				$title
			);
	 
			// Convert &times to 'x'.
			$title = str_replace( '%c3%97', 'x', $title );
		}
	 
		// Kill entities.
		$title = preg_replace( '/&.+?;/', '', $title );
		$title = str_replace( '.', '-', $title );
	 
		$title = preg_replace( '/[^%a-z0-9 _-]/', '', $title );
		$title = preg_replace( '/\s+/', '-', $title );
		$title = preg_replace( '|-+|', '-', $title );
		$title = trim( $title, '-' );
	 
		return $title;
	}
}

new Generate_Theme;
?>