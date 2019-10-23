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
				'type' => 'textarea',
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
				'type' => 'textarea',
				'name' => esc_html__( 'Texto', 'nboutique' ),
			),
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
				'type' => 'textarea',
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
