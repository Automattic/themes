<?php
/**
 * Style Packs core functionality
 */

class Style_Packs_Core {

	var $config;
	var $theme_version;
	var $style;

	static $instance;

	public function __construct( $config=array() ) {
		self::$instance = $this;
		if ( is_array( $config['styles'] ) && ! empty( $config['styles'] ) ) {
			add_action( 'after_setup_theme', array( $this, 'init' ) );
			add_action( 'customize_register', array( $this, 'customize_register' ) );
			add_action( 'customize_preview_init', array( $this, 'customize_preview' ) );
			add_filter( 'body_class', array( $this, 'add_body_class' ) );
			$this->theme_version = wp_get_theme()->get( 'Version' );
			$this->config = wp_parse_args( $config, array(
				'body_class_format'     => 'style-pack-%s',
				'styles_directory'      => 'styles',
				'js_directory'          => 'js',
				'style_thumbs'          => array(),
				'style_descriptions'    => array(),
				'default_headers'       => array(),
				'fonts'                 => array(),
			) );
			if ( ! empty( $this->config['default_headers'] ) ) {
				add_filter( 'theme_mod_header_image', array( $this, 'header_image_mod_filter' ), 30 );
				add_action( 'after_setup_theme', array( $this, 'setup_default_header_images' ) );
			}
		}
	}

	public function init() {
		$this->style = get_theme_mod( 'active_style_pack' );
		if ( is_customize_preview() ) {
			$preview_style = $this->get_preview_style();
			if ( ! empty( $preview_style ) ) {
				$this->style = $preview_style;
			}
		} else if ( ! empty( $this->style ) ) {
			add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_fonts' ), 20 );
			add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_style' ), 20 );
		}
	}

	public function get_preview_style() {
		if ( is_customize_preview() ) {
			global $wp_customize;
			$data = $wp_customize->changeset_data();
			$theme = wp_get_theme();
			$mod = sprintf( '%s::active_style_pack', $theme->get_template() );
			if ( array_key_exists( $mod, $data ) && is_array( $data[ $mod ] ) ) {
				$mod_data = $data[ $mod ];
				if ( isset( $mod_data['type'] ) && 'theme_mod' === $mod_data['type'] ) {
					return $mod_data['value'];
				}
			}
		}
		return $this->style;
	}

	public function enqueue_style() {
		if ( array_key_exists( $this->style, $this->config['styles'] ) ) {
			if ( 'default' === $this->style ) {
				return;
			}
			$stylesheet = $this->get_stylesheet_uri( $this->style );
			wp_enqueue_style( $this->get_style_pack_id( $this->style ), $stylesheet, array(), $this->theme_version );
		}
	}

	private function get_stylesheet_uri( $style ) {
		return sprintf( '%s/%s/%s.css', get_template_directory_uri(), $this->config['styles_directory'], $style );
	}

	private function get_style_pack_id( $style ) {
		return sprintf( '%s-style-pack', $style );
	}

	private function get_font_id( $name ) {
		return sanitize_title( $name );
	}

	public function enqueue_fonts() {
		if ( is_array( $this->config['fonts'] ) && array_key_exists( $this->style, $this->config['fonts'] ) ) {
			$fonts = $this->config['fonts'][ $this->style ];
			foreach( $fonts as $font => $url ) {
				wp_enqueue_style( $this->get_font_id( $font ), $url, array(), null );
			}
		}
	}

	public function customize_register( $wp_customize ) {
		$wp_customize->add_section( 'style_pack_theme_options', array(
			'title'    => esc_html__( 'Style Packs', 'style-packs-theme' )
		) );

		$wp_customize->add_setting( 'active_style_pack', array(
			'sanitize_callback' => array( $this, 'sanitize_style_pack_setting' ),
			'transport'         => 'postMessage',
			'default'           => 'default',
		) );

		$pack_choices = array_merge( array(
			'default' => esc_html__( 'Default', 'style-packs-theme' ),
		), $this->config['styles'] );

		$pack_control_options = array(
			'label'    => esc_html__( 'Active Style', 'style-packs-theme' ),
			'section'  => 'style_pack_theme_options',
			'choices'  => $pack_choices,
		);

		if ( $this->has_thumbs_config() ) {
			$pack_control_options['choices'] = $this->style_pack_customizer_thumbnails( $pack_choices );
			$wp_customize->add_control( new Style_Pack_Customize_Control_Radio_Image( $wp_customize, 'active_style_pack', $pack_control_options ) );
		} else {
			$pack_control_options['type'] = 'radio';
			$wp_customize->add_control( 'active_style_pack', $pack_control_options );
		}
	}

	public function has_thumbs_config() {
		$config = $this->config['style_thumbs'];
		return ! empty( $config ) && isset( $config['width'] ) && isset( $config['height'] );
	}

	public function style_pack_customizer_thumbnails( $choices ) {
		$config = $this->config['style_thumbs'];
		if ( ! empty( $config ) && isset( $config['width'] ) && isset( $config['height'] ) ) {
			$base = sprintf( '%s/%s', get_template_directory(), $this->config['styles_directory'] );
			$ext_regex = '%\.(jpe?g|png)$%i';
			$files = preg_grep( $ext_regex, scandir( $base ) );
			if ( ! empty( $files ) ) {
				foreach ( $files as $file ) {
					$id = preg_replace( $ext_regex, '', $file );
					if ( array_key_exists( $id, $choices ) ) {
						$uri = sprintf( '%s/%s/%s', get_stylesheet_directory_uri(), $this->config['styles_directory'], $file );
						$choices[ $id ] = sprintf( '<img alt="%s" title="%s" width="%d" height="%d" src="%s" />', esc_attr( $id ), esc_attr( $choices[ $id ] ), esc_attr( $config['width'] ), esc_attr( $config['height'] ), esc_url( $uri ) );
					}
				}
			}
		}
		return $choices;
	}

	public function sanitize_style_pack_setting( $input ) {
		if ( ! in_array( $input, array_keys( $this->config['styles'] ) ) ) {
			$input = 'default';
		}
		return $input;
	}

	public function customize_preview() {
		$customizer_js_uri = sprintf( '%s/%s/style-packs-customizer.js', get_template_directory_uri(), $this->config['js_directory'] );
		wp_enqueue_script( 'style-packs-customizer', $customizer_js_uri, array( 'customize-preview' ), $this->theme_version, true );

		$style_pack_stylesheets = array();
		$style_pack_fonts = array();

		foreach ( array_keys( $this->config['styles'] ) as $style ) {
			$style_data = $style_pack_stylesheets[ $style ] = array(
				'id'  => sprintf( '%s-css', $this->get_style_pack_id( $style ) ),
				'uri' => $this->get_stylesheet_uri( $style ),
			);
		}

		foreach( $this->config['fonts'] as $style => $fonts ) {
			if ( ! empty( $fonts ) ) {
				$style_pack_fonts[ $style ] = array();
				foreach( $fonts as $font => $uri ) {
					$style_pack_fonts[ $style ][ sprintf( '%s-css', $this->get_font_id( $font ) ) ] = $uri;
				}
			}
		}

		$style_packs_data = array(
			'body_class_format' => $this->config['body_class_format'],
			'preview_style' 		=> $this->get_preview_style(),
			'styles'            => $style_pack_stylesheets,
			'fonts'             => $style_pack_fonts,
		);

		wp_localize_script( 'style-packs-customizer', 'stylePacksData', $style_packs_data );
	}

	public function add_body_class( $classes ) {
		$style = 'default';
		if ( is_customize_preview() ) {
			$preview_style = $this->get_preview_style();
			if ( ! empty( $preview_style ) ) {
				$style = $preview_style;
			}
		} else if ( ! empty( $this->style ) ) {
			$style = $this->style;
		}
		$classes[] = sprintf( $this->config['body_class_format'], $style );
		return $classes;
	}

	public function header_image_mod_filter( $url ) {
		if ( ! is_customize_preview() ) {
			if ( is_string( $url ) && 'default' !== $this->style && isset( $this->config['default_headers'][ $this->style ] ) ) {
				$default_header = sprintf( get_theme_support( 'custom-header', 'default-image' ), get_template_directory_uri(), get_stylesheet_directory_uri() );
				if ( empty( $default_header ) || $url === $default_header ) {
					$url = $this->get_style_header_image_url( $this->style );
				}
			}
		}
		return $url;
	}

	public function get_style_header_image_url( $style ) {
		if ( array_key_exists( $style, $this->config['default_headers'] ) && ! empty( $this->config['default_headers'][ $style ] ) ) {
			return sprintf( '%s/%s/%s', get_stylesheet_directory_uri(), $this->config['styles_directory'], $this->config['default_headers'][ $style ] );
		} else {
			$default_header = get_theme_support( 'custom-header', 'default-image' );
			if ( ! empty( $default_header ) ) {
				return sprintf( $default_header, get_template_directory_uri(), get_stylesheet_directory_uri() );
			}
		}
		return null;
	}

	public function setup_default_header_images() {
		$headers = array();
		foreach( $this->config['default_headers'] as $style => $image ) {
			$image = sprintf( '%%s/%s/%s', $this->config['styles_directory'], $image );
			$headers[ sprintf( '%s-style-header', $style ) ] = array(
				'url'           => $image,
				'thumbnail_url' => $image,
				'description'   => sprintf( __( '%s Header Image', 'style-packs-theme' ), $this->config['styles'][ $style ]),
			);
		}
		register_default_headers( $headers );
	}

	static function get_description( $style ) {
		if ( array_key_exists( $style, self::$instance->config['style_descriptions'] ) ) {
			return self::$instance->config['style_descriptions'][ $style ];
		}
		return null;
	}

}

if ( class_exists( 'WP_Customize_Control' ) ) :

class Style_Pack_Customize_Control_Radio_Image extends WP_Customize_Control {

	public $type = 'style-pack-option';

	public function render_content() { ?>
		<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
		<?php
		$config = Style_Packs_Core::$instance->config;
		foreach( $this->choices as $key => $val ) :
			$name = sprintf( '_customize-style-pack-option-%s', $this->id );
			$desc = Style_Packs_Core::get_description( $key );
			$has_thumb = preg_match( '%^<img%', $val ); ?>
		<label<?php echo ! $has_thumb ? ' class="style-pack-radio__no-thumb"' : ''; ?>>
			<?php if ( $has_thumb ) : ?>
			<input type="radio" name="<?php echo esc_attr( $name ); ?>" value="<?php echo esc_attr( $key ); ?>" <?php $this->link(); checked( $this->value() ); ?>>
				<?php echo wp_kses( $val, array( 'img' => array( 'alt' => array(), 'title' => array(), 'width' => array(), 'height' => array(), 'src' => array() ) ) ); ?><br>
		<?php else: ?>
			<input type="radio" name="<?php echo esc_attr( $name ); ?>" value="<?php echo esc_attr( $key ); ?>" <?php $this->link(); checked( $this->value() ); ?>> <?php echo wp_kses( $val, array() ); ?><br>
		<?php endif; ?>
		<?php
		if ( ! empty( $desc ) ) :
				if ( 'default' === $key ) {
					if ( array_key_exists( $key, $config['styles'] ) ) {
						$title = $config['styles'][ $key ];
					}  else {
						$title = esc_html__( 'Default' );
					}
				} else {
					$title = $config['styles'][ $key ];
				}
		?>
			<p class="style-pack-description">
				<strong><?php echo esc_html( $title ) ?></strong><br/>
				<span><?php echo wp_kses( $desc, array() ); ?></span>
			</p>
		<?php endif; ?>
		</label>
		<?php
		endforeach;
	}

	public function enqueue() {
		add_action( 'customize_controls_print_styles', array( $this, 'print_styles' ) );
	}

	public function print_styles() { ?>
		<style type="text/css">
			.customize-control-style-pack-option label input[type="radio"] + img {
				vertical-align: middle;
				display: inline-block;
				margin: 0.5em 0;
				line-height: 1;
			}
			.customize-control-style-pack-option label input[type="radio"]:checked + img {
				outline: solid 6px rgba(0,0,0,0.12);
			}
			.customize-control-style-pack-option label.style-pack-radio__no-thumb {
				margin: 1.1em 0;
				display: block;
			}
			.customize-control-style-pack-option label.style-pack-radio__no-thumb input + .style-pack-description {
				margin-top: -1.5em;
			}
			.customize-control-style-pack-option .style-pack-description {
				padding-left: 1.8em;
				margin-top: 0.2em;
				max-width: 250px;
			}
			@media ( max-width: 780px ) {
				.customize-control-style-pack-option .style-pack-description {
					padding-left: 2.4em;
				}
			}
		</style>
		<?php
	}

}

endif;
