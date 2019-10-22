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
