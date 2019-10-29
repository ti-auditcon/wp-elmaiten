<?php
/*
Plugin Name: Nature Boutique Metaboxes
Plugin URI:
Description: Plugin que habilita los metaboxes del sitio web como la posibilidad de agregar campos a los post types.
Version: 0.1.0
Author: asomic
Author URI: https://asomic.com
Text Domain: nboutique
*/


// Características Servicios
function caracteristicas_meta_box( $meta_boxes ) {
	$prefix = '';

	$meta_boxes[] = array(
		'id' => 'caracteristica_1',
		'title' => esc_html__( 'Característica 1', 'nboutique' ),
		'post_types' => array('servicios' ),
		'context' => 'advanced',
		'priority' => 'default',
		'autosave' => 'true',
		'fields' => array(
			array(
				'id' => $prefix . 'image_advanced_1',
				'type' => 'image_advanced',
				'name' => esc_html__( 'Imagen', 'nboutique' ),
				'max_file_uploads' => '1',
			),
			array(
				'id' => $prefix . 'text_1',
				'type' => 'text',
				'name' => esc_html__( 'Título', 'nboutique' ),
			),
			array(
				'id' => $prefix . 'textarea_1',
				'type' => 'wysiwyg',
				'name' => esc_html__( 'Texto', 'nboutique' ),
			),
		),
	);

	return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'caracteristicas_meta_box' );

//2
function caracteristicas2_meta_box( $meta_boxes ) {
	$prefix = '';

	$meta_boxes[] = array(
		'id' => 'caracteristica_2',
		'title' => esc_html__( 'Característica 2', 'nboutique' ),
		'post_types' => array('servicios' ),
		'context' => 'advanced',
		'priority' => 'default',
		'autosave' => 'true',
		'fields' => array(
			array(
				'id' => $prefix . 'image_advanced_2',
				'type' => 'image_advanced',
				'name' => esc_html__( 'Imagen', 'nboutique' ),
				'max_file_uploads' => '1',
			),
			array(
				'id' => $prefix . 'text_2',
				'type' => 'text',
				'name' => esc_html__( 'Título', 'nboutique' ),
			),
			array(
				'id' => $prefix . 'textarea_2',
				'type' => 'wysiwyg',
				'name' => esc_html__( 'Texto', 'nboutique' ),
			),
			array(
				'id' => $prefix . 'image_info_2',
				'type' => 'image_advanced',
				'name' => esc_html__( 'Infografía', 'nboutique' ),
				'max_file_uploads' => '1',
			),
			// array(
			// 	'id' => $prefix . 'post_2',
			// 	'type' => 'post',
			// 	'name' => esc_html__( 'Post Election', 'nboutique' ),
			// 	'post_type' => array('servicios', 'page',),
			// 	'field_type' => 'select_advanced',
			// ),
		),
	);

	return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'caracteristicas2_meta_box' );


//3
function caracteristicas3_meta_box( $meta_boxes ) {
	$prefix = '';

	$meta_boxes[] = array(
		'id' => 'caracteristica_3',
		'title' => esc_html__( 'Característica 3', 'nboutique' ),
		'post_types' => array('servicios' ),
		'context' => 'advanced',
		'priority' => 'default',
		'autosave' => 'true',
		'fields' => array(
			array(
				'id' => $prefix . 'image_advanced_3',
				'type' => 'image_advanced',
				'name' => esc_html__( 'Imagen', 'nboutique' ),
				'max_file_uploads' => '1',
			),
			array(
				'id' => $prefix . 'text_3',
				'type' => 'text',
				'name' => esc_html__( 'Título', 'nboutique' ),
			),
			array(
				'id' => $prefix . 'textarea_3',
				'type' => 'wysiwyg',
				'name' => esc_html__( 'Texto', 'nboutique' ),
			),
		),
	);

	return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'caracteristicas3_meta_box' );




// Características Variedades
class Variedades_Meta_Box {
	private $screens = array(
		'variedades',
	);
	private $fields = array(
		array(
			'id' => 'floracin',
			'label' => 'Floración',
			'type' => 'text',
		),
		array(
			'id' => 'cosecha',
			'label' => 'Cosecha',
			'type' => 'text',
		),
		array(
			'id' => 'fruto',
			'label' => 'Fruto',
			'type' => 'text',
		),
		array(
			'id' => 'polonizantes',
			'label' => 'Polonizantes',
			'type' => 'text',
		),
	);

	/**
	 * Class construct method. Adds actions to their respective WordPress hooks.
	 */
	public function __construct() {
		add_action( 'add_meta_boxes', array( $this, 'add_meta_boxes' ) );
		add_action( 'save_post', array( $this, 'save_post' ) );
	}

	/**
	 * Hooks into WordPress' add_meta_boxes function.
	 * Goes through screens (post types) and adds the meta box.
	 */
	public function add_meta_boxes() {
		foreach ( $this->screens as $screen ) {
			add_meta_box(
				'caractersticas',
				__( 'Características', 'nboutique' ),
				array( $this, 'add_meta_box_callback' ),
				$screen,
				'advanced',
				'default'
			);
		}
	}

	/**
	 * Generates the HTML for the meta box
	 *
	 * @param object $post WordPress post object
	 */
	public function add_meta_box_callback( $post ) {
		wp_nonce_field( 'caractersticas_data', 'caractersticas_nonce' );
		$this->generate_fields( $post );
	}

	/**
	 * Generates the field's HTML for the meta box.
	 */
	public function generate_fields( $post ) {
		$output = '';
		foreach ( $this->fields as $field ) {
			$label = '<label for="' . $field['id'] . '">' . $field['label'] . '</label>';
			$db_value = get_post_meta( $post->ID, 'caractersticas_' . $field['id'], true );
			switch ( $field['type'] ) {
				default:
					$input = sprintf(
						'<input %s id="%s" name="%s" type="%s" value="%s">',
						$field['type'] !== 'color' ? 'class="regular-text"' : '',
						$field['id'],
						$field['id'],
						$field['type'],
						$db_value
					);
			}
			$output .= $this->row_format( $label, $input );
		}
		echo '<table class="form-table"><tbody>' . $output . '</tbody></table>';
	}

	/**
	 * Generates the HTML for table rows.
	 */
	public function row_format( $label, $input ) {
		return sprintf(
			'<tr><th scope="row">%s</th><td>%s</td></tr>',
			$label,
			$input
		);
	}
	/**
	 * Hooks into WordPress' save_post function
	 */
	public function save_post( $post_id ) {
		if ( ! isset( $_POST['caractersticas_nonce'] ) )
			return $post_id;

		$nonce = $_POST['caractersticas_nonce'];
		if ( !wp_verify_nonce( $nonce, 'caractersticas_data' ) )
			return $post_id;

		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
			return $post_id;

		foreach ( $this->fields as $field ) {
			if ( isset( $_POST[ $field['id'] ] ) ) {
				switch ( $field['type'] ) {
					case 'email':
						$_POST[ $field['id'] ] = sanitize_email( $_POST[ $field['id'] ] );
						break;
					case 'text':
						$_POST[ $field['id'] ] = sanitize_text_field( $_POST[ $field['id'] ] );
						break;
				}
				update_post_meta( $post_id, 'caractersticas_' . $field['id'], $_POST[ $field['id'] ] );
			} else if ( $field['type'] === 'checkbox' ) {
				update_post_meta( $post_id, 'caractersticas_' . $field['id'], '0' );
			}
		}
	}
}
new Variedades_Meta_Box;



/**
 * Generated by the WordPress Meta Box Generator at http://goo.gl/8nwllb
 */
class Plantas_Meta_Box {
	private $screens = array(
		'plantas',
	);
	private $fields = array(
		array(
			'id' => 'tipo-de-entrega',
			'label' => 'Tipo de Entrega',
			'type' => 'text',
		),
		array(
			'id' => 'descripcin',
			'label' => 'Descripción',
			'type' => 'textarea',
		),
		array(
			'id' => 'fecha-de-entrega',
			'label' => 'Fecha de Entrega',
			'type' => 'text',
		),
		array(
			'id' => 'fecha-de-reserva',
			'label' => 'Fecha de Reserva',
			'type' => 'text',
		),
		array(
			'id' => 'detalles',
			'label' => 'Detalles',
			'type' => 'wpeditor',
		),
	);

	/**
	 * Class construct method. Adds actions to their respective WordPress hooks.
	 */
	public function __construct() {
		add_action( 'add_meta_boxes', array( $this, 'add_meta_boxes' ) );
		add_action( 'save_post', array( $this, 'save_post' ) );
	}

	/**
	 * Hooks into WordPress' add_meta_boxes function.
	 * Goes through screens (post types) and adds the meta box.
	 */
	public function add_meta_boxes() {
		foreach ( $this->screens as $screen ) {
			add_meta_box(
				'especificaciones',
				__( 'Especificaciones', 'nboutique' ),
				array( $this, 'add_meta_box_callback' ),
				$screen,
				'normal',
				'default'
			);
		}
	}

	/**
	 * Generates the HTML for the meta box
	 *
	 * @param object $post WordPress post object
	 */
	public function add_meta_box_callback( $post ) {
		wp_nonce_field( 'especificaciones_data', 'especificaciones_nonce' );
		$this->generate_fields( $post );
	}

	/**
	 * Generates the field's HTML for the meta box.
	 */
	public function generate_fields( $post ) {
		$output = '';
		foreach ( $this->fields as $field ) {
			$label = '<label for="' . $field['id'] . '">' . $field['label'] . '</label>';
			$db_value = get_post_meta( $post->ID, 'especificaciones_' . $field['id'], true );
			switch ( $field['type'] ) {
				case 'textarea':
					$input = sprintf(
						'<textarea class="large-text" id="%s" name="%s" rows="5">%s</textarea>',
						$field['id'],
						$field['id'],
						$db_value
					);
					break;
				case 'wpeditor':
          ob_start();
              wp_editor( $db_value, $field['id'], array(
                  'textarea_name' => $field['id'],
                  'textarea_rows' => 7, //slightly reducing the height
              ) );
              $input = ob_get_clean();
              break;
				default:
					$input = sprintf(
						'<input %s id="%s" name="%s" type="%s" value="%s">',
						$field['type'] !== 'color' ? 'class="regular-text"' : '',
						$field['id'],
						$field['id'],
						$field['type'],
						$db_value
					);
			}
			$output .= $this->row_format( $label, $input );
		}
		echo '<table class="form-table"><tbody>' . $output . '</tbody></table>';
	}

	/**
	 * Generates the HTML for table rows.
	 */
	public function row_format( $label, $input ) {
		return sprintf(
			'<tr><th scope="row">%s</th><td>%s</td></tr>',
			$label,
			$input
		);
	}
	/**
	 * Hooks into WordPress' save_post function
	 */
	public function save_post( $post_id ) {
		if ( ! isset( $_POST['especificaciones_nonce'] ) )
			return $post_id;

		$nonce = $_POST['especificaciones_nonce'];
		if ( !wp_verify_nonce( $nonce, 'especificaciones_data' ) )
			return $post_id;

		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
			return $post_id;

		foreach ( $this->fields as $field ) {
			if ( isset( $_POST[ $field['id'] ] ) ) {
				switch ( $field['type'] ) {
					case 'email':
						$_POST[ $field['id'] ] = sanitize_email( $_POST[ $field['id'] ] );
						break;
					case 'text':
						$_POST[ $field['id'] ] = sanitize_text_field( $_POST[ $field['id'] ] );
						break;
				}
				update_post_meta( $post_id, 'especificaciones_' . $field['id'], $_POST[ $field['id'] ] );
			} else if ( $field['type'] === 'checkbox' ) {
				update_post_meta( $post_id, 'especificaciones_' . $field['id'], '0' );
			}
		}
	}
}
new Plantas_Meta_Box;


// Equipo Metabox
class Equipo_Meta_Box {
	private $screens = array(
		'equipo',
	);
	private $fields = array(
		array(
			'id' => 'cargo',
			'label' => 'Cargo',
			'type' => 'text',
		),
		array(
			'id' => 'correo',
			'label' => 'Correo',
			'type' => 'text',
		),
		array(
			'id' => 'nmero-de-contacto',
			'label' => 'Número de Contacto',
			'type' => 'text',
		),
	);

	/**
	 * Class construct method. Adds actions to their respective WordPress hooks.
	 */
	public function __construct() {
		add_action( 'add_meta_boxes', array( $this, 'add_meta_boxes' ) );
		add_action( 'save_post', array( $this, 'save_post' ) );
	}

	/**
	 * Hooks into WordPress' add_meta_boxes function.
	 * Goes through screens (post types) and adds the meta box.
	 */
	public function add_meta_boxes() {
		foreach ( $this->screens as $screen ) {
			add_meta_box(
				'datos',
				__( 'Datos', 'nboutique' ),
				array( $this, 'add_meta_box_callback' ),
				$screen,
				'advanced',
				'default'
			);
		}
	}

	/**
	 * Generates the HTML for the meta box
	 *
	 * @param object $post WordPress post object
	 */
	public function add_meta_box_callback( $post ) {
		wp_nonce_field( 'datos_data', 'datos_nonce' );
		$this->generate_fields( $post );
	}

	/**
	 * Generates the field's HTML for the meta box.
	 */
	public function generate_fields( $post ) {
		$output = '';
		foreach ( $this->fields as $field ) {
			$label = '<label for="' . $field['id'] . '">' . $field['label'] . '</label>';
			$db_value = get_post_meta( $post->ID, 'datos_' . $field['id'], true );
			switch ( $field['type'] ) {
				default:
					$input = sprintf(
						'<input %s id="%s" name="%s" type="%s" value="%s">',
						$field['type'] !== 'color' ? 'class="regular-text"' : '',
						$field['id'],
						$field['id'],
						$field['type'],
						$db_value
					);
			}
			$output .= $this->row_format( $label, $input );
		}
		echo '<table class="form-table"><tbody>' . $output . '</tbody></table>';
	}

	/**
	 * Generates the HTML for table rows.
	 */
	public function row_format( $label, $input ) {
		return sprintf(
			'<tr><th scope="row">%s</th><td>%s</td></tr>',
			$label,
			$input
		);
	}
	/**
	 * Hooks into WordPress' save_post function
	 */
	public function save_post( $post_id ) {
		if ( ! isset( $_POST['datos_nonce'] ) )
			return $post_id;

		$nonce = $_POST['datos_nonce'];
		if ( !wp_verify_nonce( $nonce, 'datos_data' ) )
			return $post_id;

		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
			return $post_id;

		foreach ( $this->fields as $field ) {
			if ( isset( $_POST[ $field['id'] ] ) ) {
				switch ( $field['type'] ) {
					case 'email':
						$_POST[ $field['id'] ] = sanitize_email( $_POST[ $field['id'] ] );
						break;
					case 'text':
						$_POST[ $field['id'] ] = sanitize_text_field( $_POST[ $field['id'] ] );
						break;
				}
				update_post_meta( $post_id, 'datos_' . $field['id'], $_POST[ $field['id'] ] );
			} else if ( $field['type'] === 'checkbox' ) {
				update_post_meta( $post_id, 'datos_' . $field['id'], '0' );
			}
		}
	}
}
new Equipo_Meta_Box;


// SLIDER Botón y selector destino CTA
function selector_destination_meta_box( $meta_boxes ) {
	$prefix = '';

	$meta_boxes[] = array(
		'id' => 'selector-d',
		'title' => esc_html__( 'Botón Llamada a la acción', 'nboutique' ),
		'post_types' => array('diapositivas' ),
		'context' => 'advanced',
		'priority' => 'default',
		'autosave' => 'true',
		'fields' => array(
			array(
				'id' => $prefix . 'button_text',
				'type' => 'text',
				'name' => esc_html__( 'Texto del Botón', 'nboutique' ),
				'std' => 'Más Información',
				'placeholder' => esc_html__( 'Más información', 'nboutique' ),
			),
			array(
				'id' => $prefix . 'destiny_1',
				'type' => 'post',
				'name' => esc_html__( 'Destino', 'nboutique' ),
				'post_type' => array(
					'servicios', 'page'
				),
				'field_type' => 'select',
				'placeholder' => esc_html__( 'Selecciona un destino', 'nboutique' ),
			),
		),
	);

	return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'selector_destination_meta_box' );



// Característica Destacada 1 Inicio
class Caracteristicas_index_Meta_Box {
	private $screens = array(
		'page',
	);
	private $fields = array(
		array(
			'id' => 'imagen',
			'label' => 'Imagen',
			'type' => 'media',
		),
		array(
			'id' => 'ttulo',
			'label' => 'Título',
			'type' => 'text',
		),
		array(
			'id' => 'texto',
			'label' => 'Texto',
			'type' => 'textarea',
		),
		array(
			'id' => 'texto-del-botn',
			'label' => 'Texto del Botón',
			'type' => 'text',
		),
		array(
			'id' => 'destino-del-boton',
			'label' => 'Destino del Botón',
			'type' => 'wcselect',
		),
	);

	/**
	 * Class construct method. Adds actions to their respective WordPress hooks.
	 */
	public function __construct() {
		add_action( 'add_meta_boxes', array( $this, 'add_meta_boxes' ) );
		add_action( 'admin_footer', array( $this, 'admin_footer' ) );
		add_action( 'save_post', array( $this, 'save_post' ) );
	}

	/**
	 * Hooks into WordPress' add_meta_boxes function.
	 * Goes through screens (post types) and adds the meta box.
	 */
		public function add_meta_boxes() {
        // Aquí esta la magia
        global $post;
        if(!empty($post)){
            $pageTemplate = get_post_meta($post->ID, '_wp_page_template', true);
            if($pageTemplate == 'page-index.php' )
            {
                // Esto es lo normal
								foreach ( $this->screens as $screen ) {
									add_meta_box(
										'caracterstica-destacada-1',
										__( 'Característica Destacada 1', 'nboutique' ),
										array( $this, 'add_meta_box_callback' ),
										$screen,
										'advanced',
										'default'
									);
								}
            }
        }
    }

	/**
	 * Generates the HTML for the meta box
	 *
	 * @param object $post WordPress post object
	 */
	public function add_meta_box_callback( $post ) {
		wp_nonce_field( 'caracterstica_destacada_1_data', 'caracterstica_destacada_1_nonce' );
		$this->generate_fields( $post );
	}

	/**
	 * Hooks into WordPress' admin_footer function.
	 * Adds scripts for media uploader.
	 */
	public function admin_footer() {
		?><script>
			// https://codestag.com/how-to-use-wordpress-3-5-media-uploader-in-theme-options/
			jQuery(document).ready(function($){
				if ( typeof wp.media !== 'undefined' ) {
					var _custom_media = true,
					_orig_send_attachment = wp.media.editor.send.attachment;
					$('.caracteristica-indexuno-metabox-media').click(function(e) {
						var send_attachment_bkp = wp.media.editor.send.attachment;
						var button = $(this);
						var id = button.attr('id').replace('_button', '');
						_custom_media = true;
							wp.media.editor.send.attachment = function(props, attachment){
							if ( _custom_media ) {
								$("#"+id).val(attachment.url);
							} else {
								return _orig_send_attachment.apply( this, [props, attachment] );
							};
						}
						wp.media.editor.open(button);
						return false;
					});
					$('.add_media').on('click', function(){
						_custom_media = false;
					});
				}
			});
		</script><?php
	}

	/**
	 * Generates the field's HTML for the meta box.
	 */
	public function generate_fields( $post ) {
		$output = '';
		foreach ( $this->fields as $field ) {
			$label = '<label for="' . $field['id'] . '">' . $field['label'] . '</label>';
			$db_value = get_post_meta( $post->ID, 'caracterstica_destacada_1_' . $field['id'], true );
			switch ( $field['type'] ) {
				case 'media':
					$input = sprintf(
						'<input class="regular-text" id="%s" name="%s" type="text" value="%s"> <input class="button caracteristica-indexuno-metabox-media" id="%s_button" name="%s_button" type="button" value="Subir" />',
						$field['id'],
						$field['id'],
						$db_value,
						$field['id'],
						$field['id']
					);
					break;
				case 'select':
					$input = sprintf(
						'<select id="%s" name="%s">',
						$field['id'],
						$field['id']
					);
					foreach ( $field['options'] as $key => $value ) {
						$field_value = !is_numeric( $key ) ? $key : $value;
						$input .= sprintf(
							'<option %s value="%s">%s</option>',
							$db_value === $field_value ? 'selected' : '',
							$field_value,
							$value
						);
					}
					$input .= '</select>';
					break;
				case 'textarea':
					$input = sprintf(
						'<textarea class="large-text" id="%s" name="%s" rows="5">%s</textarea>',
						$field['id'],
						$field['id'],
						$db_value
					);
					break;

					case 'wcselect':
						$args = array(
							'post_type' => array(
								'servicios',
								'page'
							),
							'posts_per_page' => -1,
						);
						$products = get_posts( $args );
						$input = sprintf(
							'<select id="%s" name="%s">',
							$field['id'],
							$field['id']
						);
						foreach ( $products as $product ) {
							$sProducts[$product->ID] = get_the_title($product->ID);
						}
						foreach ( $sProducts as $key => $value ) {
							// $field_value = !is_numeric( $key ) ? $key : $value;
							$input .= sprintf(
								'<option %s="" value="%s">%s</option>',
								$db_value == $key ? 'selected' : '',
								$key,
								$value
							);
						}
						$input .= '</select>';
						break;

				default:
					$input = sprintf(
						'<input %s id="%s" name="%s" type="%s" value="%s">',
						$field['type'] !== 'color' ? 'class="regular-text"' : '',
						$field['id'],
						$field['id'],
						$field['type'],
						$db_value
					);
			}
			$output .= $this->row_format( $label, $input );
		}
		echo '<table class="form-table"><tbody>' . $output . '</tbody></table>';
	}

	/**
	 * Generates the HTML for table rows.
	 */
	public function row_format( $label, $input ) {
		return sprintf(
			'<tr><th scope="row">%s</th><td>%s</td></tr>',
			$label,
			$input
		);
	}
	/**
	 * Hooks into WordPress' save_post function
	 */
	public function save_post( $post_id ) {
		if ( ! isset( $_POST['caracterstica_destacada_1_nonce'] ) )
			return $post_id;

		$nonce = $_POST['caracterstica_destacada_1_nonce'];
		if ( !wp_verify_nonce( $nonce, 'caracterstica_destacada_1_data' ) )
			return $post_id;

		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
			return $post_id;

		foreach ( $this->fields as $field ) {
			if ( isset( $_POST[ $field['id'] ] ) ) {
				switch ( $field['type'] ) {
					case 'email':
						$_POST[ $field['id'] ] = sanitize_email( $_POST[ $field['id'] ] );
						break;
					case 'text':
						$_POST[ $field['id'] ] = sanitize_text_field( $_POST[ $field['id'] ] );
						break;
				}
				update_post_meta( $post_id, 'caracterstica_destacada_1_' . $field['id'], $_POST[ $field['id'] ] );
			} else if ( $field['type'] === 'checkbox' ) {
				update_post_meta( $post_id, 'caracterstica_destacada_1_' . $field['id'], '0' );
			}
		}
	}
}
new Caracteristicas_index_Meta_Box;






// Característica Destacada 2 Inicio
class Caracteristicas_index_dos_Meta_Box {
	private $screens = array(
		'page',
	);
	private $fields = array(
		array(
			'id' => 'imagen_dos',
			'label' => 'Imagen',
			'type' => 'media',
		),
		array(
			'id' => 'ttulo_dos',
			'label' => 'Título',
			'type' => 'text',
		),
		array(
			'id' => 'texto_dos',
			'label' => 'Texto',
			'type' => 'textarea',
		),
		array(
			'id' => 'texto-del-botn_dos',
			'label' => 'Texto del Botón',
			'type' => 'text',
		),
		array(
			'id' => 'destino-del-boton_dos',
			'label' => 'Destino del Botón',
			'type' => 'wcselectdue',
		),
	);

	/**
	 * Class construct method. Adds actions to their respective WordPress hooks.
	 */
	public function __construct() {
		add_action( 'add_meta_boxes', array( $this, 'add_meta_boxes' ) );
		add_action( 'admin_footer', array( $this, 'admin_footer' ) );
		add_action( 'save_post', array( $this, 'save_post' ) );
	}

	/**
	 * Hooks into WordPress' add_meta_boxes function.
	 * Goes through screens (post types) and adds the meta box.
	 */

	public function add_meta_boxes() {
			// Aquí esta la magia
			global $post;
			if(!empty($post)){
					$pageTemplate = get_post_meta($post->ID, '_wp_page_template', true);
					if($pageTemplate == 'page-index.php' )
					{
							// Esto es lo normal
							foreach ( $this->screens as $screen ) {
								add_meta_box(
									'caracterstica-destacada-2',
									__( 'Característica Destacada 2', 'nboutique' ),
									array( $this, 'add_meta_box_callback' ),
									$screen,
									'advanced',
									'default'
								);
							}
					}
			}
	}

	/**
	 * Generates the HTML for the meta box
	 *
	 * @param object $post WordPress post object
	 */
	public function add_meta_box_callback( $post ) {
		wp_nonce_field( 'caracterstica_destacada_2_data', 'caracterstica_destacada_2_nonce' );
		$this->generate_fields( $post );
	}

	/**
	 * Hooks into WordPress' admin_footer function.
	 * Adds scripts for media uploader.
	 */
	public function admin_footer() {
		?><script>
			// https://codestag.com/how-to-use-wordpress-3-5-media-uploader-in-theme-options/
			jQuery(document).ready(function($){
				if ( typeof wp.media !== 'undefined' ) {
					var _custom_media = true,
					_orig_send_attachment = wp.media.editor.send.attachment;
					$('.caracteristica-indexdos-metabox-media').click(function(e) {
						var send_attachment_bkp = wp.media.editor.send.attachment;
						var button = $(this);
						var id = button.attr('id').replace('_button', '');
						_custom_media = true;
							wp.media.editor.send.attachment = function(props, attachment){
							if ( _custom_media ) {
								$("#"+id).val(attachment.url);
							} else {
								return _orig_send_attachment.apply( this, [props, attachment] );
							};
						}
						wp.media.editor.open(button);
						return false;
					});
					$('.add_media').on('click', function(){
						_custom_media = false;
					});
				}
			});
		</script><?php
	}

	/**
	 * Generates the field's HTML for the meta box.
	 */
	public function generate_fields( $post ) {
		$output = '';
		foreach ( $this->fields as $field ) {
			$label = '<label for="' . $field['id'] . '">' . $field['label'] . '</label>';
			$db_value = get_post_meta( $post->ID, 'caracterstica_destacada_2_' . $field['id'], true );
			switch ( $field['type'] ) {
				case 'media':
					$input = sprintf(
						'<input class="regular-text" id="%s" name="%s" type="text" value="%s"> <input class="button caracteristica-indexdos-metabox-media" id="%s_button" name="%s_button" type="button" value="Subir" />',
						$field['id'],
						$field['id'],
						$db_value,
						$field['id'],
						$field['id']
					);
					break;
				case 'select':
					$input = sprintf(
						'<select id="%s" name="%s">',
						$field['id'],
						$field['id']
					);
					foreach ( $field['options'] as $key => $value ) {
						$field_value = !is_numeric( $key ) ? $key : $value;
						$input .= sprintf(
							'<option %s value="%s">%s</option>',
							$db_value === $field_value ? 'selected' : '',
							$field_value,
							$value
						);
					}
					$input .= '</select>';
					break;
				case 'textarea':
					$input = sprintf(
						'<textarea class="large-text" id="%s" name="%s" rows="5">%s</textarea>',
						$field['id'],
						$field['id'],
						$db_value
					);
					break;

					case 'wcselectdue':
						$args = array(
							'post_type' => array(
								'servicios',
								'page'
							),
							'posts_per_page' => -1,
						);
						$products = get_posts( $args );
						$input = sprintf(
							'<select id="%s" name="%s">',
							$field['id'],
							$field['id']
						);
						foreach ( $products as $product ) {
							$sProducts[$product->ID] = get_the_title($product->ID);
						}
						foreach ( $sProducts as $key => $value ) {
							// $field_value = !is_numeric( $key ) ? $key : $value;
							$input .= sprintf(
								'<option %s="" value="%s">%s</option>',
								$db_value == $key ? 'selected' : '',
								$key,
								$value
							);
						}
						$input .= '</select>';
						break;

				default:
					$input = sprintf(
						'<input %s id="%s" name="%s" type="%s" value="%s">',
						$field['type'] !== 'color' ? 'class="regular-text"' : '',
						$field['id'],
						$field['id'],
						$field['type'],
						$db_value
					);
			}
			$output .= $this->row_format( $label, $input );
		}
		echo '<table class="form-table"><tbody>' . $output . '</tbody></table>';
	}

	/**
	 * Generates the HTML for table rows.
	 */
	public function row_format( $label, $input ) {
		return sprintf(
			'<tr><th scope="row">%s</th><td>%s</td></tr>',
			$label,
			$input
		);
	}
	/**
	 * Hooks into WordPress' save_post function
	 */
	public function save_post( $post_id ) {
		if ( ! isset( $_POST['caracterstica_destacada_2_nonce'] ) )
			return $post_id;

		$nonce = $_POST['caracterstica_destacada_2_nonce'];
		if ( !wp_verify_nonce( $nonce, 'caracterstica_destacada_2_data' ) )
			return $post_id;

		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
			return $post_id;

		foreach ( $this->fields as $field ) {
			if ( isset( $_POST[ $field['id'] ] ) ) {
				switch ( $field['type'] ) {
					case 'email':
						$_POST[ $field['id'] ] = sanitize_email( $_POST[ $field['id'] ] );
						break;
					case 'text':
						$_POST[ $field['id'] ] = sanitize_text_field( $_POST[ $field['id'] ] );
						break;
				}
				update_post_meta( $post_id, 'caracterstica_destacada_2_' . $field['id'], $_POST[ $field['id'] ] );
			} else if ( $field['type'] === 'checkbox' ) {
				update_post_meta( $post_id, 'caracterstica_destacada_2_' . $field['id'], '0' );
			}
		}
	}
}
new Caracteristicas_index_dos_Meta_Box;
